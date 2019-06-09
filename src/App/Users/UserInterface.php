<?php


namespace App\User;


interface UserInterface
{
    /**
     * @return string
     */
    public function getUserName(): string;

    /**
     * @param string $userName
     */
    public function setUserName(string $userName): void;

    /**
     * @return string
     */
    public function getPassword(): string;

    /**
     * @param string $password
     */
    public function setPassword(string $password): void;
}