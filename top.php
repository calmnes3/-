<?php
session_start();

?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML><HEAD><TITLE>�ޱ����ĵ�</TITLE><script language="javascript" src="js/qkjs.js"></script>

<META http-equiv=Content-Type content="text/html; charset=gb2312">
<style type="text/css">
<!--
.STYLE1 {color: #F8FCFF}
body {margin: 0px 0px 0px 0px;}
.STYLE2 {font-size: 12px}
-->
</style>


</HEAD>
<body topmargin="0">
 <table width="100%" height="80" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="40" colspan="2"  class="top">
	
	<table width="100%" border="0" cellpadding="0" cellspacing="0">
        <tr>

          <td align="center" valign="middle" bgcolor="#555757" >
              <TABLE cellSpacing=0 cellPadding=0 width="100%" border=0>
            <TBODY>
              <TR>
                  <td height="38" align="left" style="font-family: ����;color: #fffff7;font-size: 19pt;" leftMargin=5>��֣�ݿƼ�ѧԺ��ѧ���ϻ����ڹ���ϵͳ</td>
                  <TD height=38 align="right" style="FONT-SIZE: 12px; COLOR: #ffffff;" rightMargin=5>��ǰ�û�:<?php echo $_SESSION["username"];?> [Ȩ�ޣ�<?php echo $_SESSION["cx"];?>]</TD>
              </TR>
            </TBODY>
          </TABLE>
        </tr>
      </table>
  </tr>
  <tr>
    <td width="96%" height="34" background="images/nav_bg.jpg">
    <table width="100%" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="23%" align="left"  style=" width:18%">
            <span class="STYLE2" id="lblRealName"><font color="#FFFFFF">
            <script language="JavaScript" type="text/javascript">
            var text=""; day = new Date( ); time = day.getHours( ); 
            if (( time>=0) && (time < 8 ))
            text="���Ϻ�!"
            if (( time >= 8 ) && (time < 12))
            text="�����!"
            if (( time >= 12) && (time < 14))
            text="�����!"
            if (( time >=14) && (time < 18))
            text="�����!"
            if ((time >= 18) && (time <= 22))
            text="���Ϻ�!"
            if ((time >= 22) && (time < 24))
            text="���Ϻ�!"
            document.write(text)
            </script>
            <?php echo $_SESSION["username"];?>,��ӭʹ�ñ�ϵͳ������</font></span></td>
            
       
      </tr>
    </table></td>
    <td width="4%" background="images/nav_bg.jpg"><a href="logout.php" target="_parent"><span  class="STYLE2"><font color=white>�˳�</font></span></a></td>
  </tr>
  <tr>
    <td height="2" colspan="2" bgcolor="#f1f1f1"></td>
  </tr>
</table>
</BODY></HTML>
