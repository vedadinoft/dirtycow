
<?php
// RGB color definition
$rgbColorStart = "rgb(255, 0, 102)"; // Start color (Pinkish)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MOO DENG IS CUTE</title>
    <style>
        @keyframes rgb-run {
            0% {
                color: rgb(255, 0, 102); /* Pinkish */
            }
            25% {
                color: rgb(255, 255, 0); /* Yellow */
            }
            50% {
                color: rgb(0, 255, 0); /* Green */
            }
            75% {
                color: rgb(0, 255, 255); /* Cyan */
            }
            100% {
                color: rgb(255, 0, 102); /* Back to Pinkish */
            }
        }

        .cute-text {
            font-size: 2em;
            font-weight: bold;
            animation: rgb-run 2s infinite;
            text-align: center;
            margin-top: 20%;
        }
    </style>
</head>
<body>
    <div class="cute-text">
        MOO DENG IS CUTE
    </div>
</body>
</html>