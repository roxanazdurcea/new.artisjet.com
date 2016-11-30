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

require_once(__DIR__ . '/abstract.php');

class EasyBlogContributorJomsocialEvent extends EasyBlogContributorAbstract
{
    public $event = null;

	public function __construct($id, $type)
	{
        parent::__construct($id, $type);
        
        JTable::addIncludePath( JPATH_ROOT . '/components/com_community/tables' );
        $event  = JTable::getInstance( 'Event' , 'CTable' );
        $event->load( $id );

        $this->event = $event;
	}

    public function getAvatar()
    {
        return $this->event->getAvatar();
    }

    public function getTitle()
    {
        return $this->event->title;
    }

    public function getPermalink()
    {
        return $this->event->getLink();
    }

}