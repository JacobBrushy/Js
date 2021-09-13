<html>
    <head>
        <body>




        <form method="POST">
        <input type="submit" value="RZUCAJ!">
        <input type="text" name="Min">
        <input type="text" name="Max">
        <input type="text" name="Liczba">
        </form>

        </body>
    </head>
</html>

<?php
$a = $_POST["Min"];
$b = $_POST["Max"];
$c = $_POST["Liczba"];

for($d=0; $d < $c; $d++)
{
    $e=rand($a,$b);
    echo ($e);
}


?>