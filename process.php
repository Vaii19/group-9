<!DOCTYPE html>
<html>
<head>
  <title>Form Result</title>
</head>
<body>
  <h1>Form Submission Result</h1>
<?php 
if (!isset($_POST['good'])){
    echo"No data summited.";
}else{
$errors = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = $_POST['fname'] ?? '';
    $lname = $_POST['lname'] ?? '';
    $father = $_POST['father'] ?? '';
    $day = $_POST['day'] ?? '';
    $month = $_POST['month'] ?? '';
    $year = $_POST['year'] ?? '';
    $mobile = $_POST['mobile'] ?? '';
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';
    $gender = $_POST['gender'] ?? '';
    $department = $_POST['department'] ?? [];
    $course = $_POST['course'] ?? '';
    $city = $_POST['city'] ?? '';
    $address = $_POST['address'] ?? '';

    
    if (empty($fname)) $errors[] = "First name is required.";
    if (empty($lname)) $errors[] = "Last name is required.";
    if (empty($father)) $errors[] = "Father is required.";
    if (empty($day)) $errors[] = "Day is required.";
    if (empty($month)) $errors[] = "Month is required.";
    if (empty($year)) $errors[] = "Year is required.";
    if (empty($mobile)) $errors[] = "Mobile is required.";
    if (empty($email)) $errors[] = "Email is required.";
    if (empty($password)) $errors[] = "Password is required.";
    if (empty($gender)) $errors[] = "Gender is required.";
    if (empty($course)) $errors[] = "Course is required.";
    if (empty($city)) $errors[] = "City is required.";
    if (empty($address)) $errors[] = "Address is required.";

    if (!empty($errors)) {
        echo "<div style='color: red;'>";
        foreach ($errors as $err) {
            echo "$err<br><br>";
        }
        echo "</div><br>";
    }

    echo "<strong>Name:</strong> $fname $lname<br>";
    echo "<strong>Father's Name:</strong> $father<br>";
    echo "<strong>DOB:</strong> $day-$month-$year<br>";
    echo "<strong>Mobile:</strong> +95-$mobile<br>";
    echo "<strong>Email:</strong> $email<br>";
    echo "<strong>Gender:</strong> $gender<br>";
    echo "<strong>Course:</strong> $course<br>";
    echo "<strong>City:</strong> $city<br>";
    echo "<strong>Address:</strong> $address<br>";
    if (empty($_POST['department'])) {
        echo "<div style='color: red;'>";
                echo "<p>No department selected.</p>";}
}
}
?>
</body>
</html>