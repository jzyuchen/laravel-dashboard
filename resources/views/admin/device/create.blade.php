<form action="{{ URL::action('Admin\DeviceController@store') }}" method="post">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                    aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Modal title</h4>
    </div>
    <div class="modal-body">
        <div class="form-group">
            <label class="control-label">序列号</label>
            <input type="text" class="form-control"/>
        </div>
        <div class="form-group">
            <label class="control-label">型号</label>
            <input type="text" class="form-control"/>
        </div>
    </div>
    <div class="modal-footer">
        <button type="submit" class="btn btn-primary">提交</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
    </div>
</form>