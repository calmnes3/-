<?php 
include_once 'conn.php';
header("Content-Type: application/vnd.ms-execl");   
header("Content-Disposition: attachment; filename=�γ���Ϣ.xls");   
header("Pragma: no-cache");   
header("Expires: 0"); 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>�γ���Ϣ</title>
</head>

<body>
<table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#000000" style="border-collapse:collapse">
  <tr>
    <td width="41" bgcolor="#FFFFFF">���</td>
    <td width="220" bgcolor='#FFFFFF'>�γ�����</td><td width="131" bgcolor='#FFFFFF'>ѧʱ</td><td width="131" bgcolor='#FFFFFF'>ѧ��</td><td width="131" bgcolor='#FFFFFF'>����</td><td width="134" bgcolor='#FFFFFF'>��ע</td>
    <td width="120" align="center" bgcolor="#FFFFFF">���ʱ��</td>
  </tr>
  <?php 
    $sql="select * from kechengxinxi where 1=1";
  
if ($_POST["kechengmingcheng"]!=""){$nreqkechengmingcheng=$_POST["kechengmingcheng"];$sql=$sql." and kechengmingcheng like '%$nreqkechengmingcheng%'";}
if ($_POST["leixing"]!=""){$nreqleixing=$_POST["leixing"];$sql=$sql." and leixing like '%$nreqleixing%'";}
  $sql=$sql." order by id desc";
  
$query=mysql_query($sql);
  $rowscount=mysql_num_rows($query);
  if($rowscount==0)
  {}
  else
  {
  $pagelarge=10;//ÿҳ������
  $pagecurrent=$_GET["pagecurrent"];
  if($rowscount%$pagelarge==0)
  {
		$pagecount=$rowscount/$pagelarge;
  }
  else
  {
   		$pagecount=intval($rowscount/$pagelarge)+1;
  }
  if($pagecurrent=="" || $pagecurrent<=0)
{
	$pagecurrent=1;
}
 
if($pagecurrent>$pagecount)
{
	$pagecurrent=$pagecount;
}
		$ddddd=$pagecurrent*$pagelarge;
	if($pagecurrent==$pagecount)
	{
		if($rowscount%$pagelarge==0)
		{
		$ddddd=$pagecurrent*$pagelarge;
		}
		else
		{
		$ddddd=$pagecurrent*$pagelarge-$pagelarge+$rowscount%$pagelarge;
		}
	}

	for($i=$pagecurrent*$pagelarge-$pagelarge;$i<$ddddd;$i++)
{
  ?>
  <tr>
    <td width="41"><?php
	echo $i+1;
?></td>
    <td><?php echo mysql_result($query,$i,kechengmingcheng);?></td><td><?php echo mysql_result($query,$i,xueshi);?></td><td><?php echo mysql_result($query,$i,xuefen);?></td><td><?php echo mysql_result($query,$i,leixing);?></td><td><?php echo mysql_result($query,$i,beizhu);?></td>
    <td width="120" align="center"><?php
echo mysql_result($query,$i,"addtime");
?></td>
  </tr>
  	<?php
	}
}
?>
</table>
<p>&nbsp;</p>

</body>
</html>

