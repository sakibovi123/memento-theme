<?php 

namespace App\classes;

class Home {
    public function home()
    {
        header("Location: router.php?page=home");
    }
}