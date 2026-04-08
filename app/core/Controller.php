<?php
namespace App\Core;

class Controller
{
    public function view(string $view, array $data = [])
    {
        extract($data);

        // student.index
        // student.php
        $view = str_replace(
            '.', 
            '/', 
            $view
        );
        
        require_once '../app/views/'.$view.'.php';
    }
}
?>