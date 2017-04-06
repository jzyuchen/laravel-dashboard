@extends('tenant.page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>添加主机</h1>
@stop

@section('content')
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">主机信息</h3>
        </div>
        <form class="form form-horizontal" method="post" action="{{ URL::action("Tenant\\DeviceController@store") }}">
            <div class="box-body">
                <div class="form-group">
                    <label class="col-sm-2 control-label">产品序列号</label>
                    <div class="col-sm-7">
                        <input id="id" name="id" type="text" class="form-control" placeholder="请输入产品序列号"/>
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
            </div>
            <div class="box-footer">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-primary">保存</button>
                    <a href="{{ URL::action("Tenant\\DeviceController@index") }}" class="btn btn-default">返回</a>
                </div>
            </div>
        </form>
    </div>
@stop