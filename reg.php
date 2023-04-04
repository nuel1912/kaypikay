<?php
$success = 0;
$user = 0;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include 'connect.php';

    $firstname = mysqli_real_escape_string($con, $_POST['first1']);
    $lastname = mysqli_real_escape_string($con, $_POST['last1']);
    $email = mysqli_real_escape_string($con, $_POST['email1']);
    $phonenumber = mysqli_real_escape_string($con, $_POST['no1']);
    $dateofbirth = mysqli_real_escape_string($con, $_POST['dob']);
    $age = mysqli_real_escape_string($con, $_POST['age']);
    $address = mysqli_real_escape_string($con, $_POST['address']);
    $city = mysqli_real_escape_string($con, $_POST['city']);
    $country = mysqli_real_escape_string($con, $_POST['country']);
    $placeofbirth = mysqli_real_escape_string($con, $_POST['pob']);
    $fullparentname = mysqli_real_escape_string($con, $_POST['full']);
    $parentemail = mysqli_real_escape_string($con, $_POST['email2']);
    $telephone = mysqli_real_escape_string($con, $_POST['no2']);
    $occupation = mysqli_real_escape_string($con, $_POST['occ']);
    $parentaddress = mysqli_real_escape_string($con, $_POST['add2']);
    $degree = mysqli_real_escape_string($con, $_POST['degree']);
    $preferredcourse = mysqli_real_escape_string($con, $_POST['course']);
    $primaryschool_attended = mysqli_real_escape_string($con, $_POST['pri']);
    $secondaryschool_attended = mysqli_real_escape_string($con, $_POST['sec']);

    
    $sql = "SELECT * FROM registration WHERE firstname='$firstname'";
    $result = mysqli_query($con, $sql);
    if ($result) {
        $num = mysqli_num_rows($result);
        if ($num > 0) {
            $user = 1;
        } else {
            $sql = "INSERT INTO registration (
                        firstname, lastname, email, phonenumber, dateofbirth, age, address, 
                        city, country, placeofbirth, fullparentname, parentemail, telephone, occupation, parentaddress, degree, preferredcourse,
                        primaryschool_attended, secondaryschool_attended
                    )
                    VALUES (
                        '$firstname', '$lastname', '$email', '$phonenumber', '$dateofbirth', '$age', '$address', 
                        '$city', '$country', '$placeofbirth', '$fullparentname', '$parentemail', '$telephone', '$occupation', '$parentaddress', '$degree',
                        '$preferredcourse', '$primaryschool_attended', '$secondaryschool_attended'
                    )";
            $result = mysqli_query($con, $sql);
            if ($result) {
                $success = 1;
            } else {
                die(mysqli_error($con));
            }
        }
    } else {
        die(mysqli_error($con));
    }
}                                                             
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>University Website</title>

    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato&family=Montserrat+Alternates:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="BOOTSTRAP_5/dist/css/bootstrap.css">

</head>
<body>
<?php

if($user)
{

echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
<strong>Oh no Sorry</strong> User already exist
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';


}
?>                      

<?php

