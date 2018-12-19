@extends("Admin.AdminPublic.public")
@section("admin")
@if (count($errors) > 0)
      <div class="error" style="cursor: pointer">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
    @endif 
<xblock><button class="layui-btn" >轮播图修改</button><a class="layui-btn layui-btn-danger" href="/admin_slide">返回</a></xblock>
<form class="layui-form" action="/admin_slide/{{$slide->id}}" method="post" enctype="multipart/form-data">
    <div class="layui-form-item">
        <label for="L_email" class="layui-form-label">
            <span class="x-red">*</span>轮播图名
        </label>
        <div class="layui-input-inline" style="width:245px">
            <input type="text"  name="name" class="layui-input" value="{{$slide->name}}">
        </div>
    </div>
    <div class="layui-form-item">
        <label for="L_email" class="layui-form-label">
            <span class="x-red">*</span>图片
        </label>
        <div class="layui-input-inline" style="width:245px">
            <img src="{{$slide->url}}" width="100px">
        </div>
    </div>
    <div class="layui-form-item">
        <label for="L_email" class="layui-form-label">
            <span class="x-red">*</span>新图
        </label>
        <div class="layui-input-inline" style="width:245px">
            <input type="file"  name="url" class="layui-input" style="background-color: rgba(0, 0, 0, 0);border:0px;">
        </div>
    </div>
    <div class="layui-form-item">
        <label for="L_email" class="layui-form-label">
            <span class="x-red">*</span>状态
        </label>
        <div class="layui-input-inline" style="width:245px">
        <select name="status">
            <option value="" disable>--请选择--</option>
            <option value="0" {{($slide->status==0)?'selected':''}}>启用</option>
            <option value="1"{{($slide->status==1)?'selected':''}}>关闭</option>
        </select>
        </div>
    </div>
    <div class="layui-form-item">
        <label for="L_email" class="layui-form-label">
            <span class="x-red">*</span>内容
        </label>
        <div class="layui-input-inline" style="width:245px">
            <textarea name="descride" style="width: 242px; height: 149px;outline:none;resize:none;color:#000">{{$slide->descride}}</textarea>
        </div>
    </div>
    <div class="layui-form-item">
        <label for="L_repass" class="layui-form-label">
        </label>
        {{csrf_field()}}
        {{method_field("PUT")}}
        <button  class="layui-btn" lay-filter="add" lay-submit="">
            修改
        </button>
    </div>
</form>
<script>
    $(".error").click(function(){
        $(this).css("display","none");
    });
</script>
@endsection
@section("title","轮播图添加")