<?php

class database
{
    private $server;
    private $port;
    private $dbName;
    private $user;
    private $pass;
    private $connection;

    public function __construct(string $server, string $dbName, string $user, string $pass, int $port = null)
    {
        $this->server = $server;
        $this->port = $port;
        $this->dbName = $dbName;
        $this->user = $user;
        $this->pass = $pass;
    }

    public function connect()
    {
        try {
            $dsn = "mysql:host=$this->server;dbname=$this->dbName;port=$this->port;charset=utf8mb4";
            $this->connection = new PDO($dsn, $this->user, $this->pass);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Verbindung fehlgeschlagen: " . $e->getMessage();
        }
    }

    public function getConnection()
    {
        return $this->connection;
    }

    public function query(string $sql)
    {
        try {
            $stmt = $this->connection->query($sql);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Query failed: " . $e->getMessage();
        }
    }
}