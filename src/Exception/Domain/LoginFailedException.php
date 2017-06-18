<?php

namespace Pnz\MattermostClient\Exception\Domain;

use Pnz\MattermostClient\Exception\DomainException;
use Pnz\MattermostClient\Exception\GenericApiException;

final class LoginFailedException extends GenericApiException implements DomainException
{
}