if($success)
{

echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
<strong>Success</strong> You have successfully signed in 
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';


}
?>



    <section class="sub-header">
        <nav>
            <a href="index.html"><img src="img/KPK.png" alt=""></a>
            <img src="img/bars.png" id="bars" alt="menu">
            <div class="nav-links" id="navLinks">
                <ul>
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="abt.php">ABOUT</a></li>
                    <li><a href="reg.php">REGISTRATION</a></li>
                    <li><a href="contact.php">CONTACT</a></li>
                    <li><a href="login.php" class="log">LOGIN</a></li>
                </ul>
            </div>
        </nav>
        <h1>Registration Form</h1>
    </section>

    <!-- Registration Field -->
    <section class="container">
        <form action="reg.php" method="post">
            <section class="sub-container" id="move1">
                <h1 class="title">Applicant Information</h1>
                    <div class="part1">
                        <div class="input-box">
                            <input type="text" id="first1" name="first1" placeholder="Enter first name..." required>
                        </div>
                        <div class="input-box">
                            <input type="text" id="last1" name="last1" placeholder="Enter last name..." required>
                        </div>
                        <div class="input-box">
                            <input type="email" id="email1" name="email1" placeholder="Enter your email..." required>
                        </div>
                        <div class="input-box">
                            <input type="tel" id="no1" name="no1" placeholder="Enter phone number..." required>
                        </div>
                        <div class="input-box">
                            <input type="text" id="dob" name="dob" placeholder="Enter date of birth..." onfocus="(this.type='date')">
                        </div>
                        <div class="input-box">
                            <input type="number" id="age" name="age" placeholder="Enter your age...">
                        </div>
                        <div class="input-box">
                            <select id="gender" required>
                                <option value="" disabled selected hidden>--select gender--</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                        </div>
                        <div class="input-box">
                            <textarea name="address" id="add" rows="2" placeholder="Your address" required></textarea>
                        </div>
                        <div class="input-box">
                            <input type="text" id="city" name="city" placeholder="Your city..." required>
                        </div>
                        <div class="input-box">
                            <select id="state" required>
                                <option value="" disabled selected hidden>--select your state--</option>
                                <option value="abia">Abia</option>
                                <option value="adamawa">Adamawa</option>
                                <option value="akwaIbom">Akwa Ibom</option>
                                <option value="anambra">Anambra</option>
                                <option value="bauchi">Bauchi</option>
                                <option value="bayelsa">Bayelsa</option>
                                <option value="benue">Benue</option>
                                <option value="borno">Borno</option>
                                <option value="crossRiver">Cross River</option>
                                <option value="delta">Delta</option>
                                <option value="ebonyi">Ebonyi</option>
                                <option value="edo">Edo</option>
                                <option value="ekiti">Ekiti</option>
                                <option value="enugu">Enugu</option>
                                <option value="fct">FCT</option>
                                <option value="gombe">Gombe</option>
                                <option value="imo">Imo</option>
                                <option value="jigawa">Jigawa</option>
                                <option value="kaduna">Kaduna</option>
                                <option value="kano">Kano</option>
                                <option value="katsina">Katsina</option>
                                <option value="kebbi">Kebbi</option>
                                <option value="kogi">Kogi</option>
                                <option value="kwara">Kwara</option>
                                <option value="lagos">Lagos</option>
                                <option value="nasarawa">Nasarawa</option>
                                <option value="niger">Niger</option>
                                <option value="ogun">Ogun</option>
                                <option value="ondo">Ondo</option>
                                <option value="osun">Osun</option>
                                <option value="oyo">Oyo</option>
                                <option value="plateau">Plateau</option>
                                <option value="rivers">Rivers</option>
                                <option value="sokoto">Sokoto</option>
                                <option value="taraba">Taraba</option>
                                <option value="yobe">Yobe</option>
                                <option value="zamfara">Zamfara</option>
                            </select>
                        </div>
                        <div class="input-box">
                            <input type="text" name="country" id="country" placeholder="Your country..." required>
                        </div>
                        <div class="input-box">
                            <input type="text" name = "pob" id="pob" placeholder="Place of birth..." required>
                        </div>
                    </div>
                    
                    <div>
                        <button type="button" id="next1" class="hero-btn btn-box">NEXT</button>
                    </div>
            </section>
            <section class="sub-container" id="move2">
                <h1 class="title">Parental Information</h1>
                    <div class="part1">
                        <div class="input-box">
                            <input type="text" name = "full" id="full" placeholder="Full name of parent..." required>
                        </div>
                        <div class="input-box">
                            <input type="email" name = "email2" id="email2" placeholder="Email of next of kin..." required>
                        </div>
                        <div class="input-box">
                            <input type="tel" name = "no2" id="no2" placeholder="Phone number of next of kin..." required>
                        </div>
                        <div class="input-box">
                            <select name = "state2" id="state2" required>
                                <option value="" disabled selected hidden>--select your state--</option>
                                <option value="abia">Abia</option>
                                <option value="adamawa">Adamawa</option>
                                <option value="akwaIbom">Akwa Ibom</option>
                                <option value="anambra">Anambra</option>
                                <option value="bauchi">Bauchi</option>
                                <option value="bayelsa">Bayelsa</option>
                                <option value="benue">Benue</option>
                                <option value="borno">Borno</option>
                                <option value="crossRiver">Cross River</option>
                                <option value="delta">Delta</option>
                                <option value="ebonyi">Ebonyi</option>
                                <option value="edo">Edo</option>
                                <option value="ekiti">Ekiti</option>
                                <option value="enugu">Enugu</option>
                                <option value="fct">FCT</option>
                                <option value="gombe">Gombe</option>
                                <option value="imo">Imo</option>
                                <option value="jigawa">Jigawa</option>
                                <option value="kaduna">Kaduna</option>
                                <option value="kano">Kano</option>
                                <option value="katsina">Katsina</option>
                                <option value="kebbi">Kebbi</option>
                                <option value="kogi">Kogi</option>
                                <option value="kwara">Kwara</option>
                                <option value="lagos">Lagos</option>
                                <option value="nasarawa">Nasarawa</option>
                                <option value="niger">Niger</option>
                                <option value="ogun">Ogun</option>
                                <option value="ondo">Ondo</option>
                                <option value="osun">Osun</option>
                                <option value="oyo">Oyo</option>
                                <option value="plateau">Plateau</option>
                                <option value="rivers">Rivers</option>
                                <option value="sokoto">Sokoto</option>
                                <option value="taraba">Taraba</option>
                                <option value="yobe">Yobe</option>
                                <option value="zamfara">Zamfara</option>
                            </select>
                        </div>
                        <div class="input-box">
                            <input type="text" name = "occ" id="occ" placeholder="Occupation" required>
                        </div>
                        <div class="input-box">
                            <textarea name="add2" id="add2" rows="2" placeholder="Your address" required></textarea>
                        </div>
                    </div>
                    <div>
                        <button type="button" id="back1" class="hero-btn btn-box see">BACK</button>
                        <button type="button" id="next2" class="hero-btn btn-box see">NEXT</button>
                    </div>
            </section>
            <section class="sub-container" id="move3">
                <h1 class="title">Academic Information</h1>
                    <div class="part1">
                        <div class="input-box">
                            <select name="degree" id="degree" required>
                                <option value="" disabled selected hidden>--select your desired degree--</option>
                                <option value="associate">Associate Degree</option>
                                <option value="bachelor">Bachelor's Degree</option>
                                <option value="doctoral">Doctoral Degree</option>
                                <option value="master">Master's Degree</option>
                            </select>
                        </div>
                        <div class="input-box">
                            <select name = "course" id="course" required>
                                <option value="" disabled selected hidden>--select your preferred course--</option>
                                <option value="accounting">Accounting</option>
                                <option value="adult education">Adult Education</option>
                                <option value="agrobio">Agricultural & Biosystems Engineering</option>
                                <option value="agriedu">Agricultural Science & Education</option>
                                <option value="arch">Architecture</option>
                                <option value="bioeng">Biomedical Engineering</option>
                                <option value="busadmin">Business Administration</option>
                                <option value="busedu">Business Education</option>
                                <option value="chemeng">Chemical Engineering</option>
                                <option value="civeng">Civil Engineering</option>
                                <option value="comil">Common & Islamic Law</option>
                                <option value="common">Common Law</option>
                                <option value="comeng">Computer Engineering</option>
                                <option value="csc">Computer Science</option>
                                <option value="eco">Economics</option>
                                <option value="elect">Electrical / Electronic Engineering</option>
                                <option value="eng">English Language</option>
                                <option value="fin">Finance</option>
                                <option value="foodeng">Food Engineering</option>
                                <option value="fre">French</option>
                                <option value="hau">Hausa</option>
                                <option value="health">Health Education</option>
                                <option value="home">Home Economics</option>
                                <option value="igbo">Igbo</option>
                                <option value="ics">Information and Communication Science</option>
                                <option value="isl">Islamic Studies</option>
                                <option value="lis">Library and Information Science</option>
                                <option value="lin">Linguistics</option>
                                <option value="mar">Marketing</option>
                                <option value="mac">Mass Communication</option>
                                <option value="maths">Mathematics</option>
                                <option value="mech">Mechanical Engineering</option>
                                <option value="metal">Metallurgical and Material Engineering</option>
                                <option value="performing arts">Performing Arts</option>
                                <option value="physics">Physics</option>
                                <option value="primary education studies">Primary Education Studies</option>
                                <option value="telecommunication science">Telecommunication Science</option>
                                <option value="yoruba">Yoruba</option>
                            </select>
                        </div>
                        <div class="input-box">
                            <input name = "pri" type="text" id="pri" placeholder="Primary school attended..." required>
                        </div>
                        <div class="input-box">
                            <input name = "sec" type="text" id="sec" placeholder="Secondary school attended..." required>
                        </div>
                    </div>
                    
                    <div class="center">
                        <div class="form-input">
                          <div class="preview">
                            <img id="file-ip-1-preview">
                          </div>
                          <label for="file-ip-1">Upload WAEC Result</label>
                          <input type="file" name = "file-ip-1" id="file-ip-1" accept="image/*" onchange="showPreview(event);" required>
                        </div>
                    </div>
                    
                    <div>
                        <button type="button" id="back2" class="hero-btn btn-box see">BACK</button>
                        <button type="submit" id="submit" class="hero-btn btn-box see">SUBMIT</button>
                    </div>
            </section>
        </form>
    </section>
    <hr>

    <section class="footer">
        <h4>About Us</h4>
        <p>Progress without practice is dead...</p>
        <div class="social">
            <img src="img/facebook.png" alt="">
            <img src="img/twitter.png" alt="">
            <img src="img/instagram.png" alt="">
            <img src="img/linkedin.png" alt="">
        </div>
        <p>&copy Group 14 CSC 319 Project</p>
    </section>

    <!-- JavaScript for Toggle Menu -->
    <script src="main.js"></script>
    <script src="reg.js"></script>
</body>
</html>