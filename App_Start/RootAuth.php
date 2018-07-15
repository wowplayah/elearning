<?php
switch($_GET['p'])
{
    case "auth"                                :if(@!file_exists('Views/Auth/Auth.php'))
                                                die('File tidak ada di directory');
                                                include 'Views/Auth/Auth.php';
                                                break;
                                                break;

                                                        
    default                                 : echo "<script>document.location='auth'</script>";
}

?>