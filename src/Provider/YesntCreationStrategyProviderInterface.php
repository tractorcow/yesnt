<?php
declare(strict_types=1);

namespace TractorCow\Yesnt\Provider;

use TractorCow\Yesnt\Strategy\YesntCreationStrategyInterface;

/**
 * Interface YesntCreationStrategyProviderInterface
 * @package TractorCow\Yesnt\Provider
 */
interface YesntCreationStrategyProviderInterface
{
    public function provideYesntCreationStrategy(): YesntCreationStrategyInterface;
}
