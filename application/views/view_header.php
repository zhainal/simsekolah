<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php 
$error_message = '';
$success_message = '';
?>
<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <!-- Meta Tags -->
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />

    <?php
    $CI =& get_instance();
    $CI->load->model('Model_common');

    if(!$CI->session->userdata('language')) {
        $CI->session->set_userdata(array('language' => 'en'));
    }
    $idiom = $CI->session->userdata('language');
    $CI->lang->load('content', $idiom);


    $class_name = '';
    $segment_2 = 0;
    $segment_3 = 0;
    $class_name = $this->router->fetch_class();
    $segment_2 = $this->uri->segment('2');
    $segment_3 = $this->uri->segment('3');

    if($class_name == 'home')
    {
        echo '<meta name="description" content="'.$page_home['meta_description'].'">';
        echo '<meta name="keywords" content="'.$page_home['meta_keyword'].'">';
        echo '<title>'.$page_home['title'].'</title>';
    }
    if($class_name == 'about')
    {
        echo '<meta name="description" content="'.$page_about['md_about'].'">';
        echo '<meta name="keywords" content="'.$page_about['mk_about'].'">';
        echo '<title>'.$page_about['mt_about'].'</title>';
    }
    if($class_name == 'terms_and_conditions')
    {
        echo '<meta name="description" content="'.$page_term['md_term'].'">';
        echo '<meta name="keywords" content="'.$page_term['mk_term'].'">';
        echo '<title>'.$page_term['mt_term'].'</title>';
    }
    if($class_name == 'privacy_policy')
    {
        echo '<meta name="description" content="'.$page_privacy['md_privacy'].'">';
        echo '<meta name="keywords" content="'.$page_privacy['mk_privacy'].'">';
        echo '<title>'.$page_privacy['mt_privacy'].'</title>';
    }
    if($class_name == 'faq')
    {
        echo '<meta name="description" content="'.$page_faq['md_faq'].'">';
        echo '<meta name="keywords" content="'.$page_faq['mk_faq'].'">';
        echo '<title>'.$page_faq['mt_faq'].'</title>';
    }
    if($class_name == 'team')
    {
        echo '<meta name="description" content="'.$page_team['md_team'].'">';
        echo '<meta name="keywords" content="'.$page_team['mk_team'].'">';
        echo '<title>'.$page_team['mt_team'].'</title>';
    }
    if($class_name == 'team_member')
    {
        $single_team_member = $this->Model_team_member->team_member_detail($segment_2);
        echo '<meta name="description" content="'.$single_team_member['meta_description'].'">';
        echo '<meta name="keywords" content="'.$single_team_member['meta_keyword'].'">';
        echo '<title>'.$single_team_member['meta_title'].'</title>';
    }
    if($class_name == 'portfolio')
    {
        if($segment_3 == 0) {
            echo '<meta name="description" content="'.$page_portfolio['md_portfolio'].'">';
            echo '<meta name="keywords" content="'.$page_portfolio['mk_portfolio'].'">';
            echo '<title>'.$page_portfolio['mt_portfolio'].'</title>';  
        } else {
            $single_portfolio = $this->Model_portfolio->portfolio_detail($segment_3);
            echo '<meta name="description" content="'.$single_portfolio['meta_description'].'">';
            echo '<meta name="keywords" content="'.$single_portfolio['meta_keyword'].'">';
            echo '<title>'.$single_portfolio['meta_title'].'</title>';
        }       
    }
    if($class_name == 'testimonial')
    {
        echo '<meta name="description" content="'.$page_testimonial['md_testimonial'].'">';
        echo '<meta name="keywords" content="'.$page_testimonial['mk_testimonial'].'">';
        echo '<title>'.$page_testimonial['mt_testimonial'].'</title>';
    }
    if($class_name == 'contact')
    {
        echo '<meta name="description" content="'.$page_contact['md_contact'].'">';
        echo '<meta name="keywords" content="'.$page_contact['mk_contact'].'">';
        echo '<title>'.$page_contact['mt_contact'].'</title>';
    }
    if($class_name == 'search')
    {
        echo '<meta name="description" content="'.$page_search['md_search'].'">';
        echo '<meta name="keywords" content="'.$page_search['mk_search'].'">';
        echo '<title>'.$page_search['mt_search'].'</title>';
    }
    if($class_name == 'terms-and-conditions')
    {
        echo '<meta name="description" content="'.$page_term['md_term'].'">';
        echo '<meta name="keywords" content="'.$page_term['mk_term'].'">';
        echo '<title>'.$page_term['mt_term'].'</title>';
    }
    if($class_name == 'privacy-policy')
    {
        echo '<meta name="description" content="'.$page_privacy['md_privacy'].'">';
        echo '<meta name="keywords" content="'.$page_privacy['mk_privacy'].'">';
        echo '<title>'.$page_privacy['mt_privacy'].'</title>';
    }
    if($class_name == 'pricing')
    {
        echo '<meta name="description" content="'.$page_pricing['md_pricing'].'">';
        echo '<meta name="keywords" content="'.$page_pricing['mk_pricing'].'">';
        echo '<title>'.$page_pricing['mt_pricing'].'</title>';
    }
    if($class_name == 'photo_gallery')
    {
        echo '<meta name="description" content="'.$page_photo_gallery['md_photo_gallery'].'">';
        echo '<meta name="keywords" content="'.$page_photo_gallery['mk_photo_gallery'].'">';
        echo '<title>'.$page_photo_gallery['mt_photo_gallery'].'</title>';
    }
    if($class_name == 'service')
    {
        if($segment_3 == 0) {
            echo '<meta name="description" content="'.$page_service['md_service'].'">';
            echo '<meta name="keywords" content="'.$page_service['mk_service'].'">';
            echo '<title>'.$page_service['mt_service'].'</title>';  
        } else {
            $single_service = $this->Model_service->service_detail($segment_3);
            echo '<meta name="description" content="'.$single_service['meta_description'].'">';
            echo '<meta name="keywords" content="'.$single_service['meta_keyword'].'">';
            echo '<title>'.$single_service['meta_title'].'</title>';
        }       
    }
    if($class_name == 'category')
    {
        $single_category = $this->Model_category->category_by_id($segment_2);
        echo '<meta name="description" content="'.$single_category['meta_description'].'">';
        echo '<meta name="keywords" content="'.$single_category['meta_keyword'].'">';
        echo '<title>'.$single_category['meta_title'].'</title>';     
    }
    if($class_name == 'news')
    {
        if($segment_3 == 0) {
            echo '<meta name="description" content="'.$page_news['md_news'].'">';
            echo '<meta name="keywords" content="'.$page_news['mk_news'].'">';
            echo '<title>'.$page_news['mt_news'].'</title>';
        } else {
            $news_single_item = $this->Model_news->news_detail($segment_3);
            echo '<meta name="description" content="'.$news_single_item['meta_description'].'">';
            echo '<meta name="keywords" content="'.$news_single_item['meta_keyword'].'">';
            echo '<title>'.$news_single_item['meta_title'].'</title>';
            $og_id = $news_single_item['news_id'];
            $og_photo = $news_single_item['photo'];
            $og_title = $news_single_item['news_title'];
            $og_description = $news_single_item['news_content_short'];
            echo '<meta property="og:title" content="'.$og_title.'">';
            echo '<meta property="og:type" content="website">';
            echo '<meta property="og:url" content="'.base_url().'news/view/'.$og_id.'">';
            echo '<meta property="og:description" content="'.$og_description.'">';
            echo '<meta property="og:image" content="'.base_url().'public/uploads/'.$og_photo.'">';
        }
    }
    if($class_name == 'event')
    {
        if($segment_3 == 0) {
            echo '<meta name="description" content="'.$page_event['md_event'].'">';
            echo '<meta name="keywords" content="'.$page_event['mk_event'].'">';
            echo '<title>'.$page_event['mt_event'].'</title>';
        } else {
            $event_single_item = $this->Model_event->event_detail($segment_3);
            echo '<meta name="description" content="'.$event_single_item['meta_description'].'">';
            echo '<meta name="keywords" content="'.$event_single_item['meta_keyword'].'">';
            echo '<title>'.$event_single_item['meta_title'].'</title>';
            $og_id = $event_single_item['event_id'];
            $og_photo = $event_single_item['photo'];
            $og_title = $event_single_item['event_title'];
            $og_description = $event_single_item['event_content_short'];
            echo '<meta property="og:title" content="'.$og_title.'">';
            echo '<meta property="og:type" content="website">';
            echo '<meta property="og:url" content="'.base_url().'event/view/'.$og_id.'">';
            echo '<meta property="og:description" content="'.$og_description.'">';
            echo '<meta property="og:image" content="'.base_url().'public/uploads/'.$og_photo.'">';
        }
    }
    ?>

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="<?php echo base_url(); ?>public/uploads/<?php echo $setting['favicon']; ?>">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/animate.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/jquery-ui.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/magnific-popup.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/meanmenu.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/toastr.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/spacing.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/responsive.css">

    <!--Js-->
    <script src="<?php echo base_url(); ?>public/js/jquery-2.2.4.min.js"></script>
    <script src="<?php echo base_url(); ?>public/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>public/js/popper.min.js"></script>
    <script src="<?php echo base_url(); ?>public/js/jquery-ui.min.js"></script>
    <script src="<?php echo base_url(); ?>public/js/owl.carousel.min.js"></script>
    <script src="<?php echo base_url(); ?>public/js/jquery.magnific-popup.min.js"></script>
    <script src="<?php echo base_url(); ?>public/js/jquery.meanmenu.js"></script>
    <script src="<?php echo base_url(); ?>public/js/jquery.filterizr.min.js"></script>
    <script src="<?php echo base_url(); ?>public/js/jquery.counterup.min.js"></script>
    <script src="<?php echo base_url(); ?>public/js/waypoints.min.js"></script>
    <script src="<?php echo base_url(); ?>public/js/viewportchecker.js"></script>
    <script src="<?php echo base_url(); ?>public/js/toastr.min.js"></script>

    <script type="text/javascript" src="//platform-api.sharethis.com/js/sharethis.js#property=5993ef01e2587a001253a261&product=inline-share-buttons"></script>

    <script>
        (function($) {
            $(document).ready(function () {
                toastr.options = {
                    'closeButton': true,
                    'debug': false,
                    'newestOnTop': false,
                    'progressBar': false,
                    'positionClass': 'toast-top-right',
                    'preventDuplicates': false,
                    'showDuration': '1000',
                    'hideDuration': '1000',
                    'timeOut': '5000',
                    'extendedTimeOut': '1000',
                    'showEasing': 'swing',
                    'hideEasing': 'linear',
                    'showMethod': 'fadeIn',
                    'hideMethod': 'fadeOut',
                }
            });

            $('#success_toastr').click(function(event) {
                toastr.success('You clicked Success toast');
            });
            $('#info_toastr').click(function(event) {
                toastr.info('You clicked Info toast')
            });
            $('#error_toastr').click(function(event) {
                toastr.error('You clicked Error Toast')
            });
            $('#warning_toastr').click(function(event) {
                toastr.warning('You clicked Warning Toast')
            });
        })(jQuery);
    </script>
    
    <style>
        .header-area,
        ul.nav-menu li ul li a,
        .searchbar .input-search,
        .text-animated li a,
        .slider-one .owl-nav .owl-prev, 
        .slider-one .owl-nav .owl-next,
        .about-tab:before,
        .progress-gallery .bar-container .progress .progress-bar-custom,
        .choose-item:before,
        .feature-icon i,
        .feature-item:hover .feature-text,
        .bg-counterup,
        .portfolio-bg,
        .faq-header button.faq-button,
        .faq-header button.faq-button.collapsed:hover,
        .booking-area:before,
        .bg-booking,
        .team-carousel .owl-nav .owl-prev, 
        .team-carousel .owl-nav .owl-next,
        .team-text,
        .team-social li a:hover,
        .price-header i,
        .button-df a,
        .bg-testimonial,
        .testimonial-carousel .owl-dots .owl-dot,
        .blog-carousel .owl-nav .owl-prev, 
        .blog-carousel .owl-nav .owl-next,
        .blog-author li.blog-button a,
        .call-us:before,
        .footer-item h3:before,
        .footer-item h3:after,
        .footer-item .btn,
        .footer-item ul.footer-social li a,
        .scroll-top,
        .headstyle h4:before,
        .headstyle h4:after,
        .team-detail-text ul li a,
        .sidebar-item h3:before,
        .sidebar-item h3:after,
        .event-contact-item,
        .gallery-bg,
        .testimonial-grid .testimonial-description p:before, 
        .testimonial-two-carousel .testimonial-description p:before,
        .form-button .btn,
        .project-carousel .owl-nav .owl-prev, 
        .project-carousel .owl-nav .owl-next,
        .sidebar-item button,
        .contact-item:hover .contact-icon,
        .contact-form .btn {
            background: #<?php echo $setting['front_end_color']; ?>!important;
        }

        ul.nav-menu li:hover > a,
        .searchbar .search-button:hover,
        .text-animated li a:hover,
        .text-animated li:last-child a:hover,
        .slider-one .owl-nav .owl-prev:hover, 
        .slider-one .owl-nav .owl-next:hover,
        .feature-item:hover .feature-icon i,
        .services-text a:hover,
        .portfolio-menu li.filtr-active,
        .portfolio-menu li:hover,
        .portfolio-text h3 a:hover,
        .form-button .btn2:hover,
        .blog-item h3 a:hover,
        .blog-item span i,
        .blog-author li a i,
        .blog-author li a:hover,
        .call-us .button a:hover,
        .footer-item ul li a:hover,
        .team-info ul li span,
        li.event-header-left i,
        .recent-text a:hover,
        .event-contact-item:hover .event-contact-icon,
        .service-sidebar-item ul li a:hover,
        .portfolio-details ul li span,
        .sidebar-item ul li a:hover,
        .blog-one-text h3 a:hover,
        .blog-one-text ul li i,
        .single-blog ul li i,
        .contact-icon {
            color: #<?php echo $setting['front_end_color']; ?>!important;   
        }

        .text-animated li a,
        .slider-one .owl-nav .owl-prev, 
        .slider-one .owl-nav .owl-next,
        .feature-icon i,
        .feature-item:hover .feature-text,
        .footer-item .form-control,
        .footer-item .btn,
        .footer-item ul.footer-social li a,
        .event-contact-item:hover .event-contact-icon,
        .form-control:focus,
        .sidebar-item button,
        .contact-item:hover .contact-icon,
        .contact-form .btn {
            border-color: #<?php echo $setting['front_end_color']; ?>!important;      
        }

        .video-button span {
            border-left-color: #<?php echo $setting['front_end_color']; ?>!important;         
        }

        .portfolio-menu li.filtr-active,
        .team-social li a:hover {
            border-bottom-color: #<?php echo $setting['front_end_color']; ?>!important;            
        }

        .portfolio-menu li.filtr-active:before,
        .team-social li a:hover {
            border-top-color: #<?php echo $setting['front_end_color']; ?>!important;               
        }

        ul.nav-menu li ul li:hover > a {
            background: #f1f1f1!important;
        }
        .text-animated li a:hover,
        .text-animated li:last-child a:hover,
        .slider-one .owl-nav .owl-prev:hover, 
        .slider-one .owl-nav .owl-next:hover {
            background: #fff!important;
            border-color: #fff!important;
        }
        .text-animated li:last-child a {
            background: #313131!important;
            border-color: #313131!important;
        }
        .blog-author li.blog-button a,
        .blog-author li.blog-button i,
        .footer-item ul.footer-social li a:hover,
        .contact-item:hover .contact-icon {
            color: #fff!important;
        }
        .feature-item:hover .feature-icon i,
        .faq-header button.faq-button.collapsed {
            background: #fff!important;
        }
        .team-carousel .owl-nav .owl-prev:hover, 
        .team-carousel .owl-nav .owl-next:hover,
        .blog-carousel .owl-nav .owl-prev:hover, 
        .blog-carousel .owl-nav .owl-next:hover,
        .button-df a:hover,
        .testimonial-carousel .owl-dots .owl-dot.active,
        .blog-author li.blog-button a:hover,
        .footer-item ul.footer-social li a:hover,
        .team-detail-text ul li a:hover,
        .form-button .btn:hover,
        .project-carousel .owl-nav .owl-prev:hover, 
        .project-carousel .owl-nav .owl-next:hover,
        .contact-form .btn:hover {
            background: #313131!important;
        }
        .footer-item ul.footer-social li a:hover,
        .contact-form .btn:hover {
            border-color: #313131!important;
        }
        .event-contact-item:hover,
        .faq-body,
        .feature-item:hover .feature-icon i, .faq-header button.faq-button.collapsed {
            background: #f5f5f5!important;
        }

        .booking-form input:focus,
        .booking-form textarea:focus {
            border-color: #fff!important;
        }

        .booking-form button[type="submit"] {
            background: #313131!important;
            color: #fff!important;
        }

        .booking-form button[type="submit"]:hover {
            background: #fff!important;
            color: #313131!important;
        }
    </style>

