<?php
namespace App\Controllers;

use \Core\View;

/* Home controller
*/
class Home extends \Core\Controller 
{
    // Implement before and after methods
    protected function before() {
        //echo "(before) ";
        //return false;     //when return false, the action/method(e.g. indexAction) won't be called
    }

    protected function after() {
        //echo " (after)";
    }

    /* show index page
     * @return void
     */
    public function indexAction() {
        /*
        View::render('Home/index.php', [
            'name' => 'Dave',
            'colors' => ['red', 'green', 'blue']
        ]);
        */
        View::renderTemplate('Home/index.html', [
            'name' => 'Dave',
            'colors' => ['red', 'green', 'blue']
        ]);
    } 
    
}