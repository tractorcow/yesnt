<?php
declare(strict_types=1);

namespace TractorCow\Yesnt\Factory;

use TractorCow\Yesnt\Invokable\InvokableYesnt;
use TractorCow\Yesnt\Invokable\InvokableYesntInterface;
use TractorCow\Yesnt\Strategy\YesntCreationStrategyInterface;

/**
 * Class YesntFactory
 * @package TractorCow\Yesnt\Factory
 */
class YesntFactory implements YesntFactoryInterface
{
    /**
     * @var YesntCreationStrategyInterface
     */
    protected $invokableYesntCreationStrategy;

    /**
     * YesntFactory constructor.
     * @param YesntCreationStrategyInterface $invokableYesntCreationStrategy
     */
    public function __construct(YesntCreationStrategyInterface $invokableYesntCreationStrategy)
    {
        $this->invokableYesntCreationStrategy = $invokableYesntCreationStrategy;
    }

    /**
     * @return InvokableYesntInterface
     */
    public function createYesnt(): InvokableYesntInterface
    {
        return $this->invokableYesntCreationStrategy->createYesnt();
    }
}
