<?php
session_start();
include_once 'conn.php';
$ndate =date("Y-m-d");
$addnew=$_POST["addnew"];
if ($addnew=="1" )
{
	$xuehao=$_POST["xuehao"];$xingming=$_POST["xingming"];$xingbie=$_POST["xingbie"];$minzu=$_POST["minzu"];
	$zhengzhimianmao=$_POST["zhengzhimianmao"];$leibie=$_POST["leibie"];$suozaibanji=$_POST["suozaibanji"];
	$lianxifangshi=$_POST["lianxifangshi"];$shenfenzhenghaoma=$_POST["shenfenzhenghaoma"];
	$jiatingxiangxizhuzhi=$_POST["province"].$_POST["jiatingxiangxizhuzhi"];$gerenzhaopian=$_POST["gerenzhaopian"];
	$fuqinxingming=$_POST["fuqinxingming"];$fuqingongzuodanwei=$_POST["fuqingongzuodanwei"];
	$fuqinlianxidianhua=$_POST["fuqinlianxidianhua"];$jiatinglianxidianhua=$_POST["jiatinglianxidianhua"];
	$muqinxingming=$_POST["muqinxingming"];$muqingongzuodanwei=$_POST["muqingongzuodanwei"];
	$muqinlianxidianhua=$_POST["muqinlianxidianhua"];
	$mima=md5($_POST["mima"]);
	ischongfu("select id from xueshengxinxi where xuehao='".$xuehao."'");
	$sql="insert into xueshengxinxi(xuehao,xingming,xingbie,minzu,zhengzhimianmao,leibie,suozaibanji,lianxifangshi,shenfenzhenghaoma,jiatingxiangxizhuzhi,fuqinxingming,fuqingongzuodanwei,fuqinlianxidianhua,jiatinglianxidianhua,muqinxingming,muqingongzuodanwei,muqinlianxidianhua,mima) values('$xuehao','$xingming','$xingbie','$minzu','$zhengzhimianmao','$leibie','$suozaibanji','$lianxifangshi','$shenfenzhenghaoma','$jiatingxiangxizhuzhi','$fuqinxingming','$fuqingongzuodanwei','$fuqinlianxidianhua','$jiatinglianxidianhua','$muqinxingming','$muqingongzuodanwei','$muqinlianxidianhua','$mima') ";
	mysql_query($sql);
	echo "<script>javascript:alert('��ӳɹ�!');location.href='xueshengxinxi_add.php';</script>";
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>�ޱ����ĵ�</title><script language="javascript" src="js/Calendar.js"></script><link rel="stylesheet" href="css.css" type="text/css">
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
<p>���ѧ����Ϣ�� ��ǰ���ڣ� <?php echo $ndate; ?></p>
<script language="javascript">
	function check()
{
	if(document.form1.xuehao.value==""){alert("������ѧ��");document.form1.xuehao.focus();return false;}if(document.form1.xingming.value==""){alert("����������");document.form1.xingming.focus();return false;}if(document.form1.mima.value==""){alert("����������");document.form1.mima.focus();return false;}
}
	function gow()
	{
		location.href='peixunccccailiao_add.php?jihuabifffanhao='+document.form1.jihuabifffanhao.value;
	}
</script>



<form id="form1" name="form1" method="post" action="">
<table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#000000" style="border-collapse:collapse">
	<tr><td>ѧ�ţ�</td><td><input name='xuehao' type='text' id='xuehao' value='' style='border:solid 1px #000000; color:#666666' />&nbsp;*</td></tr><tr><td>������</td><td><input name='xingming' type='text' id='xingming' value='' style='border:solid 1px #000000; color:#666666' />&nbsp;*</td></tr><tr><td>�Ա�</td><td><select name='xingbie' id='xingbie'><option value="��">��</option><option value="Ů">Ů</option></select></td></tr><tr><td>���壺</td><td><select name='minzu' id='minzu' style='border:solid 1px #000000; color:#666666'>
	  <option value="����">����</option>
	  <option value="����">����</option>
	</select></td></tr><tr><td>������ò��</td><td><select name='zhengzhimianmao' id='zhengzhimianmao' style='border:solid 1px #000000; color:#666666'>
	  <option value="��Ա">��Ա</option>
	  <option value="��Ա">��Ա</option>
	  <option value="Ⱥ��">Ⱥ��</option>
	</select></td></tr><tr><td>���</td><td><select name='leibie' id='leibie' style='border:solid 1px #000000; color:#666666'>
	  <option value="ѧ���ɲ�">ѧ���ɲ�</option>
	  <option value="��������">��������</option>
	  <option value="ѧ���һ�������">ѧ���һ�������</option>
	</select></td></tr><tr><td>���ڰ༶��</td><td><select name='suozaibanji' id='suozaibanji'><?php getoption("banjixinxi","banji")?></select></td></tr><tr><td>��ϵ��ʽ��</td><td><input name='lianxifangshi' type='text' id='lianxifangshi' value='' style='border:solid 1px #000000; color:#666666' /></td></tr><tr><td>���֤���룺</td><td><input name='shenfenzhenghaoma' type='text' id='shenfenzhenghaoma' value='' size='50' style='border:solid 1px #000000; color:#666666'  /></td></tr><tr><td>��ͥ��ϸסַ��</td>
	<td> <select name="province" id="province" >
  <?php
  	getoption("hat_province","province")
  ?>
  </select>
  <label for="����"></label><label for="��"></label>
  <input name='jiatingxiangxizhuzhi' type='text' id='jiatingxiangxizhuzhi' value='' size='50' style='border:solid 1px #000000; color:#666666'  /></td></tr><!--<tr><td>������Ƭ��</td><td><input name='gerenzhaopian' type='text' id='gerenzhaopian' value='' size='50' style='border:solid 1px #000000; color:#666666'  />&nbsp;<a href="javaScript:OpenScript('upfile.php?Result=gerenzhaopian',460,180)"><img src="Images/Upload.gif" width="30" height="16" border="0" align="absmiddle" /></a></td></tr>--><tr><td>����������</td><td><input name='fuqinxingming' type='text' id='fuqinxingming' value='' style='border:solid 1px #000000; color:#666666' /></td></tr><tr><td>���׹�����λ��</td><td><input name='fuqingongzuodanwei' type='text' id='fuqingongzuodanwei' value='' size='50' style='border:solid 1px #000000; color:#666666'  /></td></tr><tr><td>������ϵ�绰��</td><td><input name='fuqinlianxidianhua' type='text' id='fuqinlianxidianhua' value='' style='border:solid 1px #000000; color:#666666' /></td></tr><tr><td>��ͥ��ϵ�绰��</td><td><input name='jiatinglianxidianhua' type='text' id='jiatinglianxidianhua' value='' style='border:solid 1px #000000; color:#666666' /></td></tr><tr><td>ĸ��������</td><td><input name='muqinxingming' type='text' id='muqinxingming' value='' style='border:solid 1px #000000; color:#666666' /></td></tr><tr><td>ĸ�׹�����λ��</td><td><input name='muqingongzuodanwei' type='text' id='muqingongzuodanwei' value='' size='50' style='border:solid 1px #000000; color:#666666'  /></td></tr><tr><td>ĸ����ϵ�绰��</td><td><input name='muqinlianxidianhua' type='text' id='muqinlianxidianhua' value='' style='border:solid 1px #000000; color:#666666' /></td></tr><tr><td>���룺</td><td><input name='mima' type='text' id='mima' value='' style='border:solid 1px #000000; color:#666666' />&nbsp;*</td></tr>

    <tr>
      <td>&nbsp;</td>
      <td><input type="hidden" name="addnew" value="1" />
        <input type="submit" name="Submit" value="���" onclick="return check();"  style='border:solid 1px #000000; color:#666666' />
      <input type="reset" name="Submit2" value="����" style='border:solid 1px #000000; color:#666666' /></td>
    </tr>
  </table>
</form>
<p>&nbsp;</p>
<?php
	function ischongfu($sql)
	{
		$query=mysql_query($sql);
 		$rowscount=mysql_num_rows($query);
		if($rowscount>0)
		{
			echo "<script>javascript:alert('�Բ��𣬸�ѧ���Ѿ����ڣ��뻻����ѧ��!');history.back();</script>";
		}
		
	}
?>
</body>
</html>

