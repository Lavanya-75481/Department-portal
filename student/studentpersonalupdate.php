<?php
// Database connection
$dsn = "mysql:host=localhost;dbname=form";
$username = "root";
$password = "root";

try {
    $db = new PDO($dsn, $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Database error: " . $e->getMessage();
    exit;
}

if(isset($_POST["update"])) {
    // Debug output for received form data
    print_r($_POST); // Output received form data for debugging
    
    $reg_no = $_POST["reg_no"];
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $personalemail = $_POST["personalemail"];
    $highsc = $_POST["highsc"];
    $msc = $_POST["msc"];
    $secsc = $_POST["secsc"];
    $mscu = $_POST["mscu"];
    $address = $_POST["address"];
    $con_number = $_POST["con_number"];
    $year = $_POST["year"];
    $cgpa = $_POST["cgpa"];
    $fmobile = $_POST["fmobile"];
    $mmobile = $_POST["mmobile"];
    // Add other fields as needed
    
    try {
        // Query to update student record
        $stmt = $db->prepare("UPDATE register SET first_name = ?, last_name = ?,personalemail = ?, highsc = ?,msc = ?,secsc = ?, mscu = ?, address = ?, con_number = ?, year = ?, cgpa = ?, fmobile = ?, mmobile = ? WHERE reg_no = ?");
        $stmt->execute([$first_name, $last_name,$personalemail,$highsc,$msc,$secsc,$mscu, $address, $con_number, $year, $cgpa, $fmobile, $mmobile, $reg_no]); // Update other fields as needed
        
        // Check if update was successful
        if($stmt->rowCount() > 0) {
            echo "Student record updated successfully.";
        } else {
            echo "No changes were made to the student record.";
        }
    } catch(PDOException $e) {
        echo "Database error: " . $e->getMessage(); // Output any database errors for debugging
    }
}
?>

