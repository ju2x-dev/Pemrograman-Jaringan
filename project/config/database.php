<?php
class DB {
    private static $pdo = null;
    private static $host = 'localhost';
    private static $db   = 'db_sekolah';
    private static $user = 'root';
    private static $pass = '';
    private static $charset = 'utf8mb4';

    public static function connect() {
        if (self::$pdo === null) {
            $dsn = "mysql:host=" . self::$host . ";dbname=" . self::$db . ";charset=" . self::$charset;
            $opt = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES => false
            ];
            self::$pdo = new PDO($dsn, self::$user, self::$pass, $opt);
        }
        return self::$pdo;
    }
}
?>