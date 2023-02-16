<?php

namespace App\Controllers;

use App\Models\Categoria;



class CategoriaController extends Controller
{
    private $app;
    public $isAuth;

    public function __construct($app)
    {
        $this->app = $app;

        self::setViewParam('nameController',$this->app->getNameController());

    }

    public function index()
    {

        $oListaCategoria = Categoria::listar();

        self::setViewParam('aListaCategoria',$oListaCategoria);

        $this->render('categoria/index');

    }

    public function cadastrar()
    {

        self::setViewJs('/public/js/jquery.maskMoney.min.js');
        self::setViewJs('/public/js/jquery-ui.js');
        self::setViewJs('/public/js/main.datepicker.js');
        self::setViewJs('/public/js/main.mask.money.js');
        self::setViewCss('/public/css/jquery-ui.min.css');

        $this->render('categoria/cadastrar');

    }

    public function salvar()
    {

        Categoria::salvar($_POST);

        $this->redirect('categoria/index');

    }

    public function atualizar()
    {

        Categoria::atualizar($_POST);

        $this->redirect('categoria/index');

    }

    public function editar()
    {

        self::setViewJs('/public/js/jquery.maskMoney.min.js');
        self::setViewJs('/public/js/jquery-ui.js');
        self::setViewJs('/public/js/main.datepicker.js');
        self::setViewJs('/public/js/main.mask.money.js');
        self::setViewCss('/public/css/jquery-ui.min.css');

        self::setViewParam('aCategoria',Categoria::listar($this->app->getParams()[0]));

        $this->render('categoria/editar');

    }

    public function excluir($param)
    {
        $id = $param[0];

        Categoria::excluir($id);

        $this->redirect('categoria/index');

    }

}