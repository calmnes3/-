<?php
session_start();
include_once 'conn.php';

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>���ڼ�¼</title><script language="javascript" src="js/Calendar.js"></script><link rel="stylesheet" href="css.css" type="text/css">
</head>

<body>

<p>���п��ڼ�¼�б�</p>
<form id="form1" name="form1" method="post" action="">
  ����:  �γ����ƣ�
  <input name="kechengmingcheng" type="text" id="kechengmingcheng" /> �ον�ʦ��<input name="renkejiaoshi" type="text" id="renkejiaoshi" />
  ״̬��
  <select name='zhuangtai' id='zhuangtai' style='border:solid 1px #000000; color:#666666'>
    <option value="">����</option>
	<option value="�ٵ�">�ٵ�</option>
    <option value="����">����</option>
    <option value="����">����</option>
    <option value="�¼�">�¼�</option>
    <option value="����">����</option>
  </select>
���ñ��֣�
<select name='ketangbiaoxian' id='ketangbiaoxian' style='border:solid 1px #000000; color:#666666'>
  <option value="">����</option>
  <option value="��">��</option>
  <option value="��">��</option>
  <option value="��">��</option>
</select>
<input type="submit" name="Submit" value="����" style='border:solid 1px #000000; color:#666666' />
</form>
<br/>
<table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#000000" style="border-collapse:collapse">
  <tr>
    <td width="25" bgcolor="#ffffff">���</td>
    <td bgcolor='#FFFFFF'>ѧ��</td><td bgcolor='#FFFFFF'>����</td><td bgcolor='#FFFFFF'>���ڰ༶</td><td bgcolor='#FFFFFF'>�Ա�</td><td bgcolor='#FFFFFF'>�γ�����</td><td bgcolor='#FFFFFF'>�ον�ʦ</td><td bgcolor='#FFFFFF'>�Ͽ�ʱ��</td><td bgcolor='#FFFFFF'>״̬</td><td bgcolor='#FFFFFF'>���ñ���</td>
    <td width="120" align="center" bgcolor="#FFFFFF">���ʱ��</td>
  </tr>
  <?php 
    $sql="select * from kaoqinjilu where xuehao='".$_SESSION['username']."'";
  
if ($_POST["xingming"]!=""){$nreqxingming=$_POST["xingming"];$sql=$sql." and xingming like '%$nreqxingming%'";}
if ($_POST["suozaibanji"]!=""){$nreqsuozaibanji=$_POST["suozaibanji"];$sql=$sql." and suozaibanji like '%$nreqsuozaibanji%'";}
if ($_POST["xingbie"]!=""){$nreqxingbie=$_POST["xingbie"];$sql=$sql." and xingbie like '%$nreqxingbie%'";}
if ($_POST["kechengmingcheng"]!=""){$nreqkechengmingcheng=$_POST["kechengmingcheng"];$sql=$sql." and kechengmingcheng like '%$nreqkechengmingcheng%'";}
if ($_POST["renkejiaoshi"]!=""){$nreqrenkejiaoshi=$_POST["renkejiaoshi"];$sql=$sql." and renkejiaoshi like '%$nreqrenkejiaoshi%'";}
if ($_POST["shangkeshijian1"]!=""){$nreqshangkeshijian1=$_POST["shangkeshijian1"];$sql=$sql." and shangkeshijian >= '$nreqshangkeshijian1'";}
if ($_POST["shangkeshijian2"]!=""){$nreqshangkeshijian2=$_POST["shangkeshijian2"];$sql=$sql." and shangkeshijian <= '$nreqshangkeshijian2'";}
if ($_POST["zhuangtai"]!=""){$nreqzhuangtai=$_POST["zhuangtai"];$sql=$sql." and zhuangtai like '%$nreqzhuangtai%'";}
if ($_POST["ketangbiaoxian"]!=""){$nreqketangbiaoxian=$_POST["ketangbiaoxian"];$sql=$sql." and ketangbiaoxian like '%$nreqketangbiaoxian%'";}
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
    <td><?php echo mysql_result($query,$i,xuehao);?></td><td><?php echo mysql_result($query,$i,xingming);?></td><td><?php echo mysql_result($query,$i,suozaibanji);?></td><td><?php echo mysql_result($query,$i,xingbie);?></td><td><?php echo mysql_result($query,$i,kechengmingcheng);?></td><td><?php echo mysql_result($query,$i,renkejiaoshi);?></td><td><?php echo mysql_result($query,$i,shangkeshijian);?></td><td><?php echo mysql_result($query,$i,zhuangtai);?></td><td><?php echo mysql_result($query,$i,ketangbiaoxian);?></td>
    <td width="120" align="center"><?php
echo mysql_result($query,$i,"addtime");
?></td>
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
<p align="center"><a href="kaoqinjilu_list2.php?pagecurrent=1">��ҳ</a>, <a href="kaoqinjilu_list2.php?pagecurrent=<?php echo $pagecurrent-1;?>">ǰһҳ</a> ,<a href="kaoqinjilu_list2.php?pagecurrent=<?php echo $pagecurrent+1;?>">��һҳ</a>, <a href="kaoqinjilu_list2.php?pagecurrent=<?php echo $pagecount;?>">ĩҳ</a>, ��ǰ��<?php echo $pagecurrent;?>ҳ,��<?php echo $pagecount;?>ҳ </p>

<p>&nbsp; </p>

</body>
</html>

