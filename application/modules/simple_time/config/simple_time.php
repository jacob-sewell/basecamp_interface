<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

$config['37signals_dates']['from']['preview_from']   = 'M+j%2\C+Y';//'Jan+25%2C+2012';
$config['37signals_dates']['from']['from']           = 'Y-m-d';//'2012-01-25';
$config['37signals_dates']['to']['preview_to']       = 'M+j%2\C+Y';//'Jan+25%2C+2012';
$config['37signals_dates']['to']['to']               = 'Y-m-d';//'2012-01-25';

/**
 * IMPORTANT! You'll have a different prefix to your basecamphq URL if you're not
 * a member of Philsquare.          v  v  v  v (down there)
 */
$config['37signals_url'] = "https://philsquare.basecamphq.com/time_entries/report?utf8=%E2%9C%93&commit=Create+report";
