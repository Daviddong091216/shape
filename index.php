<html>

<head>
</head>

<body>
    <?php
    function __autoload($className)
    {
        include("class_" . ucfirst($className) . ".php");
    }
    ?>
    <center>
        <h2>Shape area and perimeter calculation</h2>
        <hr>
        <a herf="index.php?action=1">React</a>||
        <a herf="index.php?action=2">Triangle</a>||
        <a herf="index.php?action=3">Circle</a>||

    </center>
    <?php
        switch($_REQUEST["action"]){
            case 1:
                $form = new Form("React",$_REQUEST,"index.php");
                echo $form;
                break;
        }
        if(isset($_REQUEST["act"])){
            switch($_REQUEST["act"]){
                case 1:
                    $shape=new Rect($_REQUEST);
                    break;
            }
        }
        echo "Area: ".$shape->area()."<br>";
        echo "Perimeter: ".$shape->perimeter()."<br>";

    ?>

</body>

</html>