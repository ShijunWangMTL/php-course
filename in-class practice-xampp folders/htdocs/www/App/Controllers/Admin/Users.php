<?php
namespace App\Controllers\Admin;

/**
 * User admin controller
 */
class Users extends \Core\Controller {
    /**
     * before filter
     * @return void
     */
    protected function before() {
        // Make sure an admin user is logged in for example
        //return false; 
    }

    /* show index page
     * @return void
     */
    public function indexAction() {
        echo "User admin index";
    } 
    
}