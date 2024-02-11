<html>

<body>
    <?php
    echo "Test"; // print

    $a = 5; // variable
    $b = 10;
    echo $a . $b . "<br>"; // concat
    echo ($a + $b) . "<br>"; // sum

    $cars = array("A", "B", "C"); //array
    var_dump($cars);

    class Car //class
    {
        public $model;
        function Car()
        {
            $this->model = 'VW';
        }
    }
    $herbie = new Car();
    echo $herbie->model;

    //for
    for ($x = 0; $x <= 10; $x++) {
        echo $x . "<br";
    }

    // while loop
    $x = 1;
    while ($x < 5) {
        echo "The number is: " . $x . "<br>";
        $x++;
    }

    //do_while
    $x = 1;
    do {
        echo "The number is: " . $x . "<br>";
        $x++;
    } while ($x < 5);

    //for_each
    foreach ($cars as $car) {
        echo "" . $car . "<br>";
    }

    //if_else
    if ($a > $b) {
        echo "a is greater than b<br>";
    } else {
        echo "b is greater than a<br>";
    }

    //function
    function addNumbers(int $x, int $y)
    {
        return $x + $y;
    }

    echo addNumbers(10, 20);

    echo "Hello ";
    ?>
</body>

</html>