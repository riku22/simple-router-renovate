<?php
namespace Yh\Web;

require_once("vendor/autoload.php");

use Pecee\SimpleRouter\SimpleRouter as Router;
use Pecee\SimpleRouter\Route\{
ILoadableRoute,
IGroupRoute
};
use Pecee\Http\Middleware\Exceptions\TokenMismatchException;

Router::get('/', function(){
return "Hello world";
});

Router::start();
?>
