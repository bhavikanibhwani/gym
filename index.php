<?php
$insert = false;
if(isset($_POST['name'])){

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
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $other = $_POST['other'];
    $sql = "INSERT INTO `member`.`member` (`name`, `gender`, `email`, `phone`, `other`, `dt`) VALUES ('$name', '$gender', '$email', '$phone', '$other', current_timestamp());";
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
  <link rel="stylesheet" href="registration.css">
  <title>REGISTRATION</title>
</head>
<body>
  <div class="main">

  <div class="left">
    <img src="./image/gymlogo.png" alt="">
  </div>
  <p class="mainp">MEMBERSHIP BENEFITS</p> 
  
  </div>

  <div class="mid">
  <?php
       if($insert == true){
       echo "<h1 class='submitmsg'>Thanks for Submitting your form . We are happy to see you joining us</h1>";
  }
  ?>

    <div class="club">
      <h1>WORLD CLUB FACILITIES</h1>
      
      <p>Across the world, because members enjoy Fitness First like their second home, we strive to keep consistency in the look and feel of all our clubs by maintaining the world-class facilities we offer and the high standard of service.</p>

      <h2>GYM</h2>
      <p>Fitness First specialises in safe cardiovascular exercise programmes to enable you to improve your lifestyle, health and general wellbeing. Exercise is great for weight loss, shaping and toning and is in fact the only way to lose weight in the right places and keep it off! Our spacious, air-conditioned gymnasiums are fully equipped With a comprehensive range of cardio equipments such as treadmills, steppers and elipticals per club, and over 3 tons of free weight equipment as well as the stretch area, we can provide you with all the encouragement you need to achieve your goals.</p>

      <h2>STUDIO</h2>
      <p>Group exercise is a very important part of a cardiovascular workout - in fact, it is an excellent exercise programmed not just for women but for men as well! Our studio programs offer an exciting range of classes including world renowned Les Mills programs such as BODYCOMBAT™, BODYPUMP™, BODYBALANCE™, BODYVIVE™, RPM™ and Yoga, Tai Chi and everything in-between. The studio is built on a fully sprung floor for your safety and the programs have been designed specifically to cater for the needs of all ages and abilities as well as at times that will suit you.</p>

      <h2>PERSONAL TRAINING COUNTER</h2>
      <p>Personal Training is not just for movie stars! Now you can get affordable personal training to help you achieve your fitness goals. Maximize results with minimum time! For more information on how we can help you achieve your goals, please speak to our Fitness Manager or any of our Personal Trainers.</p> 

      <h2>CARDIO THEATER</h2>
      <p>Exercise is more fun with personalised audio visual entertainment. Whether you enjoy watching music videos, news or the latest sporting event, the cardio theatre will make that 5 mile run just fly by! Exercise need no longer be boring with cardio theatre, giving you a choice of 5 to 6 Astro channels to keep you entertained whilst you are exercising.</p>

      <h2>CYCLING STUDIO</h2>
      <p>Taking our clubs by storm, we now have dedicated Cycling studios in many of our clubs. Spinning is a fun and exciting-bike based aerobic workout ideal for all fitness levels. You can burn 500 – 600 calories in a class!</p>

      <h2>MEMBER'S LOUNGE</h2>
      <p>The perfect place to unwind after your workout. Relax, read the papers, chat with other members and friends as well as enjoy complimentary soft drinks, tea and coffee in the members’ lounge.</p>

      <h2>LUXURIOUS CHANGING ROOM</h2>
      <p>With relaxation being an important part of a complete exercise programme, treat yourself to the luxurious changing room with shower facilities and complimentary toiletry, hair dryers, rest rooms & personalised lockers.</p>

      <h2>SECURITY</h2>
      <p>For the convenience and safety of our members, all entries to the clubs are based on computerised automated gates where only members can access the clubs by swiping their membership cards at the gates.</p>


    
    
    </div>
  </div>  

    <section id="contact">
      <h1 class="h-primary center">GET SPECIAL MEMBERSHIP OFFER*</h1>
      <div id="contact-box">
          <form action="index.php" method="POST">
              <div class="form-group">
                  <label for="name">Name: </label>
                  <input type="text" name="name" id="name" placeholder="e.g Aman">
              </div>
              <div class="form-group">
                <label for="gender">Gender </label>
                <input type="text" name="gender" id="gender" placeholder="e.g Male">
              <div class="form-group">
                  <label for="email">Email: </label>
                  <input type="email" name="email" id="email" placeholder="e.g amansharma114@gmail.com">
              </div>
              <div class="form-group">
                  <label for="phone">Phone Number: </label>
                  <input type="phone" name="phone" id="phone" placeholder="e.g 8789696689">
              </div>
              <div class="form-group">
                  <label for="other">Message: </label>
                  <textarea name="other" id="message" cols="30" rows="10"></textarea>
              </div>
              <div class="form-group1">
                  <button class="btn">SUBMIT</button>
              </div>
          </form>
      </div>
  </section>

    <!-- <div class="freestyle">
      <h1>TRY FREESTYLE</h1>
      <p>Our dedicated Freestyle™ areas and fitness experts can help you discover new training techniques and exercises that offer a dynamic and efficient full-body workout.</p>

    </div>

    <div class="try">
      <h1>TRY A CLASS</h1>
      <p>Come into any of your club and see how our range of group exercise classes can take your fitness further. Why not sample yoga, spinning or circuit training.</p>

    </div> -->


    <!-- INSERT INTO `member` (`sno`, `name`, `gender`, `email`, `phone`, `other`, `dt`) VALUES ('1', 'aman', 'male', 'this@gmail.com', '9999999999', 'this is good', current_timestamp()); -->
 


      

  
</body>
</html>