<?php

namespace App;

use AuroraLumina\Factory\ApplicationFactory;

$app = ApplicationFactory::createApplication();

(require_once __DIR__ . '/container.php')($app);
(require_once __DIR__ . '/routes/api.php')($app);

return $app;