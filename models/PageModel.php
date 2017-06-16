<?

class PageModel extends DModel
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getMenu()
    {
        $sql = "select * from esm_Menu  ORDER BY
        parent, title";

        return $this->select($sql);
    }


    public function generateMenu($parentRow, $level)
    {
        echo '<li>'.$parentRow['title'];
        $sql = "select * from esm_Menu where parent ='".$parentRow['id']."'";
        $result = $this->mysqli->query($sql);
        if (mysql_num_rows($result) != 0) {
            echo '<ul>';
            // use the fetch_assoc to get an associative array
            while ($row = mysql_fetch_assoc($result)) {
                $this->generateMenu($row, $level+1);
            }
            echo '</ul>';
        }
        echo '</li>';
    }

//    public function getPostById($tablePost, $tableCat, $id)
//    {
//        $sql = "SELECT $tablePost.*,$tableCat.name FROM $tablePost
//        INNER JOIN $tableCat ON $tablePost.cat=$tableCat.id
//        WHERE $tablePost.id=$id";
//
//        return $this->db->select($sql);
//    }
//
//    public function getPostBycat($tablePost, $tableCat, $id)
//    {
//        $sql = "SELECT $tablePost.*,$tableCat.name FROM $tablePost
//        INNER JOIN $tableCat ON $tablePost.cat=$tableCat.id
//        WHERE $tableCat.id=$id";
//
//        return $this->db->select($sql);
//    }
}

?>