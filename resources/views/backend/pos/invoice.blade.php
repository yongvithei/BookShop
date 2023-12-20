<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>::after,::before{padding:0;margin:0;box-sizing:border-box}:root{--blue-color:#0c2f54;--dark-color:#535b61;--white-color:#fff}ul{list-style-type:none}ul li{margin:2px 0}.text-end{text-align:right}.text-start{text-align:left}.text-bold{font-weight:700}.hr{height:1px;background-color:rgba(0,0,0,.1)}.border-bottom,.invoice-body table tr{border-bottom:1px solid rgba(0,0,0,.1)}body{font-family:khmeros,sans-serif;color:var(--dark-color);font-size:12px}.invoice-wrapper{min-height:100vh;padding-top:0;padding-bottom:0}.invoice{max-width:850px;margin-right:auto;margin-left:auto;padding:30px;border:1px solid rgba(0,0,0,.2);border-radius:5px;min-height:920px}.invoice-head-top-left img{width:130px}.invoice-head-top-right h3{font-weight:500;font-size:27px;color:var(--blue-color)}.invoice-head-bottom,.invoice-head-middle{padding:6px 0}.invoice-body{border:1px solid rgba(0,0,0,.1);border-radius:4px;overflow:hidden;min-width:600px}.invoice-body table{border-collapse:collapse;border-radius:4px;width:100%}.invoice-body table td,.invoice-body table th{padding:12px}.invoice-body table thead{background-color:rgba(0,0,0,.02)}.invoice-body-info-item{display:grid;grid-template-columns:80% 20%}.invoice-body-info-item .info-item-td{padding:12px;background-color:rgba(0,0,0,.02)}.invoice-foot p{font-size:12px}.invoice-head-bottom,.invoice-head-middle,.invoice-head-top{display:grid;grid-template-columns:repeat(2,1fr);padding-bottom:10px}@media screen and (max-width:992px){.invoice{padding:40px}}@media screen and (max-width:576px){.invoice-head-bottom,.invoice-head-middle,.invoice-head-top{grid-template-columns:repeat(1,1fr)}.invoice-head-bottom-right{margin-top:12px;margin-bottom:12px}.invoice *{text-align:left}.invoice{padding:28px}}@media print{.print-area{visibility:visible;width:100%;position:absolute;left:0;top:0;overflow:hidden}}</style>
    </head>
    <body>
    <div class="invoice-wrapper">
    <div class="invoice">
      <div class="invoice-container">
        <div class="invoice-head">
          <div class="invoice-head-top">
              <table width="100%" style="background:#fff;" class="font">
                  <tr>
                      <td>
                          <div class="invoice-head-top-left text-start">
                              <h2 style="color:#000000;font-size:26px">
                                  <strong >{{__('body.title')}}</strong>
                              </h2>
                          </div>
                      </td>
                      <td>
                        <div class="invoice-head-top-right text-end">
                          <h2>{{__('main.invoice')}}</h2>
                        </div>
                      </td>
                  </tr>
              </table>
          </div>
          <div class="hr"></div>
          <div class="invoice-head-middle">
            <table width="100%" style="background:#fff;" class="font">
              <tr>
                <td>
                  <div class="invoice-head-middle-left text-start">
                    <ul>
                      <strong class = 'text-bold'>Cashier: </strong>{{ $order->userId->name }}<br> {{ $order->created_at}}
                  </ul>
                  </div>
                </td>
                <td class="text-end">
                    <ul class = "text-end">
                      <p>{{$info->email}}</p>
                      <p>{{$info->address}}</p>
                      <p>{{$info->support_phone	}}</p>
                    </ul>
                </td>
              </tr>
            </table>
          </div>
        </div>

          <div class="hr"></div>

        <div class="invoice-body">
            <table style="width: 100%; border-collapse: collapse; border: 1px solid #d3d3d3;">
                <thead>
                <tr>
                    <td class="text-bold" style="border: 1px solid #d3d3d3;">Product Name</td>
                    <td class="text-bold" style="border: 1px solid #d3d3d3;">Price</td>
                    <td class="text-bold" style="border: 1px solid #d3d3d3;">QTY</td>
                    <td class="text-bold" style="border: 1px solid #d3d3d3;">Amount</td>
                </tr>
                </thead>
                <tbody>
                @php
                    $totalPrice = 0;
                @endphp
                @foreach($orderItem as $item)
                    <tr class="font">
                        <td style="border: 1px solid #d3d3d3;">{{ $item->product->name }}</td>
                        <td style="border: 1px solid #d3d3d3;">{{ $item->product->price }}</td>
                        <td style="border: 1px solid #d3d3d3;">{{ $item->pro_qty }}</td>
                        <td style="border: 1px solid #d3d3d3;">{{ $item->productId->price * $item->pro_qty }} KHR</td>
                        @php
                            $totalPrice += $item->price * $item->qty;
                        @endphp
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div class="invoice-body-bottom">
                <div class="invoice-body-info-item border-bottom">
                    <div class="info-item-td text-end">SubTotal: {{ $order->amount }} KHR<br>Received: {{ $order->received }} KHR<br></div>
                    <div class="info-item-td text-bold text-end">Total Amount: {{ $order->amount }} KHR <br>Total Amount in Dollar: $ {{ number_format($order->amount/$info->exchange, 2) }}</div>

                </div>
            </div>
        </div>

    </div>
    </div>
    </div>
</body>
</html>
