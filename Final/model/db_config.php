<?php
      $db_server="location";
      $db_uname="root";
      $db_pass="";
      $db_name="wt_sum_21";


      
      function execute($query){ //respn fr insrt,updt,dlt

        global $db_server,$db_uname,$db_pass,$db_name
        $conn=mysql_connect($db_server,$db_uname,$db_pass,$db_name);
        if($conn){
            if(mysql_query($conn,$query)){
                return true;
            }
            else{
                return mysql_error($conn);
            }
        }

      }
      function get($query){ // rspn fr select qry
          global $db_server,$db_uname,$db_pass,$db_name;
          $conn=mysql_connect($db_server,$db_uname,$db_pass,$db_name);
          $data = array();
          if($conn){
               $result = mysql_query($conn,$query);
               while($row = mysqli_fetch_assoc($result)){
                   $data[] = $row;
               }

          }
          return $data;

      }
?>
