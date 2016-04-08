<?php

namespace toantv;

/**
 * Class PDFlibException
 *
 * @author Jackson Tong <jackson@snapfrozen.com.au>
 */
class PDFlibException extends \PDFlibException
{
    /**
     * @return integer The error code of the most recent error condition
     */
    public function get_errnum()
    {
        return parent::get_errnum();
    }

    /**
     * Get the name of the API function
     * which threw the last exception or failed.
     * @return string The name of the API function which threw an exception,
     * or the name of the most recently called function
     * which failed with an error code.
     */
    public function get_apiname()
    {
        return parent::get_apiname();
    }

    /**
     * Get the text of the last thrown exception
     * or the reason of a failed function call.
     * @return string Text containing the description
     * of the most recent error condition.
     */
    public function get_errmsg()
    {
        return parent::get_errmsg();
    }
}