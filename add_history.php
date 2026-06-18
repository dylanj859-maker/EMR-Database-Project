<?php include 'db.php'; ?>

<form method="POST">
    Patient ID: <input type="number" name="patient_id"><br>
    Procedure Code: <input type="text" name="procedure_id"><br>
    Date: <input type="date" name="date"><br>
    Amount Billed: <input type="number" name="billed"><br>
    Amount Owed: <input type="number" name="owed"><br>
    Notes: <input type="text" name="notes"><br>
    <button type="submit">Add Record</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $sql = "INSERT INTO patient_history (PatientID, ProcedureID, Date, AmountBilled, AmountOwed, Notes)
            VALUES ($_POST[patient_id], '$_POST[procedure_id]', '$_POST[date]', $_POST[billed], $_POST[owed], '$_POST[notes]')";

    if ($conn->query($sql)) {
        echo "Record added!";
    }
}
?>