<?php
declare(strict_types=1);

namespace TractorCow\Yesnt\Factory;

use TractorCow\Yesnt\Invokable\InvokableYesntInterface;

/**
 * Interface YesntFactoryInterface
 * @package TractorCow\Yesnt\Factory
 */
interface YesntFactoryInterface
{
    /**
     * @return InvokableYesntInterface
     */
    public function createYesnt(): InvokableYesntInterface;
}
