<!DOCTYPE html>
<html lang="zxx">
 
<head>
        <!-- meta tag -->
        <meta charset="utf-8">
        <title>medofficesupplies.com</title>
        <meta name="description" content="">
        <!-- responsive tag -->
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- favicon -->
        <link rel="apple-touch-icon" href="apple-touch-icon.html">
        <link rel="shortcut icon" type="image/x-icon" href="{{asset('image/icon.png')}}">
        <!-- bootstrap v4 css -->
        <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
        <!-- font-awesome css -->
        <link rel="stylesheet" type="text/css" href="{{asset('css/font-awesome.min.css')}}">
        <!-- animate css -->
        <link rel="stylesheet" type="text/css" href="{{asset('css/animate.css')}}">
        <!-- owl.carousel css -->
        <link rel="stylesheet" type="text/css" href="{{asset('css/owl.carousel.css')}}">
    <!-- slick css -->
        <link rel="stylesheet" type="text/css" href="{{asset('css/slick.css')}}">
        <!-- rsmenu CSS -->
        <link rel="stylesheet" type="text/css" href="{{asset('css/rsmenu-main.css')}}">
        <!-- rsmenu transitions CSS -->
        <link rel="stylesheet" type="text/css" href="{{asset('css/rsmenu-transitions.css')}}">
        <!-- magnific popup css -->
        <link rel="stylesheet" type="text/css" href="{{asset('css/magnific-popup.css')}}">
    <!-- flaticon css  -->
        <link rel="stylesheet" type="text/css" href="{{asset('fonts/flaticon.css')}}">
        <!-- flaticon2 css  -->
        <link rel="stylesheet" type="text/css" href="{{asset('fonts/fonts2/flaticon.css')}}">
        <!-- style css -->
        <link rel="stylesheet" type="text/css" href="{{asset('style.css')}}">
        <!-- responsive css -->
        <link rel="stylesheet" type="text/css" href="{{asset('css/responsive.css')}}">

        <script src="{{asset('css/drop.js')}}"></script>
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <style>
    .sub-menu{
      width: 906px !important;
      margin-left: -153px !important;
    }
</style>
<script type="text/javascript">
  
  $(function () {
    $('.onclick_list').click(function () {     
     $(this).parent().toggleClass('act_list').siblings().removeClass('act_list');
  });
}); 


    $(function () {
    $('.onclick1').click(function () {     
     $(this).parent().toggleClass('act_comp').siblings().removeClass('act_comp');
  });
}); 

</script>


    
    <body class="home1 show_enq">
        <!-- Preloader area start here-->
        <!--<div class="book_preload">
            <div class="book">
                <div class="book__page"></div>
                <div class="book__page"></div>
                <div class="book__page"></div>
            </div>
        </div>
      -->
    <!--Preloader area end here-->
    
        <!--Full width header Start-->
    <div class="full-width-header">
 
      
      <!--Header Start-->
      <header id="rs-header" class="rs-header">
        
        <!-- Header Top Start -->
        <div class="rs-header-top">
          <div class="container">
            <div class="row">



              <div class="col-lg-4 col-md-12 rs-vertical-middle">
                <div class="logo-area">
                  <a href="/"><img src="{{asset('image/logo.png')}}" alt="logo"></a>
                </div>
              </div>



              <div class="col-lg-8 col-md-12 nopadding">
                <div class="row marg_t25">


              <div class="col-sm-5 pad_r0">
                  <form method="get" action="/search">
                      {{ csrf_field() }}
                 <input type="text" class="search_add" placeholder="Seaarch" name="search">
                  </form>
                 <i class="fa fa-search add_srcc"></i>
                    </div>

                    <div class="col-sm-3">
                        <div class="header-contact">
                                            <div id="phone-details" class="widget-text">
                                <i class="glyph-icon flaticon-phone-call"></i>
                                <div class="info-text">
                                    <a href="tel:4155551234">
                                      <span>Call Us</span>
                                        +44 74 4190 9443
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="header-contact">
                            <div id="info-details" class="widget-text">
                                <i class="glyph-icon flaticon-email"></i>
                                <div class="info-text">
                                    <a href="mailto:info@domain.com">
                                      <span>Mail Us</span>
                                        info@medofficesupplies.com
                                  </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
              </div>
            </div>          
          </div>
        </div>
        <!-- Header Top End -->

        <!-- Menu Start -->
        <div class="menu-area menu-sticky">
          <div class="container">
            <div class="main-menu">
              <div class="row">
                <div class="col-sm-12">
                  <!-- <div id="logo-sticky" class="text-center">
                    <a href="index.html"><img src="images/logo.png" alt="logo"></a>
                  </div> -->
                  <a class="rs-menu-toggle"><i class="fa fa-bars"></i>Menu</a>
                  <nav class="rs-menu">
                    <ul class="nav-menu">
                      <!-- Home -->
                      <li> <a href="/">Home</a></li>

                      <li class="menu-item-has-children"> <a href="#">Products</a>
                        <ul class="sub-menu">
                            @foreach($categories as  $value)
                          <li><a href="/{{$value->page_url}}">{{$value->name}}</a></li>
                            @endforeach
                        </ul>
                      </li>
                      <li> <a href="/contact-us">Contact Us</a></li>
                        <li> <a href="/about-us">About Us</a></li>
                      <li> <a href="/login">Distributor Login</a></li>
                            <!--Contact Menu End-->
                    </ul>
                  </nav> 
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Menu End -->
      </header>
      <!--Header End-->

    </div>
        <!--Full width header End-->
     <script type="text/javascript">
          $(function() {
          $(".enq").click(function() {
          $('body').toggleClass("show_enq")
          })
          });

          $(function () {
          $('.close_form_show').click(function () {
          $('body').removeClass('show_enq');     

          });
          }); 

      </script>
@yield('content')
@extends('footer')
