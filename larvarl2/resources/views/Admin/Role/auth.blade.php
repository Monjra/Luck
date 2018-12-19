@extends("Admin.AdminPublic.public")
@section("admin")
<html>
<head></head>
<body>
<div class="container">
    <div class="mws-panel-body no-padding">
        <form class="mws-form" action="/saveauth" method="post">
        <div >
            <div >
                <label class="mws-form-label">权限信息</label>
                <div class="mws-form-item clearfix">
                    <h4>当前角色:{{$role->name}}的权限信息</h4>
                    <ul class="mws-form-list inline">
                    <label>管理员权限:</label>
                        @foreach($auth as $row)
                        @if( $row->mname == "AdminUserController")
                        <li>
                                <input type="checkbox"   name="nids[]" value="{{$row->id}}" @if(in_array($row->id,$nids)) checked @endif/>
                                <label>{{$row->name}}</label>
                        </li>
                        @endif
                        
                        @endforeach
                    </ul>

                    <ul class="mws-form-list inline">
                    <label>角色权限:</label>
                        @foreach($auth as $row)
                        @if( $row->mname == "AdminRoleController")
                        <li>
                                <input type="checkbox"   name="nids[]" value="{{$row->id}}" @if(in_array($row->id,$nids)) checked @endif/>
                                <label>{{$row->name}}</label>
                        </li>
                        @endif
                        
                        @endforeach
                    </ul>

                    <ul class="mws-form-list inline">
                    <label>权限权限:</label>
                        @foreach($auth as $row)
                        @if( $row->mname == "AdminPermissionController")
                        <li>
                                <input type="checkbox"   name="nids[]" value="{{$row->id}}" @if(in_array($row->id,$nids)) checked @endif/>
                                <label>{{$row->name}}</label>
                        </li>
                        @endif
                        
                        @endforeach
                    </ul>
                    
                    <ul class="mws-form-list inline">
                    <label>分类权限:</label>
                        @foreach($auth as $row)
                        @if( $row->mname == "CateController")
                        <li>
                                <input type="checkbox"   name="nids[]" value="{{$row->id}}" @if(in_array($row->id,$nids)) checked @endif/>
                                <label>{{$row->name}}</label>
                        </li>
                        @endif
                        
                        @endforeach
                    </ul>

                    <ul class="mws-form-list inline">
                    <label>商品权限:</label>
                        @foreach($auth as $row)
                        @if( $row->mname == "GoodsController")
                        <li>
                                <input type="checkbox"   name="nids[]" value="{{$row->id}}" @if(in_array($row->id,$nids)) checked @endif/>
                                <label>{{$row->name}}</label>
                        </li>
                        @endif
                        
                        @endforeach
                    </ul>
                    
                    <ul class="mws-form-list inline">
                    <label>商品详情权限:</label>
                        @foreach($auth as $row)
                        @if( $row->mname == "GoodsInfoController")
                        <li>
                                <input type="checkbox"   name="nids[]" value="{{$row->id}}" @if(in_array($row->id,$nids)) checked @endif/>
                                <label>{{$row->name}}</label>
                        </li>
                        @endif
                        
                        @endforeach
                    </ul>

                    <ul class="mws-form-list inline">
                    <label>评论管理权限:</label>
                        @foreach($auth as $row)
                        @if( $row->mname == "CommentsController")
                        <li>
                                <input type="checkbox"   name="nids[]" value="{{$row->id}}" @if(in_array($row->id,$nids)) checked @endif/>
                                <label>{{$row->name}}</label>
                        </li>
                        @endif
                        
                        @endforeach
                    </ul>

                    <ul class="mws-form-list inline">
                    <label>轮播图权限:</label>
                        @foreach($auth as $row)
                        @if( $row->mname == "SlideController")
                        <li>
                                <input type="checkbox"   name="nids[]" value="{{$row->id}}" @if(in_array($row->id,$nids)) checked @endif/>
                                <label>{{$row->name}}</label>
                        </li>
                        @endif
                        
                        @endforeach
                    </ul>

                    <ul class="mws-form-list inline">
                    <label>订单权限:</label>
                        @foreach($auth as $row)
                        @if( $row->mname == "OrderController")
                        <li>
                                <input type="checkbox"   name="nids[]" value="{{$row->id}}" @if(in_array($row->id,$nids)) checked @endif/>
                                <label>{{$row->name}}</label>
                        </li>
                        @endif
                        
                        @endforeach
                    </ul>
                    <ul class="mws-form-list inline">
                    <label>会员权限:</label>
                        @foreach($auth as $row)
                        @if( $row->mname == "UsersController")
                        <li>
                                <input type="checkbox"   name="nids[]" value="{{$row->id}}" @if(in_array($row->id,$nids)) checked @endif/>
                                <label>{{$row->name}}</label>
                        </li>
                        @endif
                        
                        @endforeach
                    </ul>
                    


                </div>
            </div>
        </div>
        <div class="mws-button-row">
            {{csrf_field()}}
            <input type="hidden" name="rid" value="{{$role->id}}">
            <input value="分配权限" class="btn btn-danger" type="submit" />
            <input value="Reset" class="btn " type="reset" />
        </div>
        </form>
    </div>
<!-- Panels End -->
</div>
</body>
</html>
@endsection
@section('title','后台权限分配')
