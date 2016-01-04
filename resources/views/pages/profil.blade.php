@extends('layouts.master')

@section('title') {{ $school->nama_sekolah }} @endsection

@section('content')

	@section('header')

		<header class="parallax-background">
			<!--Header slider with orbit-->
			<ul id="featured" class="orbit-content" data-orbit data-options="animation:none; animation_speed:1000; pause_on_hover:true; animation_speed:500; navigation_arrows:false; bullets:false;">
				<li data-orbit-slide="headline-1">
						<img src="{{ asset('img/sekolah/'.$school->id.'.jpg') }}" alt="Picture 1">
						<div class="orbit-caption hide-for-small-only">
							<div class="row">
								<div class="large-8 columns">
									<h3 class="bold">{{ $school->nama_sekolah }}</h3>
									<h5>{{ $school->alamat.', '.$school->kota.', '.$school->provinsi }}</h5>
						 </div>
						</div>
				</li>
			</ul>	
				
		</header>
		<!-- END HEADER -->

	@show

	<div class="parallax-content read-article">
		<!-- MAIN SECTION -->	
		<section class="main-section">

			<div class="full-width">
				<div class="row compare-details">

          <div class="medium-12 columns">
            <h3><a href="#" class="bolds">Informasi Sekolah</a></h3>
          </div>

          <div class="large-12 medium-12 columns">
						<section class="secondary-tabs">
							<div class="row collapse">

								<div class="madium-2 large-2 columns">
                  <ul class="tabs tabs-profil" data-tab>
                    <li class="tab-title active"><a href="#home">Home</a></li>
                    <li class="tab-title"><a href="#profil">Profil</a></li>
                    <li class="tab-title"><a href="#fasilitas">Fasilitas</a></li>
                    <li class="tab-title"><a href="#prestasi">Prestasi</a></li>
                    <li class="tab-title"><a href="#biaya">Biaya</a></li>
                    <li class="tab-title"><a href="#kegiatan">Kegiatan</a></li>
                    <li class="tab-title"><a href="#bandingkan">Bandingkan</a></li>
                  </ul>
                </div>

                <div class="medium-10 large-10 columns">
									<div class="tabs-content">

										<div class="content active" id="home">
											<h6 class="bold columns mdc-text-blue-grey">Home</h6>

											<div class="row">

												<?php $counter = 0;?>
												@forelse($articles as $article)

													<div class="medium-4 large-4 columns left">
														<article class="card">
															<div style="background-image:url({{ asset('img/article/'.$article->id.'.jpg') }})" class="card__image">
																<div class="card-header-mask">
																	<div class="card-header-date">
																		<div class="card-header-date-day">
																			{{ date('d', strtotime($article->created_at)) }}
																		</div>
																		<div class="card-header-date-month">
																			{{ date('M', strtotime($article->created_at)) }}
																		</div>
																	</div>
																</div>
															</div>
															
															<h5 class="card__title">
																<a href="{{ url('article/'.$article->slug) }}" title="{{ $article->title }}">
																	{{ $article->title }}
																</a>
															</h5>

															<div class="card-body">
																<p class="card__text">{{ $article->intro }}</p>
																<div class="card-poster">By 
																	<a href="{{ url('user/'.$article->User->username) }}">
																		{{ $article->User->display_name }}
																	</a>
																</div>
																<div class="clearfix card__action-bar">
																	<div class="card__button left">
																		<a href="{{ url('article/'.$article->slug) }}">
																			<span class="fa fa-comment"></span> 24 Comment</a>
																	</div>
																	<div class="card__button right">
																		<a href="{{ url('article/'.$article->slug) }}" class="action_button">
																			<span class="fa fa-arrow-right"></span></a>
																	</div>
																</div>
															</div>

														</article>
													</div>
													
													<?php
														$counter++;
														if($counter >= 3) {
															$counter = 0;
															echo"</div><div class='row'>";
														}
													?>

												@empty

													<h4 class="center mdc-text-grey">Tidak ada berita</h4>

												@endforelse

											</div>	
										</div>

										<div class="content" id="profil">
											<h6 class="bold columns mdc-text-blue-grey">Profil</h6>

											<div class="row">
												<div class="medium-12 small-12 large-12 columns">

													<?php
														$sekolah = array();
														if($school->profil != '')
															$sekolah = explode('#', $school->profil);
													?>

													<ul>

													@forelse($sekolah as $schol)
														<li> {!! nl2br($schol) !!} </li>
													@empty
														<h4 class="center mdc-text-grey">Informasi belum tersedia </h4>
													@endforelse

													</ul>
												
												</div>
											</div>
										</div>

										<div class="content" id="fasilitas">
											<h6 class="bold columns mdc-text-blue-grey">Fasilitas</h6>

											<div class="row">
												<div class="medium-12 small-12 large-12 columns">
													<?php
														$fasilitas = array();
														if($school->fasilitas != '')
															$fasilitas = explode('#', $school->fasilitas);
													?>
													<ul>

													@forelse($fasilitas as $fasil)
														<li> {!! nl2br($fasil) !!} </li>
													@empty
														<h4 class="center mdc-text-grey">Informasi belum tersedia </h4>
													@endforelse

													</ul>

												</div>
											</div>

										</div>

										<div class="content" id="prestasi">
											<h6 class="bold columns mdc-text-blue-grey">Prestasi</h6>

											<div class="row">
												<div class="medium-12 small-12 large-12 columns">
													<?php
														$prestasi = array();
														if($school->prestasi != '')
															$prestasi = explode('#', $school->prestasi);
													?>
													<ul>

													@forelse($prestasi as $pres)
														<li> {!! nl2br($pres) !!} </li>
													@empty
														<h4 class="center mdc-text-grey">Informasi belum tersedia </h4>
													@endforelse

													</ul>
												</div>
											</div>
											
										</div>

										<div class="content" id="biaya">
											<h6 class="bold columns mdc-text-blue-grey">Biaya</h6>

											<div class="row">
												<div class="medium-12 small-12 large-12 columns">
													<?php
														$biaya = array();
														if($school->biaya != '')
															$biaya = explode('#', $school->biaya);
													?>
													<ul>

													@forelse($biaya as $bia)
														<li> {!! nl2br($bia) !!} </li>
													@empty
														<h4 class="center mdc-text-grey">Informasi belum tersedia </h4>
													@endforelse

													</ul>
												</div>
											</div>
											
										</div>

										<div class="content" id="kegiatan">
											<h6 class="bold columns mdc-text-blue-grey">Kegiatan</h6>

											<div class="row">
												<div class="medium-12 small-12 large-12 columns">
													<?php
														$kegiatan = array();
														if($school->kegiatan != '')
															$kegiatan = explode('#', $school->kegiatan);
													?>
													<ul>

													@forelse($kegiatan as $kegiat)
														<li> {!! nl2br($kegiat) !!} </li>
													@empty
														<h4 class="center mdc-text-grey">Informasi belum tersedia </h4>
													@endforelse

													</ul>
												</div>
											</div>
											
										</div>

										<div class="content" id="bandingkan">
											<h6 class="bold columns mdc-text-blue-grey">Bandingkan</h6>

											<div class="row">
												<div class="medium-12 small-12 large-12 columns">
												</div>
											</div>
											
										</div>

									</div>
								</div>

							</div>
						</section>
          </div>


		</section>

		@include('partials.footer')

	</div>

@endsection