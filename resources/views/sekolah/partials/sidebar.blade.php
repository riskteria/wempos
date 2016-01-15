<div class="navbar-default sidebar" role="navigation">
	<div class="sidebar-nav navbar-collapse">
	    <ul class="nav" id="side-menu">

			<li {{ (Request::is('/') ? 'class="active"' : '') }}>
	            <a href="{{ url ('dashboard/'.Auth::user()->role) }}"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
	        </li>


			<li {{ (Request::is('/') ? 'class="active"' : '') }}>
	            <a href="{{ url ('dashboard/'.Auth::user()->role.'/Information') }}"><i class="fa fa-table fa-fw"></i> Information</a>
	        </li>

	    </ul>
	</div>
</div>