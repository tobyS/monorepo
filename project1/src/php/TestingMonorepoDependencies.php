<?php

namespace Monorepo;

use Symfony\Component\HttpKernel\Exception;

class TestingMonorepoDependencies
{
    function foo()
    {
        $kernel = new Exception\BadRequestHttpException('Test');
    }
}
