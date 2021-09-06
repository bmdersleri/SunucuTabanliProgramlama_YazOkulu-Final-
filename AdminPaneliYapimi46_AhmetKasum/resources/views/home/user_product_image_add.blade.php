<html>
<head>
    <title>Image Gallery</title>
    <link href="{{ asset('assets')}}/admin/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('assets')}}/admin/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{ asset('assets')}}/admin/plugins/icomoon/style.css" rel="stylesheet">
    <link href="{{ asset('assets')}}/admin/plugins/uniform/css/default.css" rel="stylesheet"/>
    <link href="{{ asset('assets')}}/admin/plugins/switchery/switchery.min.css" rel="stylesheet"/>
    <link href="{{ asset('assets')}}/admin/plugins/nvd3/nv.d3.min.css" rel="stylesheet">
</head>
<body>

<section class="content">
    <div class="card">
        <div class="card-body">

            <div class="panel panel-white">
                <div class="panel-heading clearfix">
                    <h3 class="breadcrumb-header">Product : {{$data->title}}</h3>
                </div>
                <div class="panel-body">
                    <form role="form" action="{{route('user_image_store', ['product_id' =>$data->id])}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label>Title</label>
                                <input type="text" id="title" name="title" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Image</label>
                                <input type="file" name="image" class="form-control">
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Add Image</button>
                        </div>
                    </form>
                    <div class="card-footer">
                        <table id="example" class="display table" style="width: 100%; cellspacing: 0;">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Title</th>
                                <th>Image</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($images as $rs)
                                <tr>
                                    <td>{{$rs->id}}</td>
                                    <td>{{$rs->title}}</td>
                                    <td>
                                        @if ($rs->image)
                                            <img src="{{Storage::url($rs->image)}}" height="60" alt="">
                                        @endif
                                    </td>
                                    <td><a href="{{route('user_image_delete', ['id' =>$rs->id, 'product_id'=>$data->id])}}" onclick="return confirm('Record Will be Delete! Are you sure ?')"><img src="{{asset('assets/admin/images')}}/delete.jpg" height="25"></a></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</div>

</body>
</html>
