# Lancer un conteneur Docker avec une application PHP Linux
```bash
docker run -d --name mon-app -p 8000:80 -v "$PWD":/var/www/html php:8.2-apache
```

# Lancer un conteneur Docker avec une application PHP sous Windows (CMD)
```bash
docker run -d --name mon-app -p 8000:80 -v "%cd%":/var/www/html php:8.2-apache
``` 

# Lancer un conteneur Docker avec une application PHP sous Windows (PowerShell)
```bash
docker run -d --name mon-app -p 8000:80 -v "${PWD}":/var/www/html php:8.2-apache
docker run -d --name mon-app -p 8000:80 -v "${PWD.Path}:/var/www/html" php:8.2-apache
```

# Lancer un contenur Docker avec une application PHP et une base de données MySQL
```bash
docker network create mon-reseau
docker run -d --name ma-base-de-donnees --network mon-reseau -e MYSQL_ROOT_PASSWORD=motdepasse -e MYSQL_DATABASE=ma_base_de_donnees mysql:5.7
docker run -d --name mon-app --network mon-reseau -p 8000:80 -v "$PWD":/var/www/html php:8.2-apache
```


# docker-compose pour une application PHP avec Apache avec MySQL
```yaml
version: '3.8'
services:
  web:
    image: php:8.2-apache
    container_name: mon-app
    ports:
      - "8000:80"
    volumes:
      - ./:/var/www/html
    networks:
      - mon-reseau

  db:
    image: mysql:5.7
    container_name: ma-base-de-donnees
    environment:
      MYSQL_ROOT_PASSWORD: motdepasse
      MYSQL_DATABASE: ma_base_de_donnees
    networks:
      - mon-reseau
networks:
  mon-reseau:
    driver: bridge
```

# Exemple de fichier PHP pour tester la connexion à la base de données
```php
<?php
$servername = "db";
$username = "root";
$password = "motdepasse";
$dbname = "ma_base_de_donnees"; 
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connexion échouée: " . $conn->connect_error);
}
echo "Connexion réussie à la base de données";
$conn->close();
?>
```

# Exemple de fichier PHP pour tester la connexion à la base de données avec PDO
```php
<?php
$servername = "db";
$username = "root"; 
$password = "motdepasse";
$dbname = "ma_base_de_donnees";
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connexion réussie à la base de données";
} catch(PDOException $e) {
    echo "Connexion échouée: " . $e->getMessage();
}
?>
```