<html>
<head>
    <title>Hiển thị dữ liệu từ bảng</title>
    <style>
        table {
            border-collapse: collapse;
        }

        table, th, td {
            border: 1px solid black;
            padding: 5px;
        }
    </style>
</head>
<body>
    <h2>Danh sách sách</h2>
    <table>
        <thead>
            <tr>
                <th>Tên sách</th>
                <th>Mã Sách</th>
                <th>Số lượng</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $conn = new mysqli('localhost', 'root', '', 'quanlysach');
                $sql = "select * from sach";
                $query = mysqli_query($conn, $sql);
                $num = mysqli_num_rows($query);
                if($num > 0){
                    while($row = mysqli_fetch_array($query)){

            ?>
            <tr>
                <td><?php echo $row['MaSach']?></td>
                <td><?php echo $row['TenSach']?></td> 
                <td><?php echo $row['SoLuong']?></td>
                
            </tr>
            <?php
                    }
                }
            ?>
        </tbody>
    </table>
</body>
</html>