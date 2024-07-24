<?php
$connection = mysqli_connect("localhost", "myadmin", "Tejasri@44!22", "hello", 3306);

if ($connection) {
    // echo "Connection successful";
} else {
    die("Connection failed: " . mysqli_connect_error());
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

    echo "Name: $name<br>";
    echo "Email: $email<br>";
    echo "Phone: $phone<br>";
    echo "Address: $address<br>";
    echo "Location: $location<br>";
    echo "Guests: $guests<br>";
    echo "Arrivals: $arrivals<br>";
    echo "Leaving: $leaving<br>";

     // Prepare the SQL statement
     $request = $connection->prepare("INSERT INTO book_form (name, email, phone, address, location, guests, arrivals, leaving) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
     $request->bind_param("ssssssss", $name, $email, $phone, $address, $location, $guests, $arrivals, $leaving);
 
     // Execute the statement
     if ($request->execute()) {
         header("Location: book.php");
         exit();
     } else {
         echo "Error: " . $request->error;
     }

} else {
    echo 'Form not submitted correctly.';
}

$connection->close();
?>
