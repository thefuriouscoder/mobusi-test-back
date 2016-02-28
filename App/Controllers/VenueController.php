<?php
/**
 * Created by PhpStorm.
 * User: diego
 * Date: 26/02/16
 * Time: 15:20
 */

namespace Mobusi\App\Controllers;

/**
 * Class VenueController
 * @package App\Controller
 */

class VenueController
{
    /**
     * @param \Slim\App $app
     */
    public function __construct($app)
    {
        $this->app = $app;
    }

    /**
     * @param \Psr\Http\Message\ServerRequestInterface $request
     * @param \Psr\Http\Message\ResponseInterface $response
     * @param array $args
     */
    public function listAction($request,$response,$args)
    {

        $venues = \VenueQuery::create()->find();

        echo(json_encode($venues->toArray(null,null,\Propel\Runtime\Map\TableMap::TYPE_FIELDNAME)));


    }

}