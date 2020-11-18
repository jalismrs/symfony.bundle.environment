# symfony.bundle.environment

Adds environment service

## Test

`phpunit` or `vendor/bin/phpunit`

coverage reports will be available in `var/coverage`

## Use

### getEnv
```php
use Jalismrs\Symfony\Bundle\JalismrsEnvironmentBundle\EnvironmentService;

class SomeClass {
    private EnvironmentService $environmentService;

    public function someCall(): void {
        $env = $this->environmentService->getEnv();
        
        // do something
    }
}
```

### isEnv
```php
use Jalismrs\Symfony\Bundle\JalismrsEnvironmentBundle\EnvironmentService;

class SomeClass {
    private EnvironmentService $environmentService;

    public function someCall(): void {
        $isEnvValue = $this->environmentService->isEnv('value');
        
        // do something
    }
}
```
