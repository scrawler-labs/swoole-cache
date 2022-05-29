<?php

declare(strict_types=1);

namespace Scrawler\Cache\Exception;

use Psr\SimpleCache\InvalidArgumentException as PsrInvalidArgumentException;

final class InvalidArgumentException extends \InvalidArgumentException implements PsrInvalidArgumentException
{
}
