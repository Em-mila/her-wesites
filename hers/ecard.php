<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A Lil Messages</title>
    <style>
        body {
            background-color: #6f4e37; /* Coffee-like background color */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            padding: 20px;
            border: 10px solid #d2b48c; /* Border color resembling paper */
            background-color: #fff; /* Paper color */
            border-radius: 20px; /* Rounded corners for paper effect */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .flip-card {
            background-color: transparent;
            width: 300px;
            height: 200px;
            perspective: 1000px; /* Remove this if you don't want the 3D effect */
            margin: auto;
            margin-top: 50px;
            overflow: hidden; /* Ensure border is visible */
        }

        .flip-card-inner {
            position: relative;
            width: 100%;
            height: 100%;
            text-align: center;
            transition: transform 0.8s;
            transform-style: preserve-3d;
        }

        .flip-card:hover .flip-card-inner {
            transform: rotateY(180deg);
        }

        .flip-card-front, .flip-card-back {
            position: absolute;
            width: 100%;
            height: 100%;
            -webkit-backface-visibility: hidden; /* Safari */
            backface-visibility: hidden;
        }

        .flip-card-front {
            background-color: #bbb;
            color: black;
        }

        .flip-card-back {
            background-color: #d8ab7d;
            color: #563517;
            transform: rotateY(180deg);
        }

        p { 
            line-height: 6px;
        }

        .sunflowers {
            display: flex;
            justify-content: center;
            margin-top: 50px;
            padding: 20px;
        }

        .sunflower {
            width: 100px;
            height: auto;
            animation: moveSunflower 5s linear infinite;
        }

        @keyframes moveSunflower {
            0% {
                transform: rotate(0deg);
            }
            50% {
                transform: rotate(360deg);
            }
            100% {
                transform: rotate(0deg);
            }
        }
        nav li{
    list-style: none;
    display: inline-block;
}

    nav li a {
    text-size-adjust: 20%;
    color:#ebfae0;
    text-decoration: none;
    font-size: 20px;
    opacity: 0.6;
    transition: 0.3s;
}
nav li a:hover {
    opacity: 1;
}
    </style>
</head>
<body>
<nav>
    <ul>
      <li><a href="lover.php">Back Home</a></li>
    </ul>
    <div class="container">
        <div class="flip-card">
            <div class="flip-card-inner">
                <div class="flip-card-front">
                    <img src="img/eyes.jpeg" alt="Avatar" style="width:100%;height:100%;">
                </div>
                <div class="flip-card-back">
                    <h1>My cute girlfriend</h1> 
                    <p>@Ftrfbrna_</p> 
                    <p>Remember this song? haha &#9825;</p>
                    <p>I'm sorry ya di awalnya sok imut</p>
                    <p>Hope you like our mini sptify haha&#9786;</p>
                    <p>i love you&#10084;</p>
                </div>
            </div>
        </div>

        <div class="sunflowers">
            <img src="img/sunflower-img.webp" alt="Sunflower" class="sunflower">
            <img src="img/sunflower-img.webp" alt="Sunflower" class="sunflower">
            <img src="img/sunflower-img.webp" alt="Sunflower" class="sunflower">
        </div>
        
        <audio controls>
            <source src="pink-chrysanthemums.m4a" type="audio/mp4">
            <!-- You can add additional source elements for different file formats -->
            <!-- For example: <source src="your-audio-file.ogg" type="audio/ogg"> -->
            Your browser does not support the audio element.
        </audio>
    </div>
</body>
</html>
