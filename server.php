<?php


use Swoole\Http\Server;
use Swoole\Http\Request;
use Swoole\Http\Response;

$server = new Swoole\HTTP\Server("127.0.0.1", 9501);

$server->on("start", function (Server $server) {
    echo "Swoole http server is started at http://127.0.0.1:9501\n";
});

$message = "";

$server->on("request", function (Request $request, Response $response) use (&$message) {
    $response->header("Content-Type", "text/plain");
    $message .= "Server started \n";
  
    $i = 0;
    while (true) {
        co::sleep(1);
        $message .= "Sleep \n";
        if (++$i === 5) {
            $message .= "Stop \n";
            break;
        }
    }
    echo "No more messages should be printed out after the 5th second.\n";
    $response->end($message);
});

$server->start();

