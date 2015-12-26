<!-- LARGE SCREEN TOP BAR MENU -->
<div class="slideUp">
	<section class="navigation-section show-for-large-up">
		<div class="row">
			<div class="large-12 columns">

				<!-- TOP BAR INITIALIZATION -->
				<nav class="top-bar" data-topbar>
					<ul class="title-area">
						<li class="name">
							<a><img id="site-logo" src="{{ asset('img/wempos-logo.png') }}"></a>
						</li>
					</ul>
					<!-- END UL.TITLE-AREA -->

					<!-- TOP BAR MENU ELEMENTS -->
					<section class="top-bar-section">
						<ul class="left">
							<li class="@if(Request::is('/')) {{ 'active' }} @endif">
								<a href="{{ url('/') }}"><span class="topbar-icon"><i class="fi-home"></i></span>Home</a>
							</li>
							<li class="has-dropdown @if(Request::is('sekolah/sd')) {{ 'active' }} @endif">
								<a><span class="topbar-icon"><i class="fa fa-list-alt"></i></span>Daftar Sekolah</a>
								<ul class="dropdown">
									<li class="@if(Request::is('sekolah/sd')) {{ 'active' }} @endif">
										<a href="{{ url('sekolah/sd') }}">SD Sederajat</a>
									</li>
									<li class="@if(Request::is('sekolah/smp')) {{ 'active' }} @endif">
										<a href="{{ url('sekolah/smp') }}">SMP Sederajat</a>
									</li>
									<li class="@if(Request::is('sekolah/sma')) {{ 'active' }} @endif">
										<a href="{{ url('sekolah/sma') }}">SMA Sederajat</a>
									</li>
								</ul>
							</li>
							<li class="@if(Request::is('bandingkan')) {{ 'active' }} @endif">
								<a href="{{ url ('bandingkan') }}"><span class="topbar-icon"><i class="fa fa-sticky-note"></i></span>Bandingkan</a>
							</li>
							<li class="@if(Request::is('event')) {{ 'active' }} @endif">
								<a href="{{ url('event') }}"><span class="topbar-icon"><i class="fa fa-calendar-o"></i></span>Event</a>
							</li>
							<li class="@if(Request::is('rekomendasi')) {{ 'active' }} @endif">
								<a href="{{ url('rekomendasi') }}"><span class="topbar-icon"><i class="fa fa-star"></i></span>Rekomendasi</a>
							</li>
						</ul>

						<ul class="right">
							<li class="has-form topbar-search-box">
								<form action="{{ url('pencarian') }}" class="searchbox searchbox-close" method="submit">
									<input type="search" class="searchbox-input" placeholder="Tuliskan sesuatu">
									<input type="submit" class="hide">
								</form>
							</li>
							<li class="search-trigger hide-small">
								<a id="searchbox-icon"><i class="fi-magnifying-glass"></i></a>
							</li>
							<li><a data-reveal-id="login-modal" class="login-modal-show"><span class="topbar-icon"><i class="fi-torso"></i></span>Masuk</a></li>
						</ul>


					</section>
					<!-- END SECTION.TOP-BAR-SECTION -->
				</nav>
				<!-- END NAV.TOP-BAR -->

			</div>
			<!-- END 12 COLUMNS -->
		</div>
		<!-- END ROW -->
	</section>
	<!-- END SECTION.NAVIGATION-SECTION -->
</div>