<?php

require '../config/Bootloader.php';
require '../config/App.php';

$bootloader = new Bootloader();

$app = $bootloader->buildApp();