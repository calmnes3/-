<?php
session_start();
include_once 'conn.php';
?>
<SCRIPT LANGUAGE="JavaScript" SRC="js/treemenu.js"></SCRIPT>
<SCRIPT LANGUAGE="JavaScript" SRC="js/Common.js"></SCRIPT>


<link rel="stylesheet" href="css.css" type="text/css"><body>
<SCRIPT LANGUAGE='JavaScript'>
foldersTree = gFldr('<DIV CLASS=fldrroot><b>ϵͳ�����б�</b></DIV>','');

Class1 = insFldr(foldersTree, gFldr('<DIV CLASS=fldrroot>�������Ϲ���</DIV>', ''));
insDoc(Class1, gLnk(1, '<a href=xueshengxinxi_updt2.php target=main>�������Ϲ���</a>', '', 'images/editinfo.gif'));
Class2 = insFldr(foldersTree, gFldr('<DIV CLASS=fldrroot>���ڼ�¼�鿴</DIV>', ''));
insDoc(Class2, gLnk(1, '<a href=kaoqinjilu_list2.php target=main>���ڼ�¼�鿴</a>', '', 'images/editinfo.gif'));

Class2 = insFldr(foldersTree, gFldr('<DIV CLASS=fldrroot>ѧУ��鿴</DIV>', ''));
insDoc(Class2, gLnk(1, '<a href=huodongleixing_list2.php target=main>ѧУ��鿴</a>', '', 'images/editinfo.gif'));

Class2 = insFldr(foldersTree, gFldr('<DIV CLASS=fldrroot>����Υ�Ͳ鿴</DIV>', ''));
insDoc(Class2, gLnk(1, '<a href=weijiqingkuang_list2.php target=main>����Υ�Ͳ鿴</a>', '', 'images/editinfo.gif'));

Class2 = insFldr(foldersTree, gFldr('<DIV CLASS=fldrroot>�ճ����ֲ鿴</DIV>', ''));
insDoc(Class2, gLnk(1, '<a href=richangbiaoxian_list2.php target=main>�ճ����ֲ鿴</a>', '', 'images/editinfo.gif'));

Class2 = insFldr(foldersTree, gFldr('<DIV CLASS=fldrroot>����ѧУ</DIV>', ''));
insDoc(Class2, gLnk(1, '<a href=https://baike.baidu.com/item/%E9%83%91%E5%B7%9E%E7%A7%91%E6%8A%80%E5%AD%A6%E9%99%A2/3275625?fr=aladdin target=main>ѧУ�ٿ�</a>', '', 'images/editinfo.gif'));

insDoc(foldersTree, gLnk(1, '�˳�', 'logout.php', 'images/exit.GIF'));
initializeDocument(0);</SCRIPT>
