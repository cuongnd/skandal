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
$document = JFactory::getDocument();
$document->addStyleSheet('components/com_tour/assets/css/domtab.css');

$document->addScript(JURI::root() . 'components/com_tour/assets/js/domtab.js');
?>

    <?php
    $i = 0;
    foreach ($this->listtour as $list){
        ?>

        <div class="row" style="border: 1px solid #cccccc; margin-right: 10px; background: #f9f9f9;margin-bottom: 20px">
            <div class="col-md-4">
                <div class="domtab" style="height: 196px; width:270px;">
                    <ul class="domtabs" style="width:270px; position: absolute !important; top: 175px; left: 160px">
                        <li><a href="#t<?php echo $i+1;?>" style="font-size: 12px; padding:2px 1px; width: 70px; min-height:18px;"><i
                                    class="fa fa-camera-retro"></i> PHOTOS</a></li>
                        <li><a href="#t<?php echo $i+2;?>" style="font-size: 12px; padding:2px 1px; width:55px; min-height:18px;"><i
                                    class="fa fa-map-marker"></i> MAP</a></li>
                    </ul>
                    <div style="padding:0; margin:-5px -8px;">
                        <h6><a name="t<?php echo $i+1;?>" id="t<?php echo $i+1;?>"></a></h6>
                        <img src="<?php echo $list->path;?>" width="100%" height="190">
                    </div>
                    <div style="padding:0; margin:-5px 0 0 -8px; width:287px;">
                        <h6><a name="t<?php echo $i+2;?>" id="t<?php echo $i+2;?>"></a></h6>
                        <img src="img/portfolio/hanoimap.jpg" width="100%" height="190">
                    </div>


                </div>
            </div>
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-6">
                        <h5 style="color: #006699"><?php echo $list->name;?> <span style="font-size: 11px">(<?php echo $list->code;?>)</span></h5>
                        <ul style="float: left">
                            <li style=" width: 110px; float: left"><h4 style="margin: 0; padding: 0; color: #8d8a8a">$<?php echo $list->tour_price;?></h4>
                            </li>
                            <li style="width: 50px;float: left; border-top: 1px solid #cccccc; border-bottom: 1px solid #cccccc; color: #006699; font-size: 18px">
                                <span style="padding-left: 12px; font-weight: bold"><?php echo $list->length;?></span> <br><span
                                    style="padding-left: 3px; font-weight: bold">DAYS</span></li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <h6>
                            <small style="color:#990000; font-size: 11px; padding-left:90px"><?php echo $list->country;?></small>
                        </h6>
                        <ul style="padding-top:10px">
                            <li><span style="font-size:14px; font-weight: bold">Type</span><span
                                    style="padding-left: 120px; font-size: 14px; color: #006699; font-weight: bold"><?php echo $list->type;?></span>
                            </li>
                            <li><span style="font-size:14px; font-weight: bold">Physical Grade</span><span
                                    style="padding-left: 57px; font-weight: bold; color: #006699;"><?php echo $list->grade;?></span></li>
                        </ul>
                    </div>
                    <div class="col-md-12">
                        <ul style="margin:0; padding:0; border-top: 2px solid #e0e3e7;"><h6
                                style="margin: 0; padding: 3px 0; color: #006699">HIGHLIGHTS</h6>
                            <li><p style="font-size: 14px; text-align: justify; line-height: 17px"><?php echo $list->highlight;?></p>
                            </li>
                            <li style=" float: right">
                                <a style="float: right; margin: 0 10px 0 0;" href="<?php echo JUri::root().'index.php?option=com_tour&view=tourdetail&id='.$list->id.'&Itemid=143' ?>">
                                    <input type="button" class="btn btn-danger btn-xs" value="VIEW DETAILS" style="font-weight: bold; font-size: 12px;"/>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <?php  $i=$i+2;}?>

<div class="center-button">
    <a href="<?php echo JUri::base(); ?>index.php?option=com_tour&task=sendmail.sendinquiry ">
        <input class="btn btn-primary" type="submit"
               value="Send inquiry" name="btnSubmit" id="submitpayment" />
    </a>
</div>
