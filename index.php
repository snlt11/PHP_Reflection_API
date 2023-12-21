<?php

include_once("Member.php");

// ----------------Reflection Class------------------------------
//$member = new App\Member();
//
//$reflection = new ReflectionClass('App\Member');
//
//echo $reflection->getShortName() . "<br>";
//echo $reflection->getMethod('getDetailInfo');
//echo "<hr />";
//showData(get_class_methods($reflection));

//-------------------------Reflection Method---------------------------------------
//$reflection = new ReflectionMethod('App\Member','getDetailInfo');
//$member = new \App\Member();
////$reflection->invoke($member,"one");
////echo $reflection->invokeArgs($member,["two"]);
////echo $reflection->isPublic() ? "It's public" : "It's private";
//echo "<hr>";
//showData(get_class_methods($reflection));

//--------------------Reflection Properties-------------------------------------
//$reflection = new ReflectionProperty('App\Member','detailInfo');
//$member = new App\Member();
//$reflection->setAccessible(true);
//showData($reflection->getValue($member));
//showData(get_class_methods($reflection));

//--------------------------Reflection Parameter--------------------------------------
//$reflection = new ReflectionParameter(['App\Member','getDetailInfo'],0);
//echo $reflection->isDefaultValueAvailable() ? $reflection->getDefaultValue() : "false";
//showData(get_class_methods($reflection));


//-------------------------ReflectionObject---------------------------------------
//$member = new App\Member();
//$reflection = new ReflectionObject($member);
//echo $reflection->isUserDefined();
//echo "<br>";
//echo $reflection->isAbstract();
//showData(get_class_methods($reflection));

echo "<br>";
function showData($ary){
    echo "<pre>" . print_r($ary,true) . "</pre>";

}
