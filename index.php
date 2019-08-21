<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link type="text/css" rel="stylesheet" href="css/style.css">
    <title>Seniga's Project</title>
</head>
<body>
    <div class="loader-div">
        <img src="img/loader.gif" id="loader">
    </div>

<section>
    <div class="round_one">
            <a href="index.php" class="link_class">Web Owner</a>
    </div>

        <div class="topnav">
            <ul>
                <li>
                    <a href="#" class="active">Home</a>
                </li>
                <li>
                    <a href="about.php" >About</a>
                </li>
                <li>
                    <a href="contact.php">Contact</a>
                </li>
            </ul>
        </div>

        <div class="ocean_holidays">
            <h2><span class="holi">Ocean</span> <br> <span class="ocean">Holidays</span></h2>
        </div>

        <div class="text_container">
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing 
            elit. Voluptatibus fugiat saepe rem facilis provident 
            quae iusto doloribus distinctio. Adipisci et molestiae </p>
            <br>
            <button class="btn">View</button>
        </div>


        <div class="main">
            <img src="img/main1.png" class="main-img">
        </div>

        <div class="parent-div">
            <div></div>
            <div></div>
            <div></div>
        </div>
        

</section>



<script>
var loader = document.getElementById("loader");

window.addEventListener("load", function(){
    loader.style.height = "100px";

    loader.style.width = "100px";

    loader.style.borderRadius = "100%";

    loader.style.transition = "2.0s";

    loader.style.visibility = "hidden";
});

</script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.min.js"></script>
</body>
</html>