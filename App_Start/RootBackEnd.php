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

                                                        
    default                                 : echo "<script>document.location='home'</script>";
}

?>