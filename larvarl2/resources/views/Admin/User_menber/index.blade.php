@extends('Admin.AdminPublic.public')
@section('admin')
<html>
 <head></head>
 <body>
  <div class="page-content"> 
   <div class="content"> 
    <!-- 右侧内容框架，更改从这里开始 --> 
    <form class="layui-form xbs" action="/member" method="get"> 
     <div class="layui-form-pane" style="text-align: center;"> 
      <div class="layui-form-item" style="display: inline-block;"> 
       <label class="layui-form-label xbs768">日期范围</label> 
       <div class="layui-input-inline xbs768"> 
        <input class="layui-input" placeholder="开始日" id="LAY_demorange_s" /> 
       </div> 
       <div class="layui-input-inline xbs768"> 
        <input class="layui-input" placeholder="截止日" id="LAY_demorange_e" /> 
       </div> 
       <div class="layui-input-inline"> 
        <input type="text" name="name" placeholder="请输入用户名" autocomplete="off" class="layui-input" value=" {{$request['name'] or ''}}" />  
       </div> 
       <div class="layui-input-inline" style="width:80px"> 
        <button class="layui-btn" lay-submit="" lay-filter="sreach"><i class="layui-icon"></i></button> 
       </div> 
      </div> 
     </div> 
    </form> 
    <xblock>
   <!--   <button class="layui-btn layui-btn-danger" onclick="delAll()"><i class="layui-icon"></i>批量删除</button> -->
     <a href="/member/create"><button class="layui-btn" ><i class="layui-icon"></i>添加</button></a>
     <span class="x-right" style="line-height:40px">共{{$user->count()}}条数据</span>
    </xblock> 
    <table class="layui-table"> 
     <thead> 
      <tr> 
       <th> ID </th> 
       <th> 名字 </th> 
       <th> 手机号码</th> 
       <th> 邮箱 </th>  
       <th> 添加时间 </th> 
       <th> 修改时间 </th> 
        <th> 状态 </th> 
       <th> 操作 </th> 
      </tr> 
     </thead> 
     <tbody> 
        @foreach($user as $v)
      <tr>  
       <td> {{$v->id}}</td> 
       <td> {{$v->name}}</u> </td> 
       <td> {{$v->phone}}</td> 
       <td> {{$v->email}} <span>元</span></td>  
       <td> {{$v->created_at}} </td> 
       <td> {{$v->updated_at}} </td> 
       <td ><button class="layui-btn layui-btn-normal layui-btn-mini " onclick="status(this)" >{{$v->status}}</button></td>
       <td class="td-manage"> </a> 
        <a href="/member/{{$v->id}}" class="btn btn-success " style="border:0;">会员详细</a> 
      </td>
      </tr>  
      @endforeach
     </tbody> 
    </table>
    <div class="dataTables_paginate paging_full_numbers" id="pages">
      <!-- 分页 -->
       {{$user->appends($request)->render()}}
    </div>
    <!-- 右侧内容框架，更改从这里结束 --> 
   </div> 
  </div>
 </body>
     <script>
        //ajax删除
       $('.del').click(function(){
        // alert($);
         layer.confirm('确认要删除吗？',function(index){
                //发异步删除数据
                $(obj).parents("tr").remove();
                layer.msg('已删除!',{icon:1,time:1000});
            });
       })
        // alert($);

        // 会员状态
        // 状态给点击事件
      function status(obj){
         id = $(obj).parents("tr").find("td:first").html();
         // alert(1);
        $.get("/ms",{id:id},function(data){
            layer.confirm('确认要禁止吗？',function(index){
                $(obj).parents("tr").find("td:nth-child(7)").html('以禁止');
                layer.msg('已禁止!',{icon:1,time:1000});
                
                });
            });
        }


        layui.use(['laydate'], function(){
          laydate = layui.laydate;//日期插件

          //以上模块根据需要引入
          //
          var start = {
            min: laydate.now()
            ,max: '2099-06-16 23:59:59'
            ,istoday: false
            ,choose: function(datas){
              end.min = datas; //开始日选好后，重置结束日的最小日期
              end.start = datas //将结束日的初始值设定为开始日
            }
          };
          
          var end = {
            min: laydate.now()
            ,max: '2099-06-16 23:59:59'
            ,istoday: false
            ,choose: function(datas){
              start.max = datas; //结束日选好后，重置开始日的最大日期
            }
          };
          
          document.getElementById('LAY_demorange_s').onclick = function(){
            start.elem = this;
            laydate(start);
          }
          document.getElementById('LAY_demorange_e').onclick = function(){
            end.elem = this
            laydate(end);
          }
          
        });

        //批量删除提交
         function delAll () {
            layer.confirm('确认要删除吗？',function(index){
                //捉到所有被选中的，发异步进行删除
                layer.msg('删除成功', {icon: 1}) ;
            });
         }
         /*用户-添加*/
        function member_add(title,url,w,h){
            x_admin_show(title,url,w,h);
        }
        /*用户-查看*/
        function member_show(title,url,id,w,h){
            x_admin_show(title,url,w,h);
        }

         /*用户-停用*/
        function member_stop(obj,id){
            layer.confirm('确认要停用吗？',function(index){
                //发异步把用户状态进行更改
                $(obj).parents("tr").find(".td-manage").prepend('<a style="text-decoration:none" onClick="member_start(this,id)" href="javascript:;" title="启用"><i class="layui-icon">&#xe62f;</i></a>');
                $(obj).parents("tr").find(".td-status").html('<span class="layui-btn layui-btn-disabled layui-btn-mini">已停用</span>');
                $(obj).remove();
                layer.msg('已停用!',{icon: 5,time:1000});
            });
        }

        /*用户-启用*/
        function member_start(obj,id){
            layer.confirm('确认要启用吗？',function(index){
                //发异步把用户状态进行更改
                $(obj).parents("tr").find(".td-manage").prepend('<a style="text-decoration:none" onClick="member_stop(this,id)" href="javascript:;" title="停用"><i class="layui-icon">&#xe601;</i></a>');
                $(obj).parents("tr").find(".td-status").html('<span class="layui-btn layui-btn-normal layui-btn-mini">已启用</span>');
                $(obj).remove();
                layer.msg('已启用!',{icon: 6,time:1000});
            });
        }
        // 用户-编辑
        function member_edit (title,url,id,w,h) {
            x_admin_show(title,url,w,h); 

        }
        /*密码-修改*/
        function member_password(title,url,id,w,h){
            x_admin_show(title,url,w,h); 
             
        }
        /*用户-删除*/
        function member_del(obj,id){
            layer.confirm('确认要删除吗？',function(index){
                //发异步删除数据
                $(obj).parents("tr").remove();
                layer.msg('已删除!',{icon:1,time:1000});
            });
        }
        </script>
</html>
@endsection
@section('title','会员列表')