import ReactDOM from 'react-dom/client';
import React, { useState } from 'react';

const Cart = () => {
  // Define your state for cart items
  const [cartItems, setCartItems] = useState([]);

  // Function to add items to the cart
  const addItemToCart = (item) => {
    setCartItems([...cartItems, item]);
  };

  return (
    <div>
      <h1>Shopping Cart</h1>
      <ul>
        {cartItems.map((item, index) => (
          <li key={index}>{item}</li>
        ))}
      </ul>
      <button onClick={() => addItemToCart("Item 1")}>Add Item 1</button>
      <button onClick={() => addItemToCart("Item 2")}>Add Item 2</button>
    </div>
  );
};

export default Cart;



if (document.getElementById("cart")) {
    const root = ReactDOM.createRoot(document.getElementById('cart'));
    root.render(<Cart />);
  }