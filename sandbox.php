<?php 

$score =20;

// $val=$score > 40 ? 'high score! ':'low score :(';
// echo''.$score. ' : '.''.$val.'';

echo $_SERVER ['SERVER_NAME'];
echo $_SERVER ['REQUEST_METHOD'];
echo $_SERVER ['SCRIPT_FILENAME'];
echo $_SERVER ['PHP_SELF'] 


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>
<?php 
$val= $score > 40 ? 'high score! ':'low score :(';
echo''.$score. ' : '.''.$val.''; ?>

    </p>
</body>
</html>