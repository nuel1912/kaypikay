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

