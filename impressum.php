<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Demarlé Julianna">

    <link rel="stylesheet" href="styleImp.css">
    <title>Homepage</title>

</head>
<body>
    <header id="header">
        <div id="heading">
            <h1>RateTheFood</h1>

            <div id="loggin">
            <?php 

            if(isset($_SESSION["user"]))
            {
                $user = $_SESSION["user"]["Username"];

                echo "<a href='logout.php'>SIGN OUT</a>";
            } else {
                echo "<a href='login.php' style='margin-right: 10px;'>LOG IN </a>";
                echo "<a href='signup.php'>SIGN UP</a>";
            }

            ?>
            </div>

            <div id="links">
                <a href="index.php" style="margin-right: 10px;">GERICHTE</a>
                <a href="bestenliste.php" style="margin-right: 10px;">BESTENLISTE</a>
                <a href="#">IMPRESSUM</a>
            </div>
        </div>

        <div class="bar">
            
        </div>
    </header>

    <div id="impAndDat">

    <div id="imp">
        <h2>IMPRESSUM</h2>
        <p>• Firmawortlaut RTF - RateTheFood<br>
            • Unternehmensgegenstand Gerichte<br>
            • Firmensitz Sitz: 4154 Kollerschlag<br>
            • volle geografische Anschrift Mollmannsreith 169 | Austria<br>
            • Kontaktdaten (Tel, E-Mail) Tel: +43 XXX XXXX <br>
            E-Mail: Julianna.Demarle@tfs-haslach.at<br>
            	    Elias.Schinkinger@tfs-haslach.at<br> <br>

            Sie können allfällige Beschwerde auch an
            die oben angegebene E-Mail-Adresse richten.
        </p>
    </div>
    <div id="dat">
        <h2>DATENSCHUTZ</h2>
        <p>Datenschutzerklärung<br>
        <br>
        Wir verarbeiten Ihre personenbezogenen Daten, die unter folgende Datenkategorien fallen:<br>
        <br>
        •	Username<br>
        •	Password<br>
        •	E-Mail<br>
        <br>
        Sie haben uns Daten über sich freiwillig zur Verfügung gestellt und wir verarbeiten diese Daten auf Grundlage Ihrer Einwilligung zu folgenden Zwecken:<br>
        <br>
        •	Identifizierung des Kunden beim Liken eines Gerichtes<br>
        <br>
        Sie können diese Einwilligung jederzeit widerrufen. Ein Widerruf hat zur Folge, dass wir Ihre Daten ab diesem Zeitpunkt zu oben genannten Zwecken nicht<br>
        mehr verarbeiten und von der Datenbank löschen. Für einen Widerruf wenden Sie sich bitte an:<br>
        <br>
        Julianna.Demarle@tfs-haslach.at, Elias.Schinkinger@tfs-haslach.at<br>
        <br>
        Die von Ihnen bereit gestellten Daten sind weiters zur Vertragserfüllung bzw. zur Durchführung vorvertraglicher Maßnahmen erforderlich. Ohne diese Daten<br>
        können wir den Vertrag mit Ihnen nicht abschließen.<br>
        <br>
        Wir speichern Ihre Daten bis zum Ende des Universums<br>
        <br>
        Sie erreichen uns unter folgenden Kontaktdaten: Julianna.Demarle@tfs-haslach.at<br>
          Elias.Schinkinger@tfs-haslach.at<br>
        <br>
        Rechtsbehelfsbelehrung<br>
        Ihnen stehen grundsätzlich die Rechte auf Auskunft, Berichtigung, Löschung, Einschränkung, Datenübertragbarkeit und Widerspruch zu. Dafür wenden Sie sich<br>
        an uns. Wenn Sie glauben, dass die Verarbeitung Ihrer Daten gegen das Datenschutzrecht verstößt oder Ihre datenschutzrechtlichen Ansprüche sonst in eine<br>
        Weise verletzt worden sind, können Sie sich bei der Aufsichtsbehörde beschweren. In Österreich ist die Datenschutzbehörde zuständig.<br>
        </p>
    </div>
    </div>

    <div class="bar">
            
    </div>
</body>
</html>
