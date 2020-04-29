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
            $to_value = convert_volume($from_value, $from_unit,$to_unit);
    }
    

    //Creates an array to contain conversion units
    $volume_options = array(
        'cubic inches',
        'cubic feet',
        'imperial gallons',
        'imperial quarts',
        'imperial pints',
        'imperial cups',
        'imperial ounces',
        'imperial tablespoons',
        'imperial teaspoons',
        'US gallons',
        'US quarts',
        'US pints',
        'US cups',
        'US ounces',
        'US tablespoons',
        'US teaspoons',
        'cubic centimeters',
        'cubic meters',
        'liters',
        'milliliters'
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
        <h1>Convert Volume</h1>
        <form action="" method="post">
            <div class=entry>
                <label for="">From:</label>&nbsp;
                <input type="text" name="from_value" value="<?php echo $from_value; ?>" autofocus>&nbsp;
                <select name="from_unit">    
                    <?php
                        foreach($volume_options as $unit){
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
                <input type="text" name="to_value" value="<?php echo $to_value; ?>">&nbsp;
                <select name="to_unit">
                <?php
                        foreach($volume_options as $unit){
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