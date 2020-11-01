<?php
require_once 'autoloader.php';

use Model\Schoolboy;
use Model\Student;
use Model\Engineer;
use Model\Mother;
use Model\GirlFriend;
use Model\Wife;
use Model\Restaurant;

error_reporting(E_ALL);
ini_set("display_errors", 1);

$mother = new Mother('Lydmila Ivanovna', 44, 164, 78);
$girl = new GirlFriend('Vika', 18, 164, 53);
$wife = new  Wife('Margo', 18, 164, 53);
$restaurant = new Restaurant();

$schoolBoy = new Schoolboy('Petya', 14, 164, 66, $mother);
$student = new Student('Kolya', 19, 174, 76, $girl);
$engineer = new Engineer('Victor Stepanovich', 38, 187, 103, $wife);
$loserEngineer = new Engineer('Victor Petrovich', 38, 187, 103, $mother);
$loserEngineerWithMoney = new Engineer('Victor Sergeevich', 38, 187, 103, $restaurant);

$schoolBoy->eat();
$student->eat();
$engineer->eat();
$loserEngineer->eat();
$loserEngineerWithMoney->eat();

