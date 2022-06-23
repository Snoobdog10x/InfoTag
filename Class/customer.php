<?php
class customer
{
    private $id;
    private $fullname;
    private $avatar;
    private $bio;
    private $email;
    private $password;
    private $facebook;
    private $github;
    private $instagram;
    private $linkedin;
    function __construct($id, $fullname, $avatar, $bio, $email, $password, $facebook, $github, $instagram, $linkedin)
    {
        $this->id = $id;
        $this->fullname = $fullname;
        $this->avatar = $avatar;
        $this->bio = $bio;
        $this->email = $email;
        $this->password = $password;
        $this->facebook = $facebook;
        $this->github = $github;
        $this->instagram = $instagram;
        $this->linkedin = $linkedin;
    }
}
