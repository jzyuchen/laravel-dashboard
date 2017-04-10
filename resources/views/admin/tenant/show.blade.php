@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>小区详情</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-sm-3">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">基本信息</h3>
                </div>
                <div class="box-body">
                    <img src="/images/default_avatar.jpg" class="profile-user-img img-responsive img-circle"/>
                    <h3 class="profile-username text-center">{{ $model['name'] }}</h3>
                    <ul class="list-group list-group-unbordered">
                        <li class="list-group-item">
                            <b>联系人</b>
                            <a class="pull-right">{{ $model['contact_person'] }}</a>
                        </li>
                        <li class="list-group-item">
                            <b>电话</b>
                            <a class="pull-right">{{ $model['telephone'] }}</a>
                        </li>
                        <li class="list-group-item">
                            <b>地址</b>
                            <a class="pull-right">{{ $model['address'] }}</a>
                        </li>
                        <li class="list-group-item">
                            <b>注册时间</b>
                            <a class="pull-right">{{ $model['created_at'] }}</a>
                        </li>
                    </ul>
                    <a href="{{ URL::action("Admin\\TenantController@edit", $model['id']) }}"
                       class="btn btn-primary btn-block"><b>修改</b></a>
                </div>
            </div>
        </div>
        <div class="col-sm-9">
            <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#details" data-toggle="tab">基本信息</a></li>
                    <li><a href="#account" data-toggle="tab">住户信息</a></li>
                    <li><a href="#device" data-toggle="tab">绑定设备</a></li>
                </ul>
                <div class="tab-content">
                    <div id="details" class="tab-pane active">1</div>
                    <div id="account" class="tab-pane">
                        <div class="box box-primary">
                            <div class="box-header">
                                <a href="#" class="btn btn-primary pull-right">添加</a>
                            </div>
                            <div class="box-body">
                                <table class="table table-bordered table-responsive">
                                    <thead>
                                    <tr>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div id="device" class="tab-pane">
                        <p>
                            <a href="#" class="btn btn-primary">绑定设备</a>
                        </p>
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>编号</th>
                                <th>型号</th>
                                <th>状态</th>
                                <th>绑定时间</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($model->devices as $device)
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop