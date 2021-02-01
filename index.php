<html>

<head>
</head>

<body>
    <?php
    function myAutoload($className)
    {
        include("class_" . ucfirst($className) . ".php");
    }
    spl_autoload_register("myAutoload");

    ?>
    <center>
        <h2>Shape area and perimeter calculation</h2>
        <hr>
        <a href="index.php?action=1">Rect</a>||
        <a href="index.php?action=2">Triangle</a>||
        <a href="index.php?action=3">Circle</a>
        <hr>
    </center>
    <?php
    $action="";
    switch ($_REQUEST["action"]) {
        case 1:
            $form = new Form("Rect", $_REQUEST, "index.php");
            echo $form;
            break;
        case 2:
            $form = new Form("Triangle", $_REQUEST, "index.php", "post", "_blank");
            echo $form;
            break;
        case 3:
            $form = new Form("Circle", $_REQUEST);
            echo $form;
            break;
        default:
            echo "Please choose a shape.<br>";
    }
    if (isset($_REQUEST["act"])) {
        switch ($_REQUEST["act"]) {
            case 1:
                $shape = new Rect($_REQUEST);
                break;
            case 2:
                $shape = new Triangle($_REQUEST);
                break;
            case 3:
                $shape = new Circle($_REQUEST);
                break;
        }
        echo "Area: " . $shape->area() . "<br>";
        echo "Perimeter: " . $shape->perimeter() . "<br>";
    }


    ?>

</body>

</html>