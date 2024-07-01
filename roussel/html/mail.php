<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Claire Roussel : Avocate au barreau de Nice</title>
    <meta name="description" content="Claire Roussel : Avocate au Barreau de Nice. Vous trouverez ici toutes les informations relatives à mon activité avant de me contacter">

    <!-- <link rel="icon" href="../assets/favicon-32x32.png" /> -->
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/style.css">
    <!-- <link rel="stylesheet" href="../css/cards.css"> -->
    <link rel="stylesheet" href="../css/responsive.css" />
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,600,600i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cormorant+SC:300,400,500,600,700&display=swap" rel="stylesheet">
    <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">
</head>

<body>
    <div class="container" id="top-page">
        <header data-aos="fade-right" data-aos-duration="1500">
                <nav>
                    <ul>
                        <img class="logo-menu" src="../assets/logoCR.jpg" alt="">
                        <li class="menu__item"><a href="#lecabinet">Le cabinet</a></li>
                        <li class="menu__item"><a href="#mesdomaines">Domaines d'expertises</a></li>
                        <li class="menu__item"><a href="#meshonoraires">Honoraires</a></li>
                        <li class="menu__item"><a href="#contactezmoi">Contactez-moi</a></li>
                    </ul>
                </nav>
            </div>
        </header>

        <main>
            <section class="animation-background" data-aos="zoom-in" data-aos-duration="1500">
                <h2 class="animation-h1" data-aos="fade-down" data-aos-duration="1500">Claire Roussel</h2>
                <p class="animation-type" data-aos="fade-up" data-aos-duration="1500"><span class="typed-text">
                </span><span class="cursor">&nbsp;</span></p>
                </p>
            </section>
    <?php
    if (isset($_POST['message'])) {
        $position_arobase = strpos($_POST['email'], '@');
        $entete  = 'MIME-Version: 1.0' . "\r\n";
        $entete .= 'Content-type: text/html; charset=utf-8' . "\r\n";
        $entete .= 'From: ' . $_POST['email'] . "\r\n";

        $message = '<p>Message envoyé depuis la page Contact de cannaux-avocat.fr</p>
        <p><b>Nom : </b>' . $_POST['nom'] . '<br>
        <b>Email : </b>' . $_POST['email'] . '<br>
        <b>Telephone : </b>' . $_POST['telephone'] . '<br><br>
        <b>Message : </b>' . $_POST['message'] . '</p>';

            $retour = mail('cannaux.avocat@gmail.com', 'Envoi depuis la page Contact', $message, $entete);
        }
    ?>

<footer class="footer">
            <p class="paragraphe-footer">&copy; Site internet créé par <a class="lien-footer-nom" href="https://www.linkedin.com/in/benjaminstraub-web/" alt="linkedin-Benjamin-Straub">Benjamin Straub</a> - Tous droits réservés</p>
            <a class="lien-footer" href="mentionslegales.php" alt="mentions-légales">Mention légales</a>
            <br>
            <a class="lien-footer" href="#top-page" alt="haut-de-page">Revenir en haut de la page</a>
        </footer>
    </div>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="../js/typing.js"></script>
    <script src="../js/cards.js"></script>
    <script src="../js/AOS.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>AOS.init();</script>
    <script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
</body>
</html>
