<?php
/**
* @package		EasyBlog
* @copyright	Copyright (C) 2010 - 2014 Stack Ideas Sdn Bhd. All rights reserved.
* @license		GNU/GPL, see LICENSE.php
* EasyBlog is free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed it includes or
* is derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
* See COPYRIGHT.php for copyright notices and details.
*/
defined('_JEXEC') or die('Unauthorized Access');
?>
<?php if(!$smartblogInstalled) { ?>
<div class="row">
	<div class="col-lg-6">
        <div class="panel">
			<div class="panel-body"><?php echo JText::_('COM_EASYBLOG_MIGRATOR_SMARTBLOG_COMPONENT_NOT_FOUND'); ?></div>
		</div>
    </div>
</div>
<?php
}else{ ?>
<form action="<?php echo JRoute::_('index.php');?>" method="post" name="adminForm" id="adminForm" data-migrate-article-form>
<div class="row">
	<div class="col-lg-6">
        <div class="panel">
			<div class="panel-head">
                <div class="panel-info"><?php echo JText::_('COM_EASYBLOG_MIGRATOR_SMARTBLOG_NOTICE'); ?></div>
            </div>

            <div class="panel-body">
                <?php echo $this->html('settings.toggle', 'smartblog_comment', 'COM_EASYBLOG_MIGRATOR_SMARTBLOG_MIGRATE_COMMENT'); ?>

                <?php echo $this->html('settings.toggle', 'smartblog_image', 'COM_EASYBLOG_MIGRATOR_SMARTBLOG_MIGRATE_IMAGE'); ?>

                <div class="form-group">
                    <label for="page_title" class="col-md-5">
                        <?php echo JText::_('COM_EASYBLOG_MIGRATOR_SMARTBLOG_IMAGE_PATH'); ?>

                        <i data-html="true" data-placement="top" data-title="<?php echo JText::_('COM_EASYBLOG_MIGRATOR_SMARTBLOG_IMAGE_PATH'); ?>"
                            data-content="<?php echo JText::_('COM_EASYBLOG_MIGRATOR_SMARTBLOG_IMAGE_PATH_DESC');?>" data-eb-provide="popover" class="fa fa-question-circle pull-right"></i>
                    </label>

                    <div class="col-md-7">
                    	<input type="text" name="smartblog_imagepath" class="form-control" value="<?php echo DIRECTORY_SEPARATOR; ?> images <?php echo DIRECTORY_SEPARATOR; ?>" data-image-path/>
                    </div>
                </div>

    			<div style="padding-top:20px;">
    				<a href="javascript:void(0);" class="btn btn-primary btn-sm" data-migrate-smartblog><?php echo JText::_('COM_EASYBLOG_MIGRATOR_RUN_NOW'); ?></a>
                </div>
			</div>
        </div>
    </div>

    <div class="col-lg-6">
        <div class="panel">
            <div class="panel-head">
        	   <b><?php echo JText::_('COM_EASYBLOG_MIGRATOR_PROGRESS');?></b>
               <span data-progress-loading class="eb-loader-o size-sm hide"></span>
            </div>

            <div class="panel-body">
            	<div data-progress-empty><?php echo JText::_('COM_EASYBLOG_MIGRATOR_NO_PROGRESS_YET'); ?></div>
            	<div data-progress-status style="overflow:auto; height:98%;"></div>
            </div>
		</div>

		<div class="panel">
            <div class="panel-head">
        	   <b><?php echo JText::_('COM_EASYBLOG_MIGRATOR_STATISTIC');?></b>
            </div>

            <div class="panel-body">
            	<div data-progress-stat style="overflow:auto; height:98%;"></div>
            </div>
		</div>
    </div>
</div>
</form>

<?php } ?>
