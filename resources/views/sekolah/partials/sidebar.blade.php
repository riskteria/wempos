<div class="navbar-default sidebar" role="navigation">
	<div class="sidebar-nav navbar-collapse">
	    <ul class="nav" id="side-menu">

			<li>
				<a href="{{ url ('dashboard/'.Auth::user()->role).'/post' }}" class="btn btn-default">
					<i class="fa fa-pencil fa-fw"></i> Post New
				</a>
			</li>

			<li {{ (Request::is('/') ? 'class="active"' : '') }}>
	            <a href="{{ url ('dashboard/'.Auth::user()->role) }}"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
	        </li>


			<li {{ (Request::is('/') ? 'class="active"' : '') }}>
	            <a href="{{ url ('dashboard/'.Auth::user()->role.'/Information') }}"><i class="fa fa-table fa-fw"></i> Information</a>
	        </li>

	    </ul>
	</div>
</div>