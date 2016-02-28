<?php
// Routes
$app->get('/api/event/{id}', '\Mobusi\App\Controllers\EventController:getAction')->setName('event');
$app->get('/api/events/venue/{id}', '\Mobusi\App\Controllers\EventController:listAction')->setName('event-list-by-venue');
$app->get('/api/events', '\Mobusi\App\Controllers\EventController:listAction')->setName('event-list');
$app->get('/api/venues', '\Mobusi\App\Controllers\VenueController:listAction')->setName('venue-list');
