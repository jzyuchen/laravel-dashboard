@extends('layouts.app')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <div class="container">
        <div class="col-md-6 col-md-offset-3">
            <div class="box box-primary">
                <form>
                    <div class="box-header with-border">
                        <h3 class="box-title">Login</h3>
                    </div>
                    <div class="box-body">
                        <div class="form-group">
                            <input type="text" name="username" class="form-control" placeholder="手机/邮箱/账号"/>
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" class="form-control" placeholder="密码"/>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary btn-block" value="提交"/>
                        </div>
                    </div>
                    <div class="box-footer">
                        <span>使用第三方账号登录</span>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop