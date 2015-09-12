<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_custom
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
// CUSTOM CSS

?>
<div class="row">
    <div class="col-md-12"
         style="border: 1px solid #cccccc; background: url('img/common/contact_person.png') right bottom no-repeat;">

        <form class="form-horizontal validaterequest" action="" method="post" name="requestform" enctype="multipart/form-data" onSubmit="return SutmitForm()">
            <div class="form-group" style="background: url('img/common/bg_1.png') 0 0 no-repeat; height: 77px;">
                <h5 style="color: #ffffff; padding: 0 5px;"><?php echo $title;?></h5>

                <div style="position: absolute; top: 55px; left: 155px;">
                    <ul style="float: right; margin: 0; padding: 0;">
                        <li><img src="img/common/icon_contact1_40x40.png" alt=""/> <img
                                src="img/common/icon_contact2_40x40.png" alt=""/> <img
                                src="img/common/icon_contact3_40x40.png" alt=""/></li>
                    </ul>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-12">
                    <p style="font-size: 14px; padding-top: 10px; font-weight: bold;"><?php echo $description;?></p>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-12">
                    <input id="name" class="form-control" style="width: 98%;" name="name" type="text" placeholder="Name"/>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-12">
                    <input id="number" class="form-control" style="width: 98%;" name="number" type="text" placeholder="Contact Number"/>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-12">
                    <input id="email" class="form-control" style="width: 98%;" name="email" type="text" placeholder="Email"/>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-12">
                    <label>I require a</label><br/>
                    <input type="radio" name="type" value="Package Tours"/><label>Package Tours</label><br/>
                    <input type="radio" name="type" value="Hotel Booking"/><label>Hotel Booking</label><br/>
                    <input type="radio" name="type" value="Flight Ticket"/><label>Flight Ticket</label></div>
            </div>
            <div class="form-group">
                <div class="col-lg-offset-2 col-lg-10">
                    <!--<button class="btn btn-info" type="submit"> Submit Request</button>-->
                    <input class="save btn btn-info" value="Submit Request" type="button" />
                </div>
            </div>
        </form>
    </div>
</div>