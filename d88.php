
<?php
echo "
<!DOCTYPE html>
<html>
<head>
    <title>Visitor Counter</title>

    <style>
        body {
            background-color: #e6f2ff;
            font-family: Arial, sans-serif;
            text-align: center;
            margin-top: 100px;
        }

        .container {
            background-color: white;
            width: 400px;
            margin: auto;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0px 0px 15px gray;
        }

        h1 {
            color: blue;
            font-size: 30px;
        }

        p {
            color: green;
            font-size: 22px;
            font-weight: bold;
        }

        .count {
            color: red;
            font-size: 35px;
        }
    </style>
</head>
<body>

<div class='container'>
    <h1>REFRESH PAGE</h1>
";

$file = 'count.txt';

$c = file_get_contents($file);
$newCount = (int)$c + 1;

file_put_contents($file, $newCount);

echo "<p>The number of users visited:</p>";
echo "<div class='count'>" . $newCount . "</div>";

echo "
</div>
</body>
</html>
";
?>
