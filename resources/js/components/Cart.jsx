import ReactDOM from 'react-dom/client';
import React, { useState, useEffect } from "react";
import axios from "axios";
import Swal from "sweetalert2";
import Button from 'react-bootstrap/Button';
import Form from 'react-bootstrap/Form';
import Modal from 'react-bootstrap/Modal';
import InputGroup from 'react-bootstrap/InputGroup';

const Cart = () => {
  const [customers, setCustomers] = useState([]);
  const [carts, setCarts] = useState([]);
  const [products, setProducts] = useState([]);
  const [barcode, setBarcode] = useState('');
  const [search, setSearch] = useState('');
  const [customerId, setCustomerId] = useState('');
  const [payment, setPayment] = useState('Cash');
  const [delayTimer, setDelayTimer] = useState(null);
  const [receivedAmount, setReceivedAmount] = useState(0);
  const [note, setNote] = useState('');

  const [show, setShow] = useState(false);
  const handleClose = () => setShow(false);
  const handleShow = () => setShow(true);

  const loadCustomers = () => {
    axios.get('/pos/customers')
      .then((res) => {
        const customers = res.data;
        setCustomers(customers);
      })
      .catch((error) => {
        console.error('Error loading customers: ', error);
      });
  };

  const loadCart = () => {
    axios.get('/pos/cart')
      .then((res) => {
        const cart = res.data;
        setCarts(cart);
      })
      .catch((error) => {
        console.error('Error loading cart: ', error);
      });
  };

  const loadProducts = async (search = "") => {
    try {
      const query = !!search ? `?search=${search}` : "";
      const res = await axios.get(`/pos/products${query}`);
      const loadedProducts = res.data.data;
      setProducts(loadedProducts);
    } catch (error) {
      console.error('Error loading products: ', error);
    }
  };
  // Add a product to the cart
  const addProductToCart = (pro_code) => {
    const product = products.find((pro) => pro.pro_code === pro_code);
    if (!!product) {
      const cartItem = carts.find((c) => c.id === product.id);
      if (!!cartItem) {
        // Update quantity
        if (product.pro_qty > cartItem.pivot.pro_qty) {
          const updatedCart = carts.map((c) =>
            c.id === product.id
              ? { ...c, pivot: { ...c.pivot, pro_qty: c.pivot.pro_qty + 1 } }
              : c
          );
          setCarts(updatedCart);
        }
      } else if (product.pro_qty > 0) {
        const newCartItem = {
          ...product,
          pivot: { pro_qty: 1, product_id: product.id, user_id: 1 },
        };
        setCarts([...carts, newCartItem]);
      }

      axios
        .post('/pos/cart', { barcode: pro_code }) // Use pro_code for barcode
        .then((res) => {
          // Reload the cart data or perform any other actions
          loadCart();
          // Display a success alert
          const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
              toast.addEventListener('mouseenter', Swal.stopTimer);
              toast.addEventListener('mouseleave', Swal.resumeTimer);
            }
          });
          Toast.fire({
            icon: 'success',
            title: "Product Added Successfully",
          });
        })
        .catch((err) => {
          const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
              toast.addEventListener('mouseenter', Swal.stopTimer);
              toast.addEventListener('mouseleave', Swal.resumeTimer);
            }
          });

          Toast.fire({
            icon: 'error',
            title: err.response.data.message,
          });
        });
    }
  };
  //delete from cart
  const handleClickDelete = (product_id) => {
    axios
      .post('/pos/cart/delete', { product_id, _method: 'DELETE' })
      .then((res) => {
        const updatedCart = carts.filter((c) => c.id !== product_id);
        setCarts(updatedCart);
      });
  };
  //getTotal from cart
  const getTotal = (carts) => {
    return carts.reduce((accumulator, c) => accumulator + c.pivot.pro_qty * c.price, 0).toFixed(2);
  };
  const handleEmptyCart = () => {
    axios.post('/pos/cart/empty', { _method: 'DELETE' }).then((res) => {
      setCarts([]);
    });
  };
  // change qty
  const handleChangeQty = (product_id, qty) => {
    const updatedCart = carts.map((c) => {
      if (c.id === product_id) {
        c.pivot.pro_qty = qty;
      }
      return c;
    });

    setCarts(updatedCart);

    if (!qty) return;

    axios
      .post('/pos/cart/change-qty', { product_id, pro_qty: qty })
      .then((res) => {})
      .catch((err) => {
        Swal.fire('Error!', err.response.data.message, 'error');
      });
  };
  // Barcode OnChange
  const handleOnChangeBarcode = (event) => {
    const newBarcode = event.target.value;
    setBarcode(newBarcode);

    if (!!newBarcode) {
      // If there's already a timer running, clear it
      if (delayTimer) {
        clearTimeout(delayTimer);
      }
      // Set a new timer to wait for a pause in input before sending the request
      const newTimer = setTimeout(() => {
        scanBarcode(newBarcode);
      }, 350); // Adjust the delay time as needed
      setDelayTimer(newTimer);
    }
  }
  //sent from OnChange
  const scanBarcode = (barcode) => {
    axios
      .post("/pos/cart", { barcode })
      .then((res) => {
        // Handle success, e.g., loadCart() and clear the barcode input
        loadCart();
        setBarcode('');
        // Display a success alert
        const Toast = Swal.mixin({
          toast: true,
          position: 'top-end',
          showConfirmButton: false,
          timer: 3000,
          timerProgressBar: true,
          didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer);
            toast.addEventListener('mouseleave', Swal.resumeTimer);
          }
        });
        Toast.fire({
          icon: 'success',
          title: "Product Added Successfully",
        });
      })
      .catch((err) => {
        const Toast = Swal.mixin({
          toast: true,
          position: 'top-end',
          showConfirmButton: false,
          timer: 3000,
          timerProgressBar: true,
          didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer);
            toast.addEventListener('mouseleave', Swal.resumeTimer);
          }
        });

        Toast.fire({
          icon: 'warning',
          title: err.response.data.message,
        });
      });
  }
  //Barcode Scan Submit
  const handleScanBarcode = (event) => {
    event.preventDefault();
    if (!!barcode) {
        axios
            .post("/pos/cart", { barcode })
            .then((res) => {
              loadCart();
              setBarcode('');
            })
            .catch((err) => {
                Swal.fire("Error!", err.response.data.message, "error");
            });
    }
  }
  //Product set new search
  const handleChangeSearch = (event) => {
    const newSearch = event.target.value;
    setSearch(newSearch);
  }
  //Product search with enter
  const handleSearch = (event) => {
    if (event.keyCode === 13) {
      loadProducts(event.target.value);
    }
  }
  //get customer id
  const handleCustomerIdChange = (event) => {
    setCustomerId(event.target.value);
  };
  //get payment
  const handlePaymentChange = (event) => {
    setPayment(event.target.value);
  };
  // handleAmountChange function to update the received amount
   const handleAmountChange = (value) => {
    setReceivedAmount(value);
  };
  //handle Submit
  const handleSubmit = () => {
    // You can make an AJAX request here to submit the form data
    axios.post("/pos/orders", {
      customer_id: customerId,
      amount: getTotal(carts),
      payment: payment,
      received: receivedAmount === "" || receivedAmount === 0 ? getTotal(carts) : receivedAmount,
      note: note,
      // Add other form data fields here
    })
    .then((res) => {
      loadCart();
      // Handle the success case (e.g., show a success message)
    })
    .catch((err) => {
      // Handle errors (e.g., display an error message)
    });

    handleClose(); // Close the modal after submitting
  }

  // Load Data
  useEffect(() => {
    loadCustomers();
    loadCart();
    loadProducts();
  }, []);


