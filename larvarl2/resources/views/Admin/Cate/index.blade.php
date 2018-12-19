@extends("Admin.AdminPublic.public")
@section("admin")
<form class="layui-form xbs" action="/admin_cate" methop="get">
    @if (count($errors) > 0)
      <div class=" error" style="cursor: pointer">
          <ul>
          @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach
          </ul>
      </div>
    @endif 
    <div class="layui-form-pane" style="text-align: center;">
      <div class="layui-form-item" style="display: inline-block;">
        <div class="layui-input-inline">
          <input type="text" name="keywords" class="layui-input" value="{{$request['keywords'] or ''}}">
        </div>
        <div class="layui-input-inline" style="width:80px">
            <button class="layui-btn"  lay-submit="" lay-filter="sreach"><i class="layui-icon">&#xe615;</i></button>
        </div>
      </div>
    </div> 
</form>
<xblock><a href="/admin_cate" class="layui-btn layui-btn-danger" >分类列表</a><a class="layui-btn" href="/admin_cate/create"><i class="layui-icon">&#xe608;</i>添加</a><span class="x-right" style="line-height:40px">共有数据：{{count($type)}}/{{$num}} 条</span></xblock>
<table class="layui-table">
    <thead>
        <tr>
            <th>
                ID
            </th>
            <th>
                分类
            </th>
            <th>
                pid
            </th>
            <th>
                path
            </th>
            <th>
                status
            </th>
            <th>
                操作
            </th>
        </tr>
    </thead>
    <tbody>
    @foreach($type as $row)
        <tr>
            <td>
                {{$row->type_id}}
            </td>
            <td>
                {{$row->type_name}}
            </td>
            <td >
                {{$row->type_pid}}
            </td>
            <td>
                {{$row->type_path}}
            </td>
            <td class="td-status">
            @if($row->type_status==0)
                <span class="layui-btn layui-btn-normal layui-btn-mini">启用</span>
            @elseif($row->type_status==1)
                <span class="layui-btn layui-btn-disabled layui-btn-mini">已停用</span>
            @endif
            </td>
            <td class="td-manage">
                @if($row->type_status==0)
                <a style="text-decoration:none" class="stop" onclick="stop(this)" href="javascript:;" title="停用">
                    <i class="layui-icon">&#xe601;</i>
                </a>
                @elseif($row->type_status==1)
                <a style="text-decoration:none" class="start" onclick="start(this)" href="javascript:;" title="启用">
                    <i class="layui-icon">&#xe62f;</i>
                </a>
                @endif
                <a title="编辑" href="/admin_cate/{{$row->type_id}}/edit"  style="text-decoration:none">
                    <i class="layui-icon">&#xe642;</i>
                </a>
                <a title="删除" href="javascript:void(0);" class="del" onclick="del(this)" style="text-decoration:none">
                    <i class="layui-icon">&#xe640;</i>
                </a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<div class="dataTables_paginate paging_full_numbers"style="float:right" id="pages">
{{$type->appends($request)->render()}}
</div>
<!-- 页面动态效果 -->
<script>
/*用户-停用*/
function stop(obj){
    id=$(obj).parents('tr').find("td:first").html();
    a=$(obj).parents('tr');
    layer.confirm('确认要停用吗？',function(){
        $.get('/admin_catestop',{id:id},function(data){
            if(data==1){
                a.find(".td-manage").prepend('<a style="text-decoration:none" onclick="start(this)" class="start" href="javascript:;" title="启用"><i class="layui-icon">&#xe62f;</i></a>');
                a.find(".td-status").html('<span class="layui-btn layui-btn-disabled layui-btn-mini">已停用</span>');
                a.find(".td-manage").find(".stop").remove();
                layer.msg('已停用!',{icon: 5,time:1000});
            }else{
                layer.msg('修改失败!',{icon: 5,time:1000});
            }
        });
    });
}

/*用户-启用*/
function start(obj){
    id=$(obj).parents('tr').find("td:first").html();
    b=$(obj).parents("tr");
    layer.confirm('确认要启用吗？',function(){
        $.get('/admin_catestart',{id:id},function(data){
            if(data==1){
                b.find(".td-manage").prepend('<a style="text-decoration:none" onclick="stop(this)" class="stop" href="javascript:;" title="停用"><i class="layui-icon">&#xe601;</i></a>');
                b.find(".td-status").html('<span class="layui-btn layui-btn-normal layui-btn-mini">启用</span>');
                b.find(".td-manage").find(".start").remove();
                layer.msg('已启用!',{icon: 6,time:1000});
            }
        });
    });
}
        
function del(obj){
    id=$(obj).parents('tr').find("td:first").html();
    s=$(obj).parents("tr");
    layer.confirm('确认要删除吗？',function(){
        $.get("/admin_catedel",{id:id},function(data){
            if(data==1){s
                s.remove();
                layer.msg('已删除!',{icon:1,time:1000});
            }else if(data==2){
                layer.msg('请把子类删了,再来删除',{icon:1,time:1000});
            }else{
                layer.msg('删除失败!',{icon:1,time:1000});
            }
        });
    });
}
</script>
<script>
    $(".error").click(function(){
        $(this).css("display","none");
    });
</script>
        
@endsection
@section("title","分类列表")