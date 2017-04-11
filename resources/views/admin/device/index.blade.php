@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>设备管理</h1>
@stop

@section('content')
    <div class="box box-primary">
        <div class="box-header">
            <div class="row">
                <div class="col-sm-8">
                    <a href="{{ URL::action("Admin\\DeviceController@create") }}" data-toggle="modal"
                       data-target="#details" class="btn btn-primary">添加</a>
                    <a href="#" class="btn btn-info">导入设备</a>
                    <a href="#" class="btn btn-danger">删除</a>
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
                    <th style="width:50px;text-align: center"><input type="checkbox" class="checkbox icheck"></th>
                    <th style="width:100px">设备序列号</th>
                    <th style="width:150px">设备名称</th>
                    <th>Email</th>
                    <th style="width:150px">Created At</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($list as $model)
                    <tr>
                        <th style="width:50px;text-align: center"><input type="checkbox"></th>
                        <td>{{ $model['id'] }}</td>
                        <td>{{ $model['name'] }}</td>
                        <td>{{ $model['email'] }}</td>
                        <td>{{ $model['created_at'] }}</td>
                        <td style="width:120px">
                            <a href="{{ URL::action("Admin\\DeviceController@edit", $model->id) }}"
                               class="btn btn-sm btn-info">编辑</a>
                            <a href="{{ URL::action("Admin\\DeviceController@show", $model->id) }}"
                               class="btn btn-sm btn-info">详情</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {!! $list->render() !!}
        </div>
    </div>

    <div id="details" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">Loading</div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
@stop

@section("js")
    <script type="text/javascript">
        $(function () {

            $('#details').on('closed.bs.alert', function () {
                $("#details > .modal-dialog > .modal-content").empty();
            })
        });
    </script>
@stop