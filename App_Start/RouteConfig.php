<?php
if(@!$_GET['p']){
    header('Location: ' . 'home', true, (true === true) ? 301 : 302);
}else{
    
    switch($_GET['p'])
    {
        //Auth Layout
        case "auth":
            if(@!file_exists('Views/Shared/_LayoutAuth.php'))
            die('File tidak ada di directory');
            include 'Views/Shared/_LayoutAuth.php';
            break;
            break;
        //FrontEnd Layout
        case "pendaftaran":
            if(@!file_exists('Views/Shared/_LayoutFrontEnd.php'))
            die('File tidak ada di directory');
            include 'Views/Shared/_LayoutFrontEnd.php';
            break;
            break;
        //BackEnd Layout
        case "home":
        case "matalatihan":
        case "elementkompetensi":
        case "kriteriaunitkerja":
        case "indikatorunitkerja":
        case "pbk":
            if(@!file_exists('Views/Shared/_LayoutBackEnd.php'))
            die('File tidak ada di directory');
            include 'Views/Shared/_LayoutBackEnd.php';
            break;
            break;

        
        default: echo '<script>document.location="home"</script>';
    }

}
?>