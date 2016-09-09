<?php

namespace Mirahost\NetworkTools;

class Dig
{

    public function sendDig($domain)
    {
        //TODO update regex to valiadate hostname
        $domain = preg_replace("/[^A-Za-z0-9.]/", "", $domain);

        $output =  shell_exec("dig +trace " . escapeshellarg($domain) . " 2>&1");

        return $output;
    }
}