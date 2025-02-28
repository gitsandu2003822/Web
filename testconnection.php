<?php
include("connection.php"); 


if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $username = $_POST['username'];
    $password = $_POST['password']; 

 
    $dbobject = new Connection("localhost", "root", "", "company");

    
    $dbobject->getConnection();

   
    $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
    $stmt = $dbobject->runquery($sql);

    
    if ($stmt) {
        
        $stmt->bind_param("ss", $username, $password);

      
        if ($stmt->execute()) {
            echo "User inserted successfully! User ID: " . $stmt->insert_id;
        } else {
            echo "Error: " . $stmt->error;
        }

        
        $stmt->close();
    } else {
        echo "Error in preparing the query.";
    }
}
?>
