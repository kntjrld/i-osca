<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/404.css">
    <link rel="stylesheet" href="../css/404.css">
    <link rel="stylesheet" href="404.css">

</head>

<body>
    <div class="container">
        <div class="copy-container center-xy">
            <p class="animate"></p>
            <!-- <span style="font-size:12px;"class="countdown">You will redirect to homapage in</br><span id="seconds"></span></span> -->
            <span style="font-size:12px;">May i know what are you looking? :)</span>

        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <script>
    //  typed animation
    var typed = new Typed('.animate', {
        strings: ["", "404, page not found."],
        typeSpeed: 60,
        loop: false,
        showCursor: false
    });

    timeLeft = 10;
    function countdown() {
        var path = window.location.index.php;
        var pageName = path.substr(path.lastIndexOf('/') + 1);
        timeLeft--;
        document.getElementById("seconds").innerHTML = String(timeLeft);
        if (timeLeft > 0) {
            setTimeout(countdown, 1000);
        }else{
            setInterval(function() {
                    window.location = "../index";
                }, 100);
        }
    };
    setTimeout(countdown, 1000);
    </script>
</body>

</html>