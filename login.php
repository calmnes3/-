<?php
session_start();
include_once 'conn.php';
	$login=$_POST["login"];
	$username=$_POST['username'];
	$pwd=md5($_POST['pwd']);
	$cx=$_POST['cx'];


	if($login=="1")
	{
		if ($username!="" && $pwd!="")
		{
		if($cx=="����Ա")
		{
			$sql="select * from allusers where username='$username' and pwd='$pwd' and cx='����Ա'";
		}

		if($cx=="ѧ��")
		{
			$sql="select * from xueshengxinxi where xuehao='$username' and mima='$pwd' ";
		}



		if($cx=="��ʦ")
		{
			$sql="select * from jiaoshixinxi where gonghao='$username' and mima='$pwd' ";
		}
		$query=mysql_query($sql);
		$rowscount=mysql_num_rows($query);
			if($rowscount>0)
			{
					$_SESSION['username']=$username;
					
					$_SESSION['cx']=$cx;
					
					if($cx=="��ʦ")
					{
						$_SESSION['kc']=mysql_result($query,0,"zhujiaokecheng");
					}
					echo "<script language='javascript'>alert('��½�ɹ���');location='main.php';</script>";
			}
			else
			{
					echo "<script language='javascript'>alert('�û������������');history.back();</script>";
			}
		}
		else
		{
				echo "<script language='javascript'>alert('������������');history.back();</script>";
		}
	}
	

?>