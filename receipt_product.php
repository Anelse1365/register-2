<?php 

    session_start();
    require_once 'config2/db2.php';
    if (!isset($_SESSION['user_login'])) {
        $_SESSION['error'] = 'กรุณาเข้าสู่ระบบ!';
        header('location: signin2.php');
    }

?>



<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ใบเสร็จการนัดจอง</title>
    <!-- Link to Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            padding: 20px;
        }
        .receipt {
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            padding: 30px;
            margin-top: 20px;
            border: 2px solid #17a2b8;
        }
        .receipt-header {
            background-color: #8BD2EC;
            color: #FDFFE4;
            padding: 15px;
            text-align: center;
            border-radius: 6px 6px 0 0;
        }
        h2 {
            margin-bottom: 20px;
        }
        .table th, .table td {
            border-color: #dee2e6;
            text-align: left;
        }
        .table th {
            background-color: #F8F5FD;
            color: #695A5B;
        }
    </style>
</head>
<body>
<?php 

if (isset($_SESSION['user_login'])) {
    $user_id = $_SESSION['user_login'];
    $stmt = $conn->query("SELECT * FROM patien WHERE id = $user_id");
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
}
?>

<div class="container">
        <div class="receipt">
            <div class="receipt-header">
                <h2>ใบเสร็จการนัดจอง</h2>
            
            </div>
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <th scope="row">ชื่อ-นามสกุล</th>
                        <td><?php echo $row['firstname'] . ' ' . $row['lastname']?></td>
                    </tr>
                    <tr>
                        <th scope="row">อีเมล</th>
                        <td>john.doe@example.com</td>
                    </tr>
                    <tr>
                        <th scope="row">เบอร์โทร</th>
                        <td>123-456-7890</td>
                    </tr>
                    <tr>
                        <th scope="row">อายุ</th>
                        <td>30 ปี</td>
                    </tr>
                    <tr>
                        <th scope="row">เพศ</th>
                        <td>ชาย</td>
                    </tr>
                    <tr>
                        <th scope="row">สัญชาติ</th>
                        <td>ไทย</td>
                    </tr>
                    <tr>
                        <th scope="row">คลินิกที่ทำ</th>
                        <td>พิษณุโลก</td>
                    </tr>
                    <tr>
                        <th scope="row">ประเภทการนัด</th>
                        <td>จัดฟัน</td>
                    </tr>
                    <tr>
                        <th scope="row">วันที่</th>
                        <td>27 มกราคม 2024</td>
                    </tr>
                    <tr>
                        <th scope="row">เวลา</th>
                        <td>10:00 น.</td>
                    </tr>
                </tbody>
            </table>
            
            <div class="text-center">
                <h6>  รายละเอียดเพิ่มเติมเกี่ยวกับการนัดหมายสามารถติดต่อเราได้ที่ เบอร์ 084-991-1111     </h6></div>
            <div class="text-center">
                <a href="index2.php" class="btn btn-primary">กลับหน้าแรก</a>
                <a href="user2.php" class="btn btn-secondary">ไปยังโปรไฟล์</a>
            </div>
            </div>
            
        </div>
        
    </div>

    <!-- Link to Bootstrap JS and Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
