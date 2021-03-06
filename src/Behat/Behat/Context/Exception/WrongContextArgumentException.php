<?php

/*
 * This file is part of the Behat.
 * (c) Konstantin Kudryashov <ever.zet@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Behat\Behat\Context\Exception;

use InvalidArgumentException;

/**
 * Represents an exception when provided argument is not acceptable by the context.
 *
 * @author Konstantin Kudryashov <ever.zet@gmail.com>
 */
final class WrongContextArgumentException extends InvalidArgumentException implements ContextException
{
}
