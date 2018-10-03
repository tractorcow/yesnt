<?php
declare(strict_types=1);

namespace TractorCow\Yesnt\Provider;

use TractorCow\Yesnt\Strategy\InvokableYesntCreationStrategy;
use TractorCow\Yesnt\Strategy\YesntCreationStrategyInterface;
use TractorCow\Yesnt\YesntCreationStrategyNotFoundException;

/**
 * Class YesntCreationStrategyProvider
 * @package TractorCow\Yesnt\Provider
 */
class YesntCreationStrategyProvider implements YesntCreationStrategyProviderInterface
{
    /**
     * @var null|YesntCreationStrategyProviderInterface
     */
    protected static $defaultYesntCreationStrategyProvider = null;

    /**
     * @var \ReflectionClass
     */
    protected $yesntCreationStrategyClass;

    /**
     * YesntCreationStrategyProvider constructor.
     * @param \ReflectionClass $yesntCreationStrategyClass
     */
    public function __construct(\ReflectionClass $yesntCreationStrategyClass)
    {
        $this->yesntCreationStrategyClass = $yesntCreationStrategyClass;
    }

    /**
     * @return YesntCreationStrategyProviderInterface
     * @throws YesntCreationStrategyNotFoundException
     */
    public static function getDefaultYesntCreationStrategyProvider(): YesntCreationStrategyProviderInterface
    {
        if (static::$defaultYesntCreationStrategyProvider === null) {
            $defaultYesntCreationStrategyClass = static::getDefaultYesntCreationStrategyClass();
            $defaultYesntCreationStrategyProvider = new static($defaultYesntCreationStrategyClass);
            static::setDefaultYesntCreationStrategyProvider($defaultYesntCreationStrategyProvider);
        }

        return static::$defaultYesntCreationStrategyProvider;
    }

    /**
     * @param null|YesntCreationStrategyProviderInterface $defaultYesntCreationStrategyProvider
     */
    public static function setDefaultYesntCreationStrategyProvider(
        ?YesntCreationStrategyProviderInterface $defaultYesntCreationStrategyProvider
    ): void {
        static::$defaultYesntCreationStrategyProvider = $defaultYesntCreationStrategyProvider;
    }

    /**
     * @return \ReflectionClass
     * @throws YesntCreationStrategyNotFoundException
     */
    protected static function getDefaultYesntCreationStrategyClass(): \ReflectionClass
    {
        try {
            $defaultYesntCreationStrategyClass = new \ReflectionClass(InvokableYesntCreationStrategy::class);
            return $defaultYesntCreationStrategyClass;
        } catch (\ReflectionException $reflectionException) {
            throw new YesntCreationStrategyNotFoundException($reflectionException->getMessage(),
                $reflectionException->getCode(), $reflectionException);
        }
    }

    /**
     * @return YesntCreationStrategyInterface
     */
    public function provideYesntCreationStrategy(): YesntCreationStrategyInterface
    {
        /** @var YesntCreationStrategyInterface $yesntCreationStrategy */
        $yesntCreationStrategy = $this->yesntCreationStrategyClass->newInstance();
        return $yesntCreationStrategy;
    }
}
