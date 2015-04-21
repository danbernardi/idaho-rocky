/**

 * On The Fly DOM v2.2.1 - javascript

 * Copyright © 2008-2010. All Rights Reserved.

 * Kris Jonasson(aka Kris Jay),krisjaydesigns.com

 * This is Not a Free Script To Use in Projects.

 * You MUST Leave This Full Notice Intact to Use.

 * Contact me For Full Usage Guidelines and Rules.

 * For Use in the Cmin.us Social Bookmarks Plugin.

 * More Information Available @ www.cmin.us/policy 

 *

 */



function move_box(an,box){var cleft=-70;var ctop=-250;var obj=an;while(obj.offsetParent){cleft+=obj.offsetLeft;ctop+=obj.offsetTop;obj=obj.offsetParent}box.style.left=cleft+'px';ctop+=an.offsetHeight+8;if(document.body.currentStyle&&document.body.currentStyle['marginTop']){ctop+=parseInt(document.body.currentStyle['marginTop'])}box.style.top=ctop+'px'}function show_hide_box(an,width,height,borderStyle){var href=an.href;var boxdiv=document.getElementById(href);if(boxdiv!=null){if(boxdiv.style.display=='none'){move_box(an,boxdiv);boxdiv.style.display='block';bringToFront(boxdiv);if(!boxdiv.contents.contentWindow)boxdiv.contents.src=href}else boxdiv.style.display='none';return false}boxdiv=document.createElement('div');boxdiv.setAttribute('id',href);boxdiv.style.display='block';boxdiv.style.position='absolute';boxdiv.style.width=width+'px';boxdiv.style.height=height+'px';boxdiv.style.border='0px';boxdiv.style.textAlign='right';boxdiv.style.padding='0px';boxdiv.style.background='transparent';document.body.appendChild(boxdiv);bringToFront(boxdiv);var offset=0;var contents=document.createElement('iframe');contents.scrolling='no';contents.overflowX='hidden';contents.overflowY='hidden';contents.frameBorder='0';contents.name='bubble';contents.allowTransparency='true';contents.style.width=width+'px';contents.style.height=(height-offset)+'px';boxdiv.contents=contents;boxdiv.appendChild(contents);move_box(an,boxdiv);if(contents.contentWindow)contents.contentWindow.document.location.replace(href);else contents.src=href;return false}function getAbsoluteDivs(){var arr=new Array();var all_divs=document.body.getElementsByTagName("DIV");var j=0;for(i=0;i<all_divs.length;i++)if(all_divs.item(i).style.position=='absolute'){arr[j]=all_divs.item(i);j++}return arr}function bringToFront(obj){if(!document.getElementsByTagName)return;var divs=getAbsoluteDivs();var max_index=0;var cur_index;for(i=0;i<divs.length;i++){var item=divs[i];if(item==obj||item.style.zIndex=='')continue;cur_index=parseInt(item.style.zIndex);if(max_index<cur_index){max_index=cur_index}}obj.style.zIndex=max_index+1}