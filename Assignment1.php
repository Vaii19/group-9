<!DOCTYPE html>
<html>
<head>
    <title>Student Registration Form</title>
    <style>
        input[type="text"].short-input {
            width: 50px;
        }
    </style>
</head>
<body>
    <h1>Student Registration Form</h1>
    <form method="post" action="validations.php">
        <input type="hidden" name="good" value=" Hello">

        Student name: 
        <input type="text" name="fname" placeholder="First Name"> -
        <input type="text" name="lname" placeholder="Last Name"><br><br>

        Father's name: 
        <input type="text" name="father"><br><br>

        Date of birth:
        <input type="text" name="day" placeholder="Day" class="short-input">
        <input type="text" name="month" placeholder="Mon" class="short-input">
        <input type="text" name="year" placeholder="Year" class="short-input">
        (DD-MM-YYYY)<br><br>

        Mobile no.: +95 -
        <input type="text" name="mobile"><br><br>

        Email:
        <input type="email" name="email"><br><br>

        Password:
        <input type="password" name="password"><br><br>

        Gender:
        <input type="radio" name="gender" value="Male"> Male
        <input type="radio" name="gender" value="Female"> Female<br><br>

        Department:<br>
        <input type="checkbox" name="department[]" value="English"> English
        <input type="checkbox" name="department[]" value="Computer"> Computer
        <input type="checkbox" name="department[]" value="Business"> Business<br><br>

        Course:
        <select name="course">
            <option value="">Select Course</option>
            <option value="Web">HTML/CSS</option>
            <option value="Mobile">AI</option>
            <option value="Data">PHP</option>
        </select><br><br>

        City:
        <input type="text" name="city"><br><br>

        Address:<br>
        <textarea name="address" rows="4" cols="30"></textarea><br><br>

        <input type="submit" value="Register">
    </form>
</body>
</html>
