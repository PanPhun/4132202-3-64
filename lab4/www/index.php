<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "hello php";

        $num = 5;
        $float = 2.301;
        $text = "bru";
        $sum = $num + $float;
        echo $sum;
        echo "<br>";
        echo $text . $float;
        $car = ["toyota","BMW","kubota"];
        $fruit = array("appel","mango","durean");
        echo "<br>";
        var_dump($car);
        echo "<br>";
        var_dump($fruit);
        $cars = ["brand"=>"toyota","color"=>"read","owner"=>"win"];
        echo "<br>";
        echo $cars["owner"];

        $rows[1][2] = 15;
        $rows = ["address"=> ["no"=>15,"mo"=>1,"rd"=>"jira"],"owner"=>"win"];
        echo "<br>";
        echo $rows["address"]["mo"];
        var_dump ($rows);

        echo "<br>";
        echo add(3, 5);
        function add($a, $b)
        {
            return $a + $b;
        }

        class car{
            public $color;
            public $brand;

            function ride(){
                echo "car is rided.";
            }
            function set_info($Brand,$Color){
                $this->brand = $Brand;
                $this->color = $Color;
            }
            function get_info(){
                echo $this->brand . " : " . $this->color;
            }
        }

        echo "<br>";

        $BMW = new Car();
        $Kubota = new Car();

        $BMW->set_info("bmw","RED");
        $BMW->ride();
        $BMW->get_info();

        echo "<br>";

        if(3 == 5){
                echo "true";
        } else {
                echo "false";
        }
        echo 3 ==3 ? "true" : "false";

        echo "<br>";

        for ($i = 0; $i<= 5; $i++) {
            echo $i . "<br>";
        }
        
        $i = 0;
        while($i < 3){
            echo $fruit[$i] . "<br>";
            $i++;
        }
    ?>
    <table border=1>
        <tr>
            <td>#</td>
            <td>car</td>
            <td>fruit</td>
        </tr>
        <?php
        for($i = 0; $i < 5; $i++){
        ?>
        <tr>
            <td><?= $i + 1 ?></td>
            <td><?=$car[$i] ?></td>
            <td><?=$fruit[$i] ?></td>
        </tr>
    <?php
        }
    ?>
    </table>

</body>
</html>