<?php

error_reporting(E_ALL);
ini_set('error_reporting', E_ALL);

class People
{
    const PLANET = 'Earth';

    public $name;

    public $age;

    protected $gender;

    public function __construct($name, $age, $gender)
    {
        $this->name = $name;
        $this->age = $age;
        $this->gender = $gender;

        $this->speak('I am alive');
    }

    public function speak($something)
    {
        echo 'I said: ' . $something . PHP_EOL;
    }

    public function getGender()
    {
        return $this->gender;
    }
}

class Student extends People
{
    private $mentors = [];

    public function setMentor(Mentor $mentor)
    {
        $this->mentors[] = $mentor;
    }

    public function getMembers()
    {
        return $this->mentors;
    }

    public function study()
    {
        $this->speak('Now I know kung-fu');
    }
}

class Mentor extends People
{
    public function teach()
    {
        $this->speak('You are ready now');
    }
}

class Bagration extends Student
{
    private $birthYear = 1982;

    public function __construct()
    {
        $age = date('Y') - $this->birthYear;
        parent::__construct('Bagration', $age, 'male');

        $this->gender = 'bi';
    }
}

$bagration = new Bagration();

$mentor = new Mentor('Jack Daniels', 18, 'male');
$bagration->setMentor($mentor);

$mentor2 = clone $mentor;
$mentor2->age = 12;
$mentor2->name = 'Johny Walker';
$bagration->setMentor($mentor2);

var_dump($bagration->getMembers());

