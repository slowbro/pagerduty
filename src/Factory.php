<?php namespace Slowbro\PagerDuty;

class Factory {

    public static function create($domain, $key, $requester_id=null){
        return new Client($domain, $key, $requester_id);
    }

}
