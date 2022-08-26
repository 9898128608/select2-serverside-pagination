<?php
include 'config.php';

// Number of records fetch
$numberofrecords = 10;

if (!isset($_POST['searchTerm'])) {



    $sqlList = "SELECT * FROM users ORDER BY id LIMIT $numberofrecords";
    $qryList = $DB->prepare($sqlList);
    $qryList->execute();
    $usersList = $qryList->fetchAll();
} else {

    $keyword = $_POST['keyword']; // Search text
    $sqlList = "SELECT * FROM users WHERE name like '%$keyword%' ORDER BY id LIMIT $numberofrecords";
    $qryList = $DB->prepare($sqlList);
    $qryList->execute();
    $usersList = $qryList->fetchAll();
}

$response = array();

// Read Data
foreach ($usersList as $user) {
    $response[] = array(
        "id" => $user['id'],
        "text" => $user['name']
    );
}

echo json_encode($response);
exit();
