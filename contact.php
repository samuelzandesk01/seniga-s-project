<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link type="text/css" rel="stylesheet" href="css/style.css">
    <link type="text/css" rel="stylesheet" href="css/main.css">
    <link type="text/css" rel="stylesheet" href="css/font-awesome.min.css">

    <title>Seniga's Project</title>
</head>
<body class="body-path">



    <div class="round_one">
            <a href="index.php" class="link_class">Web Owner</a>
    </div>

        <div class="topnav">
            <ul>
                <li>
                    <a href="index.php" >Home</a>
                </li>
                <li>
                    <a href="about.php" >About</a>
                </li>
                <li>
                    <a href="contact.php" class="active">Contact</a>
                </li>
            </ul>
        </div>

<!-- 
        <form action="">
            <h2>Contact Us</h2>
            <input type="text" placeholder="First Name** ">
            <br><br>
            <input type="text" placeholder="Last Name** ">
            <br><br>
            <input type="text" placeholder="Email**">
            <br><br><br>
            <button class="btn">Send</button>
        </form> -->


        <form>
        <h1>Should you have any questions, please do not hesitate to contact me :</h1>
        
    <div class="contentform">
        <div id="sendmessage"> Your message has been sent successfully. Thank you. </div>


        <div class="leftcontact">
                  <div class="form-group">
                    <p>Surname<span>*</span></p>
                    <span class="icon-case"><i class="fa fa-male"></i></span>
                        <input type="text" name="nom" id="nom" data-rule="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Nom' doit être renseigné."/>
                <div class="validation"></div>
       </div> 

            <div class="form-group">
            <p>Company <span>*</span></p>
            <span class="icon-case"><i class="fa fa-home"></i></span>
                <input type="text" name="society" id="society" data-rule="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Société' doit être renseigné."/>
                <div class="validation"></div>
            </div>

            <div class="form-group">
            <p>Company Address <span>*</span></p>
            <span class="icon-case"><i class="fa fa-location-arrow"></i></span>
                <input type="text" name="adresse" id="adresse" data-rule="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Adresse' doit être renseigné."/>
                <div class="validation"></div>
            </div>

            <div class="form-group">
            <p>Postcode <span>*</span></p>
            <span class="icon-case"><i class="fa fa-map-marker"></i></span>
                <input type="text" name="postal" id="postal" data-rule="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Code postal' doit être renseigné."/>
                <div class="validation"></div>
            </div>  



    </div>

    <div class="rightcontact">  

            <div class="form-group">
            <p>City <span>*</span></p>
            <span class="icon-case"><i class="fa fa-building-o"></i></span>
                <input type="text" name="ville" id="ville" data-rule="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Ville' doit être renseigné."/>
                <div class="validation"></div>
            </div>  

            <div class="form-group">
            <p>Phone number <span>*</span></p>  
            <span class="icon-case"><i class="fa fa-phone"></i></span>
                <input type="text" name="phone" id="phone" data-rule="maxlen:10" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Téléphone' doit être renseigné. Minimum 10 chiffres"/>
                <div class="validation"></div>
            </div>

            <div class="form-group">
            <p>Function <span>*</span></p>
            <span class="icon-case"><i class="fa fa-info"></i></span>
                <input type="text" name="fonction" id="fonction" data-rule="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Fonction' doit être renseigné."/>
                <div class="validation"></div>
            </div>

            <div class="form-group">
            <p>Subject <span>*</span></p>   
            <span class="icon-case"><i class="fa fa-comment-o"></i></span>
                <input type="text" name="sujet" id="sujet" data-rule="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Sujet' doit être renseigné."/>
                <div class="validation"></div>
            </div>
        
            <div class="form-group">
            <p>Message <span>*</span></p>
            <span class="icon-case"><i class="fa fa-comments-o"></i></span>
                <textarea name="message" rows="14" data-rule="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Message' doit être renseigné."></textarea>
                <div class="validation"></div>
            </div>  
    </div>
    </div>
<button type="submit" class="bouton-contact">Send</button>
    
</form> 






<footer class="footer">

    <div>
        <p>&copy All Right Resevered <a href="#" class="footer-link">Lorem Ipsum</a></p>
    </div>

</footer>
<!-- kauhoot.it
seniga_ekb
488313 -->
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.min.js"></script>
</body>
</html>