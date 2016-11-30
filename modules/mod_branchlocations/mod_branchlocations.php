<?php
/**
* @package 	mod_branchlocations - Branch Locations Google Map
* @version		1.0.1
* @created		November 2013

* @author		PluginValley
* @email		pluginvalley@ymail.com
* @website		http://www.pluginvalley.com
* @support		Forum - http://www.pluginvalley.com/forum.html
* @copyright	Copyright (C) 2012 pluginvalley. All rights reserved.
* @license		http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
*
*/
// no direct access
defined('_JEXEC') or die('');
  
	$baseurl		=	JURI::base( true );  
	// get a parameter from the module's configuration
	$width 			= 	$params->get('width', '400px'); // used
	$height 		= 	$params->get('height', '400px'); // used
	$mapstyle 		= 	$params->get('mapstyle', 'padding:5px; border:4px solid #C9C9C9;  margin-top:10px;'); // used
	$logostyle 		= 	$params->get('logostyle', 'float:left; margin:0 2px 2px 0;'); // used
	$ctitlestyle 	= 	$params->get('ctitlestyle', 'font-size:14px; font-weight:bold; color:#5AA426;'); // used
	$lat 			= 	$params->get('lat', '34.147896'); // used
	$lon 			= 	$params->get('lon', '-118.428632'); // used
	$maptype		= 	$params->get('maptype', 'ROADMAP'); // used
	$mapzoom		= 	$params->get('mapzoom', '8'); // used	
	
	// BRANCH 1
	$title1 		= 	$params->get('title1', 'Branch Office 1');
	$addressline11 	= 	$params->get('addressline11', 'Your address line 1');
	$addressline21 	= 	$params->get('addressline21', '');
	$phone1	 		= 	$params->get('phone1', 'Branch 1 Phone');
	$fax1	 		= 	$params->get('fax1', '');
	$uselogo1	 	= 	$params->get('uselogo1', '0');
	$logo1	 		= 	$params->get('logo1', '');
	$lat1	 		= 	$params->get('lat1', '');
	$lon1	 		= 	$params->get('lon1', '');
	// END BRANCH 1
	// BRANCH 2
	$title2 		= 	$params->get('title2', 'Branch Office 2');
	$addressline12 	= 	$params->get('addressline12', 'Your address line 2');
	$addressline22 	= 	$params->get('addressline22', '');
	$phone2	 		= 	$params->get('phone2', 'Branch 2 Phone');
	$fax2	 		= 	$params->get('fax2', '');
	$uselogo2	 	= 	$params->get('uselogo2', '0');
	$logo2	 		= 	$params->get('logo2', '');
	$lat2	 		= 	$params->get('lat2', '');
	$lon2	 		= 	$params->get('lon2', '');
	// END BRANCH 2	
	// BRANCH 3
	$title3 		= 	$params->get('title3', 'Branch Office 3');
	$addressline13 	= 	$params->get('addressline13', 'Your address line 3');
	$addressline23 	= 	$params->get('addressline23', '');
	$phone3	 		= 	$params->get('phone3', 'Branch 3 Phone');
	$fax3	 		= 	$params->get('fax3', '');
	$uselogo3	 	= 	$params->get('uselogo3', '0');
	$logo3	 		= 	$params->get('logo3', '');
	$lat3	 		= 	$params->get('lat3', '');
	$lon3	 		= 	$params->get('lon3', '');
	// END BRANCH 3	
	// BRANCH 4
	$title4 		= 	$params->get('title4', 'Branch Office 4');
	$addressline14 	= 	$params->get('addressline14', 'Your address line 4');
	$addressline24 	= 	$params->get('addressline24', '');
	$phone4	 		= 	$params->get('phone4', 'Branch 4 Phone');
	$fax4	 		= 	$params->get('fax4', '');
	$uselogo4	 	= 	$params->get('uselogo4', '0');
	$logo4	 		= 	$params->get('logo4', '');
	$lat4	 		= 	$params->get('lat4', '');
	$lon4	 		= 	$params->get('lon4', '');
	// END BRANCH 4
	// BRANCH 5
	$title5 		= 	$params->get('title5', 'Branch Office 5');
	$addressline15 	= 	$params->get('addressline15', 'Your address line 5');
	$addressline25 	= 	$params->get('addressline25', '');
	$phone5	 		= 	$params->get('phone5', 'Branch 5 Phone');
	$fax5	 		= 	$params->get('fax5', '');
	$uselogo5	 	= 	$params->get('uselogo5', '0');
	$logo5	 		= 	$params->get('logo5', '');
	$lat5	 		= 	$params->get('lat5', '');
	$lon5	 		= 	$params->get('lon5', '');
	// END BRANCH 5	
	// BRANCH 6
	$title6 		= 	$params->get('title6', 'Branch Office 6');
	$addressline16 	= 	$params->get('addressline16', 'Your address line 6');
	$addressline26 	= 	$params->get('addressline26', '');
	$phone6	 		= 	$params->get('phone6', 'Branch 6 Phone');
	$fax6	 		= 	$params->get('fax6', '');
	$uselogo6	 	= 	$params->get('uselogo6', '0');
	$logo6	 		= 	$params->get('logo6', '');
	$lat6	 		= 	$params->get('lat6', '');
	$lon6	 		= 	$params->get('lon6', '');
	// END BRANCH 6
	// BRANCH 7
	$title7 		= 	$params->get('title7', 'Branch Office 7');
	$addressline17 	= 	$params->get('addressline17', 'Your address line 7');
	$addressline27 	= 	$params->get('addressline27', '');
	$phone7	 		= 	$params->get('phone7', 'Branch 7 Phone');
	$fax7	 		= 	$params->get('fax7', '');
	$uselogo7	 	= 	$params->get('uselogo7', '0');
	$logo7	 		= 	$params->get('logo7', '');
	$lat7	 		= 	$params->get('lat7', '');
	$lon7	 		= 	$params->get('lon7', '');
	// END BRANCH 7
	// BRANCH 8
	$title8 		= 	$params->get('title8', 'Branch Office 8');
	$addressline18 	= 	$params->get('addressline18', 'Your address line 8');
	$addressline28 	= 	$params->get('addressline28', '');
	$phone8	 		= 	$params->get('phone8', 'Branch 8 Phone');
	$fax8	 		= 	$params->get('fax8', '');
	$uselogo8	 	= 	$params->get('uselogo8', '0');
	$logo8	 		= 	$params->get('logo8', '');
	$lat8	 		= 	$params->get('lat8', '');
	$lon8	 		= 	$params->get('lon8', '');
	// END BRANCH 8	
	// BRANCH 9
	$title9 		= 	$params->get('title9', 'Branch Office 9');
	$addressline19 	= 	$params->get('addressline19', 'Your address line 9');
	$addressline29 	= 	$params->get('addressline29', '');
	$phone9	 		= 	$params->get('phone9', 'Branch 9 Phone');
	$fax9	 		= 	$params->get('fax9', '');
	$uselogo9	 	= 	$params->get('uselogo9', '0');
	$logo9	 		= 	$params->get('logo9', '');
	$lat9	 		= 	$params->get('lat9', '');
	$lon9	 		= 	$params->get('lon9', '');
	// END BRANCH 9	
	// BRANCH 10
	$title10 		= 	$params->get('title10', 'Branch Office 10');
	$addressline110 = 	$params->get('addressline110', 'Your address line 10');
	$addressline210 = 	$params->get('addressline210', '');
	$phone10	 	= 	$params->get('phone10', 'Branch 10 Phone');
	$fax10	 		= 	$params->get('fax10', '');
	$uselogo10	 	= 	$params->get('uselogo10', '0');
	$logo10	 		= 	$params->get('logo10', '');
	$lat10	 		= 	$params->get('lat10', '');
	$lon10	 		= 	$params->get('lon10', '');
	// END BRANCH 10		
		$document = &JFactory::getDocument();
		$document->addScript( 'http://maps.google.com/maps/api/js?sensor=false' ); 
