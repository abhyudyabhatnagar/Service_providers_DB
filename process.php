<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
    $fullname = test_input($_POST["fullname"]);
    
    $addr = test_input($_POST["addr"]);
        
    $num = test_input($_POST["num"]);

    $cmail = test_input($_POST["cmail"]);}    
    
    $sp = test_input($_POST["sp"]);

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }
      if ($fullname === '' ||  $addr === '' || $num === '' || $cmail === '' || $sp === '') {
        echo 'empty_fields';
      } else {
        $conn=mysqli_connect('localhost','root','','details');
        
        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        }
        
        $sql = "INSERT INTO data( fullname, companyaddress, contactnum, email, servicetype) 
        VALUES('" . $fullname. "','" . $addr . "','". $num . "','" . $cmail . "','" . $sp . "')";
        if ($conn->query($sql) === TRUE) {
          $last_id = $conn->insert_id;
          echo "inserted_successfully";
          if ($sp === 'Corporate')
          header('Location:form2.php?id='.$last_id);
          else if ($sp === 'Proprietorship')
          header('Location:form3.php?id='.$last_id);
          else if ($sp === 'Partnership')
          header('Location:form4.php?id='.$last_id);
          else if ($sp === 'Society')
          header('Location:form5.php?id='.$last_id);
          else if ($sp === 'Trust')
          header('Location:form6.php?id='.$last_id);
        } else {
          echo "error_inserting";
          echo mysqli_error($conn);
          // header('Location:ar.html');
        }
        $conn->close();}
        ?>