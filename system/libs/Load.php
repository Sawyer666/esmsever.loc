<?

class Load
{
    function __construct()
    {
    }

    public function view($path, $filename, $data = false)
    {
        if ($data == true) {
            extract($data);
        }
        include $path . $filename . '.php';
    }

    public function model($path, $modelName)
    {
        include_once($path . $modelName . '.php');
        return new $modelName();
    }
}

?>