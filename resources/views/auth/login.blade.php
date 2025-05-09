@include('Frontent.body.header')

        <!-- Start Page Title -->
        <div class="page-title-area">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <h2>Login</h2>
                    </div>
                </div>
			</div>
			
			<div class="shape1"><img src="{{ asset('Frontent') }}/assets/img/shape1.png" alt="shape"></div>
			<div class="shape2 rotateme"><img src="{{ asset('Frontent') }}/assets/img/shape2.svg" alt="shape"></div>
			<div class="shape3"><img src="{{ asset('Frontent') }}/assets/img/shape3.svg" alt="shape"></div>
			<div class="shape4"><img src="{{ asset('Frontent') }}/assets/img/shape4.svg" alt="shape"></div>
			<div class="shape5"><img src="{{ asset('Frontent') }}/assets/img/shape5.png" alt="shape"></div>
			<div class="shape6 rotateme"><img src="{{ asset('Frontent') }}/assets/img/shape4.svg" alt="shape"></div>
			<div class="shape7"><img src="{{ asset('Frontent') }}/assets/img/shape4.svg" alt="shape"></div>
			<div class="shape8 rotateme"><img src="assets/img/shape2.svg" alt="shape"></div>
        </div>
        <!-- End Page Title -->
        
        <!-- Start Login Area -->
        <div class="ptb-80">
            <div class="container">
                <div class="auth-form">
                    <div class="auth-head">
                        <a href="index.html">
                            <img src="{{ asset('Frontent') }}/assets/img/logo.png">
                        </a>
                        <p>Don't have an account yet? <a href="register.html">Sign Up</a></p>
                    </div>
                     <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">E-mail</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}">
                              @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input type="password" class="form-control @error('password') is-invalid @enderror"name="password" >
                              @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="mb-3">
                            <a href="forgot-password.html">Forgot Password</a>
                        </div>
                        <button type="submit" class="btn btn-primary">Login</button>
                    </form>
                    <div class="foot">
                        <p>Or connect with</p>
                        <ul>
                            <li><a href="#" class="linkedin" target="_blank"><i data-feather="mail"></i></a></li>
                            <li><a href="#" class="facebook" target="_blank"><i data-feather="facebook"></i></a></li>
                            <li><a href="#" class="twitter" target="_blank"><i data-feather="twitter"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Login Area -->
   @include("Frontent.body.footer");