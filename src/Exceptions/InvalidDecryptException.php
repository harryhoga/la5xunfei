<?php

namespace Hoga\La5xunfei\Exceptions;

/**加密解密异常
 * Class InvalidDecryptException
 * @package Hoga\La5xunfei\Exceptions
 */
class InvalidDecryptException extends \Exception
{
    /**
     * @var array
     */
    public $raw = [];

    /**
     * InvalidDecryptException constructor.
     * @param string $message
     * @param integer $code
     * @param array $raw
     */
    public function __construct($message, $code = 0, $raw = [])
    {
        parent::__construct($message, intval($code));
        $this->raw = $raw;
    }
}
