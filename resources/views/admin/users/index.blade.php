@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>用户管理</h1>
@stop

@section('content')
    <div class="box box-primary">
        <div class="box-header">
            <div class="row">
                <div class="col-sm-8">
                    <a href="{{ URL::action("Admin\\UserController@create") }}" class="btn btn-primary">添加</a>
                    <button type="button" class="btn btn-danger disable">删除</button>
                </div>
                <div class="col-sm-4">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for...">
                        <span class="input-group-btn"><button class="btn btn-primary" type="button">搜索</button></span>
                    </div><!-- /input-group -->
                </div>
            </div>
        </div>
        <div class="box-body">
            <table class="table table-hover table-bordered">
                <thead>
                <tr>
                    <th style="width:10px"><input type="checkbox" id="chk_all" class="checkbox"/></th>
                    <th style="width:100px">ID</th>
                    <th style="width:150px">Username</th>
                    <th>Email</th>
                    <th style="width:180px">Created At</th>
                    <th style="width:180px"></th>
                </tr>
                </thead>
                <tbody>
                @foreach($list as $model)
                    <tr>
                        <th><input type="checkbox" name="chk_item" class="checkbox"/></th>
                        <td>{{ $model['id'] }}</td>
                        <td>{{ $model['name'] }}</td>
                        <td>{{ $model['email'] }}</td>
                        <td>{{ $model['created_at'] }}</td>
                        <td style="text-align: center">
                            <a href="{{ URL::action("Admin\\UserController@show", $model->id) }}"
                               class="btn btn-xs btn-success">详情</a>
                            <a href="{{ URL::action("Admin\\UserController@edit", $model->id) }}"
                               class="btn btn-xs btn-info">编辑</a>
                            <a href="{{ URL::action("Admin\\UserController@destroy", $model->id) }}"
                               class="btn btn-xs btn-danger btn-delete">删除</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {!! $list->render() !!}
        </div>
    </div>
@stop

@section("js")
    <script type="text/javascript">
        $(function () {
            $("#chk_all").click(function(){
                var isChecked = $(this).prop("checked");
                $("input[name='chk_item']").prop("checked", isChecked);
            });
            $(".btn-delete").click(function () {
                var url = $(this).attr('href');
                $.ajax({
                    url: url,
                    type: 'DELETE',
                    success: function (result) {
                        location.reload();
                    },
                    error: function (XMLHttpRequest, textStatus, errorThrown) {
                        alert(XMLHttpRequest.responseText);
                    }
                });
                return false;
            });
        });
    </script>
@stop