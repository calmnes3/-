<?php 
$id=$_GET["id"];
include_once 'conn.php';
$ndate =date("Y-m-d");
$addnew=$_POST["addnew"];
if ($addnew=="1" )
{

	$xuehao=$_POST["xuehao"];$xingming=$_POST["xingming"];$xingbie=$_POST["xingbie"];
	$minzu=$_POST["minzu"];$zhengzhimianmao=$_POST["zhengzhimianmao"];$leibie=$_POST["leibie"];
	$suozaibanji=$_POST["suozaibanji"];$lianxifangshi=$_POST["lianxifangshi"];$shenfenzhenghaoma=$_POST["shenfenzhenghaoma"];
	$jiatingxiangxizhuzhi=$_POST["jiatingxiangxizhuzhi"];$fuqinxingming=$_POST["fuqinxingming"];
	$fuqingongzuodanwei=$_POST["fuqingongzuodanwei"];$fuqinlianxidianhua=$_POST["fuqinlianxidianhua"];$jiatinglianxidianhua=$_POST["jiatinglianxidianhua"];
	$muqinxingming=$_POST["muqinxingming"];$muqingongzuodanwei=$_POST["muqingongzuodanwei"];$muqinlianxidianhua=$_POST["muqinlianxidianhua"];
	$mima=$_POST["mima"];
	if ($mima=="")
	{
		$sql="update xueshengxinxi set xuehao='$xuehao',xingming='$xingming',xingbie='$xingbie',minzu='$minzu',zhengzhimianmao='$zhengzhimianmao',leibie='$leibie',suozaibanji='$suozaibanji',lianxifangshi='$lianxifangshi',shenfenzhenghaoma='$shenfenzhenghaoma',jiatingxiangxizhuzhi='$jiatingxiangxizhuzhi',fuqinxingming='$fuqinxingming',fuqingongzuodanwei='$fuqingongzuodanwei',fuqinlianxidianhua='$fuqinlianxidianhua',jiatinglianxidianhua='$jiatinglianxidianhua',muqinxingming='$muqinxingming',muqingongzuodanwei='$muqingongzuodanwei',muqinlianxidianhua='$muqinlianxidianhua' where id= ".$id;
	}
	else
	{
		$mima=md5($mima);
		$sql="update xueshengxinxi set xuehao='$xuehao',xingming='$xingming',xingbie='$xingbie',minzu='$minzu',zhengzhimianmao='$zhengzhimianmao',leibie='$leibie',suozaibanji='$suozaibanji',lianxifangshi='$lianxifangshi',shenfenzhenghaoma='$shenfenzhenghaoma',jiatingxiangxizhuzhi='$jiatingxiangxizhuzhi',fuqinxingming='$fuqinxingming',fuqingongzuodanwei='$fuqingongzuodanwei',fuqinlianxidianhua='$fuqinlianxidianhua',jiatinglianxidianhua='$jiatinglianxidianhua',muqinxingming='$muqinxingming',muqingongzuodanwei='$muqingongzuodanwei',muqinlianxidianhua='$muqinlianxidianhua',mima='$mima' where id= ".$id;

	}
	
	
	mysql_query($sql);
	echo "<script>javascript:alert('�޸ĳɹ�!');location.href='xueshengxinxi_list.php';</script>";
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>�޸�ѧ����Ϣ</title><link rel="stylesheet" href="css.css" type="text/css"><script language="javascript" src="js/Calendar.js"></script>
</head>
<script language="javascript">
	
	
	function OpenScript(url,width,height)
{
  var win = window.open(url,"SelectToSort",'width=' + width + ',height=' + height + ',resizable=1,scrollbars=yes,menubar=no,status=yes' );
}
	function OpenDialog(sURL, iWidth, iHeight)
{
   var oDialog = window.open(sURL, "_EditorDialog", "width=" + iWidth.toString() + ",height=" + iHeight.toString() + ",resizable=no,left=0,top=0,scrollbars=no,status=no,titlebar=no,toolbar=no,menubar=no,location=no");
   oDialog.focus();
}
</script>
<body>
<p>�޸�ѧ����Ϣ�� ��ǰ���ڣ� <?php echo $ndate; ?></p>
<?php
$sql="select * from xueshengxinxi where id=".$id;
$query=mysql_query($sql);
$rowscount=mysql_num_rows($query);
if($rowscount>0)
{
?>
<form id="form1" name="form1" method="post" action="">
<table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#000000" style="border-collapse:collapse">

      <tr><td>ѧ�ţ�</td><td><input name='xuehao' type='text' id='xuehao' value='<?php echo mysql_result($query,$i,xuehao);?>' /></td></tr><tr><td>������</td><td><input name='xingming' type='text' id='xingming' value='<?php echo mysql_result($query,$i,xingming);?>' /></td></tr><tr><td>�Ա�</td><td><select name='xingbie' id='xingbie'><option value="��">��</option><option value="Ů">Ů</option></select></td></tr><script language="javascript">document.form1.xingbie.value='<?php echo mysql_result($query,$i,xingbie);?>';</script><tr><td>���壺</td><td><select name='minzu' id='minzu' style='border:solid 1px #000000; color:#666666'>
        <option value="����">����</option>
        <option value="����">����</option>
      </select></td></tr><script language="javascript">document.form1.minzu.value='<?php echo mysql_result($query,$i,minzu);?>';</script><tr><td>������ò��</td><td><select name='zhengzhimianmao' id='zhengzhimianmao' style='border:solid 1px #000000; color:#666666'>
        <option value="��Ա">��Ա</option>
        <option value="��Ա">��Ա</option>
        <option value="Ⱥ��">Ⱥ��</option>
      </select></td></tr><script language="javascript">document.form1.zhengzhimianmao.value='<?php echo mysql_result($query,$i,zhengzhimianmao);?>';</script><tr><td>���</td><td><select name='leibie' id='leibie' style='border:solid 1px #000000; color:#666666'>
        <option value="ѧ���ɲ�">ѧ���ɲ�</option>
        <option value="��������">��������</option>
        <option value="ѧ���һ�������">ѧ���һ�������</option>
      </select></td></tr><script language="javascript">document.form1.leibie.value='<?php echo mysql_result($query,$i,leibie);?>';</script><tr><td>���ڰ༶��</td><td><select name='suozaibanji' id='suozaibanji'><?php getoption("banjixinxi","banji")?></select></select></td></tr><script language="javascript">document.form1.suozaibanji.value='<?php echo mysql_result($query,$i,suozaibanji);?>';</script><tr><td>��ϵ��ʽ��</td><td><input name='lianxifangshi' type='text' id='lianxifangshi' value='<?php echo mysql_result($query,$i,lianxifangshi);?>' /></td></tr><tr><td>���֤���룺</td><td><input name='shenfenzhenghaoma' type='text' id='shenfenzhenghaoma' size='50' value='<?php echo mysql_result($query,$i,shenfenzhenghaoma);?>' /></td></tr><tr><td>��ͥ��ϸסַ��</td><td><input name='jiatingxiangxizhuzhi' type='text' id='jiatingxiangxizhuzhi' size='50' value='<?php echo mysql_result($query,$i,jiatingxiangxizhuzhi);?>' /></td></tr><!--<tr><td>������Ƭ��</td><td><input name='gerenzhaopian' type='text' id='gerenzhaopian' size='50'  value='<?php /*echo mysql_result($query,$i,gerenzhaopian);*/?>' /> &nbsp;<a href="javaScript:OpenScript('upfile.php?Result=gerenzhaopian',460,180)"><img src="Images/Upload.gif" width="30" height="16" border="0" align="absmiddle" /></a></td></tr>--><tr><td>����������</td><td><input name='fuqinxingming' type='text' id='fuqinxingming' value='<?php echo mysql_result($query,$i,fuqinxingming);?>' /></td></tr><tr><td>���׹�����λ��</td><td><input name='fuqingongzuodanwei' type='text' id='fuqingongzuodanwei' size='50' value='<?php echo mysql_result($query,$i,fuqingongzuodanwei);?>' /></td></tr><tr><td>������ϵ�绰��</td><td><input name='fuqinlianxidianhua' type='text' id='fuqinlianxidianhua' value='<?php echo mysql_result($query,$i,fuqinlianxidianhua);?>' /></td></tr><tr><td>��ͥ��ϵ�绰��</td><td><input name='jiatinglianxidianhua' type='text' id='jiatinglianxidianhua' value='<?php echo mysql_result($query,$i,jiatinglianxidianhua);?>' /></td></tr><tr><td>ĸ��������</td><td><input name='muqinxingming' type='text' id='muqinxingming' value='<?php echo mysql_result($query,$i,muqinxingming);?>' /></td></tr><tr><td>ĸ�׹�����λ��</td><td><input name='muqingongzuodanwei' type='text' id='muqingongzuodanwei' size='50' value='<?php echo mysql_result($query,$i,muqingongzuodanwei);?>' /></td></tr><tr><td>ĸ����ϵ�绰��</td><td><input name='muqinlianxidianhua' type='text' id='muqinlianxidianhua' value='<?php echo mysql_result($query,$i,muqinlianxidianhua);?>' /></td></tr><tr><td>���룺</td><td><input name='mima' type='text' id='mima' />
      �������֮����</td>
      </tr>
   
   
    <tr>
      <td>&nbsp;</td>
      <td><input name="addnew" type="hidden" id="addnew" value="1" />
      <input type="submit" name="Submit" value="�޸�" style='border:solid 1px #000000; color:#666666' />
      <input type="reset" name="Submit2" value="����" style='border:solid 1px #000000; color:#666666' /></td>
    </tr>
  </table>
</form>
<?php
	}
?>
<p>&nbsp;</p>
</body>
</html>

