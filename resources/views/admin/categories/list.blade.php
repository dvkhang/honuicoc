@extends('admin.templates.default', ['title'=>'Danh sách danh mục',
            'libs_elements'=>['node-waves', 'animate',  'dataTables'],
            'customs_css'=>[],
            'custom_scripts'=>[
                URL::asset('admin/js/admin.js'),
                URL::asset('admin/js/pages/category/edit_status.js'),
                URL::asset('admin/js/pages/category/delete.js')
            ]
            ])
@section('content')

            
            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                               Danh sách danh mục
                            </h2>
                        </div>
                        <div class="body">
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead>
                                <tr>
                                    <th>Tên </th>
                                    <th>Ngày tạo</th>
                                    <th>Tùy chọn</th>
                                </tr>
                                </thead>

                                <tfoot>
                                <tr>
                                    <th>Tên </th>
                                    <th>Ngày tạo</th>
                                    <th>Tùy chọn</th>
                                </tr>
                                </tfoot>

                                <tbody>
                                
                                   
                                @foreach($categories as $category)
                                        <tr>
                                            <td>{{$category->name}}</td>
                                            <td>{{$category->updated_at}}</td>
                                            <td>
                                                <a href="edit/{{$category->id}}">
                                                    <button type="button" class="btn btn-primary btn-lg">Sửa</button>
                                                </a>
                                                <a href="#" id="{{$category->id}}" class="delete-category" category-id="{{$category->id}}" data-token="{{ csrf_token() }}">
                                                    <button type="button" class="btn btn-primary btn-lg">Xóa</button>
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