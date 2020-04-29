<?php
    //Creates an array to hold metric conversion values

    const LENGTH_TO_METER = array(
        "inches" => 0.0254,
        "feet" => 0.3048,
        "yards" => 0.9144,
        "miles" =>1609.344,
        "millimeters" => 0.001,
        "centimeters" => 0.01,
        "meters" => 1,
        "kilometers" => 1000,
        "acres" => 63.614907234075,
        "hectares" => 100
    );

    //Creates a const array to hold volume units
    const   VOLUME_TO_LITER = array(
        "cubic_inches" => 0.0163871,
        "cubic_feet" => 28.3168,
        "cubic_centimeters" => 0.001,
        "cubic_meters" => 1000,
        "imperial_gallons" => 4.54609,
        "imperial_quarts" => 1.13652,
        "imperial_pints" => 0.568261,
        "imperial_cups" => 0.284131,
        "imperial_ounces" => 0.0284131,
        "imperial_tablespoons" => 0.0177582,
        "imperial_teaspoons" => 0.00591939,
        "us_gallons" => 3.78541,
        "us_quarts" => 0.946353,
        "us_pints" => 0.473176,
        "us_cups" => 0.24,
        "us_ounces" => 0.0295735,
        "us_tablespoons" => 0.0147868,
        "us_teaspoons" => 0.00492892,
        "liters" => 1,
        "milliliters" => 0.001,

    );

    //const array to hold mass to kilograms conversion values
    const MASS_TO_KILOGRAM = array(
        "ounces" =>	0.0283495,
        "pounds" =>	0.453592,
        "stones" =>	6.35029,
        "long_tons" =>	1016.05,
        "short_tons" =>	907.185,
        "milligrams" =>	0.000001,
        "grams" =>	0.001,
        "kilograms" =>	1,
        "metric_tonnes" =>	1000
    );

    function float_to_string($float,$precision=20){
        //echo "testing : " .  gettype($float);
        $float = (float) $float;//converts $float into float data type explicitly
        $string = number_format($float,$precision,'.',''); //formats the numbers upto 20 dp precision 
        //echo "testing: ". $new_value;
        $string = rtrim($string,'0');//to remove trailing zeros (0s) after decimal point , only removes 0s if not followed by other non-zero digits
        $string = rtrim($string,'.');//removes decimal point (.) if there are no other digits after it
        return $string;
    }

    function optionize($string){
        return str_replace(' ','_', strtolower( $string));
    }

    ////////////////////////////
    //Length convert
   function convert_to_meters($value=0.0, $from_unit){
       //codes to conve"rt using const array
       if(array_key_exists($from_unit,LENGTH_TO_METER)){
            return $value * LENGTH_TO_METER[$from_unit];
       }else{
           return "Unsupported Unit.";
       }
       
       //cdoes to convert using switch case
    // switch ($from_unit){
    //     case "inches":
    //         return $value * 0.0254 ;
    //         break;
    //     case "feet":
    //         return $value * 0.3048;
    //         break;
    //     case "yards":
    //         return $value * 0.9144;
    //         break;
    //     case "miles":
    //         return $value * 1609.344;
    //         break;
    //     case "millimeters":
    //         return $value * 0.001;
    //         break;
    //     case "centimeters":
    //         return $value * 0.01;
    //         break;
    //     case "meters":
    //         return $value * 1;
    //         break;
    //     case "kilometers":
    //         return $value * 1000;
    //         break;
    //     default:
    //             return "Unsupported Unit.";
    //     break;
    // }
    // return "Unsupported Unit.";
}

//Method to convert from meters to other units
function convert_from_meters($value=0.0, $to_unit){
     //codes to convert using const array
     if(array_key_exists($to_unit,LENGTH_TO_METER)){
        return $value / LENGTH_TO_METER[$to_unit];
   }else{
       return "Unsupported Unit.";
   }

   //code to convert from meters to other units using switch
    // switch ($to_unit){
    //     case "inches":
    //         return $value / 0.0254 ;
    //         break;
    //     case "feet":
    //         return $value / 0.3048;
    //         break;
    //     case "yards":
    //         return $value / 0.9144;
    //         break;
    //     case "miles":
    //         return $value / 1609.344;
    //         break;
    //     case "millimeters":
    //         return $value / 0.001;
    //         break;
    //     case "centimeters":
    //         return $value / 0.01;
    //         break;
    //     case "meters":
    //         return $value / 1;
    //         break;
    //     case "kilometers":
    //         return $value / 1000;
    //         break;
    //     default:
    //             return "Unsupported Unit.";
    //     break;
    // }
    // return "Unsupported Unit.";
}

//method that calls both convert methods
function convert_length($value, $from_unit, $to_unit){
    $meter_value = convert_to_meters($value, $from_unit);
    $new_value = convert_from_meters($meter_value, $to_unit);
    return $new_value;
} 


