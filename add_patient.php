<?php include 'db.php'; ?>

<form method="POST">
    Name: <input type="text" name="name"><br>
    DOB: <input type="date" name="dob"><br>
    Address: <input type="text" name="address"><br>
    Phone: <input type="text" name="phone"><br>
    Email: <input type="text" name="email"><br>
    Insurance: <input type="text" name="insurance"><br>
    <button type="submit">Add Patient</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $sql = "INSERT INTO patients (Name, DOB, Address, Phone, Email, Insurance)
            VALUES ('$_POST[name]', '$_POST[dob]', '$_POST[address]', '$_POST[phone]', '$_POST[email]', '$_POST[insurance]')";

    if ($conn->query($sql)) {
        echo "Patient added!";
    }
}
?>