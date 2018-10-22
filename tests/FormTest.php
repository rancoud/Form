<?php

declare(strict_types=1);

namespace Rancoud\Form\Test;

use PHPUnit\Framework\TestCase;
use Rancoud\Form\Form;

/**
 * Class FormTest.
 */
class FormTest extends TestCase
{
    public function testConstruct()
    {
        new Form();
        static::assertTrue(true);
    }
}
