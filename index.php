<?php 
include("includes/config.php");
if(isset($_SESSION['userLoggedIn'])) {
    $userLoggedIn = $_SESSION['userLoggedIn'];
}
else {
    header("Location: register.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
  
    <link href='https://fonts.googleapis.com/css?family=Workbench' rel='stylesheet'>    
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
    <div id="nowPlayingBarContainer">
        <div id="nowPlayingBar">
            <div id="nowPlayingLeft">
                <div class="content">
                    <span class="albumLink">
                        <img class="albumArtwork" src="https://img.freepik.com/premium-photo/painting-woman-with-colorful-scarf-her-head_860540-24.jpg?w=740" alt="">
                    </span>
                    <div class="trackInfo">
                        <span class="trackName">
                            <span>Song Name</span>

                        </span>
                        <span class="artistName">
                            <span>Artist</span>

                        </span>
                    </div>
                </div>
            </div>
            <div id="nowPlayingCenter">
                <div class="content playerControls">
                    <div class="buttons">
                        <!-- title gula dei nai lagle dibo -->
                        <button class="controlButton shuffle" >
                            <img src="assets/images/icons/shuffle.png" alt="shuffle button">
                        </button>
                      
                        <button class="controlButton previous" >
                            <img src="assets/images/icons/previous.png" alt="shuffle button">
                        </button>
                        <button class="controlButton play" >
                            <img src="assets/images/icons/play.png" alt="shuffle button">
                        </button>
                        <button class="controlButton pause" style="display:none;" >
                            <img src="assets/images/icons/pause.png" alt="shuffle button">
                        </button>
                        <button class="controlButton next" >
                            <img src="assets/images/icons/next.png" alt="shuffle button">
                        </button>
                        <button class="controlButton repeat" >
                            <img src="assets/images/icons/repeat.png" alt="shuffle button">
                        </button>

                    </div>

                    <div class="playbackBar">
                        <span class="progressTime current">0.00</span>
                        <div class="progressBar">
                            <div class="progressBar">
                                <div class="progressBarBg">
                                    <div class="progress"></div>
                                </div>
                            </div>
                        </div>
                        <span class="progressTime remaining">0.00</span>
                    </div>
                     


                </div>

            </div>
            <div id="nowPlayingRight">
                <div class="volumeBar">
                    <button class="controlButton volume" title="Volume button">
                        <img src="assets/images/icons/volume.png" alt="volume">
                    </button>
                    <div class="progressBar">
                                <div class="progressBarBg">
                                    <div class="progress"></div>
                                </div>
                    </div>
                </div>


            </div>

        </div>


    </div>
    
</body>
</html>