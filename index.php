<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
    <title>login</title>
    <link href="nggg.css" rel="stylesheet" type="text/css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
      integrity="sha512-cJ40liS3F1GBquh+1Ij8+6bTk8DS4UZlrQvw+ndHDCZmBDmMvKJ2qK9RtF65GRfhx+EScCDKFSgDwS87pULiTw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
  </head>

  <body>
    <div class="container" id="container">
      <div class="form-container sign-up-container">
        <form method="post" action="register.php">
          <h1>Create Account</h1>
          <div class="social-container">
            <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
            <a href="#" class="social"><i class="fab fa-linkedin"></i></a>
          </div>
          <span>or use your email for registration</span>
          <input type="text" placeholder="Name" name="name" id="name" />
          <input type="email" placeholder="Email" name="email" id="email" required />
          <input type="password" placeholder="Password" id="password" name="password" />
          <input type="text" placeholder="Grade" id="grade" name="grade" />
          <button name="signup">Sign Up</button>
        </form>
      </div>
      <div class="form-container sign-in-container">
        <form method="post" action="register.php">
          <h1>Sign in</h1>
          <div class="social-container">
            <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
            <a href="#" class="social"><i class="fab fa-instagram-i"></i></a>
          </div>
          <span>or use your account</span>
          <input type="email" placeholder="Email" name="email" id="email" />
          <input type="password" placeholder="Password" name="password" id="password" />
          <a href="#">Forgot your password?</a>
          <Button name="signin">Sign In</button>
        </form>
      </div>
      <div class="overlay-container">
        <div class="overlay">
          <div class="overlay-panel overlay-left">
            <h1>Hello, Friend!</h1>
            <p>Enter your personal details and start journey with us<br>Already have an account?</p>
            <button class="ghost" id="signIn">Sign In</button>
          </div>
          <div class="overlay-panel overlay-right">
            <h1>Welcome Back!</h1>
            <p>
              To keep connected with us please login with your personal info
            </p>
            <button class="ghost" id="signUp">Sign Up</button>
          </div>
        </div>
      </div>
    </div>

    <footer>
      <p>Created by <i class="fa fa-heart"></i> EY_ET</p>
    </footer>
    <script src="nggg.js"></script>
  </body>
</html>
