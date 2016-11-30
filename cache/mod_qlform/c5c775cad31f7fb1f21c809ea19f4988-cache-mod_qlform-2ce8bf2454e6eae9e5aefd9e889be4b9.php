<?php die("Access Denied"); ?>#x#a:2:{s:6:"output";a:3:{s:4:"body";s:0:"";s:4:"head";a:3:{s:7:"scripts";a:6:{s:33:"/media/system/js/mootools-core.js";a:3:{s:4:"mime";s:15:"text/javascript";s:5:"defer";b:0;s:5:"async";b:0;}s:24:"/media/system/js/core.js";a:3:{s:4:"mime";s:15:"text/javascript";s:5:"defer";b:0;s:5:"async";b:0;}s:28:"/media/system/js/punycode.js";a:3:{s:4:"mime";s:15:"text/javascript";s:5:"defer";b:0;s:5:"async";b:0;}s:28:"/media/system/js/validate.js";a:3:{s:4:"mime";s:15:"text/javascript";s:5:"defer";b:0;s:5:"async";b:0;}s:33:"/media/system/js/mootools-more.js";a:3:{s:4:"mime";s:15:"text/javascript";s:5:"defer";b:0;s:5:"async";b:0;}s:33:"/media/system/js/html5fallback.js";a:3:{s:4:"mime";s:15:"text/javascript";s:5:"defer";b:0;s:5:"async";b:0;}}s:6:"script";a:1:{s:15:"text/javascript";s:386:"jQuery(function($) {
			 $('.hasTip').each(function() {
				var title = $(this).attr('title');
				if (title) {
					var parts = title.split('::', 2);
					var mtelement = document.id(this);
					mtelement.store('tip:title', parts[0]);
					mtelement.store('tip:text', parts[1]);
				}
			});
			var JTooltips = new Tips($('.hasTip').get(), {"maxTitleChars": 50,"fixed": false});
		});";}s:10:"scriptText";a:1:{s:23:"JLIB_FORM_FIELD_INVALID";s:19:"Invalid field:&#160";}}s:13:"mime_encoding";s:9:"text/html";}s:6:"result";s:5503:"
<div class="qlform">
<!--
mod_qlform : Copyright (C) 2013 ql.de All rights reserved.
Author : Mareike Riegel ql.de mareike.riegel(at)ql.de 
License : GNU General Public License version 2 or later
--><form method="post" action="#" id="mod_qlform_101" class="form-validate" enctype="multipart/form-data">

        <div style="display:none;"><input name="JabBerwOcky" type="text" value="" /></div>
    <input name="formSent" type="hidden" value="1" />
    <fieldset id="fieldset1"><dl>                <dt class="jform_name">
                    <label id="jform_name-lbl" for="jform_name" class="required">
	Name<span class="star">&#160;*</span></label>
                </dt>
                <dd class="jform_name">
                    <input type="text" name="jform[name]" id="jform_name" value="" class="form-control input-lg required" size="50" required aria-required="true" />                </dd>
                                <dt class="jform_Coname">
                    <label id="jform_Coname-lbl" for="jform_Coname" class="">
	Company Name</label>
                </dt>
                <dd class="jform_Coname">
                    <input type="text" name="jform[Coname]" id="jform_Coname" value="" class="form-control input-lg" size="50" />                </dd>
                                <dt class="jform_Phnum">
                    <label id="jform_Phnum-lbl" for="jform_Phnum" class="">
	Phone Number</label>
                </dt>
                <dd class="jform_Phnum">
                    <input type="text" name="jform[Phnum]" id="jform_Phnum" value="" class="form-control input-lg" size="50" />                </dd>
                                <dt class="jform_email">
                    <label id="jform_email-lbl" for="jform_email" class="required">
	Email<span class="star">&#160;*</span></label>
                </dt>
                <dd class="jform_email">
                    <input type="email" name="jform[email]" class="validate-email form-control input-lg required" id="jform_email" value="" size="50" required aria-required="true" />                </dd>
                                <dt class="jform_country">
                    <label id="jform_country-lbl" for="jform_country" class="">
	Country</label>
                </dt>
                <dd class="jform_country">
                    <input type="text" name="jform[country]" id="jform_country" value="" class="form-control input-lg" size="50" />                </dd>
                                <dt class="jform_subject">
                    <label id="jform_subject-lbl" for="jform_subject" class="">
	Product name</label>
                </dt>
                <dd class="jform_subject">
                    <select id="jform_subject" name="jform[subject]">
	<option value="1-Printers">artisJet Printers</option>
	<option value="2-Artis 3000U">- Artis 3000U</option>
	<option value="3-Artis 5000U">- Artis 5000U</option>
	<option value="4-Artis BR U1800U">- Artis BR U1800U</option>
	<option value="5-Artis 3000T">- Artis 3000T</option>
	<option value="6-Artis 5000T">- Artis 5000T</option>
	<option value="7-Artis 3000S">- Artis 3000S</option>
	<option value="8-Artis 2100U">- Artis 2100U</option>
	<option value="9-Artis 3060U">- Artis 3060U</option>
	<option value="10-artis Ink">artis Ink</option>
	<option value="11-DTS3 Ink">- DTS3 Ink</option>
	<option value="12-DTSAT3 Ink">- DTSAT3 Ink</option>
	<option value="13-Eco Solvent Ink">- Eco Solvent Ink</option>
	<option value="14-DTG Ink">- DTG Ink</option>
	<option value="15-Direct to Substrate LED UV Ink">- Direct to Substrate LED UV Ink</option>
	<option value="16-Phone Case Ink DPC-S2">- Phone Case Ink DPC-S2</option>
	<option value="17-Software">Software</option>
	<option value="18-artisrip Lite">-artisrip Lite</option>
	<option value="19-artisrip">-artisrip</option>
	<option value="20-artisJet Accessories">artisJet Accessories</option>
	<option value="21-Printing Jigs">- Printing Jigs</option>
	<option value="22-Spare Parts">- Spare Parts</option>
</select>
                </dd>
                                <dt class="jform_message">
                    <label id="jform_message-lbl" for="jform_message" class="required">
	Details<span class="star">&#160;*</span></label>
                </dt>
                <dd class="jform_message">
                    <textarea name="jform[message]" id="jform_message" cols="50" rows="7" class="form-control input-lg required" required aria-required="true" ></textarea>                </dd>
                </dl></fieldset><fieldset id="qlformfbd7939d674997cdb4692d34de8633c4" class="additionalFields"><dl>                <dt class="jform_sendcopy">
                    <label id="jform_sendcopy-lbl" for="jform_sendcopy" class="">
	Send copy to me</label>
                </dt>
                <dd class="jform_sendcopy">
                    <input type="checkbox" name="jform[sendcopy]" id="jform_sendcopy" value="1" checked />                </dd>
                </dl></fieldset>    <dl>
                <dt class="captcha">
            <span>Please type the text below</span><br />            <img id="captcha" src="tmp/qlform/sg8d18d4ht3mvs7l8qojm8r7o2_101_161025033606.png?9012" /></dt>
        <dd class="captcha"><input type="text" name="captcha" value="" /></dd>
                <dt class="submit"></dt><dd class="submit"><input class="submit" type="submit" value="Submit" /></dd>
    </dl>
        <input type="hidden" value="101" name="moduleId" />
    </form></div>
";}