<?php
declare(strict_types=1);

namespace TractorCow\Yesnt\Invokable;

use TractorCow\Yesnt\Invokable\Arguments\YesntArgumentBagInterface;
use TractorCow\Yesnt\NotntYesntSupportedException;

/**
 * Interface InvokableYesntInterface
 * @package TractorCow\Yesnt\Invokable
 */
interface InvokableYesntInterface
{
    /**
     * @param YesntArgumentBagInterface $yes
     * @return mixed
     * @throws NotntYesntSupportedException
     */
    public function __invoke(YesntArgumentBagInterface $yes);
}
