   <div class="form-container sign-up-form">
       <div class="imgBox sign-up-imgBox">
           <div class="sliding-link">
               <p>Sudah mempunyai akun?</p>
               <span class="sign-in-btn">Login</span>
           </div>
           <img src="{{ asset('assets/images/signin-img.jpg') }}" alt="">
       </div>
       <div class="form-box sign-up-box">
           <h2>Daftar</h2>
           <div class="login-options">
               <div class="other-logins">
                   <a href=""><img src="{{ asset('assets/images/google-logo.png') }}" alt=""></a>
                   <a href=""><img src="{{ asset('assets/images/facebook-logo.png') }}" alt=""></a>
                   <a href=""><img src="{{ asset('assets/images/apple-logo.png ') }}" alt=""></a>
               </div>
               <p class="text">Atau, daftar dengan email...</p>
           </div>
           <form action="{{ route('register') }}" method="POST">
            @csrf
               <div class="field">
                   <i class="uil uil-at"></i>
                   <input type="email" placeholder="Email ID" name="email" required>
               </div>
               <div class="field">
                   <i class="uil uil-user"></i>
                   <input type="text" placeholder="Full name" name="name" required>
               </div>
               <div class="field">
                   <i class="uil uil-lock-alt"></i>
                   <input type="password" placeholder="Password" name="password" required>
               </div>
               <input type="submit" class="submit-btn" value="Daftar">
           </form>
       </div>
   </div>
