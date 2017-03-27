@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Admin Management</h1>
@stop

@section('content')
    <div class="box box-primary">
        <div class="box-header">
            <div class="row">
                <div class="col-sm-8">
                    <a href="{{ URL::action("Admin\\AdminController@create") }}"
                       class="btn btn-primary">添加</a>
                    <a href="#" class="btn btn-danger">删除</a></div>
                <div class="col-sm-4">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for...">
                        <span class="input-group-btn"><button class="btn btn-primary" type="button">搜索</button></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="box-body">
            <div id="jsontotable" class="jsontotable"></div>
        </div>
    </div>
@stop

@section("js")
    <script type="text/javascript" src="{{asset('/js/jquery.jsontotable.min.js')}}"></script>
    <script type="text/javascript">
        $(function () {
            $.get('{{ url('/admin/classes/'. $model .'/list') }}', function (list) {
                $.jsontotable(list, {id: '#jsontotable', header: true, className: 'table table-hover table-bordered'});
            });
        });
    </script>
@stop