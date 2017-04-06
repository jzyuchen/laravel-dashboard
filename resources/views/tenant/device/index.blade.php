@extends('tenant.page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>设备管理</h1>
@stop

@section('content')
    <div class="box box-primary">
        <div class="box-header">
            <div class="row">
                <div class="col-sm-8">
                    <a href="{{ URL::action("Tenant\\DeviceController@create") }}"
                       class="btn btn-primary">添加</a>
                    <a href="#" class="btn btn-danger">删除</a></div>
                <div class="col-sm-4">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for...">
                        <span class="input-group-btn"><button class="btn btn-primary" type="button">搜索</button></span>
                    </div><!-- /input-group -->
                </div>
            </div>
        </div>
        <div class="box-body">
            <table class="table table-hover table-bordered">
                <thead>
                <tr>
                    <th style="width:50px;text-align: center"><input type="checkbox" class="checkbox icheck"></th>
                    <th style="width:100px">设备序列号</th>
                    <th style="width:150px">设备名称</th>
                    <th>Email</th>
                    <th style="width:150px">Created At</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($list as $model)
                    <tr>
                        <th style="width:50px;text-align: center"><input type="checkbox"></th>
                        <td>{{ $model['id'] }}</td>
                        <td>{{ $model['name'] }}</td>
                        <td>{{ $model['email'] }}</td>
                        <td>{{ $model['created_at'] }}</td>
                        <td style="width:120px">
                            <a href="{{ URL::action("Tenant\\DeviceController@edit", $model->id) }}"
                               class="btn btn-sm btn-info">编辑</a>
                            <a href="{{ URL::action("Tenant\\DeviceController@show", $model->id) }}"
                               class="btn btn-sm btn-info">详情</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {!! $list->render() !!}
        </div>
    </div>
@stop