@extends('layouts.app')

@section("content")
    <div class="col-md-4 col-md-offset-4">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Register</h3>
            </div>
            <div class="panel-body">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="手机号码"/>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="验证码"/>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary btn-block" placeholder="注册"/>
                </div>
            </div>
            <div class="panel-footer"></div>
        </div>
    </div>
@stop