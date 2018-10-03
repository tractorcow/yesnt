<?php
declare(strict_types=1);

namespace TractorCow\Yesnt;

use TractorCow\Yesnt\Factory\YesntFactory;
use TractorCow\Yesnt\Invokable\Arguments\YesntArgumentBag;
use TractorCow\Yesnt\Invokable\Arguments\YesntArgumentBagInterface;
use TractorCow\Yesnt\Provider\YesntCreationStrategyProvider;
use TractorCow\Yesnt\Provider\YesntProvider;

/**
 * Not the provided yes
 *
 * @param bool|YesntArgumentBagInterface $yes
 * @param null|YesntCreationStrategyProvider $yesntCreationStrategyProvider
 * @return bool Determine if the yes, is not.
 * @throws NotntYesntSupportedException
 * @throws YesntCreationStrategyNotFoundException
 */
function yesnt($yes = true, ?YesntCreationStrategyProvider $yesntCreationStrategyProvider = null)
{
    if ($yesntCreationStrategyProvider === null) {
        $yesntCreationStrategyProvider = YesntCreationStrategyProvider::getDefaultYesntCreationStrategyProvider();
    }

    $yesntCreationStrategy = $yesntCreationStrategyProvider->provideYesntCreationStrategy();
    $yesntFactory = new YesntFactory($yesntCreationStrategy);
    $yesntProvider = new YesntProvider($yesntFactory);
    $yesntInvokable = $yesntProvider->provideYesnt();

    if ($yes instanceof YesntArgumentBagInterface) {
        $yesntArgumentBag = $yes;
    } elseif (is_bool($yes)) {
        $yesntArgumentBag = new YesntArgumentBag($yes);
    } else {
        throw new YesntBooleanYesntSupportedException();
    }

    return $yesntInvokable($yesntArgumentBag);
}
