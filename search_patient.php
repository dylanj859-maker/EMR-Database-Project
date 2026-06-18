<?php include 'db.php'; ?>

<form method="GET">
    <input type="text" name="name" placeholder="Enter patient name">
    <button type="submit">Search</button>
</form>

<?php
if (isset($_GET['name'])) {
    $name = $_GET['name'];
    $sql = "SELECT * FROM patients WHERE Name LIKE '%$name%'";
    $result = $conn->query($sql);

    while ($row = $result->fetch_assoc()) {
        echo "ID: " . $row['PatientID'] . "<br>";
        echo "Name: " . $row['Name'] . "<br>";
        echo "DOB: " . $row['DOB'] . "<br>";
        echo "Email: " . $row['Email'] . "<br><br>";
    }
}
?>