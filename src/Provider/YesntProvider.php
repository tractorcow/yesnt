<?php
declare(strict_types=1);

namespace TractorCow\Yesnt\Provider;

use TractorCow\Yesnt\Factory\YesntFactoryInterface;
use TractorCow\Yesnt\Invokable\InvokableYesntInterface;

/**
 * Class YesntProvider
 * @package TractorCow\Yesnt\Provider
 */
class YesntProvider implements YesntProviderInterface
{
    /**
     * @var YesntFactoryInterface
     */
    protected $yesntFactory;

    /**
     * YesntProvider constructor.
     * @param YesntFactoryInterface $yesntFactory
     */
    public final function __construct(YesntFactoryInterface $yesntFactory)
    {
        $this->yesntFactory = $yesntFactory;
    }

    /**
     * @return InvokableYesntInterface
     */
    public function provideYesnt(): InvokableYesntInterface
    {
        return $this->yesntFactory->createYesnt();
    }
}
