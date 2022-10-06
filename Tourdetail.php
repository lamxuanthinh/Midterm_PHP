<?php
include './configuration/database.php';

$idCard = $_POST['idCard']; // WHERE matour = $idCard;

$sql1 = "SELECT soluong from KHACHHANG WHERE matour='$idCard';";
$sql2 = "SELECT tentour from TOUR WHERE matour='$idCard';";


if ($connection != null) {
    try {
        $statement1 = $connection->prepare($sql1);
        $statement2 = $connection->prepare($sql2);
        $statement1->execute();
        $statement2->execute();
        $result1 = $statement1->setFetchMode(PDO::FETCH_ASSOC);
        $result2 = $statement2->setFetchMode(PDO::FETCH_ASSOC);
        $dataStudents1 = $statement1->fetchAll();
        $dataStudents2 = $statement2->fetchAll();

        foreach ($dataStudents2 as $dataStudent) {
            $tentour = $dataStudent['tentour'] ?? '';
        }

        foreach ($dataStudents1 as $dataStudent) {
            $soluong = $dataStudent['soluong'] ?? '';
        }
    } catch (PDOException $e) {
        echo $e;
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tourdetail</title>
</head>

<body>
    <h3>Tên Tour</h3>
    <p><?php echo $tentour  ?></p>
    <h3>Số Lượng khác đã đặt</h3>
    <p><?php echo $soluong  ?></p>
</body>

</html>