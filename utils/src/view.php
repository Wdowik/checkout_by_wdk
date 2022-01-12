<?php

declare(strict_types=1);

namespace App;


class view
{
    public function start($page)
    {

       if($page == "start"){
        require_once("layout.php");
    
       }

       if($page == "finish"){

        $id = $_SESSION['id_order'];

        //  require_once("finish_layout.php");  
        echo "<div class='finish'>
                 Dziękujemy! 
    
        </div>";
        echo "<div class='finish2'> 
    
        Twój wygenerowany numer zamówienia:
    
        </div>";

        echo "<div class='finish3'> " .$id."
    
       
    
        </div>";
        
       }

       
       
    }
}