<?php
defined('_JEXEC') or die ();
$user = JFactory::getUser();
$listOrder = $this->escape($this->state->get('list.ordering'));
$listDirn = $this->escape($this->state->get('list.direction'));
$canOrder = $user->authorise('core.edit.state', 'com_tour');
$saveOrder = $listOrder == 'a.ordering';
if ($saveOrder) {
    $saveOrderingUrl = 'index.php?option=com_tour&task=tourphotos.saveOrderAjax&tmpl=component';
    JHtml::_('sortablelist.sortable', 'tourList', 'adminForm',
        strtolower($listDirn), $saveOrderingUrl);
}

JFactory::getDocument()->addScriptDeclaration('
	Joomla.orderTable = function()
	{
		table = document.getElementById("sortTable");
		direction = document.getElementById("directionTable");
		order = table.options[table.selectedIndex].value;
		if (order != "' . $listOrder . '")
		{
			dirn = "asc";
		}
		else
		{
			dirn = direction.options[direction.selectedIndex].value;
		}
		Joomla.tableOrdering(order, dirn, "");
	};
');
?>
<form action="<?php echo JRoute::_('index.php?option=com_tour&view=imagesliders'); ?>" method="post" name="adminForm"
      id="adminForm">

    <?php if (!empty($this->sidebar)) : ?>
    <div id="j-sidebar-container" class="span2">
        <?php echo $this->sidebar; ?>
    </div>
    <div id="j-main-container" class="span10">
        <?php else : ?>
        <div id="j-main-container">
            <?php endif; ?>

            <div id="filter-bar" class="btn-toolbar">
                <div class="filter-search btn-group pull-left">
                    <label for="filter_search" class="element-invisible"><?php
                        echo JText::_('COM_TOUR_SEARCH_IN_TITLE'); ?></label>
                    <input type="text" name="filter_search" id="filter_search"
                           placeholder="<?php echo JText::_('COM_TOUR_SEARCH_IN_TITLE'); ?>"
                           value="<?php echo $this->escape($this->state->get('filter.search'));
                           ?>" title="<?php echo JText::_('COM_TOUR_SEARCH_IN_TITLE'); ?>"/>
                </div>
                <div class="btn-group pull-left">
                    <button type="submit" class="btn hasTooltip" title="<?php echo JHtml::tooltipText('JSEARCH_FILTER_SUBMIT'); ?>"><i class="icon-search"></i></button>
                    <button type="button" class="btn hasTooltip" title="<?php echo JHtml::tooltipText('JSEARCH_FILTER_CLEAR'); ?>" onclick="document.getElementById('filter_search').value='';this.form.submit();"><i class="icon-remove"></i></button>
                </div>


                <div class="btn-group pull-right">
                    <label for="sortTable" class="element-invisible"><?php echo JText::_('JGLOBAL_SORT_BY');?></label>
                    <select name="filter.state" id="sortTable" class="input-medium" onchange="Joomla.orderTable()">
                        <option value="all">Select type slider</option>
                        <option value="Slider_bottom">Slider bottom</option>
                        <option value="Slider_city">Slider city</option>
                    </select>
                </div>


                <div class="btn-group pull-right hidden-phone">
                    <label for="limit" class="element-invisible">
                        <?php echo JText::_
                        ('JFIELD_PLG_SEARCH_SEARCHLIMIT_DESC'); ?>
                    </label>
                    <?php echo $this->pagination->getLimitBox(); ?>
                </div>

            </div>


            <div class="clearfix"></div>
            <table class="table table-striped" id="tourList">
                <thead>
                <tr>

                    <th width="1%" class="hidden-phone"><input type="checkbox"
                                                               name="checkall-toggle" value=""
                                                               title="<?php echo JText::_('JGLOBAL_CHECK_ALL'); ?>"
                                                               onclick="Joomla.checkAll(this)"/></th>



                    <th class="title" width="5%">
                        <?php
                        echo JHtml::_('grid.sort', 'COM_TOUR_VIEW_IMAGESLIDER_FILED_TITLE', 'a.title', $listDirn, $listOrder);
                        ?>
                    </th>
                    <th class="image" width="5%">
                        <?php
                        echo JHtml::_('grid.sort', 'COM_TOUR_VIEW_IMAGESLIDER_FILED_PATH', 'a.path', $listDirn, $listOrder);
                        ?>
                    </th>
                    <th class="image" width="5%">
                        <?php
                        echo JHtml::_('grid.sort', 'COM_TOUR_VIEW_IMAGESLIDER_FILED_TYPESLIDER', 'a.type_slider', $listDirn, $listOrder);
                        ?>
                    </th>

                    <th width="1%" class="nowrap center hidden-phone">
                        <?php echo JHtml::_('grid.sort', 'JGRID_HEADING_ID', 'a.id', $listDirn, $listOrder); ?>
                    </th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                    <td colspan="10">
                        <?php echo $this->pagination->getListFooter(); ?>
                    </td>
                </tr>
                </tfoot>
                <tbody>

                <?php if($this->items):?>
                <?php
                foreach ($this->items as $i => $item) :
                    $canCheckin = $user->authorise('core.manage', 'com_checkin') || $item->checked_out == $user->get('id') || $item->checked_out == 0;
                    $canChange = $user->authorise('core.edit.state', 'com_tour') && $canCheckin;
                    ?>
                    <tr class="row<?php echo $i % 2; ?>" sortable-group-id="1">

                        <td class="hidden-phone">
                            <?php echo JHtml::_('grid.id', $i, $item->id); ?>
                        </td>


                        <td>
                            <a
                                href="<?php echo JRoute::_('index.php?option=com_tour&task=imageslider.edit&id=' . ( int )$item->id);?>"><?php echo $item->title; ?></a>
                        </td>
                        <td>
                            <img src="<?php echo JUri::root(). $item->path; ?>" width="50px"/>
                        </td>
                        <td>
                            <?php echo $item->type_slider; ?>
                        </td>

                        <td class="center hidden-phone">
                            <?php echo (int)$item->id; ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
                <?php endif; ?>
                </tbody>
            </table>



        </div>
    </div>


    <input type="hidden" name="task" value=""/>
    <input type="hidden" name="boxchecked" value="0"/>
    <input type="hidden" name="filter_order" value="<?php echo $listOrder; ?>"/>
    <input type="hidden" name="filter_order_Dir" value="<?php echo $listDirn; ?>"/>
    <?php echo JHtml::_('form.token'); ?>
</form>