<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <div class="logo">
        <img src="./flat-color-icons_reading.png">
    </div>

    <header class="header">
        Sign In
    </header>
    <div class="sign-in">
    <form action="login_process.php" method="POST">
        <input type="email" name="email" placeholder="Email" required><br>
        <input type="password" name="password" placeholder="Password" required><br>
        <div>
            <input type="submit" value="Log in" class="button">
        </div>
        <a href="./register.php"><p>Don't have an account? Create one here</p></a>
    </form>
    </div>
    <script>
        // Wait for the document to be ready
$(document).ready(function() {
    // Attach a submit event handler to the login form
    $("form").submit(function(event) {
        event.preventDefault(); // Prevent the default form submission

        // Get user credentials from the form
        const email = $("input[name='email']").val();
        const password = $("input[name='password']").val();

        // Perform user authentication
        $.ajax({
            method: "POST",
            url: "login_process.php", // The PHP script to handle authentication
            data: { email: email, password: password },
            success: function(response) {
                if (response === "success") {
                    // Authentication was successful, fetch user progress
                    fetchUserProgressAndSetButtons();
                } else {
                    // Authentication failed, show an error message
                    alert("Authentication failed. Please check your credentials.");
                }
            }
        });
    });

    // Function to fetch user progress and update buttons
    function fetchUserProgressAndSetButtons() {
        // Make an AJAX request to fetch user progress
        $.ajax({
            method: "POST",
            url: "fetch_progress.php", // Create this file to fetch progress
            success: function(response) {
                const userProgress = JSON.parse(response);
                updateButtonStates(userProgress);
            }
        });
    }

    // Function to update button states based on user progress
    function updateButtonStates(userProgress) {
        // Your code to update button states based on user progress
        // For example, add a "clicked" class to buttons representing completed chapters
    }
});

// Attach a submit event handler to the login form
$("form").submit(function(event) {
    event.preventDefault(); // Prevent the default form submission

    // Get user credentials from the form
    const email = $("input[name='email']").val();
    const password = $("input[name='password']").val();

    // Perform user authentication
    $.ajax({
        method: "POST",
        url: "login_process.php", // The PHP script to handle authentication
        data: { email: email, password: password },
        success: function(response) {
            const result = JSON.parse(response);
            if (result.status === "success") {
                // Authentication was successful, fetch user progress
                fetchUserProgressAndSetButtons();
            } else {
                // Authentication failed, show an error message
                alert("Authentication failed. Please check your credentials.");
            }
        }
    });
});

// ...

    </script>
</body>
</html>

