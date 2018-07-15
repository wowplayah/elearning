<?php
date_default_timezone_set("Asia/Jakarta");
//*----end libs----*//

class webConfigGlobalControl{
    
    private $h  = 'localhost';
    private $u  = 'root';
    private $p  = '';
    //dbname
    private $db = 'myhouse';


    public function connectionKey()
    {
        $mysqli = mysqli_connect($this->h,$this->u,$this->p);
        $mysqli->select_db($this->db);
        
        return $mysqli;
    }

    public function realRoot(){
        //on server cloud replace this code below become "$_SERVER['DOCUMENT_ROOT']" only 
        $realRoot = $_SERVER['DOCUMENT_ROOT'].'/myhouse';
        return $realRoot;
    }
    
    public function encrypt_decrypt($action, $string) {
        $output = false;
    
        $encrypt_method = "AES-256-CBC";
        $secret_key = '812jkdbks7896JBDTBXALOSNJDUT878586tt66g76tv67666R6c7C6R';
        $secret_iv = 'LISTSOFTMEDIASecretIv';
    
        // hash
        $key = hash('sha256', $secret_key);
        
        // iv - encrypt method AES-256-CBC expects 16 bytes - else you will get a warning
        $iv = substr(hash('sha256', $secret_iv), 0, 16);
    
        if( $action == 1 ) {
            $output = openssl_encrypt($string, $encrypt_method, $key, 0, $iv);
            $output = base64_encode($output);
        }
        else if( $action == 0 ){
            $output = openssl_decrypt(base64_decode($string), $encrypt_method, $key, 0, $iv);
        }
    
        return $output;
	}
    
    public function Redirect($url, $permanent = false)
    {
        if (headers_sent() === false)
        {
            header('Location: ' . $url, true, ($permanent === true) ? 301 : 302);
        }
    
        exit();
    }

    public function whoIsLoggingOn($_key)
    {
        $calConn = $this->connectionKey();
        $query = $calConn->query("SELECT a.agent_username,a.agent_email,a.agent_fullname FROM agent_tb a WHERE a.agent_id='$_key'");
        while($record = mysqli_fetch_array($query))
        {
            $data[] = $record;
        }
        return $data;
    }

    public function retrieveType()
    {
        $calConn = $this->connectionKey();
        $query = $calConn->query("SELECT * FROM type_tb");
        while($record = mysqli_fetch_array($query))
        {
            $data[] = $record;
        }
        return $data;
    }

    public function retrieveStatus()
    {
        $calConn = $this->connectionKey();
        $query = $calConn->query("SELECT * FROM status_tb");
        while($record = mysqli_fetch_array($query))
        {
            $data[] = $record;
        }
        return $data;
    }



}
?>