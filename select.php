<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Dropdown Example</title>
</head>

<body>

<?php
// Attach the connection class
include("Connection.php");

// Create a database object
$dbobject = new Connection("localhost", "root", "", "company");

// Get the connection
$conn = $dbobject->getConnection();

// Select only 4 records from the users table
$sql = "SELECT id, username FROM users LIMIT 4";
$result = $dbobject->runQuery($sql);

// Debugging: Check if query executed correctly
if (!$result) {
    die("Query failed: " . $conn->error);
}

// Debugging: Check if there are rows in the result set
if ($result->num_rows === 0) {
    echo "No users found.";
} else {
?>

<!-- Create a dropdown menu -->
<label for="users">Select a User:</label>
<select name="users" id="users">
    <option value="">-- Select a User --</option>
    <?php
    while ($row = $result->fetch_assoc()) {
        echo "<option value='{$row['id']}'>{$row['username']}</option>";
    }
    ?>
</select>

<?php
}
?>

</body>
</html>
