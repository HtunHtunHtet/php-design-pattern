<?php


interface IConnection
{
    const HOST ="localhost";
    const USERNAME = 'root';
    const PASSWORD = 'root';
    const PORT = '8889';

    public function testConnection();
}
