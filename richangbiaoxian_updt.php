<?php 
$id=$_GET["id"];
include_once 'conn.php';
$ndate =date("Y-m-d");
$addnew=$_POST["addnew"];
if ($addnew=="1" )
{

	$xuehao=$_POST["xuehao"];$xingming=$_POST["xingming"];$suozaibanji=$_POST["suozaibanji"];$huodeshijian=$_POST["huodeshijian"];$canjiahuodongleixing=$_POST["canjiahuodongleixing"];$waiyudengji=$_POST["waiyudengji"];$gerenrongyu=$_POST["gerenrongyu"];$tuchugongxian=$_POST["tuchugongxian"];$beizhu=$_POST["beizhu"];
	$sql="update richangbiaoxian set xuehao='$xuehao',xingming='$xingming',suozaibanji='$suozaibanji',huodeshijian='$huodeshijian',canjiahuodongleixing='$canjiahuodongleixing',waiyudengji='$waiyudengji',gerenrongyu='$gerenrongyu',tuchugongxian='$tuchugongxian',beizhu='$beizhu' where id= ".$id;
	mysql_query($sql);
	echo "<script>javascript:alert('�޸ĳɹ�!');location.href='richangbiaoxian_list.php';</script>";
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>�޸��ճ�����</title><link rel="stylesheet" href="css.css" type="text/css"><script language="javascript" src="js/Calendar.js"></script>
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
<p>�޸��ճ����֣� ��ǰ���ڣ� <?php echo $ndate; ?></p>
<?php
$sql="select * from richangbiaoxian where id=".$id;
$query=mysql_query($sql);
$rowscount=mysql_num_rows($query);
if($rowscount>0)
{
?>
<form id="form1" name="form1" method="post" action="">
<table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#000000" style="border-collapse:collapse">

      <tr><td>ѧ�ţ�</td><td><input name='xuehao' type='text' id='xuehao' value='<?php echo mysql_result($query,$i,xuehao);?>' /></td></tr><tr><td>������</td><td><input name='xingming' type='text' id='xingming' value='<?php echo mysql_result($query,$i,xingming);?>' /></td></tr><tr><td>���ڰ༶��</td><td><input name='suozaibanji' type='text' id='suozaibanji' value='<?php echo mysql_result($query,$i,suozaibanji);?>' /></td></tr><tr><td>���ʱ�䣺</td><td><input name='huodeshijian' type='text' id='huodeshijian' value='<?php echo mysql_result($query,$i,huodeshijian);?>' onclick="getDate(form1.huodeshijian,'2')" need="1" /></td></tr><tr><td>�μӻ���ͣ�</td><td><select name='canjiahuodongleixing' id='canjiahuodongleixing'><?php getoption("huodongleixing","leixing")?></select></select></td></tr><script language="javascript">document.form1.canjiahuodongleixing.value='<?php echo mysql_result($query,$i,canjiahuodongleixing);?>';</script><tr><td>����ȼ���</td><td><select name='waiyudengji' id='waiyudengji' style='border:solid 1px #000000; color:#666666'>
        <option value="�ļ�">�ļ�</option>
        <option value="����">����</option>
      </select></td></tr><script language="javascript">document.form1.waiyudengji.value='<?php echo mysql_result($query,$i,waiyudengji);?>';</script><tr><td>����������</td><td><input name='gerenrongyu' type='text' id='gerenrongyu' value='<?php echo mysql_result($query,$i,gerenrongyu);?>' /></td></tr><tr><td>ͻ�����ף�</td><td><select name='tuchugongxian' id='tuchugongxian'>
        <option value="��">��</option>
        <option value="��">��</option>
      </select></td></tr><script language="javascript">document.form1.tuchugongxian.value='<?php echo mysql_result($query,$i,tuchugongxian);?>';</script><tr><td>��ע��</td><td><textarea name='beizhu' cols='50' rows='8' id='beizhu'><?php echo mysql_result($query,$i,beizhu);?></textarea></td></tr>
   
   
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

