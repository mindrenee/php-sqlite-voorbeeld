# Voorbeeld database aanmaken 

Het aanmaken van het database bestand doe je op de Command Line Interface (CLI), de terminal. 
```
$ sqlite3 voorbeeld.db
```

Je hebt hiermee een database voorbeeld aangemaakt. Je maakt vervolgens de tabellen aan 

```
sqlite> CREATE TABLE contacts (
        contact_id INTEGER PRIMARY KEY AUTOINCREMENT,
        first_name TEXT NOT NULL,
        last_name TEXT NOT NULL,
        email TEXT NOT NULL UNIQUE,
        phone TEXT NOT NULL UNIQUE
);
```

En

```
sqlite> CREATE TABLE posts (
        post_id INTEGER PRIMARY KEY AUTOINCREMENT,
        contact_id INTERGER NOT NULL,
        short_description TEXT,
        content TEXT NOT NULL,
        FOREIGN KEY (contact_id)
                REFERENCES contacts (contact_id)
);
```

# Vullen met data

Het vullen van de tabellen met data kun je als volgt doen


```
sqlite> INSERT INTO contacts (first_name, last_name, email, phone) VALUES ("Piet", "Jansen", "piet@jansen.nl", "0623456789");
```

# Eigen database aanmaken

Hier boven staat een voorbeeld tabel in de database. Je kunt deze tabellen aanpassen naar een database die je voor je eigen web-applicatie gebruikt. Verander dan de namen van de kolommen en de eigenschappen van de kolommen.

De eigenschappen die ik in het voorbeeld heb gebruikt zijn:

* INTERER, een getal
* TEXT, text/string
* NOT NULL, dit veld mag niet leeg zijn
* UNIQUE, de data in dit veld moet uniek zijn
* PRIMARY KEY, veld wat de rij in de tabel uniek maakt en waarmee je data uit verschillende tabellen aan elkaar kunt koppelen
* AUTOINCREMENT, hoog de waarde uit deze kolom automatisch op met 1