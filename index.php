<?php 

//so for this system we are going to use php as our main back end and mysql for our database with tables for users, and messages 

//for the users table 

//CREATE TABLE users(

//we will have to create a mini create account system to insert username , and password only 

//we will have a ID set to AUTO_INCREMENT for the id function

//the password for this system will not be hashed for a while so we can see the flow of data from our php my admin to our web browser

//);

$cann = mysqli_connect('localhost' , 'root' , '' , 'simplemsg_db');

if(!$cann){
    die("Connection Failed nigga AJ");
}

$error = false;
$lack = ''; // partida we will put a friendly error reminder for the lack of inputs 

if($_SERVER['REQUEST_METHOD']){

    if(empty($_POST['username']) || empty($_POST['password'])){
        //if empty ang utok ni aj jk if any of the two post inputs are empty e.g username or password this code will execute the ass of aj 

        $error = true; // first turn the error variable into true 
        $lack = "Aj's head cannot be empty I mean the inputs";

        //so if these inputs are empty it would echo $lack to the bottom of our page to remind us to put brain in aj's head i mean inputs 

    }

    //now if the posts inputs are not empty this code will execute

    if(!$error){
        //since the previous variable of $error is true this will make it false meaning no error happened while submitting their inputs

        //well unlike aj

        //first we will get the input values and put it inside the variables
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "INSERT INTO users (username , password) VALUES 
        ('$username' , '$password')"; 

        //this php line commands our system to insert the data of inputted by AJ to the users table that has handlers called username and password

        //the id of AJ will be auto_incremented meaning the first submitter will always be number 1 unfortunately for AJ he is not close to even be part of the top 100

        //now we will query this code to php my admin

        mysqli_query($cann , $sql);

        //first is the cann meaning connect to the database
        //next is the sql command to insert data into our database's table

        header("Location: login.php");
        exit(); // after submitting the data this code will now direct us to login.php for the users to log in and verify that their accounts has gone through the database


    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create account</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>

<div class="body">    

    <form  method="post">

    <h1>Create Accont</h1>

    <input type="text" name="username" placeholder="create username">
<!--first bug a typo and the name of the input fck Aj-->
    <br>
    <input type="password" name="password" placeholder="create password">

    <button type="submit">Create Account</button>
    <p><?php echo $lack; ?></p>
<!--Reminder for the idiot users like AJ to put inputs in the form before submitting it to our system-->

    </form>




</div>


</body>
</html>