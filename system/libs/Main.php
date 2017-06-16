<?

class Main
{
    private $_url = null;
    public $controllerPath = ROOT . '/controllers/';
    public $controllerName = 'Index';
    public $methodName = 'Index';
    public $controller;

    public function __construct()
    {
        $this->run();
    }

    private function _getUrl()
    {
        $url = $_GET['url'];
        $url = rtrim($url, '/');
        $url = filter_var($url, FILTER_SANITIZE_URL);
        $this->_url = explode('/', $url);
    }

    public function run()
    {
        $this->_getUrl();
        $this->loadController();
        $this->callMethod();


//        if (empty($this->_url[1])) {
//
//            $params = $this->_url;
//            $params['lang_alias'] = $params[0];
//            include $this->controllerPath . 'HondaController.php';
//            $ctrl = new HondaController();
//            $data = $ctrl->actionIndex($params);
//            if ($data['carsList'] != null) {
//
//                $ctrl->render(__DIR__ . '/../../../main/views/models/', 'index', $data);
//            } else
//                $ctrl->notFound();
//            return false;
//        }
//        switch ($length) {
//            case 2:
//                $params = $this->_url;
//                array_push($params, $this->vin);
//                array_push($params, $this->detail);
//                include $this->controllerPath . 'TypeController.php';
//                $ctrl = new TypeController();
//                $data = $ctrl->actionIndex($params);
//                if ($data['model_view'] != null)
//                    $ctrl->render($data);
//                else
//                    $ctrl->notFound();
//                break;
//            case 3:
//                $params = $this->_url;
//                $params['vin_number'] = $this->vin;
//                $params['detail_number'] = $this->detail;
//                array_push($params, $this->vin);
//                array_push($params, $this->detail);
//                include $this->controllerPath . 'PageController.php';
//                $ctrl = new PageController();
//                // array_push($params, $this->detail);
//                if ($params[1] == 'vin') {
//                    $data = $ctrl->actionVin($params);
//                    $ctrl->render('/var/www/7zap/cats/main/views/vinView/', 'vinIndex', $data);
//                } else
//                    if ($params[1] == 'detail') {
//                        // $ctrl->DetailIndex($params);
//                        $data = $ctrl->actionDetail($params);
//                        $ctrl->render('/var/www/7zap/cats/main/views/detailsView/', 'detailsIndex', $data);
//                    } else {
//                        $data = $ctrl->actionModificationsView($params);
//                        $ctrl->render('/var/www/7zap/cats/main/views/modifications/', 'type_index', $data);
//                    }
//                break;
//        }
    }

    public function loadController()
    {
        if (!isset($this->url[0])) {
            include $this->controllerPath . $this->controllerName . '.php';
            $this->controller = new  $this->controllerName();
        }
    }

    public function callMethod()
    {
        if (isset($this->url[2])) {
            $this->methodName = $this->url[1];
            if (method_exists($this->controller, $this->methodName)) {
                $this->controller->{$this->methodName}($this->url[2]);
            } else {
                header('Location:' . BASE_URL . '/Index');
            }
        } else
            if (isset($this->url[1])) {
                $this->methodName = $this->url[1];
                if (method_exists($this->controller, $this->methodName)) {
                    $this->controller->{$this->methodName}();
                } else {
                    header('Location:' . BASE_URL . '/Index');
                }
            } else {
                if (method_exists($this->controller, $this->methodName)) {
                    $this->controller->{$this->methodName}();
                } else {
                    header('Location:' . BASE_URL . '/Index');
                }
            }

    }
}

?>