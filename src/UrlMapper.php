<?php
/**
 * Created by PhpStorm.
 * User: kdave
 * Date: 9/13/18
 * Time: 10:52 AM
 */

namespace src;


class UrlMapper
{

    const POSTLIVE = "postlive";
    const SANDBOX = "sandbox";
    const PRODUCTION = "production";
    const TRANSACT_PRODUCTION = "transact_production";
    const TRANSACT_PRELIVE = "transact_prelive";
    const TRANSACT_POSTLIVE = "transact_postlive";
    const PRELIVE = "prelive";

    public static function getUrl($cnpEnv)
    {
        $cnpOnlineCtx = 'vap/communicator/online';
        if ($cnpEnv == UrlMapper::SANDBOX)
            return 'https://www.testvantivcnp.com/sandbox/payfac';
        elseif ($cnpEnv == UrlMapper::POSTLIVE)
            return 'https://payments.vantivpostlive.com/' . $cnpOnlineCtx;
        elseif ($cnpEnv == UrlMapper::PRODUCTION)
            return 'https://payments.vantivcnp.com/' . $cnpOnlineCtx;
        elseif ($cnpEnv == UrlMapper::TRANSACT_PRODUCTION)
            return 'https://transact.vantivcnp.com/' . $cnpOnlineCtx;
        elseif ($cnpEnv == UrlMapper::TRANSACT_PRELIVE)
            return 'https://transact.vantivprelive.com/' . $cnpOnlineCtx;
        elseif ($cnpEnv == UrlMapper::TRANSACT_POSTLIVE)
            return 'https://transact.vantivpostlive.com/' . $cnpOnlineCtx;
        elseif ($cnpEnv == UrlMapper::PRELIVE)
            return 'https://payments.vantivprelive.com/' . $cnpOnlineCtx;
        else
            return 'https://www.testvantivcnp.com/sandbox/payfac';

    }
}