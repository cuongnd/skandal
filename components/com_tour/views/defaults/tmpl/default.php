<?php
/**
 * @package     Joomla.Site
 * @subpackage  com_contact
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
//die('asdasd');

// CUSTOM CSS
$document = JFactory::getDocument();
$document->addStyleSheet('components/com_tour/views/defaults/tmpl/style.css');

?>

<!-- Header -->
    <div class="company_logo">
            <div class="col-md-10 hidden-xs">
                <img src="img/common/logo.png" alt="" width="100%">
            </div>
     </div>
    <header>
        <div id=carousel-example-generic class="carousel slide" data-ride=carousel>
            <!-- Wrapper for slides -->
            <div class=carousel-inner>
                <div class="item active"><img src="img/common/siemreap.jpg" alt=Image1>
                    <div class=carousel-caption>
                        <!-- <p>Angkor Wat - Siem Reap in Cambodia</p>-->
                    </div>
                </div>
                <div class=item><img src="img/common/halong.jpg" alt=Image2>
                    <div class=carousel-caption>
                        <!--<p>Ha Long Bay - Vietnam UNESCO World Heritage</p>-->
                    </div>
                </div>
                <div class=item><img src="img/common/sapa.jpg" alt=Image3>
                    <div class=carousel-caption>
                        <!--<p>Sapa - Vietnam, Wonderful hillstation</p>-->
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-5 visible-md visible-lg head-title">
                <h1>Tailor Made Journeys</h1>
                <span>in South Eastern Asia</span>
            </div>
        </div>
        <div class="row">
            <div class="container-fluid" style="background: #FFFFFF;  min-height:55px; z-index:2!important;">
                <div class="container">
                    <div class="col-md-8 col-md-offset-3">
                    <label style="font-size: 14px; float: left; padding: 10px 0 0 130px; color: #ef740d">SEARCH FOR A TRIP</label>
                    <form class="form-inline" role="form">
                        <div class="form-group" style="display: inline">
                            <select>
                                <option selected>All Destination</option>
                                <option>Vietnam</option>
                                <option>Laos</option>
                                <option>Cambodia</option>
                            </select>
                            <select >
                                <option selected>All length</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                            </select>
                            <input class="form-control1" id="keywords" Placeholder="Keywords" type="text" style="display: inline">
                        </div>
                        <button type="submit" class="btn btn-info btn-xs" title="" style="display: inline; margin-top:3px">GO <i class="fa fa-play" style="padding-left: 5px"></i> </button>
                    </form>

                </div>
                </div>
            </div>
        </div>
    </header>
<!-- End Header -->





<!-- Begin Body -->
<div class="container">

    

    <div class="row" style="background: #FFFFFF; margin-top: 20px">

        <div class="col-md-6 top-dest">

        <h5 class="title">BUILD YOUR HOLIDAY IN VIETNAM, LAOS.CAMBODIA, CHINA, THIALAND AND MYANMAR</h5>

            <div class="row">
                <div class="col-xs-4">
                <img src="img/portfolio/vietnamtours.jpg" alt="top-dest heritage">
                <a href="#" class="top-dest_title">VIETNAM TOURS</a>

                </div>
                <div class="col-xs-4">
                <img src="img/portfolio/chinatours.jpg" alt="top-dest heritage">
                <a href="#" class="top-dest_title">CHINA TOURS</a>

                </div>
                <div class="col-xs-4">
                <img src="img/portfolio/cambodiatours.jpg" alt="top-dest heritage">
                <a href="#" class="top-dest_title">CAMBODIA TOURS</a>
                </div>

            </div>

            <div class="row" style="padding-top:2px">
            <div class="col-xs-4">
                <img src="img/portfolio/myanmartours.jpg" alt="family top-dest">
                <a href="#" class="top-dest_title">MYANMAR TOURS</a>
            </div>

            <div class="col-xs-4">
                <img src="img/portfolio/thailandtours.jpg" alt="top-dest weekend">
                <a href="#" class="top-dest_title">THAILAND TOURS</a>
            </div>

            <div class="col-xs-4">
                <img src="img/portfolio/laostours.jpg" alt="top-dest heritage">
                <a href="#" class="top-dest_title">LAOS TOURS</a>
            </div>

        </div>

    </div>

    <div class="col-md-6">
        <h5 class="title">FEATURED ACTIVITIES IN VIETNAM , CAMBODIA, LAOS, THAILAND, MYANMAR AND CHINA</h5>

        <div style="min-height:280px; max-width: 620px; position: relative; padding-left: 4px" id="banner-fade">

            <!-- start Basic Jquery Slider -->

            <ul class="bjqs">
                <li style="height: 320px; width: 100%; display: none;" class="bjqs-slide">
                    <img src="img/portfolio/halong.jpg" title="Singapore">

                    <p class="bjqs-caption">Singapore</p></li>

                <li style="height: 320px; width: 100%; display: list-item;" class="bjqs-slide">
                    <img src="img/portfolio/hoian.jpg" title="Malaysia">

                    <p class="bjqs-caption">Malaysia</p></li>

                <li style="height: 320px; width: 100%; display: none;" class="bjqs-slide">
                    <img src="img/portfolio/nhatrang.jpg" title="Sydney">

                    <p class="bjqs-caption">Sydney</p></li>

            </ul>

            <!-- end Basic jQuery Slider -->

        </div>

    </div>

</div>

    <div class="row" style="margin-top: 20px">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-6" style="margin: 0; padding: 0 5px 0 0">
                    <div class="profiles">
                    <h5 style="padding: 10px 0 0 5px; color: #009900">SKANDA HOLIDAYS</h5>
                        <div class="col-md-6" >
                        <p>
                            At the early start, Asianventure Tours was a small local tour operator for individual
                            travellers to visit Vietnam, and has since rapidly grown with the expansion of its
                            activities over the border to Laos, Cambodia, Thailand and Myanmar. As a result , it has got
                            a new height to become a destination tour company with a group of experienced guides and
                            professional qualified experts, who also has been involved in tourism business for many
                            years, both in and outside Vietnam. In together with its development, Asianventure Tours has
                            set up the representative operation office and affiliates located in Laos, Cambodia,
                            Thailand and Myanmar. The omnipresent flag allows our company to be committed to taking care
                            of all your travel arrangement in a timely manner and making your trip a unique experience.
                        </p>
                        </div>

                    <div class="col-md-6" style="padding: 0; margin: 0">

                        <ul style="list-style: none; padding: 0 0 0 15px; margin: 5px 0 0 0; height: 310px;" class="borderline2px">

                            <li><img src="img/portfolio/download.png" width="270"></li>

                            <li style="padding-top: 10px; padding-bottom: 20px">
                                <input type="text" placeholder=" Enter your name" style="height: 30px; width: 265px; border: #cccccc 1px solid">
                                <BR>
                                <input type="text" placeholder=" Email address" style="height: 30px; width: 265px; border: #cccccc 1px solid; margin-top: 10px">

                            <li>
                                <button type="submit" class="btn btn-primary btn-group-lg btn-block" style="background: #0161ab; width: 265px">Submit</button>
                            </li>


                        </ul>

                    </div>

                </div>
            </div>
                <div class="col-md-6"  style="margin: 0; padding: 0 0 0 15px">
                    <div class="tbltestimonials">
                    <h5 style="padding: 10px 0 0 5px; color: #009900">CLIENTS TESTIMONIALS </h5>
                    <div class="col-md-6 testimonials">
                        <div style="height:300px; border-right-image:url('img/common/bg2.png')">
                            <ul style="font-size: 14px; padding-bottom: 20px; line-height: 16px">
                                <li style="color: #990000; font-weight: bold">Ughetta Morelli</li>
                                <li>Posted on: Feb 09, 15 from Italy</li>
                                <li style="background-image:url(img/common/bg1.png); height: 15px"></li>
                                <li style="line-height: 17px; padding-top: 10px">Thank you so much for having organized
                                    us such a beautiful tour of Vietnam. Everything went well.
                                    Our drivers and guides were very professional and helpful. We had a good time with
                                    them like being in a family. All the hotels were very nice too. We particularly
                                    liked the hotel in Hoi An.
                                </li>
                            </ul>

                            <ul style="font-size: 14px;line-height: 16px">
                                <li style="color: #990000; font-weight: bold">Celia Stresing</li>
                                <li>Posted on: Feb 12, 15 from Germany</li>
                                <li style="background-image:url(img/common/bg1.png); height: 15px;"></li>
                                <li style="line-height: 17px; padding-top: 10px">Thank you for a wonderful trip. You did
                                    organize everythings pretty well.
                                    Certainly I am going back again to Vietnam, which is a nice country and the food
                                    delicious.
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-6" style="padding: 0; margin: 0">
                        <ul style="list-style: none; padding: 0 0 0 15px; margin: 0" class="borderline2px">
                            <li><img src="img/portfolio/halong_300x120.jpg" width="95%" height="105">
                                <a href="#" class="top-dest_title1">HALONG, VIETNAM</a>
                                <p style="font-size: 14px; line-height: 15px; color: #0161ab">The marine notch is a
                                    feature of limestone coastline but, in Ha Long Bay, it has created the mature
                                    landscape,....</p>
                            </li>

                            <li><img src="img/portfolio/bagan_300x120.jpg" width="95%" height="105">
                                <a href="#" class="top-dest_title1">BAGAN, MYANMAR</a>
                                <p style="font-size: 14px; line-height: 15px; color: #0161ab">The marine notch is a
                                    feature of limestone coastline but, in Ha Long Bay, it has created the mature
                                    landscape,....</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>

    <div class="row" style="margin-top: 20px">
        <div class="col-md-12" style="background: #ffffff">
        <h4 style="text-align: center">PROMOTION TOURS IN VIETNAM, CAMBODIA, LAOS, THAILAND ,MYANMAR , CHINA </h4>
            <div class="topDestinationScrollCntr">
                <div class="jcarousel-skin-tango">
                    <div class="jcarousel-container jcarousel-container-horizontal"
                     style="position: relative; display: block;">
                        <div class="jcarousel-clip jcarousel-clip-horizontal" style="position: relative;">
                            <ul id="mycarousel" class="jcarousel-list jcarousel-list-horizontal">
                                <li class="jcarousel-item jcarousel-item-horizontal" jcarouselindex="1">
                                    <img src="img/portfolio/feature-01.jpg" alt="top destinations">
                                    <a href="#" class="featerMore">More details</a>
                                                    <span>Glimpse of Vietnam, 8 days, from Hanoi to Ho Chi Minh, Vietnam
                                                    <br><h5 class="small">Fr. US$ 500/pers.</h5></span>
                                </li>

                                <li class="jcarousel-item jcarousel-item-horizontal" jcarouselindex="2">
                                    <img src="img/portfolio/feature-02.jpg"  alt="top destinations">
                                    <a href="#" class="featerMore">More details</a>
                                                    <span>Glimpse of Vietnam, 8 days, from Hanoi to Ho Chi Minh, Vietnam
                                                    <br><h5 class="small">Fr. US$ 500/pers.</h5></span>
                                </li>

                                <li class="jcarousel-item jcarousel-item-horizontal" jcarouselindex="3">
                                    <img src="img/portfolio/feature-03.jpg" alt="top destinations">
                                    <a href="#" class="featerMore">More details</a>
                                                    <span>Glimpse of Vietnam, 8 days, from Hanoi to Ho Chi Minh, Vietnam
                                                    <br><h5 class="small">Fr. US$ 500/pers.</h5></span>

                                </li>

                                <li class="jcarousel-item jcarousel-item-horizontal" jcarouselindex="4">
                                    <img src="img/portfolio/feature-04.jpg" alt="top destinations">
                                    <a href="#" class="featerMore">More details</a>
                                                    <span>Glimpse of Vietnam, 8 days, from Hanoi to Ho Chi Minh, Vietnam
                                                    <br><h5 class="small">Fr. US$ 500/pers./h5></span>

                                </li>

                                <li class="jcarousel-item jcarousel-item-horizontal" jcarouselindex="5">
                                    <img src="img/portfolio/feature-05.jpg" alt="top destinations">
                                    <a href="#" class="featerMore">More details</a>
                                                    <span>Glimpse of Vietnam, 8 days, from Hanoi to Ho Chi Minh, Vietnam
                                                    <br><h5 class="small">Fr. US$ 500/pers.</h5></span>

                                </li>

                                <li class="jcarousel-item jcarousel-item-horizontal" jcarouselindex="6">
                                    <img src="img/portfolio/feature-06.jpg" alt="top destinations">
                                    <a href="#" class="featerMore">More details</a>
                                                    <span>Glimpse of Vietnam, 8 days, from Hanoi to Ho Chi Minh, Vietnam
                                                    <br><h5 class="small">Fr. US$ 500/pers.</h5></span>

                                </li>

                                <li class="jcarousel-item jcarousel-item-horizontal" jcarouselindex="7">
                                    <img src="img/portfolio/feature-07.jpg" alt="top destinations">
                                    <a href="#" class="featerMore">More details</a>
                                                    <span>Glimpse of Vietnam, 8 days, from Hanoi to Ho Chi Minh, Vietnam
                                                    <br><h5 class="small">Fr. US$ 500/pers.</h5></span>

                                </li>

                                <li class="jcarousel-item jcarousel-item-horizontal" jcarouselindex="8">
                                    <img src="img/portfolio/feature-01.jpg" alt="top destinations">
                                    <a href="#" class="featerMore">More details</a>
                                                    <span>Glimpse of Vietnam, 8 days, from Hanoi to Ho Chi Minh, Vietnam
                                                    <br><h5 class="small">Fr. US$ 500/pers.</h5></span>

                                </li>

                                <li class="jcarousel-item jcarousel-item-horizontal" jcarouselindex="9">
                                    <img src="img/portfolio/feature-02.jpg" alt="top destinations">
                                    <a href="#" class="featerMore">More details</a>
                                                    <span>Glimpse of Vietnam, 8 days, from Hanoi to Ho Chi Minh, Vietnam
                                                    <br><h5 class="small">Fr. US$ 500/pers.</h5></span>

                                </li>

                                <li class="jcarousel-item jcarousel-item-horizontal" jcarouselindex="10">
                                    <img src="img/portfolio/feature-03.jpg" alt="top destinations">
                                    <a href="#" class="featerMore">More details</a>
                                                    <span>Glimpse of Vietnam, 8 days, from Hanoi to Ho Chi Minh, Vietnam
                                                    <br><h5 class="small">Fr. US$ 500/pers.</h5></span>
                                </li>

                        </ul>

                    </div>

                    <div class="jcarousel-prev jcarousel-prev-horizontal" style="display: block;"></div>
                    <div class="jcarousel-next jcarousel-next-horizontal" style="display: block;"></div>

                </div>

            </div>

        </div>

    </div>

</div>

</div>

    <div class="container-fluid">
            <div class="row">
                <div class="bottomIcon">
                    <div class="col-md-3 topIcon">
                        <img src="img/common/icon_index_money_60x60.png">
                        <h5>PRICES</h5>
                        <p style="text-align: center">Check low rates of various holidays packages </p>
                    </div>
                    <div class="col-md-3 topIcon">
                        <img src="img/common/icon_index_fast_60x60.png">
                        <h5>FAST</h5>
                        <p style="text-align: center">Fast customer support and quote offer</p>
                    </div>
                    <div class="col-md-3 topIcon">
                        <img src="img/common/icon_index_save_60x60.png">
                        <h5>SAFE</h5>
                        <p style="text-align: center">Communication and  safe transactions</p>
                    </div>
                    <div class="col-md-3 topIcon">
                        <img src="img/common/icon_index_hand_60x60.png">
                        <h5>SATISFACTION</h5>
                        <p style="text-align: center">Customer satisfaction is our success</p>
                    </div>
                </div>
            </div>
    </div>
<!-- End Body -->




<!--Begin Footer -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-2" style="margin-left: 50px; margin-right: 30px">
                <h5>SKANDA HOLIDAYS</h5>
                <ul>
                    <li>About Company</li>
                    <li>Responsible Tourism</li>
                    <li>Comapny Media</li>
                    <li>Job Oppertunities</li>
                    <li>Company Award</li>
                    <li>Why Skanda Holidays</li>
                </ul>

            </div>

            <div class="col-md-2" style="margin-right: -20px">
                <h5>DESTINATION</h5>
                <ul>
                    <li>Vietnam</li>
                    <li>Laos</li>
                    <li>Cambodia</li>
                    <li>Thailand</li>
                    <li>Myanmar</li>
                    <li>China</li>
                </ul>

            </div>

            <div class="col-md-2">
                <h5>COMMUNITY</h5>
                <ul>
                    <li>Booking Conditions</li>
                    <li>Privacy Policy</li>
                    <li>Feedback</li>
                    <li>Brochure  Request</li>

                </ul>

            </div>

            <div class="col-md-2 ft-right">
                <h5>CONTACT</h5>
                <ul>
                    <li>Contact Us</li>
                    <li>Enquiry</li>
                    <li>FAQs</li>
                    <li>Custom Holidays</li>

                </ul>

            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="modern socle">
                        <div class="col-md-1" style="margin: 0; padding: 15px 0"><h5 style="color: #FFFFFF">FOLLOW US</h5></div>
                        <div class="col-md-7" style="padding:4px 0 0 20px; margin: 0">
                            <img src="img/common/icon_social_250x36.png" >
                        </div>
                        <div class="col-md-2"><h5 style="color: #FFFFFF; padding: 15px 0; text-align: right">NEWSLETTER REGISTER</h5></div>
                        <div class="col-md-1" style="padding: 0; margin: 0"><i class="fa fa-envelope fa-3x" style="color: #FFFFFF"></i></div>
                    </div>
                </div>
            </div>
        </div>
</footer>
<div class="footeBtrm" style="background: #ffffff">
    <div class="container">
        <div class="row" style="height: 30px; line-height: 30px;">
            <ul style="list-style: none;  margin: 0; padding: 0; text-align: center;">
                <li style="display: inline; padding-right: 10px"><a href="" style=" color: #006699">Terms  and Conditions</a></li>
                <li style="display: inline; padding-right: 10px"><a href="" style=" color: #006699">Privacy Policy</a></li>
                <li style="display: inline; padding-right: 10px"><a href="" style=" color: #006699">Press Releases</a></li>
                <li style="display: inline; padding-right: 10px"><a href="" style=" color: #006699">Site Map</a></li>
                <li style="display: inline;"><a href="" style=" color: #006699">Link Partners</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="footeBtrm" style="background: #0d7d9d; border-bottom: #006699 5px solid">
    <div class="container">
        <div class="row" style="height: 30px; line-height: 30px;">
            <ul style="list-style: none;  margin: 0; padding: 0">
                <li style="display: inline;color: #FFFFFF">Skanda Holidays &copy; 2015 - 2020. All rights reserved. Lisence No 	. Head office : </li>
            </ul>
        </div>
    </div>
</div>


<!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
<div class="scroll-top page-scroll visible-xs visble-sm">
    <a class="btn btn-primary" href="#page-top">
        <i class="fa fa-chevron-up"></i>
    </a>
</div>
<!-- End Footer -->



<script src="templates/t3_bs3_blank/js/sliderjs/jquery-1.js"></script>
<script src="templates/t3_bs3_blank/js/sliderjs/jquery_002.js"></script>
<script src="templates/t3_bs3_blank/js/sliderjs/bjqs-1.js"></script>
<script class="secret-source">
    jQuery(document).ready(function ($) {
        $('#banner-fade').bjqs({
            height: 278,
            width: 610,
            responsive: true
        });
    });

</script>
<script src="templates/t3_bs3_blank/js/sliderjs/customize.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="templates/t3_bs3_blank/js/bootstrap.min.js"></script>



