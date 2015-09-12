<?php
/**
 * @package   T3 Blank
 * @copyright Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license   GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
$pagehome_search_right = $this->countModules('pagehome_search_right');
$pagehome_search_left = $this->countModules('pagehome_search_left');

?>
<div style="background: white;">
<div class="container mod_pagehome_search">
    <?php if($pagehome_search_left) :?>
        <div class="col-md-3 mod_pagehome_search_left">
            <jdoc:include type="modules" name="pagehome_search_left" style="T3Xhtml"/>
        </div>
    <?php endif;?>

    <?php if($pagehome_search_right) :?>
        <div class="col-md-7 col-md-offset-2 mod_pagehome_search_right">
            <jdoc:include type="modules" name="pagehome_search_right" style="T3Xhtml"/>
        </div>
    <?php endif;?>
</div>
</div>
