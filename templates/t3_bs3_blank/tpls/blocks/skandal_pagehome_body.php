<?php
/**
 * @package   T3 Blank
 * @copyright Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license   GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
$skandal_pagehome_body_left = $this->countModules('skandal_pagehome_body_left');
$skandal_pagehome_body_right = $this->countModules('skandal_pagehome_body_right');
$my_skandal_desc = $this->countModules('my_skandal_desc');
$skandal_list_country_holiday = $this->countModules('skandal_list_country_holiday');
$skandal_mini_slider = $this->countModules('skandal_mini_slider');
$skandal_pagehome_body_right = $this->countModules('skandal_pagehome_body_right');
$skandal_pagehome_slider_bottom = $this->countModules('skandal_pagehome_slider_bottom');
$skandal_pagehome_second_bottom = $this->countModules('skandal_pagehome_second_bottom');

$skandal_pagetourdetails_moreinfotourdetail = $this->countModules('skandal_pagetourdetails_moreinfotourdetail');

?>
<!--Page home-->
<?php if($my_skandal_desc):?>
<div class="wrapper">
    <div class="my_skandal_desc" style="padding-top:65px    ">
        <?php if ($my_skandal_desc) { ?>
            <jdoc:include type="modules" name="my_skandal_desc" style="T3Xhtml"/>
        <?php } ?>
    </div>
</div>
<?php endif;?>
<?php if ($skandal_list_country_holiday || $skandal_mini_slider) { ?>
    <div class="big-wrapper">
        <div class="container mod_skandal_list_country_holiday">
            <div class="col-md-6">
                <?php if ($skandal_list_country_holiday) { ?>
                    <jdoc:include type="modules" name="skandal_list_country_holiday" style="T3Xhtml"/>
                <?php } ?>
            </div>
            <div class="col-md-6">

                <?php if ($skandal_mini_slider) { ?>
                    <jdoc:include type="modules" name="skandal_mini_slider" style="T3Xhtml"/>
                <?php } ?>
            </div>

        </div>
    </div>
<?php } ?>

<?php if ($skandal_pagehome_body_left || $skandal_pagehome_body_right) { ?>
    <div class="big-wrapper">
        <div class="container skandal_pagehome_body">
            <div class="row">
                <?php if ($skandal_pagehome_body_left) { ?>
                    <div class="col-md-6 skandal_pagehome_body_left"
                         style="padding-left:0px !important;padding-right:7px !important;">
                        <jdoc:include type="modules" name="skandal_pagehome_body_left" style="T3Xhtml"/>
                    </div>
                <?php } ?>

                <?php if ($skandal_pagehome_body_right) { ?>
                    <div class="col-md-6 skandal_pagehome_body_right">
                        <jdoc:include type="modules" name="skandal_pagehome_body_right" style="T3Xhtml"/>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
<?php } ?>

<?php if ($skandal_pagehome_slider_bottom) { ?>
    <div class="big-wrapper">
        <div class="container skandal_pagehome_slider_bottom">
            <div class="row">
                <jdoc:include type="modules" name="skandal_pagehome_slider_bottom" style="T3Xhtml"/>
            </div>
        </div>

    </div>
<?php } ?>

<?php if ($skandal_pagehome_second_bottom) { ?>
    <div class="big-wrapper">
        <jdoc:include type="modules" name="skandal_pagehome_second_bottom" style="T3Xhtml"/>
    </div>
<?php } ?>
<!--End page home-->






