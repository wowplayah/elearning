<?php
date_default_timezone_set("Asia/Jakarta");
include 'WebConfig/WebConfig.php';
//*----end libs----*//

class HomeController extends webConfigGlobalControl{
    
    public function retrieveThreeListHomeProperty()
    {
        $calConn = $this->connectionKey();
        $query = $calConn->query("
            SELECT 
            a.property_id,
            a.property_name,
            b.type_name,
            a.property_description,
            a.property_address,
            a.property_region,
            c.status_name,
            a.property_price,
            a.property_picture,
            d.agent_fullname
            FROM property_tb a 
            JOIN type_tb b ON a.property_type_id=b.type_id
            JOIN status_tb c ON a.property_status_id=c.status_id
            JOIN agent_tb d ON a.property_agent_id=d.agent_id
            ORDER BY a.property_id DESC LIMIT 0,3
        ");
        while($record = mysqli_fetch_array($query))
        {
            $data[] = $record;
        }

         return $data;

    }

    public function retrieveAllListHomeProperty()
    {
        $calConn = $this->connectionKey();
        $query = $calConn->query("
            SELECT 
            a.property_id,
            a.property_name,
            b.type_name,
            a.property_description,
            a.property_address,
            a.property_region,
            c.status_name,
            a.property_price,
            a.property_picture,
            d.agent_fullname
            FROM property_tb a 
            JOIN type_tb b ON a.property_type_id=b.type_id
            JOIN status_tb c ON a.property_status_id=c.status_id
            JOIN agent_tb d ON a.property_agent_id=d.agent_id
            ORDER BY a.property_id DESC LIMIT 3 OFFSET 3
        ");
        while($record = mysqli_fetch_array($query))
        {
            $data[] = $record;
        }

         return $data;

    }

    public function retrieveAllHomeProperty()
    {
        $calConn = $this->connectionKey();
        $query = $calConn->query("
            SELECT 
            a.property_id,
            a.property_name,
            b.type_name,
            a.property_description,
            a.property_address,
            a.property_region,
            c.status_name,
            a.property_price,
            a.property_picture,
            d.agent_fullname
            FROM property_tb a 
            JOIN type_tb b ON a.property_type_id=b.type_id
            JOIN status_tb c ON a.property_status_id=c.status_id
            JOIN agent_tb d ON a.property_agent_id=d.agent_id
            ORDER BY a.property_id DESC
        ");
        while($record = mysqli_fetch_array($query))
        {
            $data[] = $record;
        }

         return $data;

    }

    public function retrieveSearchHomeProperty($_searchText)
    {
        $calConn = $this->connectionKey();
        $query = $calConn->query("
            SELECT 
            a.property_id,
            a.property_name,
            b.type_name,
            a.property_description,
            a.property_address,
            a.property_region,
            c.status_name,
            a.property_price,
            a.property_picture,
            d.agent_fullname
            FROM property_tb a 
            JOIN type_tb b ON a.property_type_id=b.type_id
            JOIN status_tb c ON a.property_status_id=c.status_id
            JOIN agent_tb d ON a.property_agent_id=d.agent_id
            WHERE a.property_name LIKE'%$_searchText%'
            ORDER BY a.property_id DESC
        ");
        $count = mysqli_num_rows($query);

        if($count != 0){
            while($record = mysqli_fetch_array($query))
            {
                $data[] = $record;
            }
        }else{
            echo "<h2 class='text-center'>There is no result</h2>";
        }

         return $data;

    }

    public function SignInFunction($_email,$_password)
    {
        $beforeMd5Password = $_password;
        $_password = md5($_password);
        $callConn = $this->connectionKey();
        $query = $callConn->query("select * from agent_tb a where a.agent_email ='$_email' and a.agent_password='$_password'");
        
        $record = mysqli_fetch_array($query);
        $count = mysqli_num_rows($query);
        
        //---------------------------------------------------------------------------
        if($_email == "" || $beforeMd5Password == ""){
            echo "<script>alert('E-mail & Password Wajib diisi!')</script>";
        }else if($count == 1){   
            $_SESSION['RumahKitaSession123'] = true;
            $_SESSION['AgentID'] = $record['agent_id'];
            echo "<script>document.location='backside'</script>";
        }else{
            echo "<script>alert('E-mail & Password salah!')</script>";
        }        
    }


    public function RegisterAgent($_username,$_email,$_password,$_fullname,$_corporation,$_address,$_phone,$_desc,$_region)
    {
        $calConn = $this->connectionKey();
        $pass =md5($_password);
        $query = $calConn->query("INSERT INTO agent_tb(agent_username, agent_email, agent_password, agent_fullname, agent_corporation, agent_address, agent_phone, agent_description, agent_region) 
        VALUES('$_username', '$_email', '$pass', '$_fullname', '$_corporation', '$_address', '$_phone', '$_desc', '$_region')");
        if($query){
            $this->SignInFunction($_email,$_password);
        }else{
            echo "<script>alert('Internal Server Error!')</script>";
        }
        

         return $data;

    }
}
?>