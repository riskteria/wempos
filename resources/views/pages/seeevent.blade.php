@extends('layouts.master')

@section('title') Selamat Datang di WEMPOS @endsection

@section('content')

	@section('header')
		<header class="parallax-background">
			<!--Header slider with orbit-->
			<ul id="featured" class="orbit-content" data-orbit data-options="animation:none; animation_speed:1000; pause_on_hover:true; animation_speed:500; navigation_arrows:false; bullets:false;">
				<li data-orbit-slide="headline-1">
						<img src="{{ asset('img/event/'.$event->id.'.jpg') }}" alt="Picture 1">
						<div class="orbit-caption hide-for-small-only">
							<div class="row">
								<div class="large-8 columns">
									<h3>{{ $event->title }}</h3>
									<h5>Published by <span class="bold">
										<a class="title-link">{{ $event->User->display_name }}</a></span>
									</h5>
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

				<div class="row">
					<article class="large-12 columns article-paragraph">
						{!! nl2br($event->description) !!}
					</article>
				</div>

				<section class="full-width">
					<div class="row">

						<div class="large-12 columns">
							<h4>Event Lainnya</h4>
						</div>

						<div class="row">
							<div class="medium-12 columns">
							@foreach($events as $event)
								<div class="medium-6 large-4 columns left">
									<article class="event">

										<div class="event-date">
											<p class="event-month">{{ date('M', strtotime($event->due_date)) }}</p>
											<p class="event-day">{{ date('d', strtotime($event->due_date)) }}</p>
											<p class="event-desc-detail card-poster">
												<span class="fa fa-building topbar-icon"></span>{{ $event->location }}</p>
											<div class="card__button left"><a href="#">
												<span class="fa fa-user topbar-icon"></span>{{ $event->User->display_name }}</a></div>
										</div>

										<div class="event-desc">
											<h4 class="event-desc-header">
						          	<a href="{{ url('event/'.$event->id) }}" class="bolds ellipsis-1 size-18" title="{{ $event->title }}">{{ $event->title }}</a>
						          </h4>
											<img src="{{ asset('img/event/'.$event->id.'.jpg') }}">
											<div class="clearfix card__action-bar">
												<div class="card__button right"><a class="action_button" href="{{ url('event/'.$event->id) }}"><span class="fa fa-arrow-right"></span></a></div>
											</div>
										</div>

									</article>

								</div>
							@endforeach
							</div>

						</div>

					</div>
				</section>

			</section>

			@include('partials.footer')

		</div>


@endsection