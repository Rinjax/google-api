<?php

namespace App\Managers;

use App\Models\Calendar;

class GoogleCalendarManager
{
    protected $googleClient;

    protected $service;

    public $event = [];

    public function __construct()
    {
        $this->googleClient = new \Google_Client();

        $this->googleClient->useApplicationDefaultCredentials();

        $this->googleClient->setScopes([Google_Service_Calendar::CALENDAR]);

        $this->service = \Google_Service_Calendar($this->googleClient);
    }

    public function createEvent(Calendar $cal)
    {
        
    }
}