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
$sql="select * from xueshengxinxi where id=".$id;
$query=mysql_query($sql);
$rowscount=mysql_num_rows($query);
if($rowscount>0)
{
?>

<table width="70%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#000000" style="border-collapse:collapse">
      <tr>
	  <td width='18%' height=25>ѧ�ţ�</td>
	  <td width='32%' height="25"><?php echo mysql_result($query,0,xuehao);?></td>
	  <!--<td width="50%"  rowspan=9 align=center><a href=<?php echo mysql_result($query,0,gerenzhaopian);?> target=_blank></a><a href="<?php echo mysql_result($query,0,gerenzhaopian);?>" target="_blank"><img src="<?php echo mysql_result($query,0,gerenzhaopian);?>" width="228" height="215" border="0" /></a></td>-->
      </tr>
    <tr>
        <td width='18%' height=25>������</td>
	  <td width='32%' height="25"><?php echo mysql_result($query,0,xingming);?></td>
	  </tr>
    <tr>
        <td width='18%' height=25>�Ա�</td>
	  <td width='32%' height="25"><?php echo mysql_result($query,0,xingbie);?></td>
	  </tr>
    <tr>
        <td width='18%' height=25>���壺</td>
	  <td width='32%' height="25"><?php echo mysql_result($query,0,minzu);?></td>
	  </tr>
    <tr>
        <td width='18%' height=25>������ò��</td>
	  <td width='32%' height="25"><?php echo mysql_result($query,0,zhengzhimianmao);?></td>
	  </tr>
    <tr>
        <td width='18%' height=25>���</td>
	  <td width='32%' height="25"><?php echo mysql_result($query,0,leibie);?></td>
	  </tr>
    <tr>
        <td width='18%' height=25>���ڰ༶��</td>
	  <td width='32%' height="25"><?php echo mysql_result($query,0,suozaibanji);?></td>
	  </tr>
    <tr>
        <td width='18%' height=25>��ϵ��ʽ��</td>
	  <td width='32%' height="25"><?php echo mysql_result($query,0,lianxifangshi);?></td>
	  </tr>
	  <tr>
	    <td height=25>���룺</td>
	    <td height="25"><?php echo mysql_result($query,0,mima);?></td>
  </tr>
	  <tr><td width='18%' height=25>���֤���룺</td>
	  <td height="25" width="18%"><?php echo mysql_result($query,0,shenfenzhenghaoma);?></td>
	  </tr>
    <tr>
        <td width='18%' height=25>��ͥ��ϸסַ��</td>
	  <td height="25" width="18%"><?php echo mysql_result($query,0,jiatingxiangxizhuzhi);?></td>
	  </tr>
    <tr>
        <td width='18%' height=25>����������</td>
	  <td width='18%' height="25"><?php echo mysql_result($query,0,fuqinxingming);?></td>
    </tr>
    <tr>
        <td width="18%" align=left>������ϵ�绰��</td>
          <td height="25" width="18%"><?php echo mysql_result($query,0,fuqinlianxidianhua);?></td>
      </tr>
    <tr>
        <td width='18%' height=25>���׹�����λ��</td>
	  <td height="25" width="18%"><?php echo mysql_result($query,0,fuqingongzuodanwei);?></td>
	  </tr>
    <tr>
        <td width='18%' height=25>��ͥ��ϵ�绰��</td>
	  <td width='18%' height="25"><?php echo mysql_result($query,0,jiatinglianxidianhua);?></td>
    </tr>
    <tr>
      <td width="18%" align=left>ĸ��������</td>
       <td width='18%' height="25"><?php echo mysql_result($query,0,muqinxingming);?></td>
      </tr>
    <tr>
        <td width='18%' height=25>ĸ�׹�����λ��</td>
	  <td height="25" width="18%"><?php echo mysql_result($query,0,muqingongzuodanwei);?></td>
	  </tr>
    <tr>
        <td width='18%' height=25>ĸ����ϵ�绰��</td>
	  <td width='18%' height="25"><?php echo mysql_result($query,0,muqinlianxidianhua);?></td>
	  </td>
      </tr>
    <tr>
        <td colspan=3 align=center><input type=button name=Submit5 value="����" onClick="javascript:history.back()" style='border:solid 1px #000000; color:#666666'  />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <input type="button" name="Submit52" value="��ӡ" onclick="javascript:window.print();" style='border:solid 1px #000000; color:#666666'></td>
    </tr>
</table>

<?php
	}
?>
<p>&nbsp;</p>
</body>
</html>

