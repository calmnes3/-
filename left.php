 <?php
session_start();
include_once 'conn.php';
?>
<SCRIPT LANGUAGE="JavaScript" SRC="js/treemenu.js"></SCRIPT>
<SCRIPT LANGUAGE="JavaScript" SRC="js/Common.js"></SCRIPT>


<link rel="stylesheet" href="css.css" type="text/css"><body>
<SCRIPT LANGUAGE='JavaScript'>
    foldersTree = gFldr('<DIV CLASS=fldrroot><b>ϵͳ�����б�</b></DIV>','');

    Class1 = insFldr(foldersTree, gFldr('<DIV CLASS=fldrroot>����Ա�ʺŹ���</DIV>', ''));
    insDoc(Class1, gLnk(1, '<a href=yhzhgl.php target=main>����Ա�ʺŹ���</a>', '', 'images/editinfo.gif'));
    Class2 = insFldr(foldersTree, gFldr('<DIV CLASS=fldrroot>�༶��Ϣ����</DIV>', ''));
    insDoc(Class2, gLnk(1, '<a href=banjixinxi_add.php target=main>��Ӱ༶��Ϣ</a>', '', 'images/editinfo.gif'));
    insDoc(Class2, gLnk(1, '<a href=banjixinxi_list.php target=main>����༶��Ϣ</a>', '', 'images/editinfo.gif'));
    Class2 = insFldr(foldersTree, gFldr('<DIV CLASS=fldrroot>ѧ����Ϣ����</DIV>', ''));
    insDoc(Class2, gLnk(1, '<a href=xueshengxinxi_add.php target=main>���ѧ����Ϣ</a>', '', 'images/editinfo.gif'));
    insDoc(Class2, gLnk(1, '<a href=xueshengxinxi_list.php target=main>����ѧ����Ϣ</a>', '', 'images/editinfo.gif'));
    Class2 = insFldr(foldersTree, gFldr('<DIV CLASS=fldrroot>�γ���Ϣ����</DIV>', ''));
    insDoc(Class2, gLnk(1, '<a href=kechengxinxi_add.php target=main>�γ���Ϣ���</a>', '', 'images/editinfo.gif'));
    insDoc(Class2, gLnk(1, '<a href=kechengxinxi_list.php target=main>�γ���Ϣ��ѯ</a>', '', 'images/editinfo.gif'));
    Class2 = insFldr(foldersTree, gFldr('<DIV CLASS=fldrroot>��ʦ��Ϣ����</DIV>', ''));
    insDoc(Class2, gLnk(1, '<a href=jiaoshixinxi_add.php target=main>��ʦ��Ϣ���</a>', '', 'images/editinfo.gif'));
    insDoc(Class2, gLnk(1, '<a href=jiaoshixinxi_list.php target=main>��ʦ��Ϣ��ѯ</a>', '', 'images/editinfo.gif'));
    Class2 = insFldr(foldersTree, gFldr('<DIV CLASS=fldrroot>���ڼ�¼����</DIV>', ''));
    insDoc(Class2, gLnk(1, '<a href=kaoqinjilu_list.php target=main>���ڼ�¼����</a>', '', 'images/editinfo.gif'));
    insDoc(Class2, gLnk(1, '<a href=xueshengxinxi_list3.php target=main>����ͳ��</a>', '', 'images/editinfo.gif'));

    Class2 = insFldr(foldersTree, gFldr('<DIV CLASS=fldrroot>Υ���������</DIV>', ''));
    insDoc(Class2, gLnk(1, '<a href=xueshengxinxi_list4.php target=main>Υ��������</a>', '', 'images/editinfo.gif'));
    insDoc(Class2, gLnk(1, '<a href=weijiqingkuang_list.php target=main>Υ�������ѯ</a>', '', 'images/editinfo.gif'));

    Class2 = insFldr(foldersTree, gFldr('<DIV CLASS=fldrroot>�ճ����ֹ���</DIV>', ''));
    insDoc(Class2, gLnk(1, '<a href=xueshengxinxi_list5.php target=main>�ճ��������</a>', '', 'images/editinfo.gif'));
    insDoc(Class2, gLnk(1, '<a href=richangbiaoxian_list.php target=main>�ճ����ֲ�ѯ</a>', '', 'images/editinfo.gif'));

    Class2 = insFldr(foldersTree, gFldr('<DIV CLASS=fldrroot>����͹���</DIV>', ''));
    insDoc(Class2, gLnk(1, '<a href=huodongleixing_add.php target=main>��������</a>', '', 'images/editinfo.gif'));
    insDoc(Class2, gLnk(1, '<a href=huodongleixing_list.php target=main>����Ͳ�ѯ</a>', '', 'images/editinfo.gif'));

    insDoc(foldersTree, gLnk(1, '<a href=mod.php target=main>�޸�����</a>', '', 'images/pwd.GIF'));
    insDoc(foldersTree, gLnk(1, '�˳�', 'logout.php', 'images/exit.GIF'));
    initializeDocument(0);</SCRIPT>
