<?php
/**
 * Bu sayfanın çağrıldığı heryerde session 'ı otomatik olarak başlatıyoruz.
 */
session_start();
 
/**
 * Bu sayfanın çağrıldığı her yerde undefined variable hatasını almamak için,
 * hata loglarından bazılarını gizliyoruz.
 */
error_reporting(~E_DEPRECATED & ~E_NOTICE);
 
class Db
{
    // MySQL Host
    protected $dbHost = 'localhost';
 
    // MySQL Username
    protected $dbUsername = 'root';
 
    // MySQL Password
    protected $dbPassword = '';
 
    // MySQL Veritabanı Adı
    protected $dbName = 'auth_db';
 
    // The database connection
    protected static $connection;
 
    /**
     * Connect to the database
     *
     * @return mixed  Bağlantı başarısız olursa false 
     * Başarılı olursa mysqli MySQLi object instance dönecek
     */
    public function connect()
    {
        // Veritabanına bağlanmayı dene.
        if (!isset(self::$connection)) {
            self::$connection = @new mysqli($this->dbHost, $this->dbUsername, $this->dbPassword, $this->dbName);
        }
 
        // Eğer bağlanamaz isen, false dön.
        if (self::$connection->connect_errno || self::$connection === false) {
            /**
             * Bu kısım geliştirile bilir.
             * Daha sonra dilerse hata kodu dönebilir.
             * Biz şimdilik false dönüyoruz.
             */
            return false;
        }
 
        self::$connection->select_db($this->dbName);
        self::$connection->set_charset("utf8");
 
        return self::$connection;
    }
 
    /**
     * Query the database
     *
     * @param $query The query string
     * @return mixed The result of the mysqli::query() function
     */
    public function query($query)
    {
        // Veritabanına Bağlan
        $connection = $this->connect();
 
        // Verilen Sorguyu Çalıştır.
        $result = $connection->query($query);
 
        return $result;
    }
 
    /**
     * Fetch rows from the database (SELECT query)
     *
     * @param $query string
     * @return mixed boolean döner ise hata ile karşılaştık. 
     * array döner ise sorgumuz başarıyla çalıştı.
     */
    public function select($query)
    {
        $rows = array();
        $result = $this->query($query);
        if ($result === false) {
            return false;
        }
 
        while ($row = $result->fetch_assoc()) {
            $rows[] = $row;
        }
        return $rows;
    }
 
    /**
     * Fetch esnasında hata oluşursa bu hatayı yakalıyoruz.
     *
     * @return string Veritabanı hata mesajı
     */
    public function error()
    {
 
        return '<br><strong>Hata Kodu:</strong> ' . self::$connection->connect_errno . ' <br><strong>Hata Mesajı:</strong> ' . self::$connection->connect_error;
    }
 
    /**
     * Verileri güvenli hale getiriyoruz.
     *
     * @param string $value The value to be quoted and escaped
     * @return string Verileri güvenli hale getiriyoruz.
     */
    public function quote($value)
    {
        $value = trim($value);
        $connection = $this->connect();
        return "'" . $connection->real_escape_string($value) . "'";
    }
}