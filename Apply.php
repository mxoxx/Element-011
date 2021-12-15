<?php
$servername="localhost";
$username="root";
$password="";
$database_name="register";

$conn=mysqli_connect($servername, $username, $password, $database_name);

if(!$conn)
{
    die("Connection Failed: " . mysqli_connect_error());

}

if(isset($_POST['save']))
{
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $job_description = $_POST['job_description'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];


    $sql_query = "INSERT INTO apply (first_name,last_name,email,job_description,phone,gender)
    VALUES ('$first_name','$last_name','$email','$job_description', '$phone', '$gender')";

    if (mysqli_query($conn, $sql_query))
    {
        echo "You have applied! You will be contacted for an interview in 3-5 working days.";
        
    }
    else
    {
        echo "Error: " . $sql . "" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>
