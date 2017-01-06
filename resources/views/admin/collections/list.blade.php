@extends('admin.templates.default', ['title'=>'Danh sách thư viện ảnh',
            'libs_elements'=>['node-waves', 'animate',  'dataTables'],
            'customs_css'=>[],
            'custom_scripts'=>[
                URL::asset('admin/js/admin.js'),
                URL::asset('admin/js/pages/collections/edit_status.js'),
                URL::asset('admin/js/pages/collections/delete.js')
            ]
            ])
@section('content')

            
            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Danh sách thư viện ảnh
                            </h2>
                        </div>
                        <div class="body">
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead>
                                <tr>
                                    <th>hình ảnh</th>
                                    <th>tiêu đề</th>
                                    <th>Trạng thái</th>
                                    <th>Ngày tạo</th>
                                    <th>Tùy Chọn</th>
                                </tr>
                                </thead>

                                <tfoot>
                                <tr>
                                    <th>hình ảnh</th>
                                    <th>tiêu đề</th>
                                    <th>Trạng thái</th>
                                    <th>Ngày tạo</th>
                                    <th>Tùy Chọn</th>
                                </tr>
                                </tfoot>

                                <tbody>
                                
                                   
                                @foreach($collections as $collection)
                                        <tr>
                                            @if(isset($collection->getMedia()[0]))
                                            <td><img src="{{asset($collection->getMedia()[0]->getUrl())}}" height="100" width="120"></td>
                                                @else
                                                <td><img src="" alt=""></td>
                                            @endif
                                            <td>{{$collection->title}}</td>
                                            <td>
                                                <select name="status" class="edit-status" id="09">
                                                    <option href="{{url('admin/collection/edit-status', ['id'=>$collection->id])}}" value="0" {{$collection->status == 0? 'selected':''}}>Un publish</option>
                                                    <option href="{{url('admin/collection/edit-status', ['id'=>$collection->id])}}" value="1" {{$collection->status == 1? 'selected':''}}>Live</option>
                                                    <option href="{{url('admin/collection/edit-status', ['id'=>$collection->id])}}" value="2" {{$collection->status == 2? 'selected':''}}>Disable</option>
                                                </select>
                                            </td>
                                            <td>{{$collection->updated_at}}</td>
                                            <td>
                                                <a href="edit/{{$collection->id}}">
                                                    <button type="button"   class="btn btn-primary btn-lg">Edit</button>
                                                </a>
                                                <a href="#" id="{{$collection->id}}" class="delete-collection" collection-id="{{$collection->id}}" data-token="{{ csrf_token() }}">
                                                    <button type="button" class="btn btn-primary btn-lg">Delete</button>
                                                </a>
                                                
                                            </td>

                                            
                                        </tr>
                                    
                                @endforeach
                                
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Examples -->
@stop