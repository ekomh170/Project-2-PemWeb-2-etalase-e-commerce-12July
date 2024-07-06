<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Up/Login Form</title>
  <link rel="stylesheet" href="{{ asset('assets/auth/css/index.css')}}">
</head>
<body>

<div class="form-structor">
  <div class="signup">
    <h2 class="form-title" id="signup"><span>or</span>Sign up</h2>
    <div class="form-holder">
      <input type="text" class="input" placeholder="Name" />
      <input type="email" class="input" placeholder="Email" />
      <input type="password" class="input" placeholder="Password" />
    </div>
    <button class="submit-btn">Sign up</button>
  </div>
  <div class="login slide-up">
    <div class="center">
      <h2 class="form-title" id="login"><span>or</span>Log in</h2>
      <div class="form-holder">
        <input type="email" class="input" placeholder="Email" />
        <input type="password" class="input" placeholder="Password" />
      </div>
      <button class="submit-btn">Log in</button>
    </div>
  </div>
</div>

<script src="{{asset('assets/auth/js/index.js')}}"></script>
</body>
</html>
