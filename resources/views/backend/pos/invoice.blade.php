<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
            .hr,.invoice-wrapper{background-color:rgba(0,0,0,.1)}.invoice-btn,body{color:var(--dark-color)}*,::after,::before{padding:0;margin:0;box-sizing:border-box}:root{--blue-color:#0c2f54;--dark-color:#535b61;--white-color:#fff}ul{list-style-type:none}ul li{margin:2px 0}.text-end{text-align:right}.text-center{text-align:center}.text-start{text-align:left}.text-bold{font-weight:700}.hr{height:1px}.border-bottom,.invoice-body table tr{border-bottom:1px solid rgba(0,0,0,.1)}body{font-family:Poppins,sans-serif;font-size:12px}.invoice-wrapper{min-height:100vh;padding-top:20px;padding-bottom:20px}.invoice{max-width:590px;margin-right:auto;margin-left:auto;background-color:var(--white-color);padding:10px;border-radius:5px;min-height:120px}.invoice-head-top-right h3{font-weight:500;font-size:20px;color:var(--blue-color)}.invoice-head-bottom,.invoice-head-middle{padding:3px 0}.invoice-body{border:1px solid rgba(0,0,0,.1);border-radius:4px;overflow:hidden;min-width:450px}.invoice-body table{border-collapse:collapse;border-radius:4px;width:100%}.invoice-body table td{padding:5px}.invoice-body table thead{background-color:rgba(0,0,0,.02)}.invoice-body-info-item{display:grid;grid-template-columns:72% 28%}.invoice-body-info-item .info-item-td{padding:3px;background-color:rgba(0,0,0,.02)}.invoice-foot{padding:15px 0}.invoice-foot p{font-size:12px}.invoice-btns{margin-top:20px;display:flex;justify-content:center}.invoice-btn{padding:3px 9px;font-family:inherit;border:1px solid rgba(0,0,0,.1);cursor:pointer}.invoice-container{width:148.5mm;height:210mm;margin:0 auto;padding:5mm}.invoice-head-bottom,.invoice-head-middle,.invoice-head-top{display:grid;grid-template-columns:repeat(2,1fr);padding-bottom:4px}@media screen and (max-width:992px){.invoice{padding:4px}}@media screen and (max-width:576px){.invoice-head-bottom,.invoice-head-middle,.invoice-head-top{grid-template-columns:repeat(1,1fr)}.invoice-head-bottom-right{margin-top:auto;margin-bottom:auto}.invoice *{text-align:left}.invoice{padding:4px}}@media print{.overflow-view{overflow-x:hidden}.invoice-btns{display:none}@page{size:auto;margin:0}}
        </style>
    </head>
    <body>

        <div class = "invoice-wrapper" id = "print-area">
            <div class = "invoice">
                <div class = "invoice-container">
                    <div class = "invoice-head">
                        <div class = "invoice-head-top">
                            <div class="invoice-head-top-left text-start">
                                <h2 style="color:#000;font-size:26px">
                                  <strong>Ponleu Vichea</strong>
                                </h2>
                              </div>
                            <div class = "invoice-head-top-right text-end">
                                <h3>Invoice</h3>
                            </div>
                        </div>
                        <div class = "hr"></div>
                        <div class = "invoice-head-middle">
                            <div class = "invoice-head-middle-left text-start">
                                <p><span class = "text-bold">Date</span>: {{ $order->created_at }}</p>
                            </div>
                            <div class = "invoice-head-middle-right text-end">
                                <p><span class = "text-bold">Invoice No:</span>{{ $order->id }}</p>
                            </div>
                        </div>
                        <div class = "hr"></div>
                        <div class = "invoice-head-bottom">
                            <div class = "invoice-head-bottom-left">
                                <ul>
                                    <li class = 'text-bold'>Cashier :</li>
                                    <li>{{ $order->userId->name }}</li>
                                </ul>
                            </div>
                            <div class = "invoice-head-bottom-right">
                                <ul class = "text-end">
                                    <li>pelue@support.com</li>
                                    <li>2705 N. Enterprise</li>
                                    <li>Battambang, CA 89438</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class = "overflow-view">
                        <div class = "invoice-body">
                            <table>
                                <thead>
                                    <tr>
                                        <td style="width: auto;" class = "text-bold">Product</td>
                                        <td style="width: 25%;" class = "text-bold">price</td>
                                        <td style="width: 15%;" class = "text-bold">QTY</td>
                                        <td style="width: auto;" class = "text-bold text-center">Amount</td>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($orderItem as $item)
                                    <tr>
                                        <td>{{ $item->productId->name }}</td>
                                        <td>{{ $item->productId->price }}</td>
                                        <td>{{ $item->pro_qty }}</td>
                                        <td class = "text-center">{{ $item->productId->price * $item->pro_qty }}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class = "invoice-body-bottom">
                                <div class = "invoice-body-info-item border-bottom">
                                    <div class = "info-item-td text-end text-bold">Sub Total:</div>
                                    <div class = "info-item-td text-center">{{ $order->amount }}</div>
                                </div>
                                <div class = "invoice-body-info-item border-bottom">
                                    <div class = "info-item-td text-end text-bold">Received:</div>
                                    <div class = "info-item-td text-center">{{ $order->received }}</div>
                                </div>
                                <div class = "invoice-body-info-item">
                                    <div class = "info-item-td text-end text-bold">Total:</div>
                                    <div class = "info-item-td text-center">{{ $order->amount }}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class = "invoice-foot text-center">
                        <p><span class = "text-bold text-center">NOTE:&nbsp;</span> +(885) 124123131. Product Buy</p>

                        <div class = "invoice-btns">
                            <button type = "button" class = "invoice-btn" onclick="printInvoice()">
                                <span>
                                    <i class="fa-solid fa-print"></i>
                                </span>
                                <span>Print</span>
                            </button>
                            <button type = "button" class = "invoice-btn">
                                <span>
                                    <i class="fa-solid fa-download"></i>
                                </span>
                                <span>Download</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            function printInvoice(){
             window.print();
            }
        </script>
    </body>
</html>
