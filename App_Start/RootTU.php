<?php
switch($_GET['p'])
{
    case "profiltu"                      :if(@!file_exists('Views/ProfilTu/ProfilTu.php'))
                                            die('File tidak ada di directory');
                                            include 'Views/ProfilTu/ProfilTu.php';
                                            break;
                                            break;
                                            
    case "administrasi"                      :if(@!file_exists('Views/Administrasi/Administrasi.php'))
                                            die('File tidak ada di directory');
                                            include 'Views/Administrasi/Administrasi.php';
                                            break;
                                            break;
                                                        
    default                                 : echo "<script>document.location='home'</script>";
}

?>