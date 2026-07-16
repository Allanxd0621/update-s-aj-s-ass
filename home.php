<?php //done with the auth folder now time to build the real deal where aj will never learn in his life as he is a dumb ass loser who only know how to lift weights and be a full time construction worker.


//after a bathroom break i decided to turn this shit into a messaging website using updates inputs we will update each message that the two users put and display it automatically in our website 

//but the downside of this idea is that we cant turn it into a real time server as it needs refreshments from the users to  operate properly.

//to counter up with this downside we are going to create a refresh button just like in the old facebook lite version or old free fb.com where we presss refresh couple of times to reload messages from our crushes and stuffs 

//good ol days.

//oh and i hope no teachers will see this.

//as usuall connect to the database



$cann = mysqli_connect('localhost' , 'root' , '' , 'simplemsg_db');
if(!$cann){
    die("Connection Failed AJ");
}

$error = false;
$lack = '';

if($_SERVER['REQUEST_METHOD'] == "POST"){
    if(empty($_POST['msg'])){
    $error = true;
    $lack = 'Put a message before sending you dumb fuck';
    //this code will execute if that dumb fuck fucking send an empty message 
    //it prevents error and confusion among our database
    }

    if(!$error){
//and if aj somehow got the correct mind and set a proper message this shit will execute. 

        $msg = $_POST['msg'];

        $update = "UPDATE msg SET msg = '$msg'
        WHERE id = 1 ";


        //the two fucks will update a single line of message inside the database back n forth like dumb fucks.

        mysqli_query($cann , $update);

        

        

        header("Location: home.php");
        exit();

        //we reload to the same page to make it refresh basic 




    }


}

$select = "SELECT * FROM msg WHERE id = 1";

        $result = mysqli_query($cann , $select);

        $message = mysqli_fetch_assoc($result);

$ajBitch = $message['msg']; // now get that updated message and put it inside the aj bitch variable

//put the message selection outside the insert block


//change of plan as it would take me 2 more hours i will just put both messages of the user and the end user in one single block of h1. 

//its done stupid ass.




//to create our table 

//CREATE TABLE msg(
//id INT PRIMARY KEY, // we dont need auto increment we can just insert our data using mysql code manually 
//message VARCHAR(200) NOT NULL 

// so the limit of the message will not exceed to 200 characters cause memory handling and shit 

//if your dumbass listen to maam sheryl's PT course you will get this.

//hold up i will make the table in phpmyadmin 

//done bitch now we will now have to make a code where two users will update one single line of h1 
//);


//so i think we should insert a dummy message to our database first right? 

//the code would be 

//INSERT INTO msg (id, msg)
//VALUES (1, ''); 

//done.

//now for the code for updating inputs we get the inputs put it inside a variable then let those two fucks talk to each other.

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
</head>
<body>

<div class="display-msg">
    <h1 class="ajBitch">
        <?php echo $ajBitch;  ?> 
        <!-- we will echo the messages of the   user's here -->
    </h1>

    
</div>

    <div class="input-msg">
        <form  method="post">
            <input type="text" name="msg" placeholder="Enter your message here">
            <p><?php echo $lack; ?></p>
        <br>
        <button name="send">Send</button>
        </form>
    </div>
</body>
</html>

<!--
nigga its done.
-->