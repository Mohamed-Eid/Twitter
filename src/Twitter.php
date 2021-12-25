<?php

namespace Bluex\Twitter;

use Bluex\Twitter\Exceptions\Exception;
use GuzzleHttp\Client;

class Twitter
{

    protected $client;


    protected string $accessToken;
    protected string $accessTokenSecret;
    protected string $bearerToken;
    protected string $consumerKey;
    protected string $consumerSecret;

    public function __construct(
        string $accessToken,
        string $accessTokenSecret,
        string $bearerToken,
        string $consumerKey = null,
        string $consumerSecret = null
    ) {
        $this->accessToken = $accessToken;
        $this->accessTokenSecret = $accessTokenSecret;
        $this->bearerToken = $bearerToken;
        $this->consumerKey = $consumerKey;
        $this->consumerSecret = $consumerSecret;

        $this->client = new Client(['headers' => $this->buildHeaders()]);
    }


    private function buildHeaders()
    {
        return [
            'Authorization' => 'Bearer ' . $this->bearerToken
        ];
    }

    public function getUserByUserName($username)
    {
        $res = $this->client->get("https://api.twitter.com/2/users/by/username/{$username}");
        dd(json_decode($res->getBody()));
    }
}
