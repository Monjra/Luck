@extends("Admin.AdminPublic.public")
@section("admin")
<body>

    <form class="layui-form" action="/adminpermission/{{$res->id}}" method="post">
    {{csrf_field()}}
    {{ method_field('PUT') }}
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
                <span class="x-red">权限名</span>
            </label>
            <div class="layui-input-inline">
                <input type="text" id="level-name" name="name" required="" lay-verify="required"
                autocomplete="off" value="{{$res->name}}" class="layui-input">
            </div>
        </div>
        <div class="layui-form-item">
            <label for="level-name" class="layui-form-label">
                <span class="x-red">控制器名</span>
            </label>
            <div class="layui-input-inline">
                <input type="text" id="level-name" name="mname" required="" lay-verify="required"
                autocomplete="off" value="{{$res->mname}}" class="layui-input">
            </div>
        </div>
        <div class="layui-form-item">
            <label for="level-name" class="layui-form-label">
                <span class="x-red">方法名</span>
            </label>
            <div class="layui-input-inline">
                <input type="text" id="level-name" name="aname" required="" lay-verify="required"
                autocomplete="off" value="{{$res->aname}}" class="layui-input">
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