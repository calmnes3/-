<?php 
include_once 'conn.php';

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>��ʦ��Ϣ</title><script language="javascript" src="js/Calendar.js"></script><link rel="stylesheet" href="css.css" type="text/css">
</head>

<body>

<p>���н�ʦ��Ϣ�б�</p>
<form id="form1" name="form1" method="post" action="">
  ����: ���ţ�<input name="gonghao" type="text" id="gonghao" /> ������<input name="xingming" type="text" id="xingming" /> <!--�Ա�<select name='xingbie' id='xingbie'><option value="">����</option><option value="��">��</option><option value="Ů">Ů</option></select> -->���̿γ̣�<select name='zhujiaokecheng' id='zhujiaokecheng'><option value="">����</option><?php getoption("kechengxinxi","kechengmingcheng")?></select></select>
  <input type="submit" name="Submit" value="����" style='border:solid 1px #000000; color:#666666' />
</form>
<br/>
<table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#000000" style="border-collapse:collapse">
  <tr>
    <td width="25" bgcolor="#FFFFFF">���</td>
    <td bgcolor='#FFFFFF'>����</td><td bgcolor='#FFFFFF'>����</td><td bgcolor='#FFFFFF'>��������</td><td bgcolor='#FFFFFF'>���֤</td><td bgcolor='#FFFFFF'>�Ա�</td><td bgcolor='#FFFFFF'>ְ��</td><td bgcolor='#FFFFFF'>���̿γ�</td><td bgcolor='#FFFFFF'>�绰</td>
    <td width="120" align="center" bgcolor="#FFFFFF">���ʱ��</td>
    <td width="70" align="center" bgcolor="#FFFFFF">����</td>
  </tr>
  <?php 
    $sql="select * from jiaoshixinxi where 1=1";
  
if ($_POST["gonghao"]!=""){$nreqgonghao=$_POST["gonghao"];$sql=$sql." and gonghao like '%$nreqgonghao%'";}
if ($_POST["xingming"]!=""){$nreqxingming=$_POST["xingming"];$sql=$sql." and xingming like '%$nreqxingming%'";}
if ($_POST["chushengnianyue1"]!=""){$nreqchushengnianyue1=$_POST["chushengnianyue1"];$sql=$sql." and chushengnianyue >= '$nreqchushengnianyue1'";}
if ($_POST["chushengnianyue2"]!=""){$nreqchushengnianyue2=$_POST["chushengnianyue2"];$sql=$sql." and chushengnianyue <= '$nreqchushengnianyue2'";}
if ($_POST["shenfenzheng"]!=""){$nreqshenfenzheng=$_POST["shenfenzheng"];$sql=$sql." and shenfenzheng like '%$nreqshenfenzheng%'";}
if ($_POST["xingbie"]!=""){$nreqxingbie=$_POST["xingbie"];$sql=$sql." and xingbie like '%$nreqxingbie%'";}
if ($_POST["zhujiaokecheng"]!=""){$nreqzhujiaokecheng=$_POST["zhujiaokecheng"];$sql=$sql." and zhujiaokecheng like '%$nreqzhujiaokecheng%'";}
if ($_POST["dianhua"]!=""){$nreqdianhua=$_POST["dianhua"];$sql=$sql." and dianhua like '%$nreqdianhua%'";}
  $sql=$sql." order by id desc";
  
$query=mysql_query($sql);
  $rowscount=mysql_num_rows($query);
  if($rowscount==0)
  {}
  else
  {
  $pagelarge=10;//ÿҳ������
  $pagecurrent=$_GET["pagecurrent"];
    if($pagecurrent==""){$pagecurrent=$_POST["pagecurrent"];}

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
    <td><?php echo mysql_result($query,$i,gonghao);?></td><td><?php echo mysql_result($query,$i,xingming);?></td><td><?php echo mysql_result($query,$i,chushengnianyue);?></td><td><?php echo mysql_result($query,$i,shenfenzheng);?></td><td><?php echo mysql_result($query,$i,xingbie);?></td><td><?php echo mysql_result($query,$i,zhicheng);?></td><td><?php echo mysql_result($query,$i,zhujiaokecheng);?></td><td><?php echo mysql_result($query,$i,dianhua);?></td>
    <td width="120" align="center"><?php
echo mysql_result($query,$i,"addtime");
?></td>
    <td width="90" align="center"><a href="del.php?id=<?php echo mysql_result($query,$i,"id");?>&tablename=jiaoshixinxi" onclick="return confirm('���Ҫɾ����')">ɾ��</a> <a href="jiaoshixinxi_updt.php?id=<?php echo mysql_result($query,$i,"id");?>">�޸�</a> <a href="jiaoshixinxi_detail.php?id=<?php echo mysql_result($query,$i,"id");?>">��ϸ</a></td>
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
  <input type="button" name="Submit22" onclick="javascript:location.href='jiaoshixinxi_listxls.php';" value="����EXCEL" style='border:solid 1px #000000; color:#666666' />
</p>
<form id="form2" name="form2" method="post" action="">
  <div align="center"><a href="jiaoshixinxi_list.php?pagecurrent=1">��ҳ</a>, <a href="jiaoshixinxi_list.php?pagecurrent=<?php echo $pagecurrent-1;?>">ǰһҳ</a> ,<a href="jiaoshixinxi_list.php?pagecurrent=<?php echo $pagecurrent+1;?>">��һҳ</a>, <a href="jiaoshixinxi_list.php?pagecurrent=<?php echo $pagecount;?>">ĩҳ</a>, ��ǰ��<?php echo $pagecurrent;?>ҳ,��<?php echo $pagecount;?>ҳ ��ת��
    <input name="pagecurrent" type="text" id="pagecurrent" size="3" />
ҳ
<input type="submit" name="Submit3" value="��ת" />
  </div>
</form>
<p align="center">&nbsp;</p>

<p>&nbsp; </p>

</body>
</html>

