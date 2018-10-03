<?php
declare(strict_types=1);

namespace TractorCow\Yesnt\Tests;

use PHPUnit\Framework\TestCase;
use TractorCow\Yesnt\Invokable\Arguments\YesntArgumentBag;
use TractorCow\Yesnt\NotntYesntSupportedException;
use TractorCow\Yesnt\YesntBooleanYesntSupportedException;
use TractorCow\Yesnt\YesntCreationStrategyNotFoundException;
use function TractorCow\Yesnt\yesnt;

/**
 * Class YesntTest
 * @package TractorCow\Yesnt\Tests
 */
class YesntTest extends TestCase
{
    /**
     * @throws NotntYesntSupportedException
     * @throws YesntCreationStrategyNotFoundException
     */
    public function testYesntWithFalse()
    {
        $this->expectException(NotntYesntSupportedException::class);
        yesnt(false);
    }

    /**
     * @throws NotntYesntSupportedException
     * @throws YesntCreationStrategyNotFoundException
     */
    public function testYesntWithFalseArgumentBag()
    {
        $falseYesntArgumentBag = new YesntArgumentBag(false);

        $this->expectException(NotntYesntSupportedException::class);
        yesnt($falseYesntArgumentBag);
    }

    /**
     * @throws NotntYesntSupportedException
     * @throws YesntCreationStrategyNotFoundException
     */
    public function testYesntWithTrue()
    {
        $this->assertFalse(yesnt(true));
    }

    /**
     * @throws NotntYesntSupportedException
     * @throws YesntCreationStrategyNotFoundException
     */
    public function testYesntWithTrueArgumentBag()
    {
        $trueYesntArgumentBag = new YesntArgumentBag(true);
        $this->assertFalse(yesnt($trueYesntArgumentBag));
    }

    /**
     * @throws NotntYesntSupportedException
     * @throws YesntCreationStrategyNotFoundException
     */
    public function testYesntWithNonBooleanArgument()
    {
        $this->expectException(YesntBooleanYesntSupportedException::class);
        yesnt('notnt');
    }
}
