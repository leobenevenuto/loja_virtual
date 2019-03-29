<?php
class psckttransparenteController extends controller {

    private $user;

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $store = new Store();
        $products = new Products();
        $cart = new Cart();
        $shipping = array();

        $dados = $store->getTemplateData();

        try{
            $sessionCode = \PagSeguro\Services\Session::create(
                \PagSeguro\Configuration\Configure::getAccountCredentials()
            );

            $dados['sessionCode'] = $sessionCode->getResult();

        } catch(Exception $e){
            echo "Erro:".$e->getMessage();
            exit;
        }

        $this->loadTemplate('cart_psckttransparente', $dados);


    }

}