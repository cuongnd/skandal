<?php
// No direct access
defined('_JEXEC') or die;
$document = JFactory::getDocument();
$document->addStyleSheet(JURI::root() . 'modules/mod_skandal_slider_bottom/asset/css/style.css');

?>
<div class="col-md-12" style="background: #ffffff;">
    <h4 style="text-align: center"><?php echo $params->get('title_slider_botttom', ''); ?></h4>

    <div class="topDestinationScrollCntr">
        <div class="jcarousel-skin-tango">
            <div class="jcarousel-container jcarousel-container-horizontal"
                 style="position: relative; display: block;">
                <div class="jcarousel-clip jcarousel-clip-horizontal" style="position: relative;">
                    <ul id="mycarousel" class="jcarousel-list jcarousel-list-horizontal">
                        <?php foreach ($info as $item): ?>
                            <li class="jcarousel-item jcarousel-item-horizontal" jcarouselindex="1">
                                <img src="<?php echo $item->path; ?>" alt="top destinations">
                                <a href="<?php echo $item->link_detail; ?>" class="featerMore">More details</a>
                                <span><?php echo $item->title; ?>
                                    <br><h5 class="small"><?php echo $item->price; ?></h5></span>
                            </li>

                        <?php endforeach; ?>
                    </ul>

                </div>


            </div>

        </div>

    </div>


</div>

<script src="templates/t3_bs3_blank/js/sliderjs/jquery-1.js"></script>
<script src="templates/t3_bs3_blank/js/sliderjs/jquery_002.js"></script>
<script src="templates/t3_bs3_blank/js/sliderjs/bjqs-1.js"></script>
<script src="templates/t3_bs3_blank/js/sliderjs/customize.js"></script>

