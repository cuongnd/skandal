<?php
defined ( '_JEXEC' ) or die ();
?>
<form
    action="<?php echo JRoute::_('index.php?option=com_tour&&view=tourtariff&layout=edit&id='.(int) $this->item->id); ?>"
    method="post" name="adminForm" id="adminForm" class="form-validate">
    <div class="row-fluid">
        <div class="span10 form-horizontal">
            <fieldset>
                <h4>Tour: <?php echo $this->tour->name; ?></h4>
                <?php echo JHtml::_ ( 'bootstrap.startPane', 'myTab', array ('active' => 'details'));?>
                <?php echo JHtml::_ ( 'bootstrap.addPanel', 'myTab', 'details', empty ( $this->item->id ) ? JText::_( 'COM_FOLIO_NEW_FOLIO', true ) : JText::sprintf ( 'COM_FOLIO_EDIT_FOLIO', $this->item->id, true ) );?>
                <?php echo $this->form->renderField('datefrom'); ?>
                <?php echo $this->form->renderField('dateto'); ?>
                <?php echo $this->form->renderField('price'); ?>
                <?php echo $this->form->renderField('singleprice'); ?>
                <?php echo $this->form->renderField('state'); ?>



                <?php echo JHtml::_('bootstrap.endPanel'); ?>
                <input type="hidden" name="task" value="" />
                <?php echo JHtml::_('form.token'); ?>
                <?php echo JHtml::_('bootstrap.endPane'); ?>
            </fieldset>
            <input type="hidden" name="jform[idtour]" value="<?php echo $this->idtour ?>" />
        </div>
    </div>
</form>