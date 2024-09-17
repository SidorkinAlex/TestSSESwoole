<?php

namespace Sidalex\TestSwoole\Controllers;

use co;
use Sidalex\SwooleApp\Classes\Controllers\AbstractController;
use Sidalex\SwooleApp\Classes\Controllers\Route;


#[Route(uri: '/api/v1/candidate_clear', method: "GET")]
class CandidateClear extends AbstractController
{

    public function execute(): \Swoole\Http\Response
    {

        $this->response->setHeader('Content-Type', 'text/event-stream');
//        header('Connection: keep-alive');
//        header('Cache-Control: no-store');
//
//        header('Access-Control-Allow-Origin: *');

        while (true) {
            $this->response->write('as;ldkfj;lakssdjf;lkasjdf;lkjasdf\n');
            co::sleep(1);
        }
        return $this->response;
    }
}