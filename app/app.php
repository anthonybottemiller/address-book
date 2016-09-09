<?php
ini_set('display_errors', 'On');
error_reporting(E_ALL);

    date_default_timezone_set('America/Los_Angeles');
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Contact.php";
    session_start();
    if (empty($_SESSION['contacts'])) {
    $_SESSION['contacts'] = array();
    }

    $app = new Silex\Application();
    
    $app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
      return $app['twig']->render('address-book.html.twig').end($_SESSION['contacts'])->name;
    });

    $app->post("/add-contact", function() use ($app) {
      $new_contact = new Contact($_POST['name'], $_POST['address'], $_POST['phone-number']);
      $new_contact->save();
      return $app['twig']->render('new-contact.html.twig');
    });
    return $app;
?>