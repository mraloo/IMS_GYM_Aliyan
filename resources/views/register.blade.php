<!DOCTYPE html>
<html lang="en">
<head>

  <!--  Meta  -->
  <meta charset="UTF-8" />
  <title>IMS GYM</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!--  Styles  -->
  <link rel="stylesheet" href="{{url('css/app.css')}}">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@900&display=swap" rel="stylesheet">
</head>
<body>
  <!--navbar-->
  <div class="navbar">
    <input type="checkbox" class="checkbox" id="click" hidden>
    <!--sidebar-->
    <div class="sidebar">
      <label for="click">      <!--to wrap the click event-->
      <div class="menu-icon">
        <div class="line line-1"></div>
        <div class="line line-2"></div>
        <div class="line line-3"></div>
      </div>
      </label>
        <ul class="social-media-icon">
           <li>
             <a href="https://www.facebook.com/" class="social-link"><i class="fa fa-facebook-official" aria-hidden="true"></i>
             </a>
           </li>
           <li>
             <a href="https://twitter.com/" class="social-link"><i class="fa fa-twitter" aria-hidden="true"></i>
             </a>
           </li>
           <li>
             <a href="https://www.google.com/" class="social-link"><i class="fa fa-google" aria-hidden="true"></i>
             </a>
           </li>
      </ul>
      <div class="year">
        <p>2020</p>
      </div>
    </div>
    <!--end of sidebar-->

    <!--navigation-->
    <div class="navigation">
      <div class="navigation-header">
        <h1 class="navigation-heading">Imsciences Gym</h1>
      </div>

      <ul class="navigation-list">
        <li class="navigation-item"><a href="#" class="nav-link">Home</a></li>
        <li class="navigation-item"><a href="#" class="nav-link">About Us</a></li>
        <li class="navigation-item"><a href="#" class="nav-link">Facilities</a></li>
        <li class="navigation-item"><a href="#" class="nav-link">Contact Us</a></li>
        <li class="navigation-item"><a href="#" class="nav-link">Register Yourself</a></li>
      </ul>

      <div class="copyright">
        <p>&copy, 2020 Body Line Gym. All right reserved</p>
      </div>
    </div>
    <!--end of navigation-->
  </div>
  <!--end of navbar-->
  <!--header-->
  <header class="header">
    <div class="hbrand">
      <h3 class="gym-heading">Imsciences Gym</h3>
    </div>
    <form action="{{route('insert')}}" method="POST">
        @csrf
        <div class="container">
          <h1>Register</h1>
          <p>Please fill in this form to create an account.</p>
          <hr>

          <label for="name"></label>
          <input type="text" placeholder="Enter Your Full Name"  id="name" required name="name" >
          <label for="name"></label>
          <input type="text" placeholder="Enter Your Student Card Number"  id="card" required name="card_No" >
          <label for="contact"></label>
          <input type="text" placeholder="Contact Number"  id="psw" required name="contact_No" >

          <label for="email"></label>
          <input type="text" placeholder="Enter Email"  id="psw-repeat" required name="email" >
          <hr>

          <button type="submit" class="registerbtn">Register</button>
        </div>
      </form>
  </header>
  <!--end of header-->
  <!--About Us-->

  <script src="scripts/index.js"></script>
</body>
</html>

</body>
</html>
