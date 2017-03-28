<!DOCTYPE html>
<html lang="en">
<head>
   <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />  
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Markito Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--fonts-->
<link href='http://fonts.googleapis.com/css?family=Amaranth:400,700' rel='stylesheet' type='text/css'>
<!--//fonts-->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
                    jQuery(document).ready(function($) {
                        $(".scroll").click(function(event){     
                            event.preventDefault();
                            $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
                        });
                    });
                </script>
<!-- start menu -->
<link href="css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/megamenu.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>

<script src="js/simpleCart.min.js"> </script>
</head>
<body>
    <div class="header" >
    <div class="top-header" >       
        <div class="container">
        <div class="top-head" >
            <div class="header-para">
                <ul class="social-in">
                    <li><a href="#"><i> </i></a></li>                       
                    <li><a href="#"><i class="ic"> </i></a></li>
                    <li><a href="#"><i class="ic1"> </i></a></li>
                    
                </ul>           
            </div>  
            
            <ul class="header-in">
                <li ><a href="/products_template.html" >  brands</a></li>
                <li><a href="404.html">about us</a> </li>
                <li><a href="contact.html">   contact us</a></li>
                <li ><a href="#" >   how to use</a></li>
            </ul>
            <div class="search-top">
                <div class="search">
                    <form>
                        <input type="text" value="search about something ?" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'search about something ?';}" >
                        <input type="submit" value="" >
                    </form>
                </div>
            </div>
                <div>
                    <ul>
                        @if (Auth::guest())
                            <li><a href="{{ url('/login') }}">Login</a></li> 
                            <li><a href="{{ url('/register') }}">Register</a></li>
                        @else
                        <li><a href="#"><span> </span></a> </li>
                        <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                        </li>
                        @endif
                    </ul>
                </div>
                <div class="clearfix"> </div>
            
                <div class="clearfix"> </div>
        </div>
        </div>
    </div>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="/js/app.js"></script>
</body>
</html>
