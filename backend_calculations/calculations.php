<?php

function calculateFourRings($labelA, $labelB, $multiplier)
{
    $power = (($labelA * 10) + $labelB) * $multiplier;
    return $power;     
}

function resistorQueryShop()
{
    $user = 'root';
    $server = 'localhost';
    $password = '';
    $db = 'resistor_calculator';
    $connection = new mysqli($server, $user, $password, $db);
    $display_prekes_results = array(); // Array to store results
    $shopQuery = "SELECT * FROM `prekes`;";
            $result = $connection->query($shopQuery);
            $prekes_result_rows = $result->num_rows;

            for ($i = 0; $i < $prekes_result_rows; $i++) {
                $display_prekes_result = $result->fetch_assoc();
                $display_prekes_results[] = $display_prekes_result; // Add result to array
            }
            return $display_prekes_results;

}

function resistorQuery($power, $bands)
{
    $user = 'root';
    $server = 'localhost';
    $password = '';
    $db = 'resistor_calculator';
    $connection = new mysqli($server, $user, $password, $db);
    $display_prekes_results = array(); // Array to store results
    
    $powerRanges = [
        [1, 99],
        [100, 999],
        [1000, 9999],
        [10000, 99999],
        [100000, 999999],
        [1000000, 9999999],
        [10000000, 99999999]
    ];

    foreach ($powerRanges as $range) {
        $from = $range[0];
        $to = $range[1];

        if ($power >= $from && $power <= $to) {
            $query = "SELECT * FROM `prekes`, ohm_categories WHERE ohm_id = id AND ohm_range_from <= $to AND ohm_range_to >= $from AND ziedai = $bands;";
            $result = $connection->query($query);
            $prekes_result_rows = $result->num_rows;

            for ($i = 0; $i < $prekes_result_rows; $i++) {
                $display_prekes_result = $result->fetch_assoc();
                $display_prekes_results[] = $display_prekes_result; // Add result to array
            }
            
            break; // Exit the loop once a matching range is found
        }
    }

    return $display_prekes_results; // Return the array of results  

}

function calculateFiveRings($labelA, $labelB, $labelC, $multiplier)
{  
    $power = ((($labelA * 100) + $labelB * 10) + $labelC) * $multiplier;
    return $power;    
}

function calculateSixRings($labelA, $labelB, $labelC, $multiplier)
{
    $power = calculateFiveRings($labelA, $labelB, $labelC, $multiplier);
    return $power;
}

function prettifyCalculationsResult($power)
{
    $precision = 2;
    if ($power < 999) {
        $n_format = number_format($power, $precision);
        $suffix   = '';
    } else if ($power < 999999) {
        
        $n_format = number_format($power / 1000, $precision);
        $suffix   = 'K';
    } else if ($power < 999999999) {
        
        $n_format = number_format($power / 1000000, $precision);
        $suffix   = 'M';
    } else {
        $n_format = number_format($power / 1000000000, $precision);
        $suffix   = 'G';
    }
    
    if ($precision > 0) {
        $dotzero  = '.' . str_repeat('0', $precision);
        $n_format = str_replace($dotzero, '', $n_format);
    }
    
    return $n_format . $suffix . ' Ohms ';
}

?>
