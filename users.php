<?php
class User {
    public $name;
    public $login;
    public $password;

    function __construct($n, $l, $p) {
        $this->name = $n;
        $this->login = $l;
        $this->password = $p;
    }

    function showInfo() {
        $this->lineGreat();
        echo "Name: {$this->name}\n";
        echo "Login: {$this->login}\n";
        echo "Password: {$this->password}\n";
    }
    function lineGreat() {
        echo "<hr>";
    }
}

class SuperUser extends User {
    public $role;
    function __construct($n, $l, $p, $r) {
        parent::__construct($n, $l, $p);
        $this->role = $r;
        $this->lineGreat();

    }

    function showInfo() {
        parent::showInfo();
        echo "Role: {$this->role}\n";
    }
}

$user = new SuperUser("Faiz *_*", "aaaa *_*", "qwerty *_*", "admin");
$user2 = new User("George *_*", "bbbb *_*", "asdf *_*");
$user3 = new User("Vasya *_*", "ccccc *_*", "zxcv *_*");
$user->showInfo();
$user2->showInfo();
$user3->showInfo();