@extends('Admin.AdminPublic.public')
@section('admin')
 <form class="layui-form" action="/member" method="post">
            @if (count($errors) > 0) 
                <div class="hh">
                    <div class="alert alert-danger " >
                    <div class="mws-form-message error">
                    <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                    </ul>
                    </div>
                    </div>
                </div>
            @endif
                <div class="layui-form-item">
                    <label for="level-name" class="layui-form-label">
                        <span class="x-red"></span>名字
                    </label>
                    <div class="layui-input-inline">
                        <input type="text" id="level-name" name="name" required="" lay-verify="required"
                        autocomplete="off"  class="layui-input" value="{{old('name')}}">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label for="level-kiss" class="layui-form-label">
                        <span class="x-red"></span>手机号码
                    </label>
                    <div class="layui-input-inline">
                        <input type="text" id="level-kiss" name="phone" required=""  lay-verify="required"
                        autocomplete="off" class="layui-input" value="{{old('phone')}}">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label for="level-kiss" class="layui-form-label">
                        <span class="x-red"></span>密码
                    </label>
                    <div class="layui-input-inline">
                        <input type="password" id="level-kiss" name="password" required=""  lay-verify="required"
                        autocomplete="off" class="layui-input" value="{{old('password')}}">
                    </div>
                </div>
                  <div class="layui-form-item">
                    <label for="level-kiss" class="layui-form-label">
                        <span class="x-red"></span>确认密码
                    </label>
                    <div class="layui-input-inline">
                        <input type="password" id="level-kiss" name="repassword" required=""  lay-verify="required"
                        autocomplete="off" class="layui-input" >
                    </div>
                </div>
                <div class="layui-form-item">
                    <label for="level-kiss" class="layui-form-label">
                        <span class="x-red"></span>邮箱
                    </label>
                    <div class="layui-input-inline">
                        <input type="text" id="level-kiss" name="email" required=""  lay-verify="required"
                        autocomplete="off" class="layui-input" value="{{old('email')}}">
                    </div>
                </div>
              
                <div class="layui-form-item">
                    <label for="L_repass" class="layui-form-label">
                    </label>
                      {{csrf_field()}}
                  
                    <button  class="layui-btn" lay-filter="save" lay-submit="">
                        保存
                    </button>
                </div>
            </form>
            <script type="text/javascript">
                // alert($);
                 $('.hh').click(function(){
                        // alert(1);
                        $(this).toggle();
                });
            </script>
@endsection
@section('title','会员添加')