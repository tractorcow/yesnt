<?php
declare(strict_types=1);

namespace TractorCow\Yesnt\Provider;

use TractorCow\Yesnt\Invokable\InvokableYesntInterface;

/**
 * Interface YesntProviderInterface
 * @package TractorCow\Yesnt\Provider
 */
interface YesntProviderInterface
{
    public function provideYesnt(): InvokableYesntInterface;
}
