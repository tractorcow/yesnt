<?php
declare(strict_types=1);

namespace TractorCow\Yesnt\Invokable\Arguments;

/**
 * Interface YesntArgumentBagInterface
 * @package TractorCow\Yesnt\Invokable\Arguments
 */
interface YesntArgumentBagInterface
{
    /**
     * @return bool
     */
    public function getYesArgument(): bool;
}
