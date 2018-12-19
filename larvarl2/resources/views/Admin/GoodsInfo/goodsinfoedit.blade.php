@extends("Admin.AdminPublic.public")
@section("admin")
<form class="layui-form" action="/goodss/{{$goodss->id}}" method="post" enctype="multipart/form-data">
                <div class="layui-form-item">
                    <label for="L_email" class="layui-form-label">
                        <span class="x-red">*</span>库存
                    </label>
                    <div class="layui-input-inline">
                        <input type="text" id="L_email" name="inventory" required="" 
                        autocomplete="off" class="layui-input" value="{{$goodss->inventory}}">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label for="L_email" class="layui-form-label">
                        <span class="x-red">*</span>大小
                    </label>
                    <div class="layui-input-inline">
                        <input type="text" id="L_email" name="size" required="" 
                        autocomplete="off" class="layui-input" value="{{$goodss->size}}">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label for="L_email" class="layui-form-label">
                        <span class="x-red">*</span>价格
                    </label>
                    <div class="layui-input-inline">
                        <input type="text" id="L_email" name="price" required="" 
                        autocomplete="off" class="layui-input" value="{{$goodss->price}}">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label for="L_email" class="layui-form-label">
                        <span class="x-red">*</span>颜色
                    </label>
                    <div class="layui-input-inline">
                        <input type="text" id="L_email" name="color" required="" 
                        autocomplete="off" class="layui-input" value="{{$goodss->color}}">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label for="L_email" class="layui-form-label">
                        <span class="x-red">*</span>图片
                    </label>
                    <img src="{{$goodss->picture}}">
                </div>
                <div class="layui-form-item">
                    <label for="L_email" class="layui-form-label">
                        <span class="x-red">*</span>新图片
                    </label>
                    <div class="layui-input-inline">
                        <input type="file"  name="picture" value="">
                    </div>
                </div>
                {{ method_field('PUT') }}
                {{csrf_field()}}
                <input type="hidden" value="{{$goodss->goods_id}}" name="goods_id">
                <input type="hidden" value="{{$goodss->sales}}" name="sales">
                <input type="hidden" value="{{$goodss->id}}" name="id">
                <div class="layui-form-item">
                    <label for="L_repass" class="layui-form-label">
                    </label>
                    <button  class="layui-btn" lay-filter="add" lay-submit="">
                        修改
                    </button>
                </div>
            </form>
			<script language="javascript">window.opener.document.location.reload()</script>
@endsection