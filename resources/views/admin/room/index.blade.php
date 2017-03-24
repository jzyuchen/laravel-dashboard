@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <div class="box box-primary">
        <div class="box-header">
            <a href="{{ URL::action("Admin\EstateController@create") }}" class="btn btn-primary pull-right">添加</a>
        </div>
        <div class="box-body">
            <table class="table table-hover table-bordered">
                <thead>
                <tr>
                    <th style="width:50px;text-align: center"><input type="checkbox" class="icheck"></th>
                    <th style="width:100px">ID</th>
                    <th style="width:150px">Name</th>
                    <th style="width:150px">Telephone</th>
                    <th style="width:150px">Contact Person</th>
                    <th>address</th>
                    <th style="width:150px">Created At</th>
                    <th></th>
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
                        <td style="width:120px">
                            <a href="{{ URL::action("Admin\\EstateController@edit", $model->id) }}"
                               class="btn btn-sm btn-info">编辑</a>
                            <a href="{{ URL::action("Admin\\EstateController@show", $model->id) }}"
                               class="btn btn-sm btn-info">详情</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {!! $list->render() !!}
        </div>
    </div>
@stop