<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

       <title>{{ config('app.name', 'Laravel') }}</title>

      <link rel="icon" href="/img/images/faviconimg.png">
      <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}"/>   
       <link rel="stylesheet" type="text/css" href="{{ asset('css/front/font-awesome-4.7.0/font-awesome.min.css') }}"/>    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="{{ asset('css/cast1.css') }}"/>    
      <link rel="stylesheet" type="text/css" href="{{ asset('css/front/cast.css') }}"/>    
       <link rel="stylesheet" type="text/css" href="{{ asset('css/cast.css') }}"/>  
       <!-- <link rel="stylesheet" type="text/css" href="css/debug_toolbar.css"/> -->
      <!-- <script type="text/javascript" src="/debug_kit/js/jquery.js"></script> -->
      <!-- <script type="text/javascript" src="/debug_kit/js/js_debug_toolbar.js"></script> -->

    </head>



   <body>
   <style>
td{border: 1px solid #ddd!important;}
th{border: 1px solid #ddd!important;background: rgb(248,232,39);}
</style>
               <header id="header">
         <div class="container padXZ pad888">
            <div class="logoarea">
               <div class="col-md-4 col-sm-4 col-xs-12 padXZ pad00">
                  <a class="navbar-brand" href="/">
                  <p class="vacancyfrom"><span>Naukri Wale</span>
                  <br><span style="font-size: 8px;" class="paraarea">A UNIT OF SHRI RADHEYSHYAM JINDGAR CHARITABLE TRUST</span>
                  </p>
                  <!--<img src="/img/images/logo.png" alt="slider image" class="img-responsive">-->
                  </a>
               </div>
               <div class="col-md-8 col-sm-8 col-xs-12 hidden-xs text-right padXZ pad00">
                  <div class="headMiddInfo">
                     <div class="">
                        <div class="hidden-xs singMiddInfo phone">
                           <i class="fa fa-phone"></i>
                           <h4>PHONE</h4>
                           <p>
                               9416498137
                           </p>
                        </div>
                        <div class="hidden-xs singMiddInfo email">
                           <i class="fa fa-envelope-o"></i>
                           <h4>EMAIL</h4>
                           <a href="mailto:singhalprakashan@gmail.com?Subject=Enquiry" target="_top" style="">
                              <p>
                                  naukriwaleindia@gmail.com
                              </p>
                           </a>
                        </div>
                        <!-- <div class="hidden-sm hidden-md hidden-xs singMiddInfo time">
                           <i class="fa fa-clock-o"></i>
                           <h4>OPENING TIME</h4>
                           <p>
                              Mon - Sat 9AM - 7PM
                           </p>
                        </div> -->
                     </div>
                     <div class="clearfix">
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div id="mega-menu" class="header header-sticky primary-menu icons-no default-skin fadeIn">
            <nav class="navbar navbar-default redq">
            <div class="container pad888">
               <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  </button>
               </div>
               
               
               
               <div class="collapse navbar-collapse" id="navbar">
                  <a class="mobile-menu-close"><i class="fa fa-close"></i></a>
                  <div class="menu-top-menu-container">
                     <ul id="menu-top-menu" class="nav navbar-nav nav-list">
                        <li class="current-menu-item {{ Request::is('/') ? 'active' : '' }}">
                          <a href="/">Home</a></li>
                        <li class="nav-item {{ Request::is('about-us') ? 'active' : '' }}">
                        <a href="{{ route('page','about-us')}}" class="nav-link">About Us</a></li>
                      <!--   <li class="nav-item {{ Request::is('offline-form') ? 'active' : '' }}">
                        <a href="{{ route('page','offline-form')}}" class="nav-link">Offline Form</a></li> -->
                     </ul>
                  </div>
               </div>
               <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
            </nav>
         </div>
      </header>
 

    <!-- <section> -->
         @yield('content')
    <!-- </section> -->
       


       <footer id="footer" class="footer2">
<!--  <div class="scrolltop">
<div class="scroll icon">
   <a href="#" id="back-to-top" class="show"><i class="fa fa-angle-up"></i></a>
</div>
</div> -->
<div class="inner sep-bottom-md">
<div class="container">
   <div class="footer-ribbon">
      <a href="#">Get in Touch !</a>
   </div>
      <!-- <div class="col-md-12 col-sm-12 col-xw-12">
      <p class="visitortotal">Total Visitors: 779925</p>
   </div> -->
   <div class="row">

      <div class="col-md-3 col-sm-6 col-xs-12 padXZ pad00 widthparaaa">
         <div class="text-2 widget_text">
            <div class="widget sep-top-lg">
               <div class="textwidget">
                  <p>

               <h3 class="upper widget-title" style="margin-top: -10px;">About Us</h3>
                  <!--  <img src="" alt="Logo"> -->
                  </p>
                  <p>
On your way to success, we aim to be your companion guiding you through the hardships and helping you in achieving your goals. After a decade of successful journey, the brand STC [Singhal Prakashan] is widely known as the leading force in the vacancy form market.
               </p>
               </div>
            </div>
         </div>
         <!-- <div class="socialwidget-2 SocialWidget">
            <div class="widget sep-top-lg">
               <div class="social-widget">
                  <a target="_blank" href="">
                  <div class="social-bg">
                     <i class="fa fa-twitter"></i>
                  </div>
                  </a><a target="_blank" href="https://www.facebook.com/profile.php?id=100019141305525">
                  <div class="social-bg">
                     <i class="fa fa-facebook"></i>
                  </div>
                  </a><a target="_blank" href="#">
                  <div class="social-bg">
                     <i class="fa fa-pinterest"></i>
                  </div>
                  </a><a target="_blank" href="#">
                  <div class="social-bg">
                     <i class="fa fa-google-plus"></i>
                  </div>
                  </a><a target="_blank" href="#">
                  <div class="social-bg">
                     <i class="fa fa-skype"></i>
                  </div>
                  </a>
               </div>
            </div>
         </div> -->
      </div>
      <div class="col-md-3 col-sm-3 col-xs-12 padXZ pad00 quicklink widthpara quickarea50">

         <div class="recent-posts-3 widget_recent_entries">
            <div class="widget sep-top-lg">
               <h3 class="upper widget-title">Quick Links</h3>

                        
               <ul>
                  <li class="current-menu-item {{ Request::is('/') ? 'active' : '' }}">
                          <a href="/">Home</a></li>
                        <li class="nav-item {{ Request::is('about-us') ? 'active' : '' }}">
                        <a href="{{ route('page','about-us')}}" class="nav-link">About Us</a></li>
                        <!-- <li class="nav-item {{ Request::is('offline-form') ? 'active' : '' }}">
                        <a href="{{ route('page','offline-form')}}" class="nav-link">Offline Form</a></li> -->
               </ul>
            </div>
         </div>
      </div>
      <div class="col-md-3 col-sm-3 col-xs-12 padXZ pad00 widthpara quickarea50">

         <div class="text-4 widget_text">
            <div class="widget sep-top-lg">
               <h3 class="upper widget-title">Our Location</h3>
               <div class="textwidget">
                  <p>
                     Naukri Wale 
                     (A UNIT OF SHRI RADHEYSHYAM JINDGAR CHARITABLE TRUST)<br>
                     523 OLD CITY,<br> 
                     SGNR - 335001 - IN
                  </p>
               </div>
            </div>
         </div>
      </div>
      <div class="col-md-3 col-sm-12  col-xs-12 padXZ pad00 widthparaaa">
         <div class="text-5 widget_text">
            <div class="widget sep-top-lg">
               <h3 class="upper widget-title">Quick Contact</h3>
               <div class="textwidget">
                  <div class="done">
                     <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        Your message has been sent. Thank you!
                     </div>
                  </div>
                  <form method="post" action="">
                     <div class="form wpcf7-form .form-control">
                        <div class="controls controls-row">
                           <input name="name" id="name" placeholder="Name" class="form-control" type="text" required><br>
                           <input name="email" id="email" placeholder="E-mail" class="form-control" type="text" required><br>
                        </div>
                        <div class="controls">
                           <textarea name="comment" id="comment" rows="4" placeholder="Message" class="form-control" required></textarea><br>
                        </div>
                        <input class="btn btn-primary" value="Submit" name="send" type="submit">
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
</div>
<div class="copyright sep-top-xs sep-bottom-xs">
<div class="container">
   <div class="row">
      <div class="col-md-6 col-sm-6 col-xs-12 padXZ pad00">
         <small class="arealeft">
         ©  Courtesy of Shri Radheyshyam Jindgar Charitable Trust, Sgnr</small>
      </div>
      <div class="col-md-6 col-sm-6 col-xs-12 text-right ">
         <p class="developedbyimg">Designed &amp; Developed By
         <a class="" href="https://lyrichordszone.com/" target="_blank">
                Lyrichordszone
          </a>
      </p>
      </div>
   </div>
</div>
</div>
</footer>

<script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>


</body>
</html>