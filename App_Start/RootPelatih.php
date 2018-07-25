<?php
switch($_GET['p'])
{
    case "bukakelas"                      :if(@!file_exists('Views/BukaKelas/BukaKelas.php'))
                                            die('File tidak ada di directory');
                                            include 'Views/BukaKelas/BukaKelas.php';
                                            break;
                                            break;
    case "kepelatihan"                      :if(@!file_exists('Views/Kepelatihan/Kepelatihan.php'))
                                            die('File tidak ada di directory');
                                            include 'Views/Kepelatihan/Kepelatihan.php';
                                            break;
                                            break;
                                                        
                                                        
    default                                 : echo "<script>document.location='home'</script>";
}

?>