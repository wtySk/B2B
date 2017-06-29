<div class="box box-info">
    <div class="box-header with-border">
        <h3 class="box-title"><a href="/admin/store/{{ $user->user_id }}/edit">编辑</a></h3>
        <div class="box-tools">
        </div>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <div class="box-body form-horizontal">

        <div class="form-group 1">
            <label for="title" class="col-sm-2 control-label">名称</label>
            <div class=" well well-sm" id="title" >{{ $user->name }}</div>
        </div>
        <div class="form-group 1">
            <label for="title" class="col-sm-2 control-label">描述</label>
            <div class=" well well-sm" id="title" >{{ $user->description }}</div>
        </div>
        <div class="form-group 1">
            <label for="title" class="col-sm-2 control-label">后缀名称</label>
            <div class=" well well-sm" id="title" >{{ $user->domain }}</div>
        </div>
        <div class="form-group 1">
            <label for="title" class="col-sm-2 control-label">logo</label>
            <div class=" well well-sm" id="title" ><img src="{{ config('admin.upload.host').$user->logo }}" alt="" style="width: 200px;height: 200px"></div>
        </div>

        <div class="form-group 1">
            <label for="title" class="col-sm-2 control-label">联系人</label>
            <div class=" well well-sm" id="title" >{{ $user->contacts }}</div>
        </div>
        <div class="form-group 1">
            <label for="title" class="col-sm-2 control-label">联系人电话</label>
            <div class=" well well-sm" id="title" >{{ $user->phone }}</div>
        </div>
        <div class="form-group 1">
            <label for="title" class="col-sm-2 control-label">地址</label>
            <div class=" well well-sm" id="title" >{{ $user->address }}</div>
        </div>
        <div class="form-group 1">
            <label for="title" class="col-sm-2 control-label">业务种类</label>
            <div class=" well well-sm" id="title" >{{ $user->business }}</div>
        </div>
        <div class="form-group 1">
            <label for="title" class="col-sm-2 control-label">创建时间</label>
            <div class=" well well-sm" id="title" >{{ $user->created_at }}</div>
        </div>
        <div class="form-group 1">
            <label for="title" class="col-sm-2 control-label">更新时间</label>
            <div class=" well well-sm" id="title" >{{ $user->updated_at }}</div>
        </div>

        </div>

    </div>


