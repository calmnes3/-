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
insDoc(Class1, gLnk(1, '<a href=jiaoshixinxi_updt2.php target=main>�������Ϲ���</a>', '', 'images/editinfo.gif'));
Class2 = insFldr(foldersTree, gFldr('<DIV CLASS=fldrroot>ѧ�����ڹ���</DIV>', ''));
insDoc(Class2, gLnk(1, '<a href=xueshengxinxi_list2.php target=main>���ڼ�¼���</a>', '', 'images/editinfo.gif'));
insDoc(Class2, gLnk(1, '<a href=kaoqinjilu_list.php target=main>���ڼ�¼��ѯ</a>', '', 'images/editinfo.gif'));
insDoc(Class2, gLnk(1, '<a href=xueshengxinxi_list3.php target=main>����ͳ��</a>', '', 'images/editinfo.gif'));

Class2 = insFldr(foldersTree, gFldr('<DIV CLASS=fldrroot>Υ���������</DIV>', ''));
insDoc(Class2, gLnk(1, '<a href=xueshengxinxi_list4.php target=main>����Υ�����</a>', '', 'images/editinfo.gif'));
insDoc(Class2, gLnk(1, '<a href=weijiqingkuang_list.php target=main>Υ�������ѯ</a>', '', 'images/editinfo.gif'));

Class2 = insFldr(foldersTree, gFldr('<DIV CLASS=fldrroot>���ñ��ֹ���</DIV>', ''));
insDoc(Class2, gLnk(1, '<a href=xueshengxinxi_list5.php target=main>���ñ������</a>', '', 'images/editinfo.gif'));
insDoc(Class2, gLnk(1, '<a href=richangbiaoxian_list.php target=main>ѧ�����ֲ�ѯ</a>', '', 'images/editinfo.gif'));

Class2 = insFldr(foldersTree, gFldr('<DIV CLASS=fldrroot>����͹���</DIV>', ''));
insDoc(Class2, gLnk(1, '<a href=huodongleixing_add.php target=main>�γ�֪ͨ���</a>', '', 'images/editinfo.gif'));
insDoc(Class2, gLnk(1, '<a href=huodongleixing_list.php target=main>֪ͨ��ѯ</a>', '', 'images/editinfo.gif'));



insDoc(foldersTree, gLnk(1, '�˳�', 'logout.php', 'images/exit.GIF'));
initializeDocument(0);</SCRIPT>
