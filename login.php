<?php 

session_start();
//forgot to start the session dumb fuck

// now that our stupid aj i mean stupid create page is working and is now inserting datas into our table we will now proceed to making our login page using select and comparing the selected datas with the current inputs of AJ 


$cann = mysqli_connect('localhost' , 'root' , '' ,'simplemsg_db');
//as usual first connect our page to the database

if(!$cann){
    die("Connection of Ajs head failed");
    //this code will execute if aj's head is empty 
    //i mean this code will execute if there is an error of 404 between php browser and mysql XAMPP 
}

$error = false;
$lack = '';

//same as before this will determine the lacks of inputs created by aj

if($_SERVER['REQUEST_METHOD'] == "POST"){
    if(empty($_POST['username']) || empty($_POST['password'])){
// forgot to empty this shit

        $error = true;
        //true if there is empty in any of the two inputs
        $lack = 'Aj you dumb fool enter your credentials niga';

    }

    if(!$error){

            //if there is not let the party begin

            $username = $_POST['username'];
            $password = $_POST['password'];

            //same as before we are going to get the current inputs and put them each inside a variable

        //now for this sql query we are going to select into the users table inside the simplemsg_db if there is a match between the password and the current password and username of our user

        $sql = "SELECT * FROM users WHERE username = '$username'";

    //if the current inputted username and the username inside our database table match we will query to see

        $result = mysqli_query($cann , $sql);

        $fuckAj = mysqli_fetch_assoc($result);

        if($fuckAj['username'] && $password == $fuckAj['password']){
            // if the table username and current password matches with the table's password this code will execute

        $_SESSION['id'] = $fuckAj['id'];
        //first get or session the id for future uses.

        header("Location: ../home/home.php");
        exit();
        //if the username and password matches the username and password inside our table we will direct the user to the home page 

         }else{
            $lack ='Aj you dumb fuck your credentials are wrong';
            //if not then we will remind that son of a bitch that his credentials are wrong.
         }

    }


}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
<!--using our previously made css file we are just going to reuse it unlike aj ofc he's dumb cant even center a div lmfao-->
<link rel="stylesheet" href="index.css">
</head>
<body>
    
<div class="body">
    <form  method="post">
        <h1>Log in</h1>
        <input type="text" name="username" placeholder="Enter your username AJ"> <br>
        <input type="password" name="password" placeholder="Enter your password AJ ">
        <button type="submit">Login</button>
        <p><?php  echo $lack; ?></p>
    </form>
</div>

</body>
</html>