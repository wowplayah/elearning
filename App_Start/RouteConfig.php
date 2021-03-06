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
        case "testpendaftaran":
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
        case "tambahsoal":
        case "daftarsoal":
        case "daftarsoaldetail":
        case "daftarsoaliuk":
        case "daftarsoalkuk":
        case "pbk":
        case "kurikulum":
        case "kelolauser" :
            if(@!file_exists('Views/Shared/_LayoutBackEnd.php'))
            die('File tidak ada di directory');
            include 'Views/Shared/_LayoutBackEnd.php';
            break;
            break;
            
        //peserta Layout
        case "profilpeserta":
        case "kurikulumpeserta":
        case "modulbelajar":
        case "soalpeserta":
        case "assesmentpeserta" :
            if(@!file_exists('Views/Shared/_LayoutPeserta.php'))
            die('File tidak ada di directory');
            include 'Views/Shared/_LayoutPeserta.php';
            break;
            break;
        //pelatih Layout
        case "bukakelas":
        case "kepelatihan":
        case "penilaian":
        case "profilpelatih":
        if(@!file_exists('Views/Shared/_LayoutPelatih.php'))
        die('File tidak ada di directory');
        include 'Views/Shared/_LayoutPelatih.php';
        break;
        break;
        //TU Layout
        case "administrasi":
        case "profiltu":
        if(@!file_exists('Views/Shared/_LayoutTU.php'))
        die('File tidak ada di directory');
        include 'Views/Shared/_LayoutTU.php';
        break;
        break;
        
        default: echo '<script>document.location="home"</script>';
    }
}
?>