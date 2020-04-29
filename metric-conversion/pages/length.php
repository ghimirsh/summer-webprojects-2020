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
            $to_value = convert_length($from_value, $from_unit,$to_unit);
    }
    
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
        <h1>Convert Length</h1>
        <form action="" method="post">
            <div class=entry>
                <label for="">From:</label>&nbsp;
                <input type="text" name="from_value" value="<?php echo $from_value; ?>" autofocus>&nbsp;
                <select name="from_unit">                
                    <option value="inches" <?php if($from_unit == 'inches'){ echo " selected";}?>>inches</option>
                    <option value="feet" <?php if($from_unit == 'feet'){ echo " selected";}?>>feet</option>
                    <option value="yards" <?php if($from_unit =='yards'){ echo " selected";}?>>yards</option>
                    <option value="miles" <?php if($from_unit =='miles'){ echo " selected";}?>>miles</option>
                    <option value="millimeters" <?php if( $from_unit =='millimeters'){ echo " selected";}?>>millimeters</option>
                    <option value="centimeters" <?php if($from_unit =='centimeters'){ echo " selected";}?>>centimeters</option>
                    <option value="meters" <?php if($from_unit =='meters'){ echo " selected";}?>>meters</option>
                    <option value="kilometers" <?php if($from_unit =='kilometers'){ echo " selected";}?>>kilometers</option>
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
                <option value="inches" <?php if($to_unit == 'inches'){ echo " selected";}?>>inches</option>
                    <option value="feet" <?php if($to_unit == 'feet'){ echo " selected";}?>>feet</option>
                    <option value="yards" <?php if($to_unit == 'yards'){ echo " selected";}?>>yards</option>
                    <option value="miles" <?php if($to_unit =='miles'){ echo " selected";}?>>miles</option>
                    <option value="millimeters" <?php if($to_unit == 'millimeters'){ echo " selected";}?>>millimeters</option>
                    <option value="centimeters" <?php if($to_unit == 'centimeters'){ echo " selected";}?>>centimeters</option>
                    <option value="meters" <?php if($to_unit == 'meters'){ echo " selected";}?>>meters</option>
                    <option value="kilometers" <?php if($to_unit == 'kilometers'){ echo " selected";}?>>kilometers</option>
                </select>
            </div>
            <input type="submit" name="submit" value="Submit">
        </form>
        <br>
        <a href="../index.php">Return to Menu</a>
    </div>
</body>
</html>