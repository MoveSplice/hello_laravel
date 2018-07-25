<?php


namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;
header("Content-type: text/html; charset=utf-8"); 
class VerifyCsrfToken extends Middleware
{
  
}
