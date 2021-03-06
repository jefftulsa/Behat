<?php

namespace Everzet\Gherkin\Node;

/*
 * This file is part of the Gherkin.
 * (c) 2010 Konstantin Kudryashov <ever.zet@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * Node Visitor Interface.
 *
 * @author      Konstantin Kudryashov <ever.zet@gmail.com>
 */
interface NodeVisitorInterface
{
    public function visit($visitee);
}
