<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>*, *::after, *::before {padding: 0;margin: 0;box-sizing: border-box;}:root {--blue-color: #0c2f54;--dark-color: #535b61;--white-color: #fff;}ul {list-style-type: none;}ul li {margin: 2px 0;}.text-end {text-align: right;}.text-start {text-align: left;}.text-bold {font-weight: 700;}.hr {height: 1px;background-color: rgba(0, 0, 0, 0.1);}.border-bottom {border-bottom: 1px solid rgba(0, 0, 0, 0.1);}body {font-family: 'Poppins', sans-serif;color: var(--dark-color);font-size: 14px;}.invoice-wrapper {min-height: 100vh;padding-top: 20px;padding-bottom: 20px;}.invoice {max-width: 850px;margin-right: auto;margin-left: auto;padding: 70px;border: 1px solid rgba(0, 0, 0, 0.2);border-radius: 5px;min-height: 920px;}.invoice-head-top-left img {width: 130px;}.invoice-head-top-right h3 {font-weight: 500;font-size: 27px;color: var(--blue-color);}.invoice-head-middle, .invoice-head-bottom {padding: 16px 0;}.invoice-body {border: 1px solid rgba(0, 0, 0, 0.1);border-radius: 4px;overflow: hidden;}.invoice-body table {border-collapse: collapse;border-radius: 4px;width: 100%;}.invoice-body table td, .invoice-body table th {padding: 12px;}.invoice-body table tr {border-bottom: 1px solid rgba(0, 0, 0, 0.1);}.invoice-body table thead {background-color: rgba(0, 0, 0, 0.02);}.invoice-body-info-item {display: grid;grid-template-columns: 80% 20%;}.invoice-body-info-item .info-item-td {padding: 12px;background-color: rgba(0, 0, 0, 0.02);}.invoice-foot p {font-size: 12px;}.invoice-head-top, .invoice-head-middle, .invoice-head-bottom {display: grid;grid-template-columns: repeat(2, 1fr);padding-bottom: 10px;}@media screen and (max-width: 992px) {.invoice {padding: 40px;}}@media screen and (max-width: 576px) {.invoice-head-top, .invoice-head-middle, .invoice-head-bottom {grid-template-columns: repeat(1, 1fr);}.invoice-head-bottom-right {margin-top: 12px;margin-bottom: 12px;}.invoice * {text-align: left;}.invoice {padding: 28px;}}.invoice-body {min-width: 600px;}@media print {.print-area {visibility: visible;width: 100%;position: absolute;left: 0;top: 0;overflow: hidden;}.invoice-btns {display: none;}}</style>
    </head>
    <body>
  <div class="invoice-wrapper" id="print-area">
    <div class="invoice">
      <div class="invoice-container">
        <div class="invoice-head">
          <div class="invoice-head-top">
            <div class="invoice-head-top-left text-start">
              <h2 style="color:#000;font-size:26px">
                <strong>Ponleu Vichea</strong>
              </h2>
            </div>
            <div class="invoice-head-top-right text-end">
              <h3>Invoice</h3>
            </div>
          </div>
          <div class="hr"></div>
          <div class="invoice-head-middle">
            <table width="100%" style="background:#fff;" class="font">
              <tr>
                <td>
                  <div class="invoice-head-middle-left text-start">
                    <p>
                      <span class="text-bold">Order Date</span>:{{ $order->order_date }}
                    </p>
                  </div>
                </td>
                <td>
                  <div class="invoice-head-middle-right text-end">
                    <p>
                      <br>Email:ponleuvichea@support.com <br>MOB: 12345678 <br>Battabang 12006 <br>
                    </p>
                  </div>
                </td>
              </tr>
            </table>
          </div>

          <div class="hr"></div>
          <table width="100%" style="background:#fff;" class="font">
            <tr>
              <td>
                <div class="invoice-head-bottom">
                  <div class="invoice-head-bottom-left">
                    <ul>
                      <li class="text-bold">Shipping info:</li>
                      <li>Name: {{ $order->name }}</li>
                      <li>Email: {{ $order->email }}</li>
                      <li>Phone: {{ $order->phone }}</li>@php $city = $order->city->name; $dis = $order->district->name; @endphp <li>Address: <br>{{ $city }}/ {{ $dis }}
                        <br>{{ $order->post_code }}
                      </li>
                    </ul>
                  </div>
                </div>
              </td>
              <td>
                <div class="invoice-head-bottom-right">
                  <ul class="text-end">
                    <li>Invoice No: #{{ $order->invoice_no }}</li>
                    <li>Order Date: {{ $order->order_date }}
                    </li>
                    <li>Payment Type: {{ $order->payment_method }}</li>
                    <li>Delivery Date: {{ $order->delivered_date }}</li>
                  </ul>
                </div>
              </td>
            </tr>
          </table>
        </div>
      </div>
      <div class="invoice-body">
        <table>
          <thead>
            <tr>
              <td class="text-bold">Product Name</td>
              <td class="text-bold">Code</td>
              <td class="text-bold">Quantity</td>
              <td class="text-bold">Amount</td>
            </tr>
          </thead>
          <tbody>
          @php
              $totalPrice = 0;
          @endphp
          @foreach($orderItem as $item) <tr class="font">
              <td>{{ $item->product->name }}</td>
              <td>{{ $item->product->pro_code }}</td>
              <td>{{ $item->qty }}</td>
              <td>${{ $item->price }}</td>
              @php
                  $totalPrice = $item->price*$item->qty;
              @endphp
            </tr>@endforeach </tbody>
        </table>
        <div class="invoice-body-bottom">
          <div class="invoice-body-info-item border-bottom">
              <div class="info-item-td text-end">SubTotal: ${{ $totalPrice }}<br>Discount: ${{ $totalPrice-$order->amount }}<br></div>
              <div class="info-item-td text-bold text-end">Total Amount: ${{ $order->amount }}</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
