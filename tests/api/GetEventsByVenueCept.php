<?php 
$I = new ApiTester($scenario);
$I->wantTo('Retrieve all events for a given venue');
$I->haveHttpHeader('Content-Type','application/json');
$I->sendGet('events/venue/1');
$I->seeResponseCodeIs(200);
$I->seeResponseIsJson();
$I->seeResponseContains('{"id":3,"venue_id":1,"picture":"\/images\/img003.jpg","description":"Chaos Computer Congress"}');

