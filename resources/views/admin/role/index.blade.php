@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <div class="box box-primary">
        <div class="box-header">
            <a href="#createModal" data-toggle="modal" data-target="#createModal"
               class="btn btn-primary pull-right">添加</a>
        </div>
        <div class="box-body">
            <table class="table table-hover table-bordered">
                <thead>
                <tr>
                    <th style="width:50px;text-align: center"><input type="checkbox" class="icheck"></th>
                    <th style="width:100px">ID</th>
                    <th style="width:150px">Name</th>
                    <th style="width:150px">Display Name</th>
                    <th>Description</th>
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
                        <td>{{ $model['display_name'] }}</td>
                        <td>{{ $model['description'] }}</td>
                        <td>{{ $model['created_at'] }}</td>
                        <td style="width:120px;text-align: right">
                            <a href="{{ URL::action("Admin\\EstateController@edit", $model->id) }}"
                               class="btn btn-sm btn-info">编辑</a>
                            <a href="javascript:delete({{ $model->id }})" class="btn btn-sm btn-danger">删除</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div id="createModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Title</h4>
                </div>
                <form class="form-horizontal" action="{{ URL::action('Admin\RoleController@store') }}" method="post">
                    <div class="modal-body">
                        <div class="form-group">
                            <label class="col-sm-2 control-label">角色名称</label>
                            <div class="col-sm-7"><input type="text" class="form-control"/></div>
                            <div class="col-sm-3"></div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">角色名称</label>
                            <div class="col-sm-7"><input type="text" class="form-control"/></div>
                            <div class="col-sm-3"></div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">角色名称</label>
                            <div class="col-sm-7"><input type="text" class="form-control"/></div>
                            <div class="col-sm-3"></div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">提交</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop

@section('js')
    <script type="text/javascript">
        $(function () {
            alert('hehe');
        });
    </script>
@stop