<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Php Exercise</h1>
    
    <?php 
    // php single line comment
    /* php mult-line comment */
    $txt = "Hello";
    $x = 5;
    $y = 7;
    echo $x+$y;
    echo "<br>hello world<br>";
    echo strlen("Hello World!")."<br>";
    echo strrev("Hello World!");
    $oldtxt = "Hello World!";
    $newtxt = str_replace("World","Dolly",$oldtxt)."<br>";
    echo 10 *5 ."<br>";
    echo 10 /2;
    $a = 50;
    $b = 10;
    var_dump($a ==$b);
    var_dump($a !=$b);
   if($a == $b) {
     echo "1";
    } elseif
        ($a > $b) {
        echo "2";
    } else{
        echo "3";
    }
  switch ($color) {
    case "red":
      echo "Hello";
      break;
    case "green":
      echo "Welcome";
      break;
    default:
      echo "Neither";
  }
  $i = 1; 
  while($i < 6) {
    echo $i;
    $i++;
  }
  $i = 1; 
  do
   {
      echo $i;
      $i++;
  } while($i < 6);
  
   for($i = 0; $i < 10; $i++) {
     echo $i;
   }  

   $colors = array("red", "green", "blue", "yellow"); 

    foreach($colors as $x) {
        echo $x;
    }
    function myFunction()
    {
    echo "Hello World!";
    }
    myFunction();
    ?>
</body>
</html>