<?php
declare(strict_types=1);

namespace TractorCow\Yesnt\Invokable;

use TractorCow\Yesnt\Invokable\Arguments\YesntArgumentBagInterface;
use TractorCow\Yesnt\NotntYesntSupportedException;

/**
 * Class InvokableYesnt
 * @package TractorCow\Yesnt\Invokable
 */
class InvokableYesnt implements InvokableYesntInterface
{
    /**
     * @param YesntArgumentBagInterface $yesntArgumentBag
     * @return bool|mixed
     * @throws NotntYesntSupportedException
     */
    public function __invoke(YesntArgumentBagInterface $yesntArgumentBag)
    {
        if ($yesntArgumentBag->getYesArgument() !== true) {
            throw new NotntYesntSupportedException('Notnt support yesnt available at this stage.');
        }

        return false;
    }
}
