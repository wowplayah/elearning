<?php
switch($_GET['p'])
{
    case "profilpeserta"                    :if(@!file_exists('Views/ProfilPeserta/ProfilPeserta.php'))
                                            die('File tidak ada di directory');
                                            include 'Views/ProfilPeserta/ProfilPeserta.php';
                                            break;
                                            break;
    case "kurikulumpeserta"                    :if(@!file_exists('Views/KurikulumPeserta/KurikulumPeserta.php'))
                                            die('File tidak ada di directory');
                                            include 'Views/KurikulumPeserta/KurikulumPeserta.php';
                                            break;
                                            break;
    case "modulbelajar"                  :if(@!file_exists('Views/ModulBelajar/ModulBelajar.php'))
                                            die('File tidak ada di directory');
                                            include 'Views/ModulBelajar/ModulBelajar.php';
                                            break;
                                            break;
                                                        
                                                        
    default                                 : echo "<script>document.location='home'</script>";
}

?>