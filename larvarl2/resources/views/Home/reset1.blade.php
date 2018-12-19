@extends("Home.HomePublic.public")
@section('home')
<div class="wrap h580">
    <div class="loginItem  ">
        <form class="loginBox" method="post" action="/doreset">
            <div class="inline loginTitBox"><i class="inline loginListBg spIcon mg_r10"></i><span class="inline">设置密码</span></div><br />

          <dl class="mg_t20">
                    <!-- <dt class="inline">确认密码：</dt> -->
                    <dd class="inline mg_r5">
                        <label style="font-size:18px;">密码：</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="password"    class=" loginTxt  col_999" name="password"  autocomplete="off" id="inp2" width="800px" /><font id="myfont2"></font>
                    </dd>
                   
                </dl>
                 <dl class="mg_t20">
                    <!-- <dt class="inline">确认密码：</dt> -->
                    <dd class="inline mg_r5">
                        <label style="font-size:18px;">确认密码：</label>&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="password"   class=" loginTxt  col_999" name="repassword"  autocomplete="off" id="inp4" width="800px" /><font id="myfont4"></font>
                    </dd>
                    <dd class="inline col_f90 J_validate" id="error2"></dd>
                </dl>
            {{csrf_field()}}
            <input type="hidden" name="id" value="{{$id}}">
            <input type="submit" class="loginBtn w400 inline t_c mg_t20" value="登录"/>
        </form>
        <script type="text/javascript">
     
        // 密码
        var inp2= document.getElementById('inp2');
        var myfont2=document.getElementById('myfont2');

        inp2.onfocus=function(){
            myfont2.innerHTML='&nbsp;&nbsp;&nbsp;请输入正确的密码';
            myfont2.color="#666666";
            myfont2.size=2;
        }

        inp2.onblur=function(){
            // 获取input值
            str=this.value;
            if(str.match(/^[a-zA-Z0-9_-]{4,16}$/)==null){
                myfont2.innerHTML='&nbsp;&nbsp;&nbsp;请输入正确的密码';
                myfont2.color='red';
            }else{
                myfont2.innerHTML='&nbsp;&nbsp;&nbsp;正确';
                myfont2.color='green';
            }
            
        }
             // 确认密码
        var inp4=document.getElementById('inp4');
        var myfont4=document.getElementById('myfont4');
        inp4.onfocus=function(){
            myfont4.innerHTML='&nbsp;&nbsp;&nbsp;密码必须为6-16位的任意数字 字母 下划线';
            myfont4.color="#666666";
            myfont4.size=2;
        }

        inp4.onblur=function(){
            // 获取input值
            str2=this.value;
            if(str!=str2){
                myfont4.innerHTML='&nbsp;&nbsp;&nbsp;两次密码不正确';
                myfont4.color='red';
            }else{
                myfont4.innerHTML='&nbsp;&nbsp;&nbsp;正确';
                myfont4.color='green';
            }
            
        }
        </script>
    </div>
</div>

@endsection
@section('title','重置密码')