<?php

if (!function_exists('yesnt')) {
    /**
     * Not the provided yes
     *
     * @param mixed $yes
     * @return bool Determine if the yes, is not.
     */
    function yesnt($yes = true)
    {
        if (!$yes) {
            throw new InvalidArgumentException("Does not support notnt at this stage");
        }
        return false;
    }
}
