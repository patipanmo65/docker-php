<?php

require_once('connect.php');

if (isset($_POST['submit'])) {

    $pj_name = isset($_POST['pj_name']) ? mysqli_real_escape_string($conn, $_POST['pj_name']) : '';
    $description = isset($_POST['description']) ? mysqli_real_escape_string($conn, $_POST['description']) : '';

    if (empty($pj_name)) {
        echo "Project name is required";
        exit();
    }

    $sql = "INSERT INTO projects (name, description) 
            VALUES (?, ?)";

    $stmt = mysqli_prepare($conn, $sql);
    if ($stmt === false) {
        echo "Error: " . mysqli_error($conn);
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ss", $pj_name, $description);

    if (mysqli_stmt_execute($stmt)) {
        header('Location: ../');
        exit();
    } else {
        echo "Error: " . mysqli_error($conn);
        echo "<br>";
        echo "Failed to insert data";
    }

    mysqli_stmt_close($stmt);
} else {
    echo "Please fill out the form and submit it";
}

mysqli_close($conn);
