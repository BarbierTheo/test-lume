<?php

class Database
{

    // /**
    //  * Establishes a static PDO connection to a database.
    //  *
    //  * @return PDO|string A PDO instance on successful connection, or an error message string.
    //  */
    // public static function getConnection(): PDO
    // {
    //     // Check if a connection already exists.
    //     if (self::$pdo !== null) {
    //         return self::$pdo;
    //     }

    //     return self::connectToMySQL();
    // }


    // /**
    //  * Establishes a static PDO connection to a MySQL database.
    //  *
    //  * @return PDO|string A PDO instance on successful connection, or an error message string.
    //  */
    // private static function connectToMySQL(): PDO|string
    // {
    //     $dbHost = self::$dbHost;
    //     $dbName = self::$dbName;
    //     $dbUser = self::$dbUser;
    //     $dbPass = self::$dbPass;

    //     try {
    //         // Create a new PDO instance for MySQL.
    //         self::$pdo = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUser, $dbPass);
    //         // Set PDO error mode to exception.
    //         self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //         // Set default fetch mode to associative array.
    //         self::$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    //         return self::$pdo;
    //     } catch (PDOException $e) {
    //         // Return an error message if the connection fails.
    //         return "Error: MySQL database connection failed: " . $e->getMessage();
    //     }
    // }

    // /**
    //  * Closes the static PDO connection.
    //  *
    //  * This method is optional, as PHP will automatically close the connection
    //  * at the end of the script's execution. However, you can use it to
    //  * explicitly close the connection if needed.
    //  */
    // public static function closeConnection(): void
    // {
    //     self::$pdo = null;
    // }

    public static function getConnection(): PDO
    {
        $dbName = 'lume_db';
        $dbHost = 'db';
        $dbUser = 'root';
        $dbPass = 'root';

        try {
            $pdo = new PDO("mysql:host=" . $dbHost . ";dbname=" . $dbName, $dbUser, $dbPass);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (PDOException $e) {
            echo "Erreur : " . $e->getMessage();
            die;
        }
    }

}
