@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-sm-3">
            <div class="panel panel-info">
                <div class="panel-heading"><h4>Device Catalog</h4></div>
                <div class="list-group">
                    <a href="#" class="list-group-item active"><span class="badge">14</span>Cras justo odio</a>
                    <a href="#" class="list-group-item"><span class="badge">14</span>Dapibus ac facilisis in</a>
                    <a href="#" class="list-group-item"><span class="badge">14</span>Morbi leo risus</a>
                    <a href="#" class="list-group-item"><span class="badge">14</span>Porta ac consectetur ac</a>
                    <a href="#" class="list-group-item"><span class="badge">14</span>Vestibulum at eros</a>
                </div>
            </div>
        </div>
        <div class="col-sm-9">
            <div class="box box-info">
                <div class="box-header">
                    <h3 class="box-title">设备列表</h3>
                </div>
                <div class="box-body">
                    <table class="table table-hover table-bordered">
                        <thead>
                        <tr>
                            <th style="width:10px"><input type="checkbox"/></th>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Status</th>
                            <th style="width:120px;text-align: center">Created_at</th>
                        </tr>
                        </thead>
                    </table>
                </div>
            </div>

        </div>
    </div>
@stop