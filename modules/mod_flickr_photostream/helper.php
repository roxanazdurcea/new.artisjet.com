<?php
class modFlickrPhotoStreamHelper
{   

    public static function getContent( $params )
    {
        return 'No content';
    }	
	
	public static function getData( $params)
	{
		$FlickrPhotoStreamOptionsParams = array();
		$FlickrPhotoStreamOptionsParams['project_count'] = $params->get( 'project_count' );
		$FlickrPhotoStreamOptionsParams['project_ordering'] = $params->get( 'project_ordering' );
		$FlickrPhotoStreamOptionsParams['project_size'] = $params->get( 'project_size' );
		$FlickrPhotoStreamOptionsParams['project_id'] = $params->get( 'project_id' );
		$FlickrPhotoStreamOptionsParams['project_width'] = $params->get( 'project_width' );
		$FlickrPhotoStreamOptionsParams['project_margin'] = $params->get( 'project_margin' );
		$FlickrPhotoStreamOptionsParams['project_border'] = $params->get( 'project_border' );
		$FlickrPhotoStreamOptionsParams['project_colorborder'] = $params->get( 'project_colorborder' );
		$FlickrPhotoStreamOptionsParams['project_padding'] = $params->get( 'project_padding' );
		

		return $FlickrPhotoStreamOptionsParams;
	}
}


?>