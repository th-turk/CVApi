<?php

require_once 'vendor/autoload.php';






print_r(CVApi::start()->grayscale()->put(['a.png']->results()));