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

# Eigen database aanmaken

Hier boven staat een voorbeeld tabel in de database. Je kunt deze tabellen aanpassen naar een database die je voor je eigen web-applicatie gebruikt. Eventueel kun je 