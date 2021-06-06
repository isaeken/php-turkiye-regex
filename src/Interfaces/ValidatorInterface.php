<?php


namespace IsaEken\TurkiyeRegex\Interfaces;


interface ValidatorInterface
{
    /**
     * Validates the string.
     *
     * @param string|array $validate
     * @return bool
     */
    public static function validate(string|array $validate): bool;
}
