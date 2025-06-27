<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toast Notification Example with Icons</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        .toast {
            display: none;
            position: fixed;
            bottom: 20px;
            right: 20px;
            padding: 15px;
            color: #fff;
            border-radius: 5px;
            min-width: 250px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .success { background-color: #4CAF50; }
        .error { background-color: #F44336; }
        .info { background-color: #2196F3; }
        .warning { background-color: #FF9800; }
        .icon {
            margin-right: 10px;
        }
    </style>
</head>
<body>
    <div id="toast" class="toast">
        <span id="toast-icon" class="icon"></span>
        <span id="toast-message">This is a toast notification</span>
        <button id="closeToastButton" style="background: none; border: none; color: #fff; font-weight: bold; margin-left: 10px; cursor: pointer;">&#10006;</button>
    </div>
    <button id="showSuccessToastButton">Show Success Toast</button>
    <button id="showErrorToastButton">Show Error Toast</button>
    <button id="showInfoToastButton">Show Info Toast</button>
    <button id="showWarningToastButton">Show Warning Toast</button>

    <script>
        $(document).ready(function() {
            // Function to show the toast with a specific type and icon
            function showToast(message, type, iconClass) {
                $("#toast-message").text(message);
                $("#toast-icon").attr("class", "icon " + iconClass);
                $("#toast").attr("class", "toast " + type).stop(true, true).fadeIn(400).delay(3000).fadeOut(400);
            }

            // Example of how to call the showToast function with different types
            $("#showSuccessToastButton").click(function() {
                showToast("This is a success message!", "success", "fas fa-check-circle");
            });

            $("#showErrorToastButton").click(function() {
                showToast("This is an error message!", "error", "fas fa-times-circle");
            });

            $("#showInfoToastButton").click(function() {
                showToast("This is an info message!", "info", "fas fa-info-circle");
            });

            $("#showWarningToastButton").click(function() {
                showToast("This is a warning message!", "warning", "fas fa-exclamation-circle");
            });

            // Function to close the toast
            $("#closeToastButton").click(function() {
                $("#toast").stop(true, true).fadeOut(400);
            });
        });
    </script>
</body>
</html>
