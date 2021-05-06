// find largent eliment from array
1)

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

2) checkoutput

$x = 9;
echo $x; //9;
echo "<br />";
echo $x+++$x+++$x+++$x+++$x++; //19
// 10+11+9
// 10+11+12+9
// 10+11+12+13+9


echo "<br />";
echo $x; //11
echo "<br />";
echo $x---$x--;// 11 -10 1
echo "<br />";
echo $x; //9
echo "<br />";
echo"=============================";

3) value by reference 

$a = 'abc';
$b="mn";
$b = &$a;
$b = "21$a";

echo"value ".$b;
echo "<br />";
echo$a;

4) var_dump(0123 == 123); //false
var_dump('0123' == 123); //true
var_dump(0123 === 123); //false

5) 
$referenceTable = array();
$referenceTable['val1'] = array(1, 2);
$referenceTable['val2'] = 3;
$referenceTable['val3'] = array(4, 5);

$testArray = array();
$testArray = array_merge($testArray, $referenceTable['val1']);
var_dump($testArray);

$testArray = array_merge($testArray, $referenceTable['val2']);
var_dump($testArray);

$testArray = array_merge($testArray, $referenceTable['val3']);
var_dump($testArray);

6)

$numbers=array(12,23,45,20,5,6,34,17,9,56);
$n=count($numbers);
 for ($c = 0 ; $c < ( $n - 1 ); $c++)
  {
    for ($d = 0 ; $d < ($n - $c - 1); $d++)
    {
      if ($numbers[$d] > $numbers[$d+1]) /* For decreasing order use < */
      {
        $swap = $numbers[$d];
        $numbers[$d]   = $numbers[$d+1];
        $numbers[$d+1] = $swap;
      }
    }
  }
 
echo "Sorted list in ascending order <br />";
 
  for ( $c = 0 ; $c < $n ; $c++ )
     echo $numbers[$c]." ";

7) Reverse Number

$number = 12326;  
$sum = 0;  
while(floor($number)) {  
  $rem = $number % 10;  
  $sum = $sum * 10 + $rem; 
  $number = $number/10; 
   
}  
echo$sum;
echo"<br>";

8) Prime Number

$count = 0;  
$num = 2;  

while ($count < 3 )  
{  
  $div_count=0;  
  for ( $i=1; $i<=$num; $i++)  
  {  
    if (($num%$i)==0)  
    {  
      $div_count++;  
    }  
  }  

  if ($div_count<3)  
  {  
      echo $num." , ";  
      $count=$count+1;  
  }  
    $num=$num+1;  
  }  

9) Heighest number from array

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


