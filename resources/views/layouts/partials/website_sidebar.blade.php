<div class="middel-part__block">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 logo nf-col-padding d-flex">
                 <a href="/" title="jp-carpet-cleaning-home"><img src="{{ asset('theme/website/Image/White-Logo-JP.png')}}" alt="JP Carpet Logo"></a>
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle hidden-md-up" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-bars padding-sm-25" style="color: #479c18"></i>
                    </button>
                </div>
            </div>
            
            
            <div class="col-lg-8">
                <div class="top-info__block text-right">
                    <ul>
                        <li>
                          <p><a href="{{route('service-areas')}}" title="Our-service-areas" style="font-size: 16px"><i class="fa fa-map-marker"></i> Our Service Areas</a></p>
                        </li>
                        <li><p><a href="tel:+18182639314" title="jp-floor-care-phone" style="font-size: 16px"> 818-263-9314</a><i class="fa fa-phone"></i></p></li>
                        <li><p><a href="mailto:info@jpfloorcare.com" title="mail-to-jp-floor-care" style="font-size: 16px">info&#64;jpfloorcare.com</a><i class="fa fa-envelope" aria-hidden="true"></i></p></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="main_nav stricky-header__top navbar-toggleable-md">

    <nav class="navbar navbar-default navbar-sticky bootsnav">
        <div class="container">
            <!-- Start Header Navigation -->

            <!-- End Header Navigation -->
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-menu">
                <ul class="nav navbar-nav mobile-menu d-flex justify-content-between">
                    <li> <a title="home-jp-carpet-and-floor-care" href="/">Home</a></li>
                    <li> <a title="about-jp-carpet-cleaning-tab">About Us</a> <span class="submenu-button"> 
                        </span>
                        <ul class="dropdown-menu">
                            <li> <a title="about-jp-carpet" href="{{route('about')}}">About Us</a> </li>
                              <li> <a title="our-service-areas" href="{{route('service-areas')}}">Service Areas</a> </li>
                            <li> <a title="reviews-and-testimonials" href="{{route('testimonials')}}">Testimonials</a> </li>
                            <li> <a title="frequently-asked-carpet-cleaning-questions" href="{{route('faq')}}">FAQ</a> </li>
                        </ul>
                        
                    </li>
                    <li><a title="cleaning-services-tab">Services</a> <span class="submenu-button"> 
                        </span>
                      <ul class="dropdown-menu">
                            <li> <a title="all-floor-restoration-services" href="{{route('services')}}">All Services</a> </li>
                               <li> <a title="local-carpet-cleaning" href="{{route('carpet-cleaning')}}">Carpet Cleaning</a> </li>
                            <li> <a title="local-area-rug-cleaning" href="{{route('area-rug-cleaning')}}">Area Rug Cleaning</a> </li>
                            <li> <a title="eco-friendly-upholstery-cleaning" href="{{route('upholstery-cleaning')}}">Upholstery Cleaning</a> </li>
                            <li> <a title="tile-and-grout-cleaning" href="{{route('tile-and-grout-cleaning')}}">Tile and Grout Cleaning</a> </li>
                            <li> <a title="stone-restoration-and-repair" href="{{route('stone-restoration-and-repair')}}">Stone Restoration and Repair</a> </li>
                               <li> <a title="remove-and-replace-grout" href="{{route('regrout')}}">Regrouting</a> </li>
                            <li> <a title="wood-floor-cleaning-and-refinishing" href="{{route('wood-floor-cleaning')}}">Wood Floor Cleaning</a> </li>
                            <li> <a title="water-damage-restoration" href="{{route('water-damage-restoration')}}">Water Damage Restoration</a> </li>
                            <li> <a title="floor-maintenance-strip-wax" href="{{route('floor-maintenance-services')}}">Floor Maintenance Services</a> </li>
                          </ul>
                    </li>
                    <li> <a title="local-carpet-and-upholstery-coupons" href="{{route('specials')}}">Specials</a> </li>
                    <li> <a title="completed-jobs" href="{{route('gallery')}}">Gallery</a> </li>
                    <li> <a title="blog" href="{{route('blogs')}}">Blog</a> </li>
                    
                    <li> <a title="contact-us" href="{{route('contact')}}">Contact us</a> </li>
                    <li> <a title="Sign In" href="{{route('login')}}">Sign In</a> </li>
                </ul>
            </div>
            <!--navbar-collapse -->
        </div>
    </nav>
</div>