<?php

namespace App\Models;
use App\Application\Database\Connection;

class Report extends Connection
{
    protected int $id;
    protected string $email;
    protected string $subject;
    protected string $message;
    protected string $created_at;
    protected string $updated_at;

    public function  setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function  setSubject(string $subject): void
    {
        $this->subject = $subject;
    }

    public function getSubject(): string
    {
        return $this->subject;
    }

    public function  setMessage(string $message): void
    {
        $this->message = $message;
    }

    public function getMessage(): string
    {
        return $this->message;
    }

    public function store(): void
    {
        $query = "INSERT INTO reports(email, subject, message) VALUES(:email, :subject, :message)";
        $stmt = $this->connect()->prepare($query);
        $stmt->execute([
            'email'=> $this->email,
            'subject'=> $this->subject,
            'message'=> $this->message
        ]);
    }

}