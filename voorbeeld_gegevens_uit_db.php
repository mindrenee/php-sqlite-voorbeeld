<html>
    <header>

    </header>
    <body>

        <?php

            echo "Hallo";
            // Maak connectie met de voorbeeld database
            // Deze database zit in het bestand voorbeeld.db
            $db = new PDO("sqlite:voorbeeld.db");
            echo $db;
            

            // Vraag de voornaam en achternaam op van het contact 
            // uit de tabel contacts
            $sql = "SELECT first_name, last_name FROM contacts";
            $resultaat = $db->query($sql);

            // Print het resultaat op de pagina
            foreach($resultaat as $row) {
                echo $row['first_name'].' '.$row['last_name'].'<br/>';
            }

            // Sluit de database connectie
            $db = NULL;
        ?>

    </body>
</html>