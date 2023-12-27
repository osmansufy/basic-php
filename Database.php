<?php
class Database
{

    protected $connection;
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




            $statement = $this->connection->prepare($query);

            $statement->execute($params);

            return  $statement;
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}
