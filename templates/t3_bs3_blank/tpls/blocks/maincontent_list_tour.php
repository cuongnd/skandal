<?php
/**
 * @package   T3 Blank
 * @copyright Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license   GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
$images = $this->countModules('image_banner');
$list_tour = $this->countModules('list_tour');
$right_sidebar = $this->countModules('right_sidebar');
?>
<?php if($images || $list_tour ||$right_sidebar):?>
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
        <div class="row">
            <!--list tours-->
            <div class="col-md-9" style="width: 71.5%; padding-left: 10px; padding-right: 10px; float: left">

                <?php if ($list_tour) { ?>
                    <div class="header-content">
                        <jdoc:include type="modules" name="list_tour" style="T3Xhtml"/>
                    </div>
                <?php } ?>

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

<?php endif;?>
