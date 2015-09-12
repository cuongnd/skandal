<?php

/**
 * @package 	Bookpro
 * @author 		Ngo Van Quan
 * @link 		http://joombooking.com
 * @copyright 	Copyright (C) 2011 - 2012 Ngo Van Quan
 * @license 	GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 * @version 	$Id: view.html.php 26 2012-07-08 16:07:54Z quannv $
 **/

defined('_JEXEC') or die;
JHtml::_('behavior.formvalidation');
JHtml::_('formbehavior.chosen', 'select');
?>
<form action="<?php echo JRoute::_('index.php?option=com_tour&view=gallery&layout=edit&id=' . (int) $this->item->id); ?>" method="post" id="adminForm" name="adminForm" class="form-validate">

    <div class="row-fluid">
        <div class="span10 form-horizontal">
            <fieldset>
                <h3>Tour: <?php echo $this->tour->name; ?></h3>

                <div class="control-group">
					<div class="control-label"><?php echo $this->form->getLabel('title'); ?></div>
					<div class="controls"><?php echo $this->form->getInput('title'); ?></div>
				</div>

				<div class="control-group">
					<div class="control-label"><?php echo $this->form->getLabel('path'); ?></div>
					<div class="controls"><?php echo $this->form->getInput('path'); ?></div>
				</div>

				<div class="control-group">
					<div class="control-label"><?php echo $this->form->getLabel('state'); ?></div>
					<div class="controls"><?php echo $this->form->getInput('state'); ?></div>
				</div>

				<div class="control-group">
					<div class="control-label"><?php echo $this->form->getLabel('featured'); ?></div>
					<div class="controls"><?php echo $this->form->getInput('featured'); ?></div>
				</div>

				<div class="control-group">
					<div class="control-label"><?php echo $this->form->getLabel('description'); ?></div>
					<div class="controls"><?php echo $this->form->getInput('description'); ?></div>
				</div>

            </fieldset>
        </div>

    </div>

    <div>
		<input type="hidden" name="jform[type]" value="<?php echo $this->type ?>" />
        <input type="hidden" name="task" value="" />
		<?php if($this->type=="tour"):?>
         <input type="hidden" name="jform[tour_id]" value="<?php echo $this->tour_id ?>" />
		<?php endif;?>
		<?php if($this->type=="city"):?>
         <input type="hidden" name="jform[city_id]" value="<?php echo $this->city_id ?>" />
		<?php endif;?>

        <?php echo JHtml::_('form.token'); ?>
    </div>
</form>
