<?php
session_start();
include_once 'conn.php';
?>
<SCRIPT LANGUAGE="JavaScript" SRC="js/treemenu.js"></SCRIPT>
<SCRIPT LANGUAGE="JavaScript" SRC="js/Common.js"></SCRIPT>


<link rel="stylesheet" href="css.css" type="text/css"><body>
<SCRIPT LANGUAGE='JavaScript'>
foldersTree = gFldr('<DIV CLASS=fldrroot><b>ϵͳ�����б�</b></DIV>','');



Class2 = insFldr(foldersTree, gFldr('<DIV CLASS=fldrroot>Υ���������</DIV>', ''));
insDoc(Class2, gLnk(1, '<a href=xueshengxinxi_list4.php target=main>Υ��������</a>', '', 'images/editinfo.gif'));
insDoc(Class2, gLnk(1, '<a href=weijiqingkuang_list.php target=main>Υ�������ѯ</a>', '', 'images/editinfo.gif'));

Class2 = insFldr(foldersTree, gFldr('<DIV CLASS=fldrroot>�ճ����ֹ���</DIV>', ''));
insDoc(Class2, gLnk(1, '<a href=xueshengxinxi_list5.php target=main>�ճ��������</a>', '', 'images/editinfo.gif'));
insDoc(Class2, gLnk(1, '<a href=richangbiaoxian_list.php target=main>�ճ����ֲ�ѯ</a>', '', 'images/editinfo.gif'));

Class2 = insFldr(foldersTree, gFldr('<DIV CLASS=fldrroot>���ڲ鿴</DIV>', ''));
insDoc(Class2, gLnk(1, '<a href=kaoqinjilu_list3.php target=main>���ڲ鿴</a>', '', 'images/editinfo.gif'));

insDoc(foldersTree, gLnk(1, '<a href=mod.php target=main>�޸�����</a>', '', 'images/pwd.GIF'));
insDoc(foldersTree, gLnk(1, '�˳�', 'logout.php', 'images/exit.GIF'));
initializeDocument(0);</SCRIPT>
