<!DOCTYPE html>
<html>

<head>
    <title>My Index Page</title>

    <style>
    body {
      font-family: Arial;
      margin: 20px;  
    }
    
    section {
      padding: 20px;
      background: #f1f1f1;
      margin-bottom: 20px;
    }
    
    h1, h2 {
      color: #333;
    } 
  </style>

</head>

<body>

<main>

    <section>

    <h1>Welcome to My Index Page</h1>

    <h2>Practicing PHP</h2>

    <?php
    // PHP code section
    $message = "Hello, PHP!";
    $currentDate = date("Y-m-d");
    ?>

    <p><?php echo $message; ?></p>
    <p>Today's date is <?php echo $currentDate; ?></p>

    </section>

    <!-- More sections -->

</main>

</body>

<!-- ================================================== -->

<?php
$x = 5; // global scope

function myTest() {
    $y = "inside variable";
    // using x inside this function will generate an error
    echo "<p>Variable x inside function is: $y</p>";
}
myTest();

echo "<p>Variable x outside function is: $x</p>";
// echo "<p>Test Variable y outside function: $y</p>";
?>

<!-- ================================================== -->

<?php
class Car {
  public $color;
  public $model;
  public function __construct($color, $model) {
    $this->color = $color;
    $this->model = $model;
  }
  public function message() {
    return "My car is a " . $this->color . " " . $this->model . "!";
  }
}

$myCar = new Car("black", "Volvo");
echo $myCar -> message();
echo "<br>";
$myCar = new Car("red", "Toyota");
echo $myCar -> message();
?>

<br>

<?php
define("GREETING", "Welcome to this practice!", true);
echo greeting;
?>

<?php
define("cars", [
  "Alfa Romeo",
  "BMW",
  "Toyota"
]);
echo '<br><br>';
echo cars[0];
?>

<br><br>

<?php
$t = date("H");

if ($t < "10") {
  echo "Have a good morning!";
} elseif ($t < "20") {
  echo "Have a good day!";
} else {
  echo "Have a good night!";
}

echo $t;
?>

<br><br>

<?php
$favcolor = "";

switch ($favcolor) {
  case "red":
    echo "Your favorite color is red!";
    break;
  case "blue":
    echo "Your favorite color is blue!";
    break;
  case "green":
    echo "Your favorite color is green!";
    break;
  default:
    echo "Your favorite color is neither red, blue, nor green!";
}
?>

<br><br>

<?php
$x = 1;

while($x <= 5) {
  echo "The number is: $x <br>";
  $x++;
}
?>

<br>

<?php
$x = 6;

do {
  echo "do_while result: $x <br>";
  $x++;
} while ($x <= 5);
?>

<!-- <?php
for ($x = 0; $x <= 3; $x++) {
  echo "The number is: $x <br>";
}
?> -->

<br>

<?php
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach($age as $x => $val) {
  echo "$x = $val<br>";
}
?>

<br>

<?php
$x = 0;

while($x < 10) {
  if ($x == 4) {
    echo "x reached 4";
    break;
  }
  echo "The number is: $x <br>";
  $x++;
}
?>

</html>
