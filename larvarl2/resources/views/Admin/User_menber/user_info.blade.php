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
     <span class="x-right" style="line-height:40px"></span>
    </xblock> 
    <table class="layui-table"> 
     <thead> 
      <tr> 
       <th> <input type="checkbox" name="" value="" /> </th> 
       <th> ID </th> 
       <th> 性别 </th> 
       <th> 爱好</th>  
       <th> 操作 </th> 
      </tr> 
     </thead> 
     <tbody> 
      <tr> 
        @if(!empty($info))
       <td> <input type="checkbox" value="1" name="" /></td> 
       <td> {{$info->id}}</td>
       <td> {{$info->sex}}</td> 
       <td>{{$info->hobby}}</td> 
       <td class="td-manage"> </a> 
        <a href="" class="btn btn-success " style="border:0;">删除</a> 
      </td>
      @else
      <td>没有数据</td>
     @endif
     
      </tr>  
     </tbody> 
    </table>
    <div class="dataTables_paginate paging_full_numbers" id="pages">
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
        // 订单状态
        // 给点击事件
      // $('.order').click(function(){
      //   // alert(1);
      //   $(this).html('发货成功');
      //   // 提示
      //    layer.msg('发货成功', {icon: 1});
      //   // 让按钮失效 pointer-events: none; 
      //   $(this).css('pointer-events','none');
      // })

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
@section('title','订单列表')