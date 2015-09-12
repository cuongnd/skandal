<?php

// No direct access
defined('_JEXEC') or die; ?>

<div style="margin:70px 0 0 -10px;">
            <ul class="nav nav-tabs tourdetails responsive" id="myTab">
                <li class="test-class active"><a class="deco-none misc-class" href="#overview">OVERVIEW</a></li>
                <li class="test-class"><a href="#itinerary">ITINERARY</a></li>
                <li><a class="deco-none" href="#price">PRICE & DATE</a></li>
                <li><a class="deco-none" href="#document">DOCUMENTS</a></li>
            </ul>
            <div class="tab-content responsive">
                <div class="tab-pane active" id="overview">
                    <div class="headerbox1">
                        <div class="col-md-8">
                            <h5 style="text-align: center"><?php echo $this->data->name; ?></h5>
                            <h6 style="text-align: center"><?php echo $this->data->country; ?></h6>
                            <i class="fa fa-envelope fa-2x" style="color: #e49016"></i>
                            <h6 style="display: inline; color: #e49016"> E-MAIL THIS TOUR</h6>
                                    <span style="margin-left: 200px"><img src="img/common/icon_book.png">
                                        <h6 style="display: inline; color: #e49016"> BOOK NOW</h6></span>

                        </div>
                        <div class="col-md-4 borderline1px" style="margin-top: 20px">
                            <img src="img/common/icon_request_100x99.png">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="row" style="padding-top: 30px">
                            <?php echo $this->data->brief_itinerary; ?>

                        </div>
                    </div>
                    <div class="col-md-12" style="border-bottom: 2px solid #cccccc; width: 100%; margin-left:1px; ">&nbsp;</div>
                    <div class="col-md-12" >
                        <div class="row" style=" margin:0; padding:20px 0 30px 0;">
                            <div class="col-md-8" style="margin: 0 0 0 -15px; padding: 0">
                                <ul style="padding: 0; margin: 0; width: 102%">
                                    <h6 style="background: #f1f1f1; height: 30px; line-height: 30px; padding-left: 3px; color: #990033">WHAT IS INCLUDED IN THIS  TOUR ?</h6>
                                    <?php echo $this->data->trip_note; ?>
                                </ul>
                            </div>
                            <div class="col-md-4" style="margin-top: 10px; padding: 0 0 0 40px">
                                <ul style="background:#f1f1f1; padding: 5px 3px; height: 105px; width:110%">
                                    <li><span style=" font-weight: bold; color: #007799; font-size: 14px">PRICE FROM</span></li>
                                    <li><span style="font-size: 15px; font-weight: bold; padding-left: 120px">US$</span><span style="color: #cc0000; padding-left:5px; font-size:35px; font-weight: bold"><?php echo $this->dailyprice;?></span></li>
                                    <li style="float: right; padding-right: 20px; padding-top: 10px"><button type="button" class="btn btn-info btn-xs"> Book Now <i class="fa fa-play"></i> </button></li>
                                </ul>
                                <ul style="text-align: center">
                                    <li><img src="img/common/guatantee.jpg"></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="itinerary">
                    <div class="headerbox1">
                        <div class="col-md-8">
                            <h5 style="text-align: center"><?php echo $this->data->name; ?></h5>
                            <h6 style="text-align: center"><?php echo $this->data->country; ?></h6>
                            <i class="fa fa-envelope fa-2x" style="color: #e49016"></i>
                            <h6 style="display: inline; color: #e49016"> E-MAIL THIS TOUR</h6>
                                    <span style="margin-left: 200px"><img src="img/common/icon_book.png">
                                        <h6 style="display: inline; color: #e49016"> BOOK NOW</h6></span>

                        </div>
                        <div class="col-md-4 borderline1px" style="margin-top: 20px">
                            <img src="img/common/icon_request_100x99.png">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <?php echo $this->data->long_itinerary; ?>
                    </div>
                    <div class="col-md-12" style="border-bottom: 2px solid #cccccc; width: 100%; margin-left:1px; ">&nbsp;</div>
                    <div class="col-md-12" >
                        <div class="row" style=" margin:0; padding:20px 0 30px 0;">
                            <div class="col-md-8" style="margin: 0 0 0 -15px; padding: 0">
                                <ul style="padding: 0; margin: 0; width: 102%">
                                    <h6 style="background: #f1f1f1; height: 30px; line-height: 30px; padding-left: 3px; color: #990033">WHAT IS INCLUDED IN THIS  TOUR ?</h6>
                                    <?php echo $this->data->trip_note; ?>
                                </ul>
                            </div>
                            <div class="col-md-4" style="margin-top: 10px; padding: 0 0 0 40px">
                                <ul style="background:#f1f1f1; padding: 5px 3px; height: 105px; width:110%">
                                    <li><span style=" font-weight: bold; color: #007799; font-size: 14px">PRICE FROM</span></li>
                                    <li><span style="font-size: 15px; font-weight: bold; padding-left: 120px">US$</span><span style="color: #cc0000; padding-left:5px; font-size:35px; font-weight: bold"><?php echo $this->dailyprice;?></span></li>
                                    <li style="float: right; padding-right: 20px; padding-top: 10px"><button type="button" class="btn btn-info btn-xs"> Book Now <i class="fa fa-play"></i> </button></li>
                                </ul>
                                <ul style="text-align: center">
                                    <li><img src="img/common/guatantee.jpg"></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="price">
                    <div class="headerbox1">
                        <div class="col-md-8">
                            <h5 style="text-align: center"><?php echo $this->data->name; ?></h5>
                            <h6 style="text-align: center"><?php echo $this->data->country; ?></h6>
                            <i class="fa fa-envelope fa-2x" style="color: #e49016"></i>
                            <h6 style="display: inline; color: #e49016"> E-MAIL THIS TOUR</h6>
                                    <span style="margin-left: 200px"><img src="img/common/icon_book.png">
                                        <h6 style="display: inline; color: #e49016"> BOOK NOW</h6></span>

                        </div>
                        <div class="col-md-4 borderline1px" style="margin-top: 20px">
                            <img src="img/common/icon_request_100x99.png">
                        </div>
                    </div>

                    <div class="col-md-12" style="margin-top: 30px; margin-left: -10px">
                        <table class="table table-striped">
                            <tr style="color:white;background:#95A5A5;">
                                <td>DEPARTURE CODE</td>
                                <td>START DATE</td>
                                <td>FINISH DATE</td>
                                <td>PRICE FROM</td>
                                <td>PRIVATE ROOM</td>
                                <td>STATUS</td>
                                <td>BOOK</td>
                            </tr>
                            <?php foreach($this->dataprice as $item):?>
                                <tr>
                                    <td><?php echo $item->departure_code;?></td>
                                    <td><?php echo JHtml::_('date', $item->datefrom,'d F, Y') ?></td>
                                    <td><?php echo JHtml::_('date', $item->dateto,'d F, Y') ?></td>
                                    <td><?php echo $item->price;?></td>
                                    <td><?php echo $item->singleprice;?></td>
                                    <td><?php echo $item->state;?></td>

                                    <td><button class="btn btn-default" type="submit">Go <i class="glyphicon glyphicon-arrow-right"></i></button></td>
                                </tr>
                            <?php endforeach;?>
                        </table>
                    </div>
                    <div class="col-md-12" style="border-bottom: 2px solid #cccccc; width: 100%; margin-left:1px; ">&nbsp;</div>
                    <div class="col-md-12" >
                        <div class="row" style=" margin:0; padding:20px 0 30px 0;">
                            <div class="col-md-8" style="margin: 0 0 0 -15px; padding: 0">
                                <ul style="padding: 0; margin: 0; width: 102%">
                                    <h6 style="background: #f1f1f1; height: 30px; line-height: 30px; padding-left: 3px; color: #990033">WHAT IS INCLUDED IN THIS  TOUR ?</h6>
                                    <?php echo $this->data->trip_note; ?>
                                </ul>
                            </div>
                            <div class="col-md-4" style="margin-top: 10px; padding: 0 0 0 40px">
                                <ul style="background:#f1f1f1; padding: 5px 3px; height: 105px; width:110%">
                                    <li><span style=" font-weight: bold; color: #007799; font-size: 14px">PRICE FROM</span></li>
                                    <li><span style="font-size: 15px; font-weight: bold; padding-left: 120px">US$</span><span style="color: #cc0000; padding-left:5px; font-size:35px; font-weight: bold"><?php echo $this->dailyprice;?></span></li>
                                    <li style="float: right; padding-right: 20px; padding-top: 10px"><button type="button" class="btn btn-info btn-xs"> Book Now <i class="fa fa-play"></i> </button></li>
                                </ul>
                                <ul style="text-align: center">
                                    <li><img src="img/common/guatantee.jpg"></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="tab-pane" id="document">
                    <div class="headerbox1">
                        <div class="col-md-8">
                            <h5 style="text-align: center">PASSION OF  ASIA</h5>
                            <h6 style="text-align: center">Vietnam - Laos - Cambodia - Thailand</h6>
                            <i class="fa fa-envelope fa-2x" style="color: #e49016"></i>
                            <h6 style="display: inline; color: #e49016"> E-MAIL THIS TOUR</h6>
                                        <span style="margin-left: 200px"><img src="img/common/icon_book.png">
                                            <h6 style="display: inline; color: #e49016"> BOOK NOW</h6></span>

                        </div>
                        <div class="col-md-4 borderline1px" style="margin-top: 20px">
                            <img src="img/common/icon_request_100x99.png">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="row" style="padding-top: 30px; margin-right: -30px">
                            <p style="text-align: justify; font-size: 15px; line-height: 17px; font-weight: bold">The trip document tells you everything you need to know about your holiday.  We have prepared specific notes for special departures, which helps to make the perfect choice of  the trip and departure dates for your dream holiday.  You can download this trip information as a PDF.  You should make sure that you have in hand a final copy of your trip document  in together with the destination userful information a couple of days prior to your travel date.</p>
                            <div class="col-md-8"><img src="img/common/qa_300x270.png"></div>
                            <div class="col-md-4">
                                <button type="button" class="btn btn-group-justified"><h4 style="#006699">DOWNLOAD DOCUMENT</h4>
                                    <h2 style="color: #cc0000">CLICK</h2></button>
                                <div style="margin-top: 20px">
                                    <div style="height: 30px; background: #f6f6f6; line-height: 30px; color: #a80432; font-weight: bold"><img src="img/common/icon_book_20x20.png"> Recommended Readings</div>
                                    <div>
                                        <ul>
                                            <li style="padding-left: 10px; color: #006699">1. Story of Vietnam</li>
                                            <li style="padding-left: 10px; color: #006699">2. Learn Thai language</li>
                                            <li style="padding-left: 10px; color: #006699">3. Angkor History</li>
                                            <li style="padding-left: 10px; color: #006699">4. Laos Culture</li>
                                        </ul>
                                    </div>
                                </div>
                                <div>
                                    <div style="height: 30px; background: #f6f6f6; line-height: 30px; color: #a80432; font-weight: bold"><a id="show-example" onclick="false" style="color:#a80432; text-decoration: none"><img src="img/common/icon_i_20x20.png"> Thailand  Travel Guide</a></div>
                                    <div id="example" style="display: none">
                                        <ul>
                                            <li style="padding-left: 10px; color: #006699">1. Story of Vietnam</li>
                                            <li style="padding-left: 10px; color: #006699">2. Learn Thai language</li>
                                            <li style="padding-left: 10px; color: #006699">3. Angkor History</li>
                                            <li style="padding-left: 10px; color: #006699">4. Laos Culture</li>
                                        </ul>
                                    </div>
                                </div>
                                <div>
                                    <div style="height: 30px; background: #f6f6f6; line-height: 30px; color: #a80432; font-weight: bold"><a id="show-example1" onclick="false" style="color:#a80432; text-decoration: none"><img src="img/common/icon_i_20x20.png"> Laos Travel Guide</a></div>
                                    <div id="example1" style="display: none">
                                        <ul>
                                            <li style="padding-left: 10px; color: #006699">1. Story of Vietnam</li>
                                            <li style="padding-left: 10px; color: #006699">2. Learn Thai language</li>
                                            <li style="padding-left: 10px; color: #006699">3. Angkor History</li>
                                            <li style="padding-left: 10px; color: #006699">4. Laos Culture</li>
                                        </ul>
                                    </div>
                                </div>
                                <div>
                                    <div style="height: 30px; background: #f6f6f6; line-height: 30px; color: #a80432; font-weight: bold"><a id="show-example2" onclick="false" style="color:#a80432; text-decoration: none"><img src="img/common/icon_i_20x20.png"> Cambodia Travel Guide</a></div>
                                    <div id="example2" style="display: none">
                                        <ul>
                                            <li style="padding-left: 10px; color: #006699">1. Story of Vietnam</li>
                                            <li style="padding-left: 10px; color: #006699">2. Learn Thai language</li>
                                            <li style="padding-left: 10px; color: #006699">3. Angkor History</li>
                                            <li style="padding-left: 10px; color: #006699">4. Laos Culture</li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="row">
                            <h6 style="height: 40px; background:#f1f1f1; padding: 15px 10px">FREQUENT ASK QUESTIONS</h6>
                            <div>
                                <div style="height: 30px; border: 1px solid #dddddd;line-height: 30px; color: #006699; font-weight: bold; padding: 0px 10px"><a id="show-qa1" onclick="false" style="color:#006699; text-decoration: none">Can i have an appointement call to an expert in person?</a></div>
                                <div id="qa1" style="display: none">
                                    <ul style="background: #f9f9f9;">
                                        <li style="padding:10px 0 5px 10px; color: #000000">
                                            Yes! We welcome the opportunity to speak to our experts . To have a call appointment, you just need to fill up the enquiry form  with  the subject you are planning to discuss. Our expert will call you in soonest time.
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div>
                                <div style="height: 30px; border: 1px solid #dddddd;line-height: 30px; font-weight: bold;  padding: 0px 10px; margin-top: 20px"><a id="show-qa2" onclick="false" style="color:#006699; text-decoration: none">What is the destination expert ?</a></div>
                                <div id="qa2" style="display: none">
                                    <ul style="background: #f9f9f9;">
                                        <li style="padding:10px 0 5px 10px; color: #000000">
                                            Our expert provide a unique holiday-planning service. Each expert is focused on a specific destination so you get the benefit of their knowledge and experience. Our expert travel extensively to their destinations - they speak from personal experience. You will have contact with the same specialist throughout the planning process.
                                            Their enthusiasm for the destination will mean they can tailor your trip to your exact preferences. They can ensure you make the most of your time and budget during your trip.

                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div>
                                <div style="height: 30px; border: 1px solid #dddddd;line-height: 30px; font-weight: bold;  padding: 0px 10px; margin-top: 20px"><a id="show-qa3" onclick="false" style="color:#006699; text-decoration: none">Do i have to travel on certain dates ?</a></div>
                                <div id="qa3" style="display: none">
                                    <ul style="background: #f9f9f9;">
                                        <li style="padding:10px 0 5px 10px; color: #000000">
                                            Because all of our trips are tailor-made, you can depart on any date you wish (depending on flights) and for as long as you wish. The itineraries provided on our website are suggestions only and you can change any aspect to suit your tastes and budget. Your destination specialist will be able to provide advice and answer your questions.
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div>
                                <div style="height: 30px; border: 1px solid #dddddd;line-height: 30px; font-weight: bold; padding: 0px 10px; margin-top: 20px"><a id="show-qa4" onclick="false" style="color:#006699; text-decoration: none">Will i be travelling in a part of group ?</a></div>
                                <div id="qa4" style="display: none">
                                    <ul style="background: #f9f9f9;">
                                        <li style="padding:10px 0 5px 10px; color: #000000">
                                            No, our tailor-made trips are arranged on an individual basis. This means you are not tied to the wishes of a group and can arrange your itinerary at your own pace. If you are interested in a Group Tour, we do offer a range of departures in small groups of up to 16 people.

                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div>
                                <div style="height: 30px; border: 1px solid #dddddd;line-height: 30px; color: #a80432; font-weight: bold;  padding: 0px 10px; margin-top: 20px"><a id="show-qa5" onclick="false" style="color:#006699; text-decoration: none">Isn’t it easier and cheaper to arrange the holiday myself?
                                    </a></div>
                                <div id="qa5" style="display: none">
                                    <ul style="background: #f9f9f9;">
                                        <li style="padding:10px 0 5px 10px; color: #000000">
                                            Many of our clients like the independence that tailor-made travel brings, without the 'regimentation' of organised group tours, but with the reassurance of our professional planning and back-up services. For example, if the flight that we've booked is delayed, it's down to us to re-arrange your travel in the country.
                                            When things go wrong, an independent traveller may find themselves putting in a good deal of time re-organising their plans, when they should be enjoying the trip. We also regularly hear from travellers claiming that they can independently organise the same trip for a lower price. Almost invariably it is not 'like for like' and they may find they incur much more expense during their travels.
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                        <h5 style="border-left: 10px solid #006688; padding-left: 10px;margin-left:-15px; margin-top: 20px;">Featured Vietnam Tours</h5>
                        <div class="row" style="margin-bottom: 40px">
                            <div class="col-md-4">
                                <div style=" padding:0px; margin: 0 0 0 -15px; width: 105%">
                                    <ul style="background: #ececec; width:100%; height: 287px;">
                                        <li><img src="img/common/country_tour1_270x107.jpg" width="100%"></li>
                                        <li style="height:27px;"><h6 style="padding: 5px 5px; margin: 0; color: #990000">SAPA TREKKING DAY</h6></li>
                                        <li style="clear:both">
                                            <p style="font-size:13px;font-weight:normal; padding: 0 5px; text-align: justify; line-height: 15px">
                                                The rice terraces set amid the swirling clouds around the Vietnamese hill station of Sapa are truly eye watering.The cascading green steps wind down the mountain slopes from the cloud line to the valley floor. Their verdant contours smoothly flow along the Muong Hoa Valley into the distance... </p>
                                        </li>
                                        <li style="height: 20px; line-height: 20px; float: right; padding-right: 10px"><button type="button" class="btn btn-info btn-xs">Read more</button></span>
                                        </li>
                                    </ul>

                                </div>
                            </div>
                            <div class="col-md-4">
                                <div style=" padding:0px; margin: 0 0 0 -7px; width: 105%">
                                    <ul style="background: #ececec; width: 100%; height: 287px;">
                                        <li><img src="img/common/country_tour2_270x107.jpg" width="100%"></li>
                                        <li style="height:27px;"><h6 style="padding: 5px 5px; margin: 0; color: #990000">SAPA TREKKING DAY</h6></li>
                                        <li style="clear:both">
                                            <p style="font-size:13px;font-weight:normal; padding: 0 5px; text-align: justify; line-height: 15px">
                                                The rice terraces set amid the swirling clouds around the Vietnamese hill station of Sapa are truly eye watering.The cascading green steps wind down the mountain slopes from the cloud line to the valley floor. Their verdant contours smoothly flow along the Muong Hoa Valley into the distance... </p>
                                        </li>
                                        <li style="height: 20px; line-height: 20px; float: right; padding-right: 10px"><button type="button" class="btn btn-info btn-xs">Read more</button></span>
                                        </li>
                                    </ul>

                                </div>
                            </div>
                            <div class="col-md-4">
                                <div style=" padding:0px; margin: 0 0 0 0; width: 105%">
                                    <ul style="background: #ececec; width: 100%; height: 288px;">
                                        <li><img src="img/common/country_tour1_270x107.jpg" width="100%"></li>
                                        <li style="height:27px;"><h6 style="padding: 5px 5px; margin: 0; color: #990000">SAPA TREKKING DAY</h6></li>
                                        <li style="clear:both">
                                            <p style="font-size:13px;font-weight:normal; padding: 0 5px; text-align: justify; line-height: 15px">
                                                The rice terraces set amid the swirling clouds around the Vietnamese hill station of Sapa are truly eye watering.The cascading green steps wind down the mountain slopes from the cloud line to the valley floor. Their verdant contours smoothly flow along the Muong Hoa Valley into the distance... </p>
                                        </li>
                                        <li style="height: 20px; line-height: 20px; float: right; padding-right: 10px"><button type="button" class="btn btn-info btn-xs">Read more</button></span>
                                        </li>
                                    </ul>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>

