<?php
include './configuration/database.php';

$sql = "SELECT makh,tenkh,sodt,matour,soluong,thoigian from KHACHHANG;";


if ($connection != null) {
    try {
        $statement = $connection->prepare($sql);
        $statement->execute();
        $result = $statement->setFetchMode(PDO::FETCH_ASSOC);
        $dataStudents = $statement->fetchAll();


        echo '<h1 class="text-center">DANH SÁCH THÍ SINH DỰ THI</h1>';
        echo '<table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Mã Khác Hàng</th>
            <th scope="col">Tên khách hàng</th>
            <th scope="col">Điện Thoại</th>
            <th scope="col">Mã Tour</th>
            <th scope="col">Số Lượng Khách Hàng</th>
            <th scope="col">Thời Gian Đặt</th>
          </tr>
        </thead>
        <tbody>';
        foreach ($dataStudents as $dataStudent) {
            $mahs = $dataStudent['makh'] ?? '';
            $hodem = $dataStudent['tenkh'] ?? '';
            $tenhs = $dataStudent['sodt'] ?? '';
            $ngaysinh = $dataStudent['matour'] ?? '';
            $matruong = $dataStudent['soluong'] ?? '';
            $khoithi = $dataStudent['thoigian'] ?? '';

            echo "<tr>";
            echo "<td>$mahs</td>";
            echo "<td>$hodem</td>";
            echo "<td>$tenhs</td>";
            echo "<td>$ngaysinh</td>";
            echo "<td>$matruong</td>";
            echo "<td>$khoithi</td>";
            echo "</tr>";
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