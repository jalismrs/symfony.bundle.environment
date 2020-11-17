<?php
declare(strict_types = 1);

namespace Jalismrs\Symfony\Bundle\JalismrsEnvironmentBundle;

use function strcasecmp;
use function strtoupper;

/**
 * Class EnvironmentService
 *
 * @package Jalismrs\Symfony\Bundle\JalismrsEnvironmentBundle
 */
class EnvironmentService
{
    /**
     * env
     *
     * @var string
     */
    private string $env;
    
    /**
     * EnvironmentService constructor.
     *
     * @param string $env
     */
    public function __construct(
        string $env
    ) {
        $this->env = strtoupper($env);
    }
    
    /**
     * isEnv
     *
     * @param string $env
     *
     * @return bool
     */
    public function isEnv(
        string $env
    ) : bool {
        return strcasecmp(
                $this->getEnv(),
                $env
            ) === 0;
    }
    
    /**
     * getEnv
     *
     * @return string
     */
    public function getEnv() : string
    {
        return $this->env;
    }
}
