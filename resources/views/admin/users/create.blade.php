@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>添加用户</h1>
@stop

@section('content')
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">用户信息</h3>
        </div>
        <form class="form form-horizontal" method="post" action="{{ URL::action("Admin\UserController@store") }}">
            <div class="box-body">
                <div class="form-group">
                    <label class="col-sm-2 control-label">用户名</label>
                    <div class="col-sm-7">
                        <input id="username" name="username" type="text" class="form-control" placeholder="请输入用户名"/>
                    </div>
                    <div class="col-sm-3"></div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">密码</label>
                    <div class="col-sm-7">
                        <input id="password" name="password" type="password" class="form-control" placeholder="请输入密码"/>
                    </div>
                    <div class="col-sm-3"></div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">邮箱</label>
                    <div class="col-sm-7">
                        <input id="email" name="email" type="text" class="form-control" placeholder="请输入邮箱"/>
                    </div>
                    <div class="col-sm-3">
                    </div>
                </div>
            </div>
            <div class="box-footer">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-primary">保存</button>
                    <a href="{{ URL::action("Admin\UserController@index") }}" class="btn btn-default">返回</a>
                </div>
            </div>
        </form>
    </div>
@stop