<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login - Himatika FMIPA Unhas</title>
  <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.2.0/css/all.css'>
<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.2.0/css/fontawesome.css'><link rel="stylesheet" href="{{ asset('assets/css/auth.css') }}">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="container">
	<div class="screen">
		<!-- =============================================== -->
		<!-- 📸 SECTION GAMBAR KIRI - GANTI GAMBAR DI SINI -->
		<!-- =============================================== -->
		<!-- Path gambar saat ini: assets/img/login-image.jpg -->
		<!-- Ukuran rekomendasi: 600x600px atau 1:1 ratio -->
		<!-- Format: JPG, PNG, WebP -->
		<!-- =============================================== -->
		<div class="screen__image">
			<img src="{{ asset('assets/img/login-image.png') }}" alt="Himatika Login" class="login-image">
			<div class="image-overlay">
				<h3>Welcome to Himatika</h3>
				<p>Himpunan Mahasiswa Matematika FMIPA Unhas</p>
			</div>
		</div>
		<!-- =============================================== -->
		<!-- 📸 END SECTION GAMBAR -->
		<!-- =============================================== -->
		
		<div class="screen__content">
			<form class="login" method="POST" action="{{ route('login') }}">
                @csrf
				<h2>LOGIN</h2>
				<div class="login__field">
					<i class="login__icon fas fa-envelope"></i>
					<input type="email" class="login__input @error('email') is-invalid @enderror" placeholder="Email Address" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
				<div class="login__field">
					<i class="login__icon fas fa-lock"></i>
					<input type="password" class="login__input @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
				<button type="submit" class="button login__submit">
					<span class="button__text">{{ __('Login') }}</span>
					<i class="button__icon fas fa-chevron-right"></i>
				</button>				
			</form>
		</div>
	</div>
</div>
<!-- partial -->
  
</body>
</html>
