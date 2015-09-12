<?php
/**
 * @package   T3 Blank
 * @copyright Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license   GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
$images = $this->countModules('image_banner');
$right_sidebar = $this->countModules('right_sidebar');

$skandal_pagetourdetails_slider = $this->countModules('skandal_pagetourdetails_slider');
$skandal_pagetourdetails_whattosee = $this->countModules('skandal_pagetourdetails_whattosee');
$skandal_pagetourdetails_infotourdetail = $this->countModules('skandal_pagetourdetails_infotourdetail');

?>
<?php if($images):?>
    <div class="container-fluid" style="background: #FFFFFF">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <?php if ($images) { ?>
                        <div class="header-content">
                            <jdoc:include type="modules" name="image_banner" style="T3Xhtml"/>
                        </div>
                    <?php } ?>

                </div>
            </div>
            <p style="height: 40px"></p>
        </div>
    </div>
<?php endif;?>
<div class="container-fluid" style="background: #FFFFFF">
    <!--Page tourdetails-->
    <div class="container" style="background: #F7F7F7;">

        <div class="row">
            <?php if($skandal_pagetourdetails_slider):?>
                <div class="col-md-8">
                    <jdoc:include type="modules" name="skandal_pagetourdetails_slider" style="T3Xhtml"/>
                </div>
            <?php endif;?>

            <?php if($skandal_pagetourdetails_whattosee):?>
                <div class="col-md-4">
                    <jdoc:include type="modules" name="skandal_pagetourdetails_whattosee" style="T3Xhtml"/>
                </div>
            <?php endif;?>
        </div>

        <div class="row">
            <?php if($skandal_pagetourdetails_infotourdetail):?>
                <div class="col-md-12"  style="padding-top:15px;">
                    <jdoc:include type="modules" name="skandal_pagetourdetails_infotourdetail" style="T3Xhtml"/>
                </div>
            <?php endif;?>
        </div>

    </div>
    <!--End page tourdetails-->
</div>
<div class="container-fluid" style="background: #FFFFFF">
    <div class="container">
        <div class="row">
            <!--list tours-->
            <div class="col-md-9" style="width: 71.5%; padding-left: 10px; padding-right: 10px; float: left">

                <div class="header-content">
                    <jdoc:include type="component" />
                </div>

            </div>
            <!-- slidebar-->
            <div class="col-md-3" style="width: 28.5%; padding-left: 10px; padding-right: 10px; float: left">

                <?php if ($right_sidebar) { ?>
                    <div class="header-content">
                        <jdoc:include type="modules" name="right_sidebar" style="T3Xhtml"/>
                    </div>
                <?php } ?>

            </div>
        </div>
    </div>
</div>

