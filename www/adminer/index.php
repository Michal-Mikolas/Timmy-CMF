<?php
/** Adminer - Compact database management
* @link http://www.adminer.org/
* @author Jakub Vrana, http://www.vrana.cz/
* @copyright 2007 Jakub Vrana
* @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU General Public License, version 2 (one or other)
* @version 3.3.0-dev
*/error_reporting(6135);$_e=(!ereg('^(unsafe_raw)?$',ini_get("filter.default"))||ini_get("filter.default_flags"));if($_e){foreach(array('_GET','_POST','_COOKIE','_SERVER')as$b){$qe=filter_input_array(constant("INPUT$b"),FILTER_UNSAFE_RAW);if($qe){$$b=$qe;}}}if(isset($_GET["file"])){header("Expires: ".gmdate("D, d M Y H:i:s",time()+365*24*60*60)." GMT");if($_GET["file"]=="favicon.ico"){header("Content-Type: image/x-icon");echo
base64_decode("AAABAAEAEBAQAAEABAAoAQAAFgAAACgAAAAQAAAAIAAAAAEABAAAAAAAwAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA////AAAA/wBhTgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAERERAAAAAAETMzEQAAAAATERExAAAAABMRETEAAAAAExERMQAAAAATERExAAAAABMRETEAAAAAEzMzMREREQATERExEhEhABEzMxEhEREAAREREhERIRAAAAARIRESEAAAAAESEiEQAAAAABEREQAAAAAAAAAAD//9UAwP/VAIB/AACAf/AAgH+kAIB/gACAfwAAgH8AAIABAACAAf8AgAH/AMAA/wD+AP8A/wAIAf+B1QD//9UA");}elseif($_GET["file"]=="default.css"){header("Content-Type: text/css; charset=utf-8");echo'body{color:#000;background:#fff;font:90%/1.25 Verdana,Arial,Helvetica,sans-serif;margin:0;}a{color:blue;}a:visited{color:navy;}a:hover{color:red;}h1{font-size:150%;margin:0;padding:.8em 1em;border-bottom:1px solid #999;font-weight:normal;color:#777;background:#eee;}h2{font-size:150%;margin:0 0 20px -18px;padding:.8em 1em;border-bottom:1px solid #000;color:#000;font-weight:normal;background:#ddf;}h3{font-weight:normal;font-size:130%;margin:1em 0 0;}form{margin:0;}table{margin:1em 20px 0 0;border:0;border-top:1px solid #999;border-left:1px solid #999;font-size:90%;}td,th{border:0;border-right:1px solid #999;border-bottom:1px solid #999;padding:.2em .3em;}th{background:#eee;text-align:left;}thead th{text-align:center;}thead td,thead th{background:#ddf;}fieldset{display:inline;vertical-align:top;padding:.5em .8em;margin:.8em .5em 0 0;border:1px solid #999;}p{margin:.8em 20px 0 0;}img{vertical-align:middle;border:0;}td img{max-width:200px;max-height:200px;}code{background:#eee;}tr:hover td,tr:hover th{background:#ddf;}pre{margin:1em 0 0;}input[type=image]{vertical-align:middle;}.version{color:#777;font-size:67%;}.js .hidden,.nojs .jsonly{display:none;}.nowrap td,.nowrap th,td.nowrap{white-space:pre;}.wrap td{white-space:normal;}.error{color:red;background:#fee;}.error b{background:#fff;font-weight:normal;}.message{color:green;background:#efe;}.error,.message{padding:.5em .8em;margin:1em 20px 0 0;}.char{color:#007F00;}.date{color:#7F007F;}.enum{color:#007F7F;}.binary{color:red;}.odd td{background:#F5F5F5;}.time{color:silver;font-size:70%;}.function{text-align:right;}.number{text-align:right;}.datetime{text-align:right;}.type{width:15ex;width:auto\\9;}.options select{width:20ex;width:auto\\9;}.active{font-weight:bold;}.sqlarea{width:98%;}#menu{position:absolute;margin:10px 0 0;padding:0 0 30px 0;top:2em;left:0;width:19em;overflow:auto;overflow-y:hidden;white-space:nowrap;}#menu p{padding:.8em 1em;margin:0;border-bottom:1px solid #ccc;}#content{margin:2em 0 0 21em;padding:10px 20px 20px 0;}#lang{position:absolute;top:0;left:0;line-height:1.8em;padding:.3em 1em;}#breadcrumb{white-space:nowrap;position:absolute;top:0;left:21em;background:#eee;height:2em;line-height:1.8em;padding:0 1em;margin:0 0 0 -18px;}#loader{position:fixed;top:0;left:18em;z-index:1;}#h1{color:#777;text-decoration:none;font-style:italic;}#version{font-size:67%;color:red;}#schema{margin-left:60px;position:relative;}#schema .table{border:1px solid silver;padding:0 2px;cursor:move;position:absolute;}#schema .references{position:absolute;}.rtl h2{margin:0 -18px 20px 0;}.rtl p,.rtl table,.rtl .error,.rtl .message{margin:1em 0 0 20px;}.rtl #content{margin:2em 21em 0 0;padding:10px 0 20px 20px;}.rtl #breadcrumb{left:auto;right:21em;margin:0 -18px 0 0;}.rtl #lang,.rtl #menu{left:auto;right:0;}@media print{#lang,#menu{display:none;}#content{margin-left:1em;}#breadcrumb{left:1em;}.nowrap td,.nowrap th,td.nowrap{white-space:normal;}}';}elseif($_GET["file"]=="functions.js"){header("Content-Type: text/javascript; charset=utf-8");?>

function
toggle(id){var
el=document.getElementById(id);el.className=(el.className=='hidden'?'':'hidden');return
true;}
function
cookie(assign,days){var
date=new
Date();date.setDate(date.getDate()+days);document.cookie=assign+'; expires='+date;}
function
verifyVersion(){cookie('adminer_version=0',1);var
script=document.createElement('script');script.src=location.protocol+'//www.adminer.org/version.php';document.body.appendChild(script);}
function
selectValue(select){var
selected=select.options[select.selectedIndex];return((selected.attributes.value||{}).specified?selected.value:selected.text);}
function
formCheck(el,name){var
elems=el.form.elements;for(var
i=0;i<elems.length;i++){if(name.test(elems[i].name)){elems[i].checked=el.checked;}}}
function
formUncheck(id){document.getElementById(id).checked=false;}
function
formChecked(el,name){var
checked=0;var
elems=el.form.elements;for(var
i=0;i<elems.length;i++){if(name.test(elems[i].name)&&elems[i].checked){checked++;}}return
checked;}
function
tableClick(event){var
el=event.target||event.srcElement;while(!/^tr$/i.test(el.tagName)){if(/^(table|a|input|textarea)$/i.test(el.tagName)){return;}el=el.parentNode;}el=el.firstChild.firstChild;el.click&&el.click();el.onclick&&el.onclick();}
function
setHtml(id,html){var
el=document.getElementById(id);if(el){if(html==undefined){el.parentNode.innerHTML='&nbsp;';}else{el.innerHTML=html;}}}
function
nodePosition(el){var
pos=0;while(el=el.previousSibling){pos++;}return
pos;}
function
pageClick(href,page,event){if(!isNaN(page)&&page){href+=(page!=1?'&page='+(page-1):'');if(!ajaxSend(href)){location.href=href;}}}
function
selectAddRow(field){field.onchange=function(){};var
row=field.parentNode.cloneNode(true);var
selects=row.getElementsByTagName('select');for(var
i=0;i<selects.length;i++){selects[i].name=selects[i].name.replace(/[a-z]\[\d+/,'$&1');selects[i].selectedIndex=0;}var
inputs=row.getElementsByTagName('input');if(inputs.length){inputs[0].name=inputs[0].name.replace(/[a-z]\[\d+/,'$&1');inputs[0].value='';inputs[0].className='';}field.parentNode.parentNode.appendChild(row);}
function
bodyKeydown(event,button){var
target=event.target||event.srcElement;if(event.ctrlKey&&(event.keyCode==13||event.keyCode==10)&&!event.altKey&&!event.metaKey&&/select|textarea|input/i.test(target.tagName)){
target.blur();if(!ajaxForm(target.form,(button?button+'=1':''))){if(button){target.form[button].click();}else{target.form.submit();}}return
false;}return
true;}
function
editingKeydown(event){if((event.keyCode==40||event.keyCode==38)&&event.ctrlKey&&!event.altKey&&!event.metaKey){
var
target=event.target||event.srcElement;var
sibling=(event.keyCode==40?'nextSibling':'previousSibling');var
el=target.parentNode.parentNode[sibling];if(el&&(/^tr$/i.test(el.tagName)||(el=el[sibling]))&&/^tr$/i.test(el.tagName)&&(el=el.childNodes[nodePosition(target.parentNode)])&&(el=el.childNodes[nodePosition(target)])){el.focus();}return
false;}if(event.shiftKey&&!bodyKeydown(event,'insert')){eventStop(event);return
false;}return
true;}
function
functionChange(select){var
input=select.form[select.name.replace(/^function/,'fields')];if(selectValue(select)){if(input.origMaxLength===undefined){input.origMaxLength=input.maxLength;}input.removeAttribute('maxlength');}else
if(input.origMaxLength>=0){input.maxLength=input.origMaxLength;}}
function
ajax(url,callback,data){var
xmlhttp=(window.XMLHttpRequest?new
XMLHttpRequest():(window.ActiveXObject?new
ActiveXObject('Microsoft.XMLHTTP'):false));if(xmlhttp){xmlhttp.open((data?'POST':'GET'),url);if(data){xmlhttp.setRequestHeader('Content-Type','application/x-www-form-urlencoded');}xmlhttp.setRequestHeader('X-Requested-With','XMLHttpRequest');xmlhttp.onreadystatechange=function(){if(xmlhttp.readyState==4){callback(xmlhttp);}};xmlhttp.send(data);}return
xmlhttp;}
function
ajaxSetHtml(url){return
ajax(url,function(xmlhttp){if(xmlhttp.status){var
data=eval('('+xmlhttp.responseText+')');for(var
key
in
data){setHtml(key,data[key]);}}});}var
originalFavicon=(document.getElementById('favicon')||{}).href;
function
replaceFavicon(href){var
favicon=document.getElementById('favicon');if(favicon){favicon.href=href;favicon.parentNode.appendChild(favicon);}}var
ajaxState=0;
function
ajaxSend(url,data,popState,noscroll){if(!history.pushState){return
false;}var
currentState=++ajaxState;onblur=function(){replaceFavicon(location.pathname+'?file=loader.gif&amp;version=3.3.0-dev');};setHtml('loader','<img src="'+location.pathname+'?file=loader.gif&amp;version=3.3.0-dev" alt="">');return
ajax(url,function(xmlhttp){if(currentState==ajaxState){var
title=xmlhttp.getResponseHeader('X-AJAX-Title');if(title){document.title=decodeURIComponent(title);}var
redirect=xmlhttp.getResponseHeader('X-AJAX-Redirect');if(redirect){return
ajaxSend(redirect,'',popState);}onblur=function(){};replaceFavicon(originalFavicon);if(!xmlhttp.status){setHtml('loader','');}else{if(!popState){if(data||url!=location.href){history.pushState(data,'',url);}}if(!noscroll){scrollTo(0,0);}setHtml('content',xmlhttp.responseText);var
content=document.getElementById('content');var
scripts=content.getElementsByTagName('script');var
length=scripts.length;
for(var
i=0;i<length;i++){var
script=document.createElement('script');script.text=scripts[i].text;content.appendChild(script);}var
as=document.getElementById('menu').getElementsByTagName('a');var
href=location.href.replace(/(&(sql=|dump=|(select|table)=[^&]*)).*/,'$1');for(var
i=0;i<as.length;i++){as[i].className=(href==as[i].href?'active':'');}var
dump=document.getElementById('dump');if(dump){var
match=/&(select|table)=([^&]+)/.exec(href);dump.href=dump.href.replace(/[^=]+$/,'')+(match?match[2]:'');}
if(window.jush){jush.highlight_tag('code',0);}}}},data);}
onpopstate=function(event){if((ajaxState||event.state)&&!/#/.test(location.href)){ajaxSend(location.href,(event.state&&confirm(areYouSure)?event.state:''),1);}else{ajaxState++;}};
function
ajaxForm(form,data,noscroll){if((/&(database|scheme|create|view|sql|user|dump|call)=/.test(location.href)&&!/\./.test(data))||(form.onsubmit&&form.onsubmit()===false)){
return
false;}var
params=[];for(var
i=0;i<form.elements.length;i++){var
el=form.elements[i];if(/file/i.test(el.type)&&el.value){return
false;}else
if(el.name&&(!/checkbox|radio|submit|file/i.test(el.type)||el.checked)){params.push(encodeURIComponent(el.name)+'='+encodeURIComponent(/select/i.test(el.tagName)?selectValue(el):el.value));}}if(data){params.push(data);}if(form.method=='post'){return
ajaxSend((/\?/.test(form.action)?form.action:location.href),params.join('&'),noscroll);}return
ajaxSend((form.action||location.href).replace(/\?.*/,'')+'?'+params.join('&'),noscroll);}
function
selectDblClick(td,event,text){if(/input|textarea/i.test(td.firstChild.tagName)){return;}var
original=td.innerHTML;var
input=document.createElement(text?'textarea':'input');input.onkeydown=function(event){if(!event){event=window.event;}if(event.keyCode==27&&!(event.ctrlKey||event.shiftKey||event.altKey||event.metaKey)){
td.innerHTML=original;}};var
pos=event.rangeOffset;var
value=td.firstChild.alt||td.textContent||td.innerText;input.style.width=Math.max(td.clientWidth-14,20)+'px';
if(text){var
rows=1;value.replace(/\n/g,function(){rows++;});input.rows=rows;}if(value=='\u00A0'||td.getElementsByTagName('i').length){
value='';}if(document.selection){var
range=document.selection.createRange();range.moveToPoint(event.clientX,event.clientY);var
range2=range.duplicate();range2.moveToElementText(td);range2.setEndPoint('EndToEnd',range);pos=range2.text.length;}td.innerHTML='';td.appendChild(input);input.focus();if(text==2){
return
ajax(location.href+'&'+encodeURIComponent(td.id)+'=',function(xmlhttp){if(xmlhttp.status){input.value=xmlhttp.responseText;input.name=td.id;}});}input.value=value;input.name=td.id;input.selectionStart=pos;input.selectionEnd=pos;if(document.selection){var
range=document.selection.createRange();range.moveEnd('character',-input.value.length+pos);range.select();}}
function
bodyClick(event,db,ns){if(event.button||event.ctrlKey||event.shiftKey||event.altKey||event.metaKey){return;}if(event.getPreventDefault?event.getPreventDefault():event.returnValue===false){return
false;}var
el=event.target||event.srcElement;if(/^a$/i.test(el.parentNode.tagName)){el=el.parentNode;}if(/^a$/i.test(el.tagName)&&!/:|#|&download=/i.test(el.getAttribute('href'))&&/[&?]username=/.test(el.href)){var
match=/&db=([^&]*)/.exec(el.href);var
match2=/&ns=([^&]*)/.exec(el.href);return!(db==(match?match[1]:'')&&ns==(match2?match2[1]:'')&&ajaxSend(el.href));}if(/^input$/i.test(el.tagName)&&/image|submit/.test(el.type)){return!ajaxForm(el.form,(el.name?encodeURIComponent(el.name)+(el.type=='image'?'.x':'')+'=1':''),el.type=='image');}return
true;}
function
eventStop(event){if(event.stopPropagation){event.stopPropagation();}else{event.cancelBubble=true;}}
var
jushRoot=location.protocol + '//www.adminer.org/static/';

function
bodyLoad(version){if(history.state!==undefined){
onpopstate(history);}if(jushRoot){var
script=document.createElement('script');script.src=jushRoot+'jush.js';script.onload=function(){if(window.jush){
jush.create_links=' target="_blank" rel="noreferrer"';jush.urls.sql_sqlset=jush.urls.sql[0]=jush.urls.sqlset[0]=jush.urls.sqlstatus[0]='http://dev.mysql.com/doc/refman/'+version+'/en/$key';var
pgsql='http://www.postgresql.org/docs/'+version+'/static/';jush.urls.pgsql_pgsqlset=jush.urls.pgsql[0]=pgsql+'$key';jush.urls.pgsqlset[0]=pgsql+'runtime-config-$key.html#GUC-$1';jush.style(jushRoot+'jush.css');if(window.jushLinks){jush.custom_links=jushLinks;}jush.highlight_tag('code',0);}};script.onreadystatechange=function(){if(/^(loaded|complete)$/.test(script.readyState)){script.onload();}};document.body.appendChild(script);}}
function
formField(form,name){
for(var
i=0;i<form.length;i++){if(form[i].name==name){return
form[i];}}}
function
typePassword(el,disable){try{el.type=(disable?'text':'password');}catch(e){}}function
loginDriver(driver){var
trs=driver.parentNode.parentNode.parentNode.rows;for(var
i=1;i<trs.length;i++){trs[i].className=(/sqlite/.test(driver.value)?'hidden':'');}}
function
textareaKeydown(target,event){if(!event.shiftKey&&!event.altKey&&!event.ctrlKey&&!event.metaKey){if(event.keyCode==9){

if(target.setSelectionRange){var
start=target.selectionStart;var
scrolled=target.scrollTop;target.value=target.value.substr(0,start)+'\t'+target.value.substr(target.selectionEnd);target.setSelectionRange(start+1,start+1);target.scrollTop=scrolled;return
false;}else
if(target.createTextRange){document.selection.createRange().text='\t';return
false;}}if(event.keyCode==27){
var
els=target.form.elements;for(var
i=1;i<els.length;i++){if(els[i-1]==target){els[i].focus();break;}}return
false;}}return
true;}var
added='.',rowCount;
function
delimiterEqual(val,a,b){return(val==a+'_'+b||val==a+b||val==a+b.charAt(0).toUpperCase()+b.substr(1));}
function
idfEscape(s){return
s.replace(/`/,'``');}
function
editingNameChange(field){var
name=field.name.substr(0,field.name.length-7);var
type=formField(field.form,name+'[type]');var
opts=type.options;var
candidate;
var
val=field.value;for(var
i=opts.length;i--;){var
match=/(.+)`(.+)/.exec(opts[i].value);if(!match){
if(candidate&&i==opts.length-2&&val==opts[candidate].value.replace(/.+`/,'')&&name=='fields[1]'){
return;}break;}var
table=match[1];var
column=match[2];var
tables=[table,table.replace(/s$/,''),table.replace(/es$/,'')];for(var
j=0;j<tables.length;j++){table=tables[j];if(val==column||val==table||delimiterEqual(val,table,column)||delimiterEqual(val,column,table)){if(candidate){return;}candidate=i;break;}}}if(candidate){type.selectedIndex=candidate;type.onchange();}}
function
editingAddRow(button,allowed,focus){if(allowed&&rowCount>=allowed){return
false;}var
match=/(\d+)(\.\d+)?/.exec(button.name);var
x=match[0]+(match[2]?added.substr(match[2].length):added)+'1';var
row=button.parentNode.parentNode;var
row2=row.cloneNode(true);var
tags=row.getElementsByTagName('select');var
tags2=row2.getElementsByTagName('select');for(var
i=0;i<tags.length;i++){tags2[i].name=tags[i].name.replace(/([0-9.]+)/,x);tags2[i].selectedIndex=tags[i].selectedIndex;}tags=row.getElementsByTagName('input');tags2=row2.getElementsByTagName('input');var
input=tags2[0];
for(var
i=0;i<tags.length;i++){if(tags[i].name=='auto_increment_col'){tags2[i].value=x;tags2[i].checked=false;}tags2[i].name=tags[i].name.replace(/([0-9.]+)/,x);if(/\[(orig|field|comment|default)/.test(tags[i].name)){tags2[i].value='';}if(/\[(has_default)/.test(tags[i].name)){tags2[i].checked=false;}}tags[0].onchange=function(){editingNameChange(tags[0]);};row.parentNode.insertBefore(row2,row.nextSibling);if(focus){input.onchange=function(){editingNameChange(input);};input.focus();}added+='0';rowCount++;return
true;}
function
editingRemoveRow(button){var
field=formField(button.form,button.name.replace(/drop_col(.+)/,'fields$1[field]'));field.parentNode.removeChild(field);button.parentNode.parentNode.style.display='none';return
true;}var
lastType='';
function
editingTypeChange(type){var
name=type.name.substr(0,type.name.length-6);var
text=selectValue(type);for(var
i=0;i<type.form.elements.length;i++){var
el=type.form.elements[i];if(el.name==name+'[length]'&&!((/(char|binary)$/.test(lastType)&&/(char|binary)$/.test(text))||(/(enum|set)$/.test(lastType)&&/(enum|set)$/.test(text)))){el.value='';}if(lastType=='timestamp'&&el.name==name+'[has_default]'&&/timestamp/i.test(formField(type.form,name+'[default]').value)){el.checked=false;}if(el.name==name+'[collation]'){el.className=(/(char|text|enum|set)$/.test(text)?'':'hidden');}if(el.name==name+'[unsigned]'){el.className=(/(int|float|double|decimal)$/.test(text)?'':'hidden');}if(el.name==name+'[on_delete]'){el.className=(/`/.test(text)?'':'hidden');}}}
function
editingLengthFocus(field){var
td=field.parentNode;if(/(enum|set)$/.test(selectValue(td.previousSibling.firstChild))){var
edit=document.getElementById('enum-edit');var
val=field.value;edit.value=(/^'.+','.+'$/.test(val)?val.substr(1,val.length-2).replace(/','/g,"\n").replace(/''/g,"'"):val);td.appendChild(edit);field.style.display='none';edit.style.display='inline';edit.focus();}}
function
editingLengthBlur(edit){var
field=edit.parentNode.firstChild;var
val=edit.value;field.value=(/\n/.test(val)?"'"+val.replace(/\n+$/,'').replace(/'/g,"''").replace(/\n/g,"','")+"'":val);field.style.display='inline';edit.style.display='none';}
function
columnShow(checked,column){var
trs=document.getElementById('edit-fields').getElementsByTagName('tr');for(var
i=0;i<trs.length;i++){trs[i].getElementsByTagName('td')[column].className=(checked?'':'hidden');}}
function
partitionByChange(el){var
partitionTable=/RANGE|LIST/.test(selectValue(el));el.form['partitions'].className=(partitionTable||!el.selectedIndex?'hidden':'');document.getElementById('partition-table').className=(partitionTable?'':'hidden');}
function
partitionNameChange(el){var
row=el.parentNode.parentNode.cloneNode(true);row.firstChild.firstChild.value='';el.parentNode.parentNode.parentNode.appendChild(row);el.onchange=function(){};}
function
foreignAddRow(field){field.onchange=function(){};var
row=field.parentNode.parentNode.cloneNode(true);var
selects=row.getElementsByTagName('select');for(var
i=0;i<selects.length;i++){selects[i].name=selects[i].name.replace(/\]/,'1$&');selects[i].selectedIndex=0;}field.parentNode.parentNode.parentNode.appendChild(row);}
function
indexesAddRow(field){field.onchange=function(){};var
parent=field.parentNode.parentNode;var
row=parent.cloneNode(true);var
selects=row.getElementsByTagName('select');for(var
i=0;i<selects.length;i++){selects[i].name=selects[i].name.replace(/indexes\[\d+/,'$&1');selects[i].selectedIndex=0;}var
inputs=row.getElementsByTagName('input');for(var
i=0;i<inputs.length;i++){inputs[i].name=inputs[i].name.replace(/indexes\[\d+/,'$&1');inputs[i].value='';}parent.parentNode.appendChild(row);}
function
indexesChangeColumn(field,prefix){var
columns=field.parentNode.parentNode.getElementsByTagName('select');var
names=[];for(var
i=0;i<columns.length;i++){var
value=selectValue(columns[i]);if(value){names.push(value);}}field.form[field.name.replace(/\].*/,'][name]')].value=prefix+names.join('_');}
function
indexesAddColumn(field,prefix){field.onchange=function(){indexesChangeColumn(field,prefix);};var
select=field.form[field.name.replace(/\].*/,'][type]')];if(!select.selectedIndex){select.selectedIndex=3;select.onchange();}var
column=field.parentNode.cloneNode(true);select=column.getElementsByTagName('select')[0];select.name=select.name.replace(/\]\[\d+/,'$&1');select.selectedIndex=0;var
input=column.getElementsByTagName('input')[0];input.name=input.name.replace(/\]\[\d+/,'$&1');input.value='';field.parentNode.parentNode.appendChild(column);field.onchange();}var
that,x,y,em,tablePos;
function
schemaMousedown(el,event){that=el;x=event.clientX-el.offsetLeft;y=event.clientY-el.offsetTop;}
function
schemaMousemove(ev){if(that!==undefined){ev=ev||event;var
left=(ev.clientX-x)/
em;var
top=(ev.clientY-y)/
em;var
divs=that.getElementsByTagName('div');var
lineSet={};for(var
i=0;i<divs.length;i++){if(divs[i].className=='references'){var
div2=document.getElementById((divs[i].id.substr(0,4)=='refs'?'refd':'refs')+divs[i].id.substr(4));var
ref=(tablePos[divs[i].title]?tablePos[divs[i].title]:[div2.parentNode.offsetTop
/
em,0]);var
left1=-1;var
isTop=true;var
id=divs[i].id.replace(/^ref.(.+)-.+/,'$1');if(divs[i].parentNode!=div2.parentNode){left1=Math.min(0,ref[1]-left)-1;divs[i].style.left=left1+'em';divs[i].getElementsByTagName('div')[0].style.width=-left1+'em';var
left2=Math.min(0,left-ref[1])-1;div2.style.left=left2+'em';div2.getElementsByTagName('div')[0].style.width=-left2+'em';isTop=(div2.offsetTop+ref[0]*em>divs[i].offsetTop+top*em);}if(!lineSet[id]){var
line=document.getElementById(divs[i].id.replace(/^....(.+)-\d+$/,'refl$1'));var
shift=ev.clientY-y-that.offsetTop;line.style.left=(left+left1)+'em';if(isTop){line.style.top=(line.offsetTop+shift)/
em+'em';}if(divs[i].parentNode!=div2.parentNode){line=line.getElementsByTagName('div')[0];line.style.height=(line.offsetHeight+(isTop?-1:1)*shift)/
em+'em';}lineSet[id]=true;}}}that.style.left=left+'em';that.style.top=top+'em';}}
function
schemaMouseup(ev,db){if(that!==undefined){ev=ev||event;tablePos[that.firstChild.firstChild.firstChild.data]=[(ev.clientY-y)/
em,(ev.clientX-x)/
em];that=undefined;var
s='';for(var
key
in
tablePos){s+='_'+key+':'+Math.round(tablePos[key][0]*10000)/
10000+'x'+Math.round(tablePos[key][1]*10000)/
10000;}s=encodeURIComponent(s.substr(1));var
link=document.getElementById('schema-link');link.href=link.href.replace(/[^=]+$/,'')+s;cookie('adminer_schema-'+db+'='+s,30);}}<?php
}else{header("Content-Type: image/gif");switch($_GET["file"]){case"plus.gif":echo
base64_decode("R0lGODdhEgASAKEAAO7u7gAAAJmZmQAAACwAAAAAEgASAAACIYSPqcvtD00I8cwqKb5v+q8pIAhxlRmhZYi17iPE8kzLBQA7");break;case"cross.gif":echo
base64_decode("R0lGODdhEgASAKEAAO7u7gAAAJmZmQAAACwAAAAAEgASAAACI4SPqcvtDyMKYdZGb355wy6BX3dhlOEx57FK7gtHwkzXNl0AADs=");break;case"up.gif":echo
base64_decode("R0lGODdhEgASAKEAAO7u7gAAAJmZmQAAACwAAAAAEgASAAACIISPqcvtD00IUU4K730T9J5hFTiKEXmaYcW2rgDH8hwXADs=");break;case"down.gif":echo
base64_decode("R0lGODdhEgASAKEAAO7u7gAAAJmZmQAAACwAAAAAEgASAAACIISPqcvtD00I8cwqKb5bV/5cosdMJtmcHca2lQDH8hwXADs=");break;case"arrow.gif":echo
base64_decode("R0lGODlhCAAKAIAAAICAgP///yH5BAEAAAEALAAAAAAIAAoAAAIPBIJplrGLnpQRqtOy3rsAADs=");break;case"loader.gif":echo
base64_decode("R0lGODlhEAAQAPIAAP///wAAAMLCwkJCQgAAAGJiYoKCgpKSkiH/C05FVFNDQVBFMi4wAwEAAAAh/hpDcmVhdGVkIHdpdGggYWpheGxvYWQuaW5mbwAh+QQJCgAAACwAAAAAEAAQAAADMwi63P4wyklrE2MIOggZnAdOmGYJRbExwroUmcG2LmDEwnHQLVsYOd2mBzkYDAdKa+dIAAAh+QQJCgAAACwAAAAAEAAQAAADNAi63P5OjCEgG4QMu7DmikRxQlFUYDEZIGBMRVsaqHwctXXf7WEYB4Ag1xjihkMZsiUkKhIAIfkECQoAAAAsAAAAABAAEAAAAzYIujIjK8pByJDMlFYvBoVjHA70GU7xSUJhmKtwHPAKzLO9HMaoKwJZ7Rf8AYPDDzKpZBqfvwQAIfkECQoAAAAsAAAAABAAEAAAAzMIumIlK8oyhpHsnFZfhYumCYUhDAQxRIdhHBGqRoKw0R8DYlJd8z0fMDgsGo/IpHI5TAAAIfkECQoAAAAsAAAAABAAEAAAAzIIunInK0rnZBTwGPNMgQwmdsNgXGJUlIWEuR5oWUIpz8pAEAMe6TwfwyYsGo/IpFKSAAAh+QQJCgAAACwAAAAAEAAQAAADMwi6IMKQORfjdOe82p4wGccc4CEuQradylesojEMBgsUc2G7sDX3lQGBMLAJibufbSlKAAAh+QQJCgAAACwAAAAAEAAQAAADMgi63P7wCRHZnFVdmgHu2nFwlWCI3WGc3TSWhUFGxTAUkGCbtgENBMJAEJsxgMLWzpEAACH5BAkKAAAALAAAAAAQABAAAAMyCLrc/jDKSatlQtScKdceCAjDII7HcQ4EMTCpyrCuUBjCYRgHVtqlAiB1YhiCnlsRkAAAOwAAAAAAAAAAAA==");break;}}exit;}function
connection(){global$g;return$g;}function
idf_unescape($O){$tb=substr($O,-1);return
str_replace($tb.$tb,$tb,substr($O,1,-1));}function
escape_string($b){return
substr(q($b),1,-1);}function
remove_slashes($sb){if(get_magic_quotes_gpc()){while(list($d,$b)=each($sb)){foreach($b
as$Ma=>$y){unset($sb[$d][$Ma]);if(is_array($y)){$sb[$d][stripslashes($Ma)]=$y;$sb[]=&$sb[$d][stripslashes($Ma)];}else{$sb[$d][stripslashes($Ma)]=($_e?$y:stripslashes($y));}}}}}function
bracket_escape($O,$sf=false){static$Zd=array(':'=>':1',']'=>':2','['=>':3');return
strtr($O,($sf?array_flip($Zd):$Zd));}function
h($I){return
htmlspecialchars(str_replace("\0","",$I),ENT_QUOTES);}function
nbsp($I){return(trim($I)!=""?h($I):"&nbsp;");}function
nl_br($I){return
str_replace("\n","<br>",$I);}function
checkbox($f,$q,$eb,$Yd="",$kd="",$Of=false){static$S=0;$S++;$c="<input type='checkbox' name='$f' value='".h($q)."'".($eb?" checked":"").($kd?" onclick=\"$kd\"":"").($Of?" class='jsonly'":"")." id='checkbox-$S'>";return($Yd!=""?"<label for='checkbox-$S'>$c".h($Yd)."</label>":$c);}function
optionlist($Kc,$Nf=null,$me=false){$c="";foreach($Kc
as$Ma=>$y){$Rd=array($Ma=>$y);if(is_array($y)){$c.='<optgroup label="'.h($Ma).'">';$Rd=$y;}foreach($Rd
as$d=>$b){$c.='<option'.($me||is_string($d)?' value="'.h($d).'"':'').(($me||is_string($d)?(string)$d:$b)===$Nf?' selected':'').'>'.h($b);}if(is_array($y)){$c.='</optgroup>';}}return$c;}function
html_select($f,$Kc,$q="",$Vb=true){if($Vb){return"<select name='".h($f)."'".(is_string($Vb)?" onchange=\"$Vb\"":"").">".optionlist($Kc,$q)."</select>";}$c="";foreach($Kc
as$d=>$b){$c.="<label><input type='radio' name='".h($f)."' value='".h($d)."'".($d==$q?" checked":"").">".h($b)."</label>";}return$c;}function
confirm($Vc="",$Tf=false){return" onclick=\"".($Tf?"eventStop(event); ":"")."return confirm('".lang(0).($Vc?" (' + $Vc + ')":"")."');\"";}function
js_escape($I){return
addcslashes($I,"\r\n'\\/");}function
ini_bool($Mf){$b=ini_get($Mf);return(eregi('^(on|true|yes)$',$b)||(int)$b);}function
sid(){static$c;if(!isset($c)){$c=(SID&&!($_COOKIE&&ini_bool("session.use_cookies")));}return$c;}function
q($I){global$g;return$g->quote($I);}function
get_vals($i,$C=0){global$g;$c=array();$j=$g->query($i);if(is_object($j)){while($a=$j->fetch_row()){$c[]=$a[$C];}}return$c;}function
get_key_vals($i,$F=null){global$g;if(!is_object($F)){$F=$g;}$c=array();$j=$F->query($i);if(is_object($j)){while($a=$j->fetch_row()){$c[$a[0]]=$a[1];}}return$c;}function
get_rows($i,$F=null,$n="<p class='error'>"){global$g;if(!is_object($F)){$F=$g;}$c=array();$j=$F->query($i);if(is_object($j)){while($a=$j->fetch_assoc()){$c[]=$a;}}elseif(!$j&&$g->error&&$n&&defined("PAGE_HEADER")){echo$n.error()."\n";}return$c;}function
unique_array($a,$K){foreach($K
as$w){if(ereg("PRIMARY|UNIQUE",$w["type"])){$c=array();foreach($w["columns"]as$d){if(!isset($a[$d])){continue
2;}$c[$d]=$a[$d];}return$c;}}$c=array();foreach($a
as$d=>$b){if(!preg_match('~^(COUNT\\((\\*|(DISTINCT )?`(?:[^`]|``)+`)\\)|(AVG|GROUP_CONCAT|MAX|MIN|SUM)\\(`(?:[^`]|``)+`\\))$~',$d)){$c[$d]=$b;}}return$c;}function
where($s){global$u;$c=array();foreach((array)$s["where"]as$d=>$b){$c[]=idf_escape(bracket_escape($d,1)).(ereg('\\.',$b)||$u=="mssql"?" LIKE ".exact_value(addcslashes($b,"%_\\")):" = ".exact_value($b));}foreach((array)$s["null"]as$d){$c[]=idf_escape($d)." IS NULL";}return
implode(" AND ",$c);}function
where_check($b){parse_str($b,$ke);remove_slashes(array(&$ke));return
where($ke);}function
where_link($l,$C,$q,$If="="){return"&where%5B$l%5D%5Bcol%5D=".urlencode($C)."&where%5B$l%5D%5Bop%5D=".urlencode((isset($q)?$If:"IS NULL"))."&where%5B$l%5D%5Bval%5D=".urlencode($q);}function
cookie($f,$q){global$vc;$uc=array($f,(ereg("\n",$q)?"":$q),time()+2592000,preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]),"",$vc);if(version_compare(PHP_VERSION,'5.2.0')>=0){$uc[]=true;}return
call_user_func_array('setcookie',$uc);}function
restart_session(){if(!ini_bool("session.use_cookies")){session_start();}}function&get_session($d){return$_SESSION[$d][DRIVER][SERVER][$_GET["username"]];}function
set_session($d,$b){$_SESSION[$d][DRIVER][SERVER][$_GET["username"]]=$b;}function
auth_url($Lb,$G,$Q){global$pa;preg_match('~([^?]*)\\??(.*)~',remove_from_uri(implode("|",array_keys($pa))."|username|".session_name()),$k);return"$k[1]?".(sid()?SID."&":"").($Lb!="server"||$G!=""?urlencode($Lb)."=".urlencode($G)."&":"")."username=".urlencode($Q).($k[2]?"&$k[2]":"");}function
is_ajax(){return($_SERVER["HTTP_X_REQUESTED_WITH"]=="XMLHttpRequest");}function
redirect($ia,$wa=null){if(isset($wa)){restart_session();$_SESSION["messages"][preg_replace('~^[^?]*~','',(isset($ia)?$ia:$_SERVER["REQUEST_URI"]))][]=$wa;}if(isset($ia)){if($ia==""){$ia=".";}header((is_ajax()?"X-AJAX-Redirect":"Location").": $ia");exit;}}function
query_redirect($i,$ia,$wa,$bd=true,$Gf=true,$Xe=false){global$g,$n,$o;if($Gf){$Xe=!$g->query($i);}$wd="";if($i){$wd=$o->messageQuery("$i;");}if($Xe){$n=error().$wd;return
false;}if($bd){redirect($ia,$wa.$wd);}return
true;}function
queries($i=null){global$g;static$pb=array();if(!isset($i)){return
implode(";\n",$pb);}$pb[]=(ereg(';$',$i)?"DELIMITER ;;\n$i;\nDELIMITER ":$i);return$g->query($i);}function
apply_queries($i,$D,$Bf='table'){foreach($D
as$h){if(!queries("$i ".$Bf($h))){return
false;}}return
true;}function
queries_redirect($ia,$wa,$bd){return
query_redirect(queries(),$ia,$wa,$bd,false,!$bd);}function
remove_from_uri($Ya=""){return
substr(preg_replace("~(?<=[?&])($Ya".(SID?"":"|".session_name()).")=[^&]*&~",'',"$_SERVER[REQUEST_URI]&"),0,-1);}function
pagination($Z,$Af){return" ".($Z==$Af?$Z+1:'<a href="'.h(remove_from_uri("page").($Z?"&page=$Z":"")).'">'.($Z+1)."</a>");}function
get_file($d,$_d=false){$Ha=$_FILES[$d];if(!$Ha||$Ha["error"]){return$Ha["error"];}$c=file_get_contents($_d&&ereg('\\.gz$',$Ha["name"])?"compress.zlib://$Ha[tmp_name]":($_d&&ereg('\\.bz2$',$Ha["name"])?"compress.bzip2://$Ha[tmp_name]":$Ha["tmp_name"]));if($_d){$Sb=substr($c,0,3);if(function_exists("iconv")&&ereg("^\xFE\xFF|^\xFF\xFE",$Sb,$ag)){$c=iconv("utf-16","utf-8",$c);}elseif($Sb=="\xEF\xBB\xBF"){$c=substr($c,3);}}return$c;}function
upload_error($n){$Fe=($n==UPLOAD_ERR_INI_SIZE?ini_get("upload_max_filesize"):null);return($n?lang(1).($Fe?" ".lang(2,$Fe):""):lang(3));}function
odd($c=' class="odd"'){static$l=0;if(!$c){$l=-1;}return($l++%
2?$c:'');}function
json_row($d,$b=null){static$Ca=true;if($Ca){echo"{";}if($d!=""){echo($Ca?"":",")."\n\t\"".addcslashes($d,"\r\n\"\\").'": '.(isset($b)?'"'.addcslashes($b,"\r\n\"\\").'"':'undefined');$Ca=false;}else{echo"\n}\n";$Ca=true;}}function
is_utf8($b){return(preg_match('~~u',$b)&&!preg_match('~[\\0-\\x8\\xB\\xC\\xE-\\x1F]~',$b));}function
repeat_pattern($da,$X){return
str_repeat("$da{0,65535}",$X/65535)."$da{0,".($X
%
65535)."}";}function
shorten_utf8($I,$X=80,$Lf=""){if(!preg_match("(^(".repeat_pattern("[\t\r\n -\x{FFFF}]",$X).")($)?)u",$I,$k)){preg_match("(^(".repeat_pattern("[\t\r\n -~]",$X).")($)?)",$I,$k);}return
h($k[1]).$Lf.(isset($k[2])?"":"<i>...</i>");}function
friendly_url($b){return
preg_replace('~[^a-z0-9_]~i','-',$b);}function
hidden_fields($sb,$Uf=array()){while(list($d,$b)=each($sb)){if(is_array($b)){foreach($b
as$Ma=>$y){$sb[$d."[$Ma]"]=$y;}}elseif(!in_array($d,$Uf)){echo'<input type="hidden" name="'.h($d).'" value="'.h($b).'">';}}}function
hidden_fields_get(){echo(sid()?'<input type="hidden" name="'.session_name().'" value="'.h(session_id()).'">':''),(SERVER!==null?'<input type="hidden" name="'.DRIVER.'" value="'.h(SERVER).'">':""),'<input type="hidden" name="username" value="'.h($_GET["username"]).'">';}function
column_foreign_keys($h){global$o;$c=array();foreach($o->foreignKeys($h)as$A){foreach($A["source"]as$b){$c[$b][]=$A;}}return$c;}function
enum_input($z,$Sa,$e,$q,$hc=null){global$o;preg_match_all("~'((?:[^']|'')*)'~",$e["length"],$sa);$c=(isset($hc)?"<label><input type='$z'$Sa value='$hc'".((is_array($q)?in_array($hc,$q):$q===0)?" checked":"")."><i>".lang(4)."</i></label>":"");foreach($sa[1]as$l=>$b){$b=stripcslashes(str_replace("''","'",$b));$eb=(is_int($q)?$q==$l+1:(is_array($q)?in_array($l+1,$q):$q===$b));$c.=" <label><input type='$z'$Sa value='".($l+1)."'".($eb?' checked':'').'>'.h($o->editVal($b,$e)).'</label>';}return$c;}function
input($e,$q,$M){global$R,$o,$u;$f=h(bracket_escape($e["field"]));echo"<td class='function'>";$ze=($u=="mssql"&&$e["auto_increment"]);if($ze&&!$_POST["save"]){$M=null;}$ca=(isset($_GET["select"])||$ze?array("orig"=>lang(5)):array())+$o->editFunctions($e);$Sa=" name='fields[$f]'";if($e["type"]=="enum"){echo
nbsp($ca[""])."<td>".$o->editInput($_GET["edit"],$e,$Sa,$q);}else{$Ca=0;foreach($ca
as$d=>$b){if($d===""||!$b){break;}$Ca++;}$Vb=($Ca?" onchange=\"var f = this.form['function[".js_escape($f)."]']; if ($Ca > f.selectedIndex) f.selectedIndex = $Ca;\"":"");$Sa.=$Vb;echo(count($ca)>1?html_select("function[$f]",$ca,!isset($M)||in_array($M,$ca)||isset($ca[$M])?$M:"","functionChange(this);"):nbsp(reset($ca))).'<td>';$ye=$o->editInput($_GET["edit"],$e,$Sa,$q);if($ye!=""){echo$ye;}elseif($e["type"]=="set"){preg_match_all("~'((?:[^']|'')*)'~",$e["length"],$sa);foreach($sa[1]as$l=>$b){$b=stripcslashes(str_replace("''","'",$b));$eb=(is_int($q)?($q>>$l)&1:in_array($b,explode(",",$q),true));echo" <label><input type='checkbox' name='fields[$f][$l]' value='".(1<<$l)."'".($eb?' checked':'')."$Vb>".h($o->editVal($b,$e)).'</label>';}}elseif(ereg('blob|bytea|raw|file',$e["type"])&&ini_bool("file_uploads")){echo"<input type='file' name='fields-$f'$Vb>";}elseif(ereg('text|lob',$e["type"])){echo"<textarea ".($u!="sqlite"||ereg("\n",$q)?"cols='50' rows='12'":"cols='30' rows='1' style='height: 1.2em;'")."$Sa>".h($q).'</textarea>';}else{$Ad=(!ereg('int',$e["type"])&&preg_match('~^(\\d+)(,(\\d+))?$~',$e["length"],$k)?((ereg("binary",$e["type"])?2:1)*$k[1]+($k[3]?1:0)+($k[2]&&!$e["unsigned"]?1:0)):($R[$e["type"]]?$R[$e["type"]]+($e["unsigned"]?0:1):0));echo"<input value='".h($q)."'".($Ad?" maxlength='$Ad'":"").(ereg('char|binary',$e["type"])&&$Ad>20?" size='40'":"")."$Sa>";}}}function
process_input($e){global$o;$O=bracket_escape($e["field"]);$M=$_POST["function"][$O];$q=$_POST["fields"][$O];if($e["type"]=="enum"){if($q==-1){return
false;}if($q==""){return"NULL";}return+$q;}if($e["auto_increment"]&&$q==""){return
null;}if($M=="orig"){return($e["on_update"]=="CURRENT_TIMESTAMP"?idf_escape($e["field"]):false);}if($M=="NULL"){return"NULL";}if($e["type"]=="set"){return
array_sum((array)$q);}if(ereg('blob|bytea|raw|file',$e["type"])&&ini_bool("file_uploads")){$Ha=get_file("fields-$O");if(!is_string($Ha)){return
false;}return
q($Ha);}return$o->processInput($e,$q,$M);}function
search_tables(){global$o,$g;$_GET["where"][0]["op"]="LIKE %%";$_GET["where"][0]["val"]=$_POST["query"];$ua=false;foreach(table_status()as$h=>$E){$f=$o->tableName($E);if(isset($E["Engine"])&&$f!=""&&(!$_POST["tables"]||in_array($h,$_POST["tables"]))){$j=$g->query("SELECT".limit("1 FROM ".table($h)," WHERE ".implode(" AND ",$o->selectSearchProcess(fields($h),array())),1));if($j->fetch_row()){if(!$ua){echo"<ul>\n";$ua=true;}echo"<li><a href='".h(ME."select=".urlencode($h)."&where[0][op]=".urlencode($_GET["where"][0]["op"])."&where[0][val]=".urlencode($_GET["where"][0]["val"]))."'>$f</a>\n";}}}echo($ua?"</ul>":"<p class='message'>".lang(6))."\n";}function
dump_headers($Rc,$Ld=false){global$o;$c=$o->dumpHeaders($Rc,$Ld);$Qa=$_POST["output"];if($Qa!="text"){header("Content-Disposition: attachment; filename=".friendly_url($Rc!=""?$Rc:(SERVER!=""?SERVER:"localhost")).".$c".($Qa!="file"&&!ereg('[^0-9a-z]',$Qa)?".$Qa":""));}session_write_close();return$c;}function
dump_csv($a){foreach($a
as$d=>$b){if(preg_match("~[\"\n,;\t]~",$b)||$b===""){$a[$d]='"'.str_replace('"','""',$b).'"';}}echo
implode(($_POST["format"]=="csv"?",":($_POST["format"]=="tsv"?"\t":";")),$a)."\r\n";}function
apply_sql_function($M,$C){return($M?($M=="unixepoch"?"DATETIME($C, '$M')":($M=="count distinct"?"COUNT(DISTINCT ":strtoupper("$M("))."$C)"):$C);}function
password_file(){$Uc=ini_get("upload_tmp_dir");if(!$Uc){if(function_exists('sys_get_temp_dir')){$Uc=sys_get_temp_dir();}else{$ka=@tempnam("","");if(!$ka){return
false;}$Uc=dirname($ka);unlink($ka);}}$ka="$Uc/adminer.key";$c=@file_get_contents($ka);if($c){return$c;}$Ra=@fopen($ka,"w");if($Ra){$c=md5(uniqid(mt_rand(),true));fwrite($Ra,$c);fclose($Ra);}return$c;}function
is_mail($_f){$Je='[-a-z0-9!#$%&\'*+/=?^_`{|}~]';$tc='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';$da="$Je+(\\.$Je+)*@($tc?\\.)+$tc";return
preg_match("(^$da(,\\s*$da)*\$)i",$_f);}function
is_url($I){$tc='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';return(preg_match("~^(https?)://($tc?\\.)+$tc(:\\d+)?(/.*)?(\\?.*)?(#.*)?\$~i",$I,$k)?strtolower($k[1]):"");}function
print_fieldset($S,$Sf,$Rf=false,$kd=""){echo"<fieldset><legend><a href='#fieldset-$S' onclick=\"$kd"."return !toggle('fieldset-$S');\">$Sf</a></legend><div id='fieldset-$S'".($Rf?"":" class='hidden'").">\n";}function
bold($Xf){return($Xf?" class='active'":"");}global$o,$g,$pa,$Jb,$Eb,$n,$ca,$nb,$vc,$gc,$u,$la,$Ob,$hb,$Pa,$P,$V,$R,$lb,$kc;if(!isset($_SERVER["REQUEST_URI"])){$_SERVER["REQUEST_URI"]=$_SERVER["ORIG_PATH_INFO"].($_SERVER["QUERY_STRING"]!=""?"?$_SERVER[QUERY_STRING]":"");}$vc=$_SERVER["HTTPS"]&&strcasecmp($_SERVER["HTTPS"],"off");@ini_set("session.use_trans_sid",false);if(!defined("SID")){session_name("adminer_sid");$uc=array(0,preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]),"",$vc);if(version_compare(PHP_VERSION,'5.2.0')>=0){$uc[]=true;}call_user_func_array('session_set_cookie_params',$uc);session_start();}remove_slashes(array(&$_GET,&$_POST,&$_COOKIE));if(function_exists("set_magic_quotes_runtime")){set_magic_quotes_runtime(false);}@set_time_limit(0);@ini_set("zend.ze1_compatibility_mode",false);@ini_set("precision",20);$Ob=array('en'=>'English','cs'=>'Čeština','sk'=>'Slovenčina','nl'=>'Nederlands','es'=>'Español','de'=>'Deutsch','fr'=>'Français','it'=>'Italiano','et'=>'Eesti','hu'=>'Magyar','pl'=>'Polski','ca'=>'Català','pt'=>'Português','sl'=>'Slovenski','lt'=>'Lietuvių','tr'=>'Türkçe','ro'=>'Limba Română','ru'=>'Русский язык','zh'=>'简体中文','zh-tw'=>'繁體中文','ja'=>'日本語','ta'=>'த‌மிழ்','ar'=>'العربية',);function
get_lang(){global$la;return$la;}function
lang($O,$ja=null){global$la,$V;$oc=$V[$O];if(is_array($oc)){$pc=($ja==1?0:($la=='cs'||$la=='sk'?($ja&&$ja<5?1:2):($la=='fr'?(!$ja?0:1):($la=='pl'?($ja
%
10>1&&$ja
%
10<5&&$ja/10
%
10!=1?1:2):($la=='sl'?($ja
%
100==1?0:($ja
%
100==2?1:($ja
%
100==3||$ja
%
100==4?2:3))):($la=='lt'?($ja
%
10==1&&$ja
%
100!=11?0:($ja
%
10>1&&$ja/10
%
10!=1?1:2)):($la=='ru'?($ja
%
10==1&&$ja
%
100!=11?0:($ja
%
10>1&&$ja
%
10<5&&$ja/10
%
10!=1?1:2)):1)))))));$oc=$oc[$pc];}$Ge=func_get_args();array_shift($Ge);return
vsprintf((isset($oc)?$oc:$O),$Ge);}function
switch_lang(){global$la,$Ob;echo"<form action=''>\n<div id='lang'>";hidden_fields($_GET,array('lang'));echo
lang(7).": ".html_select("lang",$Ob,$la,"var loc = location.search.replace(/[?&]lang=[^&]*/, ''); location.search = loc + (loc ? '&' : '') + 'lang=' + this.value;")," <input type='submit' value='".lang(8)."' class='hidden'>\n","</div>\n</form>\n";}if(isset($_GET["lang"])){$_COOKIE["adminer_lang"]=$_GET["lang"];$_SESSION["lang"]=$_GET["lang"];}$la="en";if(isset($Ob[$_COOKIE["adminer_lang"]])){cookie("adminer_lang",$_COOKIE["adminer_lang"]);$la=$_COOKIE["adminer_lang"];}elseif(isset($Ob[$_SESSION["lang"]])){$la=$_SESSION["lang"];}else{$ad=array();preg_match_all('~([-a-z]+)(;q=([0-9.]+))?~',str_replace("_","-",strtolower($_SERVER["HTTP_ACCEPT_LANGUAGE"])),$sa,PREG_SET_ORDER);foreach($sa
as$k){$ad[$k[1]]=(isset($k[3])?$k[3]:1);}arsort($ad);foreach($ad
as$d=>$aa){if(isset($Ob[$d])){$la=$d;break;}$d=preg_replace('~-.*~','',$d);if(!isset($ad[$d])&&isset($Ob[$d])){$la=$d;break;}}}switch($la){case"en":$V=array('Are you sure?','Unable to upload a file.','Maximum allowed file size is %sB.','File does not exist.','empty','original','No tables.','Language','Use','Please use one of the extensions %s.','File exists.','User types','Numbers','Date and time','Strings','Binary','Network','Geometry','Lists','System','Server','Username','Password','Login','Permanent login','Select data','Show structure','Alter view','Alter table','New item','Last page','Edit',array('%d byte','%d bytes'),'Select','Functions','Aggregation','Search','anywhere','Sort','descending','Limit','Text length','Action','SQL command','open','save','Alter database','Alter schema','Create schema','Database schema','Privileges','Dump','Logout','database','schema','Create new table','select','ltr','Resend POST data?','Invalid CSRF token. Send the form again.','Logout successful.','Session support must be enabled.','Session expired, please login again.','Invalid credentials.','No extension','None of the supported PHP extensions (%s) are available.','Too big POST data. Reduce the data or increase the %s configuration directive.','Database','Invalid database.','Databases have been dropped.','Select database','Create new database','Process list','Variables','Status','%s version: %s through PHP extension %s','Logged as: %s','Collation','Tables','Drop','Refresh','Schema','Invalid schema.','No rows.','%.3f s','Foreign keys','collation','ON DELETE','Column name','Parameter name','Type','Length','Options','Auto Increment','Default values','Comment','Add next','Move up','Move down','Remove','View','Table','Column','Indexes','Alter indexes','Source','Target','ON UPDATE','Alter','Add foreign key','Triggers','Add trigger','Permanent link','Export','Output','Format','Routines','Events','Data','edit','Create user','Error in query',array('%d row','%d rows'),array('Query executed OK, %d row affected.','Query executed OK, %d rows affected.'),'No commands to execute.',array('%d query executed OK.','%d queries executed OK.'),'File upload','File uploads are disabled.','Execute','Stop on error','Show only errors','From server','Webserver file %s','Run file','History','Clear','Edit all','Item has been deleted.','Item has been updated.','Item%s has been inserted.','Insert','Save','Save and continue edit','Save and insert next','Delete','Table has been dropped.','Table has been altered.','Table has been created.','Create table','Maximum number of allowed fields exceeded. Please increase %s and %s.','Table name','engine','Partition by','Partitions','Partition name','Values','Indexes have been altered.','Index Type','Column (length)','Name','Database has been dropped.','Database has been renamed.','Database has been created.','Database has been altered.','Create database','Schema has been dropped.','Schema has been created.','Schema has been altered.','Call',array('Routine has been called, %d row affected.','Routine has been called, %d rows affected.'),'Foreign key has been dropped.','Foreign key has been altered.','Foreign key has been created.','Source and target columns must have the same data type, there must be an index on the target columns and referenced data must exist.','Foreign key','Target table','Change','Add column','View has been dropped.','View has been altered.','View has been created.','Create view','Event has been dropped.','Event has been altered.','Event has been created.','Alter event','Create event','Start','End','Every','On completion preserve','Routine has been dropped.','Routine has been altered.','Routine has been created.','Alter function','Alter procedure','Create function','Create procedure','Return type','Sequence has been dropped.','Sequence has been created.','Sequence has been altered.','Alter sequence','Create sequence','Type has been dropped.','Type has been created.','Alter type','Create type','Trigger has been dropped.','Trigger has been altered.','Trigger has been created.','Alter trigger','Create trigger','Time','Event','User has been dropped.','User has been altered.','User has been created.','Hashed','Routine','Grant','Revoke',array('%d process has been killed.','%d processes have been killed.'),'%d in total','Kill',array('%d item has been affected.','%d items have been affected.'),'Double click on a value to modify it.',array('%d row has been imported.','%d rows have been imported.'),'Unable to select the table','Relations','Use edit link to modify this value.','Page','last','whole result','Clone','Import',',','Tables have been truncated.','Tables have been moved.','Tables have been copied.','Tables have been dropped.','Tables and views','Search data in tables','Engine','Data Length','Index Length','Data Free','Rows','Analyze','Optimize','Check','Repair','Truncate','Move to other database','Move','Copy','Sequences','Schedule','At given time',array('%d e-mail has been sent.','%d e-mails have been sent.'));break;case"cs":$V=array('Opravdu?','Nepodařilo se nahrát soubor.','Maximální povolená velikost souboru je %sB.','Soubor neexistuje.','prázdné','původní','Žádné tabulky.','Jazyk','Vybrat','Prosím použijte jednu z koncovek %s.','Soubor existuje.','Uživatelské typy','Čísla','Datum a čas','Řetězce','Binární','Síť','Geometrie','Seznamy','Systém','Server','Uživatel','Heslo','Přihlásit se','Trvalé přihlášení','Vypsat data','Zobrazit strukturu','Pozměnit pohled','Pozměnit tabulku','Nová položka','Poslední stránka','Upravit',array('%d bajt','%d bajty','%d bajtů'),'Vypsat','Funkce','Agregace','Vyhledat','kdekoliv','Seřadit','sestupně','Limit','Délka textů','Akce','SQL příkaz','otevřít','uložit','Pozměnit databázi','Pozměnit schéma','Vytvořit schéma','Schéma databáze','Oprávnění','Export','Odhlásit','databáze','schéma','Vytvořit novou tabulku','vypsat','ltr','Znovu odeslat POST data?','Neplatný token CSRF. Odešlete formulář znovu.','Odhlášení proběhlo v pořádku.','Session proměnné musí být povolené.','Session vypršela, přihlašte se prosím znovu.','Neplatné přihlašovací údaje.','Žádná extenze','Není dostupná žádná z podporovaných PHP extenzí (%s).','Příliš velká POST data. Zmenšete data nebo zvyšte hodnotu konfigurační direktivy %s.','Databáze','Nesprávná databáze.','Databáze byly odstraněny.','Vybrat databázi','Vytvořit novou databázi','Seznam procesů','Proměnné','Stav','Verze %s: %s přes PHP extenzi %s','Přihlášen jako: %s','Porovnávání','Tabulky','Odstranit','Obnovit','Schéma','Nesprávné schéma.','Žádné řádky.','%.3f s','Cizí klíče','porovnávání','Při smazání','Název sloupce','Název parametru','Typ','Délka','Volby','Auto Increment','Výchozí hodnoty','Komentář','Přidat další','Přesunout nahoru','Přesunout dolů','Odebrat','Pohled','Tabulka','Sloupec','Indexy','Pozměnit indexy','Zdroj','Cíl','Při změně','Změnit','Přidat cizí klíč','Triggery','Přidat trigger','Trvalý odkaz','Export','Výstup','Formát','Procedury a funkce','Události','Data','upravit','Vytvořit uživatele','Chyba v dotazu',array('%d řádek','%d řádky','%d řádků'),array('Příkaz proběhl v pořádku, byl změněn %d záznam.','Příkaz proběhl v pořádku, byly změněny %d záznamy.','Příkaz proběhl v pořádku, bylo změněno %d záznamů.'),'Žádné příkazy k vykonání.',array('%d příkaz proběhl v pořádku.','%d příkazy proběhly v pořádku.','%d příkazů proběhlo v pořádku.'),'Nahrání souboru','Nahrávání souborů není povoleno.','Provést','Zastavit při chybě','Zobrazit pouze chyby','Ze serveru','Soubor %s na webovém serveru','Spustit soubor','Historie','Vyčistit','Upravit vše','Položka byla smazána.','Položka byla aktualizována.','Položka%s byla vložena.','Vložit','Uložit','Uložit a pokračovat v editaci','Uložit a vložit další','Smazat','Tabulka byla odstraněna.','Tabulka byla změněna.','Tabulka byla vytvořena.','Vytvořit tabulku','Byl překročen maximální povolený počet polí. Zvyšte prosím %s a %s.','Název tabulky','úložiště','Rozdělit podle','Oddíly','Název oddílu','Hodnoty','Indexy byly změněny.','Typ indexu','Sloupec (délka)','Název','Databáze byla odstraněna.','Databáze byla přejmenována.','Databáze byla vytvořena.','Databáze byla změněna.','Vytvořit databázi','Schéma bylo odstraněno.','Schéma bylo vytvořeno.','Schéma bylo změněno.','Zavolat',array('Procedura byla zavolána, byl změněn %d záznam.','Procedura byla zavolána, byly změněny %d záznamy.','Procedura byla zavolána, bylo změněno %d záznamů.'),'Cizí klíč byl odstraněn.','Cizí klíč byl změněn.','Cizí klíč byl vytvořen.','Zdrojové a cílové sloupce musí mít stejný datový typ, nad cílovými sloupci musí být definován index a odkazovaná data musí existovat.','Cizí klíč','Cílová tabulka','Změnit','Přidat sloupec','Pohled byl odstraněn.','Pohled byl změněn.','Pohled byl vytvořen.','Vytvořit pohled','Událost byla odstraněna.','Událost byla změněna.','Událost byla vytvořena.','Pozměnit událost','Vytvořit událost','Začátek','Konec','Každých','Po dokončení zachovat','Procedura byla odstraněna.','Procedura byla změněna.','Procedura byla vytvořena.','Změnit funkci','Změnit proceduru','Vytvořit funkci','Vytvořit proceduru','Návratový typ','Sekvence byla odstraněna.','Sekvence byla vytvořena.','Sekvence byla změněna.','Pozměnit sekvenci','Vytvořit sekvenci','Typ byl odstraněn.','Typ byl vytvořen.','Pozměnit typ','Vytvořit typ','Trigger byl odstraněn.','Trigger byl změněn.','Trigger byl vytvořen.','Změnit trigger','Vytvořit trigger','Čas','Událost','Uživatel byl odstraněn.','Uživatel byl změněn.','Uživatel byl vytvořen.','Zahašované','Procedura','Povolit','Zakázat',array('Byl ukončen %d proces.','Byly ukončeny %d procesy.','Bylo ukončeno %d procesů.'),'%d celkem','Ukončit',array('Byl ovlivněn %d záznam.','Byly ovlivněny %d záznamy.','Bylo ovlivněno %d záznamů.'),'Dvojklikněte na políčko, které chcete změnit.',array('Byl importován %d záznam.','Byly importovány %d záznamy.','Bylo importováno %d záznamů.'),'Nepodařilo se vypsat tabulku','Vztahy','Ke změně této hodnoty použijte odkaz upravit.','Stránka','poslední','celý výsledek','Klonovat','Import',' ','Tabulky byly vyprázdněny.','Tabulky byly přesunuty.','Tabulky byly zkopírovány.','Tabulky byly odstraněny.','Tabulky a pohledy','Vyhledat data v tabulkách','Úložiště','Velikost dat','Velikost indexů','Volné místo','Řádků','Analyzovat','Optimalizovat','Zkontrolovat','Opravit','Vyprázdnit','Přesunout do jiné databáze','Přesunout','Zkopírovat','Sekvence','Plán','V daný čas','teď');break;case"sk":$V=array('Naozaj?','Súbor sa nepodarilo nahrať.','Maximálna povolená veľkosť súboru je %sB.','Súbor neexistuje.','prázdne','originál','Žiadne tabuľky.','Jazyk','Vybrať','Prosím vyberte jednu z koncoviek %s.','Súbor existuje.','Užívateľské typy','Čísla','Dátum a čas','Reťazce','Binárne','Sieť','Geometria','Zoznamy','Systém','Server','Používateľ','Heslo','Prihlásiť sa','Trvalé prihlásenie','Vypísať dáta','Zobraziť štruktúru','Zmeniť pohľad','Zmeniť tabuľku','Nová položka','Posledná stránka','Upraviť',array('%d bajt','%d bajty','%d bajtov'),'Vypísať','Funkcie','Agregácia','Vyhľadať','kdekoľvek','Zotriediť','zostupne','Limit','Dĺžka textov','Akcia','SQL príkaz','otvoriť','uložiť','Zmeniť databázu','Pozmeniť schému','Vytvoriť schému','Schéma databázy','Oprávnenia','Export','Odhlásiť','databáza','schéma','Vytvoriť novú tabuľku','vypísať','ltr','Znovu poslať POST data?','Neplatný token CSRF. Odošlite formulár znova.','Odhlásenie prebehlo v poriadku.','Session premenné musia byť povolené.','Session vypršala, prihláste sa prosím znova.','Neplatné prihlasovacie údaje.','Žiadne rozšírenie','Nie je dostupné žiadne z podporovaných rozšírení (%s).','Príliš veľké POST dáta. Zmenšite dáta alebo zvýšte hodnotu konfiguračej direktívy %s.','Databáza','Nesprávna databáza.','Databázy boli odstránené.','Vybrať databázu','Vytvoriť novú databázu','Zoznam procesov','Premenné','Stav','Verzia %s: %s cez PHP rozšírenie %s','Prihlásený ako: %s','Porovnávanie','Tabuľky','Odstrániť','Obnoviť','Schéma','Neplatné schéma.','Žiadne riadky.','%.3f s','Cudzie kľúče','porovnávanie','ON DELETE','Názov stĺpca','Názov parametra','Typ','Dĺžka','Voľby','Auto Increment','Východzie hodnoty','Komentár','Pridať ďalší','Presunúť hore','Presunúť dolu','Odobrať','Pohľad','Tabuľka','Stĺpec','Indexy','Zmeniť indexy','Zdroj','Cieľ','ON UPDATE','Zmeniť','Pridať cudzí kľúč','Triggery','Pridať trigger','Permanentný odkaz','Export','Výstup','Formát','Procedúry','Udalosti','Dáta','upraviť','Vytvoriť používateľa','Chyba v dotaze',array('%d riadok','%d riadky','%d riadkov'),array('Príkaz prebehol v poriadku, bol zmenený %d záznam.','Príkaz prebehol v poriadku boli zmenené %d záznamy.','Príkaz prebehol v poriadku bolo zmenených %d záznamov.'),'Žiadne príkazy na vykonanie.',array('Bol vykonaný %d dotaz.','Boli vykonané %d dotazy.','Bolo vykonaných %d dotazov.'),'Nahranie súboru','Nahrávánie súborov nie je povolené.','Vykonať','Zastaviť pri chybe','Zobraziť iba chyby','Zo serveru','Súbor %s na webovom serveri','Spustiť súbor','História','Vyčistiť','Upraviť všetko','Položka bola vymazaná.','Položka bola aktualizovaná.','Položka%s bola vložená.','Vložiť','Uložiť','Uložiť a pokračovať v úpravách','Uložiť a vložiť ďalší','Zmazať','Tabuľka bola odstránená.','Tabuľka bola zmenená.','Tabuľka bola vytvorená.','Vytvoriť tabuľku','Bol prekročený maximálny počet povolených polí. Zvýšte prosím %s a %s.','Názov tabuľky','úložisko','Rozdeliť podľa','Oddiely','Názov oddielu','Hodnoty','Indexy boli zmenené.','Typ indexu','Stĺpec (dĺžka)','Názov','Databáza bola odstránená.','Databáza bola premenovaná.','Databáza bola vytvorená.','Databáza bola zmenená.','Vytvoriť databázu','Schéma bola odstránená.','Schéma bola vytvorená.','Schéma bola zmenená.','Zavolať',array('Procedúra bola zavolaná, bol zmenený %d záznam.','Procedúra bola zavolaná, boli zmenené %d záznamy.','Procedúra bola zavolaná, bolo zmenených %d záznamov.'),'Cudzí kľúč bol odstránený.','Cudzí kľúč bol zmenený.','Cudzí kľúč bol vytvorený.','Zdrojové a cieľové stĺpce musia mať rovnaký datový typ, nad cieľovými stĺpcami musí byť definovaný index a odkazované dáta musia existovať.','Cudzí kľúč','Cieľová tabuľka','Zmeniť','Pridať stĺpec','Pohľad bol odstránený.','Pohľad bol zmenený.','Pohľad bol vytvorený.','Vytvoriť pohľad','Udalosť bola odstránená.','Udalosť bola zmenená.','Udalosť bola vytvorená.','Upraviť udalosť','Vytvoriť udalosť','Začiatok','Koniec','Každých','Po dokončení zachovat','Procedúra bola odstránená.','Procedúra bola zmenená.','Procedúra bola vytvorená.','Zmeniť funkciu','Zmeniť procedúru','Vytvoriť funkciu','Vytvoriť procedúru','Návratový typ','Sekvencia bola odstránená.','Sekvencia bola vytvorená.','Sekvencia bola zmenená.','Pozmeniť sekvenciu','Vytvoriť sekvenciu','Typ bol odstránený.','Typ bol vytvorený.','Pozmeniť typ','Vytvoriť typ','Trigger bol odstránený.','Trigger bol zmenený.','Trigger bol vytvorený.','Zmeniť trigger','Vytvoriť trigger','Čas','Udalosť','Používateľ bol odstránený.','Používateľ bol zmenený.','Používateľ bol vytvorený.','Zahašované','Procedúra','Povoliť','Zakázať',array('Bol ukončený %d proces.','Boli ukončené %d procesy.','Bolo ukončených %d procesov.'),'%d celkom','Ukončiť','%d položiek bolo ovplyvnených.','Dvojkliknite na políčko, ktoré chcete zmeniť.',array('Bol importovaný %d záznam.','Boli importované %d záznamy.','Bolo importovaných %d záznamov.'),'Tabuľku sa nepodarilo vypísať','Vzťahy','Pre zmenu tejto hodnoty použite odkaz upraviť.','Stránka','posledný','celý výsledok','Klonovať','Import',' ','Tabuľka bola vyprázdnená.','Tabuľka bola presunutá.','Tabuľky boli skopírované.','Tabuľka bola odstránená.','Tabuľky a pohľady','Vyhľadať dáta v tabuľkách','Typ','Veľkosť dát','Veľkosť indexu','Voľné miesto','Riadky','Analyzovať','Optimalizovať','Skontrolovať','Opraviť','Vyprázdniť','Presunúť do inej databázy','Presunúť','Kopírovať','Sekvencia','Plán','V stanovený čas','HH:MM:SS');break;case"nl":$V=array('Weet u het zeker?','Onmogelijk bestand te uploaden.','Maximum toegelaten bestandsgrootte is %sB.','Bestand niet gevonden.','leeg','origineel','Geen tabellen.','Taal','Gebruik','Gebruik 1 van volgende extensies: %s.','Bestand bestaat reeds.','Gebruikersgedefiniëerde types','Getallen','Datum en tijd','Tekst','Binaire gegevens','Netwerk','Geometrie','Lijsten','Databasesysteem','Server','Gebruikersnaam','Wachtwoord','Inloggen','Blijf aangemeld','Gegevens selecteren','Toon structuur','View aanpassen','Tabel aanpassen','Nieuw item','Laatste pagina','Bewerk',array('%d byte','%d bytes'),'Kies','Functies','Totalen','Zoeken','overal','Sorteren','Aflopend','Beperk','Tekst lengte','Acties','SQL opdracht','openen','opslaan','Database aanpassen','Schema wijzigen','Schema maken','Database schema','Rechten','Exporteer','Uitloggen','database','schema','Nieuwe tabel','kies','ltr','POST data opnieuw verzenden','Ongeldig CSRF token. Verstuur het formulier opnieuw.','Uitloggen geslaagd.','Sessies moeten geactiveerd zijn.','Uw sessie is verlopen. Gelieve opnieuw in te loggen.','Ongeldige logingegevens.','Geen extensie','Geen geldige PHP extensies beschikbaar (%s).','POST-data is te groot. Verklein de hoeveelheid data of verhoog de %s configuratie.','Database','Ongeldige database.','Databases verwijderd.','Database selecteren','Nieuwe database','Proceslijst','Variabelen','Status','%s versie: %s met PHP extensie %s','Aangemeld als: %s','Collatie','Tabellen','Verwijderen','Vernieuwen','Schema','Ongeldig schema.','Geen rijen.','%.3f s','Foreign keys','collation','ON DELETE','Kolomnaam','Parameternaam','Type','Lengte','Opties','Auto nummering','Standaard waarden','Commentaar','Volgende toevoegen','Omhoog','Omlaag','Verwijderen','View','Tabel','Kolom','Indexen','Indexen aanpassen','Bron','Doel','ON UPDATE','Aanpassen','Foreign key aanmaken','Triggers','Trigger aanmaken','Permanente link','Exporteren','Uitvoer','Formaat','Procedures','Events','Data','bewerk','Gebruiker aanmaken','Fout in query',array('%d rij','%d rijen'),array('Query uitgevoerd, %d rij geraakt.','Query uitgevoerd, %d rijen geraakt.'),'Geen opdrachten uit te voeren.',array('%d query succesvol uitgevoerd.','%d querys succesvol uitgevoerd'),'Bestand uploaden','Bestanden uploaden is uitgeschakeld.','Uitvoeren','Stoppen bij fout','Enkel fouten tonen','Van server','Webserver bestand %s','Bestand uitvoeren','Geschiedenis','Wissen','Alles bewerken','Item verwijderd.','Item aangepast.','Item%s toegevoegd.','Toevoegen','Opslaan','Opslaan en verder bewerken','Opslaan, daarna toevoegen','Verwijderen','Tabel verwijderd.','Tabel aangepast.','Tabel aangemaakt.','Tabel aanmaken','Maximum aantal velden bereikt. Verhoog %s en %s.','Tabelnaam','engine','Partitioneren op','Partities','Partitie naam','Waarden','Index aangepast.','Index type','Kolom (lengte)','Naam','Database verwijderd.','Database hernoemd.','Database aangemaakt.','Database aangepast.','Database aanmaken','Schema verwijderd.','Schema aangemaakt.','Schema gewijzigd.','Uitvoeren',array('Procedure uitgevoerd, %d rij geraakt.','Procedure uitgevoerd, %d rijen geraakt.'),'Foreign key verwijderd.','Foreign key aangepast.','Foreign key aangemaakt.','Bron- en doelkolommen moeten van hetzelfde data type zijn, er moet een index bestaan op de gekozen kolommen en er moet gerelateerde data bestaan.','Foreign key','Doeltabel','Veranderen','Kolom toevoegen','View verwijderd.','View aangepast.','View aangemaakt.','View aanmaken','Event werd verwijderd.','Event werd aangepast.','Event werd aangemaakt.','Event aanpassen','Event aanmaken','Start','Stop','Iedere','Bewaren na voltooiing','Procedure verwijderd.','Procedure aangepast.','Procedure aangemaakt.','Functie aanpassen','Procedure aanpassen','Functie aanmaken','Procedure aanmaken','Return type','Sequence verwijderd.','Sequence aangemaakt.','Sequence gewijzigd.','Sequence wijzigen','Sequence maken','Type verwijderd.','Type aangemaakt.','Type wijzigen','Type maken','Trigger verwijderd.','Trigger aangepast.','Trigger aangemaakt.','Trigger aanpassen','Trigger aanmaken','Time','Event','Gebruiker verwijderd.','Gebruiker aangepast.','Gebruiker aangemaakt.','Gehashed','Routine','Toekennen','Intrekken',array('%d proces gestopt.','%d processen gestopt.'),'%d in totaal','Stoppen',array('%d item aangepast.','%d items aangepast.'),'Dubbelklik op een waarde om deze te bewerken.',array('%d rij werd geïmporteerd.','%d rijen werden geïmporteerd.'),'Onmogelijk tabel te selecteren','Relaties','Gebruik de link "bewerk" om deze waarde te wijzigen.','Pagina','laatste','volledig resultaat','Dupliceer','Importeren','.','Tabellen werden geleegd.','Tabellen werden verplaatst.','De tabellen zijn gekopieerd.','Tabellen werden verwijderd.','Tabellen en views','Zoeken in database','Engine','Data lengte','Index lengte','Data Vrij','Rijen','Analyseer','Optimaliseer','Controleer','Herstel','Legen','Verplaats naar andere database','Verplaats','Kopieren','Sequences','Schedule','Op aangegeven tijd','HH:MM:SS');break;case"es":$V=array('Está seguro?','No es posible importar archivo.','Tamaño máximo de archivo es %sB.','Archivo no existe.','ningúno','original','No existen tablas.','Idioma','Usar','Por favor use una de las extensiones %s.','Archivo ya existe.','Tipos definido por el usuario','Números','Fecha y hora','Cadena','Binario','Red','Geometría','Listas','Motor de base de datos','Servidor','Usuario','Contraseña','Login','Guardar contraseña','Visualizar contenido','Mostrar estructura','Modificar vista','Modifique estructura','Nuevo Registro','Ultima página','Modificar',array('%d byte','%d bytes'),'Mostrar','Funciones','Agregaciones','Condición','donde sea','Ordenar','descendiente','Limit','Longitud de texto','Acción','Comando SQL','mostrar','archivo','Modificar Base de datos','Modificar esquema','Crear esquema','Esquema de base de datos','Privilegios','Export','Logout','base de datos','esquema','Nueva tabla','registros','ltr','Volver a enviar POST data?','Token CSRF inválido. Vuelva a enviar los datos del formulario.','Salida exitosa.','Deben estar habilitadas las sesiones.','Sesión expirada, por favor ingrese su clave de nuevo.','Identificacion inválida.','No hay extension','Ninguna de las extensiones PHP soportadas (%s) está disponible.','POST data demasiado grande. Reduzca el tamaño o aumente la directiva de configuración %s.','Base de datos','Base de datos inválida.','Bases de datos eliminadas.','Seleccionar Base de datos','Ingrese nueva base de datos','Lista de procesos','Variables','Estado','Versión %s: %s a través de extensión PHP %s','Logeado como: %s','Colación','Tablas','Eliminar','Refrescar','Esquema','Esquema inválido.','No existen registros.','%.3f s','Claves foráneas','colación','ON DELETE','Nombre de columna','Nombre de Parámetro','Tipo','Longitud','Opciones','Incremento automático','Valores predeterminados','Comentario','Agregar','Mover arriba','Mover abajo','Eliminar','Vistas','Tabla','Columna','Indices','Modificar indices','Origen','Destino','ON UPDATE','Modificar','Agregar clave foránea','Triggers','Agregar trigger','Enlace permanente','Exportar','Salida','Formato','Procedimientos','Eventos','Datos','modificar','Crear Usuario','Error en consulta',array('%d registro','%d registros'),array('Consulta ejecutada, %d registro afectado.','Consulta ejecutada, %d registros afectados.'),'No hay comando para ejecutar.',array('%d sentencia sql ejecutada correctamente.','%d sentencias sql ejecutadas correctamente.'),'Importar archivo','Importación de archivos deshablilitado.','Ejecutar','Parar en caso de error','Mostrar solamente errores','Desde servidor','Archivo de servidor web %s','Ejecutar Archivo','History','Vaciar','Editar todos','Registro eliminado.','Registro modificado.','Registro%s insertado.','Agregar','Guardar','Guardar y continuar editando','Guardar e insertar otro','Eliminar','Tabla eliminada.','Tabla modificada.','Tabla creada.','Cree tabla','Cantida máxima de campos permitidos excedidos. Por favor aumente %s y %s.','Nombre de la tabla','motor','Particionar por','Particiones','Nombre de Partición','Valores','Indices modificados.','Tipo de índice','Columna (longitud)','Nombre','Base de datos eliminada.','Base de datos renombrada.','Base de datos creada.','Base de datos modificada.','Crear Base de datos','Esquema eliminado.','Esquema creado.','Esquema modificado.','Llamar',array('Consulta ejecutada, %d registro afectado.','Consulta ejecutada, %d registros afectados.'),'Clave externa eliminada.','Clave externa modificada.','Clave externa creada.','Las columnas de origen y destino deben ser del mismo tipo, debe existir un índice entre las columnas del destino y el registro referenciado debe existir.','Clave externa','Tabla de destino','Modificar','Agregar columna','Vista eliminada.','Vista modificada.','Vista creada.','Cear vista','Evento eliminado.','Evento modificado.','Evento creado.','Modificar Evento','Crear Evento','Inicio','Fin','Cada','Al completar preservar','Procedimiento eliminado.','Procedimiento modificado.','Procedimiento creado.','Modificar Función','Modificar procedimiento','Crear función','Crear procedimiento','Tipo de valor de regreso','Secuencia eliminada.','Secuencia creada.','Secuencia modificada.','Modificar secuencia','Crear secuencias','Tipo eliminado.','Tipo creado.','Modificar tipo','Crear tipo','Trigger eliminado.','Trigger modificado.','Trigger creado.','Modificar Trigger','Agregar Trigger','Tiempo','Evento','Usuario eliminado.','Usuario modificado.','Usuario creado.','Hash','Rutina','Conceder','Impedir',array('%d proceso detenido.','%d procesos detenidos.'),'%d en total','Detener',array('%d ítem afectado.','%d itemes afectados.'),'Doble-clic sobre el valor para editarlo.',array('%d registro importado.','%d registros importados.'),'No es posible seleccionar la tabla','Relaciones','Utilice el enlace de modificar para realizar los cambios.','Página','último','resultado completo','Clonar','Importar',' ','Tablas vaciadas (truncate).','Se movieron las tablas.','Tablas copiadas.','Tablas eliminadas.','Tablas y vistas','Buscar datos en tablas','Motor','Longitud de datos','Longitud de índice','Espacio libre','Registros','Analizar','Optimizar','Comprobar','Reparar','Vaciar','Mover a otra base de datos','Mover','Copiar','Secuencias','Agenda','A hora determinada','HH:MM:SS');break;case"de":$V=array('Sind Sie sicher ?','Hochladen von Datei fehlgeschlagen.','Maximal erlaubte Dateigrösse ist %sB.','Datei existiert nicht.','leer','Original','Keine Tabellen.','Sprache','Benutzung','Bitte einen der Dateitypen %s benutzen.','Datei existiert schon.','Benutzer-definierte Typen','Zahlen','Datum oder Zeit','Zeichenketten','Binär','Netzwerk','Geometrie','Listen','Datenbank System','Server','Benutzer','Passwort','Login','Passwort speichern','Daten auswählen','Struktur anzeigen','View ändern','Tabelle ändern','Neuer Datensatz','Letzte Seite','Ändern',array('%d Byte','%d Bytes'),'Daten zeigen von','Funktionen','Agregationen','Suchen','beliebig','Ordnen','absteigend','Begrenzung','Textlänge','Aktion','SQL-Query','anzeigen','Datei','Datenbank ändern','Schema ändern','Neues Schema','Datenbankschema','Rechte','Export','Abmelden','Datenbank','Schema','Neue Tabelle','zeigen','ltr','POST data noch einmal senden ?','CSRF Token ungültig. Bitte die Formulardaten erneut abschicken.','Abmeldung erfolgreich.','Sitzungen müssen aktiviert sein.','Sitzungsdauer abgelaufen, bitte erneut anmelden.','Ungültige Anmelde-Informationen.','Keine Erweiterungen installiert','Keine der unterstützten PHP-Erweiterungen (%s) ist vorhanden.','POST data zu gross. Reduzieren Sie die Grösse oder vergrössern Sie den Wert %s in der Konfiguration.','Datenbank','Datenbank ungültig.','Datenbanken entfernt.','Datenbank auswählen','Neue Datenbank','Prozessliste','Variablen','Status','Version %s: %s, mit PHP-Erweiterung %s','Angemeldet als: %s','Collation','Tabellen','Entfernen','Aktualisieren','Schema','Schema nicht gültig.','Keine Daten.','%.3f s','Fremdschlüssel','Kollation','ON DELETE','Spaltenname','Name des Parameters','Typ','Länge','Optionen','Auto-Inkrement','Vorgabewerte festlegen','Kommentar','Hinzufügen','Nach oben','Nach unten','Entfernen','View','Tabelle','Spalte','Indizes','Indizes ändern','Ursprung','Ziel','ON UPDATE','Ändern','Fremdschlüssel hinzufügen','Trigger','Trigger hinzufügen','Dauerhafter Link','Exportieren','Ergebnis','Format','Prozeduren','Ereignisse','Daten','ändern','Neuer Benutzer','Fehler in der SQL-Abfrage',array('%d Datensatz','%d Datensätze'),array('Abfrage ausgeführt, %d Datensatz betroffen.','Abfrage ausgeführt, %d Datensätze betroffen.'),'Kein Kommando vorhanden.',array('SQL-Query erfolgreich ausgeführt.','%d SQL-Queries erfolgreich ausgeführt.'),'Datei importieren','Importieren von Dateien abgeschaltet.','Ausführen','Bei Fehler anhalten','Nur Fehler anzeigen','Im Server','Webserver Datei %s','Datei ausführen','History','Entleeren','Alle ändern','Datensatz gelöscht.','Datensatz geändert.','Datensatz%s hinzugefügt.','Hinzufügen','Speichern','Speichern und weiter bearbeiten','Speichern und nächsten hinzufügen','Entfernen','Tabelle entfernt.','Tabelle geändert.','Tabelle erstellt.','Neue Tabelle erstellen','Die maximal erlaubte Anzahl der Felder ist überschritten. Bitte %s und %s erhöhen.','Name der Tabelle','Motor','Partitionieren um','Partitionen','Name der Partition','Werte','Indizes geändert.','Index-Typ','Spalte (Länge)','Name','Datenbank entfernt.','Datenbank umbenannt.','Datenbank erstellt.','Datenbank geändert.','Neue Datenbank','Schema wurde gelöscht.','Neues Schema erstellt.','Schema geändert.','Aufrufen',array('Kommando SQL ausgeführt, %d Datensatz betroffen.','Kommando SQL ausgeführt, %d Datensätze betroffen.'),'Fremdschlüssel entfernt.','Fremdschlüssel geändert.','Fremdschlüssel erstellt.','Spalten des Ursprungs und des Zieles müssen vom gleichen Datentyp sein, es muss unter den Zielspalten ein Index existieren und die referenzierten Daten müssen existieren.','Fremdschlüssel','Zieltabelle','Ändern','Spalte hinzufügen','View entfernt.','View geändert.','View erstellt.','Neue View erstellen','Ereignis entfernt.','Ereignis geändert.','Ereignis erstellt.','Ereignis ändern','Ereignis erstellen','Start','Ende','Jede','Nach der Ausführung erhalten','Prozedur entfernt.','Prozedur geändert.','Prozedur erstellt.','Funktion ändern','Prozedur ändern','Neue Funktion','Neue Prozedur','Typ des Rückgabewertes','Sequenz gelöscht.','Neue Sequenz erstellt.','Sequenz geändert.','Sequenz ändern','Neue Sequenz','Typ gelöscht.','Typ erstellt.','Typ ändern','Typ erstellen','Trigger entfernt.','Trigger geändert.','Trigger erstellt.','Trigger ändern','Trigger hinzufügen','Zeitpunkt','Ereignis','Benutzer entfernt.','Benutzer geändert.','Benutzer erstellt.','Hashed','Rutine','Erlauben','Verbieten',array('%d Prozess gestoppt.','%d Prozesse gestoppt.'),'%d insgesamt','Anhalten','%d Artikel betroffen.','Doppelklick zum Bearbeiten des Wertes.',array('%d Datensatz importiert.','%d Datensätze wurden importiert.'),'Auswahl der Tabelle fehlgeschlagen','Relationen','Benutzen Sie den Link zum editieren dieses Wertes.','Seite','letzte','Gesamtergebnis','Klonen','Importieren',' ','Tabellen sind entleert worden (truncate).','Tabellen verschoben.','Tabellen wurden kopiert.','Tabellen wurden entfernt (drop).','Tabellen und Views','Suche in Tabellen','Motor','Datengrösse','Indexgrösse','Freier Bereich','Datensätze','Analysieren','Optimieren','Prüfen','Reparieren','Entleeren (truncate)','In andere Datenbank verschieben','Verschieben','Kopieren','Sequenz','Zeitplan','Zur angegebenen Zeit','HH:MM:SS');break;case"fr":$V=array('Êtes-vous certain ?','Impossible d\'importer le fichier.','La taille maximale des fichiers est de %sB.','Le fichier est introuvable.','vide','original','Aucune table.','Langue','Utiliser','Veuillez utiliser l\'une des extensions %s.','Le fichier existe.','Types utilisateur','Nombres','Date et heure','Chaînes','Binaires','Réseau','Géométrie','Listes','Système','Serveur','Utilisateur','Mot de passe','Authentification','Authentification permanente','Afficher les données','Afficher la structure','Modifier une vue','Modifier la table','Nouvel élément','Dernière page','Modifier',array('%d octet','%d octets'),'Select','Fonctions','Agrégation','Rechercher','n\'importe où','Trier','décroissant','Limite','Longueur du texte','Action','Requête SQL','ouvrir','sauvegarder','Modifier la base de données','Modifier le schéma','Créer un schéma','Schéma de la base de données','Privilèges','Exporter','Déconnexion','base de données','schéma','Créer une nouvelle table','select','ltr','Renvoyer les données POST ?','Token CSRF invalide. Veuillez réenvoyer le formulaire.','Au revoir !','Veuillez activer les sessions.','Session expirée, veuillez vous authentifier à nouveau.','Authentification échouée.','Extension introuvable','Aucune des extensions PHP supportées (%s) n\'est disponible.','Données POST trop grandes. Réduisez la taille des données ou augmentez la valeur de %s dans la configuration de PHP.','Base de données','Base de données invalide.','Les bases de données ont été supprimées.','Sélectionner la base de données','Créer une base de données','Liste des processus','Variables','Statut','Version de %s : %s via l\'extension PHP %s','Authentifié en tant que : %s','Interclassement','Tables','Supprimer','Rafraîchir','Schéma','Schéma invalide.','Aucun résultat.','%.3f s','Clés étrangères','interclassement','ON DELETE','Nom de la colonne','Nom du paramètre','Type','Longueur','Options','Auto increment','Valeurs par défaut','Commentaire','Ajouter le prochain','Déplacer vers le haut','Déplacer vers le bas','Effacer','Vue','Table','Colonne','Index','Modifier les index','Source','Cible','ON UPDATE','Modifier','Ajouter une clé étrangère','Triggers','Ajouter un trigger','Lien permanent','Exporter','Sortie','Format','Routines','Évènements','Données','modifier','Créer un utilisateur','Erreur dans la requête',array('%d ligne','%d lignes'),array('Requête exécutée avec succès, %d ligne modifiée.','Requête exécutée avec succès, %d lignes modifiées.'),'Aucune commande à exécuter.',array('%d requête exécutée avec succès.','%d requêtes exécutées avec succès.'),'Importer un fichier','L\'importation de fichier est désactivée.','Exécuter','Arrêter en cas d\'erreur','Montrer seulement les erreurs','Depuis le serveur','Fichier %s du serveur Web','Exécuter le fichier','Historique','Effacer','Tout modifier','L\'élément a été supprimé.','L\'élément a été modifié.','L\'élément%s a été inséré.','Insérer','Sauvegarder','Sauvegarder et continuer l\'édition','Sauvegarder et insérer le prochain','Effacer','La table a été effacée.','La table a été modifiée.','La table a été créée.','Créer une table','Le nombre maximum de champs est dépassé. Veuillez augmenter %s et %s.','Nom de la table','moteur','Partitionner par','Partitions','Nom de la partition','Valeurs','Index modifiés.','Type d\'index','Colonne (longueur)','Nom','La base de données a été supprimée.','La base de données a été renommée.','La base de données a été créée.','La base de données a été modifiée.','Créer une base de données','Le schéma a été supprimé.','Le schéma a été créé.','Le schéma a été modifié.','Appeler',array('La routine a été exécutée, %d ligne modifiée.','La routine a été exécutée, %d lignes modifiées.'),'La clé étrangère a été effacée.','La clé étrangère a été modifiée.','La clé étrangère a été créée.','Les colonnes de source et de destination doivent être du même type, il doit y avoir un index sur les colonnes de destination et les données référencées doivent exister.','Clé étrangère','Table visée','Modifier','Ajouter une colonne','La vue a été effacée.','La vue a été modifiée.','La vue a été créée.','Créer une vue','L\'évènement a été supprimé.','L\'évènement a été modifié.','L\'évènement a été créé.','Modifier un évènement','Créer un évènement','Démarrer','Terminer','Chaque','Conserver quand complété','La routine a été supprimée.','La routine a été modifiée.','La routine a été créée.','Modifier la fonction','Modifier la procédure','Créer une fonction','Créer une procédure','Type de retour','La séquence a été supprimée.','La séquence a été créée.','La séquence a été modifiée.','Modifier la séquence','Créer une séquence','Le type a été supprimé.','Le type a été créé.','Modifier le type','Créer un type','Le trigger a été supprimé.','Le trigger a été modifié.','Le trigger a été créé.','Modifier un trigger','Ajouter un trigger','Temps','Évènement','L\'utilisateur a été effacé.','L\'utilisateur a été modifié.','L\'utilisateur a été créé.','Haché','Routine','Grant','Revoke',array('%d processus a été arrêté.','%d processus ont été arrêtés.'),'%d au total','Arrêter',array('%d élément a été modifié.','%d éléments ont été modifiés.'),'Double-cliquez sur une valeur pour la modifier.',array('%d ligne a été importée.','%d lignes ont été importées.'),'Impossible de sélectionner la table','Relations','Utilisez le lien "modifier" pour modifier cette valeur.','Page','dernière','résultat entier','Cloner','Importer',',','Les tables ont été tronquées.','Les tables ont été déplacées.','Les tables ont été copiées.','Les tables ont été effacées.','Tables et vues','Rechercher dans les tables','Moteur','Longueur des données','Longueur de l\'index','Espace inutilisé','Lignes','Analyser','Optimiser','Vérifier','Réparer','Tronquer','Déplacer vers une autre base de données','Déplacer','Copier','Séquences','Horaire','À un moment précis','HH:MM:SS');break;case"it":$V=array('Sicuro?','Caricamento del file non riuscito.','La dimensione massima del file è %sB.','Il file non esiste.','vuoto','originale','No tabelle.','Lingua','Usa','Usa una delle estensioni %s.','Il file esiste già.','Tipi definiti dall\'utente','Numeri','Data e ora','Stringhe','Binari','Rete','Geometria','Liste','Sistema','Server','Utente','Password','Autenticazione','Login permanente','Visualizza dati','Visualizza struttura','Modifica vista','Modifica tabella','Nuovo elemento','Ultima pagina','Modifica',array('%d byte','%d bytes'),'Seleziona','Funzioni','Aggregazione','Cerca','ovunque','Ordina','discendente','Limite','Lunghezza testo','Azione','Comando SQL','apri','salva','Modifica database','Modifica schema','Crea schema','Schema database','Privilegi','Dump','Esci','database','schema','Crea nuova tabella','seleziona','ltr','Reinvio i dati POST?','Token CSRF non valido. Reinvia la richiesta.','Uscita effettuata con successo.','Le sessioni devono essere abilitate.','Sessione scaduta, autenticarsi di nuovo.','Credenziali non valide.','Estensioni non presenti','Nessuna delle estensioni PHP supportate (%s) disponibile.','Troppi dati via POST. Ridurre i dati o aumentare la direttiva di configurazione %s.','Database','Database non valido.','Database eliminati.','Seleziona database','Crea nuovo database','Elenco processi','Variabili','Stato','Versione %s: %s via estensione PHP %s','Autenticato come: %s','Collazione','Tabelle','Elimina','Aggiorna','Schema','Schema non valido.','Nessuna riga.','%.3f s','Chiavi esterne','collazione','ON DELETE','Nome colonna','Nome parametro','Tipo','Lunghezza','Opzioni','Auto incremento','Valori predefiniti','Commento','Aggiungi altro','Sposta su','Sposta giu','Rimuovi','Vedi','Tabella','Colonna','Indici','Modifica indici','Sorgente','Obiettivo','ON UPDATE','Modifica','Aggiungi foreign key','Trigger','Aggiungi trigger','Link permanente','Esporta','Risultato','Formato','Routine','Eventi','Dati','modifica','Crea utente','Errore nella query',array('%d riga','%d righe'),array('Esecuzione della query OK, %d riga interessata.','Esecuzione della query OK, %d righe interessate.'),'Nessun commando da eseguire.',array('%d query eseguita con successo.','%d query eseguite con successo.'),'Caricamento file','Caricamento file disabilitato.','Esegui','Stop su errore','Mostra solo gli errori','Dal server','Webserver file %s','Esegui file','Storico','Pulisci','Modifica tutto','Elemento eliminato.','Elemento aggiornato.','Elemento%s inserito.','Inserisci','Salva','Salva e continua','Salva e inserisci un altro','Elimina','Tabella eliminata.','Tabella modificata.','Tabella creata.','Crea tabella','Troppi campi. Per favore aumentare %s e %s.','Nome tabella','motore','Partiziona per','Partizioni','Nome partizione','Valori','Indici modificati.','Tipo indice','Colonna (lunghezza)','Nome','Database eliminato.','Database rinominato.','Database creato.','Database modificato.','Crea database','Schema eliminato.','Schema creato.','Schema modificato.','Chiama',array('Routine chiamata, %d riga interessata.','Routine chiamata, %d righe interessate.'),'Foreign key eliminata.','Foreign key modificata.','Foreign key creata.','Le colonne sorgente e destinazione devono essere dello stesso tipo e ci deve essere un indice sulla colonna di destinazione e sui dati referenziati.','Foreign key','Tabella obiettivo','Cambia','Aggiungi colonna','Vista eliminata.','Vista modificata.','Vista creata.','Crea vista','Evento eliminato.','Evento modificato.','Evento creato.','Modifica evento','Crea evento','Inizio','Fine','Ogni','Al termine preservare','Routine eliminata.','Routine modificata.','Routine creata.','Modifica funzione','Modifica procedura','Crea funzione','Crea procedura','Return type','Sequenza eliminata.','Sequenza creata.','Sequenza modificata.','Modifica sequenza','Crea sequenza','Tipo definito dall\'utente eliminato.','Tipo definito dall\'utente creato.','Modifica tipo definito dall\'utente','Crea tipo definito dall\'utente','Trigger eliminato.','Trigger modificato.','Trigger creato.','Modifica trigger','Crea trigger','Orario','Evento','Utente eliminato.','Utente modificato.','Utente creato.','Hashed','Routine','Permetti','Revoca',array('%d processo interrotto.','%d processi interrotti.'),'%d in totale','Interrompi',array('Il risultato consiste in %d elemento.','Il risultato consiste in %d elementi.'),'Fai doppio click su un valore per modificarlo.',array('%d riga importata.','%d righe importate.'),'Selezione della tabella non riuscita','Relazioni','Usa il link modifica per modificare questo valore.','Pagina','ultima','intero risultato','Clona','Importa','.','Le tabelle sono state svuotate.','Le tabelle sono state spostate.','Le tabelle sono state copiate.','Le tabelle sono state eliminate.','Tabelle e viste','Cerca nelle tabelle','Motore','Lunghezza dato','Lunghezza indice','Dati liberi','Righe','Analizza','Ottimizza','Controlla','Ripara','Svuota','Sposta in altro database','Sposta','Copia','Sequenza','Pianifica','A tempo prestabilito','HH:MM:SS');break;case"et":$V=array('Kas oled kindel?','Faili üleslaadimine pole võimalik.','Maksimaalne failisuurus %sB.','Faili ei leitud.','tühi','originaal','Tabeleid ei leitud.','Keel','Kasuta','Palun kasuta üht laiendustest %s.','Fail juba eksisteerib.','Kasutajatüübid','Numbrilised','Kuupäev ja kellaaeg','Tekstid','Binaar','Võrk (network)','Geomeetria','Listid','Andmebaasimootor','Server','Kasutajanimi','Parool','Logi sisse','Jäta mind meelde','Vaata andmeid','Näita struktuuri','Muuda vaadet (VIEW)','Muuda tabeli struktuuri','Lisa kirje','Viimane lehekülg','Muuda',array('%d bait','%d baiti'),'Kuva','Funktsioonid','Liitmine','Otsi','vahet pole','Sorteeri','kahanevalt','Piira','Teksti pikkus','Tegevus','SQL-Päring','näita brauseris','salvesta failina','Muuda andmebaasi','Muuda struktuuri','Loo struktuur','Andmebaasi skeem','Õigused','Ekspordi','Logi välja','andmebaas','struktuur','Loo uus tabel','kuva','ltr','Saada POST andmed uuesti?','Sobimatu CSRF, palun postitage vorm uuesti.','Väljalogimine õnnestus.','Sessioonid peavad olema lubatud.','Sessioon on aegunud, palun logige uuesti sisse.','Ebakorrektsed andmed.','Ei leitud laiendust','Serveris pole ühtegi toetatud PHP laiendustest (%s).','POST-andmete maht on liialt suur. Palun vähendage andmeid või suurendage %s php-seadet.','Andmebaas','Tundmatu andmebaas.','Andmebaasid on edukalt kustutatud.','Vali andmebaas','Loo uus andmebaas','Protsesside nimekiri','Muutujad','Staatus','%s versioon: %s, kasutatud PHP moodul: %s','Sisse logitud: %s','Tähetabel','Tabelid','Kustuta','Uuenda','Struktuur','Sobimatu skeema.','Sissekanded puuduvad.','%.3f s','Võõrvõtmed (foreign key)','tähetabel','ON DELETE','Veeru nimi','Parameetri nimi','Tüüp','Pikkus','Valikud','Automaatselt suurenev','Vaikimisi väärtused','Kommentaar','Lisa järgmine','Liiguta ülespoole','Liiguta allapoole','Eemalda','Vaata','Tabel','Veerg','Indeksid','Muuda indekseid','Allikas','Sihtkoht','ON UPDATE','Muuda','Lisa võõrvõti','Päästikud (trigger)','Lisa päästik (TRIGGER)','Püsilink','Ekspordi','Väljund','Formaat','Protseduurid','Sündmused (EVENTS)','Andmed','muuda','Loo uus kasutaja','Päringus esines viga','%d rida','Päring õnnestus, mõjutatatud ridu: %d.','Käsk puudub.',array('%d päring edukalt käivitatud.','%d päringut edukalt käivitatud.'),'Faili üleslaadimine','Failide üleslaadimine on keelatud.','Käivita','Peatuda vea esinemisel','Kuva vaid veateateid','Serverist','Fail serveris: %s','Käivita fail','Ajalugu','Puhasta','Muuda kõiki','Kustutamine õnnestus.','Uuendamine õnnestus.','Kirje%s on edukalt lisatud.','Sisesta','Salvesta','Salvesta ja jätka muutmist','Salvesta ja lisa järgmine','Kustuta','Tabel on edukalt kustutatud.','Tabeli andmed on edukalt muudetud.','Tabel on edukalt loodud.','Loo uus tabel','Maksimaalne väljade arv ületatud. Palun suurendage %s ja %s.','Tabeli nimi','andmebaasimootor','Partitsiooni','Partitsioonid','Partitsiooni nimi','Väärtused','Indeksite andmed on edukalt uuendatud.','Indeksi tüüp','Veerg (pikkus)','Nimi','Andmebaas on edukalt kustutatud.','Andmebaas on edukalt ümber nimetatud.','Andmebaas on edukalt loodud.','Andmebaasi struktuuri uuendamine õnnestus.','Loo uus andmebaas','Struktuur on edukalt kustutatud.','Struktuur on edukalt loodud.','Struktuur on edukalt muudetud.','Käivita','Protseduur täideti edukalt, mõjutatud ridu: %d.','Võõrvõti on edukalt kustutatud.','Võõrvõtme andmed on edukalt muudetud.','Võõrvõri on edukalt loodud.','Lähte- ja sihtveerud peavad eksisteerima ja omama sama andmetüüpi, sihtveergudel peab olema määratud indeks ning viidatud andmed peavad eksisteerima.','Võõrvõti','Siht-tabel','Muuda','Lisa veerg','Vaade (VIEW) on edukalt kustutatud.','Vaade (VIEW) on edukalt muudetud.','Vaade (VIEW) on edukalt loodud.','Loo uus vaade (VIEW)','Sündmus on edukalt kustutatud.','Sündmuse andmed on edukalt uuendatud.','Sündmus on edukalt loodud.','Muuda sündmuse andmeid','Loo uus sündmus (EVENT)','Alusta','Lõpeta','Iga','Lõpetamisel jäta sündmus alles','Protseduur on edukalt kustutatud.','Protseduuri andmed on edukalt muudetud.','Protseduur on edukalt loodud.','Muuda funktsiooni','Muuda protseduuri','Loo uus funktsioon','Loo uus protseduur','Tagastustüüp','Jada on edukalt kustutatud.','Jada on edukalt loodud.','Jada on edukalt muudetud.','Muuda jada','Loo jada','Tüüp on edukalt kustutatud.','Tüüp on edukalt loodud.','Muuda tüüpi','Loo tüüp','Päästik on edukalt kustutatud.','Päästiku andmed on edukalt uuendatud.','Uus päästik on edukalt loodud.','Muuda päästiku andmeid','Loo uus päästik (TRIGGER)','Aeg','Sündmus','Kasutaja on edukalt kustutatud.','Kasutaja andmed on edukalt muudetud.','Kasutaja on edukalt lisatud.','Häshitud (Hashed)','Protseduur','Anna','Eemalda',array('Protsess on edukalt peatatud (%d).','Valitud protsessid (%d) on edukalt peatatud.'),'Kokku: %d','Peata','Mõjutatud kirjeid: %d.','Väärtuse muutmiseks topelt-kliki sellel.','Imporditi %d rida.','Tabeli valimine ebaõnnestus','Seosed','Väärtuse muutmiseks kasuta muutmislinki.','Lehekülg','viimane','Täielikud tulemused','Kloon','Impordi',',','Validud tabelid on edukalt tühjendatud.','Valitud tabelid on edukalt liigutatud.','Tabelid on edukalt kopeeritud.','Valitud tabelid on edukalt kustutatud.','Tabelid ja vaated','Otsi kogu andmebaasist','Implementatsioon','Andmete pikkus','Indeksi pikkus','Vaba ruumi','Ridu','Analüüsi','Optimeeri','Kontrolli','Paranda','Tühjenda','Liiguta teise andmebaasi','Liiguta','Kopeeri','Jadad (sequences)','Ajakava','Antud ajahetkel','HH:MM:SS');break;case"hu":$V=array('Biztos benne?','Nem tudom feltölteni a fájlt.','A maximális fájlméret %s B.','A fájl nem létezik.','üres','eredeti','Nincs tábla.','Nyelv','Használ','Használja a(z) %s kiterjesztést.','A fájl létezik.','Felhasználói típus','Szám','Dátum és idő','Szöveg','Bináris','Hálózat','Geometria','Lista','Adatbázis','Szerver','Felhasználó','Jelszó','Belépés','Emlékezz rám','Tartalom','Struktúra','Nézet módosítása','Tábla módosítása','Új tétel','Utolsó oldal','Szerkeszt',array('%d bájt','%d bájt','%d bájt'),'Kiválasztás','Funkciók','Aggregálás','Keresés','bárhol','Sorba rendezés','csökkenő','korlát','Szöveg hossz','Művelet','SQL parancs','megnyit','ment','Adatbázis módosítása','Séma módosítása','Séma létrehozása','Adatbázis séma','Privilégiumok','Exportálás','Kilépés','adatbázis','séma','Új tábla','kiválasztás','ltr','Újraküldi a POST adatokat?','Érvénytelen CSRF azonosító. Küldd újra az űrlapot.','Sikeres kilépés.','A munkameneteknek (session) engedélyezve kell lennie.','Munkamenet lejárt, jelentkezz be újra.','Érvénytelen adatok.','Nincs kiterjesztés','Nincs egy elérhető támogatott PHP kiterjesztés (%s) sem.','Túl sok a POST adat! Csökkentsd az adat méretét, vagy növeld a %s beállítást.','Adatbázis','Érvénytelen adatbázis.','Adatbázis eldobva.','Adatbázis kiválasztása','Új adatbázis','Folyamatok','Változók','Állapot','%s verzió: %s, PHP: %s','Belépve: %s','Egybevetés','Táblák','Eldob','Frissítés','Séma','Érvénytelen séma.','Nincs megjeleníthető eredmény.','%.3f másodperc','Idegen kulcs','egybevetés','törléskor','Oszlop neve','Paraméter neve','Típus','Hossz','Opciók','Automatikus növelés','Alapértelmezett értékek','Megjegyzés','Következő hozzáadása','Felfelé','Lefelé','Eltávolítás','Nézet','Tábla','Oszlop','Indexek','Index módosítása','Forrás','Cél','frissítéskor','Módosítás','Idegen kulcs hozzadása','Trigger','Trigger hozzáadása','Hivatkozás','Export','Kimenet','Formátum','Rutinok','Esemény','Adat','szerkeszt','Felhasználó hozzáadása','Hiba a lekérdezésben',array('%d sor','%d sor','%d sor'),array('Lekérdezés sikeresen végrehajtva, %d sor érintett.','Lekérdezés sikeresen végrehajtva, %d sor érintett.','Lekérdezés sikeresen végrehajtva, %d sor érintett.'),'Nincs végrehajtható parancs.','%d sikeres lekérdezés.','Fájl feltöltése','A fájl feltöltés le van tiltva.','Végrehajt','Hiba esetén megáll','Csak a hibák mutatása','Szerverről','Webszerver fájl %s','Fájl futtatása','Történet','Törlés','Összes szerkesztése','A tétel törölve.','A tétel frissítve.','%s tétel beszúrva.','Beszúr','Mentés','Mentés és szerkesztés folytatása','Mentés és újat beszúr','Törlés','A tábla eldobva.','A tábla módosult.','A tábla létrejött.','Tábla létrehozása','A maximális mezőszámot elérted. Növeld meg ezeket: %s, %s.','Tábla név','motor','Particionálás ezzel','Particiók','Partició neve','Értékek','Az indexek megváltoztak.','Index típusa','Oszop (méret)','Név','Az adatbázis eldobva.','Az adadtbázis átnevezve.','Az adatbázis létrejött.','Az adatbázis módosult.','Adatbázis létrehozása','Séma eldobva.','Séma létrejött.','Séma módosult.','Meghív',array('Rutin meghívva, %d sor érintett.','Rutin meghívva, %d sor érintett.','Rutin meghívva, %d sor érintett.'),'Idegen kulcs eldobva.','Idegen kulcs módosult.','Idegen kulcs létrejött.','A forrás és cél oszlopoknak azonos típusúak legyenek, a cél oszlopok indexeltek legyenek, és a hivatkozott adatnak léteznie kell.','Idegen kulcs','Cél tábla','Változtat','Oszlop hozzáadása','A nézet eldobva.','A nézet módosult.','A nézet létrejött.','Nézet létrehozása','Az esemény eldobva.','Az esemény módosult.','Az esemény létrejött.','Esemény módosítása','Esemény létrehozása','Kezd','Vége','Minden','Befejezéskor megőrzi','A rutin eldobva.','A rutin módosult.','A rutin létrejött.','Funkció módosítása','Eljárás módosítása','Funkció létrehozása','Eljárás létrehozása','Visszatérési érték','Sorozat eldobva.','Sorozat létrejött.','Sorozat módosult.','Sorozat módosítása','Sorozat létrehozása','Típus eldobva.','Típus létrehozva.','Típus módosítása','Típus létrehozása','A trigger eldobva.','A trigger módosult.','A trigger létrejött.','Trigger módosítása','Trigger létrehozása','Idő','Esemény','A felhasználó eldobva.','A felhasználó módosult.','A felhasználó létrejött.','Hashed','Rutin','Engedélyezés','Visszavonás',array('%d folyamat leállítva.','%d folyamat leállítva.','%d folyamat leállítva.'),'összesen %d','Leállít',array('%d tétel érintett.','%d tétel érintett.','%d tétel érintett.'),'Kattints kétszer az értékre a szerkesztéshez.',array('%d sor importálva.','%d sor importálva.','%d sor importálva.'),'Nem tudom kiválasztani a táblát','Reláció','Használd a szerkesztés hivatkozást ezen érték módosításához.','oldal','utolsó','összes eredményt mutatása','Klónoz','Importálás',' ','A tábla felszabadítva.','Táblák áthelyezve.','Táblák átmásolva.','Táblák eldobva.','Táblák és nézetek','Keresés a táblákban','Motor','Méret','Index hossz','Adat szabad','Oszlop','Elemzés','Optimalizál','Ellenőrzés','Javít','Felszabadít','Áthelyezés másik adatbázisba','Áthelyez','Másolás','Sorozatok','Ütemzés','Megadott időben','óó:pp:mm');break;case"pl":$V=array('Czy jesteś pewien?','Wgranie pliku było niemożliwe.','Maksymalna wielkość pliku to %sB.','Plik nie istnieje.','puste','bez zmian','Brak tabel.','Język','Wybierz','Proszę użyć jednego z rozszerzeń: %s.','Plik już istnieje.','Typy użytkownika','Numeryczne','Data i czas','Tekstowe','Binarne','Sieć','Geometria','Listy','Rodzaj bazy','Serwer','Użytkownik','Hasło','Zaloguj się','Zapamiętaj sesję','Pokaż dane','Struktura tabeli','Zmień perspektywę','Zmień tabelę','Nowy rekord','Ostatnia strona','Edytuj',array('%d bajt','%d bajty','%d bajtów'),'pokaż','Funkcje','Agregacje','Szukaj','gdziekolwiek','Sortuj','malejąco','Limit','Długość tekstu','Czynność','Zapytanie SQL','otwórz','zapisz','Zmień bazę danych','Zmień schemat','Utwórz schemat','Schemat bazy danych','Uprawnienia użytkowników','Eksport','Wyloguj','baza danych','schemat','Utwórz nową tabelę','przeglądaj','ltr','Wysłać dane ponownie?','Nieprawidłowy token CSRF. Spróbuj wysłać formularz ponownie.','Wylogowano pomyślnie.','Wymagana jest obsługa sesji w PHP.','Sesja wygasła, zaloguj się ponownie.','Nieprawidłowe dane logowania.','Brak rozszerzenia','Żadne z rozszerzeń PHP umożliwiających połączenie się z bazą danych (%s) nie jest dostępne.','Przesłano zbyt dużo danych. Zmniejsz objętość danych lub zwiększ zmienną konfiguracyjną %s.','Baza danych','Nie znaleziono bazy danych.','Bazy danych zostały usunięte.','Wybierz bazę danych','Utwórz nową bazę danych','Lista procesów','Zmienne','Status','Wersja %s: %s za pomocą %s','Zalogowany jako: %s','Porównywanie znaków','Tabele','Usuń','Odśwież','Schemat','Nieprawidłowy schemat.','Brak rekordów.','%.3f s','Klucze obce','porównywanie znaków','W przypadku usunięcia','Nazwa kolumny','Nazwa parametru','Typ','Długość','Opcje','Auto Increment','Wartości domyślne','Komentarz','Dodaj następny','Przesuń w górę','Przesuń w dół','Usuń','Perspektywa','Tabela','Kolumna','Indeksy','Zmień indeksy','Źródło','Cel','W przypadku zmiany','Zmień','Dodaj klucz obcy','Wyzwalacze','Dodaj wyzwalacz','Trwały link','Eksport','Rezultat','Format','Procedury i funkcje','Wydarzenia','Dane','edytuj','Dodaj użytkownika','Błąd w zapytaniu',array('%d rekord','%d rekordy','%d rekordów'),array('Zapytanie wykonane pomyślnie, zmieniono %d rekord.','Zapytanie wykonane pomyślnie, zmieniono %d rekordy.','Zapytanie wykonane pomyślnie, zmieniono %d rekordów.'),'Nic do wykonania.',array('Pomyślnie wykonano %d zapytanie.','Pomyślnie wykonano %d zapytania.','Pomyślnie wykonano %d zapytań.'),'Wgranie pliku','Wgrywanie plików jest wyłączone.','Wykonaj','Zatrzymaj w przypadku błędu','Pokaż tylko błędy','Z serwera','Plik %s na serwerze','Uruchom z pliku','Historia','Wyczyść','Edytuj wszystkie','Rekord został usunięty.','Rekord został zaktualizowany.','Rekord%s został dodany.','Dodaj','Zapisz zmiany','Zapisz i kontynuuj edycję','Zapisz i dodaj następny','Usuń','Tabela została usunięta.','Tabela została zmieniona.','Tabela została utworzona.','Utwórz tabelę','Przekroczono maksymalną liczbę pól. Zwiększ %s i %s.','Nazwa tabeli','składowanie','Partycjonowanie','Partycje','Nazwa partycji','Wartości','Indeksy zostały zmienione.','Typ indeksu','Kolumna (długość)','Nazwa','Baza danych została usunięta.','Nazwa bazy danych została zmieniona.','Baza danych została utworzona.','Baza danych została zmieniona.','Utwórz bazę danych','Schemat został usunięty.','Schemat został utworzony.','Schemat został zmieniony.','Uruchom',array('Procedura została uruchomiona, zmieniono %d rekord.','Procedura została uruchomiona, zmieniono %d rekordy.','Procedura została uruchomiona, zmieniono %d rekordów.'),'Klucz obcy został usunięty.','Klucz obcy został zmieniony.','Klucz obcy został utworzony.','Źródłowa i docelowa kolumna muszą być tego samego typu, powinien istnieć indeks na docelowej kolumnie oraz muszą istnieć dane referencyjne.','Klucz obcy','Tabela docelowa','Zmień','Dodaj kolumnę','Perspektywa została usunięta.','Perspektywa została zmieniona.','Perspektywa została utworzona.','Utwórz perspektywę','Wydarzenie zostało usunięte.','Wydarzenie zostało zmienione.','Wydarzenie zostało utworzone.','Zmień wydarzenie','Utwórz wydarzenie','Początek','Koniec','Wykonuj co','Nie kasuj wydarzenia po przeterminowaniu','Procedura została usunięta.','Procedura została zmieniona.','Procedura została utworzona.','Zmień funkcję','Zmień procedurę','Utwórz funkcję','Utwórz procedurę','Zwracany typ','Sekwencja została usunięta.','Sekwencja została utworzona.','Sekwencja została zmieniona.','Zmień sekwencję','Utwórz sekwencję','Typ został usunięty.','Typ został utworzony.','Zmień typ','Utwórz typ','Wyzwalacz został usunięty.','Wyzwalacz został zmieniony.','Wyzwalacz został utworzony.','Zmień wyzwalacz','Utwórz wyzwalacz','Czas','Wydarzenie','Użytkownik został usunięty.','Użytkownik został zmieniony.','Użytkownik został dodany.','Zahashowane','Procedura','Uprawnienia','Usuń uprawnienia',array('Przerwano %d wątek.','Przerwano %d wątki.','Przerwano %d wątków.'),'%d w sumie','Przerwij wykonywanie',array('Zmieniono %d rekord.','Zmieniono %d rekordy.','Zmieniono %d rekordów.'),'Kliknij podwójnie wartość, aby ją edytować.',array('%d rekord został zaimportowany.','%d rekordy zostały zaimportowane.','%d rekordów zostało zaimportowanych.'),'Nie udało się pobrać danych z tabeli','Relacje','Użyj linku edycji aby zmienić tę wartość.','Strona','ostatni','wybierz wszystkie','Duplikuj','Import',' ','Tabele zostały opróżnione.','Tabele zostały przeniesione.','Tabele zostały skopiowane.','Tabele zostały usunięte.','Tabele i perspektywy','Wyszukaj we wszystkich tabelach','Składowanie','Rozmiar danych','Rozmiar indeksów','Wolne miejsce','Liczba rekordów','Analizuj','Optymalizuj','Sprawdź','Napraw','Opróżnij','Przenieś do innej bazy danych','Przenieś','Kopiuj','Sekwencje','Harmonogram','O danym czasie','teraz');break;case"ca":$V=array('Estàs segur?','Impossible adjuntar el fitxer.','La mida màxima permesa del fitxer és de %sB.','El fitxer no existeix.','buit','original','No hi ha cap taula.','Idioma','Utilitza','Si us plau, utilitza una de les extensions %s.','El fitxer ja existeix.','Tipus de l\'usuari','Nombres','Data i hora','Cadenes','Binari','Xarxa','Geometria','Llistes','Sistema','Servidor','Nom d\'usuari','Contrasenya','Inicia la sessió','Sessió permanent','Selecciona dades','Mostra l\'estructura','Modifica la vista','Modifica la taula','Nou element','Darrera plana','Edita',array('%d byte','%d bytes'),'Selecciona','Funcions','Agregació','Cerca','a qualsevol lloc','Ordena','descendent','Límit','Longitud del text','Acció','Ordre SQL','obre','desa','Modifica la base de dades','Modifica l\'esquema','Crea un esquema','Esquema de la base de dades','Privilegis','Exporta','Desconnecta','base de dades','esquema','Crea una nova taula','registres','ltr','Torna a enviar les dades POST?','Token CSRF invàlid. Torna a enviar el formulari.','Desconnexió correcta.','Cal que estigui permès l\'us de sessions.','La sessió ha expirat, torna a iniciar-ne una.','Credencials invàlids.','Cap extensió','No hi ha cap de les extensions PHP soporatades (%s) disponible.','Les dades POST són massa grans. Redueix les dades o incrementa la directiva de configuració %s.','Base de dades','Base de dades invàlida.','S\'han suprimit les bases de dades.','Selecciona base de dades','Crea una nova base de dades','Llista de processos','Variables','Estat','Versió %s: %s amb l\'extensió de PHP %s','Connectat com: %s','Compaginació','Taules','Suprimeix','Refresca','Esquema','Esquema invàlid.','No hi ha cap registre.','%.3f s','Claus foranes','compaginació','ON DELETE','Nom de la columna','Nom del paràmetre','Tipus','Llargada','Opcions','Increment automàtic','Valors per defecte','Comentari','Afegeix el següent','Mou a dalt','Mou a baix','Suprimeix','Vista','Taula','Columna','Índexs','Modifica els índexs','Font','Destí','ON UPDATE','Modifica','Afegeix una clau forana','Activadors','Afegeix un activador','Enllaç permanent','Exporta','Sortida','Format','Rutines','Events','Dades','edita','Crea un usuari','Error en la consulta',array('%d registre','%d registres'),array('Consulta executada correctament, %d registre modificat.','Consulta executada correctament, %d registres modificats.'),'Cap comanda per executar.',array('%d consulta executada correctament.','%d consultes executades correctament.'),'Adjunta un fitxer','L\'ddjunció de fitxers està desactivada.','Executa','Atura en trobar un error','Mostra només els errors','En el servidor','Fitxer %s del servidor web','Executa el fitxer','Història','Suprimeix','Edita-ho tot','S\'ha suprmit l\'element.','S\'ha actualitzat l\'element.','S\'ha insertat l\'element%s.','Insereix','Desa','Desa i segueix editant','Desa i insereix el següent','Suprimeix','S\'ha suprimit la taula.','S\'ha modificat la taula.','S\'ha creat la taula.','Crea una taula','S\'ha assolit el nombre màxim de camps. Incrementa %s i %s.','Nom de la taula','motor','Fes particions segons','Particions','Nom de la partició','Valors','S\'han modificat els índexs.','Tipus d\'índex','Columna (longitud)','Nom','S\'ha suprimit la base de dades.','S\'ha canviat el nom de la base de dades.','S\'ha creat la base de dades.','S\'ha modificat la base de dades.','Crea una base de dades','S\'ha suprimit l\'esquema.','S\'ha creat l\'esquema.','S\'ha modificat l\'esquema.','Crida',array('S\'ha cridat la rutina, %d registre modificat.','S\'ha cridat la rutina, %d registres modificats.'),'S\'ha suprimit la clau forana.','S\'ha modificat la clau forana.','S\'ha creat la clau forana.','Les columnes origen i destí han de ser del mateix tipus, la columna destí ha d\'estar indexada i les dades referenciades han d\'existir.','Clau forana','Taula de destí','Canvi','Afegeix una columna','S\'ha suprimit la vista.','S\'ha modificat la vista.','S\'ha creat la vista.','Crea una vista','S\'ha suprimit l\'event.','S\'ha modificat l\'event.','S\'ha creat l\'event.','Modifica l\'event','Crea un event','Comença','Acaba','Cada','Conservar en completar','S\'ha suprimit la rutina.','S\'ha modificat la rutina.','S\'ha creat la rutina.','Modifica la funció','Modifica el procediment','Crea una funció','Crea un procediment','Tipus retornat','S\'ha suprimit la seqüència.','S\'ha creat la seqüència.','S\'ha modificat la seqüència.','Modifica la seqüència','Crea una seqüència','S\'ha suprimit el tipus.','S\'ha creat el tipus.','Modifica el tipus','Crea un tipus','S\'ha suprimit l\'activador.','S\'ha modificat l\'activador.','S\'ha creat l\'activador.','Modifica l\'activador','Crea un activador','Temps','Event','S\'ha suprimit l\'usuari.','S\'ha modificat l\'usuari.','S\'ha creat l\'usuari.','Hashed','Rutina','Grant','Revoke',array('S\'ha aturat %d procés.','S\'han aturat %d processos.'),'%d en total','Atura',array('S\'ha modificat %d element.','S\'han modificat %d elements.'),'Fes un doble clic a un valor per modificar-lo.',array('S\'ha importat %d registre.','S\'han importat %d registres.'),'Impossible seleccionar la taula','Relacions','Utilitza l\'enllaç d\'edició per modificar aquest valor.','Plana','darrera','tots els resultats','Clona','Importa',',','S\'han escapçat les taules.','S\'han desplaçat les taules.','S\'han copiat les taules.','S\'han suprimit les taules.','Taules i vistes','Cerca dades en les taules','Motor','Longitud de les dades','Longitud de l\'índex','Espai lliure','Files','Analitza','Optimitza','Verifica','Repara','Escapça','Desplaça a una altra base de dades','Desplaça','Còpia','Seqüències','Horari','A un moment donat','HH:MM:SS');break;case"pt":$V=array('Está seguro?','Não é possivel enviar o arquivo.','Tamanho máximo do arquivo é %sB.','Arquivo não existe.','vazio','original','Não existem tabelas.','Idioma','Usar','Por favor use uma das extensões %s.','Arquivo ja existe.','Tipos definido pelo usuario','Números','Data e hora','Cadena','Binario','Rede','Geometría','Listas','Motor de Base de dados','Servidor','Usuario','Senha','Entrar','Salvar Senha','Selecionar dados','Mostrar estrutura','Modificar vista','Modificar estrutura','Novo Registro','Ultima página','Modificar',array('%d byte','%d bytes'),'Selecionar','Funções','Adições','Procurar','qualquer local','Ordenar','decrescente','Limite','Tamanho de texto','Ação','Comando SQL','mostrar','salvas','Modificar Base de dados','Modificar esquema','Criar esquema','Esquema de Base de dados','Privilegios','Exportar','Sair','base de dados','esquema','Nova tabela','registros','ltr','Resend POST data?','Token CSRF inválido. Enviar o formulario novamente.','Saida bem sucedida.','Devem estar habilitadas as sessões.','Sessão expirada, por favor entre sua Chave de novo.','Identificação inválida.','Não ha extension','Nenhuma das extensões PHP soportadas (%s) está disponivel.','POST data demasiado grande. Reduza o tamanho ou aumente a diretiva de configuração %s.','Base de dados','Base de dados inválida.','Bases de dados eliminadas.','Selecionar Base de dados','Criar nova base de dados','Lista de processos','Variaveis','Estado','Versão %s: %s através da extensão PHP %s','Logado como: %s','Colação','Tabelas','Remover','Atualizar','Esquema','Esquema inválido.','Não existem registros.','%.3f s','Chaves foráneas','collation','ON DELETE','Nome da coluna','Nome de Parametro','Tipo','Tamanho','Opções','Incremento Automático','Valores predeterminados','Comentario','Adicionar proximo','Mover acima','Mover abaixo','Remover','Visualizar','Tabela','Coluna','Indices','Modificar indices','Origem','Destino','ON UPDATE','Modificar','Adicionar Chave foránea','Triggers','Adicionar trigger','Permanent link','Exportar','Saida','Formato','Procedimentos','Eventos','Dados','modificar','Criar Usuario','Erro na consulta',array('%d registro','%d registros'),array('Consulta executada, %d registro afetados.','Consulta executada, %d registros afetados.'),'Nenhum comando para executar.',array('%d consulta sql executada corretamente.','%d consulta sql executadas corretamente.'),'Importar arquivo','Importação de arquivos desablilitado.','Executar','Parar em caso de erro','Mostrar somente erros','Desde servidor','Arquivo do servidor web %s','Executar Arquivo','Historico','Limpar','Edit all','Registro eliminado.','Registro modificado.','Registro%s inserido.','Inserir','Salvar','Salvar e continuar editando','Salvar e inserir outro','Apagar','Tabela eliminada.','Tabela modificada.','Tabela criada.','Criar tabela','Cantida máxima de campos permitidos excedidos. Por favor aumente %s y %s.','Nome da tabela','motor','Particionar por','Partições','Nome da Partição','Valores','Indices modificados.','Tipo de índice','coluna (tamanho)','Nome','Base de dados eliminada.','Base de dados renomeada.','Base de dados criada.','Base de dados modificada.','Criar Base de dados','Esquema eliminado.','Esquema criado.','Esquema modificado.','Chamar',array('Consulta executada, %d registro afetado.','Consulta executada, %d registros afetados.'),'Chave externa eliminada.','Chave externa modificada.','Chave externa criada.','As colunas de origen e destino devem ser do mesmo tipo, deve existir um índice entre as colunas de destino e o registro referenciado deve existir.','Chave externa','Tabela de destino','Modificar','Adicionar coluna','Vista eliminada.','Vista modificada.','Vista criada.','Criar vista','Evento eliminado.','Evento modificado.','Evento criado.','Modificar Evento','Criar Evento','Inicio','Fim','Cada','Ao completar preservar','Procedimento eliminado.','Procedimento modificado.','Procedimento criado.','Modificar Função','Modificar procedimiento','Criar função','Criar procedimento','Tipo de valor de regreso','Sequencia eliminada.','Sequencia criada.','Sequencia modificada.','Modificar sequencia','Criar sequencias','Tipo eliminado.','Tipo criado.','Modificar tipo','Criar tipo','Trigger eliminado.','Trigger modificado.','Trigger criado.','Modificar Trigger','Adicionar Trigger','Tempo','Evento','Usuario eliminado.','Usuario modificado.','Usuario criado.','Hash','Rotina','Conceder','Impedir',array('%d processo terminado.','%d processos terminados.'),'%d no total','Parar',array('%d ítem afetado.','%d itens afetados.'),'Doble-clic sobre o valor para edita-lo.',array('%d registro importado.','%d registros importados.'),'Não é possivel selecionar a Tabela','Relações','Utilize o link modificar para alterar.','Página','último','resultado completo','Clonar','Importar',' ','Tabelas truncadas (truncate).','As Tabelas foram movidas.','Tables have been copied.','Tabelas eliminadas.','Tabelas e vistas','Buscar dados nas Tabelas','Motor','Tamanho de dados','Tamanho de índice','Espaço Livre','Registros','Analizar','Otimizar','Verificar','Reparar','Truncar','Mover outra Base de dados','Mover','Copy','Sequencias','Agenda','A hora determinada','agora');break;case"sl":$V=array('Ste prepričani?','Ne morem naložiti datoteke.','Največja velikost datoteke je %sB.','Datoteka ne obstaja.','prazno','original','Ni tabel.','Jezik','Uporabi','Prosim, uporabite enega od dodatkov %s.','Datoteka obstaja.','Uporabniški tipi','Števila','Datum in čas','Nizi','Binarni','Mrežni','Geometrčni','Seznami','Sistem','Strežnik','Uporabniško ime','Geslo','Prijavi se','Trajna prijava','Izberi podatke','Pokaži zgradbo','Spremeni pogled','Spremeni tabelo','Nov predmet','Zadnja stran','Uredi',array('%d bajt','%d bajta','%d bajti','%d bajtov'),'Izberi','Funkcije','Združitev','Išči','kjerkoli','Sortiraj','padajoče','Limita','Dolžina teksta','Dejanje','Ukaz SQL','odpri','shrani','Spremeni bazo','Spremeni shemo','Ustvari shemo','Shema baze','Pravice','Izvozi','Odjavi se','baza','shema','Ustvari novo tabelo','izberi','ltr','Resend POST data?','Neveljaven token CSRF. Pošljite formular še enkrat.','Prijava uspešna.','Podpora za seje mora biti omogočena.','Seja je potekla. Prosimo, ponovno se prijavite.','Neveljavne pravice.','Brez dodatkov','Noben od podprtih dodatkov za PHP (%s) ni na voljo.','Preveliko podatkov za POST. Zmanjšajte število podatkov ali povečajte nastavitev za %s.','Baza','Neveljavna baza.','Baze so zavržene.','Izberi bazo','Ustvari novo bazo','Seznam procesov','Spremenljivke','Stanje','Verzija %s: %s preko dodatka za PHP %s','Prijavljen kot: %s','Zbiranje','Tabele','Zavrzi','Osveži','Shema','Neveljavna shema.','Ni vrstic.','%.3f s','Tuji ključi','zbiranje','pri brisanju','Ime stolpca','Ime parametra','Tip','Dolžina','Možnosti','Samodejno povečevanje','Privzete vrednosti','Komentar','Dodaj naslednjega','Premakni gor','Premakni dol','Odstrani','Pogledi','Tabela','Stolpec','Indeksi','Spremeni indekse','Izvor','Cilj','pri posodabljanju','Spremeni','Dodaj tuj ključ','Sprožilniki','Dodaj sprožilnik','Permanent link','Izvozi','Izhod rezultata','Format','Postopki','Dogodki','Podatki','uredi','Ustvari uporabnika','Napaka v poizvedbi',array('%d vrstica','%d vrstici','%d vrstice','%d vrstic'),array('Poizvedba se je uspešno izvedla, spremenjena je %d vrstica.','Poizvedba se je uspešno izvedla, spremenjeni sta %d vrstici.','Poizvedba se je uspešno izvedla, spremenjene so %d vrstice.','Poizvedba se je uspešno izvedla, spremenjenih je %d vrstic.'),'Ni ukazov za izvedbo.',array('Uspešno se je končala %d poizvedba.','Uspešno sta se končali %d poizvedbi.','Uspešno so se končale %d poizvedbe.','Uspešno se je končalo %d poizvedb.'),'Naloži datoteko','Nalaganje datotek je onemogočeno.','Izvedi','Ustavi ob napaki','Pokaži samo napake','z strežnika','Datoteka na spletnem strežniku %s','Zaženi datoteko','Zgodovina','Počisti','Edit all','Predmet je izbrisan.','Predmet je posodobljen.','Predmet%s je vstavljen.','Vstavi','Shrani','Shrani in nadaljuj z urejanjem','Shrani in vstavi tekst','Izbriši','Tabela je zavržena.','Tabela je spremenjena.','Tabela je ustvarjena.','Ustvari tabelo','Največje število dovoljenih polje je preseženo. Prosimo, povečajte %s in %s.','Ime tabele','pogon','Porazdeli po','Porazdelitve','Ime porazdelitve','Vrednosti','Indeksi so spremenjeni.','Tip indeksa','Stolpec (dolžina)','Naziv','Baza je zavržena.','Baza je preimenovana.','Baza je ustvarjena.','Baza je spremenjena.','Ustvari bazo','Shema je zavržena.','Shema je ustvarjena.','Shema je spremenjena.','Pokliči',array('Klican je bil postopek, spremenjena je %d vrstica.','Klican je bil postopek, spremenjeni sta %d vrstici.','Klican je bil postopek, spremenjene so %d vrstice.','Klican je bil postopek, spremenjenih je %d vrstic.'),'Tuj ključ je zavržen.','Tuj ključ je spremenjen.','Tuj ključ je ustvarjen.','Izvorni in ciljni stolpec mora imeti isti podatkovni tip. Obstajati mora indeks na ciljnih stolpcih in obstajati morajo referenčni podatki.','Tuj ključ','Ciljna tabela','Spremeni','Dodaj stolpec','Pogled je zavržen.','Pogled je spremenjen.','Pogled je ustvarjen.','Ustvari pogled','Dogodek je zavržen.','Dogodek je spremenjen.','Dogodek je ustvarjen.','Spremeni dogodek','Ustvari dogodek','Začetek','Konec','vsake','Po zaključku ohrani','Postopek je zavržen.','Postopek je spremenjen.','Postopek je ustvarjen.','Spremeni funkcijo','Spremeni postopek','Ustvari funkcijo','Ustvari postopek','Vračalni tip','Sekvenca je zavržena.','Sekvence je ustvarjena.','Sekvence je spremenjena.','Spremni sekvenco','Ustvari sekvenco','Tip je zavržen.','Tip je ustvarjen.','Spremeni tip','Ustvari tip','Sprožilnik je odstranjen.','Sprožilnik je spremenjen.','Sprožilnik je ustvarjen.','Spremeni sprožilnik','Ustvari sprožilnik','Čas','Dogodek','Uporabnik je odstranjen.','Uporabnik je spremenjen.','Uporabnik je ustvarjen.','Zakodirano','Postopek','Dovoli','Odvzemi',array('Končan je %d proces.','Končana sta %d procesa.','Končani so %d procesi.','Končanih je %d procesov.'),'Skupaj %d','Končaj',array('Spremenjen je %d predmet.','Spremenjena sta %d predmeta.','Spremenjeni so %d predmeti.','Spremenjenih je %d predmetov.'),'Dvojni klik na vrednost za urejanje.',array('Uvožena je %d vrstica.','Uvoženi sta %d vrstici.','Uvožene so %d vrstice.','Uvoženih je %d vrstic.'),'Ne morem izbrati tabele','Relacijski','Uporabite urejanje povezave za spreminjanje te vrednosti.','Stran','Zadnja','cel razultat','Kloniraj','Uvozi',' ','Tabele so skrajšane.','Tabele so premaknjene.','Tabele so kopirane.','Tabele so zavržene.','Tabele in pogledi','Išče podatke po tabelah','Pogon','Velikost podatkov','Velikost indeksa','Podatkov prosto ','Vrstic','Analiziraj','Optimiziraj','Preveri','Popravi','Skrajšaj','Premakni v drugo bazo','Premakni','Kopiraj','Sekvence','Urnik','v danem času','zdaj');break;case"lt":$V=array('Tikrai?','Nepavyko įkelti failo.','Maksimalus failo dydis - %sB.','Failas neegzistuoja.','tuščia','originalas','Nėra lentelių.','Kalba','Naudoti','Naudokite vieną iš plėtinių %s.','Failas egzistuoja.','Vartotojų tipai','Skaičiai','Data ir laikas','Tekstas','Dvejetainis','Tinklas','Geometrija','Sąrašai','Sistema','Serveris','Vartotojas','Slaptažodis','Prisijungti','Pastovus prisijungimas','Atrinkti duomenis','Rodyti struktūrą','Redaguoti vaizdą','Redaguoti lentelę','Naujas įrašas','Paskutinis puslapis','Redaguoti',array('%d baitas','%d baigai','%d baitų'),'Atrinkti','Funkcijos','Agregacija','Ieškoti','visur','Rikiuoti','mažėjimo tvarka','Limitas','Teksto ilgis','Veiksmas','SQL užklausa','atidaryti','išsaugoti','Redaguoti duomenų bazę','Keisti schemą','Sukurti schemą','Duomenų bazės schema','Privilegijos','Eksportuoti','Atsijungti','duomenų bazė','schema','Sukurti naują lentelę','atrinkti','ltr','Persiųsti POST duomenis?','Neteisingas CSRF tokenas. Bandykite siųsti formos duomenis dar kartą.','Jūs atsijungėte nuo sistemos.','Sesijų palaikymas turi būti įjungtas.','Sesijos galiojimas baigėsi. Prisijunkite iš naujo.','Neteisingi prisijungimo duomenys.','Nėra plėtiio','Nėra nei vieno iš palaikomų PHP plėtinių (%s).','Per daug POST duomenų. Sumažinkite duomenų kiekį arba padidinkite konfigūracijos nustatymą %s.','Duomenų bazė','Neteisinga duomenų bazė.','Duomenų bazės panaikintos.','Pasirinkti duomenų bazę','Sukurti naują duomenų bazę','Procesų sąrašas','Kintamieji','Būsena','%s versija: %s per PHP plėtinį %s','Prisijungęs kaip: %s','Lyginimas','Lentelės','Pašalinti','Atnaujinti','Schema','Neteisinga schema.','Nėra įrašų.','%.3f s','Išoriniai raktai','palyginimas','Ištrinant','Stulpelio pavadinimas','Parametro pavadinimas','Tipas','Ilgis','Nustatymai','Auto Increment','Reikšmės pagal nutylėjimą','Komentaras','Pridėti kitą','Perkelti į viršų','Perkelti žemyn','Pašalinti','Vaizdas','Lentelė','Stulpelis','Indeksai','Redaguoti indeksus','Šaltinis','Tikslas','Atnaujinant','Redaguoti','Pridėti išorinį raktą','Trigeriai','Pridėti trigerį','Pastovi nuoroda','Eksportas','Išvestis','Formatas','Procedūros','Įvykiai','Duomenys','redaguoti','Sukurti vartotoją','Klaida užklausoje',array('%d įrašas','%d įrašai','%d įrašų'),array('Užklausa įvykdyta. Pakeistas %d įrašas.','Užklausa įvykdyta. Pakeisti %d įrašai.','Užklausa įvykdyta. Pakeista %d įrašų.'),'Nėra vykdomų užklausų.',array('%d užklausa įvykdyta.','%d užklausos įvykdytos.','%d užklausų įvykdyta.'),'Failo įkėlimas','Failų įkėlimas išjungtas.','Vykdyti','Sustabdyti esant klaidai','Rodyti tik klaidas','Iš serverio','Failas %s iš serverio','Vykdyti failą','Istorija','Išvalyti','Redaguoti visus','Įrašas ištrintas.','Įrašas pakeistas.','Įrašas%s sukurtas.','Įrašyti','Išsaugoti','Išsaugoti ir tęsti redagavimą','Išsaugoti ir įrašyti kitą','Trinti','Lentelė pašalinta.','Lentelė pakeista.','Lentelė sukurta.','Sukurti lentelę','Viršytas maksimalus leidžiamų stulpelių kiekis. Padidinkite %s ir %s.','Lentelės pavadinimas','variklis','Skirstyti pagal','Skirsniai','Skirsnio pavadinimas','Reikšmės','Indeksai pakeisti.','Indekso tipas','Stulpelis (ilgis)','Pavadinimas','Duomenų bazė panaikinta.','Duomenų bazė pervadinta.','Duomenų bazė sukurta.','Duomenų bazė pakeista.','Sukurti duomenų bazę','Schema pašalinta.','Schema sukurta.','Schema pakeista.','Vykdyti',array('Procedūra įvykdyta. %d įrašas pakeistas.','Procedūra įvykdyta. %d įrašai pakeisti.','Procedūra įvykdyta. %d įrašų pakeista.'),'Išorinis raktas pašalintas.','Išorinis raktas pakeistas.','Išorinis raktas sukurtas.','Šaltinio ir tikslinis stulpelis turi būti to paties tipo, tiksliniame stulpelyje turi būti naudojamas indeksas ir duomenys turi egzistuoti.','Išorinis raktas','Tikslinė lentelė','Pakeisti','Pridėti stulpelį','Vaizdas pašalintas.','Vaizdas pakeistas.','Vaizdas sukurtas.','Sukurti vaizdą','Įvykis pašalintas.','Įvykis pakeistas.','Įvykis sukurtas.','Redaguoti įvykį','Sukurti įvykį','Pradžia','Pabaiga','Kas','Įvykdžius išsaugoti','Procedūra pašalinta.','Procedūra pakeista.','Procedūra sukurta.','Keisti funkciją','Keiskti procedūrą','Sukurti funkciją','Sukurti procedūrą','Grąžinimo tipas','Seka pašalinta.','Seka sukurta.','Seka pakeista.','Keisti seką','Sukurti seką','Tipas pašalintas.','Tipas sukurtas.','Keisti tipą','Sukurti tipą','Trigeris pašalintas.','Trigeris pakeistas.','Trigeris sukurtas.','Keisti trigerį','Sukurti trigerį','Laikas','Įvykis','Vartotojas ištrintas.','Vartotojo duomenys pakeisti.','Vartotojas sukurtas.','Šifruotas','Procedūra','Suteikti','Atšaukti',array('%d procesas nutrauktas.','%d procesai nutraukti.','%d procesų nutraukta.'),'%d iš viso','Nutraukti',array('Pakeistas %d įrašas.','Pakeisti %d įrašai.','Pakeistas %d įrašų.'),'Du kartus spragtelėkite pelyte norėdami redaguoti.',array('%d įrašas įkelta.','%d įrašai įkelti.','%d įrašų įkelta.'),'Neįmanoma atrinkti lentelės','Ryšiai','Norėdami redaguoti reikšmę naudokite redagavimo nuorodą.','Puslapis','paskutinis','visas rezultatas','Klonuoti','Importas',' ','Lentelės buvo ištuštintos.','Lentelės perkeltos.','Lentelės nukopijuotos.','Lentelės pašalintos.','Lentelės ir vaizdai','Ieškoti duomenų lentelėse','Variklis','Duomenų ilgis','Indekso ilgis','Laisvos vietos','Įrašai','Analizuoti','Optimizuoti','Patikrinti','Pataisyti','Tuštinti','Perkelti į kitą duomenų bazę','Perkelti','Kopijuoti','Sekos','Grafikas','Nurodytu laiku','dabar');break;case"tr":$V=array('Emin misin?','Dosya gönderilemiyor.','Bir dosya için izin verilen dosya sınırı %sB.','Dosya mevcut değil.','boş','orijinal','Tablo yok.','Dil','Kullan','%s uzantılarından birini kullanın.','Dosya mevcut.','Kullanıcı türleri','Sayılar','Tarih ve zaman','Sözcükler','İkili','Ağ','Geometri','Listeler','Sistem','Sunucu','Kullanıcı','Parola','Giriş','Kalıcı giriş','Veri seç','Yapıyı göster','Değişim görünüm','Tablo değiştir','Yeni öğe','Son sayfa','Düzen',array('%d bayt','%d kadar bayt'),'Seç','Fonksiyonlar','Kümeleme','Arama','herhangi bir yer','Sırala','azalan','sınır','Yazı uzunluğu','Eylem','SQL komutu','aç','kaydet','Veritabanı değiştir','Değişim şeması','Yaratım şeması','Veritabanı şeması','İzinler','Döküm','Çıkış','veritabanı','şema','Yeni tablo yarat','seç','ltr','Resend POST data?','Geçersiz Cross-site request forgery (CSRF) jetonu. Forumu tekrar yolla.','Başarıyla çıkıldı.','Oturum desteği etkin olmalıdır.','Oturum süresi doldu, lütfen tekrar giriş yapın.','Geçersiz kimlik.','Uzantı yok','Desteklenen PHP uzantılarından (%s) hiçbiri mevcut değil.','Çok büyük POST verisi, veriyi azaltın ya da ayar yönergesini uygun olarak yapılandırın.','Veritabanı','Geçersiz veritabanı.','Veritabanları düşüüldü.','Veritabanı seç','Yeni veritabanı yarat','İşlem listesi','Değişkenler','Durum','%s sürüm: %s PHP uzantısı ile %s','%s olarak giriş yapıldı.','Karşılaştırma','Tablolar','Düşür','Tazele','Şema','Geçersiz şema.','Sıra yok.','%.3f s','Dış anahtarlar','karşılaştırma','Silinmek üzere','Kolon adı','Parametre adı','Tür','Uzunluk','Seçenekler','Otomatik yükselt','Varsayılan değerler','Yorum','Sonraya ekle','Yukarı taşı','AŞağı taş','Kaldır','Görünüm','Tablo','Kolon','Dizinler','Dizinleri değiştir','Kaynak','Hedef','Yükseltilmek üzere','Değiştir','Dış anahtar ekle','Tetikler','Tetik ekle','Permanent link','İhraç','Çıktı','Biçim','Yordamlar','Olaylar','Veri','düzen','Kullanıcı yarat','Sorguda hata',array('%d sıra)','%d kadar sıra'),array('Sorgu işletilmesi tamamlandı. %d sıra(row) etkilendi.','Sorgu işletilmesi tamamlandı. Bundan %d kadar sıra etkilendi.'),'İşletilmek için komut yok.',array('%d sorgunun işletilmesi tamamlandı.','%d kadar sorgunun işletilmesi tamamlandı.'),'Dosya gönder','Dosya gönderimi etkin değil.','İşlet','Dur hata','Sadece hataları göster.','Sunucudan','%s web sunucusu dosyası','Dosya çalıştır','Tarih','Boşluk','Edit all','Öğe silindi.','Öğe güncellendi.','Öğeler eklendi.','Ekle','Kaydet','Kaydet ve düzenlemeye devam et','Kaydet ve sonrakin ekle','Sil','Tablo düşürüldü.','Tablo değiştirildi.','Tablo yaratıldı.','Tablo yarat','kabul edilebilir alan sayısı aşıldı. Lütfen %s ve %s düşürün.','Tablo adı','motor','Bölümü tarafından','Bölümler','BÖlüm adı','Değerler','Dizinler değiştirilidi.','Dizin Türü','Kolon (uzunluğu)','Ad','Veritabanı düşürüldü.','Veritabanının ismi değiştirildi.','Veritabanı yaratıldı.','Veritabanı değiştirildi.','Veritabanı yarat','Şema düşürüldü.','Şema yaratıldı.','Şema değiştirildi.','Çağrı',array('Yordam çağrıldı, %d sıra(row) etkilendi.','Yordam çağrıldı, %d sıralar(rows) etkilendi.'),'Dış anahtar düşürüldü.','Dış anahtar değiştir.','Dış anahtar yarat.','Kaynak ve hedef kolonlar aynı veri türü olmak zorunda, hedef kolonda bir dizin ve başvurulan veri bulunmalı.','Dış anahtar','Hedef tablo','Değiş','Kolon eklde','Görünüm düşürüldü.','Görünüm değiştirildi.','Görünüm yaratıldı.','Görünüm yarat','Olay düşüdüldü.','Olay değiştirildi.','Olay yaratıldı.','Değiştirme olayı','Yaratma olayı','Başla','Son','Herzaman','Tamamlama koruması AÇIK','Yordam düşürüldü.','Yordam değiştirildi.','Yordam yaratıldı.','Değiştirme fonksyionu','Değiştirme yöntemi','Fonksiyon yarat','Yöntem yarat','Geri dönüş türü','Dizi düşürüldü.','Dizi yaratıldı.','Dizi değiştirildi.','Dizi değiştir','Dizi yarat','Tür düşürüldü.','Tür yaratıldı.','Tür değiştir','Tür yarat','Tetik düşürüldü.','Tetik değiştirildi.','Tetik yaratıldı.','Tetik değiştir.','Tetik yarat','Zaman','Olay','Kullanıcı düşürüldü.','Kullanıcı değiştirildi.','Kullanıcı yaratıldı.','Harmanlandı.','Yordam','İmtiyaz','Geri al',array('%d süreç öldürüldü.','%d adet süreç öldürüldü.'),'%d toplamda','Öldür',array('%d öğe etkilendi.','%d kadar öğe etkilendi.'),'Değerin üzerine çift tıklayın ve değiştirin.',array('%d sıra ithal edildi.','%d kadar sıra ithal edildi.'),'Tablo seçilemedi','İlişkiler','Değeri değiştirmek için düzenleme bağlantısını kullanın.','Sayfa','son','tüm sonuç','Klonla','İthal',' ','Tablolar budandı.','Tablolar taşındı.','Tablolar kopyalandı.','Tablolar düşürüldü.','Tablolar ve görünümler','Tablolarda veri ara.','Motor','Veri uzunluğu','Dizin uzunluğu','Serbest veri','Sıralar (Rows)','Çözümleme','En uygun hale getirme','Denetleme','Tamir','Buda','Diğer veritabanına taşı','Taşı','Kopyala','Diziler','Takvimli','Bir anda','şimdi');break;case"ro":$V=array('Ești precis?','Nu am putut încărca fișierul pe server.','Fișierul maxim admis - %sO.','Așa fișier nu există.','gol','original','În baza de date nu sunt tabele.','Limba','Alege','Folosiți una din următoarele extensii %s.','Fișierul deja există.','Tipuri de utilizatori','Număr','Data și timpul','Șire de caractere','Tip binar','Rețea','Geometrie','Liste','Sistema','Server','Nume de utilizator','Parola','Intră','Logare permanentă','Selectează','Arată structura','Modifică reprezentare','Modifică tabelul','Înscriere nouă','Ultima pagină','Editează',array('%d octet','%d octeți'),'Selectează','Funcții','Agregare','Căutare','oriunde','Sortare','descrescător','Limit','Lungimea textului','Acțiune','SQL query','deschide','salvează','Modifică baza de date','Modifică schema','Crează o schemă','Schema bazei de date','Privelegii','Dump','Eșire','baza de date','schema','Crează tabel nou','selectează','ltr','Retrimite datele POST?','CSRF token imposibil. Retrimite forma.','Ați eșit cu succes.','Sesiunile trebuie să fie pornite.','Timpul sesiunii a expirat, rog să te loghezi din nou.','Numele de utilizator sau parola este greșită.','Nu este extensie','Nu este aviabilă nici o extensie suportată (%s).','Mesajul POST este prea mare. Trimiteți mai puține date sau măriți parametrul configurației directivei %s.','Baza de date','Bază de deate invalidă.','Baze de date au fost șterse.','Alege baza de date','Crează o bază de date nouă','Lista proceselor','Variabile','Stare','Versiunea %s: %s cu extensia PHP %s','Ați intrat ca: %s','Colaționare','Tabele','Șterge','Împrospătează','Schema','Schemă incorectă.','Nu sunt înscrieri.','%.3f s','Cheiuri externe','colaționarea','La ștergere','Denumirea coloanei','Numele parametrului','Tip','Lungime','Acțiune','Creșterea automată','Valoarea inițială','Comentariu','Adaugă încă','Mișcă în sus','Mișcă în jos','Șterge','Reprezentare','Tabel','Coloană','Indexe','Modifică indexe','Sursă','Scop','La modificare','Modifică','Adaugă chei extern','Triggere','Adaugă trigger','Adresă permanentă','Export','Date de eșire','Format','Proceduri și funcții salvate','Evenimente','Date','editare','Crează utilizator','Eroare în query',array('%d înscriere','%d înscrieri'),array('Query executat, %d înscriere modificată.','Query executat, %d înscrieri modificate.'),'Nu sunt comenzi de executat.',array('%d query executat.','%d query-uri executate cu succes.'),'Încarcă fișierul','Încărcarea fișierelor este interzisă.','Execută','Opreștete la eroare','Arată doar greșeli','De pe server','Fișierul %s pe server','Execută fișier','Istoria','Curățp','Editează tot','Înregistrare a fost ștearsă.','Înregistrare a fost înnoită.','Înregistrarea%s a fost inserată.','Inserează','Salvează','Salvează și continuă editarea','Salvează și mai inserează','Șterge','Tabelul a fost șters.','Tabelul a fost modificat.','Tabelul a fost creat.','Crează tabel','Numărul maxim de înscrieri disponibile a fost atins. Majorați %s și %s.','Denumirea tabelului','tip','Împarte','Secțiuni','Denumirea secțiunii','Parametru','Indexele au fost modificate.','Tipul indexului','Coloană (lungimea)','Titlu','Baza de date a fost ștearsă.','Baza de date a fost redenumită.','Baza de date a fost creată.','Baza de date a fost modificată.','Crează baza de date','Schema a fost ștearsă.','Schema a fost creată.','Schema a fost modificată.','Apelează',array('A fost executată procedură, %d înscriere a fost modificată.','A fost executată procedură, %d înscrieri au fost modificate.'),'Chei extern a fost șters.','Chei extern a fost modificat.','Chei extern a fost creat.','Coloanele ar trebui să aibă aceleaşi tipuri de date, trebuie să existe date de referinţă și un index pe coloanela-ţintă.','Chei extern','Tabela scop','Modifică','Adaugă coloană','Reprezentarea a fost ștearsă.','Reprezentarea a fost modificată.','Reprezentarea a fost creată.','Crează reprezentare','Evenimentul a fost șters.','Evenimentul a fost modificat.','Evenimentul a fost adăugat.','Modifică eveniment','Creează evenimet','Început','Svârșit','Fiecare','Salvează după finisare','Procedura a fost ștearsă.','Procedura a fost modificată.','Procedura a fost creată.','Modifică funcția','Modifică procedura','Crează funcție','Crează procedură','Tipul returnării','«secvența» a fost ștearsă.','«secvența» a fost creată.','«secvența» a fost modificată.','Modifică «secvență»','Crează «secvență»','Tiipul a fost șters.','Crează tip nou.','Modifică tip','Crează tip noi','Triggerul a fost șters.','Triggerul a fost modificat.','Triggerul a fost creat.','Modifică trigger','Crează trigger','Timp','Eveniment','Utilizatorul a fost șters.','Utilizatorul a fost modificat.','Utilizatorul a fost creat.','Hashed','Procedură','Permite','Interzice',array('A fost finisat %d proces.','Au fost finisate %d procese.'),'În total %d','Termină',array('A fost modificată %d înscriere.','Au fost modificate %d înscrieri.'),'Dublu click pe o valoare pentru a o modifica.',array('%d rînd importat.','%d rînduri importate.'),'Nu am putut selecta date din tabel','Relații','Valoare poate fi modificată cu ajutorul butonului «modifică».','Pagina','ultima','tot rezultatul','Clonează','Importă',',','Tabelele au fost curățate.','Tabelele au fost mutate.','Tabelele au fost copiate','Tabelele au fost șterse.','Tabele și reprezentări','Caută în tabele','Tip','Cantitatea de date','Cantitatea de indexe','Spațiu liber','Înscrieri','Analizează','Optimizează','Controlează','Repară','Curăță','Mută în altă bază de date','Mută','Copiază','«Secvențe»','Program','În timpul curent','HH:MM:SS');break;case"ru":$V=array('Вы уверены?','Не удалось загрузить файл на сервер.','Максимальный разрешенный размер файла - %sB.','Такого файла не существует.','пусто','исходный','В базе данных нет таблиц.','Язык','Выбрать','Используйте одно из этих расширений %s.','Файл уже существует.','Типы пользователей','Число','Дата и время','Строки','Двоичный тип','Сеть','Геометрия','Списки','Движок','Сервер','Имя пользователя','Пароль','Войти','Оставаться в системе','Выбрать','Показать структуру','Изменить представление','Изменить таблицу','Новая запись','Последняя страница','Редактировать',array('%d байт','%d байта','%d байтов'),'Выбрать','Функции','Агрегация','Поиск','в любом месте','Сортировать','по убыванию','Лимит','Длина текста','Действие','SQL запрос','открыть','сохранить','Изменить базу данных','Изменить схему','Новая схема','Схема базы данных','Полномочия','Дамп','Выйти','база данных','схема','Создать новую таблицу','выбрать','ltr','Еще раз послать данные POST запроса?','Недействительный CSRF токен. Отправите форму ещё раз.','Вы успешно покинули систему.','Сессии должны быть включены.','Срок действия сесси истек, нужно снова войти в систему.','Неправильное имя пользователя или пароль.','Нет расширений','Не доступно ни одного расширения из поддерживаемых (%s).','Слишком большой объем POST-данных. Пошлите меньший объем данных или увеличьте параметр конфигурационной директивы %s.','База данных','Плохая база данных.','Базы данных удалены.','Выбрать базу данных','Создать новую базу данных','Список процессов','Переменные','Состояние','Версия %s: %s с PHP-расширением %s','Вы вошли как: %s','Режим сопоставления','Таблицы','Удалить','Обновить','Схема','Неправильная схема.','Нет записей.','%.3f s','Внешние ключи','режим сопоставления','При стирании','Название поля','Название параметра','Тип','Длина','Действие','Автоматическое приращение','Значения по умолчанию','Комментарий','Добавить еще','Переместить вверх','Переместить вниз','Удалить','Представление','Таблица','Колонка','Индексы','Изменить индексы','Источник','Цель','При обновлении','Изменить','Добавить внешний ключ','Триггеры','Добавить триггер','Постоянная ссылка','Экспорт','Выходные данные','Формат','Хранимые процедуры и функции','События','Данные','редактировать','Создать пользователя','Ошибка в запросe',array('%d строка','%d строки','%d строк'),array('Запрос завершен, изменена %d запись.','Запрос завершен, изменены %d записи.','Запрос завершен, изменено %d записей.'),'Нет команд для выполнения.',array('%d запрос выполнен успешно.','%d запроса выполнено успешно.','%d запросов выполнено успешно.'),'Загрузить файл на сервер','Загрузка файлов на сервер запрещена.','Выполнить','Остановить при ошибке','Только ошибки','С сервера','Файл %s на вебсервере','Запустить файл','История','Очистить','Редактировать всё','Запись удалена.','Запись обновлена.','Запись%s была вставлена.','Вставить','Сохранить','Сохранить и продолжить редактирование','Сохранить и вставить еще','Стереть','Таблица была удалена.','Таблица была изменена.','Таблица была создана.','Создать таблицу','Достигнуто максимальное значение количества доступных полей. Увеличьте %s и %s.','Название таблицы','тип','Разделить по','Разделы','Название раздела','Параметры','Индексы изменены.','Тип индекса','Колонка (длина)','Название','База данных была удалена.','База данных была переименована.','База данных была создана.','База данных была изменена.','Создать базу данных','Схема удалена.','Создана новая схема.','Схема изменена.','Вызвать',array('Была вызвана процедура, %d запись была изменена.','Была вызвана процедура, %d записи было изменено.','Была вызвана процедура, %d записей было изменено.'),'Внешний ключ был удален.','Внешний ключ был изменен.','Внешний ключ был создан.','Колонки должны иметь одинаковые типы данных, в результирующей колонке должен быть индекс, данные для импорта должны существовать.','Внешний ключ','Результирующая таблица','Изменить','Добавить колонку','Представление было удалено.','Представление было изменено.','Представление было создано.','Создать представление','Событие было удалено.','Событие было изменено.','Событие было создано.','Изменить событие','Создать событие','Начало','Конец','Каждые','После завершения сохранить','Процедура была удалена.','Процедура была изменена.','Процедура была создана.','Изменить функцию','Изменить процедуру','Создать функцию','Создать процедуру','Возвращаемый тип','«Последовательность» удалена.','Создана новая «последовательность».','«Последовательность» изменена.','Изменить «последовательность»','Создать «последовательность»','Тип удален.','Создан новый тип.','Изменить тип','Создать тип','Триггер был удален.','Триггер был изменен.','Триггер был создан.','Изменить триггер','Создать триггер','Время','Событие','Пользователь был удален.','Пользователь был изменен.','Пользователь был создан.','Хешировано','Процедура','Позволить','Запретить',array('Был завершен %d процесс.','Было завершено %d процесса.','Было завершёно %d процессов.'),'Всего %d','Завершить',array('Была изменена %d запись.','Были изменены %d записи.','Было изменено %d записей.'),'Кликни два раза по значению, чтобы его изменить.',array('Импортирована %d строка.','Импортировано %d строки.','Импортировано %d строк.'),'Не удалось получить данные из таблицы','Реляции','Изменить это значение можно с помощью ссылки «изменить».','Страница','последняя','весь результат','Клонировать','Импорт',' ','Таблицы были очищены.','Таблицы были перемещены.','Таблицы скопированы.','Таблицы были удалены.','Таблицы и представления','Поиск в таблицах','Тип','Объём данных','Объём индексов','Свободное место','Строк','Анализировать','Оптимизировать','Проверить','Исправить','Очистить','Переместить в другою базу данных','Переместить','Копировать','«Последовательности»','Расписание','В данное время','ЧЧ:ММ:СС');break;case"zh":$V=array('你确定吗？','不能上传文件。','最多允许的文件大小为 %sB','文件不存在。','空','原始','没有表。','语言','使用','请使用这些扩展中的一个：%s。','文件已存在。','用户类型','数字','日期时间','字符串','二进制','网络','几何图形','列表','系统','服务器','用户名','密码','登录','保持登录','选择数据','显示结构','更改视图','更改表','新建项','末页','编辑','%d 字节','选择','函数','集合','搜索','任意位置','排序','降序','限定','文本长度','动作','SQL命令','打开','保存','更改数据库','更改模式','创建模式','数据库概要','权限','导出','注销','数据库','模式','创建新表','选择','ltr','重新发送 POST 数据？','无效 CSRF 令牌。重新发送表单。','注销成功。','会话必须被启用。','会话已过期，请重新登录。','无效凭据。','没有扩展','没有支持的 PHP 扩展可用（%s）。','太大的 POST 数据。减少数据或者增加 %s 配置命令。','数据库','无效数据库。','已丢弃数据库。','选择数据库','创建新数据库','进程列表','变量','状态','%s 版本：%s 通过 PHP 扩展 %s','登录为：%s','校对','表','丢弃','刷新','模式','非法模式。','没有行。','%.3f 秒','外键','校对','ON DELETE','列名','参数名','类型','长度','选项','自动增量','默认值','注释','添加下一个','上移','下移','移除','视图','表','列','索引','更改索引','源','目标','ON UPDATE','更改','添加外键','触发器','创建触发器','固定链接','导出','输出','格式','子程序','事件','数据','编辑','创建用户','查询出错','%d 行','执行查询OK，%d 行受影响。','没有命令执行。','%d 条查询已成功执行。','文件上传','文件上传被禁用。','执行','出错时停止','仅显示错误','来自服务器','Web服务器文件 %s','运行文件','历史','清除','编辑全部','已删除项目。','已更新项目。','已插入项目%s。','插入','保存','保存并继续编辑','保存并插入下一个','删除','已丢弃表。','已更改表。','已创建表。','创建表','超过最多允许的字段数量。请增加 %s 和 %s 。','表名','引擎','分区类型','分区','分区名','值','已更改索引。','索引类型','列（长度）','名称','已丢弃数据库。','已重命名数据库。','已创建数据库。','已更改数据库。','创建数据库','已丢弃模式。','已创建模式。','已更改模式。','调用','子程序被调用，%d 行被影响。','已删除外键。','已更改外键。','已创建外键。','源列和目标列必须具有相同的数据类型，在目标列上必须有一个索引并且引用的数据必须存在。','外键','目标表','更改','增加列','已丢弃视图。','已更改视图。','已创建视图。','创建视图','已丢弃事件。','已更改事件。','已创建事件。','更改事件','创建事件','开始','结束','每','完成后保存','已丢弃子程序。','已更改子程序。','已创建子程序。','更改函数','更改过程','创建函数','创建过程','返回类型','已丢弃序列。','已创建序列。','已更改序列。','更改序列','创建序列','已丢弃类型。','已创建类型。','更改类型','创建类型','已丢弃触发器。','已更改触发器。','已创建触发器。','更改触发器','创建触发器','时间','事件','已丢弃用户。','已更改用户。','已创建用户。','Hashed','子程序','授权','废除','%d 个进程被终止','共计 %d','终止','%d 个项目受到影响。','在值上双击类修改它。','%d 行已导入。','不能选择该表','关联信息','使用编辑链接来修改该值。','页面','最后','所有结果','克隆','导入',',','已清空表。','已转移表。','表已复制。','已丢弃表。','表和视图','在表中搜索数据','引擎','数据长度','索引长度','数据空闲','行数','分析','优化','检查','修复','清空','转移到其它数据库','转移','复制','序列','调度','在指定时间','HH:MM:SS');break;case"zh-tw":$V=array('你確定嗎？','無法上傳檔案。','允許的檔案上限大小為%sB','檔案不存在','空值','原始','沒有資料表。','語言','使用','請使用下列其中一個 extension %s。','檔案已存在。','使用者類型','數字','日期時間','字符串','二進制','網路','幾何','列表','資料庫系統','伺服器','帳號','密碼','登入','永久登入','選擇資料','秀出結構','更改檢視表','更改資料表','新建項','最後一頁','編輯','%d byte(s)','選擇','函數','集合','搜尋','任意位置','排序','降冪','限定','Text 長度','動作','SQL命令','打開','儲存','更改資料庫','更改資料表結構','建立資料表結構','資料庫架構','權限','導入/導出','登出','資料庫','資料表結構','建立新資料表','選擇','ltr','重新發送表單資料?','無效的 CSRF token。請重新發送表單。','登出成功。','Session 必須被啟用。','Session 已過期，請重新登入。','無效的憑證。','沒有 擴充模組','沒有任何支援的PHP擴充模組（%s）。','POST 資料太大。減少資料或者增加 %s 的設定值。','資料庫','無效的資料庫。','資料庫已刪除。','選擇資料庫','建立新資料庫','進程列表','變數','狀態','%s版本：%s 透過PHP擴充模組 %s','登錄為：%s','校對','資料表','丟棄','重新載入','資料表結構','無效的資料表結構。','沒有行。','%.3f秒','外鍵','校對','ON DELETE','列名','參數名稱','類型','長度','選項','自動增加','預設值','註解','新增下一個','上移','下移','移除','檢視表','資料表','列','索引','更改索引','來源','目標','ON UPDATE','更改','新增外鍵','觸發器','建立觸發器','永久鏈接','匯出','輸出','格式','程序','事件','資料','編輯','建立使用者','查詢出錯','%d行','執行查詢OK，%d行受影響','沒有命令可執行。','已順利執行 %d 個查詢。','檔案上傳','檔案上傳被禁用。','執行','出錯時停止','僅顯示錯誤訊息','從伺服器','網頁伺服器檔案 %s','執行檔案','歷史','清除','編輯全部','該項目已被刪除','已更新項目。','已插入項目%s。','插入','儲存','保存並繼續編輯','儲存並插入下一個','刪除','已經刪除資料表。','資料表已更改。','資料表已更改。','建立資料表表','超過最多允許的字段數量。請增加%s和%s 。','資料表名稱','引擎','分區類型','分區','分區名','值','已更改索引。','索引類型','列（長度）','名稱','資料庫已刪除。','已重新命名資料庫。','已建立資料庫。','已更改資料庫。','建立資料庫','已刪除資料表結構。','已建立資料表結構。','已更改資料表結構。','呼叫','程序已被執行，%d行被影響','已刪除外鍵。','已更改外鍵。','已建立外鍵。','源列和目標列必須具有相同的數據類型，在目標列上必須有一個索引並且引用的數據必須存在。','外鍵','目標資料表','更改','新增資料列','已丟棄檢視表。','已更改檢視表。','已建立檢視表。','建立檢視表','已丟棄事件。','已更改事件。','已建立事件。','更改事件','建立事件','開始','結束','每','在完成後保存','已丟棄程序。','已更改子程序。','已建立子程序。','更改函數','更改過程','建立函數','建立預存程序','返回類型','已刪除 sequence。','已建立 sequence。','已更改 sequence。','更改 sequence','建立 sequence','已刪除類型。','已建立類型。','更改類型','建立類型','已丟棄觸發器。','已更改觸發器。','已建立觸發器。','更改觸發器','建立觸發器','時間','事件','已丟棄使用者。','已更改使用者。','已建立使用者。','Hashed','程序','授權','廢除','%d 個 Process(es) 被終止','總共 %d 個','終止','%d個項目受到影響。','雙擊以進行修改。','%d行已導入。','無法選擇該資料表','關聯','使用編輯連結來修改。','頁','最後一頁','所有結果','複製','匯入',',','已清空資料表。','已轉移資料表。','表格已經複製','已丟棄表。','資料表和檢視表','在資料庫搜尋','引擎','資料長度','索引長度','資料空閒','行數','分析','優化','檢查','修復','清空','轉移到其它資料庫','轉移','複製','Sequences','調度','在指定時間','HH:MM:SS');break;case"ja":$V=array('実行しますか？','ファイルをアップロードできません','最大ファイルサイズ %sB','ファイルは存在しません','空','元','テーブルがありません。','言語','使用','いずれかの拡張機能を使ってください %s','ファイルが既に存在します','ユーザー定義型','数字','日時','文字列','バイナリ','ネットワーク型','ジオメトリ型','リスト','データベース種類','サーバ','ユーザ名','パスワード','ログイン','永続的にログイン','データ','構造','ビューを変更','テーブルの変更','項目の作成','最後のページ','編集','%d バイト','選択','関数','集合','検索','任意','ソート','降順','制約','文字列の長さ','動作','SQLコマンド','開く','保存','データベースを変更','スキーマ変更','スキーマ追加','構造','権限','ダンプ','ログアウト','データベース','スキーマ','テーブルを作成','選択','ltr','再送信しますか？','不正なCSRFトークン。再送信してください','ログアウト','セッションを有効にしてください','セッションの期限切れ。ログインし直してください','不正なログイン','拡張機能がありません','PHPの拡張機能（%s）がセットアップされていません','POSTデータが大きすぎます。データサイズを小さくするか %s 設定を大きくしてください','データベース','不正なデータベース','データベースを削除しました','データベースを選択してください','新規にデータベースを作成','プロセス一覧','変数','状態','%sバージョン：%s、 PHP拡張機能 %s','ログ：%s','照合順序','テーブル','削除','リフレッシュ','スキーマ','無効なスキーマ','行がありません','%.3f 秒','外部キー','照合順序','ON DELETE','列名','参数名','型','長さ','設定','連番','規定値','コメント','追加','上','下','除外','ビュー','テーブル','列','索引','索引の変更','ソース','ターゲット','ON UPDATE','変更','外部キーを追加','トリガー','トリガーの追加','パーマネントリンク','エクスポート','出力','形式','ルーチン','イベント','データ','編集','ユーザを作成','クエリーのエラー','%d 行','クエリーを実行しました。%d 行を変更しました','実行するコマンドがありません','%d クエリーを実行しました','ファイルをアップロード','ファイルのアップロードが無効です','実行','エラーの場合は停止','エラーのみ表示','サーバーから実行','Webサーバファイル %s','ファイルを実行','履歴','消去','すべて編集','項目を削除しました','項目を更新しました','%s項目を挿入しました','挿入','保存','保存して継続','保存／追加','削除','テーブルを削除しました','テーブルを変更しました','テーブルを作成しました','テーブルを作成','定義可能な最大フィールド数を越えました。%s と %s を増やしてください。','テーブル名','エンジン','パーティション','パーティション','パーティション名','値','索引を変更しました','索引の型','列（長さ）','名称','データベースを削除しました','データベースの名前を変えました','データベースを作成しました','データベースを変更しました','データベースを作成','スキーマを削除しました','スキーマを追加しました','スキーマを変更しました','呼出し','ルーチンを呼びました。%d 行を変更しました','外部キーを削除しました','外部キーを変更しました','外部キーを作成しました','ソースとターゲットの列は同じデータ型でなければなりません。ターゲット列に索引があり、データが存在しなければなりません。','外キー','テーブル','変更','列を追加','ビューを削除しました','ビューを変更しました','ビューを作成しました','ビューを作成','削除しました','変更しました','作成しました','変更','作成','開始','終了','毎回','完成後に保存','ルーチンを作成','ルーチンを変更','ルーチンを作成','関数の変更','プロシージャの変更','関数の作成','プロシージャの作成','戻り値の型','シーケンスを削除しました','シーケンスを追加しました','シーケンスを変更しました','シーケンス変更','シーケンス作成','ユーザー定義型を削除しました','ユーザー定義型を追加しました','ユーザー定義型変更','ユーザー定義型作成','トリガーを削除しました','トリガーを変更しました','トリガーを追加しました','トリガーの変更','トリガーの作成','時間','イベント','ユーザを削除','ユーザを変更','ユーザを作成','Hashed','ルーチン','権限の付与','権限の取消し','%d プロセスを強制終了しました','合計 %d','強制終了','%d を更新しました','ダブルクリックして編集','%d 行をインポートしました','テーブルを選択できません','関係','リンクを編集する','ページ','最終','全結果','クローン','インポート',',','テーブルをtruncateしました','テーブルを移動しました','テーブルをコピーしました','テーブルを削除しました','テーブルとビュー','データを検索する','エンジン','データ長','索引長','空き','行数','分析','最適化','チェック','修復','Truncate','別のデータベースへ移動','移動','コピー','シーケンス','スケジュール','指定時刻','時:分:秒');break;case"ta":$V=array('நிச்ச‌ய‌மாக‌ ?','கோப்பை மேலேற்ற‌ம் (upload) செய்ய‌ இயல‌வில்லை.','கோப்பின் அதிக‌ப‌ட்ச‌ அள‌வு %sB.','கோப்பு இல்லை.','வெறுமை (empty)','அச‌ல்','அட்ட‌வ‌ணை இல்லை.','மொழி','உப‌யோகி','த‌ய‌வு செய்து ஒரு விரிவினை %s (extension) உப‌யோகிக்க‌வும்.','கோப்பு உள்ள‌து.','ப‌ய‌னாள‌ர் வ‌கைக‌ள்','எண்க‌ள்','தேதி ம‌ற்றும் நேர‌ம்','ச‌ர‌ம் (String)','பைன‌ரி','நெட்வொர்க்','வ‌டிவ‌விய‌ல் (Geometry)','ப‌ட்டிய‌ல்','சிஸ்ட‌ம் (System)','வ‌ழ‌ங்கி (Server)','ப‌ய‌னாள‌ர் (User)','க‌ட‌வுச்சொல்','நுழை','நிர‌ந்த‌ர‌மாக‌ நுழைய‌வும்','த‌க‌வ‌லை தேர்வு செய்','க‌ட்ட‌மைப்பை காண்பிக்க‌வும்','தோற்ற‌த்தை மாற்று','அட்ட‌வ‌ணையை மாற்று','புதிய‌ உருப்ப‌டி','க‌டைசி ப‌க்க‌ம்','தொகு',array('%d பைட்','%d பைட்டுக‌ள்'),'தேர்வு செய்','Functions','திர‌ள்வு (Aggregation)','தேடு','எங்காயினும்','த‌ர‌ம் பிரி','இற‌ங்குமுக‌மான‌','வ‌ர‌ம்பு','உரை நீள‌ம்','செய‌ல்','SQL க‌ட்ட‌ளை','திற‌','சேமி','த‌க‌வ‌ல்த‌ள‌த்தை மாற்று','அமைப்புமுறையை மாற்று','அமைப்புமுறையை உருவாக்கு','த‌க‌வ‌ல்த‌ள‌ அமைப்பு முறைக‌ள்','ச‌லுகைக‌ள் / சிற‌ப்புரிமைக‌ள்','Dump','வெளியேறு','த‌க‌வ‌ல்த‌ள‌ம்','அமைப்புமுறை','புதிய‌ அட்ட‌வ‌ணையை உருவாக்கு','தேர்வு செய்','ltr','POST data வை மீண்டும் அனுப்பவா?','CSRF டோக்க‌ன் செல்லாது. ப‌டிவ‌த்தை மீண்டும் அனுப்ப‌வும்.','வெற்றிக‌ர‌மாய் வெளியேறியாயிற்று.','செஷ‌ன் ஆத‌ர‌வு இய‌க்க‌ப்ப‌ட‌ வேண்டும்.','செஷ‌ன் காலாவ‌தியாகி விட்ட‌து. மீண்டும் நுழைய‌வும்.','ச‌ரியான‌ விப‌ர‌ங்க‌ள் இல்லை.','விரிவு (extensஇஒன்) இல்லை ','PHP ஆத‌ர‌வு விரிவுக‌ள் (%s) இல்லை.','மிக‌ அதிக‌மான‌ POST  த‌க‌வ‌ல். த‌க‌வ‌லை குறைக்க‌வும் அல்ல‌து %s வ‌டிவ‌மைப்பை (configuration directive) மாற்ற‌வும்.','த‌க‌வ‌ல்த‌ள‌ம்','த‌க‌வ‌ல்த‌ள‌ம் ச‌ரியானதல்ல‌.','த‌க‌வ‌ல் த‌ள‌ங்க‌ள் நீக்க‌ப்ப‌ட்டன‌.','த‌க‌வ‌ல்த‌ள‌த்தை தேர்வு செய்','புதிய‌ த‌க‌வ‌ல்த‌ள‌த்தை உருவாக்கு','வேலைக‌ளின் ப‌ட்டி','மாறிலிக‌ள் (Variables)','நிக‌ழ்நிலை (Status)','%s ப‌திப்பு: %s through PHP extension %s','ப‌ய‌னாளர்: %s','கொலேச‌ன்','அட்ட‌வ‌ணை','நீக்கு','புதுப்பி (Refresh)','அமைப்புமுறை','அமைப்புமுறை ச‌ரியான‌த‌ல்ல‌ (Invalid Schema).','வ‌ரிசை இல்லை.','%.3f s','வேற்று விசைக‌ள்','கொலேச‌ன்','ON DELETE','நெடுவ‌ரிசையின் பெய‌ர்','அள‌புரு (Parameter) பெய‌ர்','வ‌கை','நீளம்','வேண்டிய‌வ‌ற்றை ','ஏறுமான‌ம்','உள்ளிருக்கும் (Default) ம‌திப்புக‌ள் ','குறிப்பு','அடுத்த‌தை சேர்க்க‌வும்','மேலே ந‌க‌ர்த்து','கீழே நக‌ர்த்து','நீக்கு','தோற்றம்','அட்ட‌வ‌ணை','நெடுவ‌ரிசை','அக‌வ‌ரிசைக‌ள் (Index) ','அக‌வ‌ரிசையை (Index) மாற்று','மூல‌ம்','இல‌க்கு','ON UPDATE','மாற்று','வேற்று விசை சேர்க்க‌வும்','தூண்டுத‌ல்க‌ள்','தூண்டு விசையை சேர்','நிரந்தர இணைப்பு','ஏற்றும‌தி','வெளியீடு','ஃபார்ம‌ட் (Format)','ரொட்டீன் ','நிக‌ழ்ச்சிக‌ள்','த‌க‌வ‌ல்','தொகு','ப‌ய‌னாள‌ரை உருவாக்கு','வின‌வ‌லில் த‌வ‌றுள்ள‌து',array('%d வ‌ரிசை','%d வ‌ரிசைக‌ள்'),array('வின‌வ‌ல் செய‌ல்ப‌டுத்த‌ப்ப‌ட்ட‌து, %d வ‌ரிசை மாற்ற‌ப்ப‌ட்ட‌து.','வின‌வ‌ல் செய‌ல்ப‌டுத்த‌ப்ப‌ட்ட‌து, %d வ‌ரிசைக‌ள் மாற்றப்ப‌ட்ட‌ன‌.'),'செய‌ல் ப‌டுத்த‌ எந்த‌ க‌ட்ட‌ளைக‌ளும் இல்லை.',array('%d வின‌வ‌ல் செய‌ல்ப‌டுத்த‌ப்ப‌ட்ட‌து.','%d வின‌வ‌ல்க‌ள் செய‌ல்ப‌டுத்த‌ப்ப‌ட்ட‌ன‌.'),'கோப்பை மேலேற்று (upload) ','கோப்புக‌ள் மேலேற்றம் (upload)முட‌க்க‌ப்ப‌ட்டுள்ள‌ன‌.','செய‌ல்ப‌டுத்து','பிழை ஏற்ப‌டின் நிற்க‌','பிழைக‌ளை ம‌ட்டும் காண்பிக்க‌வும்','செர்வ‌ரில் இருந்து','வெப் ச‌ர்வ‌ர் கோப்பு %s','கோப்பினை இய‌க்க‌வும்','வ‌ர‌லாறு','துடை (Clear)','அனைத்தையும் தொகு','உருப்படி நீக்க‌ப்ப‌ட்ட‌து.','உருப்ப‌டி புதுப்பிக்க‌ப்ப‌ட்ட‌து.','உருப்ப‌டி (Item) சேர்க்க‌ப்ப‌ட்ட‌து.','புகுத்து','சேமி','சேமித்த‌ பிற‌கு தொகுப்ப‌தை தொட‌ர‌வும்','சேமித்த‌ப் பின் அடுத்த‌தை புகுத்து','நீக்கு','அட்ட‌வ‌ணை நீக்க‌ப்ப‌ட்ட‌து.','அட்ட‌வணை மாற்ற‌ப்ப‌ட்ட‌து.','அட்ட‌வ‌ணை உருவாக்க‌ப்ப‌ட்ட‌து.','அட்ட‌வ‌ணையை உருவாக்கு','அனும‌திக்க‌ப்ப‌ட்ட‌ அதிக‌ப‌ட்ச‌ கோப்புக‌ளின் எண்ணிக்கை மீற‌ப்ப‌ட்ட‌து. த‌ய‌வு செய்து %s ம‌ற்றும் %s யை அதிக‌ரிக்க‌வும்.','அட்ட‌வ‌ணைப் பெய‌ர்','எஞ்சின்','பிரித்த‌து','பிரிவுக‌ள்','பிரிவின் பெய‌ர்','ம‌திப்புக‌ள்','அக‌வ‌ரிசைக‌ள் (Indexes) மாற்ற‌ப்பட்ட‌து.','அக‌வ‌ரிசை வ‌கை (Index Type)','நெடுவ‌ரிசை (நீள‌ம்)','பெய‌ர்','த‌க‌வ‌ல்த‌ள‌ம் நீக்க‌ப்ப‌ட்ட‌து.','த‌க‌வ‌ல்த‌ள‌ம் பெய‌ர் மாற்ற‌ப்ப‌ட்ட‌து.','த‌க‌வ‌ல்த‌ள‌ம் உருவாக்க‌ப்ப‌ட்ட‌து.','த‌க‌வ‌ல்த‌ள‌ம் மாற்ற‌ப்ப‌ட்ட‌து.','த‌க‌வ‌ல்த‌ள‌த்தை உருவாக்கு','அமைப்புமுறை நீக்க‌ப்ப‌ட்ட‌து.','அமைப்புமுறை உருவாக்க‌ப்ப‌ட்ட‌து.','அமைப்புமுறை மாற்ற‌ப்ப‌ட்ட‌து.','அழை',array('ரொட்டீன்க‌ள் அழைக்க‌ப்பட்டுள்ள‌ன‌, %d வ‌ரிசை மாற்ற‌ம் அடைந்த‌து.','ரொட்டீன்க‌ள் அழைக்க‌ப்ப‌ட்டுள்ள‌ன‌, %d வ‌ரிசைக‌ள் மாற்றம் அடைந்துள்ள‌ன‌.'),'வேற்று விசை நீக்க‌ப்ப‌ட்ட‌து.','வேற்று விசை மாற்ற‌ப்ப‌ட்ட‌து.','வேற்று விசை உருவாக்க‌ப்ப‌ட்ட‌து.','இல‌க்கு நெடுவ‌ரிசையில் அக‌வ‌ரிசை (Index) ம‌ற்றும் குறிக்க‌ப்ப‌ட்ட‌ த‌க‌வல் (Referenced DATA) க‌ண்டிப்பாக‌ இருத்த‌ல் வேண்டும். மூல‌ நெடுவ‌ரிசை ம‌ற்றும் இலக்கு நெடுவ‌ரிசையின் த‌க‌வ‌ல் வ‌டிவ‌ம் (DATA TYPE) ஒன்றாக‌ இருக்க‌ வேண்டும்.','வேற்று விசை','அட்ட‌வ‌ணை இல‌க்கு','மாற்று','நெடு வ‌ரிசையை சேர்க்க‌வும்','தோற்ற‌ம் நீக்க‌ப்ப‌ட்ட‌து.','தோற்றம் மாற்றப்ப‌ட்ட‌து.','தோற்ற‌ம் உருவாக்க‌ப்ப‌ட்ட‌து.','தோற்றத்தை உருவாக்கு','நிக‌ழ்ச்சி (Event) நீக்க‌ப்ப‌ட்ட‌து.','நிக‌ழ்ச்சி (Event) மாற்றப்ப‌ட்ட‌து.','நிக‌ழ்ச்சி (Event) உருவாக்க‌‌ப்ப‌ட்ட‌து.','நிக‌ழ்ச்சியை (Event) மாற்று','நிக‌ழ்ச்சியை (Event) உருவாக்கு','தொட‌ங்கு','முடி (வு)','ஒவ்வொரு','முடிந்த‌தின் பின் பாதுகாக்க‌வும்','ரொட்டீன் நீக்க‌ப்ப‌ட்ட‌து.','ரொட்டீன் மாற்ற‌ப்ப‌ட்டது.','ரொட்டீன் உருவாக்க‌ப்ப‌ட்ட‌து.','Function மாற்று','செய‌ல்முறையை மாற்று','Function உருவாக்கு','செய்முறையை உருவாக்கு','திரும்பு வ‌கை','வ‌ரிசைமுறை நீக்க‌ப்ப‌ட்ட‌து.','வ‌ரிசைமுறை உருவாக்க‌ப்ப‌ட்ட‌து.','வ‌ரிசைமுறை மாற்ற‌ப்ப‌ட்ட‌து.','வ‌ரிசைமுறையை மாற்று','வ‌ரிசைமுறையை உருவாக்கு','வ‌கை (type) நீக்க‌ப்ப‌ட்ட‌து.','வ‌கை (type) உருவாக்க‌ப்ப‌ட்ட‌து.','வ‌கையினை (type) மாற்று','வ‌கையை உருவாக்கு','தூண்டு விசை நீக்க‌ப்ப‌ட்ட‌து.','தூண்டு விசை மாற்ற‌ப்ப‌ட்ட‌து.','தூண்டு விசை உருவாக்க‌ப்ப‌ட்ட‌து.','தூண்டு விசையை மாற்று','தூண்டு விசையை உருவாக்கு','நேர‌ம்','நிக‌ழ்ச்சி','ப‌யனீட்டாள‌ர் நீக்க‌ப்ப‌ட்டார்.','ப‌யனீட்டாள‌ர் மாற்றப்ப‌ட்டார்.','ப‌ய‌னீட்டாள‌ர் உருவாக்க‌ப்ப‌ட்ட‌து.','Hashed','ரொட்டீன்','அனும‌திய‌ளி','இர‌த்துச்செய்',array('%d வேலை வ‌லுவில் நிறுத்த‌ப‌ட்ட‌து.','%d வேலைக‌ள் வ‌லுவில் நிறுத்த‌ப‌ட்ட‌ன‌.'),'மொத்தம் %d ','வ‌லுவில் நிறுத்து',array('%d உருப்ப‌டி மாற்ற‌ம‌டைந்தது.','%d உருப்ப‌டிக‌ள் மாற்ற‌ம‌டைந்த‌ன‌.'),'ம‌திப்பினை மாற்ற அத‌ன் மீது இருமுறை சொடுக்க‌வும் (Double click).',array('%d வ‌ரிசை இற‌க்கும‌தி (Import) செய்ய‌ப்ப‌ட்ட‌து.','%d வ‌ரிசைக‌ள் இற‌க்கும‌தி (Import) செய்ய‌ப்ப‌ட்டன‌.'),'அட்ட‌வ‌ணையை தேர்வு செய்ய‌ முடிய‌வில்லை','உற‌வுக‌ள் (Relations)','இந்த‌ ம‌திப்பினை மாற்ற‌, தொகுப்பு இணைப்பினை உப‌யோகிக்க‌வும்.','ப‌க்க‌ம்','க‌டைசி','முழுமையான‌ முடிவு','ந‌க‌லி (Clone)','இற‌க்கும‌தி (Import)',',','அட்ட‌வ‌ணை குறைக்க‌ப்ப‌ட்ட‌து (truncated).','அட்ட‌வ‌ணை ந‌க‌ர்த்த‌ப்ப‌ட்ட‌து.','அட்டவணைகள் நகலெடுக்கப் பட்டது.','அட்ட‌வ‌ணை நீக்க‌ப்ப‌ட்ட‌து.','அட்ட‌வ‌ணைக‌ளும் பார்வைக‌ளும்','த‌க‌வ‌லை அட்ட‌வ‌ணையில் தேடு','எஞ்சின் (Engine)','த‌க‌வ‌ல் நீள‌ம்','Index நீள‌ம்','Data Free','வ‌ரிசைக‌ள்','நுணுகி ஆராய‌வும்','உக‌ப்பாக்கு (Optimize)','ப‌ரிசோதி','ப‌ழுது பார்','குறை (Truncate)','ம‌ற்ற‌ த‌க‌வ‌ல் தள‌த்திற்க்கு ந‌க‌ர்த்து','ந‌க‌ர்த்து','நகல்','வ‌ரிசைமுறை','கால‌ அட்ட‌வ‌ணை','குறித்த‌ நேர‌த்தில்','HH:MM:SS');break;case"ar":$V=array('هل أنت متأكد؟','من غير الممكن رفع الملف.','حجم الملف الأقصى هو %sB.','الملف غير موجود.','فارغ','الأصلي','لا توجد جداول.','اللغة','المستعمل','من فضلك إستعمل إحدى الإمتدادات: %s.','الملف موجود.','نوع المستخدم','أعداد','التاريخ و الوقت','سلاسل','ثنائية','شبكة','هندسة','قوائم','النظام','الخادم','المستعمل','كلمة المرور','تسجيل الدخول','تسجيل دخول دائم','عرض البيانات','عرض التركيبة','تعديل عرض','تعديل الجدول','عنصر جديد','الصفحة السابقة','تعديل','%d بايت','إختيار','الدوال','تجميع','بحث','في اي مكان','ترتيب','تنازلي','حد','طول النص','حركة','إستعلام SQL','فتح','حفظ','تعديل قاعدة البيانات','تعديل المخطط','إنشاء مخطط','مخطط فاعدة البيانات','الإمتيازات','تصدير','تسجيل الخروج','قاعدة بيانات','المخطط','أنشئ جدول جديد','تحديد','rtl','هل تود إعادة إرسال بيانات POST ؟','CSRF Token خاطئ. من فضلك أعد إرسال الإستمارة.','مع السلامة.','عليك تفعيل نظام الجلسات.','إنتهت الجلسة، من فضلك أعد تسجيل الدخول.','فشل في تسجيل الدخول.','إمتداد غير موجود','إمتدادات php المدعومة غير موجودة.','معلومات POST كبيرة جدا. قم بتقليص حجم المعلومات أو قم بزيادة قيمة %s في خيارات ال PHP.','قاعدة بيانات','قاعدة بيانات خاطئة.','تم حذف قواعد البيانات.','إختر قاعدة البيانات','أنشئ فاعدة بيانات','قائمة الإجراءات','متغيرات','حالة','النسخة %s : %s عن طريق إمتداد ال PHP %s','تم تسجيل الدخول بإسم %s','ترتيب','جداول','حذف','تحديث','المخطط','مخطط خاطئ.','لا توجد نتائج.','%.3f s','مفاتيح أجنبية','الترتيب','ON DELETE','إسم العمود','إسم المتغير','النوع','الطول','خيارات','تزايد تلقائي','القيمة الإفتراضية','تعليق','إضافة التالي','نقل للأعلى','نقل للأسفل','مسح','عرض','جدول','عمود','المؤشرات','تعديل المؤشرات','المصدر','الهدف','ON UPDATE','تعديل','إضافة مفتاح أجنبي','الزنادات','إضافة زناد','وصلة دائمة','تصدير','إخراج','الصيغة','الروتينات','الأحداث','معلومات','تعديل','إنشاء مستخدم','هناك خطأ في الإستعلام','%d أسطر','تم تنفسذ الإستعلام, %d عدد الأسطر المعدلة.','لا توجد أوامر للتنفيذ.',array('تم تنفيذ الإستعلام %d بنجاح.','تم تنفيذ الإستعلامات %d بنجاح.'),'رفع ملف','تم إلغاء رفع الملفات.','تنفيذ','أوقف في حالة حدوث خطأ','إعرض الأخطاء فقط','من الخادم','ملف %s من خادم الويب','نفذ الملف','تاريخ','مسح','تعديل الكل','تم حذف العنصر.','تم تعديل العنصر.','تم إدراج العنصر.','إنشاء','حفظ','إحفظ و واصل التعديل','جفظ و إنشاء التالي','مسح','تم حذف الجدول.','تم تعديل الجدول.','تم إنشاء الجدول.','إنشاء جدول','لقد تجاوزت العدد الأقصى للحقول. يرجى الرفع من %s و %s.','إسم الجدول','المحرك','مقسم بواسطة','التقسيمات','إسم التقسيم','القيم','تم تعديل المؤشر.','نوع المؤشر','العمود (الطول)','الإسم','تم حذف قاعدة البيانات.','تمت إعادة تسمية فاعدة البيانات.','تم إنشاء قاعدة البيانات.','تم تعديل قاعدة البيانات.','إنشاء قاعدة بيانات','تم حذف المخطط.','تم إنشاء المخطط.','تم تعديل المخطط.','إستدعاء','تم إستدعاء الروتين, عدد الأسطر المعدلة %d.','المفتاح الأجنبي تم مسحه.','المفتاح الأجنبي تم تعديله.','المفتاح الأجنبي تم إنشاؤه.','أعمدة المصدر و الهدف يجب أن تكون بنفس النوع, يجب أن يكون هناك مؤشر في أعمدة الهدف و البيانات المرجعية يجب ان تكون موجودة.','مفتاح أجنبي','الجدول المستهدف','تعديل','أضف عمود','تم مسح العرض.','تم تعديل العرض.','تم إنشاء العرض.','إنشاء عرض','تم مسح الحدث.','تم تعديل الحدث.','تم إنشاء الحدث.','تعديل حدث','إنشاء حدث','إبدأ','إنهاء','كل','حفظ عند الإنتهاء','تم حذف الروتين.','تم تعديل الروتين.','تم إنشاء الروتين.','تعديل الدالة','تعديل الإجراء','إنشاء دالة','إنشاء إجراء','نوع العودة','تم حذف السلسلة.','تم إنشاء السلسلة.','تم تعديل السلسلة.','تعديل سلسلة','إنشاء سلسلة','تم حذف النوع.','تم إنشاء النوع.','تعديل نوع','إنشاء نوع','تم حذف الزناد.','تم تعديل الزناد.','تم إنشاء الزناد.','تعديل زناد','إنشاء زناد','الوقت','الحدث','تم حذف المستخدم.','تم تعديل المستخدم.','تم إنشاء المستخدم.','تلبيد','روتين','موافق','إلغاء','عدد الإجراءات التي تم إيقافها %d.','%d في المجموع','إيقاف','عدد العناصر المعدلة هو %d.','أنقر نقرا مزدوجا على قيمة لتعديلها.','عدد الأسطر المستوردة هو %d.','من غير الممكن إختيار الجدول','علاقات','إستعمل الرابط "تعديل" لتعديل هذه القيمة.','صفحة','الأخيرة','نتيجة كاملة','نسخ','إستيراد',',','تم قطع الجداول.','تم نقل الجداول.','تم نسخ الجداول.','تم حذف الجداول.','الجداول و العروض','بحث في الجداول','المحرك','طول المعطيات.','طول المؤشر.','المساحة الحرة','الأسطر','تحليل','تحسين','فحص','إصلاح','قطع','نقل إلى قاعدة بيانات أخرى','نقل','نسخ','السلاسل','مواعيد','في وقت محدد','HH:MM:SS');break;}if(extension_loaded('pdo')){class
Min_PDO
extends
PDO{var$_result,$server_info,$affected_rows,$error;function
__construct(){}function
dsn($of,$Q,$T,$pf='auth_error'){set_exception_handler($pf);parent::__construct($of,$Q,$T);restore_exception_handler();$this->setAttribute(13,array('Min_PDOStatement'));$this->server_info=$this->getAttribute(4);}function
query($i,$gb=false){$j=parent::query($i);if(!$j){$nf=$this->errorInfo();$this->error=$nf[2];return
false;}$this->store_result($j);return$j;}function
multi_query($i){return$this->_result=$this->query($i);}function
store_result($j=null){if(!$j){$j=$this->_result;}if($j->columnCount()){$j->num_rows=$j->rowCount();return$j;}$this->affected_rows=$j->rowCount();return
true;}function
next_result(){return$this->_result->nextRowset();}function
result($i,$e=0){$j=$this->query($i);if(!$j){return
false;}$a=$j->fetch();return$a[$e];}}class
Min_PDOStatement
extends
PDOStatement{var$_offset=0,$num_rows;function
fetch_assoc(){return$this->fetch(2);}function
fetch_row(){return$this->fetch(3);}function
fetch_field(){$a=(object)$this->getColumnMeta($this->_offset++);$a->orgtable=$a->table;$a->orgname=$a->name;$a->charsetnr=(in_array("blob",$a->flags)?63:0);return$a;}}}$pa=array();$pa["sqlite"]="SQLite 3";$pa["sqlite2"]="SQLite 2";if(isset($_GET["sqlite"])||isset($_GET["sqlite2"])){$nc=array((isset($_GET["sqlite"])?"SQLite3":"SQLite"),"PDO_SQLite");define("DRIVER",(isset($_GET["sqlite"])?"sqlite":"sqlite2"));if(extension_loaded(isset($_GET["sqlite"])?"sqlite3":"sqlite")){if(isset($_GET["sqlite"])){class
Min_SQLite{var$extension="SQLite3",$server_info,$affected_rows,$error,$_link;function
Min_SQLite($ka){$this->_link=new
SQLite3($ka);$Qd=$this->_link->version();$this->server_info=$Qd["versionString"];}function
query($i){$j=@$this->_link->query($i);if(!$j){$this->error=$this->_link->lastErrorMsg();return
false;}elseif($j->numColumns()){return
new
Min_Result($j);}$this->affected_rows=$this->_link->changes();return
true;}function
quote($I){return"'".$this->_link->escapeString($I)."'";}function
store_result(){return$this->_result;}function
result($i,$e=0){$j=$this->query($i);if(!is_object($j)){return
false;}$a=$j->_result->fetchArray();return$a[$e];}}class
Min_Result{var$_result,$_offset=0,$num_rows;function
Min_Result($j){$this->_result=$j;}function
fetch_assoc(){return$this->_result->fetchArray(SQLITE3_ASSOC);}function
fetch_row(){return$this->_result->fetchArray(SQLITE3_NUM);}function
fetch_field(){$C=$this->_offset++;$z=$this->_result->columnType($C);return(object)array("name"=>$this->_result->columnName($C),"type"=>$z,"charsetnr"=>($z==SQLITE3_BLOB?63:0),);}function
__desctruct(){return$this->_result->finalize();}}}else{class
Min_SQLite{var$extension="SQLite",$server_info,$affected_rows,$error,$_link;function
Min_SQLite($ka){$this->server_info=sqlite_libversion();$this->_link=new
SQLiteDatabase($ka);}function
query($i,$gb=false){$uf=($gb?"unbufferedQuery":"query");$j=@$this->_link->$uf($i,SQLITE_BOTH,$n);if(!$j){$this->error=$n;return
false;}elseif($j===true){$this->affected_rows=$this->changes();return
true;}return
new
Min_Result($j);}function
quote($I){return"'".sqlite_escape_string($I)."'";}function
store_result(){return$this->_result;}function
result($i,$e=0){$j=$this->query($i);if(!is_object($j)){return
false;}$a=$j->_result->fetch();return$a[$e];}}class
Min_Result{var$_result,$_offset=0,$num_rows;function
Min_Result($j){$this->_result=$j;if(method_exists($j,'numRows')){$this->num_rows=$j->numRows();}}function
fetch_assoc(){$a=$this->_result->fetch(SQLITE_ASSOC);if(!$a){return
false;}$c=array();foreach($a
as$d=>$b){$c[($d[0]=='"'?idf_unescape($d):$d)]=$b;}return$c;}function
fetch_row(){return$this->_result->fetch(SQLITE_NUM);}function
fetch_field(){$f=$this->_result->fieldName($this->_offset++);$da='(\\[.*]|"(?:[^"]|"")*"|(.+))';if(preg_match("~^($da\\.)?$da\$~",$f,$k)){$h=($k[3]!=""?$k[3]:idf_unescape($k[2]));$f=($k[5]!=""?$k[5]:idf_unescape($k[4]));}return(object)array("name"=>$f,"orgname"=>$f,"orgtable"=>$h,);}}}}elseif(extension_loaded("pdo_sqlite")){class
Min_SQLite
extends
Min_PDO{var$extension="PDO_SQLite";function
Min_SQLite($ka){$this->dsn(DRIVER.":$ka","","");}}}if(class_exists("Min_SQLite")){class
Min_DB
extends
Min_SQLite{function
Min_DB(){$this->Min_SQLite(":memory:");}function
select_db($ka){if(is_readable($ka)&&$this->query("ATTACH ".$this->quote(ereg("(^[/\\]|:)",$ka)?$ka:dirname($_SERVER["SCRIPT_FILENAME"])."/$ka")." AS a")){$this->Min_SQLite($ka);return
true;}return
false;}function
multi_query($i){return$this->_result=$this->query($i);}function
next_result(){return
false;}}}function
idf_escape($O){return'"'.str_replace('"','""',$O).'"';}function
table($O){return
idf_escape($O);}function
connect(){return
new
Min_DB;}function
get_databases(){return
array();}function
limit($i,$s,$L,$N=0,$db=" "){return" $i$s".(isset($L)?$db."LIMIT $L".($N?" OFFSET $N":""):"");}function
limit1($i,$s){global$g;return($g->result("SELECT sqlite_compileoption_used('ENABLE_UPDATE_DELETE_LIMIT')")?limit($i,$s,1):" $i$s");}function
db_collation($t,$ba){global$g;return$g->result("PRAGMA encoding");}function
engines(){return
array();}function
logged_user(){return
get_current_user();}function
tables_list(){return
get_key_vals("SELECT name, type FROM sqlite_master WHERE type IN ('table', 'view') ORDER BY (name = 'sqlite_sequence'), name",1);}function
count_tables($_){return
array();}function
table_status($f=""){$c=array();foreach(get_rows("SELECT name AS Name, type AS Engine FROM sqlite_master WHERE type IN ('table', 'view')".($f!=""?" AND name = ".q($f):""))as$a){$a["Auto_increment"]="";$c[$a["Name"]]=$a;}foreach(get_rows("SELECT * FROM sqlite_sequence",null,"")as$a){$c[$a["name"]]["Auto_increment"]=$a["seq"];}return($f!=""?$c[$f]:$c);}function
is_view($E){return$E["Engine"]=="view";}function
fk_support($E){global$g;return!$g->result("SELECT sqlite_compileoption_used('OMIT_FOREIGN_KEY')");}function
fields($h){$c=array();foreach(get_rows("PRAGMA table_info(".table($h).")")as$a){$z=strtolower($a["type"]);$_a=$a["dflt_value"];$c[$a["name"]]=array("field"=>$a["name"],"type"=>(eregi("int",$z)?"integer":(eregi("char|clob|text",$z)?"text":(eregi("blob",$z)?"blob":(eregi("real|floa|doub",$z)?"real":"numeric")))),"full_type"=>$z,"default"=>(ereg("'(.*)'",$_a,$k)?str_replace("''","'",$k[1]):($_a=="NULL"?null:$_a)),"null"=>!$a["notnull"],"auto_increment"=>eregi('^integer$',$z)&&$a["pk"],"privileges"=>array("select"=>1,"insert"=>1,"update"=>1),"primary"=>$a["pk"],);}return$c;}function
indexes($h,$F=null){$c=array();$Oa=array();foreach(fields($h)as$e){if($e["primary"]){$Oa[]=$e["field"];}}if($Oa){$c[""]=array("type"=>"PRIMARY","columns"=>$Oa,"lengths"=>array());}foreach(get_rows("PRAGMA index_list(".table($h).")")as$a){$c[$a["name"]]["type"]=($a["unique"]?"UNIQUE":"INDEX");$c[$a["name"]]["lengths"]=array();foreach(get_rows("PRAGMA index_info(".idf_escape($a["name"]).")")as$jd){$c[$a["name"]]["columns"][]=$jd["name"];}}return$c;}function
foreign_keys($h){$c=array();foreach(get_rows("PRAGMA foreign_key_list(".table($h).")")as$a){$A=&$c[$a["id"]];if(!$A){$A=$a;}$A["source"][]=$a["from"];$A["target"][]=$a["to"];}return$c;}function
view($f){global$g;return
array("select"=>preg_replace('~^(?:[^`"[]+|`[^`]*`|"[^"]*")* AS\\s+~iU','',$g->result("SELECT sql FROM sqlite_master WHERE name = ".q($f))));}function
collations(){return(isset($_GET["create"])?get_vals("PRAGMA collation_list",1):array());}function
information_schema($t){return
false;}function
error(){global$g;return
h($g->error);}function
exact_value($b){return
q($b);}function
check_sqlite_name($f){global$g;$Ve="db|sdb|sqlite";if(!preg_match("~^[^\\0]*\\.($Ve)\$~",$f)){$g->error=lang(9,str_replace("|",", ",$Ve));return
false;}return
true;}function
create_database($t,$U){global$g;if(file_exists($t)){$g->error=lang(10);return
false;}if(!check_sqlite_name($t)){return
false;}$x=new
Min_SQLite($t);$x->query('PRAGMA encoding = "UTF-8"');$x->query('CREATE TABLE adminer (i)');$x->query('DROP TABLE adminer');return
true;}function
drop_databases($_){global$g;$g->Min_SQLite(":memory:");foreach($_
as$t){if(!@unlink($t)){$g->error=lang(10);return
false;}}return
true;}function
rename_database($f,$U){global$g;if(!check_sqlite_name($f)){return
false;}$g->Min_SQLite(":memory:");$g->error=lang(10);return@rename(DB,$f);}function
auto_increment(){return" PRIMARY KEY".(DRIVER=="sqlite"?" AUTOINCREMENT":"");}function
alter_table($h,$f,$p,$Na,$Da,$wb,$U,$Ta,$vb){$v=array();foreach($p
as$e){if($e[1]){$v[]=($h!=""&&$e[0]==""?"ADD ":"  ").implode($e[1]);}}$v=array_merge($v,$Na);if($h!=""){foreach($v
as$b){if(!queries("ALTER TABLE ".table($h)." $b")){return
false;}}if($h!=$f&&!queries("ALTER TABLE ".table($h)." RENAME TO ".table($f))){return
false;}}elseif(!queries("CREATE TABLE ".table($f)." (\n".implode(",\n",$v)."\n)")){return
false;}if($Ta){queries("UPDATE sqlite_sequence SET seq = $Ta WHERE name = ".q($f));}return
true;}function
alter_indexes($h,$v){foreach($v
as$b){if(!queries($b[2]=="DROP"?"DROP INDEX ".idf_escape($b[1]):"CREATE $b[0] ".($b[0]!="INDEX"?"INDEX ":"").idf_escape($b[1]!=""?$b[1]:uniqid($h."_"))." ON ".table($h)." $b[2]")){return
false;}}return
true;}function
truncate_tables($D){return
apply_queries("DELETE FROM",$D);}function
drop_views($Y){return
apply_queries("DROP VIEW",$Y);}function
drop_tables($D){return
apply_queries("DROP TABLE",$D);}function
move_tables($D,$Y,$ea){return
false;}function
trigger($f){global$g;preg_match('~^CREATE\\s+TRIGGER\\s*(?:[^`"\\s]+|`[^`]*`|"[^"]*")+\\s*([a-z]+)\\s+([a-z]+)\\s+ON\\s*(?:[^`"\\s]+|`[^`]*`|"[^"]*")+\\s*(?:FOR\\s*EACH\\s*ROW\\s)?(.*)~is',$g->result("SELECT sql FROM sqlite_master WHERE name = ".q($f)),$k);return
array("Timing"=>strtoupper($k[1]),"Event"=>strtoupper($k[2]),"Trigger"=>$f,"Statement"=>$k[3]);}function
triggers($h){$c=array();foreach(get_rows("SELECT * FROM sqlite_master WHERE type = 'trigger' AND tbl_name = ".q($h))as$a){preg_match('~^CREATE\\s+TRIGGER\\s*(?:[^`"\\s]+|`[^`]*`|"[^"]*")+\\s*([a-z]+)\\s*([a-z]+)~i',$a["sql"],$k);$c[$a["name"]]=array($k[1],$k[2]);}return$c;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER","INSTEAD OF"),"Type"=>array("FOR EACH ROW"),);}function
routine($f,$z){}function
routines(){}function
routine_languages(){}function
begin(){return
queries("BEGIN");}function
insert_into($h,$r){return
queries("INSERT INTO ".table($h).($r?" (".implode(", ",array_keys($r)).")\nVALUES (".implode(", ",$r).")":"DEFAULT VALUES"));}function
insert_update($h,$r,$Oa){return
queries("REPLACE INTO ".table($h)." (".implode(", ",array_keys($r)).") VALUES (".implode(", ",$r).")");}function
last_id(){global$g;return$g->result("SELECT LAST_INSERT_ROWID()");}function
explain($g,$i){return$g->query("EXPLAIN $i");}function
types(){return
array();}function
schemas(){return
array();}function
get_schema(){return"";}function
set_schema($Bd){return
true;}function
create_sql($h,$Ta){global$g;return$g->result("SELECT sql FROM sqlite_master WHERE type = 'table' AND name = ".q($h));}function
truncate_sql($h){return"DELETE FROM ".table($h);}function
use_sql($fa){}function
trigger_sql($h,$W){return
implode(get_vals("SELECT sql || ';;\n' FROM sqlite_master WHERE type = 'trigger' AND name = ".q($h)));}function
show_variables(){global$g;$c=array();foreach(array("auto_vacuum","cache_size","count_changes","default_cache_size","empty_result_callbacks","encoding","foreign_keys","full_column_names","fullfsync","journal_mode","journal_size_limit","legacy_file_format","locking_mode","page_size","max_page_count","read_uncommitted","recursive_triggers","reverse_unordered_selects","secure_delete","short_column_names","synchronous","temp_store","temp_store_directory","schema_version","integrity_check","quick_check")as$d){$c[$d]=$g->result("PRAGMA $d");}return$c;}function
show_status(){$c=array();foreach(get_vals("PRAGMA compile_options")as$wf){list($d,$b)=explode("=",$wf,2);$c[$d]=$b;}return$c;}function
support($rb){return
ereg('^(view|trigger|variables|status|dump)$',$rb);}$u="sqlite";$R=array("integer"=>0,"real"=>0,"numeric"=>0,"text"=>0,"blob"=>0);$Pa=array_keys($R);$lb=array();$ic=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL","");$ca=array("hex","length","lower","round","unixepoch","upper");$nb=array("avg","count","count distinct","group_concat","max","min","sum");$Jb=array(array(),array("integer|real|numeric"=>"+/-","text"=>"||",));}$pa["pgsql"]="PostgreSQL";if(isset($_GET["pgsql"])){$nc=array("PgSQL","PDO_PgSQL");define("DRIVER","pgsql");if(extension_loaded("pgsql")){class
Min_DB{var$extension="PgSQL",$_link,$_result,$_string,$_database=true,$server_info,$affected_rows,$error;function
_error($qf,$n){if(ini_bool("html_errors")){$n=html_entity_decode(strip_tags($n));}$n=ereg_replace('^[^:]*: ','',$n);$this->error=$n;}function
connect($G,$Q,$T){set_error_handler(array($this,'_error'));$this->_string="host='".str_replace(":","' port='",addcslashes($G,"'\\"))."' user='".addcslashes($Q,"'\\")."' password='".addcslashes($T,"'\\")."'";$this->_link=@pg_connect($this->_string.(DB!=""?" dbname='".addcslashes(DB,"'\\")."'":" dbname='template1'"),PGSQL_CONNECT_FORCE_NEW);if(!$this->_link&&DB!=""){$this->_database=false;$this->_link=@pg_connect("$this->_string dbname='template1'",PGSQL_CONNECT_FORCE_NEW);}restore_error_handler();if($this->_link){$Qd=pg_version($this->_link);$this->server_info=$Qd["server"];pg_set_client_encoding($this->_link,"UTF8");}return(bool)$this->_link;}function
quote($I){return"'".pg_escape_string($this->_link,$I)."'";}function
select_db($fa){if($fa==DB){return$this->_database;}$c=@pg_connect("$this->_string dbname='".addcslashes($fa,"'\\")."'",PGSQL_CONNECT_FORCE_NEW);if($c){$this->_link=$c;}return$c;}function
close(){$this->_link=@pg_connect("$this->_string dbname='template1'");}function
query($i,$gb=false){$j=@pg_query($this->_link,$i);if(!$j){$this->error=pg_last_error($this->_link);return
false;}elseif(!pg_num_fields($j)){$this->affected_rows=pg_affected_rows($j);return
true;}return
new
Min_Result($j);}function
multi_query($i){return$this->_result=$this->query($i);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($i,$e=0){$j=$this->query($i);if(!$j||!$j->num_rows){return
false;}return
pg_fetch_result($j->_result,0,$e);}}class
Min_Result{var$_result,$_offset=0,$num_rows;function
Min_Result($j){$this->_result=$j;$this->num_rows=pg_num_rows($j);}function
fetch_assoc(){return
pg_fetch_assoc($this->_result);}function
fetch_row(){return
pg_fetch_row($this->_result);}function
fetch_field(){$C=$this->_offset++;$c=new
stdClass;if(function_exists('pg_field_table')){$c->orgtable=pg_field_table($this->_result,$C);}$c->name=pg_field_name($this->_result,$C);$c->orgname=$c->name;$c->type=pg_field_type($this->_result,$C);$c->charsetnr=($c->type=="bytea"?63:0);return$c;}function
__destruct(){pg_free_result($this->_result);}}}elseif(extension_loaded("pdo_pgsql")){class
Min_DB
extends
Min_PDO{var$extension="PDO_PgSQL";function
connect($G,$Q,$T){$I="pgsql:host='".str_replace(":","' port='",addcslashes($G,"'\\"))."' options='-c client_encoding=utf8'";$this->dsn($I.(DB!=""?" dbname='".addcslashes(DB,"'\\")."'":""),$Q,$T);return
true;}function
select_db($fa){return(DB==$fa);}function
close(){}}}function
idf_escape($O){return'"'.str_replace('"','""',$O).'"';}function
table($O){return
idf_escape($O);}function
connect(){global$o;$g=new
Min_DB;$Aa=$o->credentials();if($g->connect($Aa[0],$Aa[1],$Aa[2])){return$g;}return$g->error;}function
get_databases(){return
get_vals("SELECT datname FROM pg_database");}function
limit($i,$s,$L,$N=0,$db=" "){return" $i$s".(isset($L)?$db."LIMIT $L".($N?" OFFSET $N":""):"");}function
limit1($i,$s){return" $i$s";}function
db_collation($t,$ba){global$g;return$g->result("SHOW LC_COLLATE");}function
engines(){return
array();}function
logged_user(){global$g;return$g->result("SELECT user");}function
tables_list(){return
get_key_vals("SELECT table_name, table_type FROM information_schema.tables WHERE table_schema = current_schema() ORDER BY table_name");}function
count_tables($_){return
array();}function
table_status($f=""){$c=array();foreach(get_rows("SELECT relname AS \"Name\", CASE relkind WHEN 'r' THEN '' ELSE 'view' END AS \"Engine\", pg_relation_size(oid) AS \"Data_length\", pg_total_relation_size(oid) - pg_relation_size(oid) AS \"Index_length\", obj_description(oid, 'pg_class') AS \"Comment\", relhasoids AS \"Oid\"
FROM pg_class
WHERE relkind IN ('r','v')
AND relnamespace = (SELECT oid FROM pg_namespace WHERE nspname = current_schema())".($f!=""?" AND relname = ".q($f):""))as$a){$c[$a["Name"]]=$a;}return($f!=""?$c[$f]:$c);}function
is_view($E){return$E["Engine"]=="view";}function
fk_support($E){return
true;}function
fields($h){$c=array();foreach(get_rows("SELECT a.attname AS field, format_type(a.atttypid, a.atttypmod) AS full_type, d.adsrc AS default, a.attnotnull, col_description(c.oid, a.attnum) AS comment
FROM pg_class c
JOIN pg_namespace n ON c.relnamespace = n.oid
JOIN pg_attribute a ON c.oid = a.attrelid
LEFT JOIN pg_attrdef d ON c.oid = d.adrelid AND a.attnum = d.adnum
WHERE c.relname = ".q($h)."
AND n.nspname = current_schema()
AND NOT a.attisdropped
AND a.attnum > 0
ORDER BY a.attnum")as$a){ereg('(.*)(\\((.*)\\))?',$a["full_type"],$k);list(,$a["type"],,$a["length"])=$k;$a["full_type"]=$a["type"].($a["length"]?"($a[length])":"");$a["null"]=($a["attnotnull"]=="f");$a["auto_increment"]=eregi("^nextval\\(",$a["default"]);$a["privileges"]=array("insert"=>1,"select"=>1,"update"=>1);$c[$a["field"]]=$a;}return$c;}function
indexes($h,$F=null){global$g;if(!is_object($F)){$F=$g;}$c=array();$kf=$F->result("SELECT oid FROM pg_class WHERE relname = ".q($h));$B=get_key_vals("SELECT attnum, attname FROM pg_attribute WHERE attrelid = $kf AND attnum > 0",$F);foreach(get_rows("SELECT relname, indisunique, indisprimary, indkey FROM pg_index i, pg_class ci WHERE i.indrelid = $kf AND ci.oid = i.indexrelid",$F)as$a){$c[$a["relname"]]["type"]=($a["indisprimary"]=="t"?"PRIMARY":($a["indisunique"]=="t"?"UNIQUE":"INDEX"));$c[$a["relname"]]["columns"]=array();foreach(explode(" ",$a["indkey"])as$rf){$c[$a["relname"]]["columns"][]=$B[$rf];}$c[$a["relname"]]["lengths"]=array();}return$c;}function
foreign_keys($h){$c=array();foreach(get_rows("SELECT tc.constraint_name, kcu.column_name, rc.update_rule AS on_update, rc.delete_rule AS on_delete, unique_constraint_schema AS ns, ccu.table_name AS table, ccu.column_name AS ref
FROM information_schema.table_constraints tc
LEFT JOIN information_schema.key_column_usage kcu USING (constraint_catalog, constraint_schema, constraint_name)
LEFT JOIN information_schema.referential_constraints rc USING (constraint_catalog, constraint_schema, constraint_name)
LEFT JOIN information_schema.constraint_column_usage ccu ON rc.unique_constraint_catalog = ccu.constraint_catalog AND rc.unique_constraint_schema = ccu.constraint_schema AND rc.unique_constraint_name = ccu.constraint_name
WHERE tc.constraint_type = 'FOREIGN KEY' AND tc.constraint_schema = current_schema() AND tc.table_name = ".q($h))as$a){$A=&$c[$a["constraint_name"]];if(!$A){$A=$a;}$A["source"][]=$a["column_name"];$A["target"][]=$a["ref"];}return$c;}function
view($f){global$g;return
array("select"=>$g->result("SELECT pg_get_viewdef(".q($f).")"));}function
collations(){return
array();}function
information_schema($t){return($t=="information_schema");}function
error(){global$g;$c=h($g->error);if(preg_match('~^(.*\\n)?([^\\n]*)\\n( *)\\^(\\n.*)?$~s',$c,$k)){$c=$k[1].preg_replace('~((?:[^&]|&[^;]*;){'.strlen($k[3]).'})(.*)~','\\1<b>\\2</b>',$k[2]).$k[4];}return
nl_br($c);}function
exact_value($b){return
q($b);}function
create_database($t,$U){return
queries("CREATE DATABASE ".idf_escape($t).($U?" ENCODING ".idf_escape($U):""));}function
drop_databases($_){global$g;$g->close();return
apply_queries("DROP DATABASE",$_,'idf_escape');}function
rename_database($f,$U){return
queries("ALTER DATABASE ".idf_escape(DB)." RENAME TO ".idf_escape($f));}function
auto_increment(){return"";}function
alter_table($h,$f,$p,$Na,$Da,$wb,$U,$Ta,$vb){$v=array();$pb=array();foreach($p
as$e){$C=idf_escape($e[0]);$b=$e[1];if(!$b){$v[]="DROP $C";}else{$rd=$b[5];unset($b[5]);if(isset($b[6])&&$e[0]==""){$b[1]=($b[1]=="bigint"?" big":" ")."serial";}if($e[0]==""){$v[]=($h!=""?"ADD ":"  ").implode($b);}else{if($C!=$b[0]){$pb[]="ALTER TABLE ".table($h)." RENAME $C TO $b[0]";}$v[]="ALTER $C TYPE$b[1]";if(!$b[6]){$v[]="ALTER $C ".($b[3]?"SET$b[3]":"DROP DEFAULT");$v[]="ALTER $C ".($b[2]==" NULL"?"DROP NOT":"SET").$b[2];}}if($e[0]!=""||$rd!=""){$pb[]="COMMENT ON COLUMN ".table($h).".$b[0] IS ".($rd!=""?substr($rd,9):"''");}}}$v=array_merge($v,$Na);if($h==""){array_unshift($pb,"CREATE TABLE ".table($f)." (\n".implode(",\n",$v)."\n)");}elseif($v){array_unshift($pb,"ALTER TABLE ".table($h)."\n".implode(",\n",$v));}if($h!=""&&$h!=$f){$pb[]="ALTER TABLE ".table($h)." RENAME TO ".table($f);}if($h!=""||$Da!=""){$pb[]="COMMENT ON TABLE ".table($f)." IS ".q($Da);}if($Ta!=""){}foreach($pb
as$i){if(!queries($i)){return
false;}}return
true;}function
alter_indexes($h,$v){$ma=array();$Ja=array();foreach($v
as$b){if($b[0]!="INDEX"){$ma[]=($b[2]=="DROP"?"\nDROP CONSTRAINT ".idf_escape($b[1]):"\nADD $b[0] ".($b[0]=="PRIMARY"?"KEY ":"").$b[2]);}elseif($b[2]=="DROP"){$Ja[]=idf_escape($b[1]);}elseif(!queries("CREATE INDEX ".idf_escape($b[1]!=""?$b[1]:uniqid($h."_"))." ON ".table($h)." $b[2]")){return
false;}}return((!$ma||queries("ALTER TABLE ".table($h).implode(",",$ma)))&&(!$Ja||queries("DROP INDEX ".implode(", ",$Ja))));}function
truncate_tables($D){return
queries("TRUNCATE ".implode(", ",array_map('table',$D)));return
true;}function
drop_views($Y){return
queries("DROP VIEW ".implode(", ",array_map('table',$Y)));}function
drop_tables($D){return
queries("DROP TABLE ".implode(", ",array_map('table',$D)));}function
move_tables($D,$Y,$ea){foreach($D
as$h){if(!queries("ALTER TABLE ".table($h)." SET SCHEMA ".idf_escape($ea))){return
false;}}foreach($Y
as$h){if(!queries("ALTER VIEW ".table($h)." SET SCHEMA ".idf_escape($ea))){return
false;}}return
true;}function
trigger($f){$H=get_rows('SELECT trigger_name AS "Trigger", condition_timing AS "Timing", event_manipulation AS "Event", \'FOR EACH \' || action_orientation AS "Type", action_statement AS "Statement" FROM information_schema.triggers WHERE event_object_table = '.q($_GET["trigger"]).' AND trigger_name = '.q($f));return
reset($H);}function
triggers($h){$c=array();foreach(get_rows("SELECT * FROM information_schema.triggers WHERE event_object_table = ".q($h))as$a){$c[$a["trigger_name"]]=array($a["condition_timing"],$a["event_manipulation"]);}return$c;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER"),"Type"=>array("FOR EACH ROW","FOR EACH STATEMENT"),);}function
routines(){return
get_rows('SELECT p.proname AS "ROUTINE_NAME", p.proargtypes AS "ROUTINE_TYPE", pg_catalog.format_type(p.prorettype, NULL) AS "DTD_IDENTIFIER"
FROM pg_catalog.pg_namespace n
JOIN pg_catalog.pg_proc p ON p.pronamespace = n.oid
WHERE n.nspname = current_schema()
ORDER BY p.proname');}function
routine_languages(){return
get_vals("SELECT langname FROM pg_catalog.pg_language");}function
begin(){return
queries("BEGIN");}function
insert_into($h,$r){return
queries("INSERT INTO ".table($h).($r?" (".implode(", ",array_keys($r)).")\nVALUES (".implode(", ",$r).")":"DEFAULT VALUES"));}function
insert_update($h,$r,$Oa){global$g;$ta=array();$s=array();foreach($r
as$d=>$b){$ta[]="$d = $b";if(isset($Oa[idf_unescape($d)])){$s[]="$d = $b";}}return($s&&queries("UPDATE ".table($h)." SET ".implode(", ",$ta)." WHERE ".implode(" AND ",$s))&&$g->affected_rows)||queries("INSERT INTO ".table($h)." (".implode(", ",array_keys($r)).") VALUES (".implode(", ",$r).")");}function
last_id(){return
0;}function
explain($g,$i){return$g->query("EXPLAIN $i");}function
types(){return
get_vals("SELECT typname
FROM pg_type
WHERE typnamespace = (SELECT oid FROM pg_namespace WHERE nspname = current_schema())
AND typtype IN ('b','d','e')
AND typelem = 0");}function
schemas(){return
get_vals("SELECT nspname FROM pg_namespace");}function
get_schema(){global$g;return$g->result("SELECT current_schema()");}function
set_schema($La){global$g,$R,$Pa;$c=$g->query("SET search_path TO ".idf_escape($La));foreach(types()as$z){if(!isset($R[$z])){$R[$z]=0;$Pa[lang(11)][]=$z;}}return$c;}function
use_sql($fa){return"\connect ".idf_escape($fa);}function
show_variables(){return
get_key_vals("SHOW ALL");}function
show_status(){}function
support($rb){return
ereg('^(comment|view|scheme|sequence|trigger|type|variables|drop_col)$',$rb);}$u="pgsql";$R=array();$Pa=array();foreach(array(lang(12)=>array("smallint"=>5,"integer"=>10,"bigint"=>19,"boolean"=>1,"numeric"=>0,"real"=>7,"double precision"=>16,"money"=>20),lang(13)=>array("date"=>13,"time"=>17,"timestamp"=>20,"interval"=>0),lang(14)=>array("character"=>0,"character varying"=>0,"text"=>0,"tsquery"=>0,"tsvector"=>0,"uuid"=>0,"xml"=>0),lang(15)=>array("bit"=>0,"bit varying"=>0,"bytea"=>0),lang(16)=>array("cidr"=>43,"inet"=>43,"macaddr"=>17,"txid_snapshot"=>0),lang(17)=>array("box"=>0,"circle"=>0,"line"=>0,"lseg"=>0,"path"=>0,"point"=>0,"polygon"=>0),)as$d=>$b){$R+=$b;$Pa[$d]=array_keys($b);}$lb=array();$ic=array("=","<",">","<=",">=","!=","~","!~","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL","");$ca=array("char_length","lower","round","to_hex","to_timestamp","upper");$nb=array("avg","count","count distinct","max","min","sum");$Jb=array(array("char"=>"md5","date|time"=>"now",),array("int|numeric|real|money"=>"+/-","date|time"=>"+ interval/- interval","char|text"=>"||",));}$pa["oracle"]="Oracle";if(isset($_GET["oracle"])){$nc=array("OCI8","PDO_OCI");define("DRIVER","oracle");if(extension_loaded("oci8")){class
Min_DB{var$extension="oci8",$_link,$_result,$server_info,$affected_rows,$error;function
_error($qf,$n){if(ini_bool("html_errors")){$n=html_entity_decode(strip_tags($n));}$n=ereg_replace('^[^:]*: ','',$n);$this->error=$n;}function
connect($G,$Q,$T){$this->_link=@oci_new_connect($Q,$T,$G,"AL32UTF8");if($this->_link){$this->server_info=oci_server_version($this->_link);return
true;}$n=oci_error();$this->error=$n["message"];return
false;}function
quote($I){return"'".str_replace("'","''",$I)."'";}function
select_db($fa){return
true;}function
query($i,$gb=false){$j=oci_parse($this->_link,$i);if(!$j){$n=oci_error($this->_link);$this->error=$n["message"];return
false;}set_error_handler(array($this,'_error'));$c=@oci_execute($j);restore_error_handler();if($c){if(oci_num_fields($j)){return
new
Min_Result($j);}$this->affected_rows=oci_num_rows($j);}return$c;}function
multi_query($i){return$this->_result=$this->query($i);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($i,$e=1){$j=$this->query($i);if(!is_object($j)||!oci_fetch($j->_result)){return
false;}return
oci_result($j->_result,$e);}}class
Min_Result{var$_result,$_offset=1,$num_rows;function
Min_Result($j){$this->_result=$j;}function
_convert($a){foreach((array)$a
as$d=>$b){if(is_a($b,'OCI-Lob')){$a[$d]=$b->load();}}return$a;}function
fetch_assoc(){return$this->_convert(oci_fetch_assoc($this->_result));}function
fetch_row(){return$this->_convert(oci_fetch_row($this->_result));}function
fetch_field(){$C=$this->_offset++;$c=new
stdClass;$c->name=oci_field_name($this->_result,$C);$c->orgname=$c->name;$c->type=oci_field_type($this->_result,$C);$c->charsetnr=(ereg("raw|blob|bfile",$c->type)?63:0);return$c;}function
__destruct(){oci_free_statement($this->_result);}}}elseif(extension_loaded("pdo_oci")){class
Min_DB
extends
Min_PDO{var$extension="PDO_OCI";function
connect($G,$Q,$T){$this->dsn("oci:dbname=//$G;charset=AL32UTF8",$Q,$T);return
true;}function
select_db($fa){return
true;}}}function
idf_escape($O){return'"'.str_replace('"','""',$O).'"';}function
table($O){return
idf_escape($O);}function
connect(){global$o;$g=new
Min_DB;$Aa=$o->credentials();if($g->connect($Aa[0],$Aa[1],$Aa[2])){return$g;}return$g->error;}function
get_databases(){return
get_vals("SELECT tablespace_name FROM user_tablespaces");}function
limit($i,$s,$L,$N=0,$db=" "){return($N?" * FROM (SELECT t.*, rownum AS rnum FROM (SELECT $i$s) t WHERE rownum <= ".($L+$N).") WHERE rnum > $N":(isset($L)?" * FROM (SELECT $i$s) WHERE rownum <= ".($L+$N):" $i$s"));}function
limit1($i,$s){return" $i$s";}function
db_collation($t,$ba){global$g;return$g->result("SELECT value FROM nls_database_parameters WHERE parameter = 'NLS_CHARACTERSET'");}function
engines(){return
array();}function
logged_user(){global$g;return$g->result("SELECT USER FROM DUAL");}function
tables_list(){return
get_key_vals("SELECT table_name, 'table' FROM all_tables WHERE tablespace_name = ".q(DB)."
UNION SELECT view_name, 'view' FROM user_views");}function
count_tables($_){return
array();}function
table_status($f=""){$c=array();$Ye=q($f);foreach(get_rows('SELECT table_name "Name", \'table\' "Engine" FROM all_tables WHERE tablespace_name = '.q(DB).($f!=""?" AND table_name = $Ye":"")."
UNION SELECT view_name, 'view' FROM user_views".($f!=""?" WHERE view_name = $Ye":""))as$a){if($f!=""){return$a;}$c[$a["Name"]]=$a;}return$c;}function
is_view($E){return$E["Engine"]=="view";}function
fk_support($E){return
true;}function
fields($h){$c=array();foreach(get_rows("SELECT * FROM all_tab_columns WHERE table_name = ".q($h)." ORDER BY column_id")as$a){$z=$a["DATA_TYPE"];$X="$a[DATA_PRECISION],$a[DATA_SCALE]";if($X==","){$X=$a["DATA_LENGTH"];}$c[$a["COLUMN_NAME"]]=array("field"=>$a["COLUMN_NAME"],"full_type"=>$z.($X?"($X)":""),"type"=>strtolower($z),"length"=>$X,"default"=>$a["DATA_DEFAULT"],"null"=>($a["NULLABLE"]=="Y"),"privileges"=>array("insert"=>1,"select"=>1,"update"=>1),);}return$c;}function
indexes($h,$F=null){$c=array();foreach(get_rows("SELECT uic.*, uc.constraint_type
FROM user_ind_columns uic
LEFT JOIN user_constraints uc ON uic.index_name = uc.constraint_name AND uic.table_name = uc.table_name
WHERE uic.table_name = ".q($h)."
ORDER BY uc.constraint_type, uic.column_position",$F)as$a){$c[$a["INDEX_NAME"]]["type"]=($a["CONSTRAINT_TYPE"]=="P"?"PRIMARY":($a["CONSTRAINT_TYPE"]=="U"?"UNIQUE":"INDEX"));$c[$a["INDEX_NAME"]]["columns"][]=$a["COLUMN_NAME"];$c[$a["INDEX_NAME"]]["lengths"][]=($a["CHAR_LENGTH"]&&$a["CHAR_LENGTH"]!=$a["COLUMN_LENGTH"]?$a["CHAR_LENGTH"]:null);}return$c;}function
view($f){$H=get_rows('SELECT text "select" FROM user_views WHERE view_name = '.q($f));return
reset($H);}function
collations(){return
array();}function
information_schema($t){return
false;}function
error(){global$g;return
h($g->error);}function
exact_value($b){return
q($b);}function
explain($g,$i){$g->query("EXPLAIN PLAN FOR $i");return$g->query("SELECT * FROM plan_table");}function
alter_table($h,$f,$p,$Na,$Da,$wb,$U,$Ta,$vb){$v=$Ja=array();foreach($p
as$e){$b=$e[1];if($b&&$e[0]!=""&&idf_escape($e[0])!=$b[0]){queries("ALTER TABLE ".table($h)." RENAME COLUMN ".idf_escape($e[0])." TO $b[0]");}if($b){$v[]=($h!=""?($e[0]!=""?"MODIFY (":"ADD ("):"  ").implode($b).($h!=""?")":"");}else{$Ja[]=idf_escape($e[0]);}}if($h==""){return
queries("CREATE TABLE ".table($f)." (\n".implode(",\n",$v)."\n)");}return(!$v||queries("ALTER TABLE ".table($h)."\n".implode("\n",$v)))&&(!$Ja||queries("ALTER TABLE ".table($h)." DROP (".implode(", ",$Ja).")"))&&($h==$f||queries("ALTER TABLE ".table($h)." RENAME TO ".table($f)));}function
foreign_keys($h){return
array();}function
truncate_tables($D){return
apply_queries("TRUNCATE TABLE",$D);}function
drop_views($Y){return
apply_queries("DROP VIEW",$Y);}function
drop_tables($D){return
apply_queries("DROP TABLE",$D);}function
begin(){return
true;}function
insert_into($h,$r){return
queries("INSERT INTO ".table($h)." (".implode(", ",array_keys($r)).")\nVALUES (".implode(", ",$r).")");}function
last_id(){return
0;}function
schemas(){return
array();}function
get_schema(){return"";}function
set_schema($Bd){return
true;}function
show_variables(){return
get_key_vals('SELECT name, display_value FROM v$parameter');}function
show_status(){$H=get_rows('SELECT * FROM v$instance');return
reset($H);}function
support($rb){return
ereg("view|drop_col|variables|status",$rb);}$u="oracle";$R=array();$Pa=array();foreach(array(lang(12)=>array("number"=>38,"binary_float"=>12,"binary_double"=>21),lang(13)=>array("date"=>10,"timestamp"=>29,"interval year"=>12,"interval day"=>28),lang(14)=>array("char"=>2000,"varchar2"=>4000,"nchar"=>2000,"nvarchar2"=>4000,"clob"=>4294967295,"nclob"=>4294967295),lang(15)=>array("raw"=>2000,"long raw"=>2147483648,"blob"=>4294967295,"bfile"=>4294967296),)as$d=>$b){$R+=$b;$Pa[$d]=array_keys($b);}$lb=array();$ic=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT REGEXP","NOT IN","IS NOT NULL","");$ca=array("length","lower","round","upper");$nb=array("avg","count","count distinct","max","min","sum");$Jb=array(array("date"=>"current_date","timestamp"=>"current_timestamp",),array("number|float|double"=>"+/-","date|timestamp"=>"+ interval/- interval","char|clob"=>"||",));}$pa["mssql"]="MS SQL";if(isset($_GET["mssql"])){$nc=array("SQLSRV","MSSQL");define("DRIVER","mssql");if(extension_loaded("sqlsrv")){class
Min_DB{var$extension="sqlsrv",$_link,$_result,$server_info,$affected_rows,$error;function
_get_error(){$this->error="";foreach(sqlsrv_errors()as$n){$this->error.="$n[message]\n";}$this->error=rtrim($this->error);}function
connect($G,$Q,$T){$this->_link=@sqlsrv_connect($G,array("UID"=>$Q,"PWD"=>$T));if($this->_link){$vf=sqlsrv_server_info($this->_link);$this->server_info=$vf['SQLServerVersion'];}else{$this->_get_error();}return(bool)$this->_link;}function
quote($I){return"'".str_replace("'","''",$I)."'";}function
select_db($fa){return$this->query("USE $fa");}function
query($i,$gb=false){$j=sqlsrv_query($this->_link,$i);if(!$j){$this->_get_error();return
false;}return$this->store_result($j);}function
multi_query($i){$this->_result=sqlsrv_query($this->_link,$i);if(!$this->_result){$this->_get_error();return
false;}return
true;}function
store_result($j=null){if(!$j){$j=$this->_result;}if(sqlsrv_field_metadata($j)){return
new
Min_Result($j);}$this->affected_rows=sqlsrv_rows_affected($j);return
true;}function
next_result(){return
sqlsrv_next_result($this->_result);}function
result($i,$e=0){$j=$this->query($i);if(!is_object($j)){return
false;}$a=$j->fetch_row();return$a[$e];}}class
Min_Result{var$_result,$_offset=0,$_fields,$num_rows;function
Min_Result($j){$this->_result=$j;}function
_convert($a){foreach((array)$a
as$d=>$b){if(is_a($b,'DateTime')){$a[$d]=$b->format("Y-m-d H:i:s");}}return$a;}function
fetch_assoc(){return$this->_convert(sqlsrv_fetch_array($this->_result,SQLSRV_FETCH_ASSOC,SQLSRV_SCROLL_NEXT));}function
fetch_row(){return$this->_convert(sqlsrv_fetch_array($this->_result,SQLSRV_FETCH_NUMERIC,SQLSRV_SCROLL_NEXT));}function
fetch_field(){if(!$this->_fields){$this->_fields=sqlsrv_field_metadata($this->_result);}$e=$this->_fields[$this->_offset++];$c=new
stdClass;$c->name=$e["Name"];$c->orgname=$e["Name"];$c->type=($e["Type"]==1?254:0);return$c;}function
seek($N){for($l=0;$l<$N;$l++){sqlsrv_fetch($this->_result);}}function
__destruct(){sqlsrv_free_stmt($this->_result);}}}elseif(extension_loaded("mssql")){class
Min_DB{var$extension="MSSQL",$_link,$_result,$server_info,$affected_rows,$error;function
connect($G,$Q,$T){$this->_link=@mssql_connect($G,$Q,$T);if($this->_link){$j=$this->query("SELECT SERVERPROPERTY('ProductLevel'), SERVERPROPERTY('Edition')");$a=$j->fetch_row();$this->server_info=$this->result("sp_server_info 2",2)." [$a[0]] $a[1]";}else{$this->error=mssql_get_last_message();}return(bool)$this->_link;}function
quote($I){return"'".str_replace("'","''",$I)."'";}function
select_db($fa){return
mssql_select_db($fa);}function
query($i,$gb=false){$j=mssql_query($i,$this->_link);if(!$j){$this->error=mssql_get_last_message();return
false;}if($j===true){$this->affected_rows=mssql_rows_affected($this->_link);return
true;}return
new
Min_Result($j);}function
multi_query($i){return$this->_result=$this->query($i);}function
store_result(){return$this->_result;}function
next_result(){return
mssql_next_result($this->_result);}function
result($i,$e=0){$j=$this->query($i);if(!is_object($j)){return
false;}return
mssql_result($j->_result,0,$e);}}class
Min_Result{var$_result,$_offset=0,$_fields,$num_rows;function
Min_Result($j){$this->_result=$j;$this->num_rows=mssql_num_rows($j);}function
fetch_assoc(){return
mssql_fetch_assoc($this->_result);}function
fetch_row(){return
mssql_fetch_row($this->_result);}function
num_rows(){return
mssql_num_rows($this->_result);}function
fetch_field(){$c=mssql_fetch_field($this->_result);$c->orgtable=$c->table;$c->orgname=$c->name;return$c;}function
seek($N){mssql_data_seek($this->_result,$N);}function
__destruct(){mssql_free_result($this->_result);}}}function
idf_escape($O){return"[".str_replace("]","]]",$O)."]";}function
table($O){return($_GET["ns"]!=""?idf_escape($_GET["ns"]).".":"").idf_escape($O);}function
connect(){global$o;$g=new
Min_DB;$Aa=$o->credentials();if($g->connect($Aa[0],$Aa[1],$Aa[2])){return$g;}return$g->error;}function
get_databases(){return
get_vals("EXEC sp_databases");}function
limit($i,$s,$L,$N=0,$db=" "){return(isset($L)?" TOP (".($L+$N).")":"")." $i$s";}function
limit1($i,$s){return
limit($i,$s,1);}function
db_collation($t,$ba){global$g;return$g->result("SELECT collation_name FROM sys.databases WHERE name =  ".q($t));}function
engines(){return
array();}function
logged_user(){global$g;return$g->result("SELECT SUSER_NAME()");}function
tables_list(){return
get_key_vals("SELECT name, type_desc FROM sys.all_objects WHERE schema_id = SCHEMA_ID(".q(get_schema()).") AND type IN ('S', 'U', 'V') ORDER BY name");}function
count_tables($_){global$g;$c=array();foreach($_
as$t){$g->select_db($t);$c[$t]=$g->result("SELECT COUNT(*) FROM INFORMATION_SCHEMA.TABLES");}return$c;}function
table_status($f=""){$c=array();foreach(get_rows("SELECT name AS Name, type_desc AS Engine FROM sys.all_objects WHERE schema_id = SCHEMA_ID(".q(get_schema()).") AND type IN ('S', 'U', 'V')".($f!=""?" AND name = ".q($f):""))as$a){if($f!=""){return$a;}$c[$a["Name"]]=$a;}return$c;}function
is_view($E){return$E["Engine"]=="VIEW";}function
fk_support($E){return
true;}function
fields($h){$c=array();foreach(get_rows("SELECT c.*, t.name type, d.definition [default]
FROM sys.all_columns c
JOIN sys.all_objects o ON c.object_id = o.object_id
JOIN sys.types t ON c.user_type_id = t.user_type_id
LEFT JOIN sys.default_constraints d ON c.default_object_id = d.parent_column_id
WHERE o.schema_id = SCHEMA_ID(".q(get_schema()).") AND o.type IN ('S', 'U', 'V') AND o.name = ".q($h))as$a){$z=$a["type"];$X=(ereg("char|binary",$z)?$a["max_length"]:($z=="decimal"?"$a[precision],$a[scale]":""));$c[$a["name"]]=array("field"=>$a["name"],"full_type"=>$z.($X?"($X)":""),"type"=>$z,"length"=>$X,"default"=>$a["default"],"null"=>$a["is_nullable"],"auto_increment"=>$a["is_identity"],"collation"=>$a["collation_name"],"privileges"=>array("insert"=>1,"select"=>1,"update"=>1),"primary"=>$a["is_identity"],);}return$c;}function
indexes($h,$F=null){$c=array();foreach(get_rows("SELECT i.name, key_ordinal, is_unique, is_primary_key, c.name AS column_name
FROM sys.indexes i
INNER JOIN sys.index_columns ic ON i.object_id = ic.object_id AND i.index_id = ic.index_id
INNER JOIN sys.columns c ON ic.object_id = c.object_id AND ic.column_id = c.column_id
WHERE OBJECT_NAME(i.object_id) = ".q($h),$F)as$a){$c[$a["name"]]["type"]=($a["is_primary_key"]?"PRIMARY":($a["is_unique"]?"UNIQUE":"INDEX"));$c[$a["name"]]["lengths"]=array();$c[$a["name"]]["columns"][$a["key_ordinal"]]=$a["column_name"];}return$c;}function
view($f){global$g;return
array("select"=>preg_replace('~^(?:[^[]|\\[[^]]*])*\\s+AS\\s+~isU','',$g->result("SELECT VIEW_DEFINITION FROM INFORMATION_SCHEMA.VIEWS WHERE TABLE_SCHEMA = SCHEMA_NAME() AND TABLE_NAME = ".q($f))));}function
collations(){$c=array();foreach(get_vals("SELECT name FROM fn_helpcollations()")as$U){$c[ereg_replace("_.*","",$U)][]=$U;}return$c;}function
information_schema($t){return
false;}function
error(){global$g;return
nl_br(h(preg_replace('~^(\\[[^]]*])+~m','',$g->error)));}function
exact_value($b){return
q($b);}function
create_database($t,$U){return
queries("CREATE DATABASE ".idf_escape($t).(eregi('^[a-z0-9_]+$',$U)?" COLLATE $U":""));}function
drop_databases($_){return
queries("DROP DATABASE ".implode(", ",array_map('idf_escape',$_)));}function
rename_database($f,$U){if(eregi('^[a-z0-9_]+$',$U)){queries("ALTER DATABASE ".idf_escape(DB)." COLLATE $U");}queries("ALTER DATABASE ".idf_escape(DB)." MODIFY NAME = ".idf_escape($f));return
true;}function
auto_increment(){return" IDENTITY".($_POST["Auto_increment"]!=""?"(".(+$_POST["Auto_increment"]).",1)":"")." PRIMARY KEY";}function
alter_table($h,$f,$p,$Na,$Da,$wb,$U,$Ta,$vb){$v=array();foreach($p
as$e){$C=idf_escape($e[0]);$b=$e[1];if(!$b){$v["DROP"][]=" COLUMN $C";}else{$b[1]=preg_replace("~( COLLATE )'(\\w+)'~","\\1\\2",$b[1]);if($e[0]==""){$v["ADD"][]="\n  ".implode("",$b).($h==""?substr($Na[$b[0]],16+strlen($b[0])):"");}else{unset($b[6]);if($C!=$b[0]){queries("EXEC sp_rename ".q(table($h).".$C").", ".q(idf_unescape($b[0])).", 'COLUMN'");}$v["ALTER COLUMN ".implode("",$b)][]="";}}}if($h==""){return
queries("CREATE TABLE ".table($f)." (".implode(",",(array)$v["ADD"])."\n)");}if($h!=$f){queries("EXEC sp_rename ".q(table($h)).", ".q($f));}if($Na){$v[""]=$Na;}foreach($v
as$d=>$b){if(!queries("ALTER TABLE ".idf_escape($f)." $d".implode(",",$b))){return
false;}}return
true;}function
alter_indexes($h,$v){$w=array();$Ja=array();foreach($v
as$b){if($b[2]=="DROP"){if($b[0]=="PRIMARY"){$Ja[]=idf_escape($b[1]);}else{$w[]=idf_escape($b[1])." ON ".table($h);}}elseif(!queries(($b[0]!="PRIMARY"?"CREATE $b[0] ".($b[0]!="INDEX"?"INDEX ":"").idf_escape($b[1]!=""?$b[1]:uniqid($h."_"))." ON ".table($h):"ALTER TABLE ".table($h)." ADD PRIMARY KEY")." $b[2]")){return
false;}}return(!$w||queries("DROP INDEX ".implode(", ",$w)))&&(!$Ja||queries("ALTER TABLE ".table($h)." DROP ".implode(", ",$Ja)));}function
begin(){return
queries("BEGIN TRANSACTION");}function
insert_into($h,$r){return
queries("INSERT INTO ".table($h).($r?" (".implode(", ",array_keys($r)).")\nVALUES (".implode(", ",$r).")":"DEFAULT VALUES"));}function
insert_update($h,$r,$Oa){$ta=array();$s=array();foreach($r
as$d=>$b){$ta[]="$d = $b";if(isset($Oa[idf_unescape($d)])){$s[]="$d = $b";}}return
queries("MERGE ".table($h)." USING (VALUES(".implode(", ",$r).")) AS source (c".implode(", c",range(1,count($r))).") ON ".implode(" AND ",$s)." WHEN MATCHED THEN UPDATE SET ".implode(", ",$ta)." WHEN NOT MATCHED THEN INSERT (".implode(", ",array_keys($r)).") VALUES (".implode(", ",$r).");");}function
last_id(){global$g;return$g->result("SELECT SCOPE_IDENTITY()");}function
explain($g,$i){$g->query("SET SHOWPLAN_ALL ON");$c=$g->query($i);$g->query("SET SHOWPLAN_ALL OFF");return$c;}function
foreign_keys($h){$c=array();foreach(get_rows("EXEC sp_fkeys @fktable_name = ".q($h))as$a){$A=&$c[$a["FK_NAME"]];$A["table"]=$a["PKTABLE_NAME"];$A["source"][]=$a["FKCOLUMN_NAME"];$A["target"][]=$a["PKCOLUMN_NAME"];}return$c;}function
truncate_tables($D){return
apply_queries("TRUNCATE TABLE",$D);}function
drop_views($Y){return
queries("DROP VIEW ".implode(", ",array_map('table',$Y)));}function
drop_tables($D){return
queries("DROP TABLE ".implode(", ",array_map('table',$D)));}function
move_tables($D,$Y,$ea){return
apply_queries("ALTER SCHEMA ".idf_escape($ea)." TRANSFER",array_merge($D,$Y));}function
trigger($f){$H=get_rows("SELECT s.name [Trigger],
CASE WHEN OBJECTPROPERTY(s.id, 'ExecIsInsertTrigger') = 1 THEN 'INSERT' WHEN OBJECTPROPERTY(s.id, 'ExecIsUpdateTrigger') = 1 THEN 'UPDATE' WHEN OBJECTPROPERTY(s.id, 'ExecIsDeleteTrigger') = 1 THEN 'DELETE' END [Event],
CASE WHEN OBJECTPROPERTY(s.id, 'ExecIsInsteadOfTrigger') = 1 THEN 'INSTEAD OF' ELSE 'AFTER' END [Timing],
c.text
FROM sysobjects s
JOIN syscomments c ON s.id = c.id
WHERE s.xtype = 'TR' AND s.name = ".q($f));$c=reset($H);if($c){$c["Statement"]=preg_replace('~^.+\\s+AS\\s+~isU','',$c["text"]);}return$c;}function
triggers($h){$c=array();foreach(get_rows("SELECT sys1.name,
CASE WHEN OBJECTPROPERTY(sys1.id, 'ExecIsInsertTrigger') = 1 THEN 'INSERT' WHEN OBJECTPROPERTY(sys1.id, 'ExecIsUpdateTrigger') = 1 THEN 'UPDATE' WHEN OBJECTPROPERTY(sys1.id, 'ExecIsDeleteTrigger') = 1 THEN 'DELETE' END [Event],
CASE WHEN OBJECTPROPERTY(sys1.id, 'ExecIsInsteadOfTrigger') = 1 THEN 'INSTEAD OF' ELSE 'AFTER' END [Timing]
FROM sysobjects sys1
JOIN sysobjects sys2 ON sys1.parent_obj = sys2.id
WHERE sys1.xtype = 'TR' AND sys2.name = ".q($h))as$a){$c[$a["name"]]=array($a["Timing"],$a["Event"]);}return$c;}function
trigger_options(){return
array("Timing"=>array("AFTER","INSTEAD OF"),"Type"=>array("AS"),);}function
schemas(){return
get_vals("SELECT name FROM sys.schemas");}function
get_schema(){global$g;if($_GET["ns"]!=""){return$_GET["ns"];}return$g->result("SELECT SCHEMA_NAME()");}function
set_schema($La){return
true;}function
use_sql($fa){return"USE ".idf_escape($fa);}function
show_variables(){return
array();}function
show_status(){return
array();}function
support($rb){return
ereg('^(scheme|trigger|view|drop_col)$',$rb);}$u="mssql";$R=array();$Pa=array();foreach(array(lang(12)=>array("tinyint"=>3,"smallint"=>5,"int"=>10,"bigint"=>20,"bit"=>1,"decimal"=>0,"real"=>12,"float"=>53,"smallmoney"=>10,"money"=>20),lang(13)=>array("date"=>10,"smalldatetime"=>19,"datetime"=>19,"datetime2"=>19,"time"=>8,"datetimeoffset"=>10),lang(14)=>array("char"=>8000,"varchar"=>8000,"text"=>2147483647,"nchar"=>4000,"nvarchar"=>4000,"ntext"=>1073741823),lang(15)=>array("binary"=>8000,"varbinary"=>8000,"image"=>2147483647),)as$d=>$b){$R+=$b;$Pa[$d]=array_keys($b);}$lb=array();$ic=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL","");$ca=array("len","lower","round","upper");$nb=array("avg","count","count distinct","max","min","sum");$Jb=array(array("date|time"=>"getdate",),array("int|decimal|real|float|money|datetime"=>"+/-","char|text"=>"+",));}$pa=array("server"=>"MySQL")+$pa;if(!defined("DRIVER")){$nc=array("MySQLi","MySQL","PDO_MySQL");define("DRIVER","server");if(extension_loaded("mysqli")){class
Min_DB
extends
MySQLi{var$extension="MySQLi";function
Min_DB(){parent::init();}function
connect($G,$Q,$T){mysqli_report(MYSQLI_REPORT_OFF);list($mf,$Hc)=explode(":",$G,2);$c=@$this->real_connect(($G!=""?$mf:ini_get("mysqli.default_host")),($G.$Q!=""?$Q:ini_get("mysqli.default_user")),($G.$Q.$T!=""?$T:ini_get("mysqli.default_pw")),null,(is_numeric($Hc)?$Hc:ini_get("mysqli.default_port")),(!is_numeric($Hc)?$Hc:null));if($c){if(method_exists($this,'set_charset')){$this->set_charset("utf8");}else{$this->query("SET NAMES utf8");}}return$c;}function
result($i,$e=0){$j=$this->query($i);if(!$j){return
false;}$a=$j->fetch_array();return$a[$e];}function
quote($I){return"'".$this->escape_string($I)."'";}}}elseif(extension_loaded("mysql")){class
Min_DB{var$extension="MySQL",$server_info,$affected_rows,$error,$_link,$_result;function
connect($G,$Q,$T){$this->_link=@mysql_connect(($G!=""?$G:ini_get("mysql.default_host")),("$G$Q"!=""?$Q:ini_get("mysql.default_user")),("$G$Q$T"!=""?$T:ini_get("mysql.default_password")),true,131072);if($this->_link){$this->server_info=mysql_get_server_info($this->_link);if(function_exists('mysql_set_charset')){mysql_set_charset("utf8",$this->_link);}else{$this->query("SET NAMES utf8");}}else{$this->error=mysql_error();}return(bool)$this->_link;}function
quote($I){return"'".mysql_real_escape_string($I,$this->_link)."'";}function
select_db($fa){return
mysql_select_db($fa,$this->_link);}function
query($i,$gb=false){$j=@($gb?mysql_unbuffered_query($i,$this->_link):mysql_query($i,$this->_link));if(!$j){$this->error=mysql_error($this->_link);return
false;}if($j===true){$this->affected_rows=mysql_affected_rows($this->_link);$this->info=mysql_info($this->_link);return
true;}return
new
Min_Result($j);}function
multi_query($i){return$this->_result=$this->query($i);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($i,$e=0){$j=$this->query($i);if(!$j||!$j->num_rows){return
false;}return
mysql_result($j->_result,0,$e);}}class
Min_Result{var$num_rows,$_result,$_offset=0;function
Min_Result($j){$this->_result=$j;$this->num_rows=mysql_num_rows($j);}function
fetch_assoc(){return
mysql_fetch_assoc($this->_result);}function
fetch_row(){return
mysql_fetch_row($this->_result);}function
fetch_field(){$c=mysql_fetch_field($this->_result,$this->_offset++);$c->orgtable=$c->table;$c->orgname=$c->name;$c->charsetnr=($c->blob?63:0);return$c;}function
__destruct(){mysql_free_result($this->_result);}}}elseif(extension_loaded("pdo_mysql")){class
Min_DB
extends
Min_PDO{var$extension="PDO_MySQL";function
connect($G,$Q,$T){$this->dsn("mysql:host=".str_replace(":",";unix_socket=",preg_replace('~:(\\d)~',';port=\\1',$G)),$Q,$T);$this->query("SET NAMES utf8");return
true;}function
select_db($fa){return$this->query("USE ".idf_escape($fa));}function
query($i,$gb=false){$this->setAttribute(1000,!$gb);return
parent::query($i,$gb);}}}function
idf_escape($O){return"`".str_replace("`","``",$O)."`";}function
table($O){return
idf_escape($O);}function
connect(){global$o;$g=new
Min_DB;$Aa=$o->credentials();if($g->connect($Aa[0],$Aa[1],$Aa[2])){$g->query("SET sql_quote_show_create = 1");return$g;}return$g->error;}function
get_databases($tf=true){global$g;$c=&get_session("dbs");if(!isset($c)){if($tf){restart_session();ob_flush();flush();}$c=get_vals($g->server_info>=5?"SELECT SCHEMA_NAME FROM information_schema.SCHEMATA":"SHOW DATABASES");}return$c;}function
limit($i,$s,$L,$N=0,$db=" "){return" $i$s".(isset($L)?$db."LIMIT $L".($N?" OFFSET $N":""):"");}function
limit1($i,$s){return
limit($i,$s,1);}function
db_collation($t,$ba){global$g;$c=null;$ma=$g->result("SHOW CREATE DATABASE ".idf_escape($t),1);if(preg_match('~ COLLATE ([^ ]+)~',$ma,$k)){$c=$k[1];}elseif(preg_match('~ CHARACTER SET ([^ ]+)~',$ma,$k)){$c=$ba[$k[1]][-1];}return$c;}function
engines(){$c=array();foreach(get_rows("SHOW ENGINES")as$a){if(ereg("YES|DEFAULT",$a["Support"])){$c[]=$a["Engine"];}}return$c;}function
logged_user(){global$g;return$g->result("SELECT USER()");}function
tables_list(){global$g;return
get_key_vals("SHOW".($g->server_info>=5?" FULL":"")." TABLES");}function
count_tables($_){$c=array();foreach($_
as$t){$c[$t]=count(get_vals("SHOW TABLES IN ".idf_escape($t)));}return$c;}function
table_status($f=""){$c=array();foreach(get_rows("SHOW TABLE STATUS".($f!=""?" LIKE ".q(addcslashes($f,"%_")):""))as$a){if($a["Engine"]=="InnoDB"){$a["Comment"]=preg_replace('~(?:(.+); )?InnoDB free: .*~','\\1',$a["Comment"]);}if(!isset($a["Rows"])){$a["Comment"]="";}if($f!=""){return$a;}$c[$a["Name"]]=$a;}return$c;}function
is_view($E){return!isset($E["Rows"]);}function
fk_support($E){return
eregi("InnoDB|IBMDB2I",$E["Engine"]);}function
fields($h){$c=array();foreach(get_rows("SHOW FULL COLUMNS FROM ".table($h))as$a){preg_match('~^([^( ]+)(?:\\((.+)\\))?( unsigned)?( zerofill)?$~',$a["Type"],$k);$c[$a["Field"]]=array("field"=>$a["Field"],"full_type"=>$a["Type"],"type"=>$k[1],"length"=>$k[2],"unsigned"=>ltrim($k[3].$k[4]),"default"=>($a["Default"]!=""||ereg("char",$k[1])?$a["Default"]:null),"null"=>($a["Null"]=="YES"),"auto_increment"=>($a["Extra"]=="auto_increment"),"on_update"=>(eregi('^on update (.+)',$a["Extra"],$k)?$k[1]:""),"collation"=>$a["Collation"],"privileges"=>array_flip(explode(",",$a["Privileges"])),"comment"=>$a["Comment"],"primary"=>($a["Key"]=="PRI"),);}return$c;}function
indexes($h,$F=null){$c=array();foreach(get_rows("SHOW INDEX FROM ".table($h),$F)as$a){$c[$a["Key_name"]]["type"]=($a["Key_name"]=="PRIMARY"?"PRIMARY":($a["Index_type"]=="FULLTEXT"?"FULLTEXT":($a["Non_unique"]?"INDEX":"UNIQUE")));$c[$a["Key_name"]]["columns"][]=$a["Column_name"];$c[$a["Key_name"]]["lengths"][]=$a["Sub_part"];}return$c;}function
foreign_keys($h){global$g,$hb;static$da='`(?:[^`]|``)+`';$c=array();$Ue=$g->result("SHOW CREATE TABLE ".table($h),1);if($Ue){preg_match_all("~CONSTRAINT ($da) FOREIGN KEY \\(((?:$da,? ?)+)\\) REFERENCES ($da)(?:\\.($da))? \\(((?:$da,? ?)+)\\)(?: ON DELETE (".implode("|",$hb)."))?(?: ON UPDATE (".implode("|",$hb)."))?~",$Ue,$sa,PREG_SET_ORDER);foreach($sa
as$k){preg_match_all("~$da~",$k[2],$Fa);preg_match_all("~$da~",$k[5],$ea);$c[idf_unescape($k[1])]=array("db"=>idf_unescape($k[4]!=""?$k[3]:$k[4]),"table"=>idf_unescape($k[4]!=""?$k[4]:$k[3]),"source"=>array_map('idf_unescape',$Fa[0]),"target"=>array_map('idf_unescape',$ea[0]),"on_delete"=>$k[6],"on_update"=>$k[7],);}}return$c;}function
view($f){global$g;return
array("select"=>preg_replace('~^(?:[^`]|`[^`]*`)*\\s+AS\\s+~isU','',$g->result("SHOW CREATE VIEW ".table($f),1)));}function
collations(){$c=array();foreach(get_rows("SHOW COLLATION")as$a){if($a["Default"]){$c[$a["Charset"]][-1]=$a["Collation"];}else{$c[$a["Charset"]][]=$a["Collation"];}}ksort($c);foreach($c
as$d=>$b){asort($c[$d]);}return$c;}function
information_schema($t){global$g;return($g->server_info>=5&&$t=="information_schema");}function
error(){global$g;return
h(preg_replace('~^You have an error.*syntax to use~U',"Syntax error",$g->error));}function
exact_value($b){return
q($b)." COLLATE utf8_bin";}function
create_database($t,$U){set_session("dbs",null);return
queries("CREATE DATABASE ".idf_escape($t).($U?" COLLATE ".q($U):""));}function
drop_databases($_){set_session("dbs",null);return
apply_queries("DROP DATABASE",$_,'idf_escape');}function
rename_database($f,$U){if(create_database($f,$U)){$Zb=array();foreach(tables_list()as$h=>$z){$Zb[]=table($h)." TO ".idf_escape($f).".".table($h);}if(!$Zb||queries("RENAME TABLE ".implode(", ",$Zb))){queries("DROP DATABASE ".idf_escape(DB));return
true;}}return
false;}function
auto_increment(){$Gd=" PRIMARY KEY";if($_GET["create"]!=""&&$_POST["auto_increment_col"]){foreach(indexes($_GET["create"])as$w){if(in_array($_POST["fields"][$_POST["auto_increment_col"]]["orig"],$w["columns"],true)){$Gd="";break;}if($w["type"]=="PRIMARY"){$Gd=" UNIQUE";}}}return" AUTO_INCREMENT$Gd";}function
alter_table($h,$f,$p,$Na,$Da,$wb,$U,$Ta,$vb){$v=array();foreach($p
as$e){$v[]=($e[1]?($h!=""?($e[0]!=""?"CHANGE ".idf_escape($e[0]):"ADD"):" ")." ".implode($e[1]).($h!=""?" $e[2]":""):"DROP ".idf_escape($e[0]));}$v=array_merge($v,$Na);$ac="COMMENT=".q($Da).($wb?" ENGINE=".q($wb):"").($U?" COLLATE ".q($U):"").($Ta!=""?" AUTO_INCREMENT=$Ta":"").$vb;if($h==""){return
queries("CREATE TABLE ".table($f)." (\n".implode(",\n",$v)."\n) $ac");}if($h!=$f){$v[]="RENAME TO ".table($f);}$v[]=$ac;return
queries("ALTER TABLE ".table($h)."\n".implode(",\n",$v));}function
alter_indexes($h,$v){foreach($v
as$d=>$b){$v[$d]=($b[2]=="DROP"?"\nDROP INDEX ".idf_escape($b[1]):"\nADD $b[0] ".($b[0]=="PRIMARY"?"KEY ":"").($b[1]!=""?idf_escape($b[1])." ":"").$b[2]);}return
queries("ALTER TABLE ".table($h).implode(",",$v));}function
truncate_tables($D){return
apply_queries("TRUNCATE TABLE",$D);}function
drop_views($Y){return
queries("DROP VIEW ".implode(", ",array_map('table',$Y)));}function
drop_tables($D){return
queries("DROP TABLE ".implode(", ",array_map('table',$D)));}function
move_tables($D,$Y,$ea){$Zb=array();foreach(array_merge($D,$Y)as$h){$Zb[]=table($h)." TO ".idf_escape($ea).".".table($h);}return
queries("RENAME TABLE ".implode(", ",$Zb));}function
copy_tables($D,$Y,$ea){queries("SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO'");foreach($D
as$h){$f=($ea==DB?table("copy_$h"):idf_escape($ea).".".table($h));if(!queries("DROP TABLE IF EXISTS $f")||!queries("CREATE TABLE $f LIKE ".table($h))||!queries("INSERT INTO $f SELECT * FROM ".table($h))){return
false;}}foreach($Y
as$h){$f=($ea==DB?table("copy_$h"):idf_escape($ea).".".table($h));$fc=view($h);if(!queries("DROP VIEW IF EXISTS $f")||!queries("CREATE VIEW $f AS $fc[select]")){return
false;}}return
true;}function
trigger($f){$H=get_rows("SHOW TRIGGERS WHERE `Trigger` = ".q($f));return
reset($H);}function
triggers($h){$c=array();foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($h,"%_")))as$a){$c[$a["Trigger"]]=array($a["Timing"],$a["Event"]);}return$c;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER"),"Type"=>array("FOR EACH ROW"),);}function
routine($f,$z){global$g,$Eb,$gc,$R;$lf=array("bool","boolean","integer","double precision","real","dec","numeric","fixed","national char","national varchar");$He="((".implode("|",array_merge(array_keys($R),$lf)).")(?:\\s*\\(((?:[^'\")]*|$Eb)+)\\))?\\s*(zerofill\\s*)?(unsigned(?:\\s+zerofill)?)?)(?:\\s*(?:CHARSET|CHARACTER\\s+SET)\\s*['\"]?([^'\"\\s]+)['\"]?)?";$da="\\s*(".($z=="FUNCTION"?"":$gc).")?\\s*(?:`((?:[^`]|``)*)`\\s*|\\b(\\S+)\\s+)$He";$ma=$g->result("SHOW CREATE $z ".idf_escape($f),2);preg_match("~\\(((?:$da\\s*,?)*)\\)".($z=="FUNCTION"?"\\s*RETURNS\\s+$He":"")."\\s*(.*)~is",$ma,$k);$p=array();preg_match_all("~$da\\s*,?~is",$k[1],$sa,PREG_SET_ORDER);foreach($sa
as$Ya){$f=str_replace("``","`",$Ya[2]).$Ya[3];$p[]=array("field"=>$f,"type"=>strtolower($Ya[5]),"length"=>preg_replace_callback("~$Eb~s",'normalize_enum',$Ya[6]),"unsigned"=>strtolower(preg_replace('~\\s+~',' ',trim("$Ya[8] $Ya[7]"))),"full_type"=>$Ya[4],"inout"=>strtoupper($Ya[1]),"collation"=>strtolower($Ya[9]),);}if($z!="FUNCTION"){return
array("fields"=>$p,"definition"=>$k[11]);}return
array("fields"=>$p,"returns"=>array("type"=>$k[12],"length"=>$k[13],"unsigned"=>$k[15],"collation"=>$k[16]),"definition"=>$k[17],"language"=>"SQL",);}function
routines(){return
get_rows("SELECT * FROM information_schema.ROUTINES WHERE ROUTINE_SCHEMA = ".q(DB));}function
routine_languages(){return
array();}function
begin(){return
queries("BEGIN");}function
insert_into($h,$r){return
queries("INSERT INTO ".table($h)." (".implode(", ",array_keys($r)).")\nVALUES (".implode(", ",$r).")");}function
insert_update($h,$r,$Oa){foreach($r
as$d=>$b){$r[$d]="$d = $b";}$ta=implode(", ",$r);return
queries("INSERT INTO ".table($h)." SET $ta ON DUPLICATE KEY UPDATE $ta");}function
last_id(){global$g;return$g->result("SELECT LAST_INSERT_ID()");}function
explain($g,$i){return$g->query("EXPLAIN $i");}function
types(){return
array();}function
schemas(){return
array();}function
get_schema(){return"";}function
set_schema($La){return
true;}function
create_sql($h,$Ta){global$g;$c=$g->result("SHOW CREATE TABLE ".table($h),1);if(!$Ta){$c=preg_replace('~ AUTO_INCREMENT=\\d+~','',$c);}return$c;}function
truncate_sql($h){return"TRUNCATE ".table($h);}function
use_sql($fa){return"USE ".idf_escape($fa);}function
trigger_sql($h,$W){$c="";foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($h,"%_")),null,"-- ")as$a){$c.="\n".($W=='CREATE+ALTER'?"DROP TRIGGER IF EXISTS ".idf_escape($a["Trigger"]).";;\n":"")."CREATE TRIGGER ".idf_escape($a["Trigger"])." $a[Timing] $a[Event] ON ".table($a["Table"])." FOR EACH ROW\n$a[Statement];;\n";}return$c;}function
show_variables(){return
get_key_vals("SHOW VARIABLES");}function
show_status(){return
get_key_vals("SHOW STATUS");}function
support($rb){global$g;return!ereg("scheme|sequence|type".($g->server_info<5.1?"|event|partitioning".($g->server_info<5?"|view|routine|trigger":""):""),$rb);}$u="sql";$R=array();$Pa=array();foreach(array(lang(12)=>array("tinyint"=>3,"smallint"=>5,"mediumint"=>8,"int"=>10,"bigint"=>20,"decimal"=>66,"float"=>12,"double"=>21),lang(13)=>array("date"=>10,"datetime"=>19,"timestamp"=>19,"time"=>10,"year"=>4),lang(14)=>array("char"=>255,"varchar"=>65535,"tinytext"=>255,"text"=>65535,"mediumtext"=>16777215,"longtext"=>4294967295),lang(15)=>array("bit"=>20,"binary"=>255,"varbinary"=>65535,"tinyblob"=>255,"blob"=>65535,"mediumblob"=>16777215,"longblob"=>4294967295),lang(18)=>array("enum"=>65535,"set"=>64),)as$d=>$b){$R+=$b;$Pa[$d]=array_keys($b);}$lb=array("unsigned","zerofill","unsigned zerofill");$ic=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","REGEXP","IN","IS NULL","NOT LIKE","NOT REGEXP","NOT IN","IS NOT NULL","");$ca=array("char_length","date","from_unixtime","hex","lower","round","sec_to_time","time_to_sec","upper");$nb=array("avg","count","count distinct","group_concat","max","min","sum");$Jb=array(array("char"=>"md5/sha1/password/encrypt/uuid","binary"=>"md5/sha1/hex","date|time"=>"now",),array("int|float|double|decimal"=>"+/-","date"=>"+ interval/- interval","time"=>"addtime/subtime","char|text"=>"concat",));}define("SERVER",$_GET[DRIVER]);define("DB",$_GET["db"]);define("ME",preg_replace('~^[^?]*/([^?]*).*~','\\1',$_SERVER["REQUEST_URI"]).'?'.(sid()?SID.'&':'').(SERVER!==null?DRIVER."=".urlencode(SERVER).'&':'').(isset($_GET["username"])?"username=".urlencode($_GET["username"]).'&':'').(DB!=""?'db='.urlencode(DB).'&'.(isset($_GET["ns"])?"ns=".urlencode($_GET["ns"])."&":""):''));$kc="3.3.0-dev";class
Adminer{var$operators;function
name(){return"<a href='http://www.adminer.org/' id='h1'>Adminer</a>";}function
credentials(){return
array(SERVER,$_GET["username"],get_session("pwds"));}function
permanentLogin(){return
password_file();}function
database(){return
DB;}function
headers(){return
true;}function
head(){return
true;}function
loginForm(){global$pa;echo'<table cellspacing="0">
<tr><th>',lang(19),'<td>',html_select("driver",$pa,DRIVER,"loginDriver(this);"),'<tr><th>',lang(20),'<td><input name="server" value="',h(SERVER),'" title="hostname[:port]">
<tr><th>',lang(21),'<td><input id="username" name="username" value="',h($_GET["username"]),'">
<tr><th>',lang(22);?><td><input type="password" name="password">
</table>
<script type="text/javascript">
var username = document.getElementById('username');
username.focus();
username.form['driver'].onchange();
</script>
<?php

echo"<p><input type='submit' value='".lang(23)."'>\n",checkbox("permanent",1,$_COOKIE["adminer_permanent"],lang(24))."\n";}function
login($Yf,$T){return
true;}function
tableName($ed){return
h($ed["Name"]);}function
fieldName($e,$ib=0){return'<span title="'.h($e["full_type"]).'">'.h($e["field"]).'</span>';}function
selectLinks($ed,$r=""){echo'<p class="tabs">';$xa=array("select"=>lang(25),"table"=>lang(26));if(is_view($ed)){$xa["view"]=lang(27);}else{$xa["create"]=lang(28);}if(isset($r)){$xa["edit"]=lang(29);}foreach($xa
as$d=>$b){echo" <a href='".h(ME)."$d=".urlencode($ed["Name"]).($d=="edit"?$r:"")."'".bold(isset($_GET[$d])).">$b</a>";}echo"\n";}function
foreignKeys($h){return
foreign_keys($h);}function
backwardKeys($h,$cg){return
array();}function
backwardKeysPrint($dg,$a){}function
selectQuery($i){global$u;return"<p><a href='".h(remove_from_uri("page"))."&amp;page=last' title='".lang(30)."'>&gt;&gt;</a> <code class='jush-$u'>".h(str_replace("\n"," ",$i))."</code> <a href='".h(ME)."sql=".urlencode($i)."'>".lang(31)."</a></p>\n";}function
rowDescription($h){return"";}function
rowDescriptions($H,$yf){return$H;}function
selectVal($b,$x,$e){$c=($b!="<i>NULL</i>"&&ereg("char|binary",$e["type"])&&!ereg("var",$e["type"])?"<code>$b</code>":$b);if(ereg('blob|bytea|raw|file',$e["type"])&&!is_utf8($b)){$c=lang(32,strlen(html_entity_decode($b,ENT_QUOTES)));}return($x?"<a href='$x'>$c</a>":$c);}function
editVal($b,$e){return(ereg("binary",$e["type"])?reset(unpack("H*",$b)):$b);}function
selectColumnsPrint($J,$B){global$ca,$nb;print_fieldset("select",lang(33),$J);$l=0;$Oe=array(lang(34)=>$ca,lang(35)=>$nb);foreach($J
as$d=>$b){$b=$_GET["columns"][$d];echo"<div>".html_select("columns[$l][fun]",array(-1=>"")+$Oe,$b["fun"]),"(<select name='columns[$l][col]'><option>".optionlist($B,$b["col"],true)."</select>)</div>\n";$l++;}echo"<div>".html_select("columns[$l][fun]",array(-1=>"")+$Oe,"","this.nextSibling.nextSibling.onchange();"),"(<select name='columns[$l][col]' onchange='selectAddRow(this);'><option>".optionlist($B,null,true)."</select>)</div>\n","</div></fieldset>\n";}function
selectSearchPrint($s,$B,$K){print_fieldset("search",lang(36),$s);foreach($K
as$l=>$w){if($w["type"]=="FULLTEXT"){echo"(<i>".implode("</i>, <i>",array_map('h',$w["columns"]))."</i>) AGAINST"," <input name='fulltext[$l]' value='".h($_GET["fulltext"][$l])."'>",checkbox("boolean[$l]",1,isset($_GET["boolean"][$l]),"BOOL"),"<br>\n";}}$l=0;foreach((array)$_GET["where"]as$b){if("$b[col]$b[val]"!=""&&in_array($b["op"],$this->operators)){echo"<div><select name='where[$l][col]'><option value=''>(".lang(37).")".optionlist($B,$b["col"],true)."</select>",html_select("where[$l][op]",$this->operators,$b["op"]),"<input name='where[$l][val]' value='".h($b["val"])."'></div>\n";$l++;}}echo"<div><select name='where[$l][col]' onchange='selectAddRow(this);'><option value=''>(".lang(37).")".optionlist($B,null,true)."</select>",html_select("where[$l][op]",$this->operators,"="),"<input name='where[$l][val]'></div>\n","</div></fieldset>\n";}function
selectOrderPrint($ib,$B,$K){print_fieldset("sort",lang(38),$ib);$l=0;foreach((array)$_GET["order"]as$d=>$b){if(isset($B[$b])){echo"<div><select name='order[$l]'><option>".optionlist($B,$b,true)."</select>",checkbox("desc[$l]",1,isset($_GET["desc"][$d]),lang(39))."</div>\n";$l++;}}echo"<div><select name='order[$l]' onchange='selectAddRow(this);'><option>".optionlist($B,null,true)."</select>","<label><input type='checkbox' name='desc[$l]' value='1'>".lang(39)."</label></div>\n";echo"</div></fieldset>\n";}function
selectLimitPrint($L){echo"<fieldset><legend>".lang(40)."</legend><div>";echo"<input name='limit' size='3' value='".h($L)."'>","</div></fieldset>\n";}function
selectLengthPrint($Rb){if(isset($Rb)){echo"<fieldset><legend>".lang(41)."</legend><div>",'<input name="text_length" size="3" value="'.h($Rb).'">',"</div></fieldset>\n";}}function
selectActionPrint(){echo"<fieldset><legend>".lang(42)."</legend><div>","<input type='submit' value='".lang(33)."'>","</div></fieldset>\n";}function
selectCommandPrint(){return!information_schema(DB);}function
selectImportPrint(){return
true;}function
selectEmailPrint($eg,$B){}function
selectColumnsProcess($B,$K){global$ca,$nb;$J=array();$ra=array();foreach((array)$_GET["columns"]as$d=>$b){if($b["fun"]=="count"||(isset($B[$b["col"]])&&(!$b["fun"]||in_array($b["fun"],$ca)||in_array($b["fun"],$nb)))){$J[$d]=apply_sql_function($b["fun"],(isset($B[$b["col"]])?idf_escape($b["col"]):"*"));if(!in_array($b["fun"],$nb)){$ra[]=$J[$d];}}}return
array($J,$ra);}function
selectSearchProcess($p,$K){global$u;$c=array();foreach($K
as$l=>$w){if($w["type"]=="FULLTEXT"&&$_GET["fulltext"][$l]!=""){$c[]="MATCH (".implode(", ",array_map('idf_escape',$w["columns"])).") AGAINST (".q($_GET["fulltext"][$l]).(isset($_GET["boolean"][$l])?" IN BOOLEAN MODE":"").")";}}foreach((array)$_GET["where"]as$b){if("$b[col]$b[val]"!=""&&in_array($b["op"],$this->operators)){$Mb=" $b[op]";if(ereg('IN$',$b["op"])){$Hb=process_length($b["val"]);$Mb.=" (".($Hb!=""?$Hb:"NULL").")";}elseif(!$b["op"]){$Mb.=$b["val"];}elseif($b["op"]=="LIKE %%"){$Mb=" LIKE ".$this->processInput($p[$b["col"]],"%$b[val]%");}elseif(!ereg('NULL$',$b["op"])){$Mb.=" ".$this->processInput($p[$b["col"]],$b["val"]);}if($b["col"]!=""){$c[]=idf_escape($b["col"]).$Mb;}else{$qb=array();foreach($p
as$f=>$e){if(is_numeric($b["val"])||!ereg('int|float|double|decimal',$e["type"])){$f=idf_escape($f);$qb[]=($u=="sql"&&ereg('char|text|enum|set',$e["type"])&&!ereg('^utf8',$e["collation"])?"CONVERT($f USING utf8)":$f);}}$c[]=($qb?"(".implode("$Mb OR ",$qb)."$Mb)":"0");}}}return$c;}function
selectOrderProcess($p,$K){$c=array();foreach((array)$_GET["order"]as$d=>$b){if(isset($p[$b])||preg_match('~^((COUNT\\(DISTINCT |[A-Z0-9_]+\\()(`(?:[^`]|``)+`|"(?:[^"]|"")+")\\)|COUNT\\(\\*\\))$~',$b)){$c[]=(isset($p[$b])?idf_escape($b):$b).(isset($_GET["desc"][$d])?" DESC":"");}}return$c;}function
selectLimitProcess(){return(isset($_GET["limit"])?$_GET["limit"]:"30");}function
selectLengthProcess(){return(isset($_GET["text_length"])?$_GET["text_length"]:"100");}function
selectEmailProcess($s,$yf){return
false;}function
messageQuery($i){global$u;static$Vc=0;restart_session();$S="sql-".($Vc++);$ab=&get_session("queries");if(strlen($i)>1e6){$i=ereg_replace('[\x80-\xFF]+$','',substr($i,0,1e6))."\n...";}$ab[$_GET["db"]][]=$i;return" <a href='#$S' onclick=\"return !toggle('$S');\">".lang(43)."</a><div id='$S' class='hidden'><pre><code class='jush-$u'>".shorten_utf8($i,1000).'</code></pre><p><a href="'.h(str_replace("db=".urlencode(DB),"db=".urlencode($_GET["db"]),ME).'sql=&history='.(count($ab[$_GET["db"]])-1)).'">'.lang(31).'</a></div>';}function
editFunctions($e){global$Jb;$c=($e["null"]?"NULL/":"");foreach($Jb
as$d=>$ca){if(!$d||(!isset($_GET["call"])&&(isset($_GET["select"])||where($_GET)))){foreach($ca
as$da=>$b){if(!$da||ereg($da,$e["type"])){$c.="/$b";}}if($d&&!ereg('set|blob|bytea|raw|file',$e["type"])){$c.="/=";}}}return
explode("/",$c);}function
editInput($h,$e,$Sa,$q){if($e["type"]=="enum"){return(isset($_GET["select"])?"<label><input type='radio'$Sa value='-1' checked><i>".lang(5)."</i></label> ":"").($e["null"]?"<label><input type='radio'$Sa value=''".(isset($q)||isset($_GET["select"])?"":" checked")."><i>NULL</i></label> ":"").enum_input("radio",$Sa,$e,$q,0);}return"";}function
processInput($e,$q,$M=""){if($M=="="){return$q;}$f=$e["field"];$c=($e["type"]=="bit"&&ereg("^([0-9]+|b'[0-1]+')\$",$q)?$q:q($q));if(ereg('^(now|getdate|uuid)$',$M)){$c="$M()";}elseif(ereg('^current_(date|timestamp)$',$M)){$c=$M;}elseif(ereg('^([+-]|\\|\\|)$',$M)){$c=idf_escape($f)." $M $c";}elseif(ereg('^[+-] interval$',$M)){$c=idf_escape($f)." $M ".(preg_match("~^(\\d+|'[0-9.: -]') [A-Z_]+$~i",$q)?$q:$c);}elseif(ereg('^(addtime|subtime|concat)$',$M)){$c="$M(".idf_escape($f).", $c)";}elseif(ereg('^(md5|sha1|password|encrypt|hex)$',$M)){$c="$M($c)";}if(ereg("binary",$e["type"])){$c="unhex($c)";}return$c;}function
dumpOutput(){$c=array('text'=>lang(44),'file'=>lang(45));if(function_exists('gzencode')){$c['gz']='gzip';}if(function_exists('bzcompress')){$c['bz2']='bzip2';}return$c;}function
dumpFormat(){return
array('sql'=>'SQL','csv'=>'CSV,','csv;'=>'CSV;','tsv'=>'TSV');}function
dumpTable($h,$W,$fd=false){if($_POST["format"]!="sql"){echo"\xef\xbb\xbf";if($W){dump_csv(array_keys(fields($h)));}}elseif($W){$ma=create_sql($h,$_POST["auto_increment"]);if($ma){if($W=="DROP+CREATE"){echo"DROP ".($fd?"VIEW":"TABLE")." IF EXISTS ".table($h).";\n";}if($fd){$ma=preg_replace('~^([A-Z =]+) DEFINER=`'.preg_replace('~@(.*)~','`@`(%|\\1)',logged_user()).'`~','\\1',$ma);}echo($W!="CREATE+ALTER"?$ma:($fd?substr_replace($ma," OR REPLACE",6,0):substr_replace($ma," IF NOT EXISTS",12,0))).";\n\n";}if($W=="CREATE+ALTER"&&!$fd){$i="SELECT COLUMN_NAME, COLUMN_DEFAULT, IS_NULLABLE, COLLATION_NAME, COLUMN_TYPE, EXTRA, COLUMN_COMMENT FROM information_schema.COLUMNS WHERE TABLE_SCHEMA = DATABASE() AND TABLE_NAME = ".q($h)." ORDER BY ORDINAL_POSITION";echo"DELIMITER ;;
CREATE PROCEDURE adminer_alter (INOUT alter_command text) BEGIN
	DECLARE _column_name, _collation_name, after varchar(64) DEFAULT '';
	DECLARE _column_type, _column_default text;
	DECLARE _is_nullable char(3);
	DECLARE _extra varchar(30);
	DECLARE _column_comment varchar(255);
	DECLARE done, set_after bool DEFAULT 0;
	DECLARE add_columns text DEFAULT '";$p=array();$Ub="";foreach(get_rows($i)as$a){$_a=$a["COLUMN_DEFAULT"];$a["default"]=(isset($_a)?q($_a):"NULL");$a["after"]=q($Ub);$a["alter"]=escape_string(idf_escape($a["COLUMN_NAME"])." $a[COLUMN_TYPE]".($a["COLLATION_NAME"]?" COLLATE $a[COLLATION_NAME]":"").(isset($_a)?" DEFAULT ".($_a=="CURRENT_TIMESTAMP"?$_a:$a["default"]):"").($a["IS_NULLABLE"]=="YES"?"":" NOT NULL").($a["EXTRA"]?" $a[EXTRA]":"").($a["COLUMN_COMMENT"]?" COMMENT ".q($a["COLUMN_COMMENT"]):"").($Ub?" AFTER ".idf_escape($Ub):" FIRST"));echo", ADD $a[alter]";$p[]=$a;$Ub=$a["COLUMN_NAME"];}echo"';
	DECLARE columns CURSOR FOR $i;
	DECLARE CONTINUE HANDLER FOR NOT FOUND SET done = 1;
	SET @alter_table = '';
	OPEN columns;
	REPEAT
		FETCH columns INTO _column_name, _column_default, _is_nullable, _collation_name, _column_type, _extra, _column_comment;
		IF NOT done THEN
			SET set_after = 1;
			CASE _column_name";foreach($p
as$a){echo"
				WHEN ".q($a["COLUMN_NAME"])." THEN
					SET add_columns = REPLACE(add_columns, ', ADD $a[alter]', IF(
						_column_default <=> $a[default] AND _is_nullable = '$a[IS_NULLABLE]' AND _collation_name <=> ".(isset($a["COLLATION_NAME"])?"'$a[COLLATION_NAME]'":"NULL")." AND _column_type = ".q($a["COLUMN_TYPE"])." AND _extra = '$a[EXTRA]' AND _column_comment = ".q($a["COLUMN_COMMENT"])." AND after = $a[after]
					, '', ', MODIFY $a[alter]'));";}echo"
				ELSE
					SET @alter_table = CONCAT(@alter_table, ', DROP ', _column_name);
					SET set_after = 0;
			END CASE;
			IF set_after THEN
				SET after = _column_name;
			END IF;
		END IF;
	UNTIL done END REPEAT;
	CLOSE columns;
	IF @alter_table != '' OR add_columns != '' THEN
		SET alter_command = CONCAT(alter_command, 'ALTER TABLE ".table($h)."', SUBSTR(CONCAT(add_columns, @alter_table), 2), ';\\n');
	END IF;
END;;
DELIMITER ;
CALL adminer_alter(@adminer_alter);
DROP PROCEDURE adminer_alter;

";}}}function
dumpData($h,$W,$i){global$g,$u;$Ne=($u=="sqlite"?0:1048576);if($W){if($_POST["format"]=="sql"&&$W=="TRUNCATE+INSERT"){echo
truncate_sql($h).";\n";}if($_POST["format"]=="sql"){$p=fields($h);}$j=$g->query($i,1);if($j){$qc="";$xb="";while($a=$j->fetch_assoc()){if($_POST["format"]!="sql"){if($W=="table"){dump_csv(array_keys($a));$W="INSERT";}dump_csv($a);}else{if(!$qc){$qc="INSERT INTO ".table($h)." (".implode(", ",array_map('idf_escape',array_keys($a))).") VALUES";}foreach($a
as$d=>$b){$a[$d]=(isset($b)?(ereg('int|float|double|decimal',$p[$d]["type"])?$b:q($b)):"NULL");}$qa=implode(",\t",$a);if($W=="INSERT+UPDATE"){$r=array();foreach($a
as$d=>$b){$r[]=idf_escape($d)." = $b";}echo"$qc ($qa) ON DUPLICATE KEY UPDATE ".implode(", ",$r).";\n";}else{$qa=($Ne?"\n":" ")."($qa)";if(!$xb){$xb=$qc.$qa;}elseif(strlen($xb)+4+strlen($qa)<$Ne){$xb.=",$qa";}else{echo"$xb;\n";$xb=$qc.$qa;}}}}if($_POST["format"]=="sql"&&$W!="INSERT+UPDATE"&&$xb){$xb.=";\n";echo$xb;}}elseif($_POST["format"]=="sql"){echo"-- ".str_replace("\n"," ",$g->error)."\n";}}}function
dumpHeaders($Rc,$Ld=false){$Qa=$_POST["output"];$Ib=($_POST["format"]=="sql"?"sql":($Ld?"tar":"csv"));header("Content-Type: ".($Qa=="bz2"?"application/x-bzip":($Qa=="gz"?"application/x-gzip":($Ib=="tar"?"application/x-tar":($Ib=="sql"||$Qa!="file"?"text/plain":"text/csv")."; charset=utf-8"))));if($Qa=="bz2"){ob_start('bzcompress',1e6);}if($Qa=="gz"){ob_start('gzencode',1e6);}return$Ib;}function
homepage(){echo'<p>'.($_GET["ns"]==""?'<a href="'.h(ME).'database=">'.lang(46)."</a>\n":""),(support("scheme")?"<a href='".h(ME)."scheme='>".($_GET["ns"]!=""?lang(47):lang(48))."</a>\n":""),($_GET["ns"]!==""?'<a href="'.h(ME).'schema=">'.lang(49)."</a>\n":""),(support("privileges")?"<a href='".h(ME)."privileges='>".lang(50)."</a>\n":"");return
true;}function
navigation($dc){global$kc,$g,$P,$u,$pa;echo'<h1>
',$this->name(),' <span class="version">',$kc,'</span>
<a href="http://www.adminer.org/#download" id="version">',(version_compare($kc,$_COOKIE["adminer_version"])<0?h($_COOKIE["adminer_version"]):""),'</a>
</h1>
';if($dc=="auth"){$Ca=true;foreach((array)$_SESSION["pwds"]as$Lb=>$Qf){foreach($Qf
as$G=>$Pf){foreach($Pf
as$Q=>$T){if(isset($T)){if($Ca){echo"<p onclick='eventStop(event);'>\n";$Ca=false;}echo"<a href='".h(auth_url($Lb,$G,$Q))."'>($pa[$Lb]) ".h($Q.($G!=""?"@$G":""))."</a><br>\n";}}}}}else{$_=get_databases();echo'<form action="" method="post">
<p class="logout">
';if(DB==""||!$dc){echo"<a href='".h(ME)."sql='".bold(isset($_GET["sql"])).">".lang(43)."</a>\n";if(support("dump")){echo"<a href='".h(ME)."dump=".urlencode(isset($_GET["table"])?$_GET["table"]:$_GET["select"])."' id='dump'".bold(isset($_GET["dump"])).">".lang(51)."</a>\n";}}echo'<input type="submit" name="logout" value="',lang(52),'" onclick="eventStop(event);">
<input type="hidden" name="token" value="',$P,'">
</p>
</form>
<form action="">
<p>
';hidden_fields_get();echo($_?html_select("db",array(""=>"(".lang(53).")")+$_,DB,"this.form.submit();"):'<input name="db" value="'.h(DB).'">'),'<input type="submit" value="',lang(8),'"',($_?" class='hidden'":""),' onclick="eventStop(event);">
';if($dc!="db"&&DB!=""&&$g->select_db(DB)){if(support("scheme")){echo"<br>".html_select("ns",array(""=>"(".lang(54).")")+schemas(),$_GET["ns"],"this.form.submit();");if($_GET["ns"]!=""){set_schema($_GET["ns"]);}}if($_GET["ns"]!==""&&!$dc){echo'<p><a href="'.h(ME).'create="'.bold($_GET["create"]==="").">".lang(55)."</a>\n";$D=tables_list();if(!$D){echo"<p class='message'>".lang(6)."\n";}else{$this->tablesPrint($D);$xa=array();foreach($D
as$h=>$z){$xa[]=preg_quote($h,'/');}echo"<script type='text/javascript'>\n","var jushLinks = { $u: [ '".js_escape(ME)."table=\$&', /\\b(".implode("|",$xa).")\\b/g ] };\n";foreach(array("bac","bra","sqlite_quo","mssql_bra")as$b){echo"jushLinks.$b = jushLinks.$u;\n";}echo"var cmComplete = [ '".implode("', '",array_map('js_escape',array_keys($D)))."' ];\n","</script>\n";}}}echo(isset($_GET["sql"])?'<input type="hidden" name="sql" value="">':(isset($_GET["schema"])?'<input type="hidden" name="schema" value="">':(isset($_GET["dump"])?'<input type="hidden" name="dump" value="">':""))),"</p></form>\n";}}function
tablesPrint($D){echo"<p id='tables'>\n";foreach($D
as$h=>$z){echo'<a href="'.h(ME).'select='.urlencode($h).'"'.bold($_GET["select"]==$h).">".lang(56)."</a> ",'<a href="'.h(ME).'table='.urlencode($h).'"'.bold($_GET["table"]==$h).">".$this->tableName(array("Name"=>$h))."</a><br>\n";}}}$o=(function_exists('adminer_object')?adminer_object():new
Adminer);if(!isset($o->operators)){$o->operators=$ic;}function
page_header($Le,$n="",$mc=array(),$Ke=""){global$la,$o,$g,$pa;header("Content-Type: text/html; charset=utf-8");if($o->headers()){header("X-Frame-Options: deny");header("X-XSS-Protection: 0");}$Pe=$Le.($Ke!=""?": ".h($Ke):"");$Te=strip_tags($Pe.(SERVER!=""&&SERVER!="localhost"?h(" - ".SERVER):"")." - ".$o->name());if(is_ajax()){header("X-AJAX-Title: ".rawurlencode($Te));}else{echo'<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html lang="',$la,'" dir="',lang(57),'">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Script-Type" content="text/javascript">
<meta name="robots" content="noindex">
<title>',$Te,'</title>
<link rel="stylesheet" type="text/css" href="',h(preg_replace("~\\?.*~","",ME))."?file=default.css&amp;version=3.3.0-dev",'">
<script type="text/javascript">
var areYouSure = \'',lang(58),'\';
</script>
<script type="text/javascript" src="',h(preg_replace("~\\?.*~","",ME))."?file=functions.js&amp;version=3.3.0-dev",'"></script>
';if($o->head()){echo'<link rel="shortcut icon" type="image/x-icon" href="',h(preg_replace("~\\?.*~","",ME))."?file=favicon.ico&amp;version=3.3.0-dev",'" id="favicon">
';if(file_exists("adminer.css")){echo'<link rel="stylesheet" type="text/css" href="adminer.css">
';}}echo'
<body class="',lang(57),' nojs"',($_POST?"":" onclick=\"return bodyClick(event, '".js_escape(DB)."', '".js_escape($_GET["ns"])."');\"");echo' onkeydown="bodyKeydown(event);" onload="bodyLoad(\'',(is_object($g)?substr($g->server_info,0,3):""),'\');',(isset($_COOKIE["adminer_version"])?"":" verifyVersion();");?>">
<script type="text/javascript">
document.body.className = document.body.className.replace(/(^|\s)nojs(\s|$)/, '$1js$2');
</script>

<div id="content">
<?php
}if(isset($mc)){$x=substr(preg_replace('~(username|db|ns)=[^&]*&~','',ME),0,-1);echo'<p id="breadcrumb"><a href="'.h($x?$x:".").'">'.$pa[DRIVER].'</a> &raquo; ';$x=substr(preg_replace('~(db|ns)=[^&]*&~','',ME),0,-1);$G=(SERVER!=""?h(SERVER):lang(20));if($mc===false){echo"$G\n";}else{echo"<a href='".($x?h($x):".")."' accesskey='1' title='Alt+Shift+1'>$G</a> &raquo; ";if($_GET["ns"]!=""||(DB!=""&&is_array($mc))){echo'<a href="'.h($x."&db=".urlencode(DB).(support("scheme")?"&ns=":"")).'">'.h(DB).'</a> &raquo; ';}if(is_array($mc)){if($_GET["ns"]!=""){echo'<a href="'.h(substr(ME,0,-1)).'">'.h($_GET["ns"]).'</a> &raquo; ';}foreach($mc
as$d=>$b){$Dc=(is_array($b)?$b[1]:$b);if($Dc!=""){echo'<a href="'.h(ME."$d=").urlencode(is_array($b)?$b[0]:$b).'">'.h($Dc).'</a> &raquo; ';}}}echo"$Le\n";}}echo"<span id='loader'></span>\n","<h2>$Pe</h2>\n";restart_session();$Se=preg_replace('~^[^?]*~','',$_SERVER["REQUEST_URI"]);$Re=$_SESSION["messages"][$Se];if($Re){echo"<div class='message'>".implode("</div>\n<div class='message'>",$Re)."</div>\n";unset($_SESSION["messages"][$Se]);}$_=&get_session("dbs");if(DB!=""&&$_&&!in_array(DB,$_,true)){$_=null;}if($n){echo"<div class='error'>$n</div>\n";}define("PAGE_HEADER",1);}function
page_footer($dc=""){global$o;if(!is_ajax()){echo'</div>

';switch_lang();echo'<div id="menu">
';$o->navigation($dc);echo'</div>
';}}function
int32($ga){while($ga>=2147483648){$ga-=4294967296;}while($ga<=-2147483649){$ga+=4294967296;}return(int)$ga;}function
long2str($y,$Dd){$qa='';foreach($y
as$b){$qa.=pack('V',$b);}if($Dd){return
substr($qa,0,end($y));}return$qa;}function
str2long($qa,$Dd){$y=array_values(unpack('V*',str_pad($qa,4*ceil(strlen($qa)/4),"\0")));if($Dd){$y[]=strlen($qa);}return$y;}function
xxtea_mx($Ea,$Ba,$Ga,$Ma){return
int32((($Ea>>5&0x7FFFFFF)^$Ba<<2)+(($Ba>>3&0x1FFFFFFF)^$Ea<<4))^int32(($Ga^$Ba)+($Ma^$Ea));}function
encrypt_string($Ec,$d){if($Ec==""){return"";}$d=array_values(unpack("V*",pack("H*",md5($d))));$y=str2long($Ec,true);$ga=count($y)-1;$Ea=$y[$ga];$Ba=$y[0];$aa=floor(6+52/($ga+1));$Ga=0;while($aa-->0){$Ga=int32($Ga+0x9E3779B9);$Ac=$Ga>>2&3;for($ya=0;$ya<$ga;$ya++){$Ba=$y[$ya+1];$Kb=xxtea_mx($Ea,$Ba,$Ga,$d[$ya&3^$Ac]);$Ea=int32($y[$ya]+$Kb);$y[$ya]=$Ea;}$Ba=$y[0];$Kb=xxtea_mx($Ea,$Ba,$Ga,$d[$ya&3^$Ac]);$Ea=int32($y[$ga]+$Kb);$y[$ga]=$Ea;}return
long2str($y,false);}function
decrypt_string($Ec,$d){if($Ec==""){return"";}$d=array_values(unpack("V*",pack("H*",md5($d))));$y=str2long($Ec,false);$ga=count($y)-1;$Ea=$y[$ga];$Ba=$y[0];$aa=floor(6+52/($ga+1));$Ga=int32($aa*0x9E3779B9);while($Ga){$Ac=$Ga>>2&3;for($ya=$ga;$ya>0;$ya--){$Ea=$y[$ya-1];$Kb=xxtea_mx($Ea,$Ba,$Ga,$d[$ya&3^$Ac]);$Ba=int32($y[$ya]-$Kb);$y[$ya]=$Ba;}$Ea=$y[$ga];$Kb=xxtea_mx($Ea,$Ba,$Ga,$d[$ya&3^$Ac]);$Ba=int32($y[0]-$Kb);$y[0]=$Ba;$Ga=int32($Ga-0x9E3779B9);}return
long2str($y,true);}$g='';$P=$_SESSION["token"];if(!$_SESSION["token"]){$_SESSION["token"]=rand(1,1e6);}$Ab=array();if($_COOKIE["adminer_permanent"]){foreach(explode(" ",$_COOKIE["adminer_permanent"])as$b){list($d)=explode(":",$b);$Ab[$d]=$b;}}if(isset($_POST["server"])){session_regenerate_id();$_SESSION["pwds"][$_POST["driver"]][$_POST["server"]][$_POST["username"]]=$_POST["password"];if($_POST["permanent"]){$d=base64_encode($_POST["driver"])."-".base64_encode($_POST["server"])."-".base64_encode($_POST["username"]);$Wc=$o->permanentLogin();$Ab[$d]="$d:".base64_encode($Wc?encrypt_string($_POST["password"],$Wc):"");cookie("adminer_permanent",implode(" ",$Ab));}if(count($_POST)==($_POST["permanent"]?5:4)||DRIVER!=$_POST["driver"]||SERVER!=$_POST["server"]||$_GET["username"]!==$_POST["username"]){redirect(auth_url($_POST["driver"],$_POST["server"],$_POST["username"]));}}elseif($_POST["logout"]){if($P&&$_POST["token"]!=$P){page_header(lang(52),lang(59));page_footer("db");exit;}else{foreach(array("pwds","dbs","queries")as$d){set_session($d,null);}$d=base64_encode(DRIVER)."-".base64_encode(SERVER)."-".base64_encode($_GET["username"]);if($Ab[$d]){unset($Ab[$d]);cookie("adminer_permanent",implode(" ",$Ab));}redirect(substr(preg_replace('~(username|db|ns)=[^&]*&~','',ME),0,-1),lang(60));}}elseif($Ab&&!$_SESSION["pwds"]){session_regenerate_id();$Wc=$o->permanentLogin();foreach($Ab
as$d=>$b){list(,$Wf)=explode(":",$b);list($Lb,$G,$Q)=array_map('base64_decode',explode("-",$d));$_SESSION["pwds"][$Lb][$G][$Q]=decrypt_string(base64_decode($Wf),$Wc);}}function
auth_error($Be=null){global$g,$o,$P;$Sc=session_name();$n="";if(!$_COOKIE[$Sc]&&$_GET[$Sc]&&ini_bool("session.use_only_cookies")){$n=lang(61);}elseif(isset($_GET["username"])){if(($_COOKIE[$Sc]||$_GET[$Sc])&&!$P){$n=lang(62);}else{$T=&get_session("pwds");if(isset($T)){$n=h($Be?$Be->getMessage():(is_string($g)?$g:lang(63)));$T=null;}}}page_header(lang(23),$n,null);echo"<form action='' method='post' onclick='eventStop(event);'>\n";$o->loginForm();echo"<div>";hidden_fields($_POST,array("driver","server","username","password","permanent"));echo"</div>\n","</form>\n";page_footer("auth");}if(isset($_GET["username"])){if(!class_exists("Min_DB")){unset($_SESSION["pwds"][DRIVER]);page_header(lang(64),lang(65,implode(", ",$nc)),false);page_footer("auth");exit;}$g=connect();}if(is_string($g)||!$o->login($_GET["username"],get_session("pwds"))){auth_error();exit;}$P=$_SESSION["token"];if(isset($_POST["server"])&&$_POST["token"]){$_POST["token"]=$P;}$n=($_POST?($_POST["token"]==$P?"":lang(59)):($_SERVER["REQUEST_METHOD"]!="POST"?"":lang(66,'"post_max_size"')));function
connect_error(){global$g,$P,$n,$pa;$_=array();if(DB!=""){page_header(lang(67).": ".h(DB),lang(68),true);}else{if($_POST["db"]&&!$n){queries_redirect(substr(ME,0,-1),lang(69),drop_databases($_POST["db"]));}page_header(lang(70),$n,false);echo"<p><a href='".h(ME)."database='>".lang(71)."</a>\n";foreach(array('privileges'=>lang(50),'processlist'=>lang(72),'variables'=>lang(73),'status'=>lang(74),)as$d=>$b){if(support($d)){echo"<a href='".h(ME)."$d='>$b</a>\n";}}echo"<p>".lang(75,$pa[DRIVER],"<b>$g->server_info</b>","<b>$g->extension</b>")."\n","<p>".lang(76,"<b>".h(logged_user())."</b>")."\n";if($_GET["refresh"]){set_session("dbs",null);}$_=get_databases();if($_){$Bd=support("scheme");$ba=collations();echo"<form action='' method='post'>\n","<table cellspacing='0' onclick='tableClick(event);'>\n","<thead><tr><td>&nbsp;<th>".lang(67)."<td>".lang(77)."<td>".lang(78)."</thead>\n";foreach($_
as$t){$Pd=h(ME)."db=".urlencode($t);echo"<tr".odd()."><td>".checkbox("db[]",$t,in_array($t,(array)$_POST["db"])),"<th><a href='$Pd'>".h($t)."</a>","<td><a href='$Pd".($Bd?"&amp;ns=":"")."&amp;database='>".nbsp(db_collation($t,$ba))."</a>","<td align='right'><a href='$Pd&amp;schema=' id='tables-".h($t)."'>?</a>","\n";}echo"</table>\n","<p><input type='submit' name='drop' value='".lang(79)."'".confirm("formChecked(this, /db/)",1).">\n";echo"<input type='hidden' name='token' value='$P'>\n","<a href='".h(ME)."refresh=1' onclick='eventStop(event);'>".lang(80)."</a>\n","</form>\n";}}page_footer("db");if($_){echo"<script type='text/javascript'>ajaxSetHtml('".js_escape(ME)."script=connect');</script>\n";}}if(isset($_GET["status"])){$_GET["variables"]=$_GET["status"];}if(!(DB!=""?$g->select_db(DB):isset($_GET["sql"])||isset($_GET["dump"])||isset($_GET["database"])||isset($_GET["processlist"])||isset($_GET["privileges"])||isset($_GET["user"])||isset($_GET["variables"])||$_GET["script"]=="connect")){if(DB!=""){set_session("dbs",null);}connect_error();exit;}if(support("scheme")&&DB!=""&&$_GET["ns"]!==""){if(!isset($_GET["ns"])){redirect(preg_replace('~ns=[^&]*&~','',ME)."ns=".get_schema());}if(!set_schema($_GET["ns"])){page_header(lang(81).": ".h($_GET["ns"]),lang(82),true);page_footer("ns");exit;}}function
select($j,$F=null,$Pc=""){$xa=array();$K=array();$B=array();$Ae=array();$R=array();odd('');for($l=0;$a=$j->fetch_row();$l++){if(!$l){echo"<table cellspacing='0' class='nowrap'>\n","<thead><tr>";for($oa=0;$oa<count($a);$oa++){$e=$j->fetch_field();$f=$e->name;$Ka=$e->orgtable;$Bc=$e->orgname;if($Pc){$xa[$oa]=($f=="table"?"table=":($f=="possible_keys"?"indexes=":null));}elseif($Ka!=""){if(!isset($K[$Ka])){$K[$Ka]=array();foreach(indexes($Ka,$F)as$w){if($w["type"]=="PRIMARY"){$K[$Ka]=array_flip($w["columns"]);break;}}$B[$Ka]=$K[$Ka];}if(isset($B[$Ka][$Bc])){unset($B[$Ka][$Bc]);$K[$Ka][$Bc]=$oa;$xa[$oa]=$Ka;}}if($e->charsetnr==63){$Ae[$oa]=true;}$R[$oa]=$e->type;$f=h($f);echo"<th".($Ka!=""||$e->name!=$Bc?" title='".h(($Ka!=""?"$Ka.":"").$Bc)."'":"").">".($Pc?"<a href='$Pc".strtolower($f)."' target='_blank' rel='noreferrer'>$f</a>":$f);}echo"</thead>\n";}echo"<tr".odd().">";foreach($a
as$d=>$b){if(!isset($b)){$b="<i>NULL</i>";}elseif($Ae[$d]&&!is_utf8($b)){$b="<i>".lang(32,strlen($b))."</i>";}elseif(!strlen($b)){$b="&nbsp;";}else{$b=h($b);if($R[$d]==254){$b="<code>$b</code>";}}if(isset($xa[$d])&&!$B[$xa[$d]]){if($Pc){$x=$xa[$d].urlencode($a[array_search("table=",$xa)]);}else{$x="edit=".urlencode($xa[$d]);foreach($K[$xa[$d]]as$Lc=>$oa){$x.="&where".urlencode("[".bracket_escape($Lc)."]")."=".urlencode($a[$oa]);}}$b="<a href='".h(ME.$x)."'>$b</a>";}echo"<td>$b";}}echo($l?"</table>":"<p class='message'>".lang(83))."\n";}function
referencable_primary($Vf){$c=array();foreach(table_status()as$Ia=>$h){if($Ia!=$Vf&&fk_support($h)){foreach(fields($Ia)as$e){if($e["primary"]){if($c[$Ia]){unset($c[$Ia]);break;}$c[$Ia]=$e;}}}}return$c;}function
textarea($f,$q,$H=10,$qb=80){echo"<textarea name='$f' rows='$H' cols='$qb' class='sqlarea' spellcheck='false' wrap='off' onkeydown='return textareaKeydown(this, event);'>";if(is_array($q)){foreach($q
as$b){echo
h($b)."\n\n\n";}}else{echo
h($q);}echo"</textarea>";}function
format_time($Sb,$Qc){return" <span class='time'>(".lang(84,max(0,array_sum(explode(" ",$Qc))-array_sum(explode(" ",$Sb)))).")</span>";}function
edit_type($d,$e,$ba,$ha=array()){global$Pa,$R,$lb,$hb;echo'<td><select name="',$d,'[type]" class="type" onfocus="lastType = selectValue(this);" onchange="editingTypeChange(this);">',optionlist((!$e["type"]||isset($R[$e["type"]])?array():array($e["type"]))+$Pa+($ha?array(lang(85)=>$ha):array()),$e["type"]),'</select>
<td><input name="',$d,'[length]" value="',h($e["length"]),'" size="3" onfocus="editingLengthFocus(this);"><td class="options">',"<select name='$d"."[collation]'".(ereg('(char|text|enum|set)$',$e["type"])?"":" class='hidden'").'><option value="">('.lang(86).')'.optionlist($ba,$e["collation"]).'</select>',($lb?"<select name='$d"."[unsigned]'".(!$e["type"]||ereg('(int|float|double|decimal)$',$e["type"])?"":" class='hidden'").'><option>'.optionlist($lb,$e["unsigned"]).'</select>':''),($ha?"<select name='$d"."[on_delete]'".(ereg("`",$e["type"])?"":" class='hidden'")."><option value=''>(".lang(87).")".optionlist($hb,$e["on_delete"])."</select> ":" ");}function
process_length($X){global$Eb;return(preg_match("~^\\s*(?:$Eb)(?:\\s*,\\s*(?:$Eb))*\\s*\$~",$X)&&preg_match_all("~$Eb~",$X,$sa)?implode(",",$sa[0]):preg_replace('~[^0-9,+-]~','',$X));}function
process_type($e,$Cc="COLLATE"){global$lb;return" $e[type]".($e["length"]!=""?"(".process_length($e["length"]).")":"").(ereg('int|float|double|decimal',$e["type"])&&in_array($e["unsigned"],$lb)?" $e[unsigned]":"").(ereg('char|text|enum|set',$e["type"])&&$e["collation"]?" $Cc ".q($e["collation"]):"");}function
process_field($e,$Tc){return
array(idf_escape($e["field"]),process_type($Tc),($e["null"]?" NULL":" NOT NULL"),(isset($e["default"])?" DEFAULT ".(($e["type"]=="timestamp"&&eregi('^CURRENT_TIMESTAMP$',$e["default"]))||($e["type"]=="bit"&&ereg("^([0-9]+|b'[0-1]+')\$",$e["default"]))?$e["default"]:q($e["default"])):""),($e["on_update"]?" ON UPDATE $e[on_update]":""),(support("comment")&&$e["comment"]!=""?" COMMENT ".q($e["comment"]):""),($e["auto_increment"]?auto_increment():null),);}function
type_class($z){foreach(array('char'=>'text','date'=>'time|year','binary'=>'blob','enum'=>'set',)as$d=>$b){if(ereg("$d|$b",$z)){return" class='$d'";}}}function
edit_fields($p,$ba,$z="TABLE",$Ce=0,$ha=array(),$Bb=false){global$gc;echo'<thead><tr class="wrap">
';if($z=="PROCEDURE"){echo'<td>&nbsp;';}echo'<th>',($z=="TABLE"?lang(88):lang(89)),'<td>',lang(90),'<textarea id="enum-edit" rows="4" cols="12" wrap="off" style="display: none;" onblur="editingLengthBlur(this);"></textarea>
<td>',lang(91),'<td>',lang(92);if($z=="TABLE"){echo'<td>NULL
<td><input type="radio" name="auto_increment_col" value=""><acronym title="',lang(93),'">AI</acronym>
<td',($_POST["defaults"]?"":" class='hidden'"),'>',lang(94),(support("comment")?"<td".($Bb?"":" class='hidden'").">".lang(95):"");}echo'<td>',"<input type='image' name='add[".(support("move_col")?0:count($p))."]' src='".h(preg_replace("~\\?.*~","",ME))."?file=plus.gif&amp;version=3.3.0-dev' alt='+' title='".lang(96)."'>",'<script type="text/javascript">row_count = ',count($p),';</script>
</thead>
<tbody onkeydown="return editingKeydown(event);">
';foreach($p
as$l=>$e){$l++;$md=$e[($_POST?"orig":"field")];$De=(isset($_POST["add"][$l-1])||(isset($e["field"])&&!$_POST["drop_col"][$l]))&&(support("drop_col")||$md=="");echo'<tr',($De?"":" style='display: none;'"),'>
',($z=="PROCEDURE"?"<td>".html_select("fields[$l][inout]",explode("|",$gc),$e["inout"]):""),'<th>';if($De){echo'<input name="fields[',$l,'][field]" value="',h($e["field"]),'" onchange="',($e["field"]!=""||count($p)>1?"":"editingAddRow(this, $Ce); "),'editingNameChange(this);" maxlength="64">';}echo'<input type="hidden" name="fields[',$l,'][orig]" value="',h($md),'">
';edit_type("fields[$l]",$e,$ba,$ha);if($z=="TABLE"){echo'<td>',checkbox("fields[$l][null]",1,$e["null"]),'<td><input type="radio" name="auto_increment_col" value="',$l,'"';if($e["auto_increment"]){echo' checked';}?> onclick="var field = this.form['fields[' + this.value + '][field]']; if (!field.value) { field.value = 'id'; field.onchange(); }">
<td<?php echo($_POST["defaults"]?"":" class='hidden'"),'>',checkbox("fields[$l][has_default]",1,$e["has_default"]),'<input name="fields[',$l,'][default]" value="',h($e["default"]),'" onchange="this.previousSibling.checked = true;">
',(support("comment")?"<td".($Bb?"":" class='hidden'")."><input name='fields[$l][comment]' value='".h($e["comment"])."' maxlength='255'>":"");}echo"<td>",(support("move_col")?"<input type='image' name='add[$l]' src='".h(preg_replace("~\\?.*~","",ME))."?file=plus.gif&amp;version=3.3.0-dev' alt='+' title='".lang(96)."' onclick='return !editingAddRow(this, $Ce, 1);'>&nbsp;"."<input type='image' name='up[$l]' src='".h(preg_replace("~\\?.*~","",ME))."?file=up.gif&amp;version=3.3.0-dev' alt='^' title='".lang(97)."'>&nbsp;"."<input type='image' name='down[$l]' src='".h(preg_replace("~\\?.*~","",ME))."?file=down.gif&amp;version=3.3.0-dev' alt='v' title='".lang(98)."'>&nbsp;":""),($md==""||support("drop_col")?"<input type='image' name='drop_col[$l]' src='".h(preg_replace("~\\?.*~","",ME))."?file=cross.gif&amp;version=3.3.0-dev' alt='x' title='".lang(99)."' onclick='return !editingRemoveRow(this);'>":""),"\n";}}function
process_fields(&$p){ksort($p);$N=0;if($_POST["up"]){$tb=0;foreach($p
as$d=>$e){if(key($_POST["up"])==$d){unset($p[$d]);array_splice($p,$tb,0,array($e));break;}if(isset($e["field"])){$tb=$N;}$N++;}}if($_POST["down"]){$ua=false;foreach($p
as$d=>$e){if(isset($e["field"])&&$ua){unset($p[key($_POST["down"])]);array_splice($p,$N,0,array($ua));break;}if(key($_POST["down"])==$d){$ua=$e;}$N++;}}$p=array_values($p);if($_POST["add"]){array_splice($p,key($_POST["add"]),0,array(array()));}}function
normalize_enum($k){return"'".str_replace("'","''",addcslashes(stripcslashes(str_replace($k[0][0].$k[0][0],$k[0][0],substr($k[0],1,-1))),'\\'))."'";}function
grant($na,$va,$B,$Cb){if(!$va){return
true;}if($va==array("ALL PRIVILEGES","GRANT OPTION")){return($na=="GRANT"?queries("$na ALL PRIVILEGES$Cb WITH GRANT OPTION"):queries("$na ALL PRIVILEGES$Cb")&&queries("$na GRANT OPTION$Cb"));}return
queries("$na ".preg_replace('~(GRANT OPTION)\\([^)]*\\)~','\\1',implode("$B, ",$va).$B).$Cb);}function
drop_create($Ja,$ma,$ia,$Ee,$Ef,$Df,$f){if($_POST["drop"]){return
query_redirect($Ja,$ia,$Ee,true,!$_POST["dropped"]);}$fb=$f!=""&&($_POST["dropped"]||queries($Ja));$Cf=queries($ma);if(!queries_redirect($ia,($f!=""?$Ef:$Df),$Cf)&&$fb){redirect(null,$Ee);}return$fb;}function
tar_file($ka,$ud){$c=pack("a100a8a8a8a12a12",$ka,644,0,0,decoct(strlen($ud)),decoct(time()));$if=8*32;for($l=0;$l<strlen($c);$l++){$if+=ord($c{$l});}$c.=sprintf("%06o",$if)."\0 ";return$c.str_repeat("\0",512-strlen($c)).$ud.str_repeat("\0",511-(strlen($ud)+511)%
512);}session_cache_limiter("");if(!ini_bool("session.use_cookies")||@ini_set("session.use_cookies",false)!==false){session_write_close();}$hb=array("RESTRICT","CASCADE","SET NULL","NO ACTION");$Eb="'(?:''|[^'\\\\]|\\\\.)*+'";$gc="IN|OUT|INOUT";if(isset($_GET["select"])&&($_POST["edit"]||$_POST["clone"])&&!$_POST["save"]){$_GET["edit"]=$_GET["select"];}if(isset($_GET["callf"])){$_GET["call"]=$_GET["callf"];}if(isset($_GET["function"])){$_GET["procedure"]=$_GET["function"];}if(isset($_GET["download"])){$m=$_GET["download"];header("Content-Type: application/octet-stream");header("Content-Disposition: attachment; filename=".friendly_url("$m-".implode("_",$_GET["where"])).".".friendly_url($_GET["field"]));echo$g->result("SELECT".limit(idf_escape($_GET["field"])." FROM ".table($m)," WHERE ".where($_GET),1));exit;}elseif(isset($_GET["table"])){$m=$_GET["table"];$p=fields($m);if(!$p){$n=error();}$E=($p?table_status($m):array());page_header(($p&&is_view($E)?lang(100):lang(101)).": ".h($m),$n);$o->selectLinks($E);$Da=$E["Comment"];if($Da!=""){echo"<p>".lang(95).": ".h($Da)."\n";}if($p){echo"<table cellspacing='0'>\n","<thead><tr><th>".lang(102)."<td>".lang(90).(support("comment")?"<td>".lang(95):"")."</thead>\n";foreach($p
as$e){echo"<tr".odd()."><th>".h($e["field"]),"<td title='".h($e["collation"])."'>".h($e["full_type"]).($e["null"]?" <i>NULL</i>":"").($e["auto_increment"]?" <i>".lang(93)."</i>":""),(isset($e["default"])?" [<b>".h($e["default"])."</b>]":""),(support("comment")?"<td>".nbsp($e["comment"]):""),"\n";}echo"</table>\n";if(!is_view($E)){echo"<h3>".lang(103)."</h3>\n";$K=indexes($m);if($K){echo"<table cellspacing='0'>\n";foreach($K
as$f=>$w){ksort($w["columns"]);$Db=array();foreach($w["columns"]as$d=>$b){$Db[]="<i>".h($b)."</i>".($w["lengths"][$d]?"(".$w["lengths"][$d].")":"");}echo"<tr title='".h($f)."'><th>$w[type]<td>".implode(", ",$Db)."\n";}echo"</table>\n";}echo'<p><a href="'.h(ME).'indexes='.urlencode($m).'">'.lang(104)."</a>\n";if(fk_support($E)){echo"<h3>".lang(85)."</h3>\n";$ha=foreign_keys($m);if($ha){echo"<table cellspacing='0'>\n","<thead><tr><th>".lang(105)."<td>".lang(106)."<td>".lang(87)."<td>".lang(107).($u!="sqlite"?"<td>&nbsp;":"")."</thead>\n";foreach($ha
as$f=>$A){echo"<tr title='".h($f)."'>","<th><i>".implode("</i>, <i>",array_map('h',$A["source"]))."</i>","<td><a href='".h($A["db"]!=""?preg_replace('~db=[^&]*~',"db=".urlencode($A["db"]),ME):($A["ns"]!=""?preg_replace('~ns=[^&]*~',"ns=".urlencode($A["ns"]),ME):ME))."table=".urlencode($A["table"])."'>".($A["db"]!=""?"<b>".h($A["db"])."</b>.":"").($A["ns"]!=""?"<b>".h($A["ns"])."</b>.":"").h($A["table"])."</a>","(<i>".implode("</i>, <i>",array_map('h',$A["target"]))."</i>)","<td>".nbsp($A["on_delete"])."\n","<td>".nbsp($A["on_update"])."\n";if($u!="sqlite"){echo'<td><a href="'.h(ME.'foreign='.urlencode($m).'&name='.urlencode($f)).'">'.lang(108).'</a>';}}echo"</table>\n";}if($u!="sqlite"){echo'<p><a href="'.h(ME).'foreign='.urlencode($m).'">'.lang(109)."</a>\n";}}if(support("trigger")){echo"<h3>".lang(110)."</h3>\n";$Yc=triggers($m);if($Yc){echo"<table cellspacing='0'>\n";foreach($Yc
as$d=>$b){echo"<tr valign='top'><td>$b[0]<td>$b[1]<th>".h($d)."<td><a href='".h(ME.'trigger='.urlencode($m).'&name='.urlencode($d))."'>".lang(108)."</a>\n";}echo"</table>\n";}echo'<p><a href="'.h(ME).'trigger='.urlencode($m).'">'.lang(111)."</a>\n";}}}}elseif(isset($_GET["schema"])){page_header(lang(49),"",array(),DB);$_b=array();$xe=array();$f="adminer_schema";$hf=($_GET["schema"]?$_GET["schema"]:$_COOKIE[($_COOKIE["$f-".DB]?"$f-".DB:$f)]);preg_match_all('~([^:]+):([-0-9.]+)x([-0-9.]+)(_|$)~',$hf,$sa,PREG_SET_ORDER);foreach($sa
as$l=>$k){$_b[$k[1]]=array($k[2],$k[3]);$xe[]="\n\t'".js_escape($k[1])."': [ $k[2], $k[3] ]";}$Wb=0;$ff=-1;$La=array();$Ze=array();$gf=array();foreach(table_status()as$a){if(!isset($a["Engine"])){continue;}$pc=0;$La[$a["Name"]]["fields"]=array();foreach(fields($a["Name"])as$f=>$e){$pc+=1.25;$e["pos"]=$pc;$La[$a["Name"]]["fields"][$f]=$e;}$La[$a["Name"]]["pos"]=($_b[$a["Name"]]?$_b[$a["Name"]]:array($Wb,0));foreach($o->foreignKeys($a["Name"])as$b){if(!$b["db"]){$za=$ff;if($_b[$a["Name"]][1]||$_b[$b["table"]][1]){$za=min(floatval($_b[$a["Name"]][1]),floatval($_b[$b["table"]][1]))-1;}else{$ff-=.1;}while($gf[(string)$za]){$za-=.0001;}$La[$a["Name"]]["references"][$b["table"]][(string)$za]=array($b["source"],$b["target"]);$Ze[$b["table"]][$a["Name"]][(string)$za]=$b["target"];$gf[(string)$za]=true;}}$Wb=max($Wb,$La[$a["Name"]]["pos"][0]+2.5+$pc);}echo'<div id="schema" style="height: ',$Wb,'em;">
<script type="text/javascript">
tablePos = {',implode(",",$xe)."\n",'};
em = document.getElementById(\'schema\').offsetHeight / ',$Wb,';
document.onmousemove = schemaMousemove;
document.onmouseup = function (ev) {
	schemaMouseup(ev, \'',js_escape(DB),'\');
};
</script>
';foreach($La
as$f=>$h){echo"<div class='table' style='top: ".$h["pos"][0]."em; left: ".$h["pos"][1]."em;' onmousedown='schemaMousedown(this, event);'>",'<a href="'.h(ME).'table='.urlencode($f).'"><b>'.h($f)."</b></a><br>\n";foreach($h["fields"]as$e){$b='<span'.type_class($e["type"]).' title="'.h($e["full_type"].($e["null"]?" NULL":'')).'">'.h($e["field"]).'</span>';echo($e["primary"]?"<i>$b</i>":$b)."<br>\n";}foreach((array)$h["references"]as$Xb=>$zc){foreach($zc
as$za=>$hd){$yc=$za-$_b[$f][1];$l=0;foreach($hd[0]as$Fa){echo"<div class='references' title='".h($Xb)."' id='refs$za-".($l++)."' style='left: $yc"."em; top: ".$h["fields"][$Fa]["pos"]."em; padding-top: .5em;'><div style='border-top: 1px solid Gray; width: ".(-$yc)."em;'></div></div>\n";}}}foreach((array)$Ze[$f]as$Xb=>$zc){foreach($zc
as$za=>$B){$yc=$za-$_b[$f][1];$l=0;foreach($B
as$ea){echo"<div class='references' title='".h($Xb)."' id='refd$za-".($l++)."' style='left: $yc"."em; top: ".$h["fields"][$ea]["pos"]."em; height: 1.25em; background: url(".h(preg_replace("~\\?.*~","",ME))."?file=arrow.gif) no-repeat right center;&amp;version=3.3.0-dev'><div style='height: .5em; border-bottom: 1px solid Gray; width: ".(-$yc)."em;'></div></div>\n";}}}echo"</div>\n";}foreach($La
as$f=>$h){foreach((array)$h["references"]as$Xb=>$zc){foreach($zc
as$za=>$hd){$ld=$Wb;$xd=-10;foreach($hd[0]as$d=>$Fa){$We=$h["pos"][0]+$h["fields"][$Fa]["pos"];$bf=$La[$Xb]["pos"][0]+$La[$Xb]["fields"][$hd[1][$d]]["pos"];$ld=min($ld,$We,$bf);$xd=max($xd,$We,$bf);}echo"<div class='references' id='refl$za' style='left: $za"."em; top: $ld"."em; padding: .5em 0;'><div style='border-right: 1px solid Gray; margin-top: 1px; height: ".($xd-$ld)."em;'></div></div>\n";}}}echo'</div>
<p><a href="',h(ME."schema=".urlencode($hf)),'" id="schema-link">',lang(112),'</a>
';}elseif(isset($_GET["dump"])){$m=$_GET["dump"];if($_POST){$ef="";foreach(array("output","format","db_style","routines","events","table_style","auto_increment","triggers","data_style")as$d){$ef.="&$d=".urlencode($_POST[$d]);}cookie("adminer_export",substr($ef,1));$Ib=dump_headers(($m!=""?$m:DB),(DB==""||count((array)$_POST["tables"]+(array)$_POST["data"])>1));$yb=($_POST["format"]=="sql");if($yb){echo"-- Adminer $kc ".$pa[DRIVER]." dump

".($u!="sql"?"":"SET NAMES utf8;
SET foreign_key_checks = 0;
SET time_zone = ".q($g->result("SELECT @@time_zone")).";
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

");}$W=$_POST["db_style"];$_=array(DB);if(DB==""){$_=$_POST["databases"];if(is_string($_)){$_=explode("\n",rtrim(str_replace("\r","",$_),"\n"));}}foreach((array)$_
as$t){if($g->select_db($t)){if($yb&&ereg('CREATE',$W)&&($ma=$g->result("SHOW CREATE DATABASE ".idf_escape($t),1))){if($W=="DROP+CREATE"){echo"DROP DATABASE IF EXISTS ".idf_escape($t).";\n";}echo($W=="CREATE+ALTER"?preg_replace('~^CREATE DATABASE ~','\\0IF NOT EXISTS ',$ma):$ma).";\n";}if($yb){if($W){echo
use_sql($t).";\n\n";}if(in_array("CREATE+ALTER",array($W,$_POST["table_style"]))){echo"SET @adminer_alter = '';\n\n";}$ob="";if($_POST["routines"]){foreach(array("FUNCTION","PROCEDURE")as$Va){foreach(get_rows("SHOW $Va STATUS WHERE Db = ".q($t),null,"-- ")as$a){$ob.=($W!='DROP+CREATE'?"DROP $Va IF EXISTS ".idf_escape($a["Name"]).";;\n":"").$g->result("SHOW CREATE $Va ".idf_escape($a["Name"]),2).";;\n\n";}}}if($_POST["events"]){foreach(get_rows("SHOW EVENTS",null,"-- ")as$a){$ob.=($W!='DROP+CREATE'?"DROP EVENT IF EXISTS ".idf_escape($a["Name"]).";;\n":"").$g->result("SHOW CREATE EVENT ".idf_escape($a["Name"]),3).";;\n\n";}}if($ob){echo"DELIMITER ;;\n\n$ob"."DELIMITER ;\n\n";}}if($_POST["table_style"]||$_POST["data_style"]){$Y=array();foreach(table_status()as$a){$h=(DB==""||in_array($a["Name"],(array)$_POST["tables"]));$df=(DB==""||in_array($a["Name"],(array)$_POST["data"]));if($h||$df){if(!is_view($a)){if($Ib=="tar"){ob_start();}$o->dumpTable($a["Name"],($h?$_POST["table_style"]:""));if($df){$o->dumpData($a["Name"],$_POST["data_style"],"SELECT * FROM ".table($a["Name"]));}if($yb&&$_POST["triggers"]&&$h&&($Yc=trigger_sql($a["Name"],$_POST["table_style"]))){echo"\nDELIMITER ;;\n$Yc\nDELIMITER ;\n";}if($Ib=="tar"){echo
tar_file((DB!=""?"":"$t/")."$a[Name].csv",ob_get_clean());}elseif($yb){echo"\n";}}elseif($yb){$Y[]=$a["Name"];}}}foreach($Y
as$fc){$o->dumpTable($fc,$_POST["table_style"],true);}if($Ib=="tar"){echo
pack("x512");}}if($W=="CREATE+ALTER"&&$yb){$i="SELECT TABLE_NAME, ENGINE, TABLE_COLLATION, TABLE_COMMENT FROM information_schema.TABLES WHERE TABLE_SCHEMA = DATABASE()";echo"DELIMITER ;;
CREATE PROCEDURE adminer_alter (INOUT alter_command text) BEGIN
	DECLARE _table_name, _engine, _table_collation varchar(64);
	DECLARE _table_comment varchar(64);
	DECLARE done bool DEFAULT 0;
	DECLARE tables CURSOR FOR $i;
	DECLARE CONTINUE HANDLER FOR NOT FOUND SET done = 1;
	OPEN tables;
	REPEAT
		FETCH tables INTO _table_name, _engine, _table_collation, _table_comment;
		IF NOT done THEN
			CASE _table_name";foreach(get_rows($i)as$a){$Da=q($a["ENGINE"]=="InnoDB"?preg_replace('~(?:(.+); )?InnoDB free: .*~','\\1',$a["TABLE_COMMENT"]):$a["TABLE_COMMENT"]);echo"
				WHEN ".q($a["TABLE_NAME"])." THEN
					".(isset($a["ENGINE"])?"IF _engine != '$a[ENGINE]' OR _table_collation != '$a[TABLE_COLLATION]' OR _table_comment != $Da THEN
						ALTER TABLE ".idf_escape($a["TABLE_NAME"])." ENGINE=$a[ENGINE] COLLATE=$a[TABLE_COLLATION] COMMENT=$Da;
					END IF":"BEGIN END").";";}echo"
				ELSE
					SET alter_command = CONCAT(alter_command, 'DROP TABLE `', REPLACE(_table_name, '`', '``'), '`;\\n');
			END CASE;
		END IF;
	UNTIL done END REPEAT;
	CLOSE tables;
END;;
DELIMITER ;
CALL adminer_alter(@adminer_alter);
DROP PROCEDURE adminer_alter;
";}if(in_array("CREATE+ALTER",array($W,$_POST["table_style"]))&&$yb){echo"SELECT @adminer_alter;\n";}}}if($yb){echo"-- ".$g->result("SELECT NOW()")."\n";}exit;}page_header(lang(113),"",($_GET["export"]!=""?array("table"=>$_GET["export"]):array()),DB);echo'
<form action="" method="post">
<table cellspacing="0">
';$cf=array('','USE','DROP+CREATE','CREATE');$Ie=array('','DROP+CREATE','CREATE');$le=array('','TRUNCATE+INSERT','INSERT');if($u=="sql"){$cf[]='CREATE+ALTER';$Ie[]='CREATE+ALTER';$le[]='INSERT+UPDATE';}parse_str($_COOKIE["adminer_export"],$a);if(!$a){$a=array("output"=>"text","format"=>"sql","db_style"=>(DB!=""?"":"CREATE"),"table_style"=>"DROP+CREATE","data_style"=>"INSERT");}if(!isset($a["events"])){$a["routines"]=$a["events"]=($_GET["dump"]=="");$a["triggers"]=$a["table_style"];}echo"<tr><th>".lang(114)."<td>".html_select("output",$o->dumpOutput(),$a["output"],0)."\n";echo"<tr><th>".lang(115)."<td>".html_select("format",$o->dumpFormat(),$a["format"],0)."\n";echo($u=="sqlite"?"":"<tr><th>".lang(67)."<td>".html_select('db_style',$cf,$a["db_style"]).(support("routine")?checkbox("routines",1,$a["routines"],lang(116)):"").(support("event")?checkbox("events",1,$a["events"],lang(117)):"")),"<tr><th>".lang(78)."<td>".html_select('table_style',$Ie,$a["table_style"]).checkbox("auto_increment",1,$a["auto_increment"],lang(93)).(support("trigger")?checkbox("triggers",1,$a["triggers"],lang(110)):""),"<tr><th>".lang(118)."<td>".html_select('data_style',$le,$a["data_style"]),'</table>
<p><input type="submit" value="',lang(113),'">

<table cellspacing="0">
';$pd=array();if(DB!=""){$eb=($m!=""?"":" checked");echo"<thead><tr>","<th style='text-align: left;'><label><input type='checkbox' id='check-tables'$eb onclick='formCheck(this, /^tables\\[/);'>".lang(78)."</label>","<th style='text-align: right;'><label>".lang(118)."<input type='checkbox' id='check-data'$eb onclick='formCheck(this, /^data\\[/);'></label>","</thead>\n";$Y="";foreach(table_status()as$a){$f=$a["Name"];$xc=ereg_replace("_.*","",$f);$eb=($m==""||$m==(substr($m,-1)=="%"?"$xc%":$f));$Db="<tr><td>".checkbox("tables[]",$f,$eb,$f,"formUncheck('check-tables');");if(is_view($a)){$Y.="$Db\n";}else{echo"$Db<td align='right'><label>".($a["Engine"]=="InnoDB"&&$a["Rows"]?"~ ":"").$a["Rows"].checkbox("data[]",$f,$eb,"","formUncheck('check-data');")."</label>\n";}$pd[$xc]++;}echo$Y;}else{echo"<thead><tr><th style='text-align: left;'><label><input type='checkbox' id='check-databases'".($m==""?" checked":"")." onclick='formCheck(this, /^databases\\[/);'>".lang(67)."</label></thead>\n";$_=get_databases();if($_){foreach($_
as$t){if(!information_schema($t)){$xc=ereg_replace("_.*","",$t);echo"<tr><td>".checkbox("databases[]",$t,$m==""||$m=="$xc%",$t,"formUncheck('check-databases');")."</label>\n";$pd[$xc]++;}}}else{echo"<tr><td><textarea name='databases' rows='10' cols='20'></textarea>";}}echo'</table>
</form>
';$Ca=true;foreach($pd
as$d=>$b){if($d!=""&&$b>1){echo($Ca?"<p>":" ")."<a href='".h(ME)."dump=".urlencode("$d%")."'>".h($d)."</a>";$Ca=false;}}}elseif(isset($_GET["privileges"])){page_header(lang(50));$j=$g->query("SELECT User, Host FROM mysql.".(DB==""?"user":"db WHERE ".q($_GET["db"])." LIKE Db")." ORDER BY Host, User");if(!$j){echo'<form action=""><p>
';hidden_fields_get();echo
lang(21),': <input name="user">
',lang(20),': <input name="host" value="localhost">
<input type="hidden" name="grant" value="">
<input type="submit" value="',lang(31),'">
</form>
';$j=$g->query("SELECT SUBSTRING_INDEX(CURRENT_USER, '@', 1) AS User, SUBSTRING_INDEX(CURRENT_USER, '@', -1) AS Host");}echo"<table cellspacing='0'>\n","<thead><tr><th>&nbsp;<th>".lang(21)."<th>".lang(20)."</thead>\n";while($a=$j->fetch_assoc()){echo'<tr'.odd().'><td><a href="'.h(ME.'user='.urlencode($a["User"]).'&host='.urlencode($a["Host"])).'">'.lang(119).'</a><td>'.h($a["User"])."<td>".h($a["Host"])."\n";}echo"</table>\n",'<p><a href="'.h(ME).'user=">'.lang(120)."</a>";}elseif(isset($_GET["sql"])){if(!$n&&$_POST["export"]){dump_headers("sql");$o->dumpTable("","");$o->dumpData("","table",$_POST["query"]);exit;}restart_session();$Hf=&get_session("queries");$ab=&$Hf[DB];if(!$n&&$_POST["clear"]){$ab=array();redirect(remove_from_uri("history"));}page_header(lang(43),$n);if(!$n&&$_POST){$Ra=false;$i=$_POST["query"];if($_POST["webfile"]){$Ra=@fopen((file_exists("adminer.sql")?"adminer.sql":(file_exists("adminer.sql.gz")?"compress.zlib://adminer.sql.gz":"compress.bzip2://adminer.sql.bz2")),"rb");$i=($Ra?fread($Ra,1e6):false);}elseif($_FILES&&$_FILES["sql_file"]["error"]!=4){$i=get_file("sql_file",true);}if(is_string($i)){if(function_exists('memory_get_usage')){@ini_set("memory_limit",max(ini_get("memory_limit"),2*strlen($i)+memory_get_usage()+8e6));}if($i!=""&&strlen($i)<1e6){$aa=$i.(ereg(';$',$i)?"":";");if(!$ab||end($ab)!=$aa){$ab[]=$aa;}}$wc="(?:\\s|/\\*.*\\*/|(?:#|-- )[^\n]*\n|--\n)";if(!ini_bool("session.use_cookies")){session_write_close();}$sd=";";$N=0;$hc=true;$F=connect();if(is_object($F)&&DB!=""){$F->select_db(DB);}$Fb=0;$gd=array();$Jf='[\'`"]'.($u=="pgsql"?'|\\$[^$]*\\$':($u=="mssql"||$u=="sqlite"?'|\\[':'')).'|/\\*|-- |#';$Kf=microtime();parse_str($_COOKIE["adminer_export"],$fe);$Vd=$o->dumpFormat();unset($Vd["sql"]);while($i!=""){if(!$N&&$u=="sql"&&preg_match("~^$wc*DELIMITER\\s+(.+)~i",$i,$k)){$sd=$k[1];$i=substr($i,strlen($k[0]));}else{preg_match('('.preg_quote($sd)."|$Jf|\$)",$i,$k,PREG_OFFSET_CAPTURE,$N);$ua=$k[0][0];$N=$k[0][1]+strlen($ua);if(!$ua&&$Ra&&!feof($Ra)){$i.=fread($Ra,1e5);}else{if(!$ua&&rtrim($i)==""){break;}if($ua&&$ua!=$sd){while(preg_match('('.($ua=='/*'?'\\*/':($ua=='['?']':(ereg('^-- |^#',$ua)?"\n":preg_quote($ua)."|\\\\."))).'|$)s',$i,$k,PREG_OFFSET_CAPTURE,$N)){$qa=$k[0][0];$N=$k[0][1]+strlen($qa);if(!$qa&&$Ra&&!feof($Ra)){$i.=fread($Ra,1e6);}elseif($qa[0]!="\\"){break;}}}else{$hc=false;$aa=substr($i,0,$k[0][1]);$Fb++;$Db="<pre id='sql-$Fb'><code class='jush-$u'>".shorten_utf8(trim($aa),1000)."</code></pre>\n";if(!$_POST["only_errors"]){echo$Db;ob_flush();flush();}$Sb=microtime();if($g->multi_query($aa)&&is_object($F)&&preg_match("~^$wc*USE\\b~isU",$aa)){$F->query($aa);}do{$j=$g->store_result();$Qc=microtime();$Ud=format_time($Sb,$Qc).(strlen($aa)<1000?" <a href='".h(ME)."sql=".urlencode(trim($aa))."'>".lang(31)."</a>":"");if($g->error){echo($_POST["only_errors"]?$Db:""),"<p class='error'>".lang(121).": ".error()."\n";$gd[]=" <a href='#sql-$Fb'>$Fb</a>";if($_POST["error_stops"]){break;}}elseif(is_object($j)){select($j,$F);if(!$_POST["only_errors"]){echo"<form action='' method='post'>\n","<p>".($j->num_rows?lang(122,$j->num_rows):"").$Ud;$S="export-$Fb";$de=", <a href='#$S' onclick=\"return !toggle('$S');\">".lang(113)."</a><span id='$S' class='hidden'>: ".html_select("output",$o->dumpOutput(),$fe["output"])." ".html_select("format",$Vd,$fe["format"])."<input type='hidden' name='query' value='".h($aa)."'>"." <input type='submit' name='export' value='".lang(113)."' onclick='eventStop(event);'><input type='hidden' name='token' value='$P'></span>";if($F&&preg_match("~^($wc|\\()*SELECT\\b~isU",$aa)&&($Ff=explain($F,$aa))){$S="explain-$Fb";echo", <a href='#$S' onclick=\"return !toggle('$S');\">EXPLAIN</a>$de\n","<div id='$S' class='hidden'>\n";select($Ff,$F,($u=="sql"?"http://dev.mysql.com/doc/refman/".substr($g->server_info,0,3)."/en/explain-output.html#explain_":""));echo"</div>\n";}else{echo"$de\n";}echo"</form>\n";}}else{if(preg_match("~^$wc*(CREATE|DROP|ALTER)$wc+(DATABASE|SCHEMA)\\b~isU",$aa)){restart_session();set_session("dbs",null);session_write_close();}if(!$_POST["only_errors"]){echo"<p class='message' title='".h($g->info)."'>".lang(123,$g->affected_rows)."$Ud\n";}}$Sb=$Qc;}while($g->next_result());$i=substr($i,$N);$N=0;}}}}if($hc){echo"<p class='message'>".lang(124)."\n";}elseif($_POST["only_errors"]){echo"<p class='message'>".lang(125,$Fb-count($gd)).format_time($Kf,microtime())."\n";}elseif($gd&&$Fb>1){echo"<p class='error'>".lang(121).": ".implode("",$gd)."\n";}}else{echo"<p class='error'>".upload_error($i)."\n";}}echo'
<form action="" method="post" enctype="multipart/form-data" id="form">
<p>';$aa=$_GET["sql"];if($_POST){$aa=$_POST["query"];}elseif($_GET["history"]=="all"){$aa=$ab;}elseif($_GET["history"]!=""){$aa=$ab[$_GET["history"]];}textarea("query",$aa,20);echo($_POST?"":"<script type='text/javascript'>document.getElementsByTagName('textarea')[0].focus();</script>\n"),"<p>".(ini_bool("file_uploads")?lang(126).': <input type="file" name="sql_file"'.($_FILES&&$_FILES["sql_file"]["error"]!=4?'':' onchange="this.form[\'only_errors\'].checked = true;"').'> (&lt; '.ini_get("upload_max_filesize").'B)':lang(127)),'<p>
<input type="submit" value="',lang(128),'" title="Ctrl+Enter">
<input type="hidden" name="token" value="',$P,'">
',checkbox("error_stops",1,$_POST["error_stops"],lang(129))."\n",checkbox("only_errors",1,$_POST["only_errors"],lang(130))."\n";print_fieldset("webfile",lang(131),$_POST["webfile"],"document.getElementById('form')['only_errors'].checked = true; ");$nd=array();foreach(array("gz"=>"zlib","bz2"=>"bz2")as$d=>$b){if(extension_loaded($b)){$nd[]=".$d";}}echo
lang(132,"<code>adminer.sql".($nd?"[".implode("|",$nd)."]":"")."</code>"),' <input type="submit" name="webfile" value="'.lang(133).'">',"</div></fieldset>\n";if($ab){print_fieldset("history",lang(134),$_GET["history"]!="");foreach($ab
as$d=>$b){echo'<a href="'.h(ME."sql=&history=$d").'">'.lang(31)."</a> <code class='jush-$u'>".shorten_utf8(ltrim(str_replace("\n"," ",str_replace("\r","",preg_replace('~^(#|-- ).*~m','',$b)))),80,"</code>")."<br>\n";}echo"<input type='submit' name='clear' value='".lang(135)."'>\n","<a href='".h(ME."sql=&history=all")."'>".lang(136)."</a>\n","</div></fieldset>\n";}echo'
</form>
';}elseif(isset($_GET["edit"])){$m=$_GET["edit"];$s=(isset($_GET["select"])?(count($_POST["check"])==1?where_check($_POST["check"][0]):""):where($_GET));$ta=(isset($_GET["select"])?$_POST["edit"]:$s);$p=fields($m);foreach($p
as$f=>$e){if(!isset($e["privileges"][$ta?"update":"insert"])||$o->fieldName($e)==""){unset($p[$f]);}}if($_POST&&!$n&&!isset($_GET["select"])){$ia=$_POST["referer"];if($_POST["insert"]){$ia=($ta?null:$_SERVER["REQUEST_URI"]);}elseif(!ereg('^.+&select=.+$',$ia)){$ia=ME."select=".urlencode($m);}if(isset($_POST["delete"])){query_redirect("DELETE".limit1("FROM ".table($m)," WHERE $s"),$ia,lang(137));}else{$r=array();foreach($p
as$f=>$e){$b=process_input($e);if($b!==false&&$b!==null){$r[idf_escape($f)]=($ta?"\n".idf_escape($f)." = $b":$b);}}if($ta){if(!$r){redirect($ia);}query_redirect("UPDATE".limit1(table($m)." SET".implode(",",$r),"\nWHERE $s"),$ia,lang(138));}else{$j=insert_into($m,$r);$ge=($j?last_id():0);queries_redirect($ia,lang(139,($ge?" $ge":"")),$j);}}}$Ia=$o->tableName(table_status($m));page_header(($ta?lang(31):lang(140)),$n,array("select"=>array($m,$Ia)),$Ia);$a=null;if($_POST["save"]){$a=(array)$_POST["fields"];}elseif($s){$J=array();foreach($p
as$f=>$e){if(isset($e["privileges"]["select"])){$J[]=($_POST["clone"]&&$e["auto_increment"]?"'' AS ":(ereg("enum|set",$e["type"])?"1*".idf_escape($f)." AS ":"")).idf_escape($f);}}$a=array();if($J){$H=get_rows("SELECT".limit(implode(", ",$J)." FROM ".table($m)," WHERE $s",(isset($_GET["select"])?2:1)));$a=(isset($_GET["select"])&&count($H)!=1?null:reset($H));}}echo'
<form action="" method="post" enctype="multipart/form-data" id="form">
';if($p){echo"<table cellspacing='0' onkeydown='return editingKeydown(event);'>\n";foreach($p
as$f=>$e){echo"<tr><th>".$o->fieldName($e);$_a=$_GET["set"][bracket_escape($f)];$q=(isset($a)?($a[$f]!=""&&ereg("enum|set",$e["type"])?(is_array($a[$f])?array_sum($a[$f]):+$a[$f]):$a[$f]):(!$ta&&$e["auto_increment"]?"":(isset($_GET["select"])?false:(isset($_a)?$_a:$e["default"]))));if(!$_POST["save"]&&is_string($q)){$q=$o->editVal($q,$e);}$M=($_POST["save"]?(string)$_POST["function"][$f]:($ta&&$e["on_update"]=="CURRENT_TIMESTAMP"?"now":($q===false?null:(isset($q)?'':'NULL'))));if($e["type"]=="timestamp"&&$q=="CURRENT_TIMESTAMP"){$q="";$M="now";}input($e,$q,$M);echo"\n";}echo"</table>\n";}echo'<p>
';if($p){echo"<input type='submit' value='".lang(141)."'>\n";if(!isset($_GET["select"])){echo"<input type='submit' name='insert' value='".($ta?lang(142):lang(143))."' title='Ctrl+Shift+Enter'>\n";}}echo($ta?"<input type='submit' name='delete' value='".lang(144)."' onclick=\"return confirm('".lang(0)."');\">\n":($_POST||!$p?"":"<script type='text/javascript'>document.getElementById('form').getElementsByTagName('td')[1].firstChild.focus();</script>\n"));if(isset($_GET["select"])){hidden_fields(array("check"=>(array)$_POST["check"],"clone"=>$_POST["clone"],"all"=>$_POST["all"]));}echo'<input type="hidden" name="referer" value="',h(isset($_POST["referer"])?$_POST["referer"]:$_SERVER["HTTP_REFERER"]),'">
<input type="hidden" name="save" value="1">
<input type="hidden" name="token" value="',$P,'">
</form>
';}elseif(isset($_GET["create"])){$m=$_GET["create"];$se=array('HASH','LINEAR HASH','KEY','LINEAR KEY','RANGE','LIST');$te=referencable_primary($m);$ha=array();foreach($te
as$Ia=>$e){$ha[str_replace("`","``",$Ia)."`".str_replace("`","``",$e["field"])]=$Ia;}$Xc=array();$Fc=array();if($m!=""){$Xc=fields($m);$Fc=table_status($m);}if($_POST&&!$_POST["fields"]){$_POST["fields"]=array();}if($_POST&&!$n&&!$_POST["add"]&&!$_POST["drop_col"]&&!$_POST["up"]&&!$_POST["down"]){if($_POST["drop"]){query_redirect("DROP TABLE ".table($m),substr(ME,0,-1),lang(145));}else{$p=array();$Na=array();ksort($_POST["fields"]);$vd=reset($Xc);$Ub="FIRST";foreach($_POST["fields"]as$d=>$e){$A=$ha[$e["type"]];$Tc=(isset($A)?$te[$A]:$e);if($e["field"]!=""){if(!$e["has_default"]){$e["default"]=null;}$_a=eregi_replace(" *on update CURRENT_TIMESTAMP","",$e["default"]);if($_a!=$e["default"]){$e["on_update"]="CURRENT_TIMESTAMP";$e["default"]=$_a;}if($d==$_POST["auto_increment_col"]){$e["auto_increment"]=true;}$ie=process_field($e,$Tc);if($ie!=process_field($vd,$vd)){$p[]=array($e["orig"],$ie,$Ub);}if(isset($A)){$Na[idf_escape($e["field"])]=($m!=""?"ADD":" ")." FOREIGN KEY (".idf_escape($e["field"]).") REFERENCES ".table($ha[$e["type"]])." (".idf_escape($Tc["field"]).")".(in_array($e["on_delete"],$hb)?" ON DELETE $e[on_delete]":"");}$Ub="AFTER ".idf_escape($e["field"]);}elseif($e["orig"]!=""){$p[]=array($e["orig"]);}if($e["orig"]!=""){$vd=next($Xc);}}$vb="";if(in_array($_POST["partition_by"],$se)){$td=array();if($_POST["partition_by"]=='RANGE'||$_POST["partition_by"]=='LIST'){foreach(array_filter($_POST["partition_names"])as$d=>$b){$q=$_POST["partition_values"][$d];$td[]="\nPARTITION ".idf_escape($b)." VALUES ".($_POST["partition_by"]=='RANGE'?"LESS THAN":"IN").($q!=""?" ($q)":" MAXVALUE");}}$vb.="\nPARTITION BY $_POST[partition_by]($_POST[partition])".($td?" (".implode(",",$td)."\n)":($_POST["partitions"]?" PARTITIONS ".(+$_POST["partitions"]):""));}elseif($m!=""&&support("partitioning")){$vb.="\nREMOVE PARTITIONING";}$wa=lang(146);if($m==""){cookie("adminer_engine",$_POST["Engine"]);$wa=lang(147);}queries_redirect(ME."table=".urlencode($_POST["name"]),$wa,alter_table($m,$_POST["name"],$p,$Na,$_POST["Comment"],($_POST["Engine"]&&$_POST["Engine"]!=$Fc["Engine"]?$_POST["Engine"]:""),($_POST["Collation"]&&$_POST["Collation"]!=$Fc["Collation"]?$_POST["Collation"]:""),($_POST["Auto_increment"]!=""?+$_POST["Auto_increment"]:""),$vb));}}page_header(($m!=""?lang(28):lang(148)),$n,array("table"=>$m),$m);$a=array("Engine"=>$_COOKIE["adminer_engine"],"fields"=>array(array("field"=>"","type"=>(isset($R["int"])?"int":(isset($R["integer"])?"integer":"")))),"partition_names"=>array(""),);if($_POST){$a=$_POST;if($a["auto_increment_col"]){$a["fields"][$a["auto_increment_col"]]["auto_increment"]=true;}process_fields($a["fields"]);}elseif($m!=""){$a=$Fc;$a["name"]=$m;$a["fields"]=array();if(!$_GET["auto_increment"]){$a["Auto_increment"]="";}foreach($Xc
as$e){$e["has_default"]=isset($e["default"]);if($e["on_update"]){$e["default"].=" ON UPDATE $e[on_update]";}$a["fields"][]=$e;}if(support("partitioning")){$cc="FROM information_schema.PARTITIONS WHERE TABLE_SCHEMA = ".q(DB)." AND TABLE_NAME = ".q($m);$j=$g->query("SELECT PARTITION_METHOD, PARTITION_ORDINAL_POSITION, PARTITION_EXPRESSION $cc ORDER BY PARTITION_ORDINAL_POSITION DESC LIMIT 1");list($a["partition_by"],$a["partitions"],$a["partition"])=$j->fetch_row();$a["partition_names"]=array();$a["partition_values"]=array();foreach(get_rows("SELECT PARTITION_NAME, PARTITION_DESCRIPTION $cc AND PARTITION_NAME != '' ORDER BY PARTITION_ORDINAL_POSITION")as$jd){$a["partition_names"][]=$jd["PARTITION_NAME"];$a["partition_values"][]=$jd["PARTITION_DESCRIPTION"];}$a["partition_names"][]="";}}$ba=collations();$zd=floor(extension_loaded("suhosin")?(min(ini_get("suhosin.request.max_vars"),ini_get("suhosin.post.max_vars"))-13)/10:0);if($zd&&count($a["fields"])>$zd){echo"<p class='error'>".h(lang(149,'suhosin.post.max_vars','suhosin.request.max_vars'))."\n";}$yd=engines();foreach($yd
as$wb){if(!strcasecmp($wb,$a["Engine"])){$a["Engine"]=$wb;break;}}echo'
<form action="" method="post" id="form">
<p>
',lang(150),': <input name="name" maxlength="64" value="',h($a["name"]),'">
';if($m==""&&!$_POST){?><script type='text/javascript'>document.getElementById('form')['name'].focus();</script><?php }echo($yd?html_select("Engine",array(""=>"(".lang(151).")")+$yd,$a["Engine"]):""),' ',($ba&&!ereg("sqlite|mssql",$u)?html_select("Collation",array(""=>"(".lang(86).")")+$ba,$a["Collation"]):""),' <input type="submit" value="',lang(141),'">
<table cellspacing="0" id="edit-fields" class="nowrap">
';$Bb=($_POST?$_POST["comments"]:$a["Comment"]!="");if(!$_POST&&!$Bb){foreach($a["fields"]as$e){if($e["comment"]!=""){$Bb=true;break;}}}edit_fields($a["fields"],$ba,"TABLE",$zd,$ha,$Bb);echo'</table>
<p>
',lang(93),': <input name="Auto_increment" size="6" value="',h($a["Auto_increment"]),'">
<label class="jsonly"><input type="checkbox" name="defaults" value="1"',($_POST["defaults"]?" checked":""),' onclick="columnShow(this.checked, 5);">',lang(94),'</label>
',(support("comment")?checkbox("comments",1,$Bb,lang(95),"columnShow(this.checked, 6); toggle('Comment'); if (this.checked) this.form['Comment'].focus();",true).' <input id="Comment" name="Comment" value="'.h($a["Comment"]).'" maxlength="60"'.($Bb?'':' class="hidden"').'>':''),'<p>
<input type="submit" value="',lang(141),'">
';if($_GET["create"]!=""){echo'<input type="submit" name="drop" value="',lang(79),'"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$P,'">
';if(support("partitioning")){$ne=ereg('RANGE|LIST',$a["partition_by"]);print_fieldset("partition",lang(152),$a["partition_by"]);echo'<p>
',html_select("partition_by",array(-1=>"")+$se,$a["partition_by"],"partitionByChange(this);"),'(<input name="partition" value="',h($a["partition"]),'">)
',lang(153),': <input name="partitions" size="2" value="',h($a["partitions"]),'"',($ne||!$a["partition_by"]?" class='hidden'":""),'>
<table cellspacing="0" id="partition-table"',($ne?"":" class='hidden'"),'>
<thead><tr><th>',lang(154),'<th>',lang(155),'</thead>
';foreach($a["partition_names"]as$d=>$b){echo'<tr>','<td><input name="partition_names[]" value="'.h($b).'"'.($d==count($a["partition_names"])-1?' onchange="partitionNameChange(this);"':'').'>','<td><input name="partition_values[]" value="'.h($a["partition_values"][$d]).'">';}echo'</table>
</div></fieldset>
';}echo'</form>
';}elseif(isset($_GET["indexes"])){$m=$_GET["indexes"];$Oc=array("PRIMARY","UNIQUE","INDEX");$E=table_status($m);if(eregi("MyISAM|M?aria",$E["Engine"])){$Oc[]="FULLTEXT";}$K=indexes($m);if($u=="sqlite"){unset($Oc[0]);unset($K[""]);}if($_POST&&!$n&&!$_POST["add"]){$v=array();foreach($_POST["indexes"]as$w){$f=$w["name"];if(in_array($w["type"],$Oc)){$B=array();$bc=array();$r=array();ksort($w["columns"]);foreach($w["columns"]as$d=>$C){if($C!=""){$X=$w["lengths"][$d];$r[]=idf_escape($C).($X?"(".(+$X).")":"");$B[]=$C;$bc[]=($X?$X:null);}}if($B){$zb=$K[$f];if($zb){ksort($zb["columns"]);ksort($zb["lengths"]);if($w["type"]==$zb["type"]&&array_values($zb["columns"])===$B&&(!$zb["lengths"]||array_values($zb["lengths"])===$bc)){unset($K[$f]);continue;}}$v[]=array($w["type"],$f,"(".implode(", ",$r).")");}}}foreach($K
as$f=>$zb){$v[]=array($zb["type"],$f,"DROP");}if(!$v){redirect(ME."table=".urlencode($m));}queries_redirect(ME."table=".urlencode($m),lang(156),alter_indexes($m,$v));}page_header(lang(103),$n,array("table"=>$m),$m);$p=array_keys(fields($m));$a=array("indexes"=>$K);if($_POST){$a=$_POST;if($_POST["add"]){foreach($a["indexes"]as$d=>$w){if($w["columns"][count($w["columns"])]!=""){$a["indexes"][$d]["columns"][]="";}}$w=end($a["indexes"]);if($w["type"]||array_filter($w["columns"],'strlen')||array_filter($w["lengths"],'strlen')){$a["indexes"][]=array("columns"=>array(1=>""));}}}else{foreach($a["indexes"]as$d=>$w){$a["indexes"][$d]["name"]=$d;$a["indexes"][$d]["columns"][]="";}$a["indexes"][]=array("columns"=>array(1=>""));}echo'
<form action="" method="post">
<table cellspacing="0" class="nowrap">
<thead><tr><th>',lang(157),'<th>',lang(158),'<th>',lang(159),'</thead>
';$oa=1;foreach($a["indexes"]as$w){echo"<tr><td>".html_select("indexes[$oa][type]",array(-1=>"")+$Oc,$w["type"],($oa==count($a["indexes"])?"indexesAddRow(this);":1))."<td>";ksort($w["columns"]);$l=1;foreach($w["columns"]as$d=>$C){echo"<span>".html_select("indexes[$oa][columns][$l]",array(-1=>"")+$p,$C,($l==count($w["columns"])?"indexesAddColumn":"indexesChangeColumn")."(this, '".js_escape($u=="sql"?"":$_GET["indexes"]."_")."');"),"<input name='indexes[$oa][lengths][$l]' size='2' value='".h($w["lengths"][$d])."'> </span>";$l++;}echo"<td><input name='indexes[$oa][name]' value='".h($w["name"])."'>\n";$oa++;}echo'</table>
<p>
<input type="submit" value="',lang(141),'">
<noscript><p><input type="submit" name="add" value="',lang(96),'"></noscript>
<input type="hidden" name="token" value="',$P,'">
</form>
';}elseif(isset($_GET["database"])){if($_POST&&!$n&&!isset($_POST["add_x"])){restart_session();if($_POST["drop"]){$_GET["db"]="";queries_redirect(remove_from_uri("db|database"),lang(160),drop_databases(array(DB)));}elseif(DB!==$_POST["name"]){if(DB!=""){$_GET["db"]=$_POST["name"];queries_redirect(preg_replace('~db=[^&]*&~','',ME)."db=".urlencode($_POST["name"]),lang(161),rename_database($_POST["name"],$_POST["collation"]));}else{$_=explode("\n",str_replace("\r","",$_POST["name"]));$re=true;$tb="";foreach($_
as$t){if(count($_)==1||$t!=""){if(!create_database($t,$_POST["collation"])){$re=false;}$tb=$t;}}queries_redirect(ME."db=".urlencode($tb),lang(162),$re);}}else{if(!$_POST["collation"]){redirect(substr(ME,0,-1));}query_redirect("ALTER DATABASE ".idf_escape($_POST["name"]).(eregi('^[a-z0-9_]+$',$_POST["collation"])?" COLLATE $_POST[collation]":""),substr(ME,0,-1),lang(163));}}page_header(DB!=""?lang(46):lang(164),$n,array(),DB);$ba=collations();$f=DB;$Cc=null;if($_POST){$f=$_POST["name"];$Cc=$_POST["collation"];}elseif(DB!=""){$Cc=db_collation(DB,$ba);}elseif($u=="sql"){foreach(get_vals("SHOW GRANTS")as$na){if(preg_match('~ ON (`(([^\\\\`]|``|\\\\.)*)%`\\.\\*)?~',$na,$k)&&$k[1]){$f=stripcslashes(idf_unescape("`$k[2]`"));break;}}}echo'
<form action="" method="post">
<p>
',($_POST["add_x"]||strpos($f,"\n")?'<textarea id="name" name="name" rows="10" cols="40">'.h($f).'</textarea><br>':'<input id="name" name="name" value="'.h($f).'" maxlength="64">')."\n".($ba?html_select("collation",array(""=>"(".lang(86).")")+$ba,$Cc):"");?>
<script type='text/javascript'>document.getElementById('name').focus();</script>
<input type="submit" value="<?php echo
lang(141),'">
';if(DB!=""){echo"<input type='submit' name='drop' value='".lang(79)."'".confirm().">\n";}elseif(!$_POST["add_x"]&&$_GET["db"]==""){echo"<input type='image' name='add' src='".h(preg_replace("~\\?.*~","",ME))."?file=plus.gif&amp;version=3.3.0-dev' alt='+' title='".lang(96)."'>\n";}echo'<input type="hidden" name="token" value="',$P,'">
</form>
';}elseif(isset($_GET["scheme"])){if($_POST&&!$n){$x=preg_replace('~ns=[^&]*&~','',ME)."ns=";if($_POST["drop"]){query_redirect("DROP SCHEMA ".idf_escape($_GET["ns"]),$x,lang(165));}else{$x.=urlencode($_POST["name"]);if($_GET["ns"]==""){query_redirect("CREATE SCHEMA ".idf_escape($_POST["name"]),$x,lang(166));}elseif($_GET["ns"]!=$_POST["name"]){query_redirect("ALTER SCHEMA ".idf_escape($_GET["ns"])." RENAME TO ".idf_escape($_POST["name"]),$x,lang(167));}else{redirect($x);}}}page_header($_GET["ns"]!=""?lang(47):lang(48),$n);$a=array("name"=>$_GET["ns"]);if($_POST){$a=$_POST;}echo'
<form action="" method="post">
<p><input name="name" value="',h($a["name"]),'">
<input type="submit" value="',lang(141),'">
';if($_GET["ns"]!=""){echo"<input type='submit' name='drop' value='".lang(79)."'".confirm().">\n";}echo'<input type="hidden" name="token" value="',$P,'">
</form>
';}elseif(isset($_GET["call"])){$Wa=$_GET["call"];page_header(lang(168).": ".h($Wa),$n);$Va=routine($Wa,(isset($_GET["callf"])?"FUNCTION":"PROCEDURE"));$Hb=array();$ob=array();foreach($Va["fields"]as$l=>$e){if(substr($e["inout"],-3)=="OUT"){$ob[$l]="@".idf_escape($e["field"])." AS ".idf_escape($e["field"]);}if(!$e["inout"]||substr($e["inout"],0,2)=="IN"){$Hb[]=$l;}}if(!$n&&$_POST){$pe=array();foreach($Va["fields"]as$d=>$e){if(in_array($d,$Hb)){$b=process_input($e);if($b===false){$b="''";}if(isset($ob[$d])){$g->query("SET @".idf_escape($e["field"])." = $b");}}$pe[]=(isset($ob[$d])?"@".idf_escape($e["field"]):$b);}$i=(isset($_GET["callf"])?"SELECT":"CALL")." ".idf_escape($Wa)."(".implode(", ",$pe).")";echo"<p><code class='jush-$u'>".h($i)."</code> <a href='".h(ME)."sql=".urlencode($i)."'>".lang(31)."</a>\n";if(!$g->multi_query($i)){echo"<p class='error'>".error()."\n";}else{$F=connect();if(is_object($F)){$F->select_db(DB);}do{$j=$g->store_result();if(is_object($j)){select($j,$F);}else{echo"<p class='message'>".lang(169,$g->affected_rows)."\n";}}while($g->next_result());if($ob){select($g->query("SELECT ".implode(", ",$ob)));}}}echo'
<form action="" method="post">
';if($Hb){echo"<table cellspacing='0'>\n";foreach($Hb
as$d){$e=$Va["fields"][$d];$f=$e["field"];echo"<tr><th>".$o->fieldName($e);$q=$_POST["fields"][$f];if($q!=""){if($e["type"]=="enum"){$q=+$q;}if($e["type"]=="set"){$q=array_sum($q);}}input($e,$q,(string)$_POST["function"][$f]);echo"\n";}echo"</table>\n";}echo'<p>
<input type="submit" value="',lang(168),'">
<input type="hidden" name="token" value="',$P,'">
</form>
';}elseif(isset($_GET["foreign"])){$m=$_GET["foreign"];if($_POST&&!$n&&!$_POST["add"]&&!$_POST["change"]&&!$_POST["change-js"]){if($_POST["drop"]){query_redirect("ALTER TABLE ".table($m)."\nDROP ".($u=="sql"?"FOREIGN KEY ":"CONSTRAINT ").idf_escape($_GET["name"]),ME."table=".urlencode($m),lang(170));}else{$Fa=array_filter($_POST["source"],'strlen');ksort($Fa);$ea=array();foreach($Fa
as$d=>$b){$ea[$d]=$_POST["target"][$d];}query_redirect("ALTER TABLE ".table($m).($_GET["name"]!=""?"\nDROP FOREIGN KEY ".idf_escape($_GET["name"]).",":"")."\nADD FOREIGN KEY (".implode(", ",array_map('idf_escape',$Fa)).") REFERENCES ".table($_POST["table"])." (".implode(", ",array_map('idf_escape',$ea)).")".(in_array($_POST["on_delete"],$hb)?" ON DELETE $_POST[on_delete]":"").(in_array($_POST["on_update"],$hb)?" ON UPDATE $_POST[on_update]":""),ME."table=".urlencode($m),($_GET["name"]!=""?lang(171):lang(172)));$n=lang(173)."<br>$n";}}page_header(lang(174),$n,array("table"=>$m),$m);$a=array("table"=>$m,"source"=>array(""));if($_POST){$a=$_POST;ksort($a["source"]);if($_POST["add"]){$a["source"][]="";}elseif($_POST["change"]||$_POST["change-js"]){$a["target"]=array();}}elseif($_GET["name"]!=""){$ha=foreign_keys($m);$a=$ha[$_GET["name"]];$a["source"][]="";}$Fa=array_keys(fields($m));$ea=($m===$a["table"]?$Fa:array_keys(fields($a["table"])));$we=array();foreach(table_status()as$f=>$E){if(fk_support($E)){$we[]=$f;}}echo'
<form action="" method="post">
<p>
';if($a["db"]==""&&$a["ns"]==""){echo
lang(175),':
',html_select("table",$we,$a["table"],"this.form['change-js'].value = '1'; if (!ajaxForm(this.form)) this.form.submit();"),'<input type="hidden" name="change-js" value="">
<noscript><p><input type="submit" name="change" value="',lang(176),'"></noscript>
<table cellspacing="0">
<thead><tr><th>',lang(105),'<th>',lang(106),'</thead>
';$oa=0;foreach($a["source"]as$d=>$b){echo"<tr>","<td>".html_select("source[".(+$d)."]",array(-1=>"")+$Fa,$b,($oa==count($a["source"])-1?"foreignAddRow(this);":1)),"<td>".html_select("target[".(+$d)."]",$ea,$a["target"][$d]);$oa++;}echo'</table>
<p>
',lang(87),': ',html_select("on_delete",array(-1=>"")+$hb,$a["on_delete"]),' ',lang(107),': ',html_select("on_update",array(-1=>"")+$hb,$a["on_update"]),'<p>
<input type="submit" value="',lang(141),'">
<noscript><p><input type="submit" name="add" value="',lang(177),'"></noscript>
';}if($_GET["name"]!=""){echo'<input type="submit" name="drop" value="',lang(79),'"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$P,'">
</form>
';}elseif(isset($_GET["view"])){$m=$_GET["view"];$fb=false;if($_POST&&!$n){$fb=drop_create("DROP VIEW ".table($m),"CREATE VIEW ".table($_POST["name"])." AS\n$_POST[select]",($_POST["drop"]?substr(ME,0,-1):ME."table=".urlencode($_POST["name"])),lang(178),lang(179),lang(180),$m);}page_header(($m!=""?lang(27):lang(181)),$n,array("table"=>$m),$m);$a=array();if($_POST){$a=$_POST;}elseif($m!=""){$a=view($m);$a["name"]=$m;}echo'
<form action="" method="post">
<p>',lang(159),': <input name="name" value="',h($a["name"]),'" maxlength="64">
<p>';textarea("select",$a["select"]);echo'<p>
';if($fb){echo'<input type="hidden" name="dropped" value="1">';}echo'<input type="submit" value="',lang(141),'">
';if($_GET["view"]!=""){echo'<input type="submit" name="drop" value="',lang(79),'"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$P,'">
</form>
';}elseif(isset($_GET["event"])){$mb=$_GET["event"];$ee=array("YEAR","QUARTER","MONTH","DAY","HOUR","MINUTE","WEEK","SECOND","YEAR_MONTH","DAY_HOUR","DAY_MINUTE","DAY_SECOND","HOUR_MINUTE","HOUR_SECOND","MINUTE_SECOND");$Nd=array("ENABLED"=>"ENABLE","DISABLED"=>"DISABLE","SLAVESIDE_DISABLED"=>"DISABLE ON SLAVE");if($_POST&&!$n){if($_POST["drop"]){query_redirect("DROP EVENT ".idf_escape($mb),substr(ME,0,-1),lang(182));}elseif(in_array($_POST["INTERVAL_FIELD"],$ee)&&isset($Nd[$_POST["STATUS"]])){$ve="\nON SCHEDULE ".($_POST["INTERVAL_VALUE"]?"EVERY ".q($_POST["INTERVAL_VALUE"])." $_POST[INTERVAL_FIELD]".($_POST["STARTS"]?" STARTS ".q($_POST["STARTS"]):"").($_POST["ENDS"]?" ENDS ".q($_POST["ENDS"]):""):"AT ".q($_POST["STARTS"]))." ON COMPLETION".($_POST["ON_COMPLETION"]?"":" NOT")." PRESERVE";queries_redirect(substr(ME,0,-1),($mb!=""?lang(183):lang(184)),queries(($mb!=""?"ALTER EVENT ".idf_escape($mb).$ve.($mb!=$_POST["EVENT_NAME"]?"\nRENAME TO ".idf_escape($_POST["EVENT_NAME"]):""):"CREATE EVENT ".idf_escape($_POST["EVENT_NAME"]).$ve)."\n".$Nd[$_POST["STATUS"]]." COMMENT ".q($_POST["EVENT_COMMENT"]).rtrim(" DO\n$_POST[EVENT_DEFINITION]",";").";"));}}page_header(($mb!=""?lang(185).": ".h($mb):lang(186)),$n);$a=array();if($_POST){$a=$_POST;}elseif($mb!=""){$H=get_rows("SELECT * FROM information_schema.EVENTS WHERE EVENT_SCHEMA = ".q(DB)." AND EVENT_NAME = ".q($mb));$a=reset($H);}echo'
<form action="" method="post">
<table cellspacing="0">
<tr><th>',lang(159),'<td><input name="EVENT_NAME" value="',h($a["EVENT_NAME"]),'" maxlength="64">
<tr><th>',lang(187),'<td><input name="STARTS" value="',h("$a[EXECUTE_AT]$a[STARTS]"),'">
<tr><th>',lang(188),'<td><input name="ENDS" value="',h($a["ENDS"]),'">
<tr><th>',lang(189),'<td><input name="INTERVAL_VALUE" value="',h($a["INTERVAL_VALUE"]),'" size="6"> ',html_select("INTERVAL_FIELD",$ee,$a["INTERVAL_FIELD"]),'<tr><th>',lang(74),'<td>',html_select("STATUS",$Nd,$a["STATUS"]),'<tr><th>',lang(95),'<td><input name="EVENT_COMMENT" value="',h($a["EVENT_COMMENT"]),'" maxlength="64">
<tr><th>&nbsp;<td>',checkbox("ON_COMPLETION","PRESERVE",$a["ON_COMPLETION"]=="PRESERVE",lang(190)),'</table>
<p>';textarea("EVENT_DEFINITION",$a["EVENT_DEFINITION"]);echo'<p>
<input type="submit" value="',lang(141),'">
';if($mb!=""){echo'<input type="submit" name="drop" value="',lang(79),'"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$P,'">
</form>
';}elseif(isset($_GET["procedure"])){$Wa=$_GET["procedure"];$Va=(isset($_GET["function"])?"FUNCTION":"PROCEDURE");$Od=routine_languages();$fb=false;if($_POST&&!$n&&!$_POST["add"]&&!$_POST["drop_col"]&&!$_POST["up"]&&!$_POST["down"]){$r=array();$p=(array)$_POST["fields"];ksort($p);foreach($p
as$e){if($e["field"]!=""){$r[]=(ereg("^($gc)\$",$e["inout"])?"$e[inout] ":"").idf_escape($e["field"]).process_type($e,"CHARACTER SET");}}$fb=drop_create("DROP $Va ".idf_escape($Wa),"CREATE $Va ".idf_escape($_POST["name"])." (".implode(", ",$r).")".(isset($_GET["function"])?" RETURNS".process_type($_POST["returns"],"CHARACTER SET"):"").(in_array($_POST["language"],$Od)?" LANGUAGE $_POST[language]":"").rtrim("\n$_POST[definition]",";").";",substr(ME,0,-1),lang(191),lang(192),lang(193),$Wa);}page_header(($Wa!=""?(isset($_GET["function"])?lang(194):lang(195)).": ".h($Wa):(isset($_GET["function"])?lang(196):lang(197))),$n);$ba=get_vals("SHOW CHARACTER SET");sort($ba);$a=array("fields"=>array());if($_POST){$a=$_POST;$a["fields"]=(array)$a["fields"];process_fields($a["fields"]);}elseif($Wa!=""){$a=routine($Wa,$Va);$a["name"]=$Wa;}echo'
<form action="" method="post" id="form">
<p>',lang(159),': <input name="name" value="',h($a["name"]),'" maxlength="64">
',($Od?lang(7).": ".html_select("language",$Od,$a["language"]):""),'<table cellspacing="0" class="nowrap">
';edit_fields($a["fields"],$ba,$Va);if(isset($_GET["function"])){echo"<tr><td>".lang(198);edit_type("returns",$a["returns"],$ba);}echo'</table>
<p>';textarea("definition",$a["definition"]);echo'<p>
<input type="submit" value="',lang(141),'">
';if($Wa!=""){echo'<input type="submit" name="drop" value="',lang(79),'"',confirm(),'>';}if($fb){echo'<input type="hidden" name="dropped" value="1">';}echo'<input type="hidden" name="token" value="',$P,'">
</form>
';}elseif(isset($_GET["sequence"])){$Gb=$_GET["sequence"];if($_POST&&!$n){$x=substr(ME,0,-1);if($_POST["drop"]){query_redirect("DROP SEQUENCE ".idf_escape($Gb),$x,lang(199));}elseif($Gb==""){query_redirect("CREATE SEQUENCE ".idf_escape($_POST["name"]),$x,lang(200));}elseif($Gb!=$_POST["name"]){query_redirect("ALTER SEQUENCE ".idf_escape($Gb)." RENAME TO ".idf_escape($_POST["name"]),$x,lang(201));}else{redirect($x);}}page_header($Gb!=""?lang(202).": ".h($Gb):lang(203),$n);$a=array("name"=>$Gb);if($_POST){$a=$_POST;}echo'
<form action="" method="post">
<p><input name="name" value="',h($a["name"]),'">
<input type="submit" value="',lang(141),'">
';if($Gb!=""){echo"<input type='submit' name='drop' value='".lang(79)."'".confirm().">\n";}echo'<input type="hidden" name="token" value="',$P,'">
</form>
';}elseif(isset($_GET["type"])){$Nc=$_GET["type"];if($_POST&&!$n){$x=substr(ME,0,-1);if($_POST["drop"]){query_redirect("DROP TYPE ".idf_escape($Nc),$x,lang(204));}else{query_redirect("CREATE TYPE ".idf_escape($_POST["name"])." $_POST[as]",$x,lang(205));}}page_header($Nc!=""?lang(206).": ".h($Nc):lang(207),$n);$a["as"]="AS ";if($_POST){$a=$_POST;}echo'
<form action="" method="post">
<p>
';if($Nc!=""){echo"<input type='submit' name='drop' value='".lang(79)."'".confirm().">\n";}else{echo"<input name='name' value='".h($a['name'])."'>\n";textarea("as",$a["as"]);echo"<p><input type='submit' value='".lang(141)."'>\n";}echo'<input type="hidden" name="token" value="',$P,'">
</form>
';}elseif(isset($_GET["trigger"])){$m=$_GET["trigger"];$Gc=trigger_options();$je=array("INSERT","UPDATE","DELETE");$fb=false;if($_POST&&!$n&&in_array($_POST["Timing"],$Gc["Timing"])&&in_array($_POST["Event"],$je)&&in_array($_POST["Type"],$Gc["Type"])){$oe=" $_POST[Timing] $_POST[Event]";$Cb=" ON ".table($m);$fb=drop_create("DROP TRIGGER ".idf_escape($_GET["name"]).($u=="pgsql"?$Cb:""),"CREATE TRIGGER ".idf_escape($_POST["Trigger"]).($u=="mssql"?$Cb.$oe:$oe.$Cb).rtrim(" $_POST[Type]\n$_POST[Statement]",";").";",ME."table=".urlencode($m),lang(208),lang(209),lang(210),$_GET["name"]);}page_header(($_GET["name"]!=""?lang(211).": ".h($_GET["name"]):lang(212)),$n,array("table"=>$m));$a=array("Trigger"=>$m."_bi");if($_POST){$a=$_POST;}elseif($_GET["name"]!=""){$a=trigger($_GET["name"]);}echo'
<form action="" method="post" id="form">
<table cellspacing="0">
<tr><th>',lang(213),'<td>',html_select("Timing",$Gc["Timing"],$a["Timing"],"if (/^".h(preg_quote($m,"/"))."_[ba][iud]$/.test(this.form['Trigger'].value)) this.form['Trigger'].value = '".h(js_escape($m))."_' + selectValue(this).charAt(0).toLowerCase() + selectValue(this.form['Event']).charAt(0).toLowerCase();"),'<tr><th>',lang(214),'<td>',html_select("Event",$je,$a["Event"],"this.form['Timing'].onchange();"),'<tr><th>',lang(90),'<td>',html_select("Type",$Gc["Type"],$a["Type"]),'</table>
<p>',lang(159),': <input name="Trigger" value="',h($a["Trigger"]),'" maxlength="64">
<p>';textarea("Statement",$a["Statement"]);echo'<p>
<input type="submit" value="',lang(141),'">
';if($_GET["name"]!=""){echo'<input type="submit" name="drop" value="',lang(79),'"',confirm(),'>';}if($fb){echo'<input type="hidden" name="dropped" value="1">';}echo'<input type="hidden" name="token" value="',$P,'">
</form>
';}elseif(isset($_GET["user"])){$Cd=$_GET["user"];$va=array(""=>array("All privileges"=>""));foreach(get_rows("SHOW PRIVILEGES")as$a){foreach(explode(",",($a["Privilege"]=="Grant option"?"":$a["Context"]))as$Ic){$va[$Ic][$a["Privilege"]]=$a["Comment"];}}$va["Server Admin"]+=$va["File access on server"];$va["Databases"]["Create routine"]=$va["Procedures"]["Create routine"];unset($va["Procedures"]["Create routine"]);$va["Columns"]=array();foreach(array("Select","Insert","Update","References")as$b){$va["Columns"][$b]=$va["Tables"][$b];}unset($va["Server Admin"]["Usage"]);foreach($va["Tables"]as$d=>$b){unset($va["Databases"][$d]);}$rc=array();if($_POST){foreach($_POST["objects"]as$d=>$b){$rc[$b]=(array)$rc[$b]+(array)$_POST["grants"][$d];}}$jb=array();$Mc="";if(isset($_GET["host"])&&($j=$g->query("SHOW GRANTS FOR ".q($Cd)."@".q($_GET["host"])))){while($a=$j->fetch_row()){if(preg_match('~GRANT (.*) ON (.*) TO ~',$a[0],$k)&&preg_match_all('~ *([^(,]*[^ ,(])( *\\([^)]+\\))?~',$k[1],$sa,PREG_SET_ORDER)){foreach($sa
as$b){if($b[1]!="USAGE"){$jb["$k[2]$b[2]"][$b[1]]=true;}if(ereg(' WITH GRANT OPTION',$a[0])){$jb["$k[2]$b[2]"]["GRANT OPTION"]=true;}}}if(preg_match("~ IDENTIFIED BY PASSWORD '([^']+)~",$a[0],$k)){$Mc=$k[1];}}}if($_POST&&!$n){$ec=(isset($_GET["host"])?q($Cd)."@".q($_GET["host"]):"''");$kb=q($_POST["user"])."@".q($_POST["host"]);$Fd=q($_POST["pass"]);if($_POST["drop"]){query_redirect("DROP USER $ec",ME."privileges=",lang(215));}else{if($ec!=$kb){$n=!queries(($g->server_info<5?"GRANT USAGE ON *.* TO":"CREATE USER")." $kb IDENTIFIED BY".($_POST["hashed"]?" PASSWORD":"")." $Fd");}elseif($_POST["pass"]!=$Mc||!$_POST["hashed"]){queries("SET PASSWORD FOR $kb = ".($_POST["hashed"]?$Fd:"PASSWORD($Fd)"));}if(!$n){$lc=array();foreach($rc
as$Za=>$na){if(isset($_GET["grant"])){$na=array_filter($na);}$na=array_keys($na);if(isset($_GET["grant"])){$lc=array_diff(array_keys(array_filter($rc[$Za],'strlen')),$na);}elseif($ec==$kb){$Wd=array_keys((array)$jb[$Za]);$lc=array_diff($Wd,$na);$na=array_diff($na,$Wd);unset($jb[$Za]);}if(preg_match('~^(.+)\\s*(\\(.*\\))?$~U',$Za,$k)&&(!grant("REVOKE",$lc,$k[2]," ON $k[1] FROM $kb")||!grant("GRANT",$na,$k[2]," ON $k[1] TO $kb"))){$n=true;break;}}}if(!$n&&isset($_GET["host"])){if($ec!=$kb){queries("DROP USER $ec");}elseif(!isset($_GET["grant"])){foreach($jb
as$Za=>$lc){if(preg_match('~^(.+)(\\(.*\\))?$~U',$Za,$k)){grant("REVOKE",array_keys($lc),$k[2]," ON $k[1] FROM $kb");}}}}queries_redirect(ME."privileges=",(isset($_GET["host"])?lang(216):lang(217)),!$n);if($ec!=$kb){$g->query("DROP USER $kb");}}}page_header((isset($_GET["host"])?lang(21).": ".h("$Cd@$_GET[host]"):lang(120)),$n,array("privileges"=>array('',lang(50))));if($_POST){$a=$_POST;$jb=$rc;}else{$a=$_GET+array("host"=>$g->result("SELECT SUBSTRING_INDEX(CURRENT_USER, '@', -1)"));$a["pass"]=$Mc;if($Mc!=""){$a["hashed"]=true;}$jb[DB!=""&&!isset($_GET["host"])?idf_escape($_GET["db"]).".*":""]=array();}echo'<form action="" method="post">
<table cellspacing="0">
<tr><th>',lang(20),'<td><input name="host" maxlength="60" value="',h($a["host"]),'">
<tr><th>',lang(21),'<td><input name="user" maxlength="16" value="',h($a["user"]),'">
<tr><th>',lang(22),'<td><input id="pass" name="pass" value="',h($a["pass"]),'">
';if(!$a["hashed"]){echo'<script type="text/javascript">typePassword(document.getElementById(\'pass\'));</script>';}echo
checkbox("hashed",1,$a["hashed"],lang(218),"typePassword(this.form['pass'], this.checked);"),'</table>

';echo"<table cellspacing='0'>\n","<thead><tr><th colspan='2'><a href='http://dev.mysql.com/doc/refman/".substr($g->server_info,0,3)."/en/grant.html#priv_level' target='_blank' rel='noreferrer'>".lang(50)."</a>";$l=0;foreach($jb
as$Za=>$na){echo'<th>'.($Za!="*.*"?"<input name='objects[$l]' value='".h($Za)."' size='10'>":"<input type='hidden' name='objects[$l]' value='*.*' size='10'>*.*");$l++;}echo"</thead>\n";foreach(array(""=>"","Server Admin"=>lang(20),"Databases"=>lang(67),"Tables"=>lang(101),"Columns"=>lang(102),"Procedures"=>lang(219),)as$Ic=>$Dc){foreach((array)$va[$Ic]as$sc=>$Da){echo"<tr".odd()."><td".($Dc?">$Dc<td":" colspan='2'").' lang="en" title="'.h($Da).'">'.h($sc);$l=0;foreach($jb
as$Za=>$na){$f="'grants[$l][".h(strtoupper($sc))."]'";$q=$na[strtoupper($sc)];if($Ic=="Server Admin"&&$Za!=(isset($jb["*.*"])?"*.*":"")){echo"<td>&nbsp;";}elseif(isset($_GET["grant"])){echo"<td><select name=$f><option><option value='1'".($q?" selected":"").">".lang(220)."<option value='0'".($q=="0"?" selected":"").">".lang(221)."</select>";}else{echo"<td align='center'><input type='checkbox' name=$f value='1'".($q?" checked":"").($sc=="All privileges"?" id='grants-$l-all'":($sc=="Grant option"?"":" onclick=\"if (this.checked) formUncheck('grants-$l-all');\"")).">";}$l++;}}}echo"</table>\n",'<p>
<input type="submit" value="',lang(141),'">
';if(isset($_GET["host"])){echo'<input type="submit" name="drop" value="',lang(79),'"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$P,'">
</form>
';}elseif(isset($_GET["processlist"])){if($_POST&&!$n){$Id=0;foreach((array)$_POST["kill"]as$b){if(queries("KILL ".(+$b))){$Id++;}}queries_redirect(ME."processlist=",lang(222,$Id),$Id||!$_POST["kill"]);}page_header(lang(72),$n);echo'
<form action="" method="post">
<table cellspacing="0" onclick="tableClick(event);" class="nowrap">
';$l=-1;foreach(get_rows("SHOW FULL PROCESSLIST")as$l=>$a){if(!$l){echo"<thead><tr lang='en'><th>&nbsp;<th>".implode("<th>",array_keys($a))."</thead>\n";}echo"<tr".odd()."><td>".checkbox("kill[]",$a["Id"],0);foreach($a
as$d=>$b){echo"<td>".($d=="Info"&&$b!=""?"<code class='jush-$u'>".shorten_utf8($b,100,"</code>").' <a href="'.h(ME.($a["db"]!=""?"db=".urlencode($a["db"])."&":"")."sql=".urlencode($b)).'">'.lang(31).'</a>':nbsp($b));}echo"\n";}echo'</table>
<p>',($l+1)."/".lang(223,$g->result("SELECT @@max_connections")),'<p>
<input type="submit" value="',lang(224),'">
<input type="hidden" name="token" value="',$P,'">
</form>
';}elseif(isset($_GET["select"])){$m=$_GET["select"];$E=table_status($m);$K=indexes($m);$p=fields($m);$ha=column_foreign_keys($m);if($E["Oid"]=="t"){$K[]=array("type"=>"PRIMARY","columns"=>array("oid"));}parse_str($_COOKIE["adminer_import"],$Zc);$ce=array();$B=array();$Rb=null;foreach($p
as$d=>$e){$f=$o->fieldName($e);if(isset($e["privileges"]["select"])&&$f!=""){$B[$d]=html_entity_decode(strip_tags($f));if(ereg('text|lob',$e["type"])){$Rb=$o->selectLengthProcess();}}$ce+=$e["privileges"];}list($J,$ra)=$o->selectColumnsProcess($B,$K);$s=$o->selectSearchProcess($p,$K);$ib=$o->selectOrderProcess($p,$K);$L=$o->selectLimitProcess();$cc=($J?implode(", ",$J):($E["Oid"]=="t"?"oid, ":"")."*")."\nFROM ".table($m);$Hd=($ra&&count($ra)<count($J)?"\nGROUP BY ".implode(", ",$ra):"").($ib?"\nORDER BY ".implode(", ",$ib):"");if($_GET["val"]&&is_ajax()){header("Content-Type: text/plain; charset=utf-8");foreach($_GET["val"]as$bb=>$a){echo$g->result("SELECT".limit(idf_escape(key($a))." FROM ".table($m)," WHERE ".where_check($bb).($s?" AND ".implode(" AND ",$s):"").($ib?" ORDER BY ".implode(", ",$ib):""),1));}exit;}if($_POST&&!$n){$ae="(".implode(") OR (",array_map('where_check',(array)$_POST["check"])).")";$Oa=$_c=null;foreach($K
as$w){if($w["type"]=="PRIMARY"){$Oa=array_flip($w["columns"]);$_c=($J?$Oa:array());break;}}foreach((array)$_c
as$d=>$b){if(in_array(idf_escape($d),$J)){unset($_c[$d]);}}if($_POST["export"]){cookie("adminer_import","output=".urlencode($_POST["output"])."&format=".urlencode($_POST["format"]));dump_headers($m);$o->dumpTable($m,"");if(!is_array($_POST["check"])||$_c===array()){$Yb=$s;if(is_array($_POST["check"])){$Yb[]="($ae)";}$i="SELECT $cc".($Yb?"\nWHERE ".implode(" AND ",$Yb):"").$Hd;}else{$Xd=array();foreach($_POST["check"]as$b){$Xd[]="(SELECT".limit($cc,"\nWHERE ".($s?implode(" AND ",$s)." AND ":"").where_check($b).$Hd,1).")";}$i=implode(" UNION ALL ",$Xd);}$o->dumpData($m,"table",$i);exit;}if(!$o->selectEmailProcess($s,$ha)){if($_POST["save"]||$_POST["delete"]){$j=true;$ub=0;$i=table($m);$r=array();if(!$_POST["delete"]){foreach($B
as$f=>$b){$b=process_input($p[$f]);if($b!==null){if($_POST["clone"]){$r[idf_escape($f)]=($b!==false?$b:idf_escape($f));}elseif($b!==false){$r[]=idf_escape($f)." = $b";}}}$i.=($_POST["clone"]?" (".implode(", ",array_keys($r)).")\nSELECT ".implode(", ",$r)."\nFROM ".table($m):" SET\n".implode(",\n",$r));}if($_POST["delete"]||$r){$id="UPDATE";if($_POST["delete"]){$id="DELETE";$i="FROM $i";}if($_POST["clone"]){$id="INSERT";$i="INTO $i";}if($_POST["all"]||($_c===array()&&$_POST["check"])||count($ra)<count($J)){$j=queries($id." $i".($_POST["all"]?($s?"\nWHERE ".implode(" AND ",$s):""):"\nWHERE $ae"));$ub=$g->affected_rows;}else{foreach((array)$_POST["check"]as$b){$j=queries($id.limit1($i,"\nWHERE ".where_check($b)));if(!$j){break;}$ub+=$g->affected_rows;}}}queries_redirect(remove_from_uri("page"),lang(225,$ub),$j);}elseif(!$_POST["import"]){if(!$_POST["val"]){$n=lang(226);}else{$j=true;$ub=0;foreach($_POST["val"]as$bb=>$a){$r=array();foreach($a
as$d=>$b){$d=bracket_escape($d,1);$r[]=idf_escape($d)." = ".(ereg('char|text',$p[$d]["type"])||$b!=""?$o->processInput($p[$d],$b):"NULL");}$i=table($m)." SET ".implode(", ",$r);$Yb=" WHERE ".where_check($bb).($s?" AND ".implode(" AND ",$s):"");$j=queries("UPDATE".(count($ra)<count($J)?" $i$Yb":limit1($i,$Yb)));if(!$j){break;}$ub+=$g->affected_rows;}queries_redirect(remove_from_uri(),lang(225,$ub),$j);}}elseif(is_string($Ha=get_file("csv_file",true))){cookie("adminer_import","output=".urlencode($Zc["output"])."&format=".urlencode($_POST["separator"]));$j=true;$qb=array_keys($p);preg_match_all('~(?>"[^"]*"|[^"\\r\\n]+)+~',$Ha,$sa);$ub=count($sa[0]);begin();$db=($_POST["separator"]=="csv"?",":($_POST["separator"]=="tsv"?"\t":";"));foreach($sa[0]as$d=>$b){preg_match_all("~((\"[^\"]*\")+|[^$db]*)$db~",$b.$db,$Jd);if(!$d&&!array_diff($Jd[1],$qb)){$qb=$Jd[1];$ub--;}else{$r=array();foreach($Jd[1]as$l=>$Lc){$r[idf_escape($qb[$l])]=($Lc==""&&$p[$qb[$l]]["null"]?"NULL":q(str_replace('""','"',preg_replace('~^"|"$~','',$Lc))));}$j=insert_update($m,$r,$Oa);if(!$j){break;}}}if($j){queries("COMMIT");}queries_redirect(remove_from_uri("page"),lang(227,$ub),$j);queries("ROLLBACK");}else{$n=upload_error($Ha);}}}$Ia=$o->tableName($E);page_header(lang(33).": $Ia",$n);session_write_close();$r=null;if(isset($ce["insert"])){$r="";foreach((array)$_GET["where"]as$b){if(count($ha[$b["col"]])==1&&($b["op"]=="="||(!$b["op"]&&!ereg('[_%]',$b["val"])))){$r.="&set".urlencode("[".bracket_escape($b["col"])."]")."=".urlencode($b["val"]);}}}$o->selectLinks($E,$r);if(!$B){echo"<p class='error'>".lang(228).($p?".":": ".error())."\n";}else{echo"<form action='' id='form'>\n","<div style='display: none;'>";hidden_fields_get();echo(DB!=""?'<input type="hidden" name="db" value="'.h(DB).'">'.(isset($_GET["ns"])?'<input type="hidden" name="ns" value="'.h($_GET["ns"]).'">':""):"");echo'<input type="hidden" name="select" value="'.h($m).'">',"</div>\n";$o->selectColumnsPrint($J,$B);$o->selectSearchPrint($s,$B,$K);$o->selectOrderPrint($ib,$B,$K);$o->selectLimitPrint($L);$o->selectLengthPrint($Rb);$o->selectActionPrint();echo"</form>\n";$Z=$_GET["page"];if($Z=="last"){$Xa=$g->result("SELECT COUNT(*) FROM ".table($m).($s?" WHERE ".implode(" AND ",$s):""));$Z=floor(max(0,$Xa-1)/$L);}$i="SELECT".limit((+$L&&$ra&&count($ra)<count($J)&&$u=="sql"?"SQL_CALC_FOUND_ROWS ":"").$cc,($s?"\nWHERE ".implode(" AND ",$s):"").$Hd,($L!=""?+$L:null),($Z?$L*$Z:0),"\n");echo$o->selectQuery($i);$j=$g->query($i);if(!$j){echo"<p class='error'>".error()."\n";}else{if($u=="mssql"){$j->seek($L*$Z);}$Jc=array();echo"<form action='' method='post' enctype='multipart/form-data'>\n";$H=array();while($a=$j->fetch_assoc()){if($Z&&$u=="oracle"){unset($a["RNUM"]);}$H[]=$a;}if($_GET["page"]!="last"){$Xa=(+$L&&$ra&&count($ra)<count($J)?($u=="sql"?$g->result(" SELECT FOUND_ROWS()"):$g->result("SELECT COUNT(*) FROM ($i) x")):count($H));}if(!$H){echo"<p class='message'>".lang(83)."\n";}else{$Md=$o->backwardKeys($m,$Ia);echo"<table cellspacing='0' class='nowrap' onclick='tableClick(event);' onkeydown='return editingKeydown(event);'>\n","<thead><tr>".(!$ra&&$J?"":"<td><input type='checkbox' id='all-page' onclick='formCheck(this, /check/);'> <a href='".h($_GET["modify"]?remove_from_uri("modify"):$_SERVER["REQUEST_URI"]."&modify=1")."'>".lang(119)."</a>");$Ed=array();$ca=array();reset($J);$ue=1;foreach($H[0]as$d=>$b){if($E["Oid"]!="t"||$d!="oid"){$b=$_GET["columns"][key($J)];$e=$p[$J?($b?$b["col"]:current($J)):$d];$f=($e?$o->fieldName($e,$ue):"*");if($f!=""){$ue++;$Ed[$d]=$f;$C=idf_escape($d);echo'<th><a href="'.h(remove_from_uri('(order|desc)[^=]*|page').'&order%5B0%5D='.urlencode($d).($ib[0]==$C||$ib[0]==$d||(!$ib&&count($ra)<count($J)&&$ra[0]==$C)?'&desc%5B0%5D=1':'')).'">'.(!$J||$b?apply_sql_function($b["fun"],$f):h(current($J)))."</a>";}$ca[$d]=$b["fun"];next($J);}}$bc=array();if($_GET["modify"]){foreach($H
as$a){foreach($a
as$d=>$b){$bc[$d]=max($bc[$d],min(40,strlen(utf8_decode($b))));}}}echo($Md?"<th>".lang(229):"")."</thead>\n";foreach($o->rowDescriptions($H,$ha)as$ga=>$a){$od=unique_array($H[$ga],$K);$bb="";foreach($od
as$d=>$b){$bb.="&".(isset($b)?urlencode("where[".bracket_escape($d)."]")."=".urlencode($b):"null%5B%5D=".urlencode($d));}echo"<tr".odd().">".(!$ra&&$J?"":"<td>".checkbox("check[]",substr($bb,1),in_array(substr($bb,1),(array)$_POST["check"]),"","this.form['all'].checked = false; formUncheck('all-page');").(count($ra)<count($J)||information_schema(DB)?"":" <a href='".h(ME."edit=".urlencode($m).$bb)."'>".lang(119)."</a>"));foreach($a
as$d=>$b){if(isset($Ed[$d])){$e=$p[$d];if($b!=""&&(!isset($Jc[$d])||$Jc[$d]!="")){$Jc[$d]=(is_mail($b)?$Ed[$d]:"");}$x="";$b=$o->editVal($b,$e);if(!isset($b)){$b="<i>NULL</i>";}else{if(ereg('blob|bytea|raw|file',$e["type"])&&$b!=""){$x=h(ME.'download='.urlencode($m).'&field='.urlencode($d).$bb);}if($b===""){$b="&nbsp;";}elseif($Rb!=""&&ereg('text|blob',$e["type"])&&is_utf8($b)){$b=shorten_utf8($b,max(0,+$Rb));}else{$b=h($b);}if(!$x){foreach((array)$ha[$d]as$A){if(count($ha[$d])==1||end($A["source"])==$d){$x="";foreach($A["source"]as$l=>$Fa){$x.=where_link($l,$A["target"][$l],$H[$ga][$Fa]);}$x=h(($A["db"]!=""?preg_replace('~([?&]db=)[^&]+~','\\1'.urlencode($A["db"]),ME):ME).'select='.urlencode($A["table"]).$x);if(count($A["source"])==1){break;}}}}if($d=="COUNT(*)"){$x=h(ME."select=".urlencode($m));$l=0;foreach((array)$_GET["where"]as$y){if(!array_key_exists($y["col"],$od)){$x.=h(where_link($l++,$y["col"],$y["val"],$y["op"]));}}foreach($od
as$Ma=>$y){$x.=h(where_link($l++,$Ma,$y));}}}if(!$x){if(is_mail($b)){$x="mailto:$b";}if($he=is_url($a[$d])){$x=($he=="http"&&$vc?$a[$d]:"$he://www.adminer.org/redirect/?url=".urlencode($a[$d]));}}$S=h("val[$bb][".bracket_escape($d)."]");$q=$_POST["val"][$bb][bracket_escape($d)];$Td=h(isset($q)?$q:$a[$d]);$zf=strpos($b,"<i>...</i>");$Sd=is_utf8($b)&&$H[$ga][$d]==$a[$d]&&!$ca[$d];$be=ereg('text|lob',$e["type"]);echo(($_GET["modify"]&&$Sd)||isset($q)?"<td>".($be?"<textarea name='$S' cols='30' rows='".(substr_count($a[$d],"\n")+1)."'>$Td</textarea>":"<input name='$S' value='$Td' size='$bc[$d]'>"):"<td id='$S' ondblclick=\"".($Sd?"selectDblClick(this, event".($zf?", 2":($be?", 1":"")).")":"alert('".h(lang(230))."')").";\">".$o->selectVal($b,$x,$e));}}if($Md){echo"<td>";}$o->backwardKeysPrint($Md,$H[$ga]);echo"</tr>\n";}echo"</table>\n";}if($H||$Z){$qd=true;if($_GET["page"]!="last"&&+$L&&count($ra)>=count($J)&&($Xa>=$L||$Z)){$Xa=$E["Rows"];if(!isset($Xa)||$s||($E["Engine"]=="InnoDB"&&$Xa<max(1e4,2*($Z+1)*$L))){ob_flush();flush();$Xa=$g->result("SELECT COUNT(*) FROM ".table($m).($s?" WHERE ".implode(" AND ",$s):""));}else{$qd=false;}}echo"<p class='pages'>";if(+$L&&$Xa>$L){$Kd=floor(($Xa-1)/$L);echo'<a href="'.h(remove_from_uri("page"))."\" onclick=\"pageClick(this.href, +prompt('".lang(231)."', '".($Z+1)."'), event); return false;\">".lang(231)."</a>:",pagination(0,$Z).($Z>5?" ...":"");for($l=max(1,$Z-4);$l<min($Kd,$Z+5);$l++){echo
pagination($l,$Z);}echo($Z+5<$Kd?" ...":"").($qd?pagination($Kd,$Z):' <a href="'.h(remove_from_uri()."&page=last").'">'.lang(232)."</a>");}echo" (".($qd?"":"~ ").lang(122,$Xa).") ".checkbox("all",1,0,lang(233))."\n";if($o->selectCommandPrint()){echo'<fieldset><legend>',lang(31),'</legend><div>
<input type="submit" value="',lang(141),'" title="',lang(226),'" class="jsonly">
<input type="submit" name="edit" value="',lang(31),'">
<input type="submit" name="clone" value="',lang(234),'">
<input type="submit" name="delete" value="',lang(144),'" onclick="return confirm(\'',lang(0);?> (' + (this.form['all'].checked ? <?php echo$Xa,' : formChecked(this, /check/)) + \')\');">
</div></fieldset>
';}print_fieldset("export",lang(113));$Qa=$o->dumpOutput();echo($Qa?html_select("output",$Qa,$Zc["output"])." ":""),html_select("format",$o->dumpFormat(),$Zc["format"])," <input type='submit' name='export' value='".lang(113)."' onclick='eventStop(event);'>\n","</div></fieldset>\n";}if($o->selectImportPrint()){print_fieldset("import",lang(235),!$H);echo"<input type='file' name='csv_file'> ",html_select("separator",array("csv"=>"CSV,","csv;"=>"CSV;","tsv"=>"TSV"),$Zc["format"],1);echo" <input type='submit' name='import' value='".lang(235)."'>","<input type='hidden' name='token' value='$P'>\n","</div></fieldset>\n";}$o->selectEmailPrint(array_filter($Jc,'strlen'),$B);echo"</form>\n";}}}elseif(isset($_GET["variables"])){$ac=isset($_GET["status"]);page_header($ac?lang(74):lang(73));$Me=($ac?show_status():show_variables());if(!$Me){echo"<p class='message'>".lang(83)."\n";}else{echo"<table cellspacing='0'>\n";foreach($Me
as$d=>$b){echo"<tr>","<th><code class='jush-".$u.($ac?"status":"set")."'>".h($d)."</code>","<td>".nbsp($b);}echo"</table>\n";}}elseif(isset($_GET["script"])){header("Content-Type: text/javascript; charset=utf-8");if($_GET["script"]=="db"){$dd=array("Data_length"=>0,"Index_length"=>0,"Data_free"=>0);foreach(table_status()as$a){$S=js_escape($a["Name"]);json_row("Comment-$S",nbsp($a["Comment"]));if(!is_view($a)){foreach(array("Engine","Collation")as$d){json_row("$d-$S",nbsp($a[$d]));}foreach($dd+array("Auto_increment"=>0,"Rows"=>0)as$d=>$b){if($a[$d]!=""){$b=number_format($a[$d],0,'.',lang(236));json_row("$d-$S",($d=="Rows"&&$a["Engine"]=="InnoDB"&&$b?"~ $b":$b));if(isset($dd[$d])){$dd[$d]+=($a["Engine"]!="InnoDB"||$d!="Data_free"?$a[$d]:0);}}elseif(array_key_exists($d,$a)){json_row("$d-$S");}}}}foreach($dd
as$d=>$b){json_row("sum-$d",number_format($b,0,'.',lang(236)));}json_row("");}else{foreach(count_tables(get_databases())as$t=>$b){json_row("tables-".js_escape($t),$b);}json_row("");}exit;}else{$Qe=array_merge((array)$_POST["tables"],(array)$_POST["views"]);if($Qe&&!$n&&!$_POST["search"]){$j=true;$wa="";if($u=="sql"&&count($_POST["tables"])>1&&($_POST["drop"]||$_POST["truncate"]||$_POST["copy"])){queries("SET foreign_key_checks = 0");}if($_POST["truncate"]){if($_POST["tables"]){$j=truncate_tables($_POST["tables"]);}$wa=lang(237);}elseif($_POST["move"]){$j=move_tables((array)$_POST["tables"],(array)$_POST["views"],$_POST["target"]);$wa=lang(238);}elseif($_POST["copy"]){$j=copy_tables((array)$_POST["tables"],(array)$_POST["views"],$_POST["target"]);$wa=lang(239);}elseif($_POST["drop"]){if($_POST["views"]){$j=drop_views($_POST["views"]);}if($j&&$_POST["tables"]){$j=drop_tables($_POST["tables"]);}$wa=lang(240);}elseif($_POST["tables"]&&($j=queries(($_POST["optimize"]?"OPTIMIZE":($_POST["check"]?"CHECK":($_POST["repair"]?"REPAIR":"ANALYZE")))." TABLE ".implode(", ",array_map('idf_escape',$_POST["tables"]))))){while($a=$j->fetch_assoc()){$wa.="<b>".h($a["Table"])."</b>: ".h($a["Msg_text"])."<br>";}}queries_redirect(substr(ME,0,-1),$wa,$j);}page_header(($_GET["ns"]==""?lang(67).": ".h(DB):lang(81).": ".h($_GET["ns"])),$n,true);if($o->homepage()){if($_GET["ns"]!==""){echo"<h3>".lang(241)."</h3>\n";$cd=tables_list();if(!$cd){echo"<p class='message'>".lang(6)."\n";}else{echo"<form action='' method='post'>\n","<p>".lang(242).": <input name='query' value='".h($_POST["query"])."'> <input type='submit' name='search' value='".lang(36)."'>\n";if($_POST["search"]&&$_POST["query"]!=""){search_tables();}echo"<table cellspacing='0' class='nowrap' onclick='tableClick(event);'>\n",'<thead><tr class="wrap"><td><input id="check-all" type="checkbox" onclick="formCheck(this, /^(tables|views)\[/);"><th>'.lang(101).'<td>'.lang(243).'<td>'.lang(77).'<td>'.lang(244).'<td>'.lang(245).'<td>'.lang(246).'<td>'.lang(93).'<td>'.lang(247).(support("comment")?'<td>'.lang(95):'')."</thead>\n";foreach($cd
as$f=>$z){$fc=(isset($z)&&!eregi("table",$z));echo'<tr'.odd().'><td>'.checkbox(($fc?"views[]":"tables[]"),$f,in_array($f,$Qe,true),"","formUncheck('check-all');"),'<th><a href="'.h(ME).'table='.urlencode($f).'">'.h($f).'</a>';if($fc){echo'<td colspan="6"><a href="'.h(ME)."view=".urlencode($f).'">'.lang(100).'</a>','<td align="right"><a href="'.h(ME)."select=".urlencode($f).'">?</a>';}else{foreach(array("Engine"=>"","Collation"=>"","Data_length"=>"create","Index_length"=>"indexes","Data_free"=>"edit","Auto_increment"=>"auto_increment=1&create","Rows"=>"select")as$d=>$x){echo($x?"<td align='right'><a href='".h(ME."$x=").urlencode($f)."' id='$d-".h($f)."'>?</a>":"<td id='$d-".h($f)."'>&nbsp;");}}echo(support("comment")?"<td id='Comment-".h($f)."'>&nbsp;":"");}echo"<tr><td>&nbsp;<th>".lang(223,count($cd)),"<td>".nbsp($u=="sql"?$g->result("SELECT @@storage_engine"):""),"<td>".nbsp(db_collation(DB,collations()));foreach(array("Data_length","Index_length","Data_free")as$d){echo"<td align='right' id='sum-$d'>&nbsp;";}echo"</table>\n";if(!information_schema(DB)){echo"<p>".($u=="sql"?"<input type='submit' value='".lang(248)."'> <input type='submit' name='optimize' value='".lang(249)."'> <input type='submit' name='check' value='".lang(250)."'> <input type='submit' name='repair' value='".lang(251)."'> ":"")."<input type='submit' name='truncate' value='".lang(252)."'".confirm("formChecked(this, /tables/)")."> <input type='submit' name='drop' value='".lang(79)."'".confirm("formChecked(this, /tables|views/)",1).">\n";$_=(support("scheme")?schemas():get_databases());if(count($_)!=1&&$u!="sqlite"){$t=(isset($_POST["target"])?$_POST["target"]:(support("scheme")?$_GET["ns"]:DB));echo"<p>".lang(253).": ",($_?html_select("target",$_,$t):'<input name="target" value="'.h($t).'">')," <input type='submit' name='move' value='".lang(254)."' onclick='eventStop(event);'>",(support("copy")?" <input type='submit' name='copy' value='".lang(255)."' onclick='eventStop(event);'>":""),"\n";}echo"<input type='hidden' name='token' value='$P'>\n";}echo"</form>\n";}echo'<p><a href="'.h(ME).'create=">'.lang(148)."</a>\n";if(support("view")){echo'<a href="'.h(ME).'view=">'.lang(181)."</a>\n";}if(support("routine")){echo"<h3>".lang(116)."</h3>\n";$af=routines();if($af){echo"<table cellspacing='0'>\n",'<thead><tr><th>'.lang(159).'<td>'.lang(90).'<td>'.lang(198)."<td>&nbsp;</thead>\n";odd('');foreach($af
as$a){echo'<tr'.odd().'>','<th><a href="'.h(ME).($a["ROUTINE_TYPE"]!="PROCEDURE"?'callf=':'call=').urlencode($a["ROUTINE_NAME"]).'">'.h($a["ROUTINE_NAME"]).'</a>','<td>'.h($a["ROUTINE_TYPE"]),'<td>'.h($a["DTD_IDENTIFIER"]),'<td><a href="'.h(ME).($a["ROUTINE_TYPE"]!="PROCEDURE"?'function=':'procedure=').urlencode($a["ROUTINE_NAME"]).'">'.lang(108)."</a>";}echo"</table>\n";}echo'<p>'.(support("procedure")?'<a href="'.h(ME).'procedure=">'.lang(197).'</a> ':'').'<a href="'.h(ME).'function=">'.lang(196)."</a>\n";}if(support("sequence")){echo"<h3>".lang(256)."</h3>\n";$jf=get_vals("SELECT sequence_name FROM information_schema.sequences WHERE sequence_schema = current_schema()");if($jf){echo"<table cellspacing='0'>\n","<thead><tr><th>".lang(159)."</thead>\n";odd('');foreach($jf
as$b){echo"<tr".odd()."><th><a href='".h(ME)."sequence=".urlencode($b)."'>".h($b)."</a>\n";}echo"</table>\n";}echo"<p><a href='".h(ME)."sequence='>".lang(203)."</a>\n";}if(support("type")){echo"<h3>".lang(11)."</h3>\n";$R=types();if($R){echo"<table cellspacing='0'>\n","<thead><tr><th>".lang(159)."</thead>\n";odd('');foreach($R
as$b){echo"<tr".odd()."><th><a href='".h(ME)."type=".urlencode($b)."'>".h($b)."</a>\n";}echo"</table>\n";}echo"<p><a href='".h(ME)."type='>".lang(207)."</a>\n";}if(support("event")){echo"<h3>".lang(117)."</h3>\n";$H=get_rows("SHOW EVENTS");if($H){echo"<table cellspacing='0'>\n","<thead><tr><th>".lang(159)."<td>".lang(257)."<td>".lang(187)."<td>".lang(188)."</thead>\n";foreach($H
as$a){echo"<tr>",'<th><a href="'.h(ME).'event='.urlencode($a["Name"]).'">'.h($a["Name"])."</a>","<td>".($a["Execute at"]?lang(258)."<td>".$a["Execute at"]:lang(189)." ".$a["Interval value"]." ".$a["Interval field"]."<td>$a[Starts]"),"<td>$a[Ends]";}echo"</table>\n";}echo'<p><a href="'.h(ME).'event=">'.lang(186)."</a>\n";}if($cd){echo"<script type='text/javascript'>ajaxSetHtml('".js_escape(ME)."script=db');</script>\n";}}}}page_footer();