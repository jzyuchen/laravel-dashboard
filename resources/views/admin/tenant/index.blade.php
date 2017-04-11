@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>机构管理</h1>
@stop

@section('content')
    <div class="box box-primary">
        <div class="box-header">
            <a href="{{ URL::action("Admin\\TenantController@create") }}" class="btn btn-primary">添加</a>
        </div>
        <div class="box-body">
            <table class="table table-hover table-bordered">
                <thead>
                <tr>
                    <th style="width:50px;text-align: center"><input type="checkbox" class="icheck"></th>
                    <th style="width:100px">机构编号</th>
                    <th style="width:150px">机构名称</th>
                    <th style="width:150px">联系电话</th>
                    <th style="width:150px">联系人</th>
                    <th>地址</th>
                    <th style="width:150px">创建时间</th>
                    <th style="width:180px"></th>
                </tr>
                </thead>
                <tbody>
                @foreach($list as $model)
                    <tr>
                        <th style="width:50px;text-align: center"><input type="checkbox" class="icheck"></th>
                        <td>{{ $model['id'] }}</td>
                        <td>{{ $model['name'] }}</td>
                        <td>{{ $model['telephone'] }}</td>
                        <td>{{ $model['contact_person'] }}</td>
                        <td>{{ $model['address'] }}</td>
                        <td>{{ $model['created_at'] }}</td>
                        <td style="text-align: center">
                            <a href="{{ URL::action("Admin\\TenantController@show", $model->id) }}"
                               class="btn btn-xs btn-info">详情</a>
                            <a href="{{ URL::action("Admin\\TenantController@edit", $model->id) }}"
                               class="btn btn-xs btn-primary">编辑</a>
                            <a href="{{ URL::action("Admin\\TenantController@show", $model->id) }}"
                               class="btn btn-xs btn-danger">删除</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {!! $list->render() !!}
        </div>
    </div>
@stop