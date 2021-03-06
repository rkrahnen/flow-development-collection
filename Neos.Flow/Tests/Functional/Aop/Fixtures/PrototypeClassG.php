<?php
namespace Neos\Flow\Tests\Functional\Aop\Fixtures;

/*
 * This file is part of the Neos.Flow package.
 *
 * (c) Contributors of the Neos Project - www.neos.io
 *
 * This package is Open Source Software. For the full copyright and license
 * information, please view the LICENSE file which was distributed with this
 * source code.
 */

use Neos\Flow\Annotations as Flow;

/**
 * A class of scope prototype (but without explicit scope annotation)
 */
abstract class PrototypeClassG
{
    public $realOrCloned = 'real';


    public function __clone()
    {
        $this->realOrCloned = 'cloned!';
    }
}