<script type="text/javascript">
    $( '#myTab a' ).click( function ( e ) {
        e.preventDefault();
        $( this ).tab( 'show' );
    } );

    $( '#moreTabs a' ).click( function ( e ) {
        e.preventDefault();
        $( this ).tab( 'show' );
    } );

    ( function( $ ) {
        // Test for making sure event are maintained
        $( '.js-alert-test' ).click( function () {
            alert( 'Button Clicked: Event was maintained' );
        } );
        fakewaffle.responsiveTabs( [ 'xs', 'sm' ] );
    } )( jQuery );

</script>

<script>
    (function ($) {
        $(document).ready(function() {
            $("#show-example").click(function () {
                if ($('#example').is(":visible")) {
                    $(this).html($(this).html().replace(/Hide/, 'Show'));
                } else {
                    $(this).html($(this).html().replace(/Show/, 'Hide'));
                }
                // Do it afterwards as the operation is async
                $("#example").slideToggle("slow");
            });

            $("#show-example1").click(function () {
                if ($('#example1').is(":visible")) {
                    $(this).html($(this).html().replace(/Hide/, 'Show'));
                } else {
                    $(this).html($(this).html().replace(/Show/, 'Hide'));
                }
                // Do it afterwards as the operation is async
                $("#example1").slideToggle("slow");
            });

            $("#show-example2").click(function () {
                if ($('#example2').is(":visible")) {
                    $(this).html($(this).html().replace(/Hide/, 'Show'));
                } else {
                    $(this).html($(this).html().replace(/Show/, 'Hide'));
                }
                // Do it afterwards as the operation is async
                $("#example2").slideToggle("slow");
            });

            $("#show-qa1").click(function () {
                if ($('#qa1').is(":visible")) {
                    $(this).html($(this).html().replace(/Hide/, 'Show'));
                } else {
                    $(this).html($(this).html().replace(/Show/, 'Hide'));
                }
                // Do it afterwards as the operation is async
                $("#qa1").slideToggle("slow");
            });
            $("#show-qa2").click(function () {
                if ($('#qa2').is(":visible")) {
                    $(this).html($(this).html().replace(/Hide/, 'Show'));
                } else {
                    $(this).html($(this).html().replace(/Show/, 'Hide'));
                }
                // Do it afterwards as the operation is async
                $("#qa2").slideToggle("slow");
            });

            $("#show-qa3").click(function () {
                if ($('#qa3').is(":visible")) {
                    $(this).html($(this).html().replace(/Hide/, 'Show'));
                } else {
                    $(this).html($(this).html().replace(/Show/, 'Hide'));
                }
                // Do it afterwards as the operation is async
                $("#qa3").slideToggle("slow");
            });

            $("#show-qa4").click(function () {
                if ($('#qa4').is(":visible")) {
                    $(this).html($(this).html().replace(/Hide/, 'Show'));
                } else {
                    $(this).html($(this).html().replace(/Show/, 'Hide'));
                }
                // Do it afterwards as the operation is async
                $("#qa4").slideToggle("slow");
            });

            $("#show-qa5").click(function () {
                if ($('#qa5').is(":visible")) {
                    $(this).html($(this).html().replace(/Hide/, 'Show'));
                } else {
                    $(this).html($(this).html().replace(/Show/, 'Hide'));
                }
                // Do it afterwards as the operation is async
                $("#qa5").slideToggle("slow");
            });

            $("#show-qa6").click(function () {
                if ($('#qa6').is(":visible")) {
                    $(this).html($(this).html().replace(/Hide/, 'Show'));
                } else {
                    $(this).html($(this).html().replace(/Show/, 'Hide'));
                }
                // Do it afterwards as the operation is async
                $("#qa6").slideToggle("slow");
            });



        });
    })(jQuery);
</script>
