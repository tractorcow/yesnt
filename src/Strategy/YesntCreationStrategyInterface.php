<?php
declare(strict_types=1);

namespace TractorCow\Yesnt\Strategy;

use TractorCow\Yesnt\Invokable\InvokableYesntInterface;

/**
 * Interface InvokableYesntCreationStrategyInterface
 * @package TractorCow\Yesnt\Strategy
 */
interface YesntCreationStrategyInterface
{
    public function createYesnt(): InvokableYesntInterface;
}
