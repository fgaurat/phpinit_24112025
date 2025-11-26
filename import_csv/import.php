<?php


if ($argc < 2) {
    exit("2 paramètres requis !");
}

$csv_file = $argv[1];


if (!file_exists($csv_file)) {
    exit("Le fichier $csv_file n'existe pas");
}


// $rows = file($csv_file);
// $clean_rows = array_map(fn($line)=> trim($line),$rows);

// $clean_rows=[];
// foreach ($rows as $row) {
//     $clean_rows[] = trim($row);
// }

// foreach ($rows as $row) {
//     $clean_row = trim($row);
//     $line = explode(',',$clean_row);
//     print_r($line);
//     echo "\n";
// }


// $handle = fopen($csv_file,"r");

// $row = fgetcsv($handle) ;
// while($row){
//     print_r($row);

//     $row = fgetcsv($handle);
// }


$handle = fopen($csv_file, "r");
$row_header = fgetcsv($handle);

$all_data = [];
while ($row = fgetcsv($handle)) {
    // print_r($row);
    $data = array_combine($row_header, $row);
    $all_data[] = $data;
}
// echo json_encode($all_data);

$servername = "127.0.0.1";
$username = "root";
$password = "";
$db = "customers_db";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$db", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    
    $sql = "INSERT INTO customers_tbl(first_name,last_name,email,gender,ip_address)
    VALUES(:first_name,:last_name,:email,:gender,:ip_address)";
    
    $stmt = $conn->prepare($sql);
    $conn->beginTransaction();
    
    foreach ($all_data as $value) {
        $stmt->execute([
            ":first_name"=>$value['first_name'],
            ":last_name"=>$value['last_name'],
            ":email"=>$value['email'],
            ":gender"=>$value['gender'],
            ":ip_address"=>$value['ip_address']
        ]);
    }
    
    $conn->commit();

    // set the PDO error mode to exception
    echo "Connected successfully";
    


} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
