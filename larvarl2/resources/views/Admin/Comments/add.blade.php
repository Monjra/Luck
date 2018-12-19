@extends("Admin.AdminPublic.public")
@section("admin")
<form class="layui-form" action="/comments/{{$comments->id}}" method="post">
                <div class="layui-form-item">
                    <label for="L_email" class="layui-form-label">
                        <span class="x-red">*</span>评价回复
                    </label>
                    <div class="layui-input-inline">
                        <input type="text" id="L_email" name="reply" required="" 
                        autocomplete="off" class="layui-input">
                    </div>
                    <div class="layui-form-mid layui-word-aux">
                        <span class="x-red">*</span>请填写回复
                    </div>
                </div>
                
                {{csrf_field()}}
                {{ method_field('PUT') }}
                <div class="layui-form-item">
                    <label for="L_repass" class="layui-form-label">
                    </label>
                    <button  class="layui-btn" lay-filter="add" lay-submit="">
                        回复
                    </button>
                </div>
            </form>
@endsection