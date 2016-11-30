/* JCE Editor - 2.5.27 | 22 September 2016 | http://www.joomlacontenteditor.net | Copyright (C) 2006 - 2016 Ryan Demmer. All rights reserved | GNU/GPL Version 2 or later - http://www.gnu.org/licenses/gpl-2.0.html */
(function($){Joomla.submitbutton=submitbutton=function(button){if(button=="cancelEdit"){try{Joomla.submitform(button);}catch(e){submitform(button);}
return;}
var $profiles=$jce.Profiles;if($profiles.validate()){$profiles.onSubmit();try{Joomla.submitform(button);}catch(e){submitform(button);}}};$.jce.Profiles={options:{},init:function(){var self=this,init=true;var dir=$('body').css('direction')=='rtl'?'right':'left';$('a#users-add').button({icons:{primary:'ui-icon-person'}});$("#tabs-editor").tabs({'active':0,beforeActivate:function(event,ui){$(ui.oldTab).removeClass('active');$(ui.newTab).addClass('active');}}).find('ul.ui-tabs-nav > li.ui-state-default:first-child').addClass('active');$("#tabs-plugins").tabs({beforeActivate:function(event,ui){$(ui.oldTab).removeClass('active');$(ui.newTab).addClass('active');}}).find('ul.ui-tabs-nav > li.ui-state-default').not('.tab-disabled').first().addClass('active').children('a.ui-tabs-anchor').click();$('input.checkbox-list-toggle-all').click(function(){$('input[type="checkbox"]','#user-groups').prop('checked',this.checked).trigger('check');});$('input[name="components-select"]').click(function(){$('input[type="checkbox"]','#components').prop('disabled',(this.value=='all')).trigger('disable').filter(':checked').prop('checked',false).trigger('check');});$("select.editable, select.combobox").combobox(this.options.combobox);$('input.color').colorpicker($.extend(this.options.colorpicker,{parent:'#jce'}));$('select.extensions, input.extensions, textarea.extensions').extensionmapper(this.options.extensions);this.createLayout();$('select.checklist, input.checklist').checkList({onCheck:function(){self.setRows();}});$('#paramseditorwidth').change(function(){var v=$(this).val()||600,s=v+'px';if(/%/.test(v)){s=v,v=600;}else{v=parseInt(v),s=v+'px';}
$('span.widthMarker span','#profileLayoutTable').html(s);$('#editor_container').width(v);$('span.widthMarker, #statusbar_container span.mceStatusbar').width(v);});$('#paramseditorheight').change(function(){var v=$(this).val()||'auto';if(/%/.test(v)){v='auto';}else{if($.type(v)=='number'){v=parseInt(v);}}});$('#paramseditortoolbar_theme').change(function(){var v=$(this).val();if(v.indexOf('.')!=-1){v=v.split('.');var s=v[0]+'Skin';var c=v[1];v=s+' '+s+c.charAt(0).toUpperCase()+c.substring(1);}else{v+='Skin';}
$('span.profileLayoutContainer').each(function(){var cls=this.className;cls=cls.replace(/([a-z0-9]+)Skin([a-z0-9]*)/gi,'');this.className=$.trim(cls);}).addClass(v);});$('#paramseditortoolbar_align').change(function(){var v=$(this).val();$('ul.sortableList','#toolbar_container').removeClass('mceLeft mceCenter mceRight').addClass('mce'+v.charAt(0).toUpperCase()+v.substring(1));self._fixLayout();}).change();$('#paramseditorpath').change(function(){$('span.mceStatusbar span.mcePathLabel').toggle($(this).val()==1);}).change();$('ul#profileAdditionalFeatures input:checkbox').click(function(){self.setPlugins();});$('#paramseditortoolbar_location').change(function(){var $after=$('#editor_container');if($(this).val()=='top'){$after=$('span.widthMarker');}
$('#toolbar_container').insertAfter($after);}).change();$('#paramseditorstatusbar_location').change(function(){var v=$(this).val();$('#statusbar_container').show();if(v=='none'){$('#statusbar_container').hide();}
var $after=$('#editor_container');if(v=='top'){$after=$('span.widthMarker');if($('#paramseditortoolbar_location').val()=='top'){$after=$('#toolbar_container');}}
$('#statusbar_container').insertAfter($after);}).change();$('#paramseditorresizing').change(function(){var v=$(this).val();$('a.mceResize','#statusbar_container').toggle(v==1);}).change();$('#paramseditortoggle').change(function(){var v=$(this).val();$('#editor_toggle').toggle(v==1);}).change();$('#paramseditortoggle_label').on('change keyup',function(){if(this.value){$('#editor_toggle').text(this.value);}});$('#users').click(function(e){var n=e.target;if($(n).is('span.users-list-delete')){$(n).parent().parent().remove();}});$('#tabs-features :input[name], #tabs-editor :input[name], #tabs-plugins :input[name]').change(function(){if(init){return;}
var name=this.name.replace('!"#$%&()*+,./:;<=>?@[\]^`{|}~','\\$1','g');$(this).add('[name="'+name+'"]').addClass('isdirty');});$('input.plugins-enable-checkbox').on('click',function(){var s=this.checked,name=$(this).data('name'),proxy=$(this).next('input[type="hidden"]');if($(proxy).length==0){proxy=$('<input type="hidden" name="'+$(this).attr('name')+'" />').insertAfter(this);}
$(this).change().val(s?1:0).removeAttr('name');$(proxy).val(s?1:0).change();$('select.plugins-default-select',$(this).parents('fieldset:first')).children('option[value="'+name+'"]').prop('disabled',!s).parent().val(function(i,v){if(v===name){return"";}
return v;});}).change(function(){$(this).removeClass('isdirty');});init=false;},validate:function(){var required=[];$(':input.required').each(function(){if($(this).val()===''){var parent=$(this).parents('div.tab-pane').get(0);required.push("\n"+$('#tabs ul li a[href=#'+parent.id+']').html()+' - '+$.trim($('label[for="'+this.id+'"]').html()));}});if(required.length){var msg=$.jce.options.labels.required;msg+=required.join(',');alert(msg);return false;}
return true;},onSubmit:function(){$('div#tabs-editor, div#tabs-plugins').find(':input[name].placeholder').prop('disabled',true);$('#tabs-features :input[name], #tabs-editor :input[name], #tabs-plugins :input[name]').not('.isdirty').prop('disabled',true).parents('.ui-radio, .ui-checkbox').addClass('disabled');},_fixLayout:function(){$('span.mceButton, span.mceSplitButton').removeClass('mceStart mceEnd');$('span.mceListBox').parent('span.sortableRowItem').prev('span.sortableRowItem').children('span.mceButton:last, span.mceSplitButton:last').addClass('mceEnd');$('span.mceListBox').parent('span.sortableRowItem').next('span.sortableRowItem').children('span.mceButton:first, span.mceSplitButton:first').addClass('mceStart');},createLayout:function(){var self=this;$("ul.sortableList").sortable({connectWith:'ul.sortableList',axis:'y',update:function(event,ui){self.setRows();self.setPlugins();},start:function(event,ui){$(ui.placeholder).width($(ui.item).width());},placeholder:'sortableListItem sortable-highlight',opacity:0.8});$('span.sortableOption').hover(function(){$(this).append('<span role="button"/>');},function(){$(this).empty();}).click(function(){var $parent=$(this).parents('li.sortableListItem').first();var $target=$('ul.sortableList','#profileLayoutTable').not($parent.parent());$parent.appendTo($target);$(this).empty();self.setRows();self.setPlugins();});$('span.sortableRow').sortable({connectWith:'span.sortableRow',tolerance:'pointer',update:function(event,ui){self.setRows();self.setPlugins();self._fixLayout();},start:function(event,ui){$(ui.placeholder).width($(ui.item).width());},opacity:0.8,placeholder:'sortableRowItem sortable-highlight'});this._fixLayout();},setRows:function(){var rows=[];$('span.sortableRow','#toolbar_container').has('span.sortableRowItem').each(function(){rows.push($.map($('span.sortableRowItem',this),function(el){return $(el).data('name');}).join(','));});var v=rows.join(';');$('input[name="rows"]').val(v).change();},setLayout:function(){var $spans=$('span.profileLayoutContainerCurrent > span').not('span.widthMarker');$.each(['toolbar','editor','statusbar'],function(){$('#paramseditor'+this+'_location').val($spans.index($('#'+this+'_container')));});},setPlugins:function(){var self=this,plugins=[];$('span.sortableRow span.plugin','#toolbar_container').each(function(){plugins.push($(this).data('name'));});$('ul#profileAdditionalFeatures input:checkbox:checked').each(function(){plugins.push($(this).val());});$('input[name="plugins"]').val(plugins.join(',')).change();this.setParams(plugins);},setParams:function(plugins){var $tabs=$('div#tabs-plugins > ul.nav.nav-tabs > li');$tabs.removeClass('tab-disabled ui-state-disabled active ui-tabs-active ui-state-active').each(function(i){var name=$(this).data('name');var s=$.inArray(name,plugins)!=-1;$('input[name], select[name]',this).prop('disabled',!s);if(!s){$(this).addClass('tab-disabled');}});$tabs.not('.tab-disabled').first().addClass('active ui-tabs-active ui-state-active').children('a.ui-tabs-anchor').click();}};$(document).ready(function(){$.jce.Profiles.init();});})(jQuery);(function($){$.widget("ui.extensionmapper",{options:{labels:{'type_new':'Add new type...','group_new':'Add new group...'},defaults:''},_init:function(){var self=this,el=this.element,v=$(el).val()||'',name=$(el).attr('name').replace(/\[\]/,'');this.defaultMap={};var dv=this.options.defaults||$(el).data('default');if(dv){$.each(dv.split(';'),function(i,s){var parts=s.split('=');self.defaultMap[parts[0]]=parts[1].split(',');});}
v=$.type(v)=='array'?v.join(';'):v;var $input=$('<input type="hidden" name="'+name+'" id="'+$(el).attr('id')+'" />').addClass(function(){return $(el).hasClass('create')?'create':'';}).insertBefore(el).hide().val(v);$(el).remove();this.element=$input;$('<input type="text" disabled="disabled" role="presentation" aria-disabled="true" />').val(v).insertBefore(this.element);$('<span class="extension_edit"></span>').click(function(){var $edit=this;if(!this.mapper){$(this).addClass('loader');this.mapper=self._buildMapper();$(this.mapper).hide().insertAfter(this).slideDown(450,function(){$($edit).removeClass('loader');$('div.extension_group_container ul.extension_list',this).each(function(){if(this.firstChild.offsetHeight*this.childNodes.length>this.parentNode.offsetHeight){$(this).parent('div.extension_list_container').next('div.extension_list_scroll_bottom').css('visibility','visible');}});});}else{$(this.mapper).slideToggle(450);}}).insertAfter(this.element);},_buildMapper:function(){var self=this,v=$(this.element).val();var $container=$('<div class="extension_mapper" id="'+$(this.element).attr('id')+'_mapper" role="presentation"></div>');$.each(v.split(';'),function(i,s){$container.append(self._createGroup(s.split('=')));});if($(this.element).hasClass('create')){$('<div class="extension_group_add"><span>'+this.options.labels.group_new+'</span></div>').click(function(){var group=self._createGroup();$(group).hide().insertBefore(this).fadeIn('fast');self._createSortable($('ul.extension_list',group));}).appendTo($container);}
this._createSortable($('ul.extension_list',$container));$container.sortable({tolerance:'intersect',placeholder:'sortable-highlight',handle:'span.extension_group_handle',update:function(event,ui){self._setValues();},start:function(event,ui){$(ui.placeholder).width($(ui.item).width()).height($(ui.item).height());}});return $container;},_createSortable:function(list){var self=this;$(list).sortable({connectWith:'ul.extension_list',placeholder:'sortable-highlight',update:function(event,ui){if(!ui.sender)
return;self._showScroll($(ui.item).parent(),['bottom']);self._showScroll($(ui.sender),['top','bottom']);self._setValues();}});},_createGroup:function(values){var self=this;values=values||['custom','custom'];var $tmpl=$('<div class="extension_group_container" role="group">'+' <div class="extension_group_titlebar">'+'  <span class="extension_group_handle icon-move"></span>'+'  <span class="extension_group_title"></span>'+' </div>'+' <div class="extension_list_add"><span role="button">'+this.options.labels.type_new+'</span></div>'+' <div class="extension_list_scroll_top" role="button"><span class="extension_list_scroll_top_icon"></span></div>'+' <div class="extension_list_container">'+'  <ul class="extension_list"></ul>'+' </div>'+' <div class="extension_list_scroll_bottom" role="button"><span class="extension_list_scroll_bottom_icon"></span></div>'+'</div>');var name=values[0],list=values[1]||'';if(name=='custom'){$('<input type="text" size="8" value="" pattern="[a-zA-Z0-9_-]+" />').change(function(){if(this.value=='')
return;var v=this.value.toLowerCase();$('span.extension_group_title',$tmpl).addClass(v).attr('title',v);}).appendTo($('span.extension_group_title',$tmpl)).focus().pattern();var $remove=$('<span class="extension_group_remove" role="button"></span>').click(function(){$($tmpl).fadeOut('fast',function(){$tmpl.remove();self._setValues();});});$('div.extension_group_titlebar',$tmpl).append($remove);}else{var key=name.replace(/[\W]/g,'');if(this.defaultMap[key]){var $check=$('<span class="checkbox" role="checkbox"></span>').addClass(function(){return name.charAt(0)=='-'?'':'checked';}).attr('aria-checked',!(name.charAt(0)=='-'));$check.click(function(){var s=name;if(s.charAt(0)==='-'){s=s.substr(1);}
if($(this).is('.checked')){$(this).removeClass('checked').attr('aria-checked',false).prev('span.extension_group_title').attr('title','-'+s);}else{$(this).addClass('checked').attr('aria-checked',true).prev('span.extension_group_title').attr('title',s);}
self._setValues();});$('div.extension_group_titlebar',$tmpl).append($check);}else{var $remove=$('<span class="extension_group_remove" role="button"></span>').click(function(){$($tmpl).fadeOut('fast',function(){$tmpl.remove();self._setValues();});});$('div.extension_group_titlebar',$tmpl).append($remove);}
var title=this.options.labels[key]||(key.charAt(0).toUpperCase()+key.substr(1));$('span.extension_group_title',$tmpl).html(title);}
$('span.extension_group_title',$tmpl).attr('title',name).addClass(name);$('div.extension_list_add span',$tmpl).click(function(){self._createItem('custom').hide().prependTo($('ul.extension_list',$tmpl)).fadeIn('fast',function(){var parent=this.parentNode;if(parent.firstChild.offsetHeight*parent.childNodes.length>parent.parentNode.offsetHeight){$(parent).parent('div.extension_list_container').next('div.extension_list_scroll_bottom').css('visibility','visible');}
$(this).focus();});});$('div.extension_list_scroll_top',$tmpl).click(function(){self._scrollTo('top',$('ul.extension_list',$tmpl));});$('div.extension_list_scroll_bottom',$tmpl).click(function(){self._scrollTo('bottom',$('ul.extension_list',$tmpl));});list=list.replace(/^[;,]/,'').replace(/[;,]$/,'');$.each(list.split(','),function(){$('ul.extension_list',$tmpl).append(self._createItem(this,key));});return $tmpl;},_createItem:function(value,group){var self=this,v=value.replace(/[^a-z0-9]/gi,''),$item;if(value=='custom'){$item=$('<li class="file custom">'+' <span class="extension_title"><input type="text" value="" size="6" pattern="[a-zA-Z0-9_-]+" /></span>'+' <span class="extension_list_remove" role="button"></span>'+'</li>');$('input',$item).change(function(){if(this.value==''){$(this).removeClass('duplicate');$($item).removeClass(function(){return this.className.replace(/(file|custom)/,'');});return;}
if(new RegExp(new RegExp('[=,]'+this.value+'[,;]')).test($(self.element).val())){$(this).addClass('duplicate');$item.addClass('duplicate');}else{$(this).removeClass('duplicate');$item.removeClass(function(){return this.className.replace(/(file|custom)/,'');}).addClass(this.value);if(this.value!=''){self._setValues();}}}).focus().pattern();}else{$item=$('<li class="file '+v+'">'+' <span class="extension_title" title="'+value+'">'+value.replace(/[\W]+/,'')+'</span>'+' <span class="checkbox" role="checkbox" aria=checked="false"></span>'+'</li>');var map=this.defaultMap[group];if($.inArray(v,map)==-1){$('span.checkbox',$item).removeClass('checkbox').addClass('extension_list_remove').attr('role','button')}else{$('span.checkbox',$item).addClass(function(){return value.charAt(0)=='-'?'':'checked';}).attr('aria-checked',!(value.charAt(0)=='-')).click(function(){if($(this).is('.checked')){$(this).removeClass('checked').attr('aria-checked',false).prev('span.extension_title').attr('title','-'+v);}else{$(this).addClass('checked').attr('aria-checked',true).prev('span.extension_title').attr('title',v);}
self._setValues();});}}
$('span.extension_list_remove',$item).click(function(){$item.fadeOut('fast',function(){var parent=this.parentNode;if(parent.firstChild.offsetHeight*parent.childNodes.length<parent.parentNode.offsetHeight){$(parent).parent('div.extension_list_container').next('div.extension_list_scroll_bottom').css('visibility','hidden');}
if($(parent).children().length==0){$(parent).parents('div.extension_group_container').fadeOut('fast',function(){$(this).remove();});}
$(this).remove();if($('input',$item).val()==''){return;}
self._setValues();});});return $item;},_showScroll:function(el,dir){var p=$(el).parent(),m=parseFloat($(el).css('margin-top'));function check(el,p,dir){if(dir=='top'){return parseFloat(m)==0;}else{if(m==0){var c=$(el).children();return $(c).first().outerHeight()*c.length<$(p).outerHeight();}else{return(m+$(el).outerHeight())<$(p).outerHeight();}}}
var scroll=(dir=='top')?p.prev():p.next();$.each(dir,function(n,s){if(check(el,p,s)){scroll.css('visibility','hidden');}else{scroll.css('visibility','visible');}});},_scrollTo:function(dir,ul){var self=this,p=$(ul).parent(),mt=parseFloat($(ul).css('margin-top')),x=$(ul).get(0).firstChild.offsetHeight,v=mt-x,inv;if(dir=='top'){v=mt+x;v=v+1;if(mt==0||v>0)
return;}else{v=v-1;}
inv=(dir=='top')?p.next():p.prev();$(ul).animate({'marginTop':v},500,function(){$(inv).css('visibility','visible');self._showScroll(ul,[dir]);});},_setValues:function(){var id=$(this.element).attr('id'),groups=[],title='';$('div.extension_group_container','#'+id+'_mapper').each(function(){var n=$('span.extension_group_title:first',this);if($(n).is('.custom')){title=$('input',n).val();}else{title=$(n).attr('title');}
if(title){var list=[],v,title=title.toLowerCase();$('li span',this).each(function(){v=$('input',this).val()||$(this).attr('title');if(v){list.push(v);}});groups.push(title+'='+list.join(','));}});var data=groups.join(';').replace(/([a-z]+)=;/g,'').replace(/^[;,]/,'').replace(/[;,]$/,'');$(this.element).val(data).change();},destroy:function(){$.Widget.prototype.destroy.apply(this,arguments);}});})(jQuery);(function($){$.fn.checkList=function(options){this.each(function(){return $.CheckList.init(this,options);});};$.CheckList={options:{valueAsClassName:false,onCheck:$.noop},init:function(el,options){var self=this;$.extend(this.options,options);var ul=document.createElement('ul');var elms=[];if(el.nodeName=='SELECT'){$('option',el).each(function(){elms.push({name:$(this).html(),value:$(this).val(),selected:$(this).prop('selected'),disabled:$(this).prop('disabled')});});}else{$.each(el.value.split(','),function(){elms.push({name:this,value:this});});}
$(el).hide();$(ul).addClass('widget-checklist').insertBefore(el);if($(el).hasClass('buttonlist')){$(ul).wrap('<div class="defaultSkin buttonlist" />');}
$.each(elms,function(){self.createElement(el,ul,this);});if($(el).hasClass('sortable')){$(ul).addClass('sortable').sortable({axis:'y',tolerance:'intersect',update:function(event,ui){self.setValue(el,$(ui.item).parent());},placeholder:"ui-state-highlight"});}},createElement:function(el,ul,n){var self=this,d=document,li=d.createElement('li'),plugin,button,toolbar;$(li).attr({title:n.value}).addClass('ui-widget-content ui-corner-all').appendTo(ul);if($(el).hasClass('buttonlist')){var name=el.name,s=name.split(/[^\w]+/);if(s&&s.length>1){plugin=s[1];}}
if(plugin){toolbar=$('span.profileLayoutContainerToolbar ul','#profileLayoutTable');button=$('span[data-button="'+n.value+'"]',toolbar);}
$('<input type="checkbox" />').addClass('checkbox inline').prop('checked',n.selected).prop('disabled',n.disabled).click(function(){$(this).trigger('checklist:check',this.checked);}).appendTo(li).on('checklist:check',function(e,state){self.setValue(el,ul);if(button){$(button).toggle(state);}
self.options.onCheck.call(self,[this,n]);}).val(n.value);$(li).append('<label class="checkbox inline widget-checklist-'+n.value+'" title="'+n.name+'">'+n.name+'</label>');if(button&&$(el).hasClass('buttonlist')){$('label',li).before($(button).clone());}},setValue:function(el,ul,init){var x=$.map($('input[type="checkbox"]:checked',$('li',ul)),function(n){return $(n).val();});if(el.nodeName=='SELECT'){var options=[];$('option',el).each(function(i){var n=$.inArray(this.value,x);if(n>=0){$(this).attr('selected','selected').prop('selected',true);}else{$(this).removeAttr('selected').prop('selected',false);}});el.name=el.name.replace("[]","");if(x.length===0){$(el).change().removeClass('isdirty').after('<input type="hidden" name="'+el.name+'" value="" class="isdirty" />');}else{$(el).change().next('input[type="hidden"]').remove();el.name+="[]";}}else{$(el).val(x.join(',')).change();}}};})(jQuery);(function($){var previewStyles=['fontFamily','fontSize','fontWeight','textDecoration','textTransform','color','backgroundColor'];function camelCase(str){return str.replace(/^-ms-/,"ms-").replace(/-([\da-z])/gi,function(all,letter){return letter.toUpperCase();});}
$(document).ready(function(){var init=true;$('div.styleformat-list').on('update',function(){var list=[],v="";$('div.styleformat',this).each(function(){var data={},v,p=this,x=0;if($('div.styleformat-item-title input',p).val()){$('input[type="text"], select',p).each(function(){var k=$(this).data('key'),v=$(this).val();if(v!==""){if(k==='element'||k==='classes'||k==='styles'||k==='attributes'){x++;}
data[k]=v;}});}
if(x>0&&!$.isEmptyObject(data)){list.push(data);}});if(list.length){v=JSON.stringify(list);}
if(!init){$('input[type="hidden"]',this).first().val(v).change();}});function updateStyles(n,string){$.each(string.split(';'),function(i,s){var kv=$.trim(s).split(':');if(kv.length>1){var k=$.trim(kv[0]),v=$.trim(kv[1]);if($.inArray(camelCase(k),previewStyles)!==-1){$(n).css(k,v);}}});}
$('input[type="text"], select',$('div.styleformat')).change(function(){$('div.styleformat-list').trigger('update');var title=$('div.styleformat-item-title input',$(this).parents('div.styleformat')),v=$(this).val();if($(this).data('key')==="element"){$(title).attr('class',"");if(/^(h[1-6]|em|strong|code|sub|sup)$/.test(v)){$(title).addClass(v);}}
if($(this).data('key')==="styles"){$(title).attr('style',"");updateStyles(title,v);}}).change();$('a.close.collapse','div.styleformat').on('click.collapse',function(e){$(this).siblings().not('.styleformat-item-title, .close').toggleClass('hide');$(this).toggleClass('icon-chevron-up icon-chevron-down');});$('div.styleformat a.close','div.styleformat-list').not('.plus, .handle, .collapse').click(function(e){if($('div.styleformat-list div.styleformat').length===1){$('input, select',this.parentNode).val("").removeAttr('style').removeAttr('class');$(this.parentNode).hide();}else{$(this.parentNode).remove();}
$('div.styleformat-list').trigger('update');e.preventDefault();});$('a.close.plus','div.styleformat-list').click(function(e){var $item=$(this).prev().clone(true).insertBefore(this).show();$('div',$item).removeClass('hide');$('a.close.collapse',$item).removeClass('icon-chevron-down').addClass('icon-chevron-up');$('input, select',$item).val("").removeAttr('style').removeAttr('class').first().focus();e.preventDefault();});$('div.styleformat-list').sortable({axis:'y',update:function(event,ui){$('div.styleformat-list').trigger('update');},handle:'a.handle',items:'div.styleformat',placeholder:"styleformat-highlight",start:function(event,ui){$(ui.placeholder).height($(ui.item).height());}});if($('div.styleformat','div.styleformat-list').length>1){$('div.styleformat div','div.styleformat-list').not('div.styleformat-item-title').addClass('hide');$('a.close.collapse','div.styleformat-list').removeClass('icon-chevron-up').addClass('icon-chevron-down');}
init=false;if($('input[type="hidden"]','div.styleformat-list').length>1){$('div.styleformat-list').trigger('update');}});})(jQuery);(function($){$(document).ready(function(){$('div.fontlist').on('update',function(){var data={},v="";$('li input[type="checkbox"]:checked',this).each(function(){var s=this.value.split('=');if(s.length===2){data[s[0]]=s[1];}});$('li.font-item',this).not('.hide').each(function(){var k=$('input',this).first().val(),v=$('input',this).last().val();if(k&&v){data[k]=v;}});if(!$.isEmptyObject(data)){v=JSON.stringify(data);}
$('input[type="hidden"]',this).val(v).change();});$('input[type="checkbox"]','div.fontlist').on('click',function(){$('div.fontlist').trigger('update');});$('input[type="text"]','div.fontlist').on('change',function(){$('div.fontlist').trigger('update');});$('a.close','div.fontlist').not('.plus').click(function(e){$(this).parent().remove();$('div.fontlist').trigger('update');e.preventDefault();});$('a.close.plus','div.fontlist').click(function(e){var $item=$('div.fontlist ul li.font-item').last().clone(true).appendTo('div.fontlist ul').removeClass('hide');$('input',$item).val("").first().focus();e.preventDefault();});$('div.fontlist ul li.font-item.hide input').change(function(){$('div.fontlist').trigger('update');});$('div.fontlist ul').sortable({axis:'y',update:function(event,ui){$('div.fontlist').trigger('update');},placeholder:"fontlist-highlight",start:function(event,ui){$(ui.placeholder).height($(ui.item).height()).width($(ui.item).width());},});});})(jQuery);(function($){$(document).ready(function(){$('div.blockformats').on('update',function(){var v=$('li input[type="checkbox"]:checked',this).map(function(){return this.value;}).get().join();$('input[type="hidden"]',this).val(v).change();});$('input[type="checkbox"]','div.blockformats').on('click',function(){$('div.blockformats').trigger('update');});$('div.blockformats ul').sortable({axis:'y',update:function(event,ui){$('div.blockformats').trigger('update');},placeholder:"blockformat-highlight",start:function(event,ui){$(ui.placeholder).height($(ui.item).height()).width($(ui.item).width());}});});})(jQuery);