    <a href="/" class="submit-btn back">Kembali</a>
    <div class="form-container sign-in-form">
        <div class="form-box sign-in-box">
            <h2>Login</h2>
            <form action="{{ route('login') }}" method="post">
                @csrf
                <div class="field">
                    <i class="uil uil-at"></i>
                    <input type="email" placeholder="Email ID" name="email" value="{{ old('email') }}" required>
                </div>
                <div class="field">
                    <i class="uil uil-lock-alt"></i>
                    <input type="password" class="password-input" placeholder="Password" name="password" required>
                    <div class="eye-btn"><i class="uil uil-eye-slash"></i></div>
                </div>
                <div class="forget-link">
                    <a href="">Lupa Password?</a>
                </div>
                <input type="submit" class="submit-btn" value="Login">
            </form>
            <div class="login-options">
                <p class="text">Atau, login dengan...</p>
                <div class="other-logins">
                    <a href=""><img src="{{ asset('assets/images/google-logo.png') }}" alt=""></a>
                    <a href=""><img src="{{ asset('assets/images/facebook-logo.png') }}" alt=""></a>
                    <a href=""><img src="{{ asset('assets/images/apple-logo.png ') }}" alt=""></a>
                </div>
            </div>
        </div>
        <div class="imgBox sign-in-imgBox">
            <div class="sliding-link">
                <p>Tidak punya akun?</p>
                <span class="sign-up-btn">Daftar</span>
            </div>
            <img src="{{ asset('assets/images/signup-img.png') }}" alt="">
        </div>
    </div>