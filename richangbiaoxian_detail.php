<?php 
$id=$_GET["id"];
include_once 'conn.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>������ϸ</title><link rel="stylesheet" href="css.css" type="text/css">
</head>
<body>
<p>������ϸ�� ��ǰ���ڣ� <?php echo $ndate; ?></p>
					<?php
$sql="select * from richangbiaoxian where id=".$id;
$query=mysql_query($sql);
$rowscount=mysql_num_rows($query);
if($rowscount>0)
{
?>

<table width="70%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#000000" style="border-collapse:collapse">
      <tr>
	  <td width='16%'>ѧ�ţ�</td>
	  <td width='34%'><?php echo mysql_result($query,0,xuehao);?></td>
	  <td width='11%'>������</td><td width='39%'><?php echo mysql_result($query,0,xingming);?></td></tr><tr><td width='16%'>���ڰ༶��</td>
	  <td width='34%'><?php echo mysql_result($query,0,suozaibanji);?></td>
	  <td width='11%'>���ʱ�䣺</td><td width='39%'><?php echo mysql_result($query,0,huodeshijian);?></td></tr><tr><td width='16%'>�μӻ���ͣ�</td>
	  <td width='34%'><?php echo mysql_result($query,0,canjiahuodongleixing);?></td>
	  <td width='11%'>����ȼ���</td><td width='39%'><?php echo mysql_result($query,0,waiyudengji);?></td></tr><tr><td width='16%'>����������</td>
	  <td width='34%'><?php echo mysql_result($query,0,gerenrongyu);?></td>
	  <td width='11%'>ͻ�����ף�</td><td width='39%'><?php echo mysql_result($query,0,tuchugongxian);?></td></tr><tr><td width='16%' height="125">��ע��</td>
	  <td colspan="3"><?php echo mysql_result($query,0,beizhu);?></td>
	  </tr><tr><td colspan=4 align=center><input type=button name=Submit5 value=���� onClick="javascript:history.back()" style='border:solid 1px #000000; color:#666666'  /></td></tr>
  </table>

<?php
	}
?>
<p>&nbsp;</p>
</body>
</html>

