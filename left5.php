<?php
session_start();
include_once 'conn.php';
?>
<SCRIPT LANGUAGE="JavaScript" SRC="js/treemenu.js"></SCRIPT>
<SCRIPT LANGUAGE="JavaScript" SRC="js/Common.js"></SCRIPT>


<link rel="stylesheet" href="css.css" type="text/css"><body>
<SCRIPT LANGUAGE='JavaScript'>
foldersTree = gFldr('<DIV CLASS=fldrroot><b>ϵͳ�����б�</b></DIV>','');



Class2 = insFldr(foldersTree, gFldr('<DIV CLASS=fldrroot>ѧ����Ϣ����</DIV>', ''));
insDoc(Class2, gLnk(1, '<a href=xueshengxinxi_add.php target=main>ѧ����Ϣ���</a>', '', 'images/editinfo.gif'));
insDoc(Class2, gLnk(1, '<a href=xueshengxinxi_list6.php target=main>ѧ����Ϣ��ѯ</a>', '', 'images/editinfo.gif'));

Class2 = insFldr(foldersTree, gFldr('<DIV CLASS=fldrroot>���ڲ鿴</DIV>', ''));
insDoc(Class2, gLnk(1, '<a href=kaoqinjilu_list4.php target=main>���ڲ鿴</a>', '', 'images/editinfo.gif'));

insDoc(foldersTree, gLnk(1, '<a href=mod.php target=main>�޸�����</a>', '', 'images/pwd.GIF'));
insDoc(foldersTree, gLnk(1, '�˳�', 'logout.php', 'images/exit.GIF'));
initializeDocument(0);</SCRIPT>
