@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <div class="box">
        <div class="box-header">
                <a href="{{ URL::action("Admin\UserController@create") }}" class="btn btn-primary">添加</a>
                <a href="#" class="btn btn-danger">删除</a>
                <input type="text" class="form-control" placeholder="请输入查询内容"/>
                <button type="submit" class="btn btn-info">查询</button>
        </div>
        <div class="box-body">
            <table class="table table-hover table-bordered">
                <thead>
                <tr>
                    <th style="width:50px;text-align: center"><input type="checkbox" class="checkbox icheck"></th>
                    <th style="width:100px">ID</th>
                    <th style="width:150px">Username</th>
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
                            <a href="{{ URL::action("Admin\UserController@edit", $model->id) }}"
                               class="btn btn-sm btn-info">编辑</a>
                            <a href="{{ URL::action("Admin\UserController@show", $model->id) }}"
                               class="btn btn-sm btn-info">详情</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {!! $list->render() !!}
        </div>
    </div>
@stop