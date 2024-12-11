<?php
// RGB color definition
$rgbColorStart = "rgb(255, 0, 102)"; // Start color (Pinkish)
// Base64 image string
$base64Image = "data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAUA\nAAAFCAYAAACNbyblAAAAHElEQVQI12P4\n//8/w38GIAXDIBKE0DHxgljNBAAO\n9TXL0Y4OHwAAAABJRU5ErkJggg=="; // Sample image
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

        .image-container {
            text-align: center;
            margin-top: 20px;
        }

        .image-container img {
            max-width: 800px;
            height: auto;
        }
    </style>
</head>
<body>
    <div class="cute-text">
        MOO DENG IS CUTE !!!
    </div>
    <div class="image-container">
    </div>
</body>
</html>