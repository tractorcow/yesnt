<?php
declare(strict_types=1);

namespace TractorCow\Yesnt\Invokable\Arguments;

/**
 * Class YesntArgumentBag
 * @package TractorCow\Yesnt\Invokable\Arguments
 */
class YesntArgumentBag implements YesntArgumentBagInterface
{
    /**
     * @var bool
     */
    protected $yes;

    /**
     * YesntArgumentBag constructor.
     * @param bool $yes
     */
    public function __construct(bool $yes)
    {
        $this->yes = $yes;
    }

    /**
     * @return bool
     */
    public function getYesArgument(): bool
    {
        return $this->yes;
    }
}
