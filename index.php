<?php  
require("database.php");
?>
<?php
if(isset($_POST['submit'])){
    $firstName=$_POST["firstname"];
    $lastName=$_POST["lastname"];
    $gender=$_POST["gender"];
    $email=$_POST["email"];
    $phone=$_POST["phone"];
   
        
        $query="INSERT INTO users (firstname,lastname,email,phone,gender) VALUES ('$firstName','$lastName','$email','$phone','$gender')";
        mysqli_query($conn,$query);
        //echo "<script>alert('Data Inserted Successfully');</script>";
        echo "Data Inserted Successfully";
       
}

?>