<?php

namespace AnkitVerma\WhatsAppCloudApi;

class WhatsAppCloudApi
{
    protected const DEFAULT_GRAPH_VERSION = 'v17.0';
    public const APP_FROM_PHONE_NUMBER_ENV_NAME = 'WHATSAPP_CLOUD_API_FROM_PHONE_NUMBER';
    public const APP_TOKEN_ENV_NAME = 'WHATSAPP_CLOUD_API_TOKEN';
    public const APP_ACCOUNT_ID_ENV_NAME = 'WHATSAPP_CLOUD_API_ACCOUNT_ID'; //WhatsApp Business Account ID
    public const APP_BUSINESS_ID_ENV_NAME = 'WHATSAPP_CLOUD_API_BUSINESS_ID';

    protected $graph_version = '';
    protected $from_phone_number_id = '';
    protected $whatsapp_business_account_id = '';
    protected $account_id = '';
    protected $business_id = '';
    protected $access_token = '';

    public function __construct($config = [])
    {
        $this->graph_version = static::DEFAULT_GRAPH_VERSION;
        $this->from_phone_number_id = $config['from_phone_number_id'] ?? $_ENV[static::APP_FROM_PHONE_NUMBER_ENV_NAME];
        $this->account_id = $config['account_id'] ?? $_ENV[static::APP_ACCOUNT_ID_ENV_NAME];
        $this->business_id = $config['business_id'] ?? $_ENV[static::APP_BUSINESS_ID_ENV_NAME];
        $this->access_token = $config['access_token'] ?? $_ENV[static::APP_TOKEN_ENV_NAME];
    }

    public function client_test(){

    }


   
}
