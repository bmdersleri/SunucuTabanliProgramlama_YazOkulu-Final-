<html>

<head>
    <title>Order Item</title>
    <link href="{{ asset('assets')}}/admin/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('assets')}}/admin/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{ asset('assets')}}/admin/plugins/icomoon/style.css" rel="stylesheet">
    <link href="{{ asset('assets')}}/admin/plugins/uniform/css/default.css" rel="stylesheet"/>
    <link href="{{ asset('assets')}}/admin/plugins/switchery/switchery.min.css" rel="stylesheet"/>
    <link href="{{ asset('assets')}}/admin/plugins/nvd3/nv.d3.min.css" rel="stylesheet">
</head>


<body>
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="title">Order Item</h5>

                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="thead-light">
                            <tr>
                                <th>Product</th>
                                <th></th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Amount</th>
                                <th>Status</th>
                                <th>Note</th>

                            </tr>
                            </thead>
                            <tbody>
                            @php
                                $total=0;
                            @endphp
                            @foreach($datalist as $rs)
                                <tr>
                                    <td>
                                        @if($rs->product->image)
                                            <img src="{{Storage::url($rs->product->image)}}" height="30">
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{route('product',['id'=>$rs->product->id,'slug'=>$rs->product->slug])}}">{{$rs->product->title}}</a>
                                    </td>
                                    <td>{{$rs->product->price}}</td>
                                    <td>{{$rs->quantity}}</td>
                                    <td>{{$rs->amount}}</td>
                                    <td>{{$rs->status}}</td>
                                    <td>{{$rs->note}}</td>



                                </tr>
                            @endforeach
                            </tbody>
                            <tfoot>
                            <th colspan="4">SUBTOTAL</th>
                            <th>{{$rs->order->total}}₺</th>
                            </tfoot>

                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
