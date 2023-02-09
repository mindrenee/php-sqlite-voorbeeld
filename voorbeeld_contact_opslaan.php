<html>
    <head>
    
    </head>
    <body>
    <?php
        // Voor debugging kun je errors aanzetten.
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);

        // Verbinding met de database maken
        $db = new PDO("sqlite:voorbeeld.db");

        // Bereid een SQL query voor en vul de waardes uit het formulier in.
        $sql = "INSERT INTO contacts (first_name, last_name, email, phone) VALUES(?,?,?,?)";
        $stmt = $db->prepare($sql);
        $resultaat - $stmt->execute([$_POST['first_name'], $_POST['last_name'],
            $_POST['email'], $_POST['phone']]);

        // Haal de gegevens nu op uit de database om te controleren of alles 
        // goed is gegaan.
        $sql = "SELECT * FROM contacts WHERE first_name LIKE '%$_POST[first_name]%';";
        $resultaat = $db->query($sql);
        echo "<table>";
        echo "<tr>";
        echo "<th>Voornaam</th>";
        echo "<th>Achternaam</th>";
        echo "<th>Email</th>";
        echo "<th>Telefoon</th>";
        echo "</tr>";
        foreach($resultaat as $row) {
            echo "<tr>";
            echo "<th>".$row['first_name']."</th>";
            echo "<th>".$row['last_name']."</th>";
            echo "<th>".$row['email']."</th>";
            echo "<th>".$row['phone']."</th>";
            echo "</tr>";
        }
        echo "</table>";
        echo "<p>is toegevoegd!</p>";
        echo "<p><form action='voorbeeld_invoer_formulier.php' method='post'>
            <input type='submit' name='submit' value='Terug'>
            </form></p>";

        // Connectie met de database sluiten
        $db = NULL;
    ?>
    </body>
</html>