<?php
/**
 FlickrPhotoStream for joomla 3x and 2.5x
 */
 
// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );
// Include the syndicate functions only once
require_once( dirname(__FILE__).'/helper.php' );
require_once( dirname(__FILE__).'/assets/classe/layout.php' );

$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'));
$Content = modFlickrPhotoStreamHelper::getContent( $params );
$FlickrPhotoStreamOptionsParams = modFlickrPhotoStreamHelper::getData( $params );
require( JModuleHelper::getLayoutPath( 'mod_flickr_photostream' ) );

?>