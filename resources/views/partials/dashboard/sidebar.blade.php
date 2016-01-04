<div class="navbar-default sidebar" role="navigation">
	<div class="sidebar-nav navbar-collapse">
	    <ul class="nav" id="side-menu">

			<li {{ (Request::is('/') ? 'class="active"' : '') }}>
	            <a href="{{ url ('') }}"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
	        </li>

	        <li >
                <a href="#"><i class="fa fa-wrench fa-fw"></i> UI Elements<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li {{ (Request::is('*panels') ? 'class="active"' : '') }}>
                        <a href="{{ url ('panels') }}">Panels and Collapsibles</a>
                    </li>
                    <li {{ (Request::is('*buttons') ? 'class="active"' : '') }}>
                        <a href="{{ url ('buttons' ) }}">Buttons</a>
                    </li>
                    <li {{ (Request::is('*notifications') ? 'class="active"' : '') }}>
                        <a href="{{ url('notifications') }}">Alerts</a>
                    </li>
                    <li {{ (Request::is('*typography') ? 'class="active"' : '') }}>
                        <a href="{{ url ('typography') }}">Typography</a>
                    </li>
                    <li {{ (Request::is('*icons') ? 'class="active"' : '') }}>
                        <a href="{{ url ('icons') }}"> Icons</a>
                    </li>
                    <li {{ (Request::is('*grid') ? 'class="active"' : '') }}>
                        <a href="{{ url ('grid') }}">Grid</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>

	    </ul>
	</div>
</div>