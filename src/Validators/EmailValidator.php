<?php

namespace Askonomm\Bouncer\Validators;

/**
 * Implements an e-mail validator that has a job 
 * of validating e-mail addresses.
 * 
 * @author Asko Nomm <asko@bien.ee>
 */
class EmailValidator implements Validator
{
    /**
     * Returns a boolean `true` when given `$value` is a valid e-mail
     * address. Returns `false` otherwise.
     *
     * @param string $value
     * @param mixed $modifier
     * @return boolean
     */
    public static function validate(string $value, mixed $modifier = null): bool
    {
        return filter_var($value, FILTER_VALIDATE_EMAIL);
    }

    /**
     * Composes the error message in case the validation fails.
     *
     * @param string $field
     * @param mixed $modifier
     * @return string
     */
    public static function composeError(string $field, mixed $modifier = null): string
    {
        return "${field} is not a valid e-mail address.";
    }
}