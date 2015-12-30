@extends('layouts.master')

@section('title') Selamat Datang di WEMPOS @endsection


@section('content')

	@include('partials.header')

	<div class="parallax-content">
		
		<section class="full-width content-section">
			<div class="row">
				<div class="tabs" data-tab>
					<div class="large-3 tab-title active"><a href="#berita-panel-1">Berita Terbaru</a></div>
					<div class="large-3 tab-title"><a href="#berita-panel-2">Aktivitas Terbaru</a></div>
				</div>
			</div>
			<!-- END ROW -->
		</section>
		<!-- END SECTION.CONTENT-SECTION -->

		<div class="tabs-content">

			<div class="large-12 content active" id="berita-panel-1">
				<div class="row">
					
					@foreach($articles as $article)

						<div class="medium-4 large-4 columns">
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

					@endforeach

				</div>
			</div>

			<div class="large-12 content" id="berita-panel-2">
				<div class="row">
				</div>
			</div>

		</div>

		@include('partials.footer')

	</div>

@endsection