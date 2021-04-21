<DOCTYPE html>
<html>
        <head>
                <title>TEST CONNEXION PHP</title>
                <meta charset="utf-8">
        </head>
        <body>
                <h1>Ma base de données MySQL</h1>
                <?php
                        $servername='localhost';
                        $username='root';
                        $password='mot_de_passe_de_votre_compte_root';
                        $conn = new mysqli($servername,$username,$password);

                        if($conn->connect_error){
                                die('Erreur: ' .$conn->connect_error);

                        }
                        echo 'Connexion reussie';
        </body>
</html>
