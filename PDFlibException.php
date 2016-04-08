<?php

namespace tongtoanbs;

/**
 * Class PDFlibException
 *
 * @author Jackson Tong <jackson@snapfrozen.com.au>
 *
 * @method integer get_errnum() The error code of the most recent error condition
 * @method string get_apiname() Get the name of the API function
 * which threw the last exception or failed.
 * @method string get_errmsg() Get the text of the last thrown exception
 * or the reason of a failed function call.
 */
class PDFlibException extends \PDFlibException
{

}