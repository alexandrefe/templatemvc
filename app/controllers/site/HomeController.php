<?php

namespace app\controllers\site;

use app\controllers\BaseController;
use app\models\site\UserModel;

class HomeController extends BaseController
{

    private $user;

    public function __construct()
    {
        $this->user = new UserModel();
    }

    public function index()
    {
        $users = $this->user->fetchAll();

        dd($users);

        $dataForTemplate = [
        'title' => "Template MVC"
        ];

        $template = $this->twig->load('home.site.twig');
        $template->display($dataForTemplate);
    }
}
