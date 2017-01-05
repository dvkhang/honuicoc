@extends('admin.templates.default', ['title'=>'Danh sách bài viết',
            'libs_elements'=>['node-waves', 'animate','bootstrap-select','dataTables'],
            'customs_css'=>[],
            'custom_scripts'=>[
                URL::asset('admin/js/admin.js'),
                URL::asset('admin/js/pages/products/product.js')
            ]
            ])
@section('content')
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        Danh sách bài viết
                    </h2>
                </div>

                <div class="body">
                    <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                        <thead>
                        <tr>
                            <th>STT</th>
                            <th>Hình ảnh</th>
                            <th>Tiêu đề</th>
                            <th>Danh mục</th>
                            <th>Tóm tắt</th>
                            <th>Nội Dung</th>
                            <th>Status</th>
                            <th width="7%">Action</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>STT</th>
                            <th>Hình ảnh</th>
                            <th>Tiêu đề</th>
                            <th>Danh mục</th>
                            <th>Tóm tắt</th>
                            <th>Nội Dung</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        <?php $i= 0;?>
                            @foreach($posts as $post)
                                <tr class="item{{$post->id}}">
                                    <td>{{$i+=1}}</td>
                                    @if(isset($post->getMedia()[0]))
                                    <td><img src="{{asset($post->getMedia()[0]->getUrl())}}" height="100" width="100"></td>
                                        @else
                                        <td><img src="" alt=""></td>
                                    @endif
                                    <td>{{$post->title}}</td>
                                    <td>{{\App\Category::find($post->category_id)->name}}</td>
                                    <td>{{$post->summary}}</td>
                                    <td>{!! $post->description !!}</td>
                                    <td>
                                        <select name="status" class="edit-status" id="09">
                                            <option href="{{url('admin/post/edit-status', ['id'=>$post->id])}}" value="0" {{$post->status == 0? 'selected':''}}>Un publish</option>
                                            <option href="{{url('admin/post/edit-status', ['id'=>$post->id])}}" value="1" {{$post->status == 1? 'selected':''}}>Live</option>
                                            <option href="{{url('admin/post/edit-status', ['id'=>$post->id])}}" value="2" {{$post->status == 2? 'selected':''}}>Disable</option>
                                        </select>
                                    </td>
                                    <td>
                                        <a href="{{url('admin/post/edit', ['id'=>$post->id])}}"><span class="demo-google-material-icon"> <i class="material-icons" style="font-size: 20px;">edit</i> <span class="icon-name"></span></span></a>
                                        <a href="#" id="{{$post->id}}" class="delete-product" product-id="{{$post->id}}" data-token="{{ csrf_token() }}"><span class="demo-google-material-icon"> <i class="material-icons" style="font-size: 20px;">delete_forever</i> <span class="icon-name"></span></span></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


@stop

@section('footer')
    @parent

@endsection
