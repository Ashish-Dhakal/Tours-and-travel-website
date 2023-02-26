<?
// DB parameters
$username = "root";
$password = "";
$hostname = "localhost";

//connection to the database
$dbConnect = mysqli_connect($hostname, $username, $password,"book_db");

// another way of checking if the connection was successful
if(!$dbConnect) {
die ("Connection failed: " . mysqli_connect_error());}
else{
    echo'connection sucessfully';
}


if (isset($_POST['send'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $location = $_POST['location'];
    $guests = $_POST['guests'];
    $arrivals = $_POST['arrivals'];
    $leaving = $_POST['leaving'];
   

    $request = "insert into book_form ( name , email, phone	, address , location , guests , arrivals , leaving) values ('$name' , '$email' , '$phone' , '$address' , '$location' ,'$guests' , '$arrivals' , '$leaving')";

    mysqli_query($conn , $request);
    header('location:book.php');
}
else{
    echo'something wet wrong try again';
}








    

//echo "Connected successfully";
?>