<?php
require "connection.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
    <meta name= "viewport" content=" width-device-width, initial-scale-1.0">
    <link rel="stylesheet" href="assets/css/index.css">
    <link rel="stylesheet" href="assets/css/bubble.css">
    <link rel="stylesheet" href="assets/css/log.css">
</head>
<body>
    <header>
        <!-- <a href="main.html"> -->
            <h1 id="bubble-hover" class="bu" ></h1>
        <!-- </a> -->
        <ul>
            <li><a href="index.html" class="active">Home</a></li>
        </ul>
        
    </header>
    <div class="form-container">

        <form action="" method="post">
           
           <h3>login</h3>
           <input type="email" name="email" id="username" required placeholder="enter your email" > 
           <input type="password" name="password" id="password" required placeholder="enter your password">
           <input type="submit" name="submit" value="login now" class="form-btn">
          
           
           <p>don't have an account? <a href="signup.html">register now</a></p>

        </form>

        

    </div>
    <section>
        <img src="assets/img/stars.png" id="stars">
        <img src="assets/img/layer 3.png" id="layer_3">
        <img src="assets/img/layer 2.png" id="layer_2">
        <img src="assets/img/layer 1.png" id="layer_1">  
    </section>
    


    <?php 


if (isset($_POST['submit'])) {
    $Em = $_POST['email'];
    $pass= $_POST['password'];

$email  = filter_var($Em, FILTER_SANITIZE_EMAIL);
$pass= filter_var($pass,  FILTER_SANITIZE_STRING);

$sql = "SELECT * FROM users WHERE email=?"; 
$stmt = $conn->prepare($sql); 
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result(); 
$user = $result->fetch_assoc();

if(isset($user['email'])!=Null){
   if (password_verify($pass,$user['password'])) {
         $_SESSION['email']=$email;
          $_SESSION['posts']='all';
          $_SESSION['word']='';
    header('Location: http://localhost/web/home.html');
    die;
    }else{
            echo "<script>alert('incorrect password');</script>";
 header('Location: http://localhost/web/login.php');
    die;
    }

}else{
echo "<script>alert('Account does not exist pleas sign up first');

</script>";
}
}






// if (isset($_POST['submit'])) {
//     $Em = $_POST['email'];
//     $pass = $_POST['password'];
//     $Em = filter_var($Em, FILTER_SANITIZE_EMAIL);
//     $pass = filter_var($pass, FILTER_SANITIZE_STRING);

//             // Assuming you have already established a database connection
//             $stmt = $conn->prepare("SELECT password FROM users WHERE email = ?");
//             $stmt->execute([$email]);
//             $row = $stmt->fetch();
//             $hashed_password = $row['password'];

//             if (password_verify($password, $hashed_password)) {
//                 $_SESSION['email'] = $email;
//                 $_SESSION['posts'] = 'all';
//                 $_SESSION['word'] = '';
//                 header('Location: http://localhost/web/home.html');
//                 die;
//             } else {
//                             echo "<script>alert('Incorrect password');</script>";
//                         header('Location: http://localhost/web/login.php');
//                         die;
//             }
            

    
    // $sql = "SELECT * FROM users WHERE email = ?";
    // $stmt = $conn->prepare($sql);
    // $stmt->bind_param("s", $email);
    // $stmt->execute();
    // $result = $stmt->get_result();
    // $user = $result->fetch_assoc();

    // if ($user) {
    //     $hashed_password = $user['password'];
    //     if (password_verify($password, $hashed_password)) {
    //         $_SESSION['email'] = $email;
    //         $_SESSION['posts'] = 'all';
    //         $_SESSION['word'] = '';
    //         header('Location: http://localhost/web/home.html');
    //         die;
    //     } else {
    //         echo "<script>alert('Incorrect password');</script>";
    //         header('Location: http://localhost/web%20project/login.php');
    //         die;
    //     }
    // } else {
    //     echo "<script>alert('Account does not exist. Please sign up first.');</script>";
    // }
// }


?>



    <footer>
        
    </footer>
    
    <script src="assets/js/login.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>