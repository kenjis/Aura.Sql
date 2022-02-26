<?php
namespace Aura\Sql\Parser;

use Yoast\PHPUnitPolyfills\TestCases\TestCase;

class NullParserTest extends TestCase
{
    public function test()
    {
        $parser = new NullParser();
        list ($statement, $values) = $parser->rebuild('foo', ['bar' => 'baz']);
        $this->assertSame('foo', $statement);
        $this->assertSame(['bar' => 'baz'], $values);
    }
}
