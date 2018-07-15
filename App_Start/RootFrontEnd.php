<?php
switch($_GET['p'])
{
    case "pendaftaran"                      :if(@!file_exists('Views/Pendaftaran/Pendaftaran.php'))
                                            die('File tidak ada di directory');
                                            include 'Views/Pendaftaran/Pendaftaran.php';
                                            break;
                                            break;
                                                        
    default                                 : echo "<script>document.location='home'</script>";
}

?>