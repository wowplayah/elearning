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
     case "soalpeserta"                  :if(@!file_exists('Views/SoalPeserta/SoalPeserta.php'))
                                            die('File tidak ada di directory');
                                            include 'Views/SoalPeserta/SoalPeserta.php';
                                            break;
                                            break;
    case "assesmentpeserta"                  :if(@!file_exists('Views/AssesmentPeserta/AssesmentPeserta.php'))
                                            die('File tidak ada di directory');
                                            include 'Views/AssesmentPeserta/AssesmentPeserta.php';
                                            break;
                                            break;      
                                                        
    default                                 : echo "<script>document.location='home'</script>";
}

?>