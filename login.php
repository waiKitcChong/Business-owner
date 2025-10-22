<html lang="en">
 <head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1" name="viewport"/>
  <title>
   TripMate Login
  </title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&amp;display=swap" rel="stylesheet"/>
  <style>
   * {
    box-sizing: border-box;
  }
  body {
    margin: 0;
    font-family: 'Inter', sans-serif;
    background: #f7faff;
    background: radial-gradient(circle at top left, #f7faff 0%, #e6f1f9 100%);
    color: #2c3e50;
    display: flex;
    flex-direction: column;
    min-height: 100vh;
    align-items: center;
    justify-content: center;
    padding: 20px;
  }
  .logo-container {
    text-align: center;
    margin-bottom: 12px;
  }
  .logo-container img {
    width: 72px;
    height: 72px;
    object-fit: contain;
  }
  .title {
    font-weight: 600;
    font-size: 20px;
    margin: 0;
    color: #222222;
  }
  .subtitle {
    font-weight: 400;
    font-size: 14px;
    color: #6b7a8f;
    margin-top: 4px;
  }
  .login-box {
    background: #fff;
    border-radius: 12px;
    box-shadow: 0 6px 15px rgba(0, 123, 255, 0.1);
    padding: 32px 28px 36px 28px;
    max-width: 360px;
    width: 100%;
    text-align: center;
  }
  .login-box h2 {
    font-weight: 600;
    font-size: 18px;
    margin: 0 0 6px 0;
    color: #222222;
  }
  .login-box p.description {
    font-weight: 400;
    font-size: 12px;
    color: #7f8fa4;
    margin: 0 0 24px 0;
  }
  label {
    display: block;
    font-weight: 600;
    font-size: 12px;
    color: #222222;
    margin-bottom: 6px;
    text-align: left;
  }
  input[type="email"],
  input[type="password"] {
    width: 100%;
    border: 1.5px solid #e6f1f9;
    border-radius: 8px;
    padding: 10px 14px;
    font-size: 13px;
    font-weight: 400;
    color: #7f8fa4;
    outline-offset: 2px;
    outline-color: transparent;
    transition: outline-color 0.2s ease;
  }
  input[type="email"]::placeholder,
  input[type="password"]::placeholder {
    color: #b0becf;
  }
  input[type="email"]:focus,
  input[type="password"]:focus {
    outline-color: #1a9adf;
  }
  button {
    margin-top: 18px;
    width: 100%;
    background-color: #1a9adf;
    border: none;
    border-radius: 12px;
    color: white;
    font-weight: 400;
    font-size: 13px;
    padding: 12px 0;
    cursor: pointer;
    transition: background-color 0.2s ease;
  }
  button:hover,
  button:focus {
    background-color: #0f7ac1;
  }
  .forgot-password {
    margin-top: 14px;
    font-size: 12px;
    color: #1a9adf;
    text-decoration: none;
    display: inline-block;
  }
  .forgot-password:hover,
  .forgot-password:focus {
    text-decoration: underline;
  }
  .bottom-text {
    margin-top: 24px;
    font-size: 12px;
    color: #6b7a8f;
    text-align: center;
  }
  .bottom-text a {
    color: #1a9adf;
    text-decoration: none;
  }
  .bottom-text a:hover,
  .bottom-text a:focus {
    text-decoration: underline;
  }
  @media (max-width: 400px) {
    .login-box {
      padding: 28px 20px 32px 20px;
      max-width: 100%;
    }
  }
  </style>
 </head>
 <body>
  <div class="logo-container" role="banner">
   <img alt="TripMate logo with blue background and white text and bars" height="272" src="/tripmate-owner/image/tripmate.png" width="272"/>
   
   <p class="subtitle">
    Business Management System
   </p>
  </div>
  <main>
   <section aria-label="Sign in to TripMate hotel management system" class="login-box">
    <h2>
     Welcome Back
    </h2>
    <p class="description">
     Sign in to your business management dashboard
    </p>
    <form>
     <label for="email">
      Email
     </label>
     <input autocomplete="email" id="email" name="email" placeholder="Enter your email" required="" type="email"/>
     <label for="password" style="margin-top:16px;">
      Password
     </label>
     <input autocomplete="current-password" id="password" name="password" placeholder="Enter your password" required="" type="password"/>
     <button type="submit">
      Sign In
     </button>
    </form>
    <a class="forgot-password" href="#" tabindex="0">
     Forgot your password?
    </a>
   </section>
  </main>
  <p class="bottom-text">
   Don't have an account?
   <a href="#" tabindex="0">
    Contact administrator
   </a>
  </p>
 </body>
</html>
