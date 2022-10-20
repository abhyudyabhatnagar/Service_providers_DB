<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
    $fullname = test_input($_POST["fullname"]);
    
    $lqual = test_input($_POST["lqual"]);
        
    $aff = test_input($_POST["aff"]);
    
    $pp = test_input($_POST["pp"]);}
    
    $id = test_input($_GET["id"]);
    // $sp = test_input($_POST["sp"]);

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }
      if ($fullname === '' ||  $lqual === '' || $aff === '' || $pp === '' ) {
        echo 'empty_fields';
      } else {
        $conn=mysqli_connect('localhost','root','','details');
    
        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        }
    
        $sql = "INSERT INTO corporation(id,`Name`,LQualification , Affiliations,PreviousPartnerships) 
        VALUES('".$id."','" . $fullname. "','" . $lqual . "','". $aff . "','" . $pp . "')";
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