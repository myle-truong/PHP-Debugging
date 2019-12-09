<?php
declare(strict_types=1);

echo "Exercise 1 starts here:";

function new_exercise($x) {
    $block = "<br/><hr/><br/><br/>Exercise $x starts here:<br/>";
    echo $block;
}


new_exercise(2);
$week = ["monday", "tuesday", "wednesday", "thursday", "friday", "saturday", "sunday"];
$monday = $week[0];
echo $monday;



new_exercise(3);
$str = "Debugged ! Also very fun";
echo substr($str, 0, 10);



new_exercise(4);
foreach($week as &$day) {
  $day = substr($day, 0, strlen($day)-3);
}
print_r($week);



new_exercise(5);
$arr = [];
for ($letter = 'a'; $letter <'z'; $letter++) {
    array_push($arr, $letter);
}

print_r($arr);

new_exercise(6);
$arr = [];


function combineNames($str1 = "", $str2 = "") {
    $params = [$str1, $str2];
    foreach($params as $index => &$param) {
        if ($param == "") {
            $param = randomHeroName($index);
        }
    }
    return implode(" - ", $params);
}

function randomHeroName($index=0)
{
    $hero_firstnames = ["captain", "doctor", "iron", "Hank", "ant", "Wasp", "the", "Hawk", "Spider", "Black", "Carol"];
    $hero_lastnames = ["America", "Strange", "man", "Pym", "girl", "hulk", "eye", "widow", "panther", "daredevil", "marvel"];
    $heroes = [$hero_firstnames, $hero_lastnames];
    $randname = ucfirst($heroes[$index][rand(0, 10)]);
    return $randname;
}

echo "Here is the name: " . combineNames();

new_exercise(7);
function copyright(int $year) {
  return "&copy; $year BeCode";
}
//print the copyright
echo copyright((int)date('Y'));

new_exercise(8);
function login(string $email, string $password) {
    if($email == 'john@example.be' && $password == 'pocahontas') {
        return 'Welcome John';
        return ' Smith';
    }
    return 'No access';
}
//should great the user with his full name (John Smith)
$login = login('john@example.be', 'pocahontas');
echo $login;
//no access
$login = login('john@example.be', 'dfgidfgdfg');
echo $login;
//no access
$login = login('wrong@example.be', 'wrong');
echo $login;

new_exercise(9);
function isLinkValid(string $link) {
    $unacceptables = array('https:','.doc','.pdf', '.jpg', '.jpeg', '.gif', '.bmp', '.png');

    foreach ($unacceptables as $unacceptable) {
        if (strpos($link, $unacceptable) == true) {
            return 'Unacceptable Found<br />';
        }
    }
    return 'Acceptable<br />';
}
//invalid link
isLinkValid('http://www.google.com/hack.pdf');
//invalid link
isLinkValid('https://google.com');
//VALID link
isLinkValid('http://google.com');
//VALID link
isLinkValid('http://google.com/test.txt');

new_exercise(10);

//*Filter the array $areTheseFruits to only contain valid fruits
//*do not change the arrays itself
$areTheseFruits = ['apple', 'bear', 'beef', 'banana', 'cherry', 'tomato', 'car'];
$validFruits = ['apple', 'pear', 'banana', 'cherry', 'tomato'];
//from here on you can change the code
for($i=0; $i <= count($areTheseFruits); $i++) {
    if(!in_array($areTheseFruits[$i], $validFruits)) {
        unset($areTheseFruits[$i]);
    }
}
var_dump($areTheseFruits);//do not change this
