@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>修改小区信息</h1>
@stop

@section('content')
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">小区信息</h3>
        </div>
        <form class="form form-horizontal" method="post"
              action="{{ URL::action("Admin\\EstateController@update", $model['id']) }}">
            <input type="hidden" id="id" name="id" value="{{ $model['id'] }}"/>
            <div class="box-body">
                <div class="form-group">
                    <label class="col-sm-2 control-label">小区名称</label>
                    <div class="col-sm-7">
                        <input id="name" name="name" type="text" class="form-control" placeholder="请输入小区名称" value="{{ $model['name'] }}"/>
                    </div>
                    <div class="col-sm-3"></div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">地址</label>
                    <div class="col-sm-7">
                        <input id="address" name="address" type="text" class="form-control" placeholder="请输入地址" value="{{ $model['address'] }}"/>
                    </div>
                    <div class="col-sm-3"></div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">联系人</label>
                    <div class="col-sm-7">
                        <input id="contact_person" name="contact_person" type="text" class="form-control" placeholder="请输入联系人" value="{{ $model['contact_person'] }}"/>
                    </div>
                    <div class="col-sm-3">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">联系电话</label>
                    <div class="col-sm-7">
                        <input id="telephone" name="telephone" type="text" class="form-control" placeholder="请输入联系电话" value="{{ $model['telephone'] }}"/>
                    </div>
                    <div class="col-sm-3">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">管理密码</label>
                    <div class="col-sm-7">
                        <input id="password" name="password" type="password" class="form-control" placeholder="请输入管理密码" value="{{ $model['password'] }}"/>
                    </div>
                    <div class="col-sm-3"></div>
                </div>
            </div>
            <div class="box-footer">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-primary">保存</button>
                    <a href="{{ URL::action("Admin\\EstateController@index") }}" class="btn btn-default">返回</a>
                </div>
            </div>
        </form>
    </div>
@stop