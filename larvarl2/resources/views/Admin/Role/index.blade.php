@extends("Admin.AdminPublic.public")
@section("admin")
        <!-- 左侧菜单结束 -->
        <!-- 右侧主体开始 -->
        <div class="page-content">
          <div class="content">
            <!-- 右侧内容框架，更改从这里开始 -->
            <form class="layui-form xbs" action="/adminrole" >
                <div class="layui-form-pane" style="text-align: center;">
                  <div class="layui-form-item" style="display: inline-block;">
                    <div class="layui-input-inline xbs768">
                    </div>
                    <div class="layui-input-inline xbs768">
                      
                    </div>
                    <div class="layui-input-inline">
                      <input type="text" name="keywords"  placeholder="请输入角色名" autocomplete="off" class="layui-input">
                    </div>
                    <div class="layui-input-inline" style="width:80px">
                        <button class="layui-btn"  lay-submit="" lay-filter="sreach"><i class="layui-icon">&#xe615;</i></button>
                    </div>
                  </div>
                </div> 
            </form>
            <xblock><a class="layui-btn" href="/adminrole/create"><i class="layui-icon">&#xe608;</i>添加</a></xblock>
            <table class="layui-table">
                <thead>
                    <tr>
                        <th>
                            <input type="checkbox" name="" value="">
                        </th>
                        <th>ID</th>
                        <th>角色名</th>
                        <th>操作</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($role as $v)
                    <tr>
                        <td> <input type="checkbox" value="1" name=""></td>
                        <td>{{$v->id}}</td>
                        <td><u style="cursor:pointer" >{{$v->name}}</u> </td>
                        <td class="td-manage">
                            <a style="text-decoration:none" href="./adminauth/{{$v->id}}" title="分配权限">
                                <i class="layui-icon">&#xe608;</i>
                            </a>
                            <a title="编辑" href="/adminrole/{{$v->id}}/edit" class="ml-5" style="text-decoration:none">
                                <i class="layui-icon">&#xe642;</i>
                            </a>
                            <a title="删除" href="javascript:;" onclick="func({{$v->id}},this)"  style="text-decoration:none">
                                <i class="layui-icon">&#xe640;</i>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                <div class="dataTables_paginate paging_full_numbers"style="float:right" id="pages">
                {{$role->appends($request)->render()}}
                </div>
            </table>
            <script>
                function func($id,obj) {
                    $.get('/adminroledel',{'id':$id},function (data) {
                        console.log(data);
                        if(data == 1) {
                            $(obj).parents('tr').remove();
                        }
                    });
                }
            </script>
            <!-- 右侧内容框架，更改从这里结束 -->
@endsection
@section("title","后台首页")