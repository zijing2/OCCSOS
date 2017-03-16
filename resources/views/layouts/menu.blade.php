<li>
	<a href="oauth"><i class="fa fa-users"></i> <span>oauth管理</span> <i class="fa fa-angle-left pull-right"></i></a>
</li>

<li class="treeview">
	<a href="#"><i class="fa fa-users"></i> <span>权限管理</span> <i class="fa fa-angle-left pull-right"></i></a>
		<ul class="treeview-menu menu-open" style="display: block;">
			<li><a href="http://localhost:8000/admin/permission/index">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-circle-o"></i>权限列表</a></li>
			<li><a href="http://localhost:8000/admin/role/index">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-circle-o"></i>角色列表</a></li>
			<li><a href="http://localhost:8000/admin/user/index">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-circle-o"></i>用户管理</a></li>
		</ul>
</li>

<li class="treeview">
	<a href="#"><i class="fa fa-users"></i> <span>数据管理</span> <i class="fa fa-angle-left pull-right"></i></a>
	<ul class="treeview-menu menu-open" style="display: block;">
		<li class="{{ Request::is('posts*') ? 'active' : '' }}">
		    <a href="{!! route('posts.index') !!}"><i class="fa fa-edit"></i><span>posts</span></a>
		</li>
	</ul>
</li>



