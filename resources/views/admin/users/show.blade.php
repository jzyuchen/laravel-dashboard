@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>添加用户</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-sm-3">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">用户信息</h3>
                </div>
                <div class="box-body">
                    <img src="/images/default_avatar.jpg" class="profile-user-img img-responsive img-circle"/>
                    <h3 class="profile-username text-center">{{ $model['name'] }}</h3>
                    <ul class="list-group list-group-unbordered">
                        <li class="list-group-item">
                            <b>邮箱</b>
                            <a class="pull-right">{{ $model['email'] }}</a>
                        </li>
                        <li class="list-group-item">
                            <b>手机</b>
                            <a class="pull-right"></a>
                        </li>
                        <li class="list-group-item">
                            <b>注册时间</b>
                            <a class="pull-right">{{ $model['created_at'] }}</a>
                        </li>
                    </ul>
                    <a href="{{ URL::action("Admin\UserController@edit", $model['id']) }}" class="btn btn-primary btn-block"><b>修改</b></a>
                </div>
            </div>
        </div>
        <div class="col-sm-9">
            <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#details" data-toggle="tab">基本信息</a></li>
                    <li><a href="#account" data-toggle="tab">账户信息</a></li>
                    <li><a href="#device" data-toggle="tab">绑定设备</a></li>
                </ul>
                <div class="tab-content">
                    <div id="details" class="tab-pane active">1</div>
                    <div id="account" class="tab-pane">2</div>
                    <div id="device" class="tab-pane">3</div>
                </div>
            </div>
        </div>
    </div>
@stop