<?php

    namespace consynki\yii\dropbox;

    use Yii;
    use Dropbox\Client;
    use yii\base\Component;

    /**
     * Class Dropbox
     *
     * A component used to send notifications to Pushover
     *
     * @package consynki\yii\dropbox
     */
    class Dropbox extends Component
    {

        public $key;
        public $secret;
        public $access_token;

        protected $client;

        public function init()
        {
            parent::init();
        }

        /**
         * Get instance of Dropbox client
         *
         * @return Client
         */
        public function getClient()
        {
            if ($this->client instanceof Client) {
                return $this->client;
            }
            return $this->client = new Client($this->dropboxAccessToken, Yii::$app->name);
        }
    }