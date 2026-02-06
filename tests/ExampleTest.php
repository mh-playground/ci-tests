<?php

declare(strict_types=1);

namespace Playground\Ci\Tests\ExampleTest;

use PHPUnit\Framework\TestCase;
use Playground\Ci\Example\Example;

/**
 * @covers \Playground\Ci\Example\Example
 *
 * @internal
 */
class ExampleTest extends TestCase
{
    public function testHelloWorldOutputsText(): void
    {
        $example = new Example();

        \ob_start();
        $example->helloWorld();
        $output = \ob_get_clean();

        self::assertSame('Hello World!', $output);
    }
}
