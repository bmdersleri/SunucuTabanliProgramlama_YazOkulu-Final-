<?php

include('php/dbconn.php');

$sql="Select count(*) from inquery";
$query=mysqli_query($db,$sql);
$fetch=mysqli_fetch_array($query);

?>

 <div id="skin-select">
        <div id="logo">
            <h1>Ziyaretçi Yönetim Sistemi
            </h1>
        </div>

        <a id="toggle">
            <span class="entypo-menu"></span>
        </a>
        
        <div class="skin-part">
            <div id="tree-wrap">
                <div class="side-bar">
                    <ul class="topnav menu-left-nest">
                        <li>
                            <a href="#" style="border-left:0px solid!important;" class="title-menu-left">

                                <span class="widget-menu"></span>
                                <i data-toggle="tooltip" class="entypo-cog pull-right config-wrap"></i>

                            </a>
                        </li>
                           <li>
                            <a class="tooltip-tip ajax-load" href="/vms/index_1.php" title="Log out">
                                <i class="icon-feed"></i>
                                <span>Anasayfa</span>
                            </a>
                        </li>

                        
                        
                        <li class="hide1">
                            <a class="tooltip-tip ajax-load" href="#" title="Employee">
                                <i class="icon-document-edit"></i>
                                <span>Çalışanlar</span>
                            </a>
                            <ul>
                                <li>
                                    <a class="tooltip-tip2 ajax-load" href="/vms/php/emp_insert_0.php" title="Add"><i class="entypo-doc-text"></i><span>Ekle</span></a>
                                </li>
                                <li>
                                    <a class="tooltip-tip2 ajax-load" href="/vms/php/emp_display_0.php" title="View"><i class="entypo-doc-text"></i><span>Görüşme</span></a>
                                </li>
                                <li>
                                    <a class="tooltip-tip2 ajax-load" href="/vms/php/emp_edit1_0.php" title="Edit"><i class="entypo-doc-text"></i><span>Düzenle</span></a>
                                </li>
                                <li>
                                    <a class="tooltip-tip2 ajax-load" href="/vms/php/emp_delete1_0.php" title="Delete"><i class="entypo-doc-text"></i><span>Sil</span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="hide1">
                            <a class="tooltip-tip ajax-load" href="#" title="Department">
                                <i class="icon-document-edit"></i>
                                <span>Departman</span>

                            </a>
                            <ul>
                                <li>
                                    <a class="tooltip-tip2 ajax-load" href="/vms/php/department_0.php" title="Add"><i class="entypo-doc-text"></i><span>Ekle</span></a>
                                </li>
                                <li>
                                    <a class="tooltip-tip2 ajax-load" href="/vms/php/department_display_0.php" title="View"><i class="entypo-doc-text"></i><span>görüşme</span></a>
                                </li>
                                <li>
                                    <a class="tooltip-tip2 ajax-load" href="/vms/php/department_delete_0.php" title="Delete"><i class="entypo-doc-text"></i><span>Sil</span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="hide1">
                            <a class="tooltip-tip ajax-load" href="#" title="Admin User">
                                <i class="icon-document-edit"></i>
                                <span>Admin Girişi</span>

                            </a>
                            <ul>
                                <li>
                                    <a class="tooltip-tip2 ajax-load" href="/vms/php/admin_user_0.php" title="Add"><i class="entypo-doc-text"></i><span>Ekle</span></a>
                                </li>
                                <li>
                                    <a class="tooltip-tip2 ajax-load" href="/vms/php/admin_display_0.php" title="View"><i class="entypo-doc-text"></i><span>Görüşme</span></a>
                                </li>
                                <li>
                                    <a class="tooltip-tip2 ajax-load" href="/vms/php/admin_delete_0.php" title="Delete"><i class="entypo-doc-text"></i><span>Sil</span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="hide1">
                            <a class="tooltip-tip ajax-load" href="/vms/php/report_0.php" title="Report">
                                <i class="icon-camera"></i>
                                <span>Raporlar</span>
                            </a>
                        </li>
                        <li>
                            <a class="tooltip-tip ajax-load" href="/vms/php/logout.php?log" title="Log out">
                                <i class="icon-feed"></i>
                                <span>Çıkış Yap</span>
                            </a>
                        </li>

                    </ul>
<script type="text/javascript">
    
                var a=document.getElementsByClassName('hide1')[0];
                var b=document.getElementsByClassName('hide1')[1];
                var c=document.getElementsByClassName('hide1')[2];
                  var d=document.getElementsByClassName('hide1')[3];
</script>
                  <?php
if($user=="guard")
{ ?>
    <script>
        a.style.display="none";
        b.style.display="none";
        c.style.display="none";
        d.style.display="none";
    </script>
    <?php
}
?>
                  

                        
                       
                   
                </div>
            </div>
        </div>
    </div>
