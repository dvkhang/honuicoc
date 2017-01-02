@extends('admin.templates.default', ['title'=>'Danh sách vé',
            'libs_elements'=>['node-waves', 'animate',  'dataTables'],
            'customs_css'=>[],
            'custom_scripts'=>[
                URL::asset('admin/js/admin.js'),
                URL::asset('admin/js/pages/tickets/delete.js')
            ]
            ])
@section('content')

            
            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Danh sách vé
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead>
                                <tr>
                                    <th>loại vé</th>
                                    <th>Giá vé (VNĐ)</th>
                                    <th>Ngày tạo</th>
                                    <th>Tùy Chọn</th>
                                </tr>
                                </thead>

                                <tfoot>
                                <tr>
                                    <th>loại vé</th>
                                    <th>Giá vé (VNĐ)</th>
                                    <th>Ngày tạo</th>
                                    <th>Tùy Chọn</th>
                                </tr>
                                </tfoot>

                                <tbody>
                                
                                   
                                @foreach($tickets as $ticket)
                                        <tr>
                                            <td>{{$ticket->classify}}</td>
                                            <td>{{$ticket->price}} </td>
                                            <td>{{$ticket->updated_at}}</td>
                                            <td>
                                                <a href="{{url('admin/ticket/edit',['id'=>$ticket->id])}}">
                                                    <button type="button" class="btn btn-primary btn-lg">Sửa</button>
                                                </a>
                                                <a href="#" id="{{$ticket->id}}" class="delete-ticket" ticket-id="{{$ticket->id}}" data-token="{{ csrf_token() }}">
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