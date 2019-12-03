<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
class CustomerController extends Controller
{
    //
    private $customer;
    function __construct(){
        $customer=new Customer;
    
    }

    
    function list (){

    }
    function save(Request $request){
        

    }
}
