<?php
   
   require_once ('../includes/functions.php');
    //handles submit method
    $from_value = '';
    $from_unit = '';
    $to_value = '';
    $to_unit = '';

    if(isset($_POST['submit'])){
        
            $from_value = $_POST['from_value'];
            if(empty($from_value) || (!isset($from_value))){
                $from_value = 0.0;
            }
            $from_unit = $_POST['from_unit'];
            $to_unit = $_POST['to_unit'];
            //$to_value = number_format( convert_to_meters($from_value, $from_unit),2);
            $to_value = convert_speed($from_value, $from_unit,$to_unit);
    }
    

    //Creates an array to contain conversion units
    $speed_options = array(
      "feet per second",
      "miles per hour",
      "meters per second",
      "kilometers per hour",
      "knots"   
    );

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Metric Conversion</title>
    <link rel="stylesheet" href="../_css/styles.css">
</head>
<body>
<div id="main-content">
        <h1>Convert Speed</h1>
        <form action="" method="post">
            <div class=entry>
                <label for="">From:</label>&nbsp;
                <input type="text" name="from_value" value="<?php echo $from_value; ?>" autofocus>&nbsp;
                <select name="from_unit">    
                    <?php
                        foreach($speed_options as $unit){
                            $opt = optionize($unit);
                            echo "<option value=\"{$opt}\"";
                            if($from_unit == $opt){
                                 echo " selected";
                            }
                            echo ">{$unit}</option> ";
                        }
                    ?>                   
                </select>
            </div>
            <div class=entry>
                <label for="">To:</label>&nbsp;
                <?php 
                    if($to_value == "" || $to_value == 0){
                        $to_value = "";
                    }
                    else{
                        $to_value = float_to_string($to_value);
                    }
                ?>
                <input type="text" name="to_value" value="<?php echo $to_value; ?>">&nbsp;
                <select name="to_unit">
                <?php
                        foreach($speed_options as $unit){
                            $opt = optionize($unit);
                            echo "<option value=\"{$opt}\"";
                            if($to_unit == $opt){
                                 echo " selected";
                            }
                            echo ">{$unit}</option> ";
                        }
                    ?>
                </select>
            </div>
            <input type="submit" name="submit" value="Submit">
        </form>
        <br>
        <a href="../index.php">Return to Menu</a>
    </div>
</body>
</html>