@extends("Admin.AdminPublic.public")
@section("admin")
<form class="layui-form" action="/goodss" method="post" enctype="multipart/form-data">  
                <div class="layui-form-item">
                    <label for="L_email" class="layui-form-label">
                        <span class="x-red">*</span>库存
                    </label>
                    <div class="layui-input-inline">
                        <input type="text" id="L_email" name="inventory" required="" 
                        autocomplete="off" class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label for="L_email" class="layui-form-label">
                        <span class="x-red">*</span>价格
                    </label>
                    <div class="layui-input-inline">
                        <input type="text" id="L_email" name="price" required="" 
                        autocomplete="off" class="layui-input">
                    </div>
                </div>
                
                <div class="layui-form-item">
                    <label for="L_email" class="layui-form-label">
                        <span class="x-red">*</span>大小
                    </label>
                    <div class="layui-input-inline">
                        <input type="text" id="L_email" name="size" required="" 
                        autocomplete="off" class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label for="L_email" class="layui-form-label">
                        <span class="x-red">*</span>销量
                    </label>
                    <div class="layui-input-inline">
                        <input type="text" id="L_email" name="sales" required="" 
                        autocomplete="off" class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label for="L_email" class="layui-form-label">
                        <span class="x-red">*</span>颜色
                    </label>
                    <div class="layui-input-inline">
                        <input type="text" id="L_email" name="color" 
                        autocomplete="off" class="layui-input" value="">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label for="L_email" class="layui-form-label">
                        <span class="x-red">*</span>图片
                    </label>
                    <div class="layui-input-inline">
                        <input type="file"  name="picture" value="">
                    </div>
                </div>
                <input type="hidden" name="goods_id" value="{{$_GET['id']}}" ">
                {{csrf_field()}}
                
                <div class="layui-form-item">
                    <label for="L_repass" class="layui-form-label">
                    </label>
                    <button  class="layui-btn" lay-filter="add" lay-submit="">
                        增加
                    </button>
                </div>
            </form>
@endsection