@extends('Admin.AdminPublic.public')
@section('admin')
 <form class="layui-form" action="/order/{{$order->id}}" method="post">
                <div class="layui-form-item">
                    <label for="L_email" class="layui-form-label">
                        &nbsp;
                    </label>
                    <div class="layui-input-inline">
                        用户名<input type="text" id="L_email" name="user_name" 
                        autocomplete="off" value="{{$order->user_name}}" class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label for="L_username" class="layui-form-label">
                        &nbsp;
                    </label>
                    <div class="layui-input-inline">
                         地址<input type="text" id="L_username" name="address" required lay-verify="required"
                        autocomplete="off" value="{{$order->address}}" class="layui-input">
                    </div>
                    <div class="layui-inline">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label for="L_city" class="layui-form-label">
                    &nbsp;
                    </label>
                    <div class="layui-input-inline">
                        价钱<input type="text" id="L_city" name="money" autocomplete="off" value="{{$order->money}}"
                        class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item layui-form-text">
                    <label for="L_sign" class="layui-form-label">
                       &nbsp;
                    </label>
                    <div class="layui-input-block">
                        订单号<input type="text" id="L_city" name="order_sn" autocomplete="off" value="{{$order->order_sn}}"
                        class="layui-input">
                    </div>
                </div>
                 <div class="layui-form-item layui-form-text">
                    <label for="L_sign" class="layui-form-label">
                        &nbsp;
                    </label>
                    <div class="layui-input-block">
                       手机号码<input type="text" id="L_city" name="phone" autocomplete="off" value="{{$order->phone}}"
                        class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item">
                    {{csrf_field()}}
                    {{ method_field('PUT') }}
                    <input type="submit" value="保存" class="btn btn-danger" />
                </div>
            </form>
@endsection
@section('title','订单修改')