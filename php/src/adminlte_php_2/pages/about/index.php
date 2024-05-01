<?php

require_once('../authen.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Page - Admin</title>
    <style>
    /* Add your CSS styles here */
    /* For simplicity, I'm just adding basic styling */
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 20px;
    }

    form {
        max-width: 600px;
        margin: 0 auto;
    }

    input[type="text"],
    textarea {
        width: 100%;
        padding: 10px;
        margin: 5px 0;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    input[type="submit"] {
        background-color: #4CAF50;
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        float: right;
    }

    input[type="submit"]:hover {
        background-color: #45a049;
    }
    </style>
</head>

<body>
    <h1>Edit About Page</h1>
    <form id="aboutForm">
        <label for="contactInfo">Contact Information:</label>
        <textarea id="contactInfo" name="contactInfo" rows="4" placeholder="Enter contact information..."></textarea>

        <label for="description">Description:</label>
        <textarea id="description" name="description" rows="8" placeholder="Enter description..."></textarea>

        <input type="submit" value="Save">
    </form>

    <script>
    // JavaScript for handling form submission
    document.getElementById("aboutForm").addEventListener("submit", function(event) {
        event.preventDefault(); // Prevent default form submission

        // Get form data
        var contactInfo = document.getElementById("contactInfo").value;
        var description = document.getElementById("description").value;

        // Example: You can send this data to a backend for processing using AJAX
        // Here, I'm just logging it to the console
        console.log("Contact Information:", contactInfo);
        console.log("Description:", description);

        // Here you can perform AJAX request to send data to server for processing and update the database
        // Example using fetch API:
        /*
        fetch('/updateAbout', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({
                contactInfo: contactInfo,
                description: description
            })
        })
        .then(response => response.json())
        .then(data => {
            console.log('Success:', data);
            // Optionally, you can show a success message to the user
        })
        .catch((error) => {
            console.error('Error:', error);
            // Optionally, you can show an error message to the user
        });
        */
    });
    </script>
</body>

</html>