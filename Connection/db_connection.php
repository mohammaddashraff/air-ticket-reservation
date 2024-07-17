<?php

namespace Connection;
use mysqli;

class db_connection
{
    private $host="localhost";
    private $username="root";
    private $password="";
    private $database="FlightBookingDB";
    private $port = 3306;
    public $mysqli; // Store the MySQLi object for later use

    public function __construct()
    {

    }

    public function connect()
    {
        // Establish a connection to the database
        $this->mysqli = new mysqli($this->host, $this->username, $this->password, $this->database, $this->port);

        // Check for connection errors
        if ($this->mysqli->connect_error) {
            die('Connection failed: ' . $this->mysqli->connect_error);
        }

        //echo 'Connected successfully';

        // You can return the $mysqli object if you want to use it for executing queries.
        return $this->mysqli;
    }

    public function disconnect()
    {
        // Close the database connection
        if ($this->mysqli) {
            $this->mysqli->close();
            //echo 'Disconnected successfully';
        } else {
            //echo 'Not connected';
        }
    }

}