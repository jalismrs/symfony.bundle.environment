<?php
declare(strict_types = 1);

namespace Tests;

/**
 * Class EnvironmentServiceProvider
 *
 * @package Tests
 */
final class EnvironmentServiceProvider
{
    /**
     * provideIsEnv
     *
     * @return array
     */
    public function provideIsEnv() : array
    {
        return [
            'yes 1' => [
                'input'  => 'test',
                'output' => true,
            ],
            'yes 2' => [
                'input'  => 'TEST',
                'output' => true,
            ],
            'no'    => [
                'input'  => 'no',
                'output' => false,
            ],
        ];
    }
}
