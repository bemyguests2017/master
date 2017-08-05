<div class="top_menu">
    <div class="container">
        <div class="welcome_mssg hidden-xs">
            Welcome to Zante Hotel
        </div>
        <ul class="top_menu_right">
            <li><i class="fa fa-phone"></i><a href="tel:18475555555"> 1-888-123-4567 </a></li>
            <li class="email hidden-xxs"><i class="fa fa-envelope-o "></i>
            <?php if($this->request->session()->read('Auth.User.id') == ''){
                echo $this->Html->link("Login","/users/login",['class' => '', 'escape' => false]);?>
                <i class="fa fa-envelope-o "></i><?php 
                echo $this->Html->link("Register","/users/register",['class' => '', 'escape' => false]);
            }else{
                echo $this->Html->link("Logout","/users/logout",['class' => '', 'escape' => false]);
            } ?>
            </li>
            <li class="language-switcher">
                <nav class="dropdown">
                    <a href="#" class="dropdown-toggle select" data-hover="dropdown" data-toggle="dropdown">
                        <i class="famfamfam-flag-gb "></i>English<b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="#"><i class="famfamfam-flag-gr"></i>Ελληνικά</a></li>
                        <li><a href="#"><i class="famfamfam-flag-it"></i>Italiano</a></li>
                        <li><a href="#"><i class="famfamfam-flag-de"></i>Deutsch</a></li>
                        <li><a href="#"><i class="famfamfam-flag-fr"></i>Français</a></li>
                        <li><a href="#"><i class="famfamfam-flag-es"></i>Español</a></li>
                    </ul>
                </nav>
            </li>
        </ul>
    </div>
</div>
<header class="fixed">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle mobile_menu_btn" data-toggle="collapse" data-target=".mobile_menu" aria-expanded="false">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html">
                <?php echo $this->Html->image('logo.svg', ["alt" => "Logo", "height"=>"32"]); ?>
            </a>
        </div>
        <nav id="main_menu" class="mobile_menu navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="mobile_menu_title" style="display:none;">MENU</li>
                <li class="dropdown simple_menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">HOME <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="index.html">Home Version 1</a></li>
                        <li><a href="index2.html">Home Version 2</a></li>
                        <li><a href="index3.html">Home Version 3</a></li>
                        <li><a href="index4.html">Home Version 4</a></li>
                        <li><a href="boxed.html">Boxed Layout</a></li>
                    </ul>
                </li>
                <li class="dropdown simple_menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">ROOMS <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="rooms-list.html">Rooms List View</a></li>
                        <li><a href="rooms-grid.html">Rooms Grid View</a></li>
                        <li><a href="rooms-block.html">Rooms Block View</a></li>
                        <li><a href="room.html">Room Details 1</a></li>
                        <li><a href="room2.html">Room Details 2</a></li>
                    </ul>
                </li>
                <li class="dropdown mega_menu mega_menu_fullwidth"><a href="#" data-toggle="dropdown" class="dropdown-toggle" aria-expanded="true">PAGES <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <div class="mega_menu_inner">
                                <div class="row">
                                    <ul class="col-md-3">
                                        <li class="list_title">PAGES</li>
                                        <li><a href="gallery.html">Gallery 4 Columns</a></li>
                                        <li><a href="gallery-3columns.html">Gallery 3 Columns</a></li>
                                        <li><a href="gallery-2columns.html">Gallery 2 Columns</a></li>
                                        <li><a href="gallery-withoutdetails.html">Gallery Without Details</a></li>
                                        <li><a href="gallery-withoutfilters.html">Gallery Without Filters</a></li>
                                        <li><a href="gallery-slider.html">Gallery Slider</a></li>
                                        <li><a href="gallery2.html">Gallery Version 2</a></li>
                                    </ul>
                                    <ul class="col-md-3">
                                        <li class="list_title">PAGES</li>
                                        <li><a href="contact2.html">Contact Us Version 2</a></li>
                                        <li><a href="about-us.html">About Us</a></li>
                                        <li><a href="404.html">404 Page Version 1</a></li>
                                        <li><a href="404-v2.html">404 Page Version 2</a></li>
                                        <li><a href="coming-soon.html">Coming Soon</a></li>
                                        <li><a href="location.html">Our Location</a></li>
                                        <li><a href="restaurant.html">Our Restaurant</a></li>
                                    </ul>
                                    <ul class="col-md-3">
                                        <li class="list_title">PAGES</li>
                                        <li><a href="blog-post.html">Blog Details 1</a></li>
                                        <li><a href="blog-post2.html">Blog Details 2</a></li>
                                        <li><a href="places.html">Places</a></li>
                                        <li><a href="place-details.html">Place Details</a></li>
                                        <li><a href="events.html">Events</a></li>
                                        <li><a href="event-details.html">Event Details</a></li>
                                        <li><a href="spa.html">Our Spa</a></li>
                                    </ul>
                                    <ul class="col-md-3">
                                        <li class="list_title">MORE PAGES</li>
                                        <li><a href="loading.html">Loading Page </a></li>
                                        <li><a href="loading2.html">Loading Page 2</a></li>
                                        <li><a href="loading3.html">Loading Page 3</a></li>
                                        <li><a href="full-width.html">Full Width Page</a></li>
                                        <li><a href="right-sidebar.html">Right Sidebar Page</a></li>
                                        <li><a href="left-sidebar.html">Left Sidebar Page</a></li>
                                        <li><a href="our-staff.html">Our Staff</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
                <li class="dropdown simple_menu"><a href="#" data-toggle="dropdown" class="dropdown-toggle" aria-expanded="true">ELEMENTS <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="typography.html">Typography</a></li>
                        <li><a href="buttons.html">Buttons</a></li>
                        <li><a href="icons.html">Icons</a></li>
                    </ul>
                </li>
                <li><a href="contact.html">CONTACT US</a></li>
                <li><a href="blog.html">BLOG</a></li>
                <li class="menu_button">
                    <a href="booking-form.html" class="button  btn_yellow"><i class="fa fa-calendar"></i>BOOK ONLINE</a>
                </li>
            </ul>
        </nav>
    </div>
</header>