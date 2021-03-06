<?php
declare(strict_types = 1);

return [
    'headers' => [
        'content-type' => [
            'application/json; charset=utf-8'
        ],
        'access-control-allow-origin' => [
            '*'
        ],
        'cache-control' => [
            'no-cache, no-store, must-revalidate, private'
        ],
        'expires' => [
            '0'
        ],
        'pragma' => [
            'no-cache'
        ],
        'timing-allow-origin' => [
            'https://www.twitch.tv'
        ],
        'date' => [
            'Wed, 23 Sep 2020 21:47:20 GMT'
        ],
        'x-served-by' => [
            'cache-sea4453-SEA, cache-mad22028-MAD'
        ],
        'x-cache' => [
            'MISS, MISS'
        ],
        'x-cache-hits' => [
            '0, 0'
        ],
        'x-timer' => [
            'S1600897640.135891,VS0,VS0,VE158'
        ],
        'vary' => [
            'Accept-Encoding'
        ],
        'strict-transport-security' => [
            'max-age=300'
        ],
        'content-length' => [
            '61'
        ],
        'Content-Location' => [
            'https://api.twitch.tv/v5/oembed?url=https%3A%2F%2Fwww.twitch.tv%2Fvideos%2F106400740&format=json'
        ],
        'X-Request-Time' => [
            '0.256 ms'
        ]
    ],
    'statusCode' => 410,
    'reasonPhrase' => 'Gone',
    'body' => '{"error":"Gone","status":410,"message":"Endpoint deprecated"}'
];
