@extends("Admin.AdminPublic.public")
@section("admin")
<form class="layui-form" action="/goods" method="post">
@if (count($errors) > 0)
<ul>
      @foreach ($errors->all() as $error)
      <li>商品名不能有特殊字符</li>
      @endforeach
</ul>
@endif
                <div class="layui-form-item">
                    <label for="L_email" class="layui-form-label">
                        <span class="x-red">*</span>商品名字
                    </label>
                    <div class="layui-input-inline">
                        <input type="text" id="L_email" name="goods_name" required="" 
                        autocomplete="off" class="layui-input">
                    </div>
                    <div class="layui-form-mid layui-word-aux">
                        <span class="x-red">*</span>将会成为您唯一的商品名
                    </div>
                </div>
                <div class="layui-form-item">
                    <label for="L_email" class="layui-form-label">
                        <span class="x-red">*</span>是否上架
                    </label>
                    <div class="layui-input-inline">
                        <select name="goods_status">
                        	<option value="1">上架</option>
                        	<option value="0">暂不上架</option>
                        </select>
                    </div>
                </div>
                {{csrf_field()}}
                <div class="layui-form-item">
                    <label for="L_email" class="layui-form-label">
                        <span class="x-red">*</span>所属类别
                    </label>
                    <div class="layui-input-inline">
                        <select name="pid">
                        	<option value="12">运动bra</option>
                        </select>
                    </div>
                </div>
                <div class="layui-form-item">
                    <label for="L_repass" class="layui-form-label">
                    </label>
                    <button  class="layui-btn" lay-filter="add" lay-submit="">
                        增加
                    </button>
                </div>
            </form>
@endsection