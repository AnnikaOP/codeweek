<?php

namespace App\Console\Commands;

use App\Event;
use GuzzleHttp\Client;
use Illuminate\Console\Command;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Log;

class Geolocation extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'geolocation';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update Geolocation for events without geolocation';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {

        $COUNTRY_LAT_LANG = array(
            "AD" => array(42.50, 1.50),
            "AE" => array(24.00, 54.00),
            "AF" => array(33.00, 65.00),
            "AG" => array(17.05, -61.80),
            "AI" => array(18.22, -63.05),
            "AL" => array(41.00, 20.00),
            "AM" => array(40.00, 45.00),
            "AN" => array(12.17, -69.00),
            "AO" => array(-12.50, 18.50),
            "AQ" => array(-77.85, 166.67),
            "AR" => array(-34.00, -64.00),
            "AS" => array(-14.32, -170.50),
            "AT" => array(47.33, 13.33),
            "AU" => array(-25.00, 135.00),
            "AW" => array(12.50, -69.97),
            "AX" => array(60.12, 19.90),
            "AZ" => array(40.50, 47.50),
            "BA" => array(44.25, 17.83),
            "BB" => array(13.17, -59.53),
            "BD" => array(24.00, 90.00),
            "BE" => array(50.83, 4.00),
            "BF" => array(13.00, -2.00),
            "BG" => array(43.00, 25.00),
            "BH" => array(26.00, 50.50),
            "BI" => array(-3.50, 30.00),
            "BJ" => array(9.50, 2.25),
            "BM" => array(32.33, -64.75),
            "BN" => array(4.50, 114.67),
            "BO" => array(-17.00, -65.00),
            "BR" => array(-10.00, -55.00),
            "BS" => array(24.00, -76.00),
            "BT" => array(27.50, 90.50),
            "BV" => array(-54.43, 3.40),
            "BW" => array(-22.00, 24.00),
            "BY" => array(53.00, 28.00),
            "BZ" => array(17.25, -88.75),
            "CA" => array(60.00, -96.00),
            "CC" => array(-12.17, 96.83),
            "CD" => array(-3.52, 23.42),
            "CF" => array(7.00, 21.00),
            "CG" => array(-1.00, 15.00),
            "CH" => array(47.00, 8.00),
            "CI" => array(8.00, -5.00),
            "CK" => array(-20.00, -158.00),
            "CL" => array(-30.00, -71.00),
            "CM" => array(6.00, 12.00),
            "CN" => array(35.00, 105.00),
            "CO" => array(4.00, -72.00),
            "CR" => array(10.00, -84.00),
            "CS" => array(44.8, 20.5),
            "CU" => array(21.50, -80.00),
            "CV" => array(16.00, -24.00),
            "CX" => array(-10.50, 105.67),
            "CY" => array(35.00, 33.00),
            "CZ" => array(49.75, 15.00),
            "DE" => array(51.50, 10.50),
            "DJ" => array(11.50, 42.50),
            "DK" => array(56.00, 10.00),
            "DM" => array(15.50, -61.33),
            "DO" => array(19.00, -70.67),
            "DZ" => array(28.00, 3.00),
            "EC" => array(-2.00, -77.50),
            "EE" => array(59.00, 26.00),
            "EG" => array(27.00, 30.00),
            "EH" => array(23.00, -14.00),
            "ER" => array(15.00, 39.00),
            "ES" => array(40.00, -4.00),
            "ET" => array(8.00, 39.00),
            "FI" => array(64.00, 26.00),
            "FJ" => array(-18.00, 178.00),
            "FK" => array(-51.75, -59.00),
            "FM" => array(5.00, 152.00),
            "FO" => array(62.00, -7.00),
            "FR" => array(46.00, 2.00),
            "FX" => array(48.87, 2.33),
            "GA" => array(-1.00, 11.75),
            "GB" => array(54.00, -4.50),
            "GD" => array(12.12, -61.67),
            "GE" => array(42.00, 43.50),
            "GF" => array(4.00, -53.00),
            "GG" => array(49.45, -2.55),
            "GH" => array(8.00, -2.00),
            "GI" => array(36.13, -5.35),
            "GL" => array(72.00, -40.00),
            "GM" => array(13.50, -15.50),
            "GN" => array(11.00, -10.00),
            "GP" => array(16.25, -61.58),
            "GQ" => array(2.00, 10.00),
            "GR" => array(39.00, 22.00),
            "GS" => array(-54.50, -37.00),
            "GT" => array(15.50, -90.25),
            "GU" => array(13.47, 144.83),
            "GW" => array(12.00, -15.00),
            "GY" => array(5.00, -59.00),
            "HK" => array(22.25, 114.17),
            "HM" => array(-53.10, 73.52),
            "HN" => array(15.00, -86.50),
            "HR" => array(45.17, 15.50),
            "HT" => array(19.00, -72.42),
            "HU" => array(47.00, 20.00),
            "ID" => array(-5.00, 120.00),
            "IE" => array(53.00, -8.00),
            "IL" => array(31.50, 34.75),
            "IM" => array(54.23, -4.55),
            "IN" => array(20.00, 77.00),
            "IO" => array(-6.00, 71.50),
            "IQ" => array(33.00, 44.00),
            "IR" => array(32.00, 53.00),
            "IS" => array(65.00, -18.00),
            "IT" => array(42.83, 12.83),
            "JE" => array(49.19, -2.11),
            "JM" => array(18.25, -77.50),
            "JO" => array(31.00, 36.00),
            "JP" => array(36.00, 138.00),
            "KE" => array(1.00, 38.00),
            "KG" => array(41.00, 75.00),
            "KH" => array(13.00, 105.00),
            "KI" => array(-5.00, -170.00),
            "KM" => array(-12.17, 44.25),
            "KN" => array(17.33, -62.75),
            "KP" => array(40.00, 127.00),
            "KR" => array(37.00, 127.50),
            "KW" => array(29.50, 47.75),
            "KY" => array(19.50, -80.67),
            "KZ" => array(48.00, 68.00),
            "LA" => array(18.00, 105.00),
            "LB" => array(33.83, 35.83),
            "LC" => array(13.88, -60.97),
            "LI" => array(47.17, 9.53),
            "LK" => array(7.00, 81.00),
            "LR" => array(6.50, -9.50),
            "LS" => array(-29.50, 28.25),
            "LT" => array(56.00, 24.00),
            "LU" => array(49.75, 6.17),
            "LV" => array(57.00, 25.00),
            "LY" => array(25.00, 17.00),
            "MA" => array(32.00, -5.00),
            "MC" => array(43.73, 7.42),
            "MD" => array(47.00, 29.00),
            "ME" => array(42.80, 19.20),
            "MG" => array(-20.00, 47.00),
            "MH" => array(11.00, 168.00),
            "MK" => array(41.83, 22.00),
            "ML" => array(17.00, -4.00),
            "MM" => array(22.00, 98.00),
            "MN" => array(46.00, 105.00),
            "MO" => array(22.00, 113.00),
            "MP" => array(15.12, 145.67),
            "MQ" => array(14.67, -61.00),
            "MR" => array(20.00, -12.00),
            "MS" => array(16.75, -62.20),
            "MT" => array(35.92, 14.42),
            "MU" => array(-20.30, 57.58),
            "MV" => array(3.20, 73.00),
            "MW" => array(-13.50, 34.00),
            "MX" => array(23.00, -102.00),
            "MY" => array(4.22, 101.97),
            "MZ" => array(-18.25, 35.00),
            "NA" => array(-22.00, 17.00),
            "NC" => array(-21.50, 165.50),
            "NE" => array(16.00, 8.00),
            "NF" => array(-29.08, 167.92),
            "NG" => array(10.00, 8.00),
            "NI" => array(13.00, -85.00),
            "NL" => array(52.50, 5.75),
            "NO" => array(62.00, 10.00),
            "NP" => array(28.00, 84.00),
            "NR" => array(-0.53, 166.92),
            "NU" => array(-19.03, -169.87),
            "NZ" => array(-42.00, 174.00),
            "OM" => array(21.00, 57.00),
            "PA" => array(9.00, -80.00),
            "PE" => array(-10.00, -76.00),
            "PF" => array(-15.00, -140.00),
            "PG" => array(-6.00, 147.00),
            "PH" => array(13.00, 122.00),
            "PK" => array(30.00, 70.00),
            "PL" => array(52.00, 20.00),
            "PM" => array(46.83, -56.33),
            "PN" => array(-25.07, -130.08),
            "PR" => array(18.23, -66.55),
            "PS" => array(32.0000, 35.2500),
            "PT" => array(39.50, -8.00),
            "PW" => array(6.00, 134.00),
            "PY" => array(-23.00, -58.00),
            "QA" => array(25.50, 51.25),
            "RE" => array(-21.10, 55.60),
            "RO" => array(46.00, 25.00),
            "RS" => array(43.80, 21.00),
            "RU" => array(60.00, 47.00),
            "RW" => array(-2.00, 30.00),
            "SA" => array(25.00, 45.00),
            "SB" => array(-8.00, 159.00),
            "SC" => array(-4.58, 55.67),
            "SD" => array(15.00, 30.00),
            "SE" => array(62.00, 15.00),
            "SG" => array(1.37, 103.80),
            "SH" => array(-15.95, -5.70),
            "SI" => array(46.25, 15.17),
            "SJ" => array(78.00, 20.00),
            "SK" => array(48.67, 19.50),
            "SL" => array(8.50, -11.50),
            "SM" => array(43.93, 12.42),
            "SN" => array(14.00, -14.00),
            "SO" => array(6.00, 48.00),
            "SR" => array(4.00, -56.00),
            "ST" => array(1.00, 7.00),
            "SU" => array(60.00, 47.00),
            "SV" => array(13.83, -88.92),
            "SY" => array(35.00, 38.00),
            "SZ" => array(-26.50, 31.50),
            "TC" => array(21.73, -71.58),
            "TD" => array(15.00, 19.00),
            "TF" => array(-43.00, 67.00),
            "TG" => array(8.00, 1.17),
            "TH" => array(15.00, 100.00),
            "TJ" => array(39.00, 71.00),
            "TK" => array(-9.00, -171.75),
            "TL" => array(-8.87, 125.72),
            "TM" => array(40.00, 60.00),
            "TN" => array(34.00, 9.00),
            "TO" => array(-20.00, -175.00),
            "TP" => array(-9.00, 125.00),
            "TR" => array(39.00, 35.00),
            "TT" => array(11.00, -61.00),
            "TV" => array(-8.00, 178.00),
            "TW" => array(23.50, 121.00),
            "TZ" => array(-6.00, 35.00),
            "UA" => array(49.00, 32.00),
            "UG" => array(2.00, 33.00),
            "UM" => array(10.00, -175.00),
            "US" => array(38.00, -98.00),
            "UY" => array(-33.00, -56.00),
            "UZ" => array(41.00, 64.00),
            "VA" => array(41.90, 12.45),
            "VC" => array(13.08, -61.20),
            "VE" => array(8.00, -66.00),
            "VG" => array(18.50, -64.50),
            "VI" => array(18.50, -64.43),
            "VN" => array(16.00, 106.00),
            "VU" => array(-16.00, 167.00),
            "WF" => array(-14.00, -177.00),
            "WS" => array(-13.58, -172.33),
            "YE" => array(15.50, 47.50),
            "YT" => array(-12.83, 45.17),
            "YU" => array(44.00, 21.00),
            "ZA" => array(-30.00, 26.00),
            "ZM" => array(-15.00, 30.00),
            "ZR" => array(-1.00, 22.00),
            "ZW" => array(-19.00, 29.00)
        );

        $eventsWithoutGeolocation = Event::where('geoposition', "=", '0,0')->get();

        foreach ($eventsWithoutGeolocation as $event) {

            $geoposition = $COUNTRY_LAT_LANG[$event->country_iso];

            $event->geoposition =  $geoposition[0] . "," . $geoposition[1];
            $event->latitude = $geoposition[0];
            $event->longitude = $geoposition[1];
            $event->save();
        }



    }
}
