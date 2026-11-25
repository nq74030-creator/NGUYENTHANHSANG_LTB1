
<?php
$menus = ["Trang chủ", "Tin tức", "Liên hệ", "Giới thiệu"];
$subjects = ["HTML", "CSS", "JavaScript", "PHP", "MySQL"];
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        nav {
            background: rgb(4,40,94);
        }

        nav ul {
            list-style: none;
            display: flex;
        }

        nav a {
            color: white;
            text-decoration: none;
            font-weight: bold;
            display: block;
            padding: 15px;
            text-align: center;
        }

        nav ul li:hover {
            background: #084298;
        }

        nav li {
            flex: 1;
        }

        body {
            padding: 20px;
        }

        .s1 {
            max-width: 500px;
            margin: auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.15);
        }

        .s1 h3 {
            text-align: center;
            color: #0d6efd;
            margin-bottom: 20px;
        }

        .s1 ul {
            list-style: none;
        }

        .s1 li {
            padding: 12px;
            margin-bottom: 10px;
            background: #e7f1ff;
            border-left: 5px solid #0d6efd;
            border-radius: 5px;
            transition: .3s;
        }

        .s1 li:hover {
            background: #cfe2ff;
            transform: translateX(5px);
        }
    </style>
</head>

<body>

    <nav>
        <ul>
            <?php foreach ($menus as $menu) { ?>
                <li>
                    <a href="#"><?= $menu ?></a>
                </li>
            <?php } ?>
        </ul>
    </nav>

    <section class="s1">
        <h3>Danh sách ngôn ngữ sử dụng trong môn học</h3>

        <ul>
            <?php
            foreach ($subjects as $subject) {
                echo "<li>$subject</li>";
            }
            ?>
        </ul>
    </section>

</body>
</html>
