<?php
declare(strict_types=1);

namespace TractorCow\Yesnt\Strategy;

use TractorCow\Yesnt\Invokable\InvokableYesnt;
use TractorCow\Yesnt\Invokable\InvokableYesntInterface;

/**
 * Class InvokableYesntCreationStrategy
 * @package TractorCow\Yesnt\Strategy
 */
class InvokableYesntCreationStrategy implements YesntCreationStrategyInterface
{
    /**
     * @return InvokableYesntInterface
     */
    public function createYesnt(): InvokableYesntInterface
    {
        return new InvokableYesnt();
    }
}
