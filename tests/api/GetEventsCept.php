<?php 
$I = new ApiTester($scenario);
$I->wantTo('Retrieve all events available');
$I->haveHttpHeader('Content-Type','application/json');
$I->sendGet('events');
$I->seeResponseCodeIs(200);
$I->seeResponseIsJson();
$I->seeResponseContains('{"id":3,"venue_id":1,"picture":"\/images\/img003.jpg","description":"Chaos Computer Congress"}');
