/**
 * @package     Joomla.Site
 * @subpackage  Templates.protostar
 * @copyright   Copyright (C) 2005 - 2016 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 * @since       3.2
 */

(function($)
{
	$(document).ready(function()
	{
		$('*[rel=tooltip]').tooltip()

		// Turn radios into btn-group
		$('.radio.btn-group label').addClass('btn');
		$(".btn-group label:not(.active)").click(function()
		{
			var label = $(this);
			var input = $('#' + label.attr('for'));

			if (!input.prop('checked')) {
				label.closest('.btn-group').find("label").removeClass('active btn-success btn-danger btn-primary');
				if (input.val() == '') {
					label.addClass('active btn-primary');
				} else if (input.val() == 0) {
					label.addClass('active btn-danger');
				} else {
					label.addClass('active btn-success');
				}
				input.prop('checked', true);
			}
		});
		$(".btn-group input[checked=checked]").each(function()
		{
			if ($(this).val() == '') {
				$("label[for=" + $(this).attr('id') + "]").addClass('active btn-primary');
			} else if ($(this).val() == 0) {
				$("label[for=" + $(this).attr('id') + "]").addClass('active btn-danger');
			} else {
				$("label[for=" + $(this).attr('id') + "]").addClass('active btn-success');
			}
		});
	})



/* roxana's js */

$(document).ready(function(){
  	jQuery(".thumbnail-placeholder").on('click, mouseover', function() {
  		var url = jQuery(this).attr("src").replace("_thumb", "");
  	jQuery("#mainImage").attr("src", url);
  	});
    
    jQuery('.moduletable ul').addClass('container').css('background-color','#f4f4f4');
  
	jQuery('a[href="http://ordasoft.com"]').remove();
    
    jQuery('#searchForm').addClass('container');
 	jQuery('.search-results').addClass('container');
    jQuery('.only').css('display', 'none');


 
    var downHeight = $(window).height() - $('.copyright').height() - $('.header').height()
	$('.jd-item-page').addClass('container').css('min-height', downHeight);
    var pageHeight = $(window).height() - $('.footer').height() - $('.header').height()
    $('.itemBody').css('min-height', pageHeight);
    
    
    $('.jd_sort_order').css('display','none');
    $('.jd_footer').css('display','none');
    
    $('#fd').addClass('container');
    $('.navbar a').removeClass('btn');
    
    $('.search').addClass('pull-right');
    $('.mod-languages').addClass('pull-left');

$('.nav-tabs').on('shown.bs.tab', function () {
    google.maps.event.trigger(window, 'resize', {});
});

  $('.collapse.in').prev('.panel-heading').addClass('active');
  $('#accordion, #bs-collapse')
    .on('show.bs.collapse', function(a) {
      $(a.target).prev('.panel-heading').addClass('active');
    })
    .on('hide.bs.collapse', function(a) {
      $(a.target).prev('.panel-heading').removeClass('active');
    });
    
    
   /* $(function() {
        $('.iphoto a').lightBox();
    }); */
     
  

  document.addEventListener('gesturestart', function (e) {
    e.preventDefault();
});
  
  
    
});



  




/* end of roxana's js */







})(jQuery);