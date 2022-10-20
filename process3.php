<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
    $fullname = test_input($_POST["fullname"]);
    
    $lqual = test_input($_POST["lqual"]);
        
    $nw = test_input($_POST["nw"]);
    
    $cid = test_input($_POST["cid"]);}
    
    $id = test_input($_GET["id"]);
    // $sp = test_input($_POST["sp"]);

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }
      if ($fullname === '' ||  $lqual === '' || $nw === '' || $cid === '' ) {
        echo 'empty_fields';
      } else {
        $conn=mysqli_connect('localhost','root','','details');
    
        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        }
    
        $sql = "INSERT INTO proprietorship(id,`Name`,LQualification ,NetWorth,CId) 
        VALUES('".$id."','" . $fullname. "','" . $lqual . "','". $nw . "','" . $cid . "')";
        if ($conn->query($sql) === TRUE) {
          echo "inserted_successfully";
          header('Location:thanks.html');
          /* if ($sp === 'Proprietorship')
          header('Location:form2.php');
          else if ($sp === 'Corporate')
          header('Location:form2.php');
          else if ($sp === 'Partnership')
          header('Location:form2.php');
          else if ($sp === 'Society')
          header('Location:form2.php');
          else if ($sp === 'Trust')
          header('Location:form2.php');*/
        } else {
          echo "error_inserting";
          echo mysqli_error($conn);
        //  header('Location:ar.html');
        }
        $conn->close();}
        ?>