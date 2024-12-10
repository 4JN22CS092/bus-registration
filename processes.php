<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $phone = htmlspecialchars($_POST["phone"]);
    $busType = htmlspecialchars($_POST["busType"]);
    $numPassengers = htmlspecialchars($_POST["numPassengers"]);
    $date = htmlspecialchars($_POST["date"]);

    echo "
        <div>
            <h2>Registration Successful!</h2>
            <p><strong>Name:</strong> $name</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Phone:</strong> $phone</p>
            <p><strong>Bus Type:</strong> $busType</p>
            <p><strong>Number of Passengers:</strong> $numPassengers</p>
            <p><strong>Travel Date:</strong> $date</p>
        </div>
    ";
}
?>
