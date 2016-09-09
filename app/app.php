<?php
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
      return $app['twig']->render('address-book.html.twig');
    });

    $app->get("/add-contact", function() use ($app) {
      $new_contact = new Contact($_GET['name'], $_GET['address'], $_GET['phone-number']);
      $new_contact->save();
      return $_SESSION['contacts'][0]->name;
    });
    return $app;
?>