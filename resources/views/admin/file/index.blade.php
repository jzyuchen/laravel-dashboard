@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>文件管理</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-sm-2">
            <div class="list-group">
                <a href="#" class="list-group-item active"><span class="badge">14</span>全部</a>
                <a href="#" class="list-group-item"><span class="badge">14</span>图片</a>
                <a href="#" class="list-group-item"><span class="badge">14</span>音频</a>
                <a href="#" class="list-group-item"><span class="badge">14</span>视频</a>
                <a href="#" class="list-group-item"><span class="badge">14</span>其他</a>
            </div>
        </div>
        <div class="col-sm-10">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">文件</h3>
                </div>
                <div class="box-body">

                </div>
            </div>
        </div>
    </div>
@stop