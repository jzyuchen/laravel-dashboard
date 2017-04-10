@extends('adminlte::master')

@section('body')

    <div class="container">
        <div class="login-box">
            <div class="panel panel-default">
                <div class="panel-heading"><h3 class="panel-title">登录</h3></div>
                <form action="{{ url(config('adminlte.login_url', 'login')) }}" method="post">
                    <div class="panel-body">
                        <div class="form-group has-feedback">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input type="text" class="form-control" id="name" name="name"
                                       placeholder="用户名"/>
                            </div>
                            @if ($errors->has('email'))
                                <span class="help-block"><strong>{{ $errors->first('email') }}</strong></span>
                            @endif
                        </div>
                        <div class="form-group has-feedback">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                <input type="password" class="form-control" id="password" name="password"
                                       placeholder="密码"/>
                            </div>
                            @if ($errors->has('password'))
                                <span class="help-block"><strong>{{ $errors->first('password') }}</strong></span>
                            @endif
                        </div>
                    </div>
                    <div class="panel-footer">
                        <input type="submit" value="登录" class="btn btn-primary btn-block"/>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop