@extends('admin.templates.default', ['title'=>'Thêm Danh Mục',
    'libs_elements'=>['node-waves', 'animate', 'bootstrap-select',  'jquery-slimscroll'],
    'customs_css'=>[],
    'custom_scripts'=>[
        URL::asset('/admin/js/admin.js'),
    ]
])
@section('content')

            
            <!-- Basic Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>Thêm Danh Mục</h2>
                        </div>
                        <div class="body">
                            <form id="form_validation" method="POST" action="{{url('admin/category/add')}}">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="name" required>
                                        <label class="form-label">Tên Danh Mục</label>
                                    </div>
                                </div>
                                <button class="btn btn-primary waves-effect" type="submit">Thêm</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Validation -->



@stop