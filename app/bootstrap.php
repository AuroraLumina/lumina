<?php

namespace App;

use AuroraLumina\Container;
use AuroraLumina\Factory\ApplicationFactory;

$container  = new Container;
$app        = ApplicationFactory::createApplication($container);

(require_once __DIR__ . '/../infrastructure/container.php')($container);
(require_once __DIR__ . '/../infrastructure/routes.php')($app);

return $app;