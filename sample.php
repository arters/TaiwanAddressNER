<?php

$re = '/(?P<zipcode>^\d{5}|^\d{3})?\s?(?P<city>\D+?[縣市])?(?P<Township>\D+?[鄉鎮市])?(?P<District>\D+?[區])?(?P<Village>\D+?[村里])?(?P<Neighborhood>.+[鄰])?(?P<Road>.+[路])?(?P<Street>.+[街])?(?P<Boulevard>.+[道])?(?P<Section>.+[段])?(?P<Lane>.+[巷])?(?P<Alley>.+[弄衖])?(?P<Number>.+[號])?(?P<Floor>.+[樓])?(?P<Room>.+[室])?(?P<other>.+)?/xu';

$testStr = '500 彰化縣彰化市進德路2707號10樓1室';

preg_match_all($re, $testStr, $matches, PREG_SET_ORDER, 0);

// Print the entire match result
var_dump($matches);

/*
[
  [
    {
      "content": "500 彰化縣彰化市進德路2707號10樓1室",
      "isParticipating": true,
      "groupNum": 0,
      "startPos": 0,
      "endPos": 23
    },
    {
      "content": "500",
      "isParticipating": true,
      "groupNum": 1,
      "groupName": "zipcode",
      "startPos": 0,
      "endPos": 3
    },
    {
      "content": "彰化縣",
      "isParticipating": true,
      "groupNum": 2,
      "groupName": "city",
      "startPos": 4,
      "endPos": 7
    },
    {
      "content": "彰化市",
      "isParticipating": true,
      "groupNum": 3,
      "groupName": "Township",
      "startPos": 7,
      "endPos": 10
    },
    {
      "content": "",
      "isParticipating": false,
      "groupNum": 5,
      "groupName": "Village",
      "startPos": -1,
      "endPos": -1
    },
    {
      "content": "進德路",
      "isParticipating": true,
      "groupNum": 7,
      "groupName": "Road",
      "startPos": 10,
      "endPos": 13
    },
    {
      "content": "2707號",
      "isParticipating": true,
      "groupNum": 13,
      "groupName": "Number",
      "startPos": 13,
      "endPos": 18
    },
    {
      "content": "10樓",
      "isParticipating": true,
      "groupNum": 14,
      "groupName": "Floor",
      "startPos": 18,
      "endPos": 21
    },
    {
      "content": "1室",
      "isParticipating": true,
      "groupNum": 15,
      "groupName": "Room",
      "startPos": 21,
      "endPos": 23
    },
  ]
]
*/
