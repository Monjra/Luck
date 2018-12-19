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
<xblock><button class="layui-btn" >轮播图添加</button><a class="layui-btn layui-btn-danger" href="/admin_slide">返回</a></xblock>
<form class="layui-form" action="/admin_slide" method="post" enctype="multipart/form-data">
    <div class="layui-form-item">
        <label for="L_email" class="layui-form-label">
            <span class="x-red">*</span>轮播图名
        </label>
        <div class="layui-input-inline" style="width:245px">
            <input type="text"  name="name" class="layui-input">
        </div>
    </div>
    <div class="layui-form-item">
        <label for="L_email" class="layui-form-label">
            <span class="x-red">*</span>图片上传
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
            <option value="0">启用</option>
            <option value="1">关闭</option>
        </select>
        </div>
    </div>
    <div class="layui-form-item">
        <label for="L_email" class="layui-form-label">
            <span class="x-red">*</span>内容
        </label>
        <div class="layui-input-inline" style="width:245px">
            <textarea name="descride" style="width: 242px; height: 149px;outline:none;resize:none;color:#000"></textarea>
        </div>
    </div>
    <div class="layui-form-item">
        <label for="L_repass" class="layui-form-label">
        </label>
        {{csrf_field()}}
        <button  class="layui-btn" lay-filter="add" lay-submit="">
            添加
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