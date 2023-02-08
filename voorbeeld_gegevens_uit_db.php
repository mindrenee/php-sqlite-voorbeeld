<html>
    <head>
    <style>
    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #dddddd;
    }
    </style>
    </head>
    <body>

        <?php
            // Voor debugging kun je errors aanzetten.
            ini_set('display_errors', 1);
            ini_set('display_startup_errors', 1);
            error_reporting(E_ALL);

            // Maak connectie met de voorbeeld database
            // Deze database zit in het bestand voorbeeld.db
            $db = new PDO("sqlite:voorbeeld.db");

            // Vraag de voornaam en achternaam op van het contact 
            // uit de tabel contacts
            $sql = "SELECT first_name, last_name FROM contacts";
            $resultaat = $db->query($sql);

            // Print het resultaat op de pagina in een table
            echo "<table>";
            echo "<tr>";
            echo "<th>Voornaam</th>";
            echo "<th>Achternaam</th>";
            echo "</tr>";
            foreach($resultaat as $row) {
                echo "<tr>";
                echo "<th>".$row['first_name']."</th>";
                echo "<th>".$row['last_name']."</th>";
                echo "</tr>";
            }
            echo "</table>";

            // Sluit de database connectie
            $db = NULL;
        ?>

    </body>
</html>