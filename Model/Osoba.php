<?php

/**
 * Created by PhpStorm.
 * User: patrykprzybek
 * Date: 14.04.2018
 * Time: 11:47
 */
class Osoba
{
    const ROLE_USER = 'user';
    const ROLE_ADMIN = 'admin';

    private $imie;
    private $wyksztalcenie;
    private $role = "ROLE_USERS";

    /**
     * @return mixed
     */
    public function getImie()
    {
        return $this->imie;
    }

    /**
     * @param mixed $imie
     */
    public function setImie($imie)
    {
        $this->imie = $imie;
    }

    /**
     * @return mixed
     */
    public function getWyksztalcenie()
    {
        return $this->wyksztalcenie;
    }

    /**
     * @param mixed $wyksztalcenie
     */
    public function setWyksztalcenie($wyksztalcenie)
    {
        $this->wyksztalcenie = $wyksztalcenie;
    }

    /**
     * @return string
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * @param string $role
     */
    public function setRole($role)
    {
        $this->role = $role;
    }




}