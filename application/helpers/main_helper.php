<?php

$ci = get_instance();

$ci->assets = ENVIRONMENT == 'development' ? __DIR__ . '/../../assets/' : '';
