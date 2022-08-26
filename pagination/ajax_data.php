<?php
header("Content-Type: application/json");
include 'config.php';

$responsedata = array();

if (!isset($_REQUEST['page'])) {
    $Page = 1;
} else {
    $Page = $_REQUEST['page'];
}

$EndLimit = 10;
$StartLimit = ($Page - 1) * $EndLimit;


$TotalData = 35;
$ToatlPage = ceil($TotalData / $EndLimit);

if ($TotalData > 0) {


    if (!isset($_POST['keyword'])) {

        $sqlList = "SELECT * FROM users ORDER BY id LIMIT $StartLimit,$EndLimit";
        $qryList = $DB->prepare($sqlList);
        $qryList->execute();
        $usersList = $qryList->fetchAll();
    } else {


        $keyword = $_POST['keyword']; // Search text
        $sqlList = "SELECT * FROM users WHERE name like '%$keyword%' ORDER BY id LIMIT $StartLimit,$EndLimit";
        $qryList = $DB->prepare($sqlList);
        $qryList->execute();
        $usersList = $qryList->fetchAll();
    }

    foreach ($usersList as $user) {
        $responsedata[] = array(
            "id" => $user['id'],
            "text" => $user['name']
        );
    }

    $response['data'] = $responsedata;
    $response['totaldata'] = $TotalData;
    $response['page'] = $ToatlPage;
} else {

    $response['data'] = null;
    $response['totaldata'] = 0;
    $response['page'] = 0;
}


echo json_encode($response, 128 | 64 | 256);
exit();
