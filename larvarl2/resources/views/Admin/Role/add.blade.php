@extends("Admin.AdminPublic.public")
@section("admin")
<body>
    <!-- 中部开始 -->
    <div class="wrapper">
        <!-- 右侧主体开始 -->
        <div class="page-content">
          <div class="content">
            <!-- 右侧内容框架，更改从这里开始 -->
            <form class="layui-form" action="/adminrole" method="post">
                {{csrf_field()}}
                <div class="layui-form-item">
                    <label for="L_username" class="layui-form-label">
                        <span class="x-red">角色名</span>
                    </label>
                    <div class="layui-input-inline">
                        <input type="text" id="L_username" name="name" required="" lay-verify="nikename"
                        autocomplete="off" class="layui-input">
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
            <!-- 右侧内容框架，更改从这里结束 -->
          </div>
        </div>
        <!-- 右侧主体结束 -->
    </div>
@endsection
@section("title","后台首页")