<?php

namespace AnkitVerma\WhatsAppCloudApi\Client;

class Client
{
    protected $config;
    function __construct($whatsAppCloudApi)
    {
        $this->config = $whatsAppCloudApi;
    }

    public static function get()
    {
        echo "<pre>" . print_r(self::$config, true) . "</pre>";
    }
}
