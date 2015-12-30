@extends('layouts.master')

@section('title') Selamat Datang di WEMPOS @endsection

@section('content')

	@section('header')
		<header class="parallax-background">
			<!--Header slider with orbit-->
			<ul id="featured" class="orbit-content" data-orbit data-options="animation:none; animation_speed:1000; pause_on_hover:true; animation_speed:500; navigation_arrows:false; bullets:false;">
				<li data-orbit-slide="headline-1">
						<img src="{{ asset('img/article/'.$article->id.'.jpg') }}" alt="Picture 1">
						<div class="orbit-caption hide-for-small-only">
							<div class="row">
								<div class="large-8 columns">
									<h3>{{ $article->title }}</h3>
									<h5>Published by <span class="bold">
										<a class="title-link">{{ $article->User->display_name }}</a></span>
									</h5>
						 </div>
						</div>
				</li>
			</ul>	
				
		</header>
		<!-- END HEADER -->

		<div class="parallax-content read-article">
			<!-- MAIN SECTION -->
			<section class="main-section">

				<div class="row">
					<article class="large-12 columns article-paragraph">
						{!! nl2br($article->content) !!}
					</article>
				</div>

				<section class="full-width">
					<div class="row">

						<div class="large-12 columns">
							<h4>Artikel Lainnya</h4>
						</div>
						
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
				</section>

			</section>
		</div>

	@show

	@include('partials.footer')

@endsection