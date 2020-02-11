<?php


namespace App\Service;
use GuzzleHttp\Client as GuzzleClient;

class MgidService
{

    private $token;
    private $client;
    private $url = "api.mgid.com/v1/auth/token";
    private $email = "zaur@soltexmedia.com";
    private $password = "App2lTu9";

    public function __construct()
    {
        //region получаем токен
        $this->client = new GuzzleClient();

        $data = [
            "email" => $this->email,
            "password" => $this->password
        ];

        $result = $this->client->post($this->url,[
            'form_params' => $data,
        ]);

        $this->token = $result->getBody()->getContents();
        //endregion
    }

    public function auth()
    {

    }

    public function getDailyStat($campId)
    {
        //region получаем статистику компании
        $urlGetStat = "api.mgid.com/v1/goodhits/campaigns/".$campId."/statistics?token=".$this->token;
        $param = "&type=byClicksDetailed&date=".date("Y-m-d");
        $result = $this->client->get($urlGetStat.$param);

        return json_decode($result->getBody()->getContents())["fundsEarned"];//fundsEarned - потрачено клиентом
        //endregion
    }
}