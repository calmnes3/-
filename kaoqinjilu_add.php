<?php
session_start();
include_once 'conn.php';
$ndate =date("Y-m-d");
$addnew=$_POST["addnew"];
if ($addnew=="1" )
{
	$xuehao=$_POST["xuehao"];$xingming=$_POST["xingming"];$suozaibanji=$_POST["suozaibanji"];$xingbie=$_POST["xingbie"];$kechengmingcheng=$_POST["kechengmingcheng"];$renkejiaoshi=$_POST["renkejiaoshi"];$shangkeshijian=$_POST["shangkeshijian"];$zhuangtai=$_POST["zhuangtai"];$ketangbiaoxian=$_POST["ketangbiaoxian"];
	//ischongfu("select id from kaoqinjilu where xuehao='".$xuehao."'");
	$sql="insert into kaoqinjilu(xuehao,xingming,suozaibanji,xingbie,kechengmingcheng,renkejiaoshi,shangkeshijian,zhuangtai,ketangbiaoxian) values('$xuehao','$xingming','$suozaibanji','$xingbie','$kechengmingcheng','$renkejiaoshi','$shangkeshijian','$zhuangtai','$ketangbiaoxian') ";
	mysql_query($sql);
	echo "<script>javascript:alert('��ӳɹ�!');location.href='kaoqinjilu_list.php';</script>";
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
<p>��ӿ��ڼ�¼�� ��ǰ���ڣ� <?php echo $ndate; ?></p>
<script language="javascript">
	function check()
{
	if(document.form1.xuehao.value==""){alert("������ѧ��");document.form1.xuehao.focus();return false;}if(document.form1.xingming.value==""){alert("����������");document.form1.xingming.focus();return false;}
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
$xingbie=mysql_result($query,0,xingbie);

 }
?>
<form id="form1" name="form1" method="post" action="">
<table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#000000" style="border-collapse:collapse">
	<tr><td>ѧ�ţ�</td><td><input name='xuehao' type='text' id='xuehao' style='border:solid 1px #000000; color:#666666' />
&nbsp;*</td></tr><script language="javascript">document.form1.xuehao.value='<?php echo $xuehao?>';</script><tr><td>������</td><td><input name='xingming' type='text' id='xingming' value='' style='border:solid 1px #000000; color:#666666' />&nbsp;*</td></tr><script language="javascript">document.form1.xingming.value='<?php echo $xingming?>';</script><tr><td>���ڰ༶��</td><td><input name='suozaibanji' type='text' id='suozaibanji' value='' style='border:solid 1px #000000; color:#666666' /></td></tr><script language="javascript">document.form1.suozaibanji.value='<?php echo $suozaibanji?>';</script><tr><td>�Ա�</td><td><input name='xingbie' type='text' id='xingbie' value='' style='border:solid 1px #000000; color:#666666' /></td></tr><script language="javascript">document.form1.xingbie.value='<?php echo $xingbie?>';</script>
<tr><td>�γ����ƣ�</td><td><input name='kechengmingcheng' type='text' id='kechengmingcheng' value='<?php echo $_SESSION['kc'];?>' style='border:solid 1px #000000; color:#666666' /></td></tr><tr><td>�ον�ʦ��</td><td><input name='renkejiaoshi' type='text' id='renkejiaoshi' value='<?php echo $_SESSION['username'];?>' style='border:solid 1px #000000; color:#666666' /></td></tr><tr><td>�Ͽ�ʱ�䣺</td><td><input name='shangkeshijian' type='text' id='shangkeshijian' value='' onclick="getDate(form1.shangkeshijian,'2')" need="1" style='border:solid 1px #000000; color:#666666' /></td></tr><tr><td>״̬��</td><td><select name='zhuangtai' id='zhuangtai' style='border:solid 1px #000000; color:#666666'>
  <option value="�ٵ�">�ٵ�</option>
  <option value="����">����</option>
  <option value="����">����</option>
  <option value="�¼�">�¼�</option>
  <option value="����">����</option>
</select></td></tr><tr><td>���ñ��֣�</td><td><select name='ketangbiaoxian' id='ketangbiaoxian' style='border:solid 1px #000000; color:#666666'>
  <option value="��">��</option>
  <option value="��">��</option>
  <option value="��">��</option>
</select></td></tr>

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

