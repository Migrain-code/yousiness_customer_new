<?php
namespace App\Services;

use GuzzleHttp\Client;

class NotificationBusiness{



    private $client;
    private $firebaseApiKey;
    private $firebaseProjectId;
    private $firebaseSenderId;

    public function __construct()
    {
        $this->client = new Client();
        $this->firebaseApiKey ='AAAAeVltbAs:APA91bEmnQgWNhqAHbxiL7vpHg4pDdTNKw6xL1QMp3EvlZ46343PHwdEvG3LW2hKps9HOUUq3yG70vOnkASeeITnbbJX-2bIh42rGYy67WOhakIb_XC8IMrhwxB_xEVLVn3z2HS2aD82';
        $this->firebaseProjectId = 'ybus-4cada';
        $this->firebaseSenderId = '521191386123';
    }

    public function sendPushNotification($deviceToken, $title, $body)
    {

        $url = "https://fcm.googleapis.com/fcm/send";
        $headers = [
            'Authorization' => 'key=' . $this->firebaseApiKey,
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ];

        $data = [
            'to' => $deviceToken,
            'notification' => [
                'title' => $title,
                'body' => $body,
            ],
        ];

        $response = $this->client->post($url, [
            'headers' => $headers,
            'json' => $data,
        ]);

        $statusCode = $response->getStatusCode();
        $result = $response->getBody();
        if ($statusCode){
            return true;
        } else{
            return false;
        }
        // İşlemlerinizi gerçekleştirin
    }

}