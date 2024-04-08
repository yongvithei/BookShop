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
    <style>
        body, h1, h3, p {
            font-family: 'khmeros';
            @if(session()->get('locale') == 'en')
            font-size: 9pt;
                        @else
            font-size: 8pt;
                    @endif
    }
    </style>
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
                          <p></p>
                          <p>{{ __('main.invoice_no') }}: #{{ $order->invoice_no }}</p><span class="text-bold">{{ __('main.order_date') }}:</span>{{ $order->order_date }}
                          <p></p>
                      </div>
                    </td>
                    <td class="text-end">
                        <ul class="text-end">
                            <p>{{$info->email}}</p>
                            <!-- Splitting address into two lines based on language -->
                            @php
                                $address = session()->get('locale') == 'en' ? ($info->address ? $info->address : $info->address_kh) : ($info->address_kh ? $info->address_kh : $info->address);
                                $addressLines = wordwrap($address, 85, "<br>");
                            @endphp
                            <p>{!! $addressLines !!}</p>
                            <p>{{$info->support_phone}}</p>
                        </ul>


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
                          <strong class="text-bold" style="color:#000000;font-size:16px">{{ __('main.shipping_info') }}</strong>
                          <p>{{ __('main.name') }}: {{ $order->name }}</p>
                          <p>{{ __('main.email') }}: {{ $order->email }}</p>
                          <p>{{ __('main.phones') }}: {{ $order->phone }}</p>
                          @php $city = $order->city->name; $ci_kh = $order->city->ci_kh ;$dis = $order->district->name;$diskh = $order->district->dis_kh; @endphp
                          <p>{{ __('main.address') }}: @if(session()->get('locale') == 'en') {{ $city ?? $ci_kh ?? '' }} @else {{ $ci_kh ?? $city ?? '' }} @endif/
                              @if(session()->get('locale') == 'en') {{ $dis ?? $diskh ?? '' }} @else {{ $diskh ?? $dis ?? '' }} @endif,
                              {{ $order->post_code }}</p>
                      </ul>
                  </div>
                </div>
              </td>
              <td class="text-end">
                  <div class="invoice-head-bottom-right">
                      <ul class="text-end">
                          <p>{{ __('main.order_date') }} {{ $order->order_date }}</p>
                          <p>{{ __('main.payment') }}: {{ $order->payment_method }}</p>
                          <p>{{ __('main.delivery_date') }}: {{ $order->delivered_date }}</p>
                      </ul>
                  </div>
              </td>
            </tr>
          </table>
        </div>
      </div>
        <div class="invoice-body">
            <table style="width: 100%; border-collapse: collapse; border: 1px solid #d3d3d3;">
                <thead>
                <tr>
                    <td class="text-bold" style="border: 1px solid #d3d3d3;">{{__('main.product_name')}}</td>
                    <td class="text-bold" style="border: 1px solid #d3d3d3;">{{ __('main.code') }}</td>
                    <td class="text-bold" style="border: 1px solid #d3d3d3;">{{__('main.quantity')}}</td>
                    <td class="text-bold" style="border: 1px solid #d3d3d3;">{{ __('main.amount') }}</td>
                </tr>
                </thead>
                <tbody>
                @php
                    $totalPrice = 0;
                @endphp
                @foreach($orderItem as $item)
                    <tr class="font">
                        <td style="border: 1px solid #d3d3d3;">{{ session()->get('locale') == 'en' ? ($item->product->name ? $item->product->name : $item->product->pro_kh) : ($item->product->pro_kh ? $item->product->pro_kh : $item->product->name) }}</td>
                        <td style="border: 1px solid #d3d3d3;">{{ $item->product->pro_code }}</td>
                        <td style="border: 1px solid #d3d3d3;">{{ $item->qty }}</td>
                        <td style="border: 1px solid #d3d3d3;">{{ $item->price }} {{__('main.khr')}}</td>
                        @php
                            $totalPrice += $item->price * $item->qty;
                        @endphp
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div class="invoice-body-bottom">
                <div class="invoice-body-info-item border-bottom">
                    <div class="info-item-td text-end">{{ __('main.subtotal') }}: {{ $totalPrice }} {{__('main.khr')}}<br>{{ __('main.discount') }}: {{ $totalPrice - $order->amount }} {{__('main.khr')}}<br></div>
                    <div class="info-item-td text-bold text-end">{{ __('main.total_amount') }}: {{ $order->amount }} {{__('main.khr')}} <br>{{ __('main.total_amount_dollar') }}: $ {{ number_format($order->amount/$info->exchange, 2) }}</div>
                </div>
            </div>
        </div>

    </div>
  </div>
</body>
</html>
