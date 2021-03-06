<?php 
namespace Venturestream\Sentry\Raven;

use Monolog\Handler\RavenHandler;
use Monolog\Logger;

class Handler extends RavenHandler
{
    /**
     * @param \Venturestream\Sentry\Raven\ravenClient $ravenClient
     * @param type $level
     * @param type $bubble
     */
    public function __construct($ravenClient, $level = Logger::DEBUG, $bubble = true)
    {

        if ( is_array($ravenClient) && array_key_exists('instance', $ravenClient) )
        {
            $ravenClient = new $ravenClient['instance'];
        }

        parent::__construct($ravenClient, $level, $bubble);
    }
}