<?php

namespace Smbkr\Katas\Namespaces;

use PHPUnit\Framework\TestCase;

class NamespaceSortTest extends TestCase
{
    public function namespaceProvider(): array
    {
        return [
            [
               'input' => [
                    'Acme\Bar',
                    'Bar\Acme'
                ],
               'expected' => [
                    'Acme\Bar',
                    'Bar\Acme'
                ]
            ],
            [
                'input' => [
                    'Bar\Acme',
                    'Acme\Bar'
                ],
                'expected' => [
                    'Acme\Bar',
                    'Bar\Acme'
                ]
            ],
            [
                'input' => [
                    'Acme\Aaa\Bar',
                    'Acme\Bar'
                ],
                'expected' => [
                    'Acme\Bar',
                    'Acme\Aaa\Bar'
                ]
            ],
            [
                'input' => [
                    'Acme\Bar\Aa',
                    'Bar\Acme\Aa',
                    'Bar\Aa',
                    'Acme\Bar'
                ],
                'expected' => [
                    'Acme\Bar',
                    'Bar\Aa',
                    'Acme\Bar\Aa',
                    'Bar\Acme\Aa'
                ]
            ],
            [
                'input' => [
                    'Foo\Bar\Zat',
                    'Acme\Foo\Bar',
                    'Aaaaa\Aaaaaaa\Aaaaa\Aaaa\Aaa',
                    'Acme\Foo\Bat',
                    'Acme\AcmeUnit\Test',
                    'Acme\Bar',
                    'Bar'
                ],
                'expected' => [
                    'Bar',
                    'Acme\Bar',
                    'Acme\AcmeUnit\Test',
                    'Acme\Foo\Bar',
                    'Acme\Foo\Bat',
                    'Foo\Bar\Zat',
                    'Aaaaa\Aaaaaaa\Aaaaa\Aaaa\Aaa',
                ]
            ]
        ];
    }
    /**
     * @dataProvider namespaceProvider
     */
    public function testNamespaceSort(array $input, array $expected): void
    {
        $namespaceSort = new NamespaceSort;

        $this->assertEquals($expected, $namespaceSort->sort($input));
    }
}
