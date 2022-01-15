<!DOCTYPE html>
<html lang="en">
<head>

  <!--  Meta  -->
  <meta charset="UTF-8" />
  <title>IMS GYM</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!--  Styles  -->
  <link rel="stylesheet" href="{{ url('/css/app.css')}}">
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
        <li class="navigation-item"><a href="register.html" class="nav-link">Register Yourself</a></li>
      </ul>

      <div class="copyright">
        <p>&copy, 2020 Imsciences Gym. All right reserved</p>
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
    <div class="banner">
      <h1 class="banner-heading">Welcome to Imsciences Gym</h1>
      <p class="banner-paragraph">Fitness destination</p>
      <a href="{{route('register')}}">
      <button class="banner-button">Register</button></a>
    </div>
  </header>
  <!--end of header-->
  <!--About Us-->
  <section class="aboutus" id="aboutus">
    <div class="aboutus-content">
      <h1 class="aboutus-heading">About Us</h1>
      <div class="underline">
        <div class="small-underline"></div>
        <div class="big-underline"></div>
      </div>
      <h3 class="sub-heading">Imsciences Gym</h3>
      <p class="aboutus-paragraph">Imsciences brings you an opportunity to keep your body and health in best shape. We have inaugurated a gym for our students.So what are you waiting for join today and keep your health disciplined.</p>
      <button class="aboutus-button">
        Read more...
        <i class="fa fa-angle-double-right btn-arrw"></i>
        </button>
    </div>

    <div class="about-us-images">
      <img src="{{asset('images/1.jpg')}}" class="img img1" alt="">
      <img src="{{asset('images/2.jpg')}}" class="img img2"alt="">
      <img src="{{asset('images/3.jpeg')}}" class="img img3">
      <img src="{{asset('images/4.jpg')}}" class="img img4"alt="">
    </div>
  </section>
  <!--end of About Us-->

  <!--Facilities-->
  <section class="facilities">
    <div class="faclities-header">
      <h1 class="facilities-heading">Facilities in Imsciences Gym</h1>
      <div class="underline">
        <div class="small-underline"></div>
        <div class="big-underline"></div>
      </div>
      </div>

      <div class="facilities-cards-wrapper">
        <div class="facilities-cards">
          <img src="2.jpg" alt="" class="faclities-img">
          <div class="card-content">
            <h4 class="card-heading">Treadmil</h4>
            <p class="card-paragraph">Run with the treadmill with some music on to boost your stamina.</p>
            <button class="card-btn">Check it<i class="fa fa-angle-double-right btn-arrw"></i>
            </button>
          </div>
        </div>

        <div class="facilities-cards">
          <img src="7.jpeg" alt="" class="faclities-img">
          <div class="card-content">
            <h4 class="card-heading">Converging Shoulder Press</h4>
            <p class="card-paragraph">Create your muscles big enough that no one dares to touch you.</p>
            <button class="card-btn">Check it<i class="fa fa-angle-double-right btn-arrw"></i>
            </button>
          </div>
        </div>

        <div class="facilities-cards">
          <img src="8.jpeg" alt="" class="faclities-img">
          <div class="card-content">
            <h4 class="card-heading">Bench Press</h4>
            <p class="card-paragraph">Lean back and lift some weight to keep your body look like Undertaker..</p>
            <button class="card-btn">Check it<i class="fa fa-angle-double-right btn-arrw"></i>
            </button>
          </div>
        </div>

        <div class="facilities-cards">
          <img src="10.jpeg" alt="" class="faclities-img">
          <div class="card-content">
            <h4 class="card-heading">Weight Machine</h4>
            <p class="card-paragraph">Keep checking your weight according to your daily exercise..</p>
            <button class="card-btn">Check it<i class="fa fa-angle-double-right btn-arrw"></i>
            </button>
          </div>
        </div>
      </div>
    <div class="check-all-wrpr">
      <button class="check-all-btn">Check all facilities</button>
    </div>
  </section>
  <!--end of facilities-->

  <!--Customers-->
  <section class="customers">
    <div class="faclities-header">
      <h1 class="facilities-heading">Our Customers</h1>
      <div class="underline">
        <div class="small-underline"></div>
        <div class="big-underline"></div>
      </div>
      </div>
    <p class="customers-paragraph">Our Satisfied Costumers shared their beloved experience with us dont miss to go through it.</p>

    <div class="customers-cards-wrapper">
      <div class="customer-card">
        <div class="customer-img-wrapper">
          <img src="fayyaz.jpeg" alt="" class="customer-image">
        </div>
        <div class="customer-info">
          <h3 class="customer-name">M.Fayyaz</h3>
          <p class="customer-paragraph-1">Happy Customer</p>
          <p class="customer-paragraph-2">I was really worried about my weight i was 102kg when i joined 1 month ago. Now my weight is 60kg which is great difference in a month. Thank you IMS Gym</p>
        </div>
      </div>

      <div class="customer-card">
        <div class="customer-img-wrapper">
          <img src="aliyan.jpg" alt="" class="customer-image">
        </div>
        <div class="customer-info">
          <h3 class="customer-name">Aliyan Sohail</h3>
          <p class="customer-paragraph-1">Happy Customer</p>
          <p class="customer-paragraph-2">My great motivation was to have six pack ABS Then i visited Ims Gym and my wish was fulfilled. I worked really hard for this but the main role was IMS Gym</p>
        </div>
      </div>


  </section>
  <!--end of customers-->

  <!--footer-->
  <footer class="footer">
    <div class="main-part">
      <div class="footer-list-wrap">
        <h3 class="footer-heading">Imsiences Gym</h3>
        <ul class="footer-list">
          <li class="footer-list-item">
            <a href="#" class="footer-list-link">support@imsgym.com</a>
          </li>

          <li class="footer-list-item">
            <a href="#" class="footer-list-link">support@imsgym.com</a>
          </li>

          <li class="footer-list-item">
            <a href="#" class="footer-list-link">+92335-0965914</a>
          </li>
        </ul>
      </div>

      <div class="footer-list-wrap">
        <h3 class="footer-heading">Explore</h3>
        <ul class="footer-list">
          <li class="footer-list-item">
            <a href="#" class="footer-list-link">Home</a>
          </li>

          <li class="footer-list-item">
            <a href="#" class="footer-list-link">Facilities</a>
          </li>

          <li class="footer-list-item">
            <a href="#" class="footer-list-link">Gallery</a>
          </li>

          <li class="footer-list-item">
            <a href="#" class="footer-list-link">Charges</a>
          </li>

          <li class="footer-list-item">
            <a href="#" class="footer-list-link">Location</a>
          </li>

          <li class="footer-list-item">
            <a href="#" class="footer-list-link">Policies</a>
          </li>

        </ul>
      </div>

      <div class="contact">
        <h3 class="footer-heading">Contact Us</h3>
        <p>Register for updates</p>

      </div>

      <div class="gallery">
        <h3 class="footer-heading-gallery">Gallery</h3>
        <div class="gallery-images">
          <div class="image-wrapper">
            <img src="10.jpeg" alt="" class="footer-image">
          </div>

          <div class="image-wrapper">
            <img src="11.jpeg" alt=""  class="footer-image">
          </div>

          <div class="image-wrapper">
            <img src="4.jpg" alt="" class="footer-image">
          </div>

          <div class="image-wrapper">
            <img src="3.jpeg" alt=""  class="footer-image">
          </div>

          <div class="image-wrapper">
            <img src="5.jpeg" alt=""  class="footer-image">
          </div>

          <div class="image-wrapper">
            <img src="1.jpg" alt="" class="footer-image">
          </div>

        </div>
      </div>
    </div>

    <div class="maker">
      <div class="copyright-text">
        <p>Copyright &copy; 2020 .Imsciences Gym.All Right Reserved</p>
      </div>

      <div class="right-end">
        <p>Created with <i class="fa fa-heart"></i>by<span> Fayyaz And Aliyan </span</p>
      </div>

    </div>
  </footer>

  <!--end of footer-->

  <script src="scripts/index.js"></script>
</body>
</html>
