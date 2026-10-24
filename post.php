<?php 
require('db.php');

$name = $_POST["fname"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$password = $_POST["password"];
$upper = preg_match("@[A-Z]@", $password);
$lower = preg_match("@[a-z]@", $password);
$number = preg_match("@[0-9]@", $password);
$spcr = preg_match("@[#,$,%,^,&]@", $password);
$repassword = $_POST["repassword"];
$birthday = $_POST["birthday"];
$gender = $_POST["gender"];
$country = $_POST["country"];
$message = $_POST["message"];
$hobies = $_POST["hobies"];
$after_implod = implode(",", $hobies);
$terms = $_POST["terms"];


    if(empty($name)){
        $err = "Please Input Your Name!";
        header("location:index.php?name_err=".$err);
    }
    else if(strlen($name) > 20){
        $err = "Your Name is too Long!";
        header("location:index.php?name_err=".$err);
    }
    else if(empty($email)){
        $err = "Please Input Your Email!";
        header("location:index.php?email_err=".$err);
    }
    else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $err = "Please Input Your Email With Right Formate!";
        header("location:index.php?email_err=".$err);
    }
    else if(empty($phone)){
        $err = "Please Input Your Phone Number!";
        header("location:index.php?phone_err=".$err);
    }
    else if(strlen($phone) > 15){
        $err = "Please Input Your Phone Number with Country Code!";
        header("location:index.php?phone_err=".$err);
    }
    else if(empty($password)){
        $err = "Please Input Your Password!";
        header("location:index.php?pass_err=".$err);
    }
    else if(!$upper || !$lower || !$number || !$spcr || strlen($password) < 8 ){
        $err = "Password must be one uppercase, lowercase, special charecter, and must be 8 charecter!";
        header("location:index.php?pass_err=".$err);
    }
    else if(empty($repassword)){
        $err = "Please Input Your Retype Password!";
        header("location:index.php?rpass_err=".$err);
    }
    else if($password != $repassword){
        $err = "Password and Retype Password are'nt match!";
        header("location:index.php?rpass_err=".$err);
    }
    
    else if(empty($birthday)){
        $err = "Please Input Your Birthday Date!";
        header("location:index.php?birth_err=".$err);
    }
    else if(empty($gender)){
        $err = "Please Input Your Gender!";
        header("location:index.php?gender_err=".$err);
    }
    else if(empty($country)){
        $err = "Please Input Your Country Name!";
        header("location:index.php?country_err=".$err);
    }
    else if(empty($message)){
        $err = "Please Input Your Message!";
        header("location:index.php?message_err=".$err);
    }
    else if(str_word_count($message) > 20){
        $err = "Your Message is too Long!";
        header("location:index.php?message_err=".$err);
    }
    else if(empty($hobies)){
        $err = "Please Fill up the Check Box!";
        header("location:index.php?hobies_err=".$err);
    }
    else if(empty($terms)){
        $err = "Please Fill up the Terms and Condition Check Box!";
        header("location:index.php?hobies_err=".$err);
    }
    else{

        $insert = "INSERT INTO users(name,email,phone,password,birthday,gender,country,message,hobbies,terms_conditions)VALUES('$name', '$email', '$phone', '$password', '$birthday', '$gender', '$country', '$message', '$after_implod', '$terms')";

        $insert_query = mysqli_query($db_connection, $insert);
        $success = "Registration Successfully!";
        header("location:index.php?success=".$success);

        // echo "Name: ".$name;
        // echo "<br>";
        // echo "Email: ".$email;
        // echo "<br>";
        // echo "Phone Number: ".$phone;
        // echo "<br>";
        // echo "Password:".$password;
        // echo "<br>";
        // echo "Date of Birth: ".$birthday;
        // echo "<br>";
        // echo "Gender: ".$gender;
        // echo "<br>";
        // echo "Country: ".$country;
        // echo "<br>";
        // echo "Message: ".$message;
        // echo "<br>";
        // echo "Hobbies: ".$after_implod;
        // echo "<br>";
        // echo "Terms & Condition: ".$terms;
    }
?>