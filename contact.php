<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Granny Smith</title>
    <script src="https://kit.fontawesome.com/784f68a03c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" />
</head>
<body>
    <header>
        
        <nav >
            <!-- Menu principal -->
            <div class="menu-logo">
                <a href="index.html" ><img src="public/assets/logo.png" alt="logo_granny_smith"></a>
            </div>
            <!-- Bouton Contact -->
            <div class="menu-links">
                <ul>
                   
                    <li><a href="index.html">Accueil</a></li>
                    <li><a href="carte.html">Notre carte jounalière</a></li>
                    <li><a href="traiteur.html">Traiteur</a></li>
                    <li>
                        <a href="contact.php" title="Me contacter pour plus d'informations">Me contacter</a>
                    </li>
                    
                </ul>
            </div>
            <div class="menu-mobile" style="display: none;">
                <div class="menu-links-mobile">
                    <ul>
                       
                        <li><a href="index.html">Accueil</a></li>
                        <li><a href="carte.html">Notre carte jounalière</a></li>
                        <li><a href="traiteur.html">Traiteur</a></li>
                        <li>
                            <a href="contact.php" title="Me contacter pour plus d'informations">Me contacter</a>
                        </li>
                        
                    </ul>
                </div>
            </div>
        </nav>

    </header>

    <section id="contact">
        <div class="wrapper" data-aos="flip-up" data-aos-duration="1000">
            <div class="container-grid">
                <div class="container-content">
                    <h1>Contact</h1>
                    <p class="title">
                        N'hésitez pas à nous contacter, nous sommes à votre disposition pour
                        plus d'informations.
                    </p>
                    <div class="content">
                        <div class="me">
                            <i class="fa-sharp fa-solid fa-building" style="color: rgb(255, 167, 38);"></i>
                            <p><a href="https://www.google.com/maps/dir//4+Rue+Louis+Revon,+74000+Annecy/@45.9039912,6.0480287,12
                                z/data=!4m8!4m7!1m0!1m5!1m1!1s0x478b8ff1b2df5441:0x6ac1f1543c7ed57b!2m2!1d6.1304326!2d45.9040218?
                                entry=ttu" style="color: #26962a;">Granny Smith and Co</a></p>
                        </div>
                        <div class="mail">
                            <i class="fa-solid fa-envelope" style="color: rgb(255, 167, 38);"></i>
                            <p><a href="mailto:contact@grannysmithandco.com" style="color: #26962a;">contact@grannysmithandco.com</a></p>
                        </div>
                        <div class="home">
                            <i class="fa-solid fa-phone" style="color: rgb(255, 167, 38);"></i>
                            <p><a href="tel:0950141167" style="color: #26962a;">(+33) 9 50 14 11 67</a></p>
                        </div>
                        <div class="tel">
                            <i class="fa-solid fa-house scale-90" style="color: rgb(255, 167, 38);"></i>
                            <p><a href="https://www.google.com/maps/dir//4+Rue+Louis+Revon,+74000+Annecy/@45.9039912,6.0480287,12z/
                                data=!4m8!4m7!1m0!1m5!1m1!1s0x478b8ff1b2df5441:0x6ac1f1543c7ed57b!2m2!1d6.1304326!2d45.9040218?entr
                                y=ttu" style="color: #26962a;">4 rue Louis Revon
                                74000 Annecy</a></p>
                        </div>
                    </div>
                </div>
                <div class="container-form">
                    <form class="" action="contact.php" method="POST">
                        <p class="info-contact">Email *</p>
                        <input type="email" name="email" placeholder="Votre email" required />
                        <p class="info-contact">Sujet *</p>
                        <input type="text" name="subject" placeholder="Sujet du message" required />
                        <p class="info-contact">Message *</p>
                        <input class="message" type="text" name="message" placeholder="Votre message" />
                        <button type="submit" name="send" title="Envoyer votre message">
                            Envoyer <span class="material-symbols-outlined"> send </span>
                        </button>
                    </form>
                <!-------------- PhpMAiler -------------->
                <?php 
                use PHPMailer\PHPMailer\PHPMailer; 
                use PHPMailer\PHPMailer\Exception; 

                require 'PHPMailer/src/Exception.php'; 
                require 'PHPMailer/src/PHPMailer.php'; 
                require 'PHPMailer/src/SMTP.php'; 

                if (isset($_POST["send"])) {
                    $mail = new PHPMailer(true); 
                    $mail->isSMTP(); 
                    $mail->Host = 'ssl0.ovh.net'; 
                    $mail->SMTPAuth = true; 
                    $mail->Username = 'contact@grannysmithandco.com'; 
                    $mail->Password = 'Granny.Smith31.b82326a98';
                    $mail->SMTPSecure = 'tls'; 
                    $mail->Port = 993; 
                    $mail->setFrom('contact@grannysmithandco.com'); 
                    $mail->addAddress('contact@grannysmithandco.com'); 
                    $mail->isHTML(true); 
                    $mail->Subject = $_POST["subject"] . " - Site vitrine Granny Smith"; 
                    $mail->Body = "<br /><br />De : " . $_POST["email"] . "<br /><br />" . $_POST["message"]; 
                    $mail->isHTML(true); 
                    $mail->send();

                    unset($_POST['subject']);
                    unset($_POST['message']);
                    unset($_POST['email']);

                    echo "<script>alert('Message sent successfully to Granny Smith !');</script>";
                } 
              ?>
                </div>
                <!-------------- PhpMAiler -------------->
            </div>
        </div>
    </section>
    <footer>
        <p>Site créé par <a href="https://www.linkedin.com/in/eliot-giraud-039119263/?originalSubdomain=fr" target="_blank" title="LinkedIn Eliot GIRAUD">Eliot GIRAUD</a> | &copy;
            2024 Tous droits réservés</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>
</html>