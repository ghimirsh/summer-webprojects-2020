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
?>