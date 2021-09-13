<html>
    <head>
        <body>




        <form method="POST">
        <input type="submit" value="RZUCAJ!">
        </form>

        </body>
    </head>
</html>

<?php
$rand = rand (1,6);

switch ($rand)
{
    case 1:
        echo "Wypadło 1 oczko";
        break;
      
      case 2:
        echo "Wypadły 2 oczka";
        break;
      
      case 3:
        echo "Wypadły 3 oczka";
        break;

        case 4:
            echo "Wypadły 4 oczka";
            break;
          
          case 5:
            echo "Wypadło 5 oczek";
            break;
          
          case 6:
            echo "Wypadło 6 oczek";
            break;
}
?>