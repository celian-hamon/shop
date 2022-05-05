<?php

class User
{
    public int $USER_ID;
    public string $USER_EMAIL;
    public string $USER_FNAME;
    public string $USER_LNAME;
    public int $USER_ADMIN;
    public string $USER_PASSWORD;


    public function __construct(int $USER_ID, string $USER_EMAIL,  string $USER_FNAME, string $USER_LNAME, string $USER_ADMIN, string $USER_PASSWORD)
    {
        $this->USER_ID = $USER_ID;
        $this->USER_EMAIL = $USER_EMAIL;
        $this->USER_FNAME = $USER_FNAME;
        $this->USER_LNAME = $USER_LNAME;
        $this->USER_ADMIN = $USER_ADMIN;
        $this->USER_PASSWORD = $USER_PASSWORD;
    }
}