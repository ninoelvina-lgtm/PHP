<?php
// ======================
// PHP Variables
// ======================
$fullName = "Niño Elvin Alidon";
$course = "BS Information Technology at (MATER DEI COLLEGE)";
$email = "nylepakak0@gmail.com";
$phone = "+1234567891011";

$skills = ["HTML5", "CSS3", "PHP", "Java", "GitHub"];
$hobbies = ["Coding", "Gaming", "Reading", "Music", "Basketball", "Editing"];

$currentYear = date("2026-2027");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $fullName; ?> | Personal Profile</title>

    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
        }

        body{
            font-family: Arial, Helvetica, sans-serif;
            background: linear-gradient(135deg,#0f172a,#1e293b);
            color:white;
            line-height:1.6;
        }

        header{
            text-align:center;
            padding:40px 20px;
            background:rgba(255,255,255,0.05);
            backdrop-filter:blur(5px);
        }

        header h1{
            font-size:2.5rem;
            margin-bottom:10px;
        }

        header p{
            color:#cbd5e1;
        }

        .container{
            width:90%;
            max-width:1100px;
            margin:30px auto;
        }

        .card{
            background:white;
            color:#333;
            border-radius:15px;
            padding:25px;
            margin-bottom:25px;
            box-shadow:0 10px 25px rgba(0,0,0,0.2);
            transition:0.3s;
        }

        .card:hover{
            transform:translateY(-5px);
        }

        .profile{
            text-align:center;
        }

        .profile img{
            width:180px;
            height:180px;
            border-radius:50%;
            object-fit:cover;
            border:5px solid #2563eb;
        }

        h2{
            color:#2563eb;
            margin-bottom:15px;
        }

        ul{
            padding-left:20px;
        }

        .tag{
            display:inline-block;
            background:#2563eb;
            color:white;
            padding:8px 15px;
            border-radius:20px;
            margin:5px;
        }

        footer{
            text-align:center;
            padding:25px;
            background:#020617;
            margin-top:30px;
        }

        @media(max-width:768px){
            header h1{
                font-size:2rem;
            }

            .profile img{
                width:140px;
                height:140px;
            }
        }
    </style>
</head>
<body>

<header>
    <h1><?php echo $fullName; ?></h1>
    <p>Currently Studying at Mater Dei College</p>
</header>

<div class="container">

    <!-- Profile Photo -->
    <div class="card profile">
        <img src="https://raw.githubusercontent.com/ninoelvina-lgtm/webimage/main/1000081350.jpg" alt="Profile Photo">
        <h2>Profile Photo</h2>
        <p>Student Portfolio Website</p>
    </div>
        
        <!-- About Me -->
        <div class="card">
            <h2>About Me</h2>
            <p>
                Hello! My name is <?php echo $fullName; ?>. I am currently
                studying <?php echo $course; ?> and have a passion for
                programming, web development, and technology. I enjoy learning
                new skills and creating useful projects.
            </p>
        </div>

    <!-- Educational Background -->
    <div class="card">
        <h2>Educational Background</h2>
        <ul>
            <li>Elementary Graduate(Nahawan Elementary School)</li>
            <li>Junior High School Graduate(Nahawan National High School)</li>
            <li>Senior High School Graduate(Presentation of Mary School of Clarin Inc.)</li>
            <li>Currently taking <?php echo $course; ?></li>
            <li><?php echo "$currentYear"?></li>
            
        </ul>
    </div>

    <!-- Skills -->
    <div class="card">
        <h2>Skills</h2>

        <?php
        foreach($skills as $skill){
            echo "<span class='tag'>$skill</span>";
        }
        ?>
    </div>

    <!-- Hobbies -->
    <div class="card">
        <h2>Hobbies and Interests</h2>

        <?php
        foreach($hobbies as $hobby){
            echo "<span class='tag'>$hobby</span>";
        }
        ?>
    </div>

    <!-- Contact -->
    <div class="card">
        <h2>Contact Information</h2>

        <p><strong>Email:</strong> <?php echo $email; ?></p>
        <p><strong>Phone:</strong> <?php echo $phone; ?></p>
        <p><strong>Course:</strong> <?php echo $course; ?></p>
    </div>

</div>

<footer>
    <p>
        &copy; <?php echo $currentYear; ?>
        <?php echo $fullName; ?> | Personal Portfolio
    </p>
</footer>

</body>
</html>