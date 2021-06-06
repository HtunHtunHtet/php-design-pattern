<?php

include_once ('IConnection.php');

class Connection implements IConnection
{
    public function testConnection()
    {

        $hookup = new mysqli(
            self::HOST,
            self::USERNAME,
            self::PASSWORD,
            'kazo',
            self::PORT);
        if (mysqli_connect_error()) {
            die('bad mojo');
        }
        print "You're hooked up Ace! <br />" . $hookup->host_info;
        $hookup->close();
    }
}
