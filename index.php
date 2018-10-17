<?php 
// Autoload
require_once __DIR__ . '/vendor/autoload.php';
// echo $_GET['url'];
// $router = new appName\Routing\Router($_GET['url']);

// $router->get('/', function(){ echo 'homepage';});
// $router->get('/posts', function(){echo 'Tous les articles';});
// $router->get('/posts/:slug-:id', function($slug, $id) use ($router){
//     echo $router->url('Posts#show', ['id'=> 1, 'slug' => 'salut-les-gens']);
// }, 'posts.show')->with('id', '[0-9]+')->with('slug', '([a-z\-0-9]+)');

// $router->get('/posts/:id', "Posts#show");
// // die($_GET['url']);
// //Configuration
// $router->post('/posts/:id', function($id){echo 'Encoder l\'article'. $id . '<pre>'. print_r($_POST, true).'</pre>';});
// $router->run();
include_once 'config/config.php';

//VIEW
include 'src/view/header.php';
include 'src/controller/sectionController.php';
include 'src/view/footer.php';
?>