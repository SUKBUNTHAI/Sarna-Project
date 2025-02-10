<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Webcam Access</title>
</head>

<body>
    <h2>Webcam Stream</h2>
    <video id="webcam" width="640" height="480" autoplay></video>

    <script>
        // Access the webcam
        navigator.mediaDevices.getUserMedia({
                video: true
            })
            .then(function(stream) {
                // Get the video element
                const videoElement = document.getElementById('webcam');

                // Set the video element's srcObject to the stream from the webcam
                videoElement.srcObject = stream;
            })
            .catch(function(error) {
                // Handle any errors
                console.error('Error accessing webcam:', error);
            });
    </script>
</body>

</html>