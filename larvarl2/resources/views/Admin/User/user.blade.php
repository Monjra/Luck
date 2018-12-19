@extends("Admin.AdminPublic.public")
@section("admin")
        <!-- 左侧菜单结束 -->
        <!-- 右侧主体开始 -->
        <div class="page-content">
          <div class="content">
            <!-- 右侧内容框架，更改从这里开始 -->
            <form class="layui-form xbs" action="/adminsuser">
                <div class="layui-form-pane" style="text-align: center;">
                  <div class="layui-form-item" style="display: inline-block;">
                   
                    <div class="layui-input-inline xbs768">
                      
                    </div>
                    <div class="layui-input-inline">
                      <input type="text" name="keywords"  placeholder="请输入用户名" autocomplete="off" class="layui-input">
                    </div>
                    <div class="layui-input-inline" style="width:80px">
                        <button class="layui-btn"  lay-submit="" lay-filter="sreach"><i class="layui-icon">&#xe615;</i></button>
                    </div>
                  </div>
                </div> 
            </form>
            <xblock><a class="layui-btn" href="./adminsuser/create"><i class="layui-icon">&#xe608;</i>添加</a></xblock>
            @if(session('success'))
                    <div class="alert alert-success">
                    <li style="color:red" class="success">{{session('success')}}</li>
                    </div>
            @endif
            <table class="layui-table">
                <thead>
                    <tr>
                        <th>
                            <input type="checkbox" name="" value="">
                        </th>
                        <th>ID</th>
                        <th>登陆名 </th>
                        <th>操作</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($admin as $v)
                    <tr>
                        <td> <input type="checkbox" value="1" name=""></td>
                        <td> {{$v->id}}</td>
                        <td><u style="cursor:pointer" onclick="member_show('张三','member-show.html','10001','360','400')"> {{$v->username}} </u> </td>
                        <td class="td-manage">
                            <a style="text-decoration:none" href="./adminroles/{{$v->id}}" title="分配角色">
                                <i class="layui-icon">&#xe608;</i>
                            </a>
                            <a title="编辑" href="/adminsuser/{{$v->id}}/edit" class="ml-5" style="text-decoration:none">
                                <i class="layui-icon">&#xe642;</i>
                            </a>
                           
                            <a title="删除" href="javascript:;" onclick="func({{$v->id}},this)" style="text-decoration:none">
                                <i class="layui-icon">&#xe640;</i>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                  

                </tbody>
                
            </table>
            <div class="dataTables_paginate paging_full_numbers"style="float:right" id="pages">
            {{$admin->appends($request)->render()}}
            <div class="dataTables_paginate paging_full_numbers"style="float:right" id="pages">
            <script>
                function func($id,obj) {
                    $.get('/adminsuserdel',{'id':$id},function (data) {
                        if(data == 1) {
                            $(obj).parents('tr').remove();
                        }
                    });
                }
            </script>
            <!-- 右侧内容框架，更改从这里结束 -->
@endsection
@section("title","后台首页")