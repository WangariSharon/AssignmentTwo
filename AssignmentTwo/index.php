<?php
// Load the config
require './application/config/config.php';

// Load models
require './application/models/actor.php';

// Load the application
require './application/lib/application.php';

// Run Application
$app = new Application();

$app->index();
