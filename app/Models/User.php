<?php 

namespace app\Models;
use DateTime;

class User {
    private int         $id;
    private string      $email;
    private string      $passwd;
    private string      $name;
    private int         $totalPoints;
    private DateTime    $createdAt; 

    public function __construct(int $id, string $email, string $passwd, string $name,
            int $totalPoints, DateTime $createdAt) {
        $this->id = $id;
        $this->email = $email;
        $this->passwd = $passwd;
        $this->name = $name;
        $this->totalPoints = $totalPoints;
        $this->createdAt = $createdAt;
    }
    public function getId() {
        return $this->id;
    }
    public function getEmail() {
        return $this->email;
    }
    public function getName() {
        return $this->name;
    }
    public function getTotalPoints() {
        return $this->totalPoints;
    }
}
?>