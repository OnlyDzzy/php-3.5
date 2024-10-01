<?php

//Задача 1: Создание простого массива

$massive = ["Ivan","Oleg","Egor","Dimon"];
forEach($massive as $sas){
    echo $sas. "\n"; 
};

//Задача 2: Индексы массива

$maseve =[1,4,6,3,14,5];
echo $maseve[2]."\n";

//Задача 3: Ассоциативный массив

$masas = ["name"=>"pbIlnik","age"=> 26,"sity"=> "Moscow"];
forEach($masas as $key=>$znach){
 if($key=="name"){
    echo $znach."\n";
    };
    if($key=="age"){
        echo $znach."\n";
        };
};

//Задача 4: Массивы с циклами

$masve =[1,43,64,3,14,55];
forEach($masve as $val){
    if($val>=10){
        echo $val ." ";
    };
};

//Задача 5: Работа с массивами функций

$masvek =[1,43,64,3,14];
echo "\n".array_sum($masvek)."\n";

//Задача 10: Фильтрация массива

$masv =[1,43,64,3,14,2,6,9,1,6834,231,5,2];
$filtr=[];
forEach($masv as $rer){
    if($rer%2===0){
        $filtr = $rer; 
        echo $filtr." ";
    };
};


