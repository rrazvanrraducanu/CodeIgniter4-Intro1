<?php 
namespace App\Controllers;
use CodeIgniter\Controller;
class HomeController extends Controller
{
	public function index()
	{
             echo "Welcome to my home controller";  
	}
        public function home_view(){
           return view('my_home_view');
        }
}