</head>

<body>
    
    <?php echo $comment['code_body']; ?>

    <?php
        if($this->session->flashdata('error')) {
            ?>
            <script>
                toastr.error('<?php echo $this->session->flashdata('error'); ?>');
            </script>
            <?php
        }
        if($this->session->flashdata('success')) {
            ?>
            <script>
                toastr.success('<?php echo $this->session->flashdata('success'); ?>');
            </script>
            <?php
        }
    ?>

    <!--Preloader Start-->
    <div id="preloader">
        <div id="status" style="background-image: url(<?php echo base_url(); ?>public/images/preloader.gif)"></div>
    </div>
    <!--Preloader End-->

    <!--Header-Area Start-->
    <div class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-5 col-12">
                    <div class="header-social">
                        <ul>
                            <li>
                                <div class="social-bar">
                                    <ul>
                                        <?php
                                        foreach ($social as $row)
                                        {
                                            if($row['social_url']!='')
                                            {
                                                echo '<li><a href="'.$row['social_url'].'"><i class="'.$row['social_icon'].'"></i></a></li>';
                                            }
                                        }
                                        ?>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-7 col-12">
                    <div class="header-info">
                        <ul class="first">
                            <li>
                                <i class="fa fa-envelope"></i>
                                <span><?php echo $setting['top_bar_email']; ?></span>
                            </li>
                            <li>
                                <i class="fa fa-phone"></i>
                                <span><?php echo $setting['top_bar_phone']; ?></span>
                            </li>
                        </ul>

                        <?php if($setting['language_status'] == 'Show'): ?>
                        <ul class="nav nav-tabs lang-right">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><span class="fa fa-language"></span> En <span class="caret"></span></a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="<?php echo base_url(); ?>lang/index/en">English</a>
                                    <a class="dropdown-item" href="<?php echo base_url(); ?>lang/index/bn">Bengali</a>
                                    <a class="dropdown-item" href="<?php echo base_url(); ?>lang/index/fr">French</a>
                                </div>
                            </li>
                        </ul>
                        <?php endif; ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Header-Area End-->

    <!--Menu Start-->
    <div id="strickymenu" class="menu-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-12">
                    <div class="logo flex">
                        <a href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>public/uploads/<?php echo $setting['logo']; ?>" alt="Logo"></a>
                    </div>
                </div>
                <div class="col-lg-9 col-12 main-menu">
                    <div class="main-menu-item">
                        <ul class="nav-menu">
                            <li><a href="<?php echo base_url(); ?>"><?php echo $CI->lang->line('HOME'); ?></a></li>
                            <li><a href="<?php echo base_url(); ?>about"><?php echo $CI->lang->line('ABOUT'); ?></a></li>
                            <li><a href="<?php echo base_url(); ?>team"><?php echo $CI->lang->line('TEAM'); ?></a></li>
                            <li class="menu-item-has-children"><a href="#"><?php echo $CI->lang->line('PAGE'); ?></a>
                                <ul>
                                    <li><a href="<?php echo base_url(); ?>event"><?php echo $CI->lang->line('EVENT'); ?></a></li>
                                    <li><a href="<?php echo base_url(); ?>photo-gallery"><?php echo $CI->lang->line('PHOTO_GALLERY'); ?></a></li>
                                    <li><a href="<?php echo base_url(); ?>testimonial"><?php echo $CI->lang->line('TESTIMONIAL'); ?></a></li>
                                    <li><a href="<?php echo base_url(); ?>faq"><?php echo $CI->lang->line('FAQ'); ?></a></li>
                                    <li><a href="<?php echo base_url(); ?>pricing"><?php echo $CI->lang->line('PRICING_TABLE'); ?></a></li>
                                </ul>
                            </li>
                            <li><a href="<?php echo base_url(); ?>service"><?php echo $CI->lang->line('SERVICE'); ?></a></li>
                            <li><a href="<?php echo base_url(); ?>portfolio"><?php echo $CI->lang->line('PORTFOLIO'); ?></a></li>
                            <li><a href="<?php echo base_url(); ?>news"><?php echo $CI->lang->line('NEWS'); ?></a></li>
                            <li><a href="<?php echo base_url(); ?>contact"><?php echo $CI->lang->line('CONTACT'); ?></a></li>
                        </ul>
                    </div>
                    <div class="searchbar">
                        <div class="search-button"><i class="fa fa-search"></i></div>
                        <?php echo form_open(base_url().'search'); ?>
                            <div class="input-group input-search">
                                <input type="text" class="form-control" placeholder="<?php echo $CI->lang->line('SEARCH_FOR'); ?>" name="search_string">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="submit" name="form1"><i class="fa fa-search"></i></button>
                                </span>
                            </div>
                        <?php echo form_close(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Menu End-->