<?php
include("menu.php")
    ?>
<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>جدول قهرمانان بوکس</title>
    <style>
        body {
            font-family: Tahoma, sans-serif;
            background-color: #f4f4f9;
            color: #333;
            padding: 20px;
        }

        .container {
            max-width: 1200px;
            margin: auto;
            background: #565656ff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #1e3c72;
            margin-bottom: 30px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: center;
        }

        th {
            background-color: #38678f;
            color: white;
            font-weight: bold;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        /*  tr:hover {
            background-color: #f1f1f1;
        }*/
    </style>
</head>






<?php

$con = mysqli_connect("localhost", "root", "", "web");


$table_name = "heavy";


$columns_to_display = ['name', 'firstwin', 'record', 'wins', 'country', 'company','id'];



$conn = new mysqli("localhost", "root", "", "web");




$sql = "SELECT " . implode(', ', $columns_to_display) . " FROM " . $table_name . " ORDER BY id ASC";
$result = $conn->query($sql);

?>



<body>

    <div class="container">
        <h1>لیست قهرمانان بوکس </h1>
        <table>
            <thead>
                <tr>

                    <th>name</th>
                    <th>firstwin</th>
                    <th>record</th>
                    <th>wins</th>
                    <th>country</th>
                    <th>company</th>
                    <?php if (isset($_SESSION["admin"])) { ?>
                        <th>edit del</th>
                    <?php } ?>


                </tr>
            </thead>
            <tbody>
                <?php





                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    foreach ($columns_to_display as $col) {
                        $cell_value = $row[$col] === null ?: $row[$col];
                        if ($col !='id' )
                        echo "<td>" . htmlspecialchars($cell_value) . "</td>";
                    }

                    ?>
                    <?php if (isset($_SESSION["admin"])) { ?>
                        <td><a href="winers4.del.php?id= <?php echo ($row["id"]); ?> ">delete</a>
                            <a href="winers2.edit.m.php?id= <?php echo ($row["id"]); ?> ">edit</a>
                        </td>
                    <?php } ?>

                    <?php
                    echo "</tr>";
                }

                $conn->close();
                ?>
            </tbody>
        </table>
    </div>




</body>

</html>