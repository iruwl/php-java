<?php
namespace PHPJava\Imitation\java\nio\charset;

use PHPJava\Imitation\java\lang\_Object;

class Charset extends _Object
{

    /**
     * This method wrapped PHP's urldecoder
     *
     * @param string $s
     * @param string $enc
     * @return string
     */
    public static function decode(string $s, string $enc)
    {
        return rawurldecode($s);
    }
}
