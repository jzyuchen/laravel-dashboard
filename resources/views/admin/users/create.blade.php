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
        <form class="form" method="post" action="{{ URL::action("Admin\\UserController@store") }}">
            <div class="box-body">
                <div class="form-group">
                    <label class="control-label">用户名</label>
                    <input id="name" name="name" type="text" class="form-control" placeholder="请输入用户名"/>
                    <span class="help-block">
                        {{ $errors }}
                    </span>
                </div>
                <div class="form-group">
                    <label class="control-label">密码</label>
                    <input id="password" name="password" type="password" class="form-control" placeholder="请输入密码"/>
                    <span class="help-block">{{$errors->first('password')}}</span>
                </div>
                <div class="form-group">
                    <label class="control-label">邮箱</label>
                    <input id="email" name="email" type="text" class="form-control" placeholder="请输入邮箱"/>
                    <span class="help-block">{{$errors->first('email')}}</span>
                </div>
            </div>
            <div class="box-footer">
                <button type="submit" class="btn btn-primary">保存</button>
                <a href="{{ URL::action("Admin\\UserController@index") }}" class="btn btn-default">返回</a>
            </div>
        </form>
    </div>
@stop