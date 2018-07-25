<?php
switch($_GET['p'])
{
    case "home"                                 :if(@!file_exists('Views/Home/Home.php'))
                                                die('File tidak ada di directory');
                                                include 'Views/Home/Home.php';
                                                break;
                                                break;
    case "matalatihan"                          :if(@!file_exists('Views/MataLatihan/MataLatihan.php'))
                                                die('File tidak ada di directory');
                                                include 'Views/MataLatihan/MataLatihan.php';
                                                break;
                                                break;
    case "elementkompetensi"                     :if(@!file_exists('Views/ElementKompetensi/ElementKompetensi.php'))
                                                die('File tidak ada di directory');
                                                include 'Views/ElementKompetensi/ElementKompetensi.php';
                                                break;
                                                break;
    case "kriteriaunitkerja"                    :if(@!file_exists('Views/KriteriaUnitKerja/KriteriaUnitKerja.php'))
                                                die('File tidak ada di directory');
                                                include 'Views/KriteriaUnitKerja/KriteriaUnitKerja.php';
                                                break;
                                                break;
    case "indikatorunitkerja"                   :if(@!file_exists('Views/IndikatorUnitKerja/IndikatorUnitKerja.php'))
                                                die('File tidak ada di directory');
                                                include 'Views/IndikatorUnitKerja/IndikatorUnitKerja.php';
                                                break;
                                                break;
    case "pbk"                                  :if(@!file_exists('Views/Pbk/Pbk.php'))
                                                die('File tidak ada di directory');
                                                include 'Views/Pbk/Pbk.php';
                                                break;
                                                break;
    case "kurikulum"                            :if(@!file_exists('Views/Kurikulum/Kurikulum.php'))
                                                die('File tidak ada di directory');
                                                include 'Views/Kurikulum/Kurikulum.php';
                                                break;
                                                break;
    case "administrasi"                            :if(@!file_exists('Views/Administrasi/Administrasi.php'))
                                                die('File tidak ada di directory');
                                                include 'Views/Administrasi/Administrasi.php';
                                                break;
                                                break;
    case "tambahsoal"                           :if(@!file_exists('Views/ManagementSoal/TambahSoal/TambahSoal.php'))
                                                die('File tidak ada di directory');
                                                include 'Views/ManagementSoal/TambahSoal/TambahSoal.php';
                                                break;
                                                break;
    case "daftarsoal"                           :if(@!file_exists('Views/ManagementSoal/DaftarSoal/DaftarSoal.php'))
                                                die('File tidak ada di directory');
                                                include 'Views/ManagementSoal/DaftarSoal/DaftarSoal.php';
                                                break;
                                                break;
                                                        
    default                                 : echo "<script>document.location='home'</script>";
}

?>