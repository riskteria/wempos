@extends('layouts.master')

@section('title') Pendaftaran @endsection

@section('content')

	@section('header')

		<header class="parallax-background">
			<!--Header slider with orbit-->
			<ul id="featured" class="orbit-content" data-orbit data-options="animation:none; animation_speed:1000; pause_on_hover:true; animation_speed:500; navigation_arrows:false; bullets:false;">
				<li data-orbit-slide="headline-1">
						<img src="{{ asset('img/school2.jpg') }}" alt="Picture 1">
						<div class="orbit-caption hide-for-small-only">
							
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
                <h2 class="center">Buat Akun Sekolah Anda</h2>
                <br>
                <article class="large-7 columns">
                    <h5 class="center"> Dengan hanya membuat akun ini</h5>
                    <p class="center">Banyak keuntungan yang anda dapatkan pada website ini</p>
                    <img src="{{ asset('img/school.jpg') }}">
                </article>
                <article class="large-5 columns">

                    <div class="row">
                        <div class="large-12 columns">
                            <div class="signup-panel">
                                {!! Form::open(array('url' => 'daftar/simpansekolah', 'files' => true)) !!}
                                    <div class="row collapse">
                                        <div class="small-2  columns">
                                            <span class="prefix"><i class="fi-flag"></i></span>
                                        </div>
                                        <div class="small-10  columns">
                                            <input type="text" placeholder="Nama Sekolah" required name="nama">
                                        </div>
                                    </div>
                                    <div class="row collapse">
                                        <div class="small-2 columns ">
                                            <span class="prefix"><i class="fi-price-tag"></i></span>
                                        </div>
                                        <div class="large-10 small-12 columns">
                                            <select name="jenjang" required>
                                                <option value="SD">SD</option>
                                                <option value="MIN">MIN</option>
                                                <option value="SMP">SMP</option>
                                                <option value="MTS">MTS</option>
                                                <option value="SMA">SMA</option>
                                                <option value="SMK">SMK</option>
                                                <option value="MAN">MAN</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row collapse">
                                        <div class="small-2  columns">
                                            <span class="prefix"><i class="fi-marker"></i></span>
                                        </div>
                                        <div class="small-10  columns">
                                            <input type="text" placeholder="Alamat" name="alamat" required>
                                        </div>
                                    </div>

                                    <div class="row collapse">
                                        <div class="small-2  columns">
                                            <span class="prefix"><i class="fi-folder-lock"></i></span>
                                        </div>
                                        <div class="small-10  columns">
                                            <input type="text" name="nomor_pokok" required placeholder="Nomor Pokok Sekolah Nasional">
                                        </div>
                                    </div>
                                    <div class="row collapse">
                                        <div class="small-2  columns">
                                            <span class="prefix"><i class="fi-pricetag-multiple"></i></span>
                                        </div>
                                        <div class="small-10  columns">
                                            <input type="text" placeholder="Kode Pos" name="kode_pos" required>
                                        </div>
                                    </div>
                                    <div class="row collapse">
                                        <div class="small-2  columns">
                                            <span class="prefix"><i class="fi-torso-female"></i></span>
                                        </div>
                                        <div class="small-10  columns">
                                            <input type="text" placeholder="Nama Pengguna" name="username" required>
                                        </div>
                                    </div>
                                    <div class="row collapse">
                                        <div class="small-2 columns">
                                            <span class="prefix"><i class="fi-mail"></i></span>
                                        </div>
                                        <div class="small-10  columns">
                                            <input type="text" placeholder="email" name="email" required>
                                        </div>
                                    </div>
                                    <div class="row collapse">
                                        <div class="small-2 columns ">
                                            <span class="prefix"><i class="fi-lock"></i></span>
                                        </div>
                                        <div class="small-10 columns ">
                                            <input type="password" placeholder="password" name="password" required>
                                        </div>
                                    </div>
                                    <div class="row collapse">
                                        <div class="small-2 columns ">
                                            <span class="prefix"><i class="fi-page-doc"></i></span>
                                        </div>
                                        <div class="small-10 columns ">
                                            <input type="file" placeholder="masukkan file" name="gambar" required>
                                        </div>

                                    </div>

                                <button type="submit" class="button ">Daftar</a>

                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>

                </article>
            </div>

		</section>

		@include('partials.footer')

	</div>

@endsection