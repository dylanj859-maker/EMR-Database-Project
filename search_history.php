<?php include 'db.php'; ?>

<form method="GET">
    <input type="number" name="id" placeholder="Enter Patient ID">
    <button type="submit">Search</button>
</form>

<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "SELECT * FROM patient_history WHERE PatientID = $id";
    $result = $conn->query($sql);

    while ($row = $result->fetch_assoc()) {
        echo "Procedure: " . $row['ProcedureID'] . "<br>";
        echo "Date: " . $row['Date'] . "<br>";
        echo "Billed: $" . $row['AmountBilled'] . "<br>";
        echo "Owed: $" . $row['AmountOwed'] . "<br>";
        echo "Notes: " . $row['Notes'] . "<br><br>";
    }
}
?>