<?php

require "User.php";
require "UserObserver.php";

$observer = new UserObserver();

$user = new User( new \SplObjectStorage());
$user->attach($observer);

$user->changeName('user');
$user->changeEmail('example@example.com');

print_r($observer->getChangedUsers());
unset($user, $observer);