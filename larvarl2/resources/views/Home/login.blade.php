@extends("Home.HomePublic.public")
@section('home')
<div class="wrap h580">
    <div class="loginItem auto ">
        <form class="loginBox" method="post" action="/login">

            <content>
            <div class="inline loginTitBox"><i class="inline loginListBg spIcon mg_r10"></i><span class="inline">用户登录</span></div><br />
             <font id="myfont5" color="red">&nbsp;&nbsp;&nbsp;
            @if(session('error'))
                {{session('error')}}
            @endif
            </font> 
            <dl class="mg_t20 ">
                 <label style="font-size:18px;">邮箱：</label>&nbsp;&nbsp;&nbsp;
                    <input type="text"  value="{{old('email')}}"  class=" loginTxt  col_999" name="email"  autocomplete="off" id="inp1" width="800px" /><font id="myfont1"></font>
            </dl>
             <dl class="mg_t20 ">
                 <label style="font-size:18px;">密码：</label>&nbsp;&nbsp;&nbsp;
                    <input type="password" value="{{old('password')}}"  class=" loginTxt  col_999" name="password"  autocomplete="off" id="inp2" width="800px" /><font id="myfont2"></font>
            </dl>
              <dl class="mg_t20">
                    <!-- <dt class="inline">确认密码：</dt> -->
                    <dd class="inline mg_r5">
                        <label ><span style="font-size:18px;">验证码：</span></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <img src="/code"  onclick="this.src=this.src+'?a=1'">&nbsp;&nbsp;看不清请点击图片换一张
                    </dd>
                    <dd class="inline col_f90 J_validate" id="error2"></dd>
                </dl>
                     <dl class="mg_t20">
                    <!-- <dt class="inline">确认密码：</dt> -->
                    <dd class="inline mg_r5">
                        <label style="font-size:18px;">输入验证码：</label>
                        <input id="" type="text" value=""  class=" loginTxt   border col_999" name="fcode" width="500px" autocomplete="off" id="inp5" />
                        
                        
                    </dd>
                    <dd class="inline col_f90 J_validate" id="error2"></dd>
                </dl>
            <dl class="mg_t20 w400 relative">
                <!-- <dt class="inline">&nbsp</dt> -->
                <dd class="inline">
                    <a href="/forget" class="inline col_link boxR">忘记密码</a>
                </dd>
            </dl>
            <dl class="mg_t10">
                <dd class="J_loginTips inline "><span class="col_f90"></span></dd>
            </dl>
            {{csrf_field()}}
            <input href="javascript:;" type="submit" class="loginBtn w400 inline t_c mg_t20" value="登录"/>
            </content>
        </form>
        <script type="text/javascript">
        // 邮箱
        var inp1=document.getElementById('inp1');
        var myfont1=document.getElementById('myfont1');

        // 获取焦点
        inp1.onfocus=function(){

            // console.log('获取焦点');
            myfont1.innerHTML='&nbsp;&nbsp;&nbsp;请输入正确的邮箱地址';
            myfont1.color="#666666";
            myfont1.size=2;
    }
        inp1.onblur=function(){
            // 获取里面的值
            str=this.value;
            if(str.match(/^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/)==null){
                myfont1.innerHTML='&nbsp;&nbsp;&nbsp;邮箱不正确';
                myfont1.color='red';
            }else{
                myfont1.innerHTML='&nbsp;&nbsp;&nbsp;正确';
                myfont1.color='green';
            }
        }

        // 密码
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
            if(str1.match(/^[a-zA-Z0-9_-]{4,16}$/)==null){
                myfont2.innerHTML='&nbsp;&nbsp;&nbsp;请输入正确的密码';
                myfont2.color='red';
            }else{
                myfont2.innerHTML='&nbsp;&nbsp;&nbsp;正确';
                myfont2.color='green';
            }
            
        }
        </script>
    </div>
</div>

@endsection
@section('title','登录')