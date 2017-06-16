
<?


class Index extends DController
{
    function __construct()
    {
        parent::__construct();
    }

    public function Index()
    {
        $this->home();
    }

    public function home()
    {
        $pageModel = $this->load->model(ROOT . '/models/', 'PageModel');
        $data = array();
        $data['menu'] = $pageModel->getMenu();
        $data['pageModel'] = $pageModel;
        $this->load->view(ROOT . '/views/', 'header', $data);

        $this->load->view(ROOT . '/views/', 'index_content', $data);
        $this->load->view(ROOT . '/views/', 'footer');
    }

    public function Rukovodstvo()
    {
        $pageModel = $this->load->model(ROOT . '/models/', 'PageModel');
        $data = array();
        $data['pageModel'] = $pageModel;   $this->load->view(ROOT . '/views/', 'header', $data);

        $this->load->view(ROOT . '/views/', 'rukovodstvo', $data);
        $this->load->view(ROOT . '/views/', 'footer');
    }
//
//    public function postByCat($id)
//    {
//        $data = array();
//        $tablePost = 'post';
//        $tableCat = 'category';
//        $postModel = $this->load->model('PostModel');
//        $data['getcat'] = $postModel->getPostBycat($tablePost, $tableCat, $id);
//        $this->load->view('header');
//        $this->load->view('postbycat', $data);
//        $this->load->view('footer');
//    }
}

?>