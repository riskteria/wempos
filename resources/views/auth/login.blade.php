@extends('layouts.master')

@section('title') Bandingkan Sekolah @endsection

@section('content')

	<section class="main-section emptiness">
    	<!-- CONTENT SECTION -->
        <div class="row emptiness">
            <div class="large-6 columns auth-plain">
                {!! Form::open(array('url'=>'auth/login', 'class'=>'loginbox')) !!}
                    <div class="loginbox-title">LOGIN</div>
                    <div class="loginbox-group">
                        <input name="username" type="text" class="loginbox-username" required><span class="highlight"></span><span class="bar"></span>
                        <label class="loginbox-label">Nama Pengguna</label>
                    </div>
                    <div class="loginbox-group">
                        <input name="password" type="password" required><span class="highlight"></span><span class="bar"></span>
                        <label class="loginbox-label">Password</label>
                    </div>
                    <div class="checkbox checkbox-default">
                        <input name="remember" id="remember" type="checkbox" value="yes" alt="Remember me" class="radius">
                        <label for="remember">Remember me</label>
                    </div>
                    <button type="submit" class="loginbox-button button">Masuk
                        <div class="ripples buttonRipples"><span class="ripplesCircle"></span></div>
                    </button>
                    <a href="" class="pass-forgot">Forgot your password?</a>
                {!! Form::close() !!}
            </div>

            <div class="large-6 columns auth-plain">
                <div class="signup-panel newusers">
                    <div class="loginbox-title">BELUM PUNYA AKUN ?</div>
                    <p>Dengan membuat sebuah akun, anda bisa lebih mudah untuk berinteraksi dengan pengguna lain sekaligus mempromosikan sekolah dan kegiatan yang berkaitan dengan pendidikan.</p>
                    <br>
                    <a href="#" data-reveal-id="signup-modal" class="button ">Sign Up</a></br>
                </div>
            </div>

        </div>

    </section>

    @include('partials.footer')

@endsection