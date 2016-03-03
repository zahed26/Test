<?php
$arr=[1,2,3];
//print_r($arr);

$arrIn=[
    'Fist_name'=> 'Zahid',
    'Last_Name'=> 'Hossain',
    ];

//print_r($arrIn);
//echo $arrIn['Last_Name'];


$arrr=[
  10=> 'Ten',
  9=> 'Nine',
  8=> 'Eight',
  7=> 'Seven',
  6=> 'Six'
];

//print_r($arrr);



$arrayy=(object) [
    'zero'=> 'zero',
    'one'=> 1,
    'nine'=> 9,
    'eight'=>8,
    'seven'=>7,
    'ni'=> 9,
    'two'=> [
        1=>'one',
        2=>'two',
        3=>[
            30=>.2554524,
            35=>.3123232,
            39=>23156.21,
        ],
        4=>'four',
        ],
    'three'=> 3,
    'four'=> 4,
    'five'=> 5,
    ];

/*print_r($arrayy);
echo $arrayy->two[3][35]=1.894;
print_r($arrayy->two[3]);
exit;
unset($arrayy['two'][2]);
print_r($arrayy);


echo current($arrayy);
next($arrayy);
prev($arrayy);
echo current($arrayy);

echo end($arrayy);
*/
echo current($arrayy);
next($arrayy);
next($arrayy);
next($arrayy);
next($arrayy);
prev($arrayy);
end($arrayy);
prev($arrayy);
echo current($arrayy);
