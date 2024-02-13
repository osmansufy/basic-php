<?php
class Database
{

    protected $connection;
    protected $statement;
    public function __construct($config, $userName = "root", $password = "")
    {
        try {


            $dsn = 'mysql:' . http_build_query($config, '', ';');

            $this->connection = new PDO($dsn, $userName, $password, [
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
            ]);
        } catch (PDOException $e) {
            // If there is an error with the connection, stop the script and display the error.
            die($e->getMessage());
        }
    }
    public  function query($query, $params = [])
    {
        try {




            $this->statement = $this->connection->prepare($query);

            $this->statement->execute($params);

            return  $this;
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function get()
    {
        return $this->statement->fetchAll();
    }

    public function find()
    {
        return $this->statement->fetch();
    }

    public function findOrFail()
    {
        $result = $this->find();
        if (!$result) {
            abort();
        }
        return $result;
    }
}