return (
  <div>
      <div className="row push">
          <div className="col-xl-5 order-xl-1">
          <div className="block block-rounded js-ecom-div-cart d-none d-xl-block">
      <div className="block-header block-header-default d-flex justify-content-center">
        <form onSubmit={handleScanBarcode}>
          <div className="input-group">
            <input type="text" className="form-control form-control-alt" id="search" name="search" placeholder="Barcode"  value={barcode} onChange={handleOnChangeBarcode}/>
            <span className="input-group-text bg-body border-0">
              <i className="fa fa-barcode"></i>
            </span>
          </div>
        </form>
      </div>
      <div className="block block-rounded">
        <div className="block-content">
          <table className="table table-striped table-vcenter">
            <thead>
              <tr>
                <th>Name</th>
                <th className="text-left" style={{ width: '35%' }}>QTY</th>
                <th className="text-center" style={{ width: '35%' }}>Price</th>
              </tr>
            </thead>
            <tbody>
    {carts.map((c) => (
      <React.Fragment key={c.id}>
        <tr>
          <td className="fw-semibold fs-sm">
            <a href="">{c.name}</a>
          </td>
          <td className="d-sm-table-cell">
            <div className="d-flex align-items-center">
              <input type="number" className="form-control" id="count" name="count" value={c.pivot.pro_qty} min="0" max="99999" step="1"
                onChange={(event) => handleChangeQty(c.id, event.target.value)} />
              <button type="button" className="btn btn-sm btn btn-danger ms-1" onClick={() => handleClickDelete(c.id)}>
                <i className="far fa-trash-can"></i>
              </button>
            </div>
          </td>
          <td className="d-sm-table-cell text-center">
            <a href="">{(c.price * c.pivot.pro_qty).toFixed(2)}$</a>
          </td>
        </tr>
      </React.Fragment>
    ))}
    <tr className="table-active">
      <td className="text-end" colSpan="2">
        <span className="h4 fw-medium">Total</span>
      </td>
      <td className="text-end">
        <span className="h4 fw-semibold">$ {getTotal(carts)}</span>
      </td>
    </tr>
  </tbody>
          </table>
        </div>
      </div>
      <div className="block-content block-content-full bg-body-light text-end">
        <button className="btn btn-light mx-2" onClick={handleEmptyCart} disabled={!carts.length}>
          Cancel
        </button>
        <button type="button" disabled={!carts.length}
                              onClick={handleShow}
                              className="btn btn-primary">
          Submit
          <i className="fa fa-arrow-right opacity-50"></i>
        </button>
      </div>
    </div>
              <div className="block block-rounded js-ecom-div-nav d-none d-xl-block">
      <div className="block-header block-header-default">
        <h3 className="block-title">
          <i className="fa fa-fw fa-boxes text-muted me-1"></i>Selling information
        </h3>
      </div>
      <div className="block-content">
      <Modal show={show} onHide={handleClose}>
          <Modal.Header closeButton>
              <Modal.Title>Selling Info</Modal.Title>
          </Modal.Header>
          <Modal.Body>
              <Form>
                  <Form.Group className="mb-1" controlId="Form.selectPay">
                      <Form.Label>Total Amount</Form.Label>
                      <InputGroup className="mb-1">
                          <InputGroup.Text>$</InputGroup.Text>
                          <Form.Control aria-label="Amount (to the nearest dollar)" value={getTotal(carts)}
                          disabled
                          />
                      </InputGroup>
                  </Form.Group>
                  <Form.Group className="mb-3" controlId="Form.selectPay">
                      <Form.Label>Received Amount</Form.Label>
                      <InputGroup className="mb-3">
                          <InputGroup.Text>$</InputGroup.Text>
                          <Form.Control aria-label="Amount (to the nearest dollar)"
                          placeholder={getTotal(carts)}
                          className="placeholder-text"
                          onChange={(e) => handleAmountChange(e.target.value)}
                          />
                      </InputGroup>
                  </Form.Group>
                  <Form.Group className="mb-3" controlId="Form.selectPay">
                      <Form.Label>Payment Type *</Form.Label>
                      <Form.Select value={payment} onChange={handlePaymentChange}>
                          <option value="Cash">Cash</option>
                          <option value="Online Bank">Online Bank</option>
                      </Form.Select>
                  </Form.Group>
                  <Form.Group className="mb-3" controlId="Form.selectCus">
                      <Form.Label>Customer *</Form.Label>
                      <Form.Select value={customerId} onChange={handleCustomerIdChange}>
                      <option key="0" value="">Walking Customer</option>
                          {customers.map((cus) => (
                          <option key={cus.id} value={cus.id}>{`${cus.name}`}</option>
                          ))}
                      </Form.Select>
                  </Form.Group>
                  <Form.Group className="mb-1" controlId="exampleForm.ControlTextarea1">
                    <Form.Label>Note</Form.Label>
                    <Form.Control value={note} as="textarea" rows={2} onChange={(e) => setNote(e.target.value)} />
                  </Form.Group>
              </Form>
          </Modal.Body>
          <Modal.Footer>
              <Button variant="secondary" onClick={handleClose}>
                  Close
              </Button>
              <Button variant="primary" onClick={() => handleSubmit()}>
                  Save Changes
              </Button>
          </Modal.Footer>
      </Modal>
      </div>
    </div>
          </div>
          <div className="col-xl-7 order-xl-0">
          <div>

           <div className="input-group input-group-lg mb-2">
               <input type="text" className="js-icon-search form-control fs-base" placeholder="Search Product"
                value={search}
                onChange={handleChangeSearch}
                onKeyDown={handleSearch} />
               <span className="input-group-text">
                   <i className="fa fa-search"></i>
               </span>
           </div>

       {/* END Search Section */}
       {/* Sort and Show Filters */}
       <div className="d-flex justify-content-between">
           <div className="mb-3">
               <select id="ecom-results-show" name="ecom-results-show" className="form-select form-select-sm" size="1">
                   <option value="0" defaultValue>SHOW</option>
                   <option value="9">9</option>
                   <option value="18">18</option>
                   <option value="36">36</option>
                   <option value="72">72</option>
               </select>
           </div>
           <div className="mb-3">
               <select id="ecom-results-sort" name="ecom-results-sort" className="form-select form-select-sm" size="1">
                   <option value="0" defaultValue>SORT BY</option>
                   <option value="1">Popularity</option>
                   <option value="2">Name (A to Z)</option>
                   <option value="3">Name (Z to A)</option>
                   <option value="4">Price (Lowest to Highest)</option>
                   <option value="5">Price (Highest to Lowest)</option>
                   <option value="6">Sales (Lowest to Highest)</option>
                   <option value="7">Sales (Highest to Lowest)</option>
               </select>
           </div>
       </div>

       {/* END Sort and Show Filters */}

       {/* Products */}
       <div className="row items-push">
       {products.map((pro) => (
           <div className="col-md-6 col-xl-3" key={pro.id}>
               <div className="block block-rounded h-100 mb-0">
                   <div className="block-content p-1">
                       <div className="options-container">
                           <img className="img-fluid options-item"
                               src={pro.thumbnail} alt="" />
                           <div className="options-overlay bg-black-75">
                               <div className="options-overlay-content">
                                   <a className="btn btn-sm btn-alt-secondary" href={`/product/${pro.id}/edit`}>
                                   <i className="fa fa-eye me-1"></i> View
                                   </a>
                               </div>
                           </div>
                       </div>
                   </div>
                   <div className="block-content">
                       <div className="mb-2">
                           <div className="fw-semibold float-end ms-1">$ {pro.price}</div>
                           <a className="h6" href="">
                           {pro.name}
                           </a>
                       </div>
                       <div className="mb-2">
                       <a className="btn btn-sm btn-alt-secondary" onClick={() => addProductToCart(pro.pro_code)}>
                           <i className="fa fa-plus text-success me-1"></i> Add to cart
                       </a>
                       </div>
                   </div>
               </div>

           </div>))}
       </div>

       {/* END Products */}
       <div className="text-end">
           <a className="btn btn-alt-secondary" href="">
               Next Page <i className="fa fa-arrow-right ms-1"></i>
           </a>
       </div>
   </div>
          </div>
      </div>
  </div>
  );
};

export default Cart;

if (document.getElementById("cart")) {
  const root = ReactDOM.createRoot(document.getElementById('cart'));
  root.render(
  <Cart />);
}
