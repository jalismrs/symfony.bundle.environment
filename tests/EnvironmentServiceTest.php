<?php
declare(strict_types = 1);

namespace Tests;

use Jalismrs\Symfony\Bundle\JalismrsEnvironmentBundle\EnvironmentService;
use PHPUnit\Framework\TestCase;

/**
 * Class EnvironmentServiceTest
 *
 * @package Tests
 *
 * @covers  \Jalismrs\Symfony\Bundle\JalismrsEnvironmentBundle\EnvironmentService
 */
final class EnvironmentServiceTest extends
    TestCase
{
    /**
     * testIsEnv
     *
     * @param string $providedInput
     * @param bool   $providedOutput
     *
     * @return void
     *
     * @throws \PHPUnit\Framework\ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     * @throws \Symfony\Component\DependencyInjection\Exception\ParameterNotFoundException
     *
     * @dataProvider \Tests\EnvironmentServiceProvider::provideIsEnv
     */
    public function testIsEnv(
        string $providedInput,
        bool $providedOutput
    ) : void {
        // arrange
        $systemUnderTest = $this->createSUT();
        
        // act
        $output = $systemUnderTest->isEnv($providedInput);
        
        // assert
        self::assertSame(
            $providedOutput,
            $output
        );
    }
    
    /**
     * createSUT
     *
     * @return \Jalismrs\Symfony\Bundle\JalismrsEnvironmentBundle\EnvironmentService
     */
    private function createSUT() : EnvironmentService {
        return new EnvironmentService(
            'test'
        );
    }
    
    /**
     * testGetEnv
     *
     * @return void
     *
     * @throws \PHPUnit\Framework\ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     * @throws \Symfony\Component\DependencyInjection\Exception\ParameterNotFoundException
     */
    public function testGetEnv() : void
    {
        // arrange
        $systemUnderTest = $this->createSUT();
        
        // act
        $output = $systemUnderTest->getEnv();
        
        // assert
        self::assertSame(
            'TEST',
            $output
        );
    }
}
