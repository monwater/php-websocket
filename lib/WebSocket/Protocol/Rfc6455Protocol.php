<?php

namespace WebSocket\Protocol;

use WebSocket\Protocol\HybiProtocol;

/**
 * This is the version of websockets used by Chrome versions 17 through 19.
 *
 * @see http://tools.ietf.org/html/rfc6455
 */
class Rfc6455Protocol extends HybiProtocol
{
    const VERSION = 13;

    /**
     * @see WebSocket\Protocol.Protocol::getVersion()
     */
    public function getVersion()
    {
        return self::VERSION;
    }

    /**
     * This is our most recent protocol class
     *
     * @see WebSocket\Protocol.Protocol::acceptsVersion()
     */
    public function acceptsVersion($version)
    {
        if ((int)$version <= 13) {
            return true;
        }
    }
}