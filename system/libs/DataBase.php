<?

class DataBase
{
    public $mysqli;

    public function __construct($prms)
    {
        if (isset($prms['host']) and isset($prms['username']) and isset($prms['passwd']) and isset($prms['dbname'])) {
            $this->mysqli = new mysqli($prms['host'], $prms['username'], $prms['passwd'], $prms['dbname']);

            if ($this->mysqli->connect_errno) {
                die('Ошибка подключения к базе данных' . $this->mysqli->connect_error);
            }
        }
        $this->mysqli->query("SET NAMES utf8");
    }

    public function select($sql, $data = array(), $q_o = "", $limit = 0)
    {
        if (!empty($data))
            $sql .= "WHERE \n  " . implode("\n  AND ", $data) . "\n";

        if (!empty($q_o))
            $sql .= "ORDER BY \n  $q_o";
        if (!empty($limit))
            $sql .= "\nLIMIT $limit";
        $sql .= ";";

        $res = $this->mysqli->query($sql);
        $result = $res->fetch_all(MYSQLI_ASSOC);
        return $result;
    }
}

?>