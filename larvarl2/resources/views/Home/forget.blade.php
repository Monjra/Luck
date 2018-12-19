@extends("Home.HomePublic.public")
@section('home')
<div class="wrap h580">
    <div class="loginItem auto ">
        <form class="loginBox" method="post" action="/doforget">

            <content>
            <div class="inline loginTitBox"><i class="inline loginListBg spIcon mg_r10"></i><span class="inline">找回密码</span></div><br />
             <font id="myfont5" color="red">&nbsp;&nbsp;&nbsp;
            @if(session('error'))
                {{session('error')}}
            @endif
            </font> 
            <dl class="mg_t20 ">
                 <label style="font-size:18px;">邮箱：</label>&nbsp;&nbsp;&nbsp;
                    <input type="text"    class=" loginTxt w360 col_999" name="email"  autocomplete="off" id="inp1" width="800px" /><font id="myfont1"></font>
            </dl>
            <dl class="mg_t10">
                <dd class="J_loginTips inline "><span class="col_f90"></span></dd>
            </dl>
            {{csrf_field()}}
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input href="javascript:;" type="submit" class="loginBtn w360 inline t_c mg_t20" value="找回密码"/>
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
        </script>
    </div>
</div>

@endsection
@section('title','找回密码')