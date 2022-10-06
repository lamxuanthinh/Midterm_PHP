<?php
include './configuration/database.php';

$sql1 = "SELECT mahs, hodem, tenhs, ngaysinh,
matruong, khoithi from SINHVIEN;";
$sql2 = "SELECT `matruong`,`tentruong`  from TRUONG;";


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

        echo '<h1 class="text-center">DANH SÁCH THÍ SINH DỰ THI</h1>';
        echo '<table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Mã HS</th>
            <th scope="col">Họ</th>
            <th scope="col">Tên</th>
            <th scope="col">Ngày Sinh</th>
            <th scope="col">Tên trường dự thi</th>
            <th scope="col">Khối thi</th>
          </tr>
        </thead>
        <tbody>';
        foreach ($dataStudents1 as $dataStudent) {
            $mahs = $dataStudent['mahs'] ?? '';
            $hodem = $dataStudent['hodem'] ?? '';
            $tenhs = $dataStudent['tenhs'] ?? '';
            $ngaysinh = $dataStudent['ngaysinh'] ?? '';
            $matruong = $dataStudent['matruong'] ?? '';  // VKU
            $khoithi = $dataStudent['khoithi'] ?? '';

            $tentruongCheck = ''; // vỉe

            if (!empty($matruong)) {
                foreach ($dataStudents2 as $dataStudent) {
                    $matruongCheck = $dataStudent['matruong'] ?? '';
                    $tentruong = $dataStudent['tentruong'] ?? '';
                    if ($matruong == $matruongCheck) {
                        $tentruongCheck = $tentruong;
                    }
                }
            }

            echo "<tr>";
            echo "<td>$mahs</td>";
            echo "<td>$hodem</td>";
            echo "<td>$tenhs</td>";
            echo "<td>$ngaysinh</td>";
            echo "<td>$tentruongCheck</td>";
            echo "<td>$khoithi</td>";
            echo "</tr>";
            //echo "<h3>$name, $email, $body</h3>";
        }
        echo ' </tbody>
        </table>';
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>RegisList</title>
    <style>
        div {
            display: flex;
            justify-content: center;

        }
        a {
            margin-right: 100px;
        }
    </style>
</head>
<div>
    <a href="/">Back to Login</a>
    <a href="/">SchoolDetail</a>
</div>

<body>

</body>

</html>