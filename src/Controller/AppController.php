<?php

namespace App\Controller;

    class AppController extends Controller {
        
        public function show()
        {
            return $this->render("app/index.html.php", [
                "message" => "Hello world !!",
                "suite" => "Encore un nouveau message"
                "suite2" => "Hello page !!",
                "explication" => 'Aller dans template/app/index.html.php et mettre "$message" afin d\'affiche ce qu\'il y a dans "message" de src/Controller/AppController.php'
            ]);
        }
    }
