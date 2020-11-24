<?php

    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phonenumber = $_POST['phone'];
        $category = $_POST['category'];


        $host = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbname = "joad database";

                //create connection
    //
      //  try{ 
        //    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
          //  if (mysqli_connect_error()) {
            //    die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    
           // } else {
            //   $SELECT  = "SELECT email From register Where email = ? Limit 1";
              //  $INSERT = "INSERT Into register (username, email, category, phonenumber) values(?,?,?,?);
    //
      //          $stmt = $conn->prepare($SELECT);
        //        $stmt->$bind_param('s', $email);
          //      $stmt->execute();
            //    $stmt->bind_result($email);
              //  $stmt->store_result();
 //               $rnum = $stmt->num_rows;
   // 
     ///           if ($rrnum==0) {
        //            $stmt->close();
    //
      //              $stmt = $conn->prepare($INSERT);
        //            $stmt->bind_param('sssi', $name, $email, $category, $phonenumber);
          //          $stmt->execute();
            //    echo 'New record inserted successfully';
              //  } else{
                //    echo 'Someone is already registered using this email';
             //   }
    
        //        $stmt->close();
               // $conn->close();

      //  } else{
        //    echo 
       // }
        

    }
?>