<?php


$pdo = new PDO("sqlite:students.db");

$sql = "SELECT * FROM students";

$stmt = $pdo->query($sql); 

$row = $stmt->fetchAll(PDO::FETCH_ASSOC);


// foreach ($row as $r) {
// 	var_dump($r);
// }

function insert($pdo,$first_name, $last_name, $middle_name, $age, $created_at){
    $tableName = 'students'; 
    $insert = "INSERT INTO $tableName ( first_name, last_name, middle_name, age, created_at) VALUES (:first_name, :last_name, :middle_name, :age, :created_at)";
    $stmt = $pdo->prepare($insert);

    //  $stmt->execute([
    //     ':name' => $fName,
    //     ':lastName' => $lName,
    //     ':middleName' => $mName,
    //     ':age' => $age,
    //     ':created_at' => $created,
    // ]);
    $stmt->bindValue(':first_name', $first_name);
    $stmt->bindValue(':last_name', $last_name);
    $stmt->bindValue(':middle_name', $middle_name);
    $stmt->bindValue(':age', $age);
    $stmt->bindValue(':created_at', $created_at);
    $stmt->execute();

        return $pdo->lastInsertId();


}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
       
    $pdo = new PDO("sqlite:students.db");
    insert($pdo,"axe","hotdog","deym",22, date("Y-m-d"));
}
else{

foreach ($row as $r) {
        var_dump($r);
        }
    }



// class insert{
    
//         function __construct(public string $fName, public $lName, public $mName, public $age, public $created){
            
//         }
        
//         // function getStudents(public string $fName, public $lName, public $mName, public $age, public $created){ 
//         //     return;
//         // }
//     }
//       $hotdog = new insert("axe","hotdog","deym",22);
//       echo $hotdog;
// if ($_SERVER["REQUEST_METHOD"] == "POST") {

// }
