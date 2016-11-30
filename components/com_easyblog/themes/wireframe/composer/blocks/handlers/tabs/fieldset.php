<?php
/**
* @package      EasyBlog
* @copyright    Copyright (C) 2010 - 2014 Stack Ideas Sdn Bhd. All rights reserved.
* @license      GNU/GPL, see LICENSE.php
* EasyBlog is free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed it includes or
* is derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
* See COPYRIGHT.php for copyright notices and details.
*/
defined('_JEXEC') or die('Unauthorized Access');
$tabTitle = JText::_('COM_EASYBLOG_BLOCK_TABS_DEFAULT_TITLE');
?>
<div class="eb-composer-fieldset">
    <div class="eb-composer-fieldset-header">
        <strong><?php echo JText::_('COM_EASYBLOG_BLOCKS_TABS_TABS'); ?></strong>
    </div>
    <div class="eb-composer-fieldset-content">
        <div class="eb-composer-field">
            <?php echo $this->html('grid.listbox', 'control', array($tabTitle), array('attributes' => 'data-tabs-control', 'min' => 1, 'max' => 6 , 'toggleDefault' => true, 'customHTML' => $tabTitle)); ?>
        </div>
    </div>
</div>
