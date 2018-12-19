@extends("Admin.AdminPublic.public")
@section("admin")
<form class="layui-form xbs" action="" >
                <div class="layui-form-pane" style="text-align: center;">
                  <div class="layui-form-item" style="display: inline-block;">
                    
                    
                  </div>
                </div> 
            </form>
            <xblock><a href="/goodss/create?id={{$goods->id}}"><button class="layui-btn" ><i class="layui-icon">&#xe608;</i>添加</button></a><span class="x-right" style="line-height:40px">共有数据：{{count($goodss)}} 条</span></xblock>
            <table class="layui-table">
                <thead>
                    <tr>
                        <th>
                            ID
                        </th>
                        <th>
                            商品名字
                        </th>
                        <th>
                            库存
                        </th>
                        <th>
                            价格
                        </th>
                        <th>
                            销量
                        </th>
                        <th>
                            大小
                        </th>
                        <th>
                            颜色
                        </th>
                        <th>
                            图片
                        </th>
                        <th>
                            操作
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        @foreach($goodss as $v)
                          
                        <td>
                            {{$v->id}}
                        </td>
                        <td>
                            {{$goods->goods_name}}
                        </td>
                        <td >
                            {{$v->inventory}}
                        </td>
                        <td >
                            {{$v->price}}
                        </td>
                        <td >
                            {{$v->sales}}
                        </td>
                        <td >
                            {{$v->size}}
                        </td>
                        <td >
                            {{$v->color}}
                        </td>
                        <td >
                            <img src="{{$v->picture}}" height="120px" width="160px">
                        </td>
                        
                        <td class="td-manage">
                            <a title="编辑" href="/goodss/{{$v->id}}/edit" style="text-decoration:none">
                                <i class="layui-icon">&#xe642;</i>
                            </a>
                            <a title="删除" href="javascript:;" onclick="kiss_del(this,'{{$v->id}}')" 
                            style="text-decoration:none">
                                <i class="layui-icon">&#xe640;</i>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
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
            // 等级-增加
            function kiss_add (title,url,id,w,h) {
                x_admin_show(title,url,w,h); 
            }
            // 等级-编辑
            function kiss_edit (title,url,id,w,h) {
                x_admin_show(title,url,w,h); 
            }
           
            /*等级-删除*/
            function kiss_del(obj,id){

                layer.confirm('确认要删除吗？',function(index){
                    //发异步删除数据
                    $.get("/goodssdel",{'id':id},function(data){
                        if(data==1){
                            $(obj).parents("tr").remove();
                            layer.msg('已删除!',{icon:1,time:1000});
                        }
                    });
                    
                });
            }
        </script>
@endsection