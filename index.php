<?php
    
    error_reporting(0);

  


   $insert = false;
 if(isset($_POST['name'])){

  $filename=$_FILES["resume"]["name"];
  $tempname=$_FILES["resume"]["tmp_name"];
  $folder = "uploads/".$filename;
  //echo $folder;
  move_uploaded_file($tempname,$folder);

            //set connection variable
            $server="localhost";
            $username="root";
            $password="";



            // create a database connection
            $con=mysqli_connect($server,$username,$password);


            //check for connection success
            if(!$con){
               die("connection to this databse failed due to".mysqli_connect_error());
            }


            //collect post variable
            $name = $_POST['name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $gender = $_POST['gender'];
            $course = $_POST['course'];
            $role = $_POST['role'];
            $desc = $_POST['desc'];
           //$resume = $_POST['resume'];

          

            $sql="INSERT INTO `ridebuddy`.`internship` ( `name`, `email`, `phone`, `gender`, `course`, `role`, `skill`, `file_path`) VALUES ( '$name', '$email', '$phone', '$gender', '$course', '$role', '$desc', '$folder');";

            
            

            

            if($con->query($sql)==true){
              $insert=true;
            }
            else{
                echo "ERROR: $sql <br> $con->error";
            }
            $con->close();
 }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Tektur&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img class="bg" src="https://img.freepik.com/premium-photo/business-man-handshake-with-effect-global-world-map-network-link-connection-graph-chart-stock-market-graphic-diagram_33829-193.jpg" alt="">
    
    <div class="container">

        <h1>AP MOBILITY INDIA PRIVATE LIMITED</h1>
        <h2>Welcome to Careers Connect Page.</h2>
        <br>
        <p>AP Mobility India Private Limited is a leading company in the mobility solutions industry, specializing in innovative and user-centric products. We are currently seeking enthusiastic interns to join our Marketing and Support Team for the following roles:</p>
       <br>
       <h2>Roles:</h2>
       <br>
       <p><h4> Graphic Designer Intern:-</h4>
       

Responsibilities: Designing captivating and visually appealing social media posts, marketing materials, and promotional graphics to enhance brand visibility and engagement.
Requirements: Proficiency in graphic design tools like Adobe Photoshop, Illustrator, or Canva. A creative flair and a keen eye for aesthetics.</p>
<br>
<p><h4>Video Editor Intern:</h4>

Responsibilities: Editing and producing engaging video content for social media, promotional campaigns, and product showcases, enhancing our brand's online presence.
Requirements: Proficiency in video editing software like Adobe Premiere Pro, Final Cut Pro, or other relevant tools. A passion for storytelling through visuals.</p>
      <p>
        <br>
<h4>Digital Marketing Intern:</h4>
Responsibilities: Assisting in the execution of digital marketing strategies, managing social media accounts, analyzing campaign performance, and contributing to online brand promotion.
Requirements: Basic understanding of digital marketing concepts, social media platforms, and analytical tools. Strong communication and data analysis skills.
      </p>
<br>
      <p>
        <h4>Content Creation and Strategy Intern:</h4>
        

Responsibilities: Crafting compelling and strategic content for various marketing campaigns, blogs, and social media platforms to drive audience engagement and brand awareness.
Requirements: Excellent writing and communication skills, creativity in ideating content ideas, and understanding of content marketing principles.
      </p>
<br>
<br>
<h2>Perks for All Roles:</h2>
  <ul>
    <li>Offer Letter for the internship position</li>
    <li>Letter of Completion of the internship program</li>
    <li>Letter of Recommendation based on performance</li>
    <li>Opportunity for Full-time Employment based on merit</li>
    <li>Experience of collaborating in a dynamic and talented team</li>
    <li>Exposure to the workings of an early-stage startup</li>
    <li>Rapid Learning and Skill Development with a steep learning curve</li>
  </ul>

  <br>
  <h2>Interested candidates are requested to fill the below form with accurate and complete information.</h2>
  <br>
  <br>
  <br>


        <form action="index.php" method="post" enctype="multipart/form-data">
            <input type="text" name="name" id="name" placeholder="Enter Your Name" required>
            <input type="email" name="email" id="email" placeholder="Enter Your Email" required>
            <input type="number" name="phone" id="phone" placeholder="Enter your Contact number" required>
            <input type="text" name="gender" id="gender" placeholder="Enter your Gender" required>
        <input type="text" name="course" id="course" placeholder="Enter Course You Are Currently Pursuing" required>
        <input type="text" name="role" id="role" placeholder="Enter Role you want to join" required>
            <textarea name="desc" id="desc" cols="20" rows="5" placeholder="Enter your Skills"></textarea required>
            <label for="resume">Upload Resume:</label>
            <input type="file" id="resume" name="resume" accept=".pdf,.doc,.docx" required>
            <br>

           <button class="SubmitMag">Submit</button>
          
        </form>
        <?php
        if($insert == true){
        echo "<p class='submitMsg'>Thanks for submitting your form. We are happy to see you joining us for the US trip</p>";
        }
    ?>

    </div>

    
    <script src="index1.js"></script>

</body>
</html>
