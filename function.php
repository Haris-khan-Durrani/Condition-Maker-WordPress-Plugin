<?php
/*
Plugin Name: Condition Maker
Description: Condition Maker Wordpress plugin.
Version: 1.0
Author: Haris Khan
*/

// Shortcode function
function makecodition($atts) {
    // Set default values for attributes
    $atts = shortcode_atts(
        array(
            'input_attribute' => '',
            'input_is_shortcode'=>'yes',
            'compare_is_shortcode'=>'yes',
            'comparison_operator' => '==', // Default to '==', you can modify as needed
            'comparison_value' => '',
            'output_attribute' => '',
            'attr'=>'yes',
            'elseouashort'=>'no',
            'elseout'=>'',
        ),
        $atts,
        'makecond'
    );
    
//    condition check 
$iis=$atts['input_is_shortcode'];
if($iis=="yes"){
    $inpu=$atts['input_attribute'];
     $input_attribute_content = do_shortcode("[$inpu]");
    
}
else{
    $input_attribute_content=$atts['input_attribute'];
}

//comparision 
//    condition check 
$cis=$atts['compare_is_shortcode'];
if($cis=="yes"){
    $inpu=$atts['comparison_value'];
     $comparison_attribute_content = do_shortcode("[$inpu]");
    
}
else{
    $comparison_attribute_content=$atts['comparison_value'];
}


  // Process shortcodes for each attribute
 //   $input_attribute = do_shortcode($atts['input_attribute']);
   // $comparison_value = do_shortcode($atts['comparison_value']);
    //$output_attribute = do_shortcode($atts['output_attribute']);

    // Check the condition based on the provided comparison
    if (isset($atts['input_attribute']) && isset($atts['comparison_value'])) {
        $condition_met = false;

        // Perform the comparison based on the provided operator
        switch ($atts['comparison_operator']) {
            case '==':
                $condition_met = ($input_attribute_content == $comparison_attribute_content);
                break;
            case '===':
                $condition_met = ($input_attribute_content === $comparison_attribute_content);
                break;
            case '!=':
                $condition_met = ($input_attribute_content != $comparison_attribute_content);
                break;
            case '<=':
                $condition_met = ($input_attribute_content <= $comparison_attribute_content);
                break;
            case '>=':
                $condition_met = ($input_attribute_content >= $comparison_attribute_content);
                break;
            case '<':
                $condition_met = ($input_attribute_content < $comparison_attribute_content);
                break;
            case '>':
                $condition_met = ($input_attribute_content > $comparison_attribute_content);
                break;
            case '!':
                $condition_met = !($input_attribute_content == $comparison_attribute_content);
                break;
            case '!==':
                $condition_met = !($input_attribute_content === $comparison_attribute_content);
                break;
            case 'in_array':
                $condition_met = in_array($input_attribute_content, explode(',', $comparison_attribute_content));
                break;

            // Add more cases for other operators if needed

            default:
                // Handle unsupported operators or set a default behavior
                break;
        }

        // If condition is met, process shortcodes in the 'output_attribute'
        if ($condition_met) {
         
                //var_dump($atts['output_attribute']);
                // Check if the $output_attribute contains any shortcode
                if ($atts['attr']=="yes") {
                // Shortcode found in the $output_attribute
                $v=$atts['output_attribute'];
                $output_attribute_content = do_shortcode("[$v]");
                return  $output_attribute_content;
                } else {
                // No shortcode found in the $output_attribute
                return $atts['output_attribute'];
                }
            
        }
        else{
            
            //elseouashort
            if($atts['elseouashort']=="yes"){
                //elseout
                   $v=$atts['elseout'];
                $output_attribute_content = do_shortcode("[$v]");
                return  $output_attribute_content;
            }
            else {
                // No shortcode found in the $output_attribute
                return $atts['elseout'];
                }
            
            
          //  return '<br><span style="color:red">Not Enabled -> This Feature is enabled for few Proposal <b>But not on this one</b></span>';
        }
    }

    // If condition is not met or attributes are not provided, you can provide a default value or handle it accordingly
    
}

// Register the shortcode with the new name
add_shortcode('makecond', 'makecodition');


?>
