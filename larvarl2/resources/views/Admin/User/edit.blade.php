@extends("Admin.AdminPublic.public")
@section("admin")
<body>

    <form class="layui-form" action="/adminsuser/{{$res->id}}" method="post">
    {{csrf_field()}}
    {{ method_field('PUT') }}
    @if(session('error'))
        <div class="mws-form-message warning">
        <li style="color:red">{{session('error')}}</li>
        </div>
    @endif
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li style="color:red">{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
        <div class="layui-form-item">
            <label for="level-id" class="layui-form-label">
                id
            </label>
            <div class="layui-input-inline">
                <input type="text" id="level-id" name="id" disabled="" value="{{$res->id}}" class="layui-input">
            </div>
        </div>
        <div class="layui-form-item">
            <label for="level-name" class="layui-form-label">
                <span class="x-red">登陆名</span>
            </label>
            <div class="layui-input-inline">
                <input type="text" id="level-name" name="username" required="" lay-verify="required"
                autocomplete="off" value="{{$res->username}}" class="layui-input">
            </div>
        </div>
        <div class="layui-form-item">
            <label for="level-name" class="layui-form-label">
                <span class="x-red">密码</span>
            </label>
            <div class="layui-input-inline">
                <input type="password" id="level-name" name="password" required="" lay-verify="required"
                autocomplete="off" value="{{$res->password}}" class="layui-input">
                <input type="hidden" value="{{$res->password}}"name="pass" >
            </div>
        </div>
        <div class="layui-form-item">
            <label for="L_repass" class="layui-form-label">
            </label>
            <button  class="layui-btn" lay-filter="save" lay-submit="">
                保存
            </button>
        </div>
    </form>
@endsection
@section("title","后台首页")