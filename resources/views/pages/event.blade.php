@extends('layouts.master')

@section('title') Daftar Event @endsection


@section('content')
	
	@include('partials.header')
	
	<div class="parallax-content">
		<!-- MAIN SECTION -->
		<section class="main-section">
			<!-- CONTENT SECTION -->
			<section class="full-width content-section">

				<div class="large-12 content active" id="berita-panel-1">

					<section class="full-width large-12">

						<div class="row">

							<?php $counter = 0;?>
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
							<?php
								$counter++;
								if($counter >= 3) {
									$counter = 0;
									echo"</div><div class='row'>";
								}
							?>
							@endforeach

						</div>

					</section>

				</div>

			</section>

		</section>

		@include('partials.footer')

	</div>
@endsection