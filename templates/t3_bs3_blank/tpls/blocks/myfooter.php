<?php
/**
 * @package   T3 Blank
 * @copyright Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license   GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
?>

<footer>
<div class="container">

        <div class="row">
            <div class="col-md-1"></div>
            <!--list tours-->
            <div class="col-md-2" style="margin-left: 50px; margin-right: 30px">

                <?php if ($this->countModules('myfooter1')) { ?>
                    <div class="header-content">
                        <jdoc:include type="modules" name="myfooter1" style="T3Xhtml"/>
                    </div>
                <?php } ?>

            </div>
            <div class="col-md-2" style="margin-right: -20px">

                <?php if ($this->countModules('myfooter2')) { ?>
                    <div class="header-content">
                        <jdoc:include type="modules" name="myfooter2" style="T3Xhtml"/>
                    </div>
                <?php } ?>

            </div>
            <div class="col-md-2">

                <?php if ($this->countModules('myfooter3')) { ?>
                    <div class="header-content">
                        <jdoc:include type="modules" name="myfooter3" style="T3Xhtml"/>
                    </div>
                <?php } ?>

            </div>
            <div class="col-md-2 ft-right">

                <?php if ($this->countModules('myfooter4')) { ?>
                    <div class="header-content">
                        <jdoc:include type="modules" name="myfooter4" style="T3Xhtml"/>
                    </div>
                <?php } ?>

            </div>

          </div>

        <div class="row" style="margin-top: 20px">
            <div class="col-md-12">

                <?php if ($this->countModules('myfooter_social')) { ?>
                    <div class="header-content">
                        <jdoc:include type="modules" name="myfooter_social" style="T3Xhtml"/>
                    </div>
                <?php } ?>

            </div>
        </div>

</div>
</footer>
