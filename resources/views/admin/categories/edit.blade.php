@extends('admin.templates.default', ['title'=>'Sửa Danh Mục', 'libs_elements'=>['node-waves'],
    'customs_css'=>[],
    'custom_scripts'=>[
        URL::asset('/admin/js/admin.js'),
        URL::asset('/admin/js/pages/index.js')
    ]
])
@section('content')

            <div class="block-header">
                <h2>
                    Sửa Danh Mục
                </h2>
            </div>
            <!-- Basic Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>Sửa Danh Mục</h2>
                        </div>
                        <div class="body">
                            <form id="form_validation" method="POST" action="{{url('admin/category/edit', ['id'=>$category->id])}}">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="name" value="{{$category->name}}" required>
                                    </div>
                                </div>
                                <button class="btn btn-primary waves-effect" type="submit">Sửa</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Validation -->



@stop