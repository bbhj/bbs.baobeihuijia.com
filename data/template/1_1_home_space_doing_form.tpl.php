<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); ?>
<script type="text/javascript">
var msgstr = '<?php echo $defaultstr;?>';
function handlePrompt(type) {
var msgObj = $('message');
if(type) {
if(msgObj.value == msgstr) {
msgObj.value = '';
msgObj.className = 'xg2';
}
if($('message_menu')) {
if($('message_menu').style.display == 'block') {
showFace('message', 'message', msgstr);
}
}
if(BROWSER.firefox || BROWSER.chrome) {
showFace('message', 'message', msgstr);
}
} else {
if(msgObj.value == ''){
msgObj.value = msgstr;
msgObj.className = 'xg1';
}
}
}
</script>

<div id="moodfm">
<form method="post" autocomplete="off" id="mood_addform" action="home.php?mod=spacecp&amp;ac=doing&amp;view=<?php echo $_GET['view'];?>" onsubmit="if($('message').value == msgstr){return false;}">
<table cellspacing="0" cellpadding="0">
<tr>
<td id="mood_statusinput" class="moodfm_input">
<textarea name="message" id="message" class="xg1" onfocus="handlePrompt(1);" onclick="showFace(this.id, 'message', msgstr);" onblur="handlePrompt(0);" onkeyup="strLenCalc(this, 'maxlimit')" onkeydown="ctrlEnter(event, 'add');" rows="4"><?php echo $defaultstr;?></textarea>
</td>
<td class="moodfm_btn">
<button type="submit" name="add" id="add">发布</button>
</td>
</tr>
<tr>
<td class="moodfm_f">
<div id="return_doing" class="xi1 xw1"></div>
<span class="y">还可输入 <strong id="maxlimit">200</strong> 个字符</span>
<?php if($_G['group']['maxsigsize']) { ?>
<label for="to_sign"><input type="checkbox" name="to_signhtml" id="to_sign" class="pc" value="1" />同步到个人签名</label>
<?php } ?>
</td>
<td></td>
</tr>
</table>
<input type="hidden" name="addsubmit" value="true" />
<input type="hidden" name="refer" value="<?php echo $theurl;?>" />
<input type="hidden" name="topicid" value="<?php echo $topicid;?>" />
<input type="hidden" name="formhash" value="<?php echo FORMHASH;?>" />
</form>
</div>