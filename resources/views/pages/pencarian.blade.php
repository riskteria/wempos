@extends('layouts.master')

@section('title') Bandingkan Sekolah @endsection

@section('content')

	<div class="main-section emptiness">

		<div class="row emptiness">
	    <div class="large-12 columns">
	      <h3 class="center bolds">Manampilkan hasil pencarian : "{{ $search }}"</h3>
        <h5 class="center">Ditemukan <span class="bold">{{ $total }}</span> hasil</h5>
	   	</div>
	  </div>

    <div class="row emptiness">

    	<div class="small-12 medium-12 large-12 columns">
			<div class="tabs" data-tab>
				<div class="large-3 tab-title active"><a href="#panel-1">Sekolah</a></div>
				<div class="large-3 tab-title"><a href="#panel-2">Berita Terbaru</a></div>
				<div class="large-3 tab-title"><a href="#panel-3">Aktivitas Terbaru</a></div>
				<div class="large-3 tab-title"><a href="#panel-4">Event</a></div>
			</div>
		</div>

		<div class="tabs-content">
			<div class="large-12 content active" id="panel-1">
					@forelse($schools as $school)
						<h6 class="center"><a href="profil-sekolah.html">{{ $school->nama_sekolah }}</a></h6>
					@empty
						<h4 class="center mdc-text-grey">Pencarian tidak ada . . .</h4>
					@endforelse

			</div>

			<div class="large-12 content" id="panel-2">
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

						<h4 class="center mdc-text-grey">Pencarian tidak ada . . .</h4>

				@endforelse

				</div>
			</div>

			<div class="large-12 content" id="panel-3">
				<div class="row">
				
					<?php $counter = 0 ?>
					@forelse($activities as $activity)

						<div class="medium-4 large-4 columns">
							<article class="card">
								<div style="background-image:url({{ asset('img/article/'.$activity->id.'.jpg') }})" class="card__image">
									<div class="card-header-mask">
										<div class="card-header-date">
											<div class="card-header-date-day">
												{{ date('d', strtotime($activity->created_at)) }}
											</div>
											<div class="card-header-date-month">
												{{ date('M', strtotime($activity->created_at)) }}
											</div>
										</div>
									</div>
								</div>
								
								<h5 class="card__title">
									<a href="{{ url('article/'.$activity->slug) }}" title="{{ $activity->title }}">
										{{ $activity->title }}
									</a>
								</h5>

								<div class="card-body">
									<p class="card__text">{{ $activity->intro }}</p>
									<div class="card-poster">By 
										<a href="{{ url('user/'.$activity->User->username) }}">
											{{ $activity->User->display_name }}
										</a>
									</div>
									<div class="clearfix card__action-bar">
										<div class="card__button left">
											<a href="{{ url('article/'.$activity->slug) }}">
												<span class="fa fa-comment"></span> 24 Comment</a>
										</div>
										<div class="card__button right">
											<a href="{{ url('article/'.$activity->slug) }}" class="action_button">
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

						<h4 class="center mdc-text-grey">Pencarian tidak ada . . .</h4>

					@endforelse

				</div>
			</div>

			<div class="large-12 content" id="panel-4">
				<div class="row">

						<?php $counter = 0;?>
						@forelse($events as $event)
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

						@empty

							<h4 class="center mdc-text-grey">Pencarian tidak ada . . .</h4>

						@endforelse

					</div>
			</div>

    	</div>
    </div>

    @include('partials.footer');

@endsection