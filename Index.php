<?php
require_once("Human.php");

$human = new Human(
    "Martin",
    "112233",
           11.12,
    new DateTime('2006-06-06')
);

$human->printNameWithGreeting("Hej ");


