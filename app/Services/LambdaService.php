<?php
namespace App\Services;

use Aws\Lambda\LambdaClient;

class LambdaService
{
    protected $client;

    public function __construct()
    {
        $this->client = new LambdaClient([
            'region' => env('AWS_DEFAULT_REGION'),
            'version' => 'latest',
            'credentials' => [
                'key' => env('AWS_ACCESS_KEY_ID'),
                'secret' => env('AWS_SECRET_ACCESS_KEY'),
            ],
        ]);
    }

    public function invokeDrawTicketLambda(array $participants)
    {
        $result = $this->client->invoke([
            'FunctionName' => 'your-lambda-function-name',
            'Payload' => json_encode(['participants' => $participants]),
        ]);

        return json_decode($result->get('Payload')->getContents(), true);
    }
}

?>