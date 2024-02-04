<?php
    namespace App\Controllers;

    use App\Models\Contactos;

    class ContactosController extends BaseController
    {
        public function indexAction($request)
        {
            $contacto = Contactos::getInstancia();
            $data = ["contacto" => $contacto->getAll()];
            $this->renderHTML("../app/Views/index_view.php", $data);
        }
    }