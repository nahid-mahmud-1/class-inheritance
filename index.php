<?php
    require_once "Classes/shapes.class.php";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Area Calculation Class Inheritance</title>
        <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <!-- Reset CSS -->
        <link rel="stylesheet" href="assets/css/reset.css">
        <!-- Theme Main CSS -->
        <link rel="stylesheet" href="assets/css/style.css">
    </head>
    <body>

        <section>

            <div class="circle">
                <!-- CIRCLE AREA CALCULATION FORM -->
                <h3>Circle Area Calculation</h3>
                <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
                    <input type="text" name="radius" placeholder="Radius" required>
                    <button type="submit" name="cir-submit">Calculate</button>
                </form>

                <?php
                    if(isset($_POST["cir-submit"])){
                        // STORING FORM DATA
                        $radius = $_POST["radius"];
       
                        try{

                            $circleArea = new Circle($radius);
                            $areaResult = $circleArea->calculateArea();
                            echo "<p>{$areaResult}</p>";

                        }catch(TypeError $e){
                            die("Error!" . $e->getMessage());
                        }
                    }
            
                ?>
            </div>

            <div class="rectangle">
                <!-- RECTANGLE AREA CALCULATION FORM -->
                <h3>Rectangle Area Calculation</h3>
                <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
                    <input type="text" name="width" placeholder="Width" required>
                    <input type="text" name="length" placeholder="Length" required>
                    <button type="submit" name="rect-submit">Calculate</button>
                </form>

                <?php
                    if(isset($_POST["rect-submit"])){
                        // STORING FORM DATA
                        $width      = $_POST["width"];
                        $length     = $_POST["length"];
        
                        try{

                            $rectangleArea = new Rectangle($width, $length);
                            $areaResult = $rectangleArea->calculateArea();
                            echo "<p>{$areaResult}</p>";

                        }catch(TypeError $e){
                            die("Error!" . $e->getMessage());
                        }
                    }
            
                ?>
            </div>

        </section>



    </body>
</html>