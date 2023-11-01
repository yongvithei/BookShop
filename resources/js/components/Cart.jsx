import ReactDOM from 'react-dom/client';
import React, { useState, useEffect } from "react";
import axios from "axios";


const ShoppingCart = () => {
  return (
    <div className="block block-rounded js-ecom-div-cart d-none d-xl-block">
      <div className="block-header block-header-default d-flex justify-content-center">
        <form action="" method="POST" onSubmit={e => e.preventDefault()}>
          <div className="input-group">
            <input type="text" className="form-control form-control-alt" id="search" name="search" placeholder="Barcode" />
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
              <tr>
                <td className="fw-semibold fs-sm">
                  <a href="">Carol White</a>
                </td>
                <td className="d-sm-table-cell">
                  <div className="d-flex align-items-center">
                    <input type="number" className="form-control" id="count" name="count" value="1" min="0" max="999" step="1" />
                    <button type="button" className="btn btn-sm btn btn-danger ms-1">
                      <i className="far fa-trash-can"></i>
                    </button>
                  </div>
                </td>
                <td className="d-sm-table-cell text-center">
                  <a href="">1000$</a>
                </td>
              </tr>
              <tr className="table-active">
                <td className="text-end" colSpan="2">
                  <span className="h4 fw-medium">Total</span>
                </td>
                <td className="text-end">
                  <span className="h4 fw-semibold">$100</span>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div className="block-content block-content-full bg-body-light text-end">
        <a className="btn btn-light mx-2" href="">
          Cancel
        </a>
        <a className="btn btn-primary" href="">
          Submit
          <i className="fa fa-arrow-right opacity-50"></i>
        </a>
      </div>
    </div>
  );
};

const SellingInfo = () => {

  const [customers, setCustomers] = useState([]);

  const loadCustomers = () => {
    axios.get(`/pos/customers`).then((res) => {
      const customers = res.data;

      setCustomers(customers);
    })
    .catch((error) => {
      console.error("Error loading customers: ", error);
    });
  };
    useEffect(() => {
      loadCustomers();
    },[]);

  return (
    <div className="block block-rounded js-ecom-div-nav d-none d-xl-block">
      <div className="block-header block-header-default">
        <h3 className="block-title">
          <i className="fa fa-fw fa-boxes text-muted me-1"></i>Selling information
        </h3>
      </div>
      <div className="block-content">
        <div className="mb-4">
          <label className="form-label" htmlFor="val-select1">Customer<span className="text-danger"> *</span></label>
          <select className="form-select" id="val-select1" name="val-select1" style={{ width: '100%' }}>
            {customers.map((cus) => (
                <option key={cus.id} value={cus.id}>{`${cus.name}`}</option>
              ))}
          </select>
        </div>
        <div className="mb-4">
          <label className="form-label" htmlFor="val-select2">Payment Type<span className="text-danger"> *</span></label>
          <select className="js-select2 form-select" id="val-select2" name="val-select2" style={{ width: '100%' }}>
            <option value="cash" defaultValue>Cash</option>
            <option value="bank">Online Bank</option>
          </select>
        </div>
      </div>
    </div>
  );
};

const Product = () => {
  const [products, setProducts] = useState([]);

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

  useEffect(() => {
    loadProducts();
  },[]);
  return (
   <div>
       <form className="js-form-icon-search mb-2" action="" method="POST">
           <div className="input-group input-group-lg">
               <input type="text" className="js-icon-search form-control fs-base" placeholder="Search Product" />
               <span className="input-group-text">
                   <i className="fa fa-search"></i>
               </span>
           </div>
       </form>
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
       {/* {products.map((p) => (
                            <div>
                                <img src={p.image_url} alt="" />
                                <h5
                                    style={
                                        window.APP.warning_quantity > p.quantity
                                            ? { color: "red" }
                                            : {}
                                    }
                                >
                                    {p.name}({p.quantity})
                                </h5>
                            </div>
                        ))} */}
       {/* Products */}
       <div className="row items-push">
       {products.map((pro) => (

           <div key={pro.id} className="col-md-6 col-xl-3">
               <div className="block block-rounded h-100 mb-0">
                   <div className="block-content p-1">
                       <div className="options-container">
                           <img className="img-fluid options-item"
                               src={pro.thumbnail} alt="" />
                           <div className="options-overlay bg-black-75">
                               <div className="options-overlay-content">
                                   <a className="btn btn-sm btn-alt-secondary" href="">
                                       View
                                   </a>
                                   <a className="btn btn-sm btn-alt-secondary" href="">
                                       <i className="fa fa-plus text-success me-1"></i> Add to cart
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
  );
};

const Cart = () => {
return (
  <div>
      <div className="row push">
          <div className="col-xl-5 order-xl-1">
              <ShoppingCart />
              <SellingInfo />
          </div>
          <div className="col-xl-7 order-xl-0">
              <Product />
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
