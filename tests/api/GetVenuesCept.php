<?php 
$I = new ApiTester($scenario);
$I->wantTo('Retrieve all venues available');
$I->haveHttpHeader('Content-Type','application/json');
$I->sendGet('venues');
$I->seeResponseCodeIs(200);
$I->seeResponseIsJson();
$I->seeResponseContains('[{"id":1,"name":"Madrid"},{"id":2,"name":"Barcelona"},{"id":3,"name":"Valencia"},{"id":4,"name":"Bilbao"},{"id":5,"name":"Gij\u00f3n"},{"id":6,"name":"Viveiro (Lugo)"}]');

