
<?php 
class Controller_Core_Admin
{

    protected $request = null;
    protected $layout = null;
    protected $message = null;
    public function __construct()
    {
        $this->setMessage();
        $this->setRequest();
        $this->setLayout();
    }

    public function setLayout(Block_Core_Layout $layout = null)
    {
        if (!$layout) {
            $layout = Mage::getBlock("Block_Core_Layout", $this);
        }
        $this->layout = $layout;
        return $this;
    }

    public function getLayout()
    {
        return $this->layout;
    }

    public function renderLayout()
    {
        echo $this->getLayout()->toHtml();
    }

    public function setRequest()
    {

        $this->request = Mage::getModel('Model_Core_Request');

        return $this;
    }
    public function getRequest()
    {
        return $this->request;
    }

    public function redirect($actionName = NULL, $controllerName = NULL, $params = NULL, $resetParams = false)
    {

        header("location:" . $this->getUrl($actionName, $controllerName, $params, $resetParams));
        exit();
    }

    public function getUrl($actionName = NULL, $controllerName = NULL, $params = NULL, $resetParams = false)
    {

        $final = $_GET;
        if ($resetParams) {
            $final = [];
        }

        if ($actionName == NULL) {
            $actionName = $_GET['a'];
        }
        if ($controllerName == NULL) {
            $controllerName = $_GET['c'];
        }

        $final['c'] = $controllerName;
        $final['a'] = $actionName;
        if (is_array($params)) {
            $final = array_merge($final, $params);
        }

        $queryString = http_build_query($final);
        unset($final);

        return "http://localhost/mvcapp/index.php?{$queryString}";
    }

    public function setMessage()
    {
        $this->message = Mage::getModel("Model_Admin_Message");
        return $this;
    }

    public function getMessage()
    {
        return $this->message;
    }
}
