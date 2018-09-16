<?php
/** set your paypal credential **/

$config['client_id'] = 'AQeVsKI4gcwB3NH_MNG6F1acbvbpDaNcHS5iG-Gsz5C2aFoMA5GXyjUwcurbejE2MpNH_2zG8yt-SmWp';
$config['secret'] = 'EEWIG_AkYE9FEGXepNO4qGNnpGSRCPtopqTjA5IADEv5mDA3koHHYWa2V7PNY9zF6gBTGC_Rvxy20w3s';

/**
 * SDK configuration
 */
/**
 * Available option 'sandbox' or 'live'
 */
$config['settings'] = array(

    'mode' => 'sandbox',
    /**
     * Specify the max request time in seconds
     */
    'http.ConnectionTimeOut' => 1000,
    /**
     * Whether want to log to a file
     */
    'log.LogEnabled' => true,
    /**
     * Specify the file that want to write on
     */
    'log.FileName' => 'application/logs/paypal.log',
    /**
     * Available option 'FINE', 'INFO', 'WARN' or 'ERROR'
     *
     * Logging is most verbose in the 'FINE' level and decreases as you
     * proceed towards ERROR
     */
    'log.LogLevel' => 'FINE'
);