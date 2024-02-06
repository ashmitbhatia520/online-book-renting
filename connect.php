<?php
if(isset($_POST["submit"])){
// NAME
if (empty($_POST["name"])) {
    $errorMSG = "Name is required ";
} else {
    $name = $_POST["name"];
}

// EMAIL
if (empty($_POST["email"])) {
    $errorMSG .= "Email is required ";
} else {
    $email = $_POST["email"];
}

// Subject
if (empty($_POST["subject"])) {
    $errorMSG = "Subject is required ";
} else {
    $subject = $_POST["subject"];
}

// MESSAGE
if (empty($_POST["message"])) {
    $errorMSG = "Message is required ";
} else {
    $message = $_POST["message"];
}


$link = mysqli_connect("localhost","root","root","bookstore");
if($link==false){
    die(mysqli_connect_error());

}
    $sql = "INSERT INTO users (name, email, subject, message) values ('$name','$email','$subject','$message')"; 
    if(mysqli_query($link,$sql)){
        echo " success";
    }
    else 
    echo "Something went wrong";
}

?>