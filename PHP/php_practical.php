// find largent eliment from array

function multimax( $array ) {
    foreach( $array as $value ) {
        if( is_array($value) ) {
            $subvalue = multimax($value);

            // if the returned $subvalue is greater than our current highest value,
            // set it as our $return value.
            if( $subvalue > $return ) {
                $return = $subvalue;
            }

        } elseif($value > $return) {
            // ... $value is not an array so set the return variable if it's greater
            // than our highest value so far.
            $return = $value;
        }
    }

    // return (what should be) the highest value from any dimension.
    return $return;
}

$arr= array(array(141,151,161),2,3,array(101,202,array(303,404,600)));
$max = multimax($arr);
var_dump($max);

