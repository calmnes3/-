<?php 
include_once 'conn.php';

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>�ճ�����</title><script language="javascript" src="js/Calendar.js"></script><link rel="stylesheet" href="css.css" type="text/css">
</head>

<body>

<p>�����ճ������б�</p>
<form id="form1" name="form1" method="post" action="">
  ����: ������
    <input name="xingming" type="text" id="xingming" size="10" />
���ڰ༶��
<input name="suozaibanji2" type="text" id="suozaibanji2" size="10" /> 


  <input type="submit" name="Submit" value="����" style='border:solid 1px #000000; color:#666666' />
</form>
<br/>
<table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#000000" style="border-collapse:collapse">
  <tr>
    <td width="25" bgcolor="#FFFFFF">���</td>
    <td bgcolor='#FFFFFF'>ѧ��</td><td bgcolor='#FFFFFF'>����</td><td bgcolor='#FFFFFF'>���ڰ༶</td><td bgcolor='#FFFFFF'>���ʱ��</td><td bgcolor='#FFFFFF'>�μӻ����</td><td bgcolor='#FFFFFF'>����ȼ�</td><td bgcolor='#FFFFFF'>��������</td><td bgcolor='#FFFFFF'>ͻ������</td>
    <td width="120" align="center" bgcolor="#FFFFFF">���ʱ��</td>
    <td width="70" align="center" bgcolor="#FFFFFF">����</td>
  </tr>
  <?php 
    $sql="select * from richangbiaoxian where 1=1";
  
if ($_POST["xuehao"]!=""){$nreqxuehao=$_POST["xuehao"];$sql=$sql." and xuehao like '%$nreqxuehao%'";}
if ($_POST["xingming"]!=""){$nreqxingming=$_POST["xingming"];$sql=$sql." and xingming like '%$nreqxingming%'";}
if ($_POST["suozaibanji"]!=""){$nreqsuozaibanji=$_POST["suozaibanji"];$sql=$sql." and suozaibanji like '%$nreqsuozaibanji%'";}
if ($_POST["huodeshijian1"]!=""){$nreqhuodeshijian1=$_POST["huodeshijian1"];$sql=$sql." and huodeshijian >= '$nreqhuodeshijian1'";}
if ($_POST["huodeshijian2"]!=""){$nreqhuodeshijian2=$_POST["huodeshijian2"];$sql=$sql." and huodeshijian <= '$nreqhuodeshijian2'";}
if ($_POST["canjiahuodongleixing"]!=""){$nreqcanjiahuodongleixing=$_POST["canjiahuodongleixing"];$sql=$sql." and canjiahuodongleixing like '%$nreqcanjiahuodongleixing%'";}
if ($_POST["waiyudengji"]!=""){$nreqwaiyudengji=$_POST["waiyudengji"];$sql=$sql." and waiyudengji like '%$nreqwaiyudengji%'";}
if ($_POST["tuchugongxian"]!=""){$nreqtuchugongxian=$_POST["tuchugongxian"];$sql=$sql." and tuchugongxian like '%$nreqtuchugongxian%'";}
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
    <td><?php echo mysql_result($query,$i,xuehao);?></td><td><?php echo mysql_result($query,$i,xingming);?></td><td><?php echo mysql_result($query,$i,suozaibanji);?></td><td><?php echo mysql_result($query,$i,huodeshijian);?></td><td><?php echo mysql_result($query,$i,canjiahuodongleixing);?></td><td><?php echo mysql_result($query,$i,waiyudengji);?></td><td><?php echo mysql_result($query,$i,gerenrongyu);?></td><td><?php echo mysql_result($query,$i,tuchugongxian);?></td>
    <td width="120" align="center"><?php
echo mysql_result($query,$i,"addtime");
?></td>
    <td width="90" align="center"><a href="del.php?id=<?php echo mysql_result($query,$i,"id");?>&tablename=richangbiaoxian" onclick="return confirm('���Ҫɾ����')">ɾ��</a> <a href="richangbiaoxian_updt.php?id=<?php echo mysql_result($query,$i,"id");?>">�޸�</a> <a href="richangbiaoxian_detail.php?id=<?php echo mysql_result($query,$i,"id");?>">��ϸ</a></td>
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
  <input type="button" name="Submit22" onclick="javascript:location.href='richangbiaoxian_listxls.php';" value="����EXCEL" style='border:solid 1px #000000; color:#666666' />
</p>
<form id="form2" name="form2" method="post" action="">
  <div align="center"><a href="richangbiaoxian_list.php?pagecurrent=1">��ҳ</a>, <a href="richangbiaoxian_list.php?pagecurrent=<?php echo $pagecurrent-1;?>">ǰһҳ</a> ,<a href="richangbiaoxian_list.php?pagecurrent=<?php echo $pagecurrent+1;?>">��һҳ</a>, <a href="richangbiaoxian_list.php?pagecurrent=<?php echo $pagecount;?>">ĩҳ</a>, ��ǰ��<?php echo $pagecurrent;?>ҳ,��<?php echo $pagecount;?>ҳ ��ת��
    <input name="pagecurrent" type="text" id="pagecurrent" size="3" />
ҳ
<input type="submit" name="Submit3" value="��ת" />
  </div>
</form>
<p align="center">&nbsp;</p>

<p>&nbsp; </p>

</body>
</html>

