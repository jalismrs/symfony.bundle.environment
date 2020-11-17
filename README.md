# symfony.bundle.environment

Adds environment service

## Test

`phpunit` or `vendor/bin/phpunit`

coverage reports will be available in `var/coverage`

## Use

```php
use Jalismrs\Symfony\Bundle\JalismrsEnvironmentBundle\EnvironmentService;

class SomeClass {
    private EnvironmentService $environmentService;

    public function someCall(): void {
        $this->apiThrottler->waitAndIncrease(
            'useCaseKey', // string   $useCaseKey
            'identifier', // string   $identifier
            4,            // int|null $cap
        );
        
        // api call HERE
    }
}
```
