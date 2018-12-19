@extends("Admin.AdminPublic.public")
@section("admin")

            <!-- 右侧内容框架，更改从这里开始 -->
            <form class="layui-form xbs" action="" >
                <div class="layui-form-pane" style="text-align: center;">
                  <div class="layui-form-item" style="display: inline-block;">
                               
                    <div class="layui-input-inline">
                        <form action="/goods" method="get">
                        <input type="text" name="keywords" value="{{$request['keywords'] or ''}}" placeholder="请输入商品名" autocomplete="off" class="layui-input">
                        </form>
                    </div>

                    <div class="layui-input-inline" style="width:80px">
                        <button class="layui-btn"  lay-submit="" lay-filter="sreach"><i class="layui-icon">&#xe615;</i></button>
                    </div>
                    @if (count($errors) > 0)
<ul>
      @foreach ($errors->all() as $error)
      <li>商品名不能有特殊字符</li>
      @endforeach
</ul>
@endif
        
                  </div>
                </div>
            </form>
            <xblock><a href="/goods/create"><button class="layui-btn" ><i class="layui-icon">&#xe608;</i>添加</button></a><span class="x-right" style="line-height:40px">共有数据：{{count($good)}}条</span></xblock>
            <table class="layui-table">
                <thead>
                    <tr>
                        
                        <th>
                            ID
                        </th>
                        <th>
                            商品名称
                        </th>
                        <th>
                            所属类别
                        </th>
                        <th>
                            是否上架
                        </th>
                        <th>
                            操作
                        </th>
                    </tr>
                </thead>
                <tbody>
                	@foreach($goods as $v)
                    <tr>
                            
                        <td>
                            {{$v->id}}
                        </td>

                        <td>
                            <a href="/goodss/{{$v->id}}">{{$v->goods_name}}</a>
                        </td>
                       	
                        <td>
                            {{$v->pid}}
                        </td>
                        <td class="td-status">
                            <span class="layui-btn layui-btn-normal layui-btn-mini">
                            @if($v->goods_status==1)
                            绝赞热卖中
                            @elseif($v->goods_status==0)
                            已下架
                            @endif
                            <!-- {{$v->goods_status}} -->
                            </span>
                        </td>
                        <td class="td-manage">
                        	<a title="刷新" href="javascript:;" onclick="member_f5()"class="ml-5" style="text-decoration:none">
                                <i class="layui-icon">&#xe618;</i>
                            </a>
                            <a style="text-decoration:none" onclick="member_stop(this,'{{$v->id}}','{{$v->goods_status}}')" href="javascript:;" title="停用">
                                <i class="layui-icon">&#xe601;</i>
                            </a>
                            <a title="编辑" href="/goods/{{$v->id}}/edit" class="ml-5" style="text-decoration:none">
                                <i class="layui-icon">&#xe642;</i>
                            </a>
                             
                            <a title="删除" href="javascript:void(0);" class="del" style="text-decoration:none">
                                <i class="layui-icon">&#xe640;</i>
                            </a>

                        </td>
                    </tr>
                    @endforeach
                </tbody>
                
            </table>
            <div class="dataTables_paginate paging_full_numbers" id="pages">
                {{$goods->appends($request)->render()}}
            </div>
            <!-- 右侧内容框架，更改从这里结束 -->
            <script>
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
                layer.msg('删除成功', {icon: 1});
            });
         }
         /*用户-添加*/
        function member_f5(){
        	history.go(0); 
        }
        function member_add(title,url,w,h){
            x_admin_show(title,url,w,h);
        }
        /*用户-查看*/
        function member_show(title,url,id,w,h){
            x_admin_show(title,url,w,h);
        }

         /*用户-停用*/
        function member_stop(obj,id,status){
            $.get("/goodsstatus",{id:id,status:status},function(data){
                console.log(data);
                // alert(data);
                if(data==0){
                    layer.msg('已下架!',{icon: 5,time:1000});
                    $(obj).parents("tr").find(".td-status").html('<span class="layui-btn layui-btn-normal layui-btn-mini">已下架</span>');
                    src=data;
                }else{
                    layer.msg('已上架!',{icon: 6,time:1000});
                    $(obj).parents("tr").find(".td-status").html('<span class="layui-btn layui-btn-normal layui-btn-mini">绝赞热卖中</span>');
                    
                }
            })
            // layer.confirm('确认要下架吗？',function(index){
                
            //     $(obj).parents("tr").find(".td-status").html('<span class="layui-btn layui-btn-disabled layui-btn-mini">已下架</span>');
            //     layer.msg('已下架!',{icon: 5,time:1000});
            // });
        }

        /*用户-启用*/
        function member_start(obj,id){
            layer.confirm('确认要上架吗？',function(index){
                //发异步把用户状态进行更改
                $(obj).parents("tr").find(".td-manage").prepend('<a style="text-decoration:none" onClick="member_stop(this,id)" href="javascript:;" title="停用"><i class="layui-icon">&#xe601;</i></a>');
                $(obj).parents("tr").find(".td-status").html('<span class="layui-btn layui-btn-normal layui-btn-mini">已上架</span>');
                layer.msg('绝赞热卖中!',{icon: 6,time:1000});
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
        $(".del").click(function(){
            id=$(this).parents("tr").find("td:first").html();
            // alert(id);
            s=$(this).parents("tr");
            ss=confirm('你确定删除吗?');
            if(ss){
            $.get("/goodsdel",{id:id},function(data){
               // alert(data);
               if(data==1){
                s.remove();
                layer.msg('已删除!',{icon: 5,time:1000});
               }
            });
            
            }
        });
        </script>
        <script>
        //百度统计可去掉
        var _hmt = _hmt || [];
        (function() {
          var hm = document.createElement("script");
          hm.src = "https://hm.baidu.com/hm.js?b393d153aeb26b46e9431fabaf0f6190";
          var s = document.getElementsByTagName("script")[0]; 
          s.parentNode.insertBefore(hm, s);
        })();
        </script>
@endsection