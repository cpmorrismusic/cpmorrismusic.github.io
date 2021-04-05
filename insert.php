<?php
$nameField = $_POST['nameField'];
$email = $_POST['emailField'];

if (!empty($nameField) || !empty($email)) {
    $host = "localhost:3306";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "chrissic_contactInfo";

    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

    if (mysqli_connect_error()) {
        die('Connect Error('. mysqli_connect_error().')'. mysqli_connect_error());
    } else {
        $SELECT = "SELECT email From download_history Where email = ? Limit 1";
        $INSERT = "INSERT Into download_history (nameField, email) values(?, ?)";

        $stmt = $conn->prepare($SELECT);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->bind_result($email);
        $stmt->store_result();
        $rnum = $stmt->num_rows;

        if ($rnum==0) {
            $stmt->close();

            $stmt = $conn->prepare($INSERT);
            $stmt->bind_param("ss", $nameField, $email);
            $stmt->execute();
            echo "Thank you!";
        } else {
            echo "You have already entered your information."
        }
        $stmt->close();
        $conn->close();
    }
} else {
    echo "All fields are required";
    die();
}
?>