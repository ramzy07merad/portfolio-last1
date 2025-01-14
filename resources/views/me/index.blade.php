@extends('me.app')
@section('content')
<body>
        
    <!--================Header Menu Area =================-->
    <header class="header_area">
        <div class="main_menu">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container box_1620">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    
                    {{-- <a class="navbar-brand logo_h" href="#html"><img src="img/logo.png" alt="Merad Ramzi"></a> --}}
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav ml-auto">
                            <li class="nav-item active"><a class="nav-link"  href="#home"  >Home</a></li> 
                            <li class="nav-item"><a class="nav-link" href="#about">About</a></li> 
                            <li class="nav-item"><a class="nav-link" href="services.html">Services</a></li> 
                            <li class="nav-item submenu dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pages</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="nav-link" href="portfolio.html">Portfolio</a></li>
                                    <li class="nav-item"><a class="nav-link" href="elements.html">Elements</a></li>
                                </ul>
                            </li> 
                            <li class="nav-item submenu dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Blog</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="nav-link" href="blog.html">Blog</a></li>
                                    <li class="nav-item"><a class="nav-link" href="single-blog.html">Blog Details</a></li>
                                </ul>
                            </li> 
                            <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
                        </ul>
                    </div> 
                </div>
            </nav>
        </div>
    </header>
    <!--================Header Menu Area =================-->
    
    <!--================Home Banner Area =================-->
    <section class="home_banner_area" id="home">
           <div class="container box_1620">
               <div class="banner_inner d-flex align-items-center">
                <div class="banner_content">
                    <div class="media">
                        <div class="d-flex">
                            <img src="{{ asset('pic-identite.png') }}" alt="">
                        </div>
                        <div class="media-body">
                            @foreach ($infos as $info )
                            <div class="personal_text">
                                <h6>Hello Everybody, i am</h6>
                                <h3>{{ $info->name }} </h3>
                                <h4>{{ $info->job }}</h4>
                                {{-- <p>{{ $info->abt_me }}</p> --}}
                                <ul class="list basic_info">
                                    <li><a href="#"><i class="lnr lnr-calendar-full"></i> {{ $info->birthday }}</a></li>
                                    <li><a href="#"><i class="lnr lnr-phone-handset"></i> {{ $info->phone }}3</a></li>
                                    <li><a href="#"><i class="lnr lnr-envelope"></i> {{ $info->email }}</a></li>
                                    <li><a href="#"><i class="lnr lnr-home"></i> {{ $info->address }}</a></li>
                                </ul>
                                <ul class="list personal_social">
                                    <li><a href="{{ $info->fb }}"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="{{ $info->ig }}"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="{{ $info->linkedin }}"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="https://github.com/ramzy07merad"><i class="fa fa-github"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
                            @endforeach

    <!--================End Home Banner Area =================-->
    
    <!--================Welcome Area =================-->
    <section class="welcome_area p_120" id="about">
        <div class="container">
            <div class="row welcome_inner">
                <div class="col-lg-6">
                    <div class="welcome_text">
                        <h4>About Myself</h4>
                        <p>Driven by a strong professional ethics and the ability to work independently. Solid skills in organization and collaboration within a team.</p>
                        <div class="row">
                            
                            <div class="col-md-4">
                                <div class="wel_item">
                                    <i class="lnr lnr-book"></i>
                                    <h4>9</h4>
                                    <p>Total Projects</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="wel_item">
                                    <i class="lnr lnr-users"></i>
                                    <h4> +5 years </h4>
                                    <p> experiences</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="tools_expert">
                        <div class="skill_main">
                            <div class="skill_item">
                                <h4>Python <span class="counter">85</span>%</h4>
                                <div class="progress_br">
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="skill_item">
                                <h4>java-c++ <span class="counter">90</span>%</h4>
                                <div class="progress_br">
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="skill_item">
                                <h4>php laravel <span class="counter">70</span>%</h4>
                                <div class="progress_br">
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="skill_item">
                                <h4>Power BI <span class="counter">80</span>%</h4>
                                <div class="progress_br">
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="skill_item">
                                <h4>React-Bootstrap  <span class="counter">85</span>%</h4>
                                <div class="progress_br">
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Welcome Area =================-->
    
    <!--================My Tabs Area =================-->
    <section class="mytabs_area p_120">
        <div class="container">
            <div class="tabs_inner">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"> My Education</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">My certification</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <ul class="list">
                            <li>
                                <span></span>
                                <div class="media">
                                    <div class="d-flex">
                                        <p>september 2015-2016</p>
                                    </div>
                                    <div class="media-body">
                                        <h4>Baccalaureate</h4>
                                        <p>Scientific Baccalaureate <br />Ibn Khaldun High School Setif Algeria</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <span></span>
                                <div class="media">
                                    <div class="d-flex">
                                        <p>September 2016-2019</p>
                                    </div>
                                    <div class="media-body">
                                        <h4>Bachelor's degree </h4>
                                        <p>Bachelor's degree in Computer Systems <br />erhat Abbas University, Sétif</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                            <span></span>
                                <div class="media">
                                    <div class="d-flex">
                                        <p>september 2019-2021</p>
                                    </div>
                                    <div class="media-body">
                                        <h4>Master's degree</h4>
                                        <p>Master's degree in Fundamental Computer Science and Artificial Intelligence <br />Ferhat Abbas University, Sétif.</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <ul class="list">
                            <li>
                                <span></span>
                                <div class="media">
                                    <div class="d-flex">
                                        <p>september 2020-2021</p>
                                    </div>
                                    <div class="media-body">
                                        <h4>Data Science</h4>
                                        <p>python for data science and machine learning Boot-camp  <br />Udemy BY JOSE PORTILLA </p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <span></span>
                                <div class="media">
                                    <div class="d-flex">
                                        <p>March 2022&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </p>
                                    </div>
                                    <div class="media-body">
                                        <h4>SQL</h4>
                                        <p> The complete SQL Bootcamp Go from ZeroTo Hero  <br />BY JOSE PORTILLA Udemy</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                            <span></span>
                                <div class="media">
                                    <div class="d-flex">
                                        <p>july 2022&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                                    </div>
                                    <div class="media-body">
                                        <h4>web scrapping</h4>
                                        <p>Using python to access web data (web scrapping)<br />coursera by Charles Russel severance</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End My Tabs Area =================-->
    
    <!--================Feature Area =================-->
    <section class="feature_area p_120">
        <div class="container">
            <div class="main_title">
                <h2>offerings to my clients</h2>
                <p>If you are looking at blank cassettes on the web, you may be very confused at the difference in price.</p>
            </div>
            <div class="feature_inner row">
                <div class="col-lg-4 col-md-6">
                    <div class="feature_item">
                        <i class="fi fi-rr-site-browser"></i>
                        <h4>WEB-SITE</h4>
                        <p>as Full Stack Developer,I specialize in building and maintaining both the front-end and back-end of web applications Ihave a deep understanding of the full development process, from designing intuitive user interfaces to creating scalable server-side solutions.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="feature_item">
                        <i class="fi fi-ts-calendar-arrow-down"></i>
                        <h4>data scientist</h4>
                        <p>As a Data Scientist, I specialize in analyzing and interpreting data to help organizations make informed,I leverage a combination of statistical methods, machine learning models, and data visualization techniques to uncover patterns, trends, and insights from data.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="feature_item">
                        <i class="fi fi-ts-devices"></i>
                        <h4>IT ENGINEER</h4>
                        <p>As an IT Engineer, I specialize in managing and optimizing an organization’s technology infrastructure to ensure efficient . My role involves working with hardware, software, networks, and systems to maintain seamless technology functionality .</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Feature Area =================-->
    
    <!--================Home Gallery Area =================-->
    <section class="home_gallery_area p_120">
        <div class="container">
            <div class="main_title">
                <h2>Our Latest Featured Projects</h2>
                <p>Who are in extremely love with eco friendly system.</p>
            </div>
 {{--            <div class="isotope_fillter">
                <ul class="gallery_filter list">
                    <li class="active" data-filter="*"><a href="#">All</a></li>
                    <li data-filter=".brand"><a href="#">Vector</a></li>
                    <li data-filter=".manipul"><a href="#">Raster</a></li>
                    <li data-filter=".creative"><a href="#">UI/UX</a></li>
                    <li data-filter=".design"><a href="#">Printing</a></li>
                </ul>
            </div> --}}
        </div>
        <div class="container">
            <div class="gallery_f_inner row imageGallery1">
                <div class="col-lg-4 col-md-4 col-sm-6 brand manipul design print">
                    <div class="h_gallery_item">
                        <div class="g_img_item">
                            <img class="img-fluid" src="{{ asset('assets/machine.png') }}" alt="">
                            <a class="light" href="{{ asset('assets/machine.png') }}"><img src="{{ asset('assets/machine.png') }}" alt=""></a>
                        </div>
                        <div class="g_item_text">
                            <h4>Machine Learning</h4>
                            <p>Over 20 Project</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 brand manipul creative">
                    <div class="h_gallery_item">
                        <div class="g_img_item">
                            <img class="img-fluid" src="{{ asset('assets/ecommerce.png') }}" alt="">
                            <a class="light" href={{asset("assets/ecommerce.png")}}><img src={{asset("assets/ecommerce.png")}} alt=""></a>
                        </div>
                        <div class="g_item_text">
                            <h4>FreeIt</h4>
                            <p>E-commerce Dynamique web-site</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 manipul creative design print">
                    <div class="h_gallery_item">
                        <div class="g_img_item">
                            <img class="img-fluid" src="{{ asset('assets/fennecbooks.jpeg') }}"  style= height:165px width="300px" alt="">
                            <a class="light" href="{{ asset('assets/fennecbooks.jpeg') }}"><img src="{{ asset('assets/fennecbooks.jpeg') }}" alt=""></a>
                        </div>
                        <div class="g_item_text">
                            <h4>Fennec Books</h4>
                            <p>E-commerce Dynamique web-site for library </p>
                        </div>
                    </div>
                </div>
             {{--    <div class="col-lg-4 col-md-4 col-sm-6 brand creative print">
                    <div class="h_gallery_item">
                        <div class="g_img_item">
                            <img class="img-fluid" src="{{ asset('assets/machine.png') }}" alt="">
                            <a class="light" href="{{ asset('assets/machine.png') }}"><img src="{{ asset('assets/machine.png') }}" alt=""></a>
                        </div>
                        <div class="g_item_text">
                            <h4>Embosed Logo Design</h4>
                            <p>Client Project</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 brand manipul design">
                    <div class="h_gallery_item">
                        <div class="g_img_item">
                            <img class="img-fluid" src="img/gallery/project-5.jpg" alt="">
                            <a class="light" href="img/gallery/project-5.jpg"><img src="img/gallery/icon.png" alt=""></a>
                        </div>
                        <div class="g_item_text">
                            <h4>3D Disposable Bottle</h4>
                            <p>Client Project</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 brand creative">
                    <div class="h_gallery_item">
                        <div class="g_img_item">
                            <img class="img-fluid" src="img/gallery/project-6.jpg" alt="">
                            <a class="light" href="img/gallery/project-6.jpg"><img src="img/gallery/icon.png" alt=""></a>
                        </div>
                        <div class="g_item_text">
                            <h4>3D Logo Design</h4>
                            <p>Client Project</p>
                        </div>
                    </div>
                </div> --}}
            </div>
      {{--       <div class="more_btn">
                <a class="main_btn" href="#">Load More Items</a>
            </div> --}}
        </div>
    </section>
    <!--================End Home Gallery Area =================-->
    
    <!--================Testimonials Area =================-->
   {{--  <section class="testimonials_area p_120">
        <div class="container">
            <div class="main_title">
                <h2>Testimonials</h2>
                <p>If you are looking at blank cassettes on the web, you may be very confused at the difference in price. You may see some for as low as $.17 each.</p>
            </div>
            <div class="testi_inner">
                <div class="testi_slider owl-carousel">
                    <div class="item">
                        <div class="testi_item">
                            <p>As conscious traveling Paup ers we must always be oncerned about our dear Mother Earth. If you think about it, you travel across her face</p>
                            <h4>Fanny Spencer</h4>
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star-half-o"></i></a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testi_item">
                            <p>As conscious traveling Paup ers we must always be oncerned about our dear Mother Earth. If you think about it, you travel across her face</p>
                            <h4>Fanny Spencer</h4>
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star-half-o"></i></a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testi_item">
                            <p>As conscious traveling Paup ers we must always be oncerned about our dear Mother Earth. If you think about it, you travel across her face</p>
                            <h4>Fanny Spencer</h4>
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star-half-o"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!--================End Testimonials Area =================-->
    
    <!--================Footer Area =================-->
    <footer class="footer_area p_120">
        <div class="container">
            <div class="row footer_inner">
                <div class="col-lg-5 col-sm-6">
                    <aside class="f_widget ab_widget">
                        <div class="f_title">
                            <h3>About Me</h3>
                        </div>
                        <p>Do you want to be even more successful? Learn to love learning and growth. The more effort you put into improving your skills,</p>
                        <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright All rights reserved </P>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </aside>
                </div>
                <div class="col-lg-5 col-sm-6">
                    <aside class="f_widget news_widget">
                        <div class="f_title">
                            <h3>Newsletter</h3>
                        </div>
                        <p>Stay updated with our latest trends</p>
                        {{-- <div id="mc_embed_signup">
                            <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="subscribe_form relative">
                                <div class="input-group d-flex flex-row">
                                    <input name="EMAIL" placeholder="Enter email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address '" required="" type="email">
                                    <button class="btn sub-btn"><span class="lnr lnr-arrow-right"></span></button>		
                                </div>				
                                <div class="mt-10 info"></div>
                            </form>
                        </div> --}}
                    </aside>
                </div>
                <div class="col-lg-2">
                    <aside class="f_widget social_widget">
                        <div class="f_title">
                            <h3>Follow Me</h3>
                        </div>
                        <p>Let us be social</p>
                        <ul class="list">
                            <li><a href="{{ $info->fb }}"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="{{ $info->ig }}"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="{{ $info->linkedin }}"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="https://github.com/ramzy07merad"><i class="fa fa-github"></i></a></li>
                        </ul>
                    </aside>
                </div>
            </div>
        </div>
    </footer>
    

@endsection