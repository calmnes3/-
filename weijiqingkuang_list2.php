<?php
session_start();
include_once 'conn.php';

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>Υ�����</title><script language="javascript" src="js/Calendar.js"></script><link rel="stylesheet" href="css.css" type="text/css">
</head>

<body>

<p>��������Υ�������</p>

<br/>
<table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#000000" style="border-collapse:collapse">
  <tr>
    <td width="25" bgcolor="#ffffff">���</td>
    <td bgcolor='#FFFFFF'>ѧ��</td><td bgcolor='#FFFFFF'>����</td><td bgcolor='#FFFFFF'>���ڰ༶</td><td bgcolor='#FFFFFF'>Υ��ʱ��</td><td bgcolor='#FFFFFF'>Υ�����</td>
    <td width="120" align="center" bgcolor="#FFFFFF">���ʱ��</td>
    <td width="70" align="center" bgcolor="#FFFFFF">����</td>
  </tr>
  <?php 
    $sql="select * from weijiqingkuang where xuehao='".$_SESSION['username']."'";
  
if ($_POST["xingming"]!=""){$nreqxingming=$_POST["xingming"];$sql=$sql." and xingming like '%$nreqxingming%'";}
if ($_POST["suozaibanji"]!=""){$nreqsuozaibanji=$_POST["suozaibanji"];$sql=$sql." and suozaibanji like '%$nreqsuozaibanji%'";}
if ($_POST["weijishijian1"]!=""){$nreqweijishijian1=$_POST["weijishijian1"];$sql=$sql." and weijishijian >= '$nreqweijishijian1'";}
if ($_POST["weijishijian2"]!=""){$nreqweijishijian2=$_POST["weijishijian2"];$sql=$sql." and weijishijian <= '$nreqweijishijian2'";}
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
    <td width="25"><?php
	echo $i+1;
?></td>
    <td><?php echo mysql_result($query,$i,xuehao);?></td><td><?php echo mysql_result($query,$i,xingming);?></td><td><?php echo mysql_result($query,$i,suozaibanji);?></td><td><?php echo mysql_result($query,$i,weijishijian);?></td><td><?php echo mysql_result($query,$i,weijiqingkuang);?></td>
    <td width="120" align="center"><?php
echo mysql_result($query,$i,"addtime");
?></td>
    <td width="70" align="center"><a href="del.php?id=<?php
		echo mysql_result($query,$i,"id");
	?>&tablename=weijiqingkuang" onclick="return confirm('���Ҫɾ����')">ɾ��</a> <a href="weijiqingkuang_updt.php?id=<?php
		echo mysql_result($query,$i,"id");
	?>">�޸�</a></td>
  </tr>
  	<?php
	}
}
?>
</table>
<p>�������ݹ�<?php
		echo $rowscount;
	?>��,
  <input type="button" name="Submit2" onclick="javascript:window.print();" value="��ӡ��ҳ" style='border:solid 1px #000000; color:#666666' />
</p>
<p align="center"><a href="weijiqingkuang_list2.php?pagecurrent=1">��ҳ</a>, <a href="weijiqingkuang_list2.php?pagecurrent=<?php echo $pagecurrent-1;?>">ǰһҳ</a> ,<a href="weijiqingkuang_list2.php?pagecurrent=<?php echo $pagecurrent+1;?>">��һҳ</a>, <a href="weijiqingkuang_list2.php?pagecurrent=<?php echo $pagecount;?>">ĩҳ</a>, ��ǰ��<?php echo $pagecurrent;?>ҳ,��<?php echo $pagecount;?>ҳ </p>

<p>&nbsp; </p>

</body>
</html>

