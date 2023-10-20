<?php

class database
{
    private $server;
    private $port;
    private $dbName;
    private $user;
    private $pass;
    private $connection;

    public function __construct()
    {
        $this->server = DB_SERVER;
        $this->port = DB_PORT;
        $this->dbName = DB_NAME;
        $this->user = DB_USER;
        $this->pass = DB_PASS;
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

    public function insertData($table, $data)
    {
        try {
            // Stelle die SQL-Abfrage zusammen
            $columns = implode(", ", array_keys($data));
            $values = "'" . implode("', '", array_values($data)) . "'";
            $sql = "INSERT INTO $table ($columns) VALUES ($values)";

            // Führe die Abfrage aus
            $this->connection->exec($sql);
        } catch (PDOException $e) {
            echo "Fehler beim Einfügen der Daten: " . $e->getMessage();
        }
    }
    public function getNextID($table, $idColumn)
    {
        try {
            // Abfrage, um die maximale ID zu finden
            $sql = "SELECT MAX($idColumn) AS max_id FROM $table";
            $result = $this->connection->query($sql);
            $row = $result->fetch(PDO::FETCH_ASSOC);

            // Wenn es keine Einträge in der Tabelle gibt, beginne mit ID 1, ansonsten max_id + 1
            $nextID = ($row['max_id'] === null) ? 1 : $row['max_id'] + 1;

            return $nextID;
        } catch (PDOException $e) {
            echo "Fehler beim Ermitteln der nächsten ID: " . $e->getMessage();
        }
    }

}