<?php
$insert = false;
if(isset($_POST['first_name'])){

    // Set connection variables
    $server = "localhost";
    $username = "root";
    $password = "";

    // Create a database connection
    $con = mysqli_connect($server, $username, $password);

    // Check for connection success
    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
    // echo "Success connecting to the db";

    // Collect post variables
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $other = $_POST['other'];
    $sql = "INSERT INTO `member`.`contact` (`first_name`, `last_name`, `email`, `mobile`, `other`, `dt`) VALUES ('$first_name', '$last_name', '$email', '$mobile', '$other', current_timestamp());";
    // echo $sql;

    // Execute the query
    if($con->query($sql) == true){
        // echo "Successfully inserted";

        // Flag for successful insertion
        $insert = true;
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }

    // Close the database connection
    $con->close();
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONTACT US</title>

    <style>
       *{
           margin: 0;
           padding: 0;
           box-sizing: border-box;
           font-family: 'Poppins',sans-serif;

        }
        section{
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: #112d42;
        }
        section::before{
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 50%;
            height: 100%;
            background: #03a9f4;
        }
        section .container{
            position: relative;
            min-width: 1100px;
            min-height: 550px;
            display: flex;
            z-index: 1000;

        }
        section .container .contactinfo{
            position: absolute;
            top: 40px;
            width: 350px;
            height: calc(100% - 80px);
            background: #0f3959;
            z-index: 1;
            padding: 40px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            box-shadow: 0 20px 20px rgba(0,0,0,0.2);

        }
        section .container .contactinfo h2{
            color: white;
            font-size: 24px;
            font-weight: 500;
        }
        section .container .contactinfo .info{
            position: relative;
            margin: 20px 0;
        }  
        section .container .contactinfo .info li{
            position: relative;
            list-style: none;
            display: flex;
            margin: 20px 0;
            cursor: pointer;
            align-items: flex-start;

        }
        section .container .contactinfo .info li span:nth-child(1){
            width: 30px;
            min-width: 30px;
        }
        section .container .contactinfo .info li span:nth-child(1) img{
            max-width: 100%;
            filter: invert(1);
            opacity: 0.5;
        }
        section .container .contactinfo .info li span:nth-child(2){

            color: white;
            margin-left: 10px;
            font-weight: 300;
            opacity: 0.5;
        }
        section .container .contactinfo .info li span:nth-child(1) img,section .container .contactinfo .info li span:nth-child(2){

           opacity: 1; 
        }
        section .container .contactinfo .sci{
            position: relative;
            display: flex;
        }
        section .container .contactinfo .sci li{
            list-style: none;
            margin-right: 15px;
        }
        section .container .contactinfo .sci li a{
            text-decoration: none;
        }
        section .container .contactinfo .sci li a img{
            filter: invert(1);
            opacity: 0.5;
        }
        section .container .contactinfo .sci li:hover a img{
            opacity: 1;

            
        }
        section .container .contactform{
            position: absolute;
            padding: 70px 50px;
            background: white;
            margin-left: 150px;
            padding-left: 250px;
            width: calc(100% - 150px);
            height: 100%;
            box-shadow: 0 50px 50px rgba(0,0,0,0.5);

        }
        section .container .contactform h2{
            color: #0f3959;
            font-size: 24px;
            font-weight: 500;
        }
        section .container .contactform .formbox{
            position: relative;
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            padding-top: 30px;
        }
        section .container .contactform .formbox .inputbox{
            position: relative;
            margin: 0 0 35px 0;

        }
        section .container .contactform .formbox .inputbox.w50{
            width: 47%;
        }
        section .container .contactform .formbox .inputbox.w100{
            width: 100%;
        }
        section .container .contactform .formbox .inputbox input,
        section .container .contactform .formbox .inputbox textarea{
            width: 100%!important;
            padding: 5px 0;
            resize: none;
            font-size: 18px;
            font-weight: 300;
            color: #333;
            border: none;
            border-bottom: 1px solid #777 ;
            outline: none;
            
        }
        section .container .contactform .formbox .inputbox textarea{
            min-height: 120px;
        }
        section .container .contactform .formbox .inputbox span{
            position: absolute;
            left: 0;
            padding: 5px 0;
            font-size: 18px;
            font-weight: 300;
            color: #333;
            transition: 0.5s;
            pointer-events:none ;
        }
        section .container .contactform .formbox .inputbox input:focus ~ span,
        section .container .contactform .formbox .inputbox textarea:focus ~ span,
        section .container .contactform .formbox .inputbox input:valid ~ span,
        section .container .contactform .formbox .inputbox textarea:valid ~ span{
            transform: translateY(-20px);
            font-size: 12px;
            font-weight: 400;
            letter-spacing: 1px;
            color:#ff568c ;
        }
        section .container .contactform .formbox .inputbox input[type="submit"]{
            position: relative;
            cursor: pointer;
            background: #0f3959;
            color: white;
            border: none;
            max-width: 150px;
            padding: 20px;
        }
        section .container .contactform .formbox .inputbox input[type="submit"]:hover{
            background: #ff568c;
            padding: 50px; 
        }

    </style>

</head>
<body>
    <section>

    <div class="container">
        <div class="contactinfo">
            <div>
                <h2>CONTACT INFO</h2>
                <ul class="info">
                    <li>
                        <span><img src="./svgicon/location.svg" alt=""></span>
                        <span>OLD BUS STAND <br>
                            WARD NO.2 , JULANA <br>
                            HARYANA
                        </span>
                    </li>
                    <li>
                        <span><img src="./svgicon/email_black_24dp.svg" alt=""></span>
                        <span>amansharmamu114@gmail.com</span>
                    </li>
                    <li>
                        <span><img src="./svgicon/phone_in_talk_black_24dp.svg" alt=""></span>
                        <span>87085-XXXXX</span>
                    </li>
                </ul>
            </div>
            <ul class="sci">
                <li><a href="#"><img src="./svgicon/facebook.svg" alt=""></li>
                <li><a href="#"><img src="./svgicon/instagram.svg" alt=""></li>
                <li><a href="#"><img src="./svgicon/linkedin.svg" alt=""></li>
                <li><a href="#"><img src="./svgicon/twitter.svg" alt=""></li>
            </ul>

            

        </div>
        <div class="contactform">
        <?php
       if($insert == true){
       echo "<h2 class='submitmsg'>Thanks for message </h2>";
  }
  ?>
            <h2>SEND A MESSAGE</h2>
        <form action="contact.php" method="POST">    
            <div class="formbox">
                <div class="inputbox w50">
                    <input type="text" name="first_name" required>
                    <span>First Name</span>
                </div>
                <div class="inputbox w50">
                    <input type="text" name="last_name" required>
                    <span>Last Name</span>
                </div>
                <div class="inputbox w50">
                    <input type="email" name="email" required>
                    <span>Email Address</span>
                </div>
                <div class="inputbox w50">
                    <input type="mobile" name="mobile" required>
                    <span>Mobile Number</span>
                </div>
                </div>
                <div class="inputbox w100">
                    <textarea name="other" required ></textarea>
                    <span>Write your message here....</span>
                </div>
                <div class="inputbox w100">
                    <input type="submit" value="send">
                    
                </div>

            </div>
    </form>    
        </div>
              
    </div>
    

    </section>
</body>
</html>