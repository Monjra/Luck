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
<xblock><button class="layui-btn" >分类添加</button><a class="layui-btn layui-btn-danger" href="/admin_cate">返回</a></xblock>
<form class="layui-form" action="/admin_cate" method="post">
    <div class="layui-form-item">
        <label for="L_email" class="layui-form-label">
            <span class="x-red">*</span>分类名
        </label>
        <div class="layui-input-inline">
            <input type="text"  name="type_name" class="layui-input">
        </div>
    </div>
    <div class="layui-form-item">
        <label for="L_email" class="layui-form-label">
            <span class="x-red">*</span>状态
        </label>
        <div class="layui-input-inline">
        <select name="type_status">
            <option value="" disable>--请选择--</option>
            <option value="0">启用</option>
            <option value="1">关闭</option>
        </select>
        </div>
    </div>
    <div class="layui-form-item">
        <label for="L_username" class="layui-form-label">
            <span class="x-red">*</span>父类
        </label>
        <div class="layui-input-inline">
        <select name="type_pid">
            <option value="0">--请选择--</option>
            @foreach($type as $row)
            <option value="{{$row->type_id}}">{{$row->type_name}}</option>
            @endforeach
        </select>
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
@section("title","分类添加")