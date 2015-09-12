<?php
/**
 * @package   T3 Blank
 * @copyright Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license   GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
$my_search = $this->countModules('my_search');
$my_menu = $this->countModules('my_menu');
$my_logo = $this->countModules('my_logo');
?>

<!-- MAIN NAVIGATION -->
<?php if($my_search || $my_menu  ||$my_logo) :?>
    <div class="topbody_style">
        <div class="container">
                <!--seach--->
                <div class="col-md-3 mod_my_search">
                    <?php if ($this->countModules('my_search')) { ?>
                        <jdoc:include type="modules" name="my_search" style="T3Xhtml"/>
                    <?php } ?>
                </div>

                <!--submenu-->
                <div class="col-md-6">
                    <?php if ($this->countModules('my_menu')) { ?>
                        <div class="header-content">
                            <jdoc:include type="modules" name="my_menu" style="T3Xhtml"/>
                        </div>
                    <?php } ?>
                </div>

                <!--logo-->
                <div class="col-md-3">
                    <?php if ($this->countModules('my_logo')) { ?>
                        <div class="header-content">
                            <jdoc:include type="modules" name="my_logo" style="T3Xhtml"/>
                        </div>
                    <?php } ?>
                </div>
            </div>


    </div>
<?php endif;?>
<!-- //MAIN NAVIGATION -->
