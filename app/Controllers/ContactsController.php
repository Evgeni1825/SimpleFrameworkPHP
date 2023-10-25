<?php

namespace App\Controllers;
use App\Application\Database\Connection;
use App\Models\Report;

class ContactsController
{
    public function submit(array $data) :void
    {
        $report = new Report();
        $report->setEmail($data['email']);
        $report->setSubject($data['subject']);
        $report->setMessage($data['message']);
        $report->store();
    }
}