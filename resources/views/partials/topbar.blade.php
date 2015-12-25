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
							<li class="active"><a href="index.html"><span class="topbar-icon"><i class="fi-home"></i></span>Home</a></li>
							<li class="has-dropdown">
								<a><span class="topbar-icon"><i class="fa fa-list-alt"></i></span>Daftar Sekolah</a>
								<ul class="dropdown">
									<li><a href="sekolah/sd.html">SD Sederajat</a></li>
									<li><a href="sekolah/smp.html">SMP Sederajat</a></li>
									<li><a href="sekolah/sma.html">SMA Sederajat</a></li>
								</ul>
							</li>
							<li><a href="bandingkan.html"><span class="topbar-icon"><i class="fa fa-sticky-note"></i></span>Bandingkan</a></li>
							<li><a href="event.html"><span class="topbar-icon"><i class="fa fa-calendar-o"></i></span>Event</a></li>
							<li><a href="rekomendasi.html"><span class="topbar-icon"><i class="fa fa-star"></i></span>Rekomendasi</a></li>
						</ul>

						<ul class="right">
							<li class="has-form topbar-search-box">
								<form action="pencarian.html" class="searchbox searchbox-close">
									<input type="search" class="searchbox-input" placeholder="Tuliskan sesuatu">
									<input type="submit" class="hide">
								</form>
							</li>
							<li class="search-trigger hide-small">
								<a id="searchbox-icon"><i class="fi-magnifying-glass"></i></a>
							</li>
							<li><a href="#" data-reveal-id="login-modal" class="login-modal-show"><span class="topbar-icon"><i class="fi-torso"></i></span>Masuk</a></li>
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