////////////////////////////////////////////////////////
//Methods for Areas
function convert_to_square_meters($value=0.0, $from_unit){
    //codes to convert to square_meters using const array
    $from_unit = str_replace('square_','',$from_unit);
    if(array_key_exists($from_unit,LENGTH_TO_METER)){
        return $value * pow(LENGTH_TO_METER[$from_unit],2);
    }else{
       return "Unsupported Unit.";
    }

    //conversion using switch
    // switch ($from_unit){
    //     case "square_inches":
    //         return $value * pow( 0.0254, 2) ;
    //         break;
    //     case "square_feet":
    //         return $value * pow( 0.3048,2);
    //         break;
    //     case "square_yards":
    //         return $value * pow(0.9144,2);
    //         break;
    //     case "square_miles":
    //         return $value * pow(1609.344,2);
    //         break;
    //     case "square_millimeters":
    //         return $value * pow(0.001,2);
    //         break;
    //     case "square_centimeters":
    //         return $value * pow(0.01,2);
    //         break;
    //     case "square_meters":
    //         return $value;
    //         break;
    //     case "square_kilometers":
    //         return $value * pow(1000,2);
    //         break;
    //     case "acres":
    //         return $value * 4046.8564224;
    //         break;
    //     case "hectares":
    //         return $value * 10000;
    //         break;
    //     default:
    //             return "Unsupported Unit.";
    //     break;
    // }
    // return "Unsupported Unit.";
}

//Method to convert from meters to other units
function convert_from_square_meters($value=0.0, $to_unit){
    //codes to conve"rt using const array
    $to_unit = str_replace('square_','',$to_unit);
    if(array_key_exists($to_unit,LENGTH_TO_METER)){
        return $value / pow(LENGTH_TO_METER[$to_unit],2);
    }else{
        return "Unsupported Unit.";
    }

    //conversion using switch
    // switch ($to_unit){
    //     case "square_inches":
    //         return $value / pow(0.0254,2) ;
    //         break;
    //     case "square_feet":
    //         return $value / pow(0.3048,2);
    //         break;
    //     case "square_yards":
    //         return $value / pow(0.9144,2);
    //         break;
    //     case "square_miles":
    //         return $value / pow(1609.344,2);
    //         break;
    //     case "square_millimeters":
    //         return $value / pow(0.001,2);
    //         break;
    //     case "square_centimeters":
    //         return $value / pow(0.01,2);
    //         break;
    //     case "square_meters":
    //         return $value;
    //         break;
    //     case "square_kilometers":
    //         return $value / pow(1000,2);
    //         break;
    //     case "acres":
    //         return $value / 4046.8564224;
    //         break;
    //     case "hectares":
    //         return $value / 10000;
    //         break;
    //     default:
    //             return "Unsupported Unit.";
    //     break;
    // }
    // return "Unsupported Unit.";
}

//method that calls both convert methods
function convert_area($value, $from_unit, $to_unit){
    $meter_value = convert_to_square_meters($value, $from_unit);
    $new_value = convert_from_square_meters($meter_value, $to_unit);
    return $new_value;
}



    //////////////////////////////////////
    //Volume section
    //function to convert from other units to liters
    function convert_to_liters($value,$from_unit){   
        if(array_key_exists($from_unit,VOLUME_TO_LITER)){
            return $value * VOLUME_TO_LITER[$from_unit];
        }else{
            return "Unsupported Unit.";
        }
    }

    //function to convert from liters to other units
    function convert_from_liters($value,$to_unit){
        if(array_key_exists($to_unit,VOLUME_TO_LITER)){
            return $value / VOLUME_TO_LITER[$to_unit];
        }else{
            return "Unsupported Unit.";
        }
    }
    function convert_volume($value, $from_unit, $to_unit){
        $liter_value = convert_to_liters($value,$from_unit);
        $new_value = convert_from_liters($liter_value, $to_unit);
        return $new_value;
    }


    ////////////////////////////////////////////////////
    //Mass and Kilograms Conversion
     //Volume section
    //function to convert from other units to liters
    function convert_to_kilograms($value,$from_unit){   
        if(array_key_exists($from_unit,MASS_TO_KILOGRAM)){
            return $value * MASS_TO_KILOGRAM[$from_unit];
        }else{
            return "Unsupported Unit.";
        }
    }

    //function to convert from liters to other units
    function convert_from_kilograms($value,$to_unit){
        if(array_key_exists($to_unit,MASS_TO_KILOGRAM)){
            return $value / MASS_TO_KILOGRAM[$to_unit];
        }else{
            return "Unsupported Unit.";
        }
    }
    function convert_mass($value, $from_unit, $to_unit){
        $liter_value = convert_to_kilograms($value,$from_unit);
        $new_value = convert_from_kilograms($liter_value, $to_unit);
        return $new_value;
    }
?>