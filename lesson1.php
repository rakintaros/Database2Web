<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson1</title>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container p-5 my-5 bg-dark text-white">
        <h1>Database show data on Web</h1>
        <p>6402202057001 Mr.Apirak Intaros</p>
    </div>

    <?php
    require 'connect.php';
    // Perpare and execute a SELECT statement
    $query = "SELECT * FROM tb_section ORDER BY SECT_ID DESC";
    $stmt = $pdo->query($query);
    ?>
    <div class="container">
        <h2>Lesson 1 : แสดงข้อมูลทั้งหมดโดยเรียงจาก SECT_ID จากมากไปหาน้อย</h2>
        <p>Show section data and internal line phone</p>
        <div class="btn-group my-2">
            <button type="button" class="btn btn-outline-light text-dark" onclick="window.location.href ='index.php'">กลับไปยังหน้าหลัก</button>
            <button type="button" class="btn btn-outline-light text-dark" onclick="window.location.href ='lesson2.php'">Lesson 2 : แสดงข้อมูลเฉพาะ SECT_TELEPHONE และ SECT_NAME โดยเรียงจาก SECT_NAME จาก A-Z</button>
            <button type="button" class="btn btn-outline-light text-dark" onclick="window.location.href ='lesson3.php'">Lesson 3 : แสดงข้อมูลทั้งหมด โดยเลือกเฉพาะที่ SECT_TELEPHONE มีเลข 12 และเรียงข้อมูลจาก SECT_NAME จาก Z-A</button>
        </div>
        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th>SECT_ID</th>
                    <th>SECT_NAME</th>
                    <th>SECT_BUILDING_NAME</th>
                    <th>SECT_TELEPHONE</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>
                    <tr>
                        <td><?php echo $row['SECT_ID']; ?></td>
                        <td><?php echo $row['SECT_NAME']; ?></td>
                        <td><?php echo $row['SECT_BUILDING_NAME']; ?></td>
                        <td><?php echo $row['SECT_TELEPHONE']; ?></td>
                        <!-- Add more <td> elements for each column in your database -->
                    </tr>
                <?php } ?>
                <tr>
                    <td>John</td>
                    <td>Doe</td>
                    <td>john@example.com</td>
                </tr>
                <tr>
                    <td>Mary</td>
                    <td>Moe</td>
                    <td>mary@example.com</td>
                </tr>
                <tr>
                    <td>July</td>
                    <td>Dooley</td>
                    <td>july@example.com</td>
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>