<?php

namespace MVC\Helpers;

use MVC\Models\User;

class UserFactory
{

    static public function createUser($name, $email)
    {
        return new User($name, $email);
    }

    static public function createUsers($users)
    {
        $arr = [];
        foreach ($users as $user) {
            array_push($arr, static::createUser($user["name"], $user["email"]));
        }
        return $arr;
    }
}