?>

<script  type="text/javascript">
function initializeBranches(){
var locations = [
	['<?php if ($uselogo1): ?><img src="<?php echo $baseurl.'/modules/mod_branchlocations/images/logos/'.$logo1; ?>" style="<?php echo $logostyle; ?>"><?php endif; ?><span style="<?php echo $ctitlestyle;?>"><?php echo $title1; ?></span><br /><?php echo $addressline11; ?><?php if ( $addressline21 !== "" ): echo '<br />'.$addressline21.''; endif; ?><br /><strong><?php echo JText::_('MOD_BRANCHLOCATIONS_PHONE'); ?></strong> <?php echo $phone1; ?><?php if ( $fax1 !== "" ): echo '<br /><strong>'.JText::_('MOD_BRANCHLOCATIONS_FAX').'</strong> '.$fax1.''; endif;?><br /> ', <?php echo $lat1.','. $lon1;?>, 1],
	['<?php if ($uselogo2): ?><img src="<?php echo $baseurl.'/modules/mod_branchlocations/images/logos/'.$logo2; ?>" style="<?php echo $logostyle; ?>"><?php endif; ?><span style="<?php echo $ctitlestyle;?>"><?php echo $title2; ?></span><br /><?php echo $addressline12; ?><?php if ( $addressline22 !== "" ): echo '<br />'.$addressline22.''; endif; ?><br /><strong><?php echo JText::_('MOD_BRANCHLOCATIONS_PHONE'); ?></strong> <?php echo $phone2; ?><?php if ( $fax2 !== "" ): echo '<br /><strong>'.JText::_('MOD_BRANCHLOCATIONS_FAX').'</strong> '.$fax2.''; endif;?><br /> ', <?php echo $lat2.','. $lon2;?>, 2],
	['<?php if ($uselogo3): ?><img src="<?php echo $baseurl.'/modules/mod_branchlocations/images/logos/'.$logo3; ?>" style="<?php echo $logostyle; ?>"><?php endif; ?><span style="<?php echo $ctitlestyle;?>"><?php echo $title3; ?></span><br /><?php echo $addressline13; ?><?php if ( $addressline23 !== "" ): echo '<br />'.$addressline23.''; endif; ?><br /><strong><?php echo JText::_('MOD_BRANCHLOCATIONS_PHONE'); ?></strong> <?php echo $phone3; ?><?php if ( $fax3 !== "" ): echo '<br /><strong>'.JText::_('MOD_BRANCHLOCATIONS_FAX').'</strong> '.$fax3.''; endif;?><br /> ', <?php echo $lat3.','. $lon3;?>, 3],
	['<?php if ($uselogo4): ?><img src="<?php echo $baseurl.'/modules/mod_branchlocations/images/logos/'.$logo4; ?>" style="<?php echo $logostyle; ?>"><?php endif; ?><span style="<?php echo $ctitlestyle;?>"><?php echo $title4; ?></span><br /><?php echo $addressline14; ?><?php if ( $addressline24 !== "" ): echo '<br />'.$addressline24.''; endif; ?><br /><strong><?php echo JText::_('MOD_BRANCHLOCATIONS_PHONE'); ?></strong> <?php echo $phone4; ?><?php if ( $fax4 !== "" ): echo '<br /><strong>'.JText::_('MOD_BRANCHLOCATIONS_FAX').'</strong> '.$fax4.''; endif;?><br /> ', <?php echo $lat4.','. $lon4;?>, 4],
	['<?php if ($uselogo5): ?><img src="<?php echo $baseurl.'/modules/mod_branchlocations/images/logos/'.$logo5; ?>" style="<?php echo $logostyle; ?>"><?php endif; ?><span style="<?php echo $ctitlestyle;?>"><?php echo $title5; ?></span><br /><?php echo $addressline15; ?><?php if ( $addressline25 !== "" ): echo '<br />'.$addressline25.''; endif; ?><br /><strong><?php echo JText::_('MOD_BRANCHLOCATIONS_PHONE'); ?></strong> <?php echo $phone5; ?><?php if ( $fax5 !== "" ): echo '<br /><strong>'.JText::_('MOD_BRANCHLOCATIONS_FAX').'</strong> '.$fax5.''; endif;?><br /> ', <?php echo $lat5.','. $lon5;?>, 5],
	['<?php if ($uselogo6): ?><img src="<?php echo $baseurl.'/modules/mod_branchlocations/images/logos/'.$logo6; ?>" style="<?php echo $logostyle; ?>"><?php endif; ?><span style="<?php echo $ctitlestyle;?>"><?php echo $title6; ?></span><br /><?php echo $addressline16; ?><?php if ( $addressline26 !== "" ): echo '<br />'.$addressline26.''; endif; ?><br /><strong><?php echo JText::_('MOD_BRANCHLOCATIONS_PHONE'); ?></strong> <?php echo $phone6; ?><?php if ( $fax6 !== "" ): echo '<br /><strong>'.JText::_('MOD_BRANCHLOCATIONS_FAX').'</strong> '.$fax6.''; endif;?><br /> ', <?php echo $lat6.','. $lon6;?>, 6],
	['<?php if ($uselogo7): ?><img src="<?php echo $baseurl.'/modules/mod_branchlocations/images/logos/'.$logo7; ?>" style="<?php echo $logostyle; ?>"><?php endif; ?><span style="<?php echo $ctitlestyle;?>"><?php echo $title7; ?></span><br /><?php echo $addressline17; ?><?php if ( $addressline27 !== "" ): echo '<br />'.$addressline27.''; endif; ?><br /><strong><?php echo JText::_('MOD_BRANCHLOCATIONS_PHONE'); ?></strong> <?php echo $phone7; ?><?php if ( $fax7 !== "" ): echo '<br /><strong>'.JText::_('MOD_BRANCHLOCATIONS_FAX').'</strong> '.$fax7.''; endif;?><br /> ', <?php echo $lat7.','. $lon7;?>, 7],
	['<?php if ($uselogo8): ?><img src="<?php echo $baseurl.'/modules/mod_branchlocations/images/logos/'.$logo8; ?>" style="<?php echo $logostyle; ?>"><?php endif; ?><span style="<?php echo $ctitlestyle;?>"><?php echo $title8; ?></span><br /><?php echo $addressline18; ?><?php if ( $addressline28 !== "" ): echo '<br />'.$addressline28.''; endif; ?><br /><strong><?php echo JText::_('MOD_BRANCHLOCATIONS_PHONE'); ?></strong> <?php echo $phone8; ?><?php if ( $fax8 !== "" ): echo '<br /><strong>'.JText::_('MOD_BRANCHLOCATIONS_FAX').'</strong> '.$fax8.''; endif;?><br /> ', <?php echo $lat8.','. $lon8;?>, 8],
	['<?php if ($uselogo9): ?><img src="<?php echo $baseurl.'/modules/mod_branchlocations/images/logos/'.$logo9; ?>" style="<?php echo $logostyle; ?>"><?php endif; ?><span style="<?php echo $ctitlestyle;?>"><?php echo $title9; ?></span><br /><?php echo $addressline19; ?><?php if ( $addressline29 !== "" ): echo '<br />'.$addressline29.''; endif; ?><br /><strong><?php echo JText::_('MOD_BRANCHLOCATIONS_PHONE'); ?></strong> <?php echo $phone9; ?><?php if ( $fax9 !== "" ): echo '<br /><strong>'.JText::_('MOD_BRANCHLOCATIONS_FAX').'</strong> '.$fax9.''; endif;?><br /> ', <?php echo $lat9.','. $lon9;?>, 9],
	['<?php if ($uselogo10): ?><img src="<?php echo $baseurl.'/modules/mod_branchlocations/images/logos/'.$logo10; ?>" style="<?php echo $logostyle; ?>"><?php endif; ?><span style="<?php echo $ctitlestyle;?>"><?php echo $title10; ?></span><br /><?php echo $addressline110; ?><?php if ( $addressline210 !== "" ): echo '<br />'.$addressline210.''; endif; ?><br /><strong><?php echo JText::_('MOD_BRANCHLOCATIONS_PHONE'); ?></strong> <?php echo $phone10; ?><?php if ( $fax10 !== "" ): echo '<br /><strong>'.JText::_('MOD_BRANCHLOCATIONS_FAX').'</strong> '.$fax10.''; endif;?><br /> ', <?php echo $lat10.','. $lon10;?>, 10],
];

var map = new google.maps.Map(document.getElementById('map_branchloc'), {
  zoom: <?php echo $mapzoom; ?>,
  center: new google.maps.LatLng(<?php echo $lat; ?>, <?php echo $lon; ?>),
  mapTypeId: google.maps.MapTypeId.<?php echo $maptype; ?>
});

var infowindow = new google.maps.InfoWindow();

var marker, i;

for (i = 0; i < locations.length; i++) {  
  marker = new google.maps.Marker({
    position: new google.maps.LatLng(locations[i][1], locations[i][2]),
    map: map
  });

  google.maps.event.addListener(marker, 'click', (function(marker, i) {
    return function() {
      infowindow.setContent(locations[i][0]);
      infowindow.open(map, marker);
    }
  })(marker, i));
}
}
</script>
<script type="text/javascript">window.onload = initializeBranches;</script>
<div id="map_branchloc" style="width:<?php echo $width;?>; height:<?php echo $height;?>; <?php echo $mapstyle;?>"></div>