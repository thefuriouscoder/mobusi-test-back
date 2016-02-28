<?php
/**
 * Created by PhpStorm.
 * User: diego
 * Date: 26/02/16
 * Time: 14:52
 */

namespace Mobusi\App\Controllers;

/**
 * Class EventController
 * @package App\Controller
 */

class EventController
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
    public function getAction($request,$response,$args)
    {
        $eventId = $args["id"];
        $event = \EventQuery::create()->findPk($eventId);

        echo(json_encode($event->toArray(null,null,\Propel\Runtime\Map\TableMap::TYPE_FIELDNAME)));
    }

    /**
     * @param \Psr\Http\Message\ServerRequestInterface $request
     * @param \Psr\Http\Message\ResponseInterface $response
     * @param array $args
     */
    public function listAction($request,$response,$args)
    {

        if(isset($args["id"]) && $args["id"] > 0) {
            $events = \EventQuery::create()
                ->findByVenueId($args["id"]);

        } else {
            $events = \EventQuery::create()
                ->find();
        }

        if($events->count() > 0)
            echo(json_encode($events->toArray(null,null,\Propel\Runtime\Map\TableMap::TYPE_FIELDNAME)));
        else
            echo(json_encode([]));

    }

}