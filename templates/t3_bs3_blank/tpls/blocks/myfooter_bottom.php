<?php
/**
 * @package   T3 Blank
 * @copyright Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license   GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
?>


<div class="footeBtrm" style="background: #FFFFFF">
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-md-offset-3" >
                <?php if ($this->countModules('myfooter_bottom1')) { ?>
                    <div class="header-content" id="navbottom">
                        <jdoc:include type="modules" name="myfooter_bottom1" style="T3Xhtml"/>
                    </div>
                <?php } ?>

            </div>
        </div>
    </div>
</div>

<div class="footeBtrm" style="background: #0d7d9d; border-bottom: #006699 5px solid">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            <?php if ($this->countModules('myfooter_bottom2')) { ?>
                <div class="header-content" id="company-information">
                    <jdoc:include type="modules" name="myfooter_bottom2" style="T3Xhtml"/>
                </div>
            <?php } ?>

        </div>
        </div>
    </div>
</div>

