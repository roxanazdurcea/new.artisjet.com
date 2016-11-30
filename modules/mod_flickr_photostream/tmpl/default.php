<?php 
// no direct access 
defined( '_JEXEC' ) or die( 'Restricted access' ); 

?>

<?php
$modURL 	= JURI::base().'modules/mod_flickr_photostream';

?>

<link rel="stylesheet" href="<?php echo $modURL; ?>/assets/css/style.css" type="text/css" />


<div id="container-f"><?php echo $module_flickr ;?></div>

<div id="flickr_badge_wrapper">
<script type="text/javascript" src="http://www.flickr.com/badge_code.gne?count=<?php echo $FlickrPhotoStreamOptionsParams['project_count']; ?>&display=<?php echo $FlickrPhotoStreamOptionsParams['project_ordering']; ?>
&size=<?php echo $FlickrPhotoStreamOptionsParams['project_size']; ?>&nsid=<?php echo $FlickrPhotoStreamOptionsParams['project_id']; ?>&raw=1"></script>
</div>





<style type="text/css"> 
.flickrimg {
border: <?php echo $FlickrPhotoStreamOptionsParams['project_border']; ?> solid <?php echo $FlickrPhotoStreamOptionsParams['project_colorborder']; ?> !important; 
padding:<?php echo $FlickrPhotoStreamOptionsParams['project_padding']; ?>; 
margin:<?php echo $FlickrPhotoStreamOptionsParams['project_margin']; ?>;

}


#flickr_badge_wrapper {
width:<?php echo $FlickrPhotoStreamOptionsParams['project_width']; ?>;


}


</style>




















