@extends('admin.templates.default', ['title'=>'Thêm thư viện ảnh',
            'libs_elements'=>['node-waves', 'animate', 'bootstrap-select', 'ckeditor', 'jquery-slimscroll'],
            'customs_css'=>[],
            'custom_scripts'=>[
                URL::asset('admin/js/admin.js'),
                URL::asset('admin/js/pages/forms/editors.js')
            ]
            ])
@section('content')

           

            <!-- Basic Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>Thêm thư viện ảnh</h2>
                        </div>


                        <div class="body">
                            <form id="form_validation" method="POST" action="{{url('admin/collection/add')}}" enctype="multipart/form-data">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">

      

                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label" >
                                        <label for="email_address_2">Tiêu đề</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="title" placeholder="template" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Status</label>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-8 col-xs-5">
                                        <div class="form-group">
                                            <div>
                                                <select name="status" required  class="form-control show-tick" data-show-subtext="true">
                                                    <option value="0">Un publish </option>
                                                    <option value="1" selected>Live </option>
                                                    <option value="2">Disable </option>    
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Hình Ảnh</label>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-5 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="file" name="file[]" multiple>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                              
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2"></label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="">
                                                <button class="btn btn-primary waves-effect" type="submit">Thêm thư viện</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>

                </div>
            </div>

@stop
