<?php
error_reporting(0);
session_start();
include_once 'conn.php';
$ndate =date("Y-m-d");
$addnew=$_POST["addnew"];
if ($addnew=="1" )
{
	$xuehao=$_POST["xuehao"];$xingming=$_POST["xingming"];$suozaibanji=$_POST["suozaibanji"];$huodeshijian=$_POST["huodeshijian"];$canjiahuodongleixing=$_POST["canjiahuodongleixing"];$waiyudengji=$_POST["waiyudengji"];$gerenrongyu=$_POST["gerenrongyu"];$tuchugongxian=$_POST["tuchugongxian"];$beizhu=$_POST["beizhu"];
	//ischongfu("select id from richangbiaoxian where xuehao='".$xuehao."'");
	$sql="insert into richangbiaoxian(xuehao,xingming,suozaibanji,huodeshijian,canjiahuodongleixing,waiyudengji,gerenrongyu,tuchugongxian,beizhu) values('$xuehao','$xingming','$suozaibanji','$huodeshijian','$canjiahuodongleixing','$waiyudengji','$gerenrongyu','$tuchugongxian','$beizhu') ";
	mysql_query($sql);
	echo "<script>javascript:alert('��ӳɹ�!');location.href='richangbiaoxian_add.php';</script>";
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
<p>����ճ����֣� ��ǰ���ڣ� <?php echo $ndate; ?></p>
<script language="javascript">
	function check()
{
	if(document.form1.xuehao.value==""){alert("������ѧ��");document.form1.xuehao.focus();return false;}if(document.form1.xingming.value==""){alert("����������");document.form1.xingming.focus();return false;}if(document.form1.suozaibanji.value==""){alert("���������ڰ༶");document.form1.suozaibanji.focus();return false;}if(document.form1.huodeshijian.value==""){alert("��������ʱ��");document.form1.huodeshijian.focus();return false;}
}
	function gow()
	{
		location.href='peixunccccailiao_add.php?jihuabifffanhao='+document.form1.jihuabifffanhao.value;
	}
</script>
 <?php
 $sql="select * from xueshengxinxi where id=".$_GET["id"];
 $query=mysql_query($sql);
 $rowscount=mysql_num_rows($query);
 if($rowscount>0)
 {
 	$xuehao=mysql_result($query,0,xuehao);
$xingming=mysql_result($query,0,xingming);
$suozaibanji=mysql_result($query,0,suozaibanji);

 }
?>
<form id="form1" name="form1" method="post" action="">
<table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#000000" style="border-collapse:collapse">
	<tr><td>ѧ�ţ�</td><td><input name='xuehao' type='text' id='xuehao' value='<?php echo $_SESSION['username'];?>' style='border:solid 1px #000000; color:#666666' />&nbsp;*</td></tr><script language="javascript">document.form1.xuehao.value='<?php echo $xuehao?>';</script><tr><td>������</td><td><input name='xingming' type='text' id='xingming' value='' style='border:solid 1px #000000; color:#666666' />&nbsp;*</td></tr><script language="javascript">document.form1.xingming.value='<?php echo $xingming?>';</script><tr><td>���ڰ༶��</td><td><input name='suozaibanji' type='text' id='suozaibanji' value='' style='border:solid 1px #000000; color:#666666' />&nbsp;*</td></tr><script language="javascript">document.form1.suozaibanji.value='<?php echo $suozaibanji?>';</script><tr><td>���ʱ�䣺</td><td><input name='huodeshijian' type='text' id='huodeshijian' value='' onclick="getDate(form1.huodeshijian,'2')" need="1" style='border:solid 1px #000000; color:#666666' />&nbsp;*</td></tr><tr><td>�μӻ���ͣ�</td><td><select name='canjiahuodongleixing' id='canjiahuodongleixing'><?php getoption("huodongleixing","leixing")?></select></td></tr><tr><td>����ȼ���</td><td><select name='waiyudengji' id='waiyudengji' style='border:solid 1px #000000; color:#666666'>
	  <option value="�ļ�">�ļ�</option>
	  <option value="����">����</option>
	</select></td></tr><tr><td>����������</td><td><input name='gerenrongyu' type='text' id='gerenrongyu' value='' style='border:solid 1px #000000; color:#666666' /></td></tr><tr><td>ͻ�����ף�</td><td><select name='tuchugongxian' id='tuchugongxian'>
      <option value="��">��</option>
      <option value="��">��</option>
    </select></td></tr><tr><td>��ע��</td><td><textarea name='beizhu' cols='50' rows='8' id='beizhu' style='border:solid 1px #000000; color:#666666'></textarea></td></tr>

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

