<?php

namespace Database\Seeders\Share;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        $timestamp = Carbon::now()->toDateTimeString();

        $countries = [
            [
                "name" => "Afghanistan",
                "phone_code" => "+93",
                "code" => "AF"
            ],
            [
                "name" => "Aland Islands",
                "phone_code" => "+358",
                "code" => "AX"
            ],
            [
                "name" => "Albania",
                "phone_code" => "+355",
                "code" => "AL"
            ],
            [
                "name" => "Algeria",
                "phone_code" => "+213",
                "code" => "DZ"
            ],
            [
                "name" => "AmericanSamoa",
                "phone_code" => "+1684",
                "code" => "AS"
            ],
            [
                "name" => "Andorra",
                "phone_code" => "+376",
                "code" => "AD"
            ],
            [
                "name" => "Angola",
                "phone_code" => "+244",
                "code" => "AO"
            ],
            [
                "name" => "Anguilla",
                "phone_code" => "+1264",
                "code" => "AI"
            ],
            [
                "name" => "Antarctica",
                "phone_code" => "+672",
                "code" => "AQ"
            ],
            [
                "name" => "Antigua and Barbuda",
                "phone_code" => "+1268",
                "code" => "AG"
            ],
            [
                "name" => "Argentina",
                "phone_code" => "+54",
                "code" => "AR"
            ],
            [
                "name" => "Armenia",
                "phone_code" => "+374",
                "code" => "AM"
            ],
            [
                "name" => "Aruba",
                "phone_code" => "+297",
                "code" => "AW"
            ],
            [
                "name" => "Australia",
                "phone_code" => "+61",
                "code" => "AU"
            ],
            [
                "name" => "Austria",
                "phone_code" => "+43",
                "code" => "AT"
            ],
            [
                "name" => "Azerbaijan",
                "phone_code" => "+994",
                "code" => "AZ"
            ],
            [
                "name" => "Bahamas",
                "phone_code" => "+1242",
                "code" => "BS"
            ],
            [
                "name" => "Bahrain",
                "phone_code" => "+973",
                "code" => "BH"
            ],
            [
                "name" => "Bangladesh",
                "phone_code" => "+880",
                "code" => "BD"
            ],
            [
                "name" => "Barbados",
                "phone_code" => "+1246",
                "code" => "BB"
            ],
            [
                "name" => "Belarus",
                "phone_code" => "+375",
                "code" => "BY"
            ],
            [
                "name" => "Belgium",
                "phone_code" => "+32",
                "code" => "BE"
            ],
            [
                "name" => "Belize",
                "phone_code" => "+501",
                "code" => "BZ"
            ],
            [
                "name" => "Benin",
                "phone_code" => "+229",
                "code" => "BJ"
            ],
            [
                "name" => "Bermuda",
                "phone_code" => "+1441",
                "code" => "BM"
            ],
            [
                "name" => "Bhutan",
                "phone_code" => "+975",
                "code" => "BT"
            ],
            [
                "name" => "Bolivia, Plurinational State of",
                "phone_code" => "+591",
                "code" => "BO"
            ],
            [
                "name" => "Bosnia and Herzegovina",
                "phone_code" => "+387",
                "code" => "BA"
            ],
            [
                "name" => "Botswana",
                "phone_code" => "+267",
                "code" => "BW"
            ],
            [
                "name" => "Brazil",
                "phone_code" => "+55",
                "code" => "BR"
            ],
            [
                "name" => "British Indian Ocean Territory",
                "phone_code" => "+246",
                "code" => "IO"
            ],
            [
                "name" => "Brunei Darussalam",
                "phone_code" => "+673",
                "code" => "BN"
            ],
            [
                "name" => "Bulgaria",
                "phone_code" => "+359",
                "code" => "BG"
            ],
            [
                "name" => "Burkina Faso",
                "phone_code" => "+226",
                "code" => "BF"
            ],
            [
                "name" => "Burundi",
                "phone_code" => "+257",
                "code" => "BI"
            ],
            [
                "name" => "Cambodia",
                "phone_code" => "+855",
                "code" => "KH"
            ],
            [
                "name" => "Cameroon",
                "phone_code" => "+237",
                "code" => "CM"
            ],
            [
                "name" => "Canada",
                "phone_code" => "+1",
                "code" => "CA"
            ],
            [
                "name" => "Cape Verde",
                "phone_code" => "+238",
                "code" => "CV"
            ],
            [
                "name" => "Cayman Islands",
                "phone_code" => "+ 345",
                "code" => "KY"
            ],
            [
                "name" => "Central African Republic",
                "phone_code" => "+236",
                "code" => "CF"
            ],
            [
                "name" => "Chad",
                "phone_code" => "+235",
                "code" => "TD"
            ],
            [
                "name" => "Chile",
                "phone_code" => "+56",
                "code" => "CL"
            ],
            [
                "name" => "China",
                "phone_code" => "+86",
                "code" => "CN"
            ],
            [
                "name" => "Christmas Island",
                "phone_code" => "+61",
                "code" => "CX"
            ],
            [
                "name" => "Cocos (Keeling) Islands",
                "phone_code" => "+61",
                "code" => "CC"
            ],
            [
                "name" => "Colombia",
                "phone_code" => "+57",
                "code" => "CO"
            ],
            [
                "name" => "Comoros",
                "phone_code" => "+269",
                "code" => "KM"
            ],
            [
                "name" => "Congo",
                "phone_code" => "+242",
                "code" => "CG"
            ],
            [
                "name" => "Congo, The Democratic Republic of the Congo",
                "phone_code" => "+243",
                "code" => "CD"
            ],
            [
                "name" => "Cook Islands",
                "phone_code" => "+682",
                "code" => "CK"
            ],
            [
                "name" => "Costa Rica",
                "phone_code" => "+506",
                "code" => "CR"
            ],
            [
                "name" => "Cote d'Ivoire",
                "phone_code" => "+225",
                "code" => "CI"
            ],
            [
                "name" => "Croatia",
                "phone_code" => "+385",
                "code" => "HR"
            ],
            [
                "name" => "Cuba",
                "phone_code" => "+53",
                "code" => "CU"
            ],
            [
                "name" => "Cyprus",
                "phone_code" => "+357",
                "code" => "CY"
            ],
            [
                "name" => "Czech Republic",
                "phone_code" => "+420",
                "code" => "CZ"
            ],
            [
                "name" => "Denmark",
                "phone_code" => "+45",
                "code" => "DK"
            ],
            [
                "name" => "Djibouti",
                "phone_code" => "+253",
                "code" => "DJ"
            ],
            [
                "name" => "Dominica",
                "phone_code" => "+1767",
                "code" => "DM"
            ],
            [
                "name" => "Dominican Republic",
                "phone_code" => "+1849",
                "code" => "DO"
            ],
            [
                "name" => "Ecuador",
                "phone_code" => "+593",
                "code" => "EC"
            ],
            [
                "name" => "Egypt",
                "phone_code" => "+20",
                "code" => "EG"
            ],
            [
                "name" => "El Salvador",
                "phone_code" => "+503",
                "code" => "SV"
            ],
            [
                "name" => "Equatorial Guinea",
                "phone_code" => "+240",
                "code" => "GQ"
            ],
            [
                "name" => "Eritrea",
                "phone_code" => "+291",
                "code" => "ER"
            ],
            [
                "name" => "Estonia",
                "phone_code" => "+372",
                "code" => "EE"
            ],
            [
                "name" => "Ethiopia",
                "phone_code" => "+251",
                "code" => "ET"
            ],
            [
                "name" => "Falkland Islands (Malvinas)",
                "phone_code" => "+500",
                "code" => "FK"
            ],
            [
                "name" => "Faroe Islands",
                "phone_code" => "+298",
                "code" => "FO"
            ],
            [
                "name" => "Fiji",
                "phone_code" => "+679",
                "code" => "FJ"
            ],
            [
                "name" => "Finland",
                "phone_code" => "+358",
                "code" => "FI"
            ],
            [
                "name" => "France",
                "phone_code" => "+33",
                "code" => "FR"
            ],
            [
                "name" => "French Guiana",
                "phone_code" => "+594",
                "code" => "GF"
            ],
            [
                "name" => "French Polynesia",
                "phone_code" => "+689",
                "code" => "PF"
            ],
            [
                "name" => "Gabon",
                "phone_code" => "+241",
                "code" => "GA"
            ],
            [
                "name" => "Gambia",
                "phone_code" => "+220",
                "code" => "GM"
            ],
            [
                "name" => "Georgia",
                "phone_code" => "+995",
                "code" => "GE"
            ],
            [
                "name" => "Germany",
                "phone_code" => "+49",
                "code" => "DE"
            ],
            [
                "name" => "Ghana",
                "phone_code" => "+233",
                "code" => "GH"
            ],
            [
                "name" => "Gibraltar",
                "phone_code" => "+350",
                "code" => "GI"
            ],
            [
                "name" => "Greece",
                "phone_code" => "+30",
                "code" => "GR"
            ],
            [
                "name" => "Greenland",
                "phone_code" => "+299",
                "code" => "GL"
            ],
            [
                "name" => "Grenada",
                "phone_code" => "+1473",
                "code" => "GD"
            ],
            [
                "name" => "Guadeloupe",
                "phone_code" => "+590",
                "code" => "GP"
            ],
            [
                "name" => "Guam",
                "phone_code" => "+1671",
                "code" => "GU"
            ],
            [
                "name" => "Guatemala",
                "phone_code" => "+502",
                "code" => "GT"
            ],
            [
                "name" => "Guernsey",
                "phone_code" => "+44",
                "code" => "GG"
            ],
            [
                "name" => "Guinea",
                "phone_code" => "+224",
                "code" => "GN"
            ],
            [
                "name" => "Guinea-Bissau",
                "phone_code" => "+245",
                "code" => "GW"
            ],
            [
                "name" => "Guyana",
                "phone_code" => "+595",
                "code" => "GY"
            ],
            [
                "name" => "Haiti",
                "phone_code" => "+509",
                "code" => "HT"
            ],
            [
                "name" => "Holy See (Vatican City State)",
                "phone_code" => "+379",
                "code" => "VA"
            ],
            [
                "name" => "Honduras",
                "phone_code" => "+504",
                "code" => "HN"
            ],
            [
                "name" => "Hong Kong",
                "phone_code" => "+852",
                "code" => "HK"
            ],
            [
                "name" => "Hungary",
                "phone_code" => "+36",
                "code" => "HU"
            ],
            [
                "name" => "Iceland",
                "phone_code" => "+354",
                "code" => "IS"
            ],
            [
                "name" => "India",
                "phone_code" => "+91",
                "code" => "IN"
            ],
            [
                "name" => "Indonesia",
                "phone_code" => "+62",
                "code" => "ID"
            ],
            [
                "name" => "Iran, Islamic Republic of Persian Gulf",
                "phone_code" => "+98",
                "code" => "IR"
            ],
            [
                "name" => "Iraq",
                "phone_code" => "+964",
                "code" => "IQ"
            ],
            [
                "name" => "Ireland",
                "phone_code" => "+353",
                "code" => "IE"
            ],
            [
                "name" => "Isle of Man",
                "phone_code" => "+44",
                "code" => "IM"
            ],
            [
                "name" => "Israel",
                "phone_code" => "+972",
                "code" => "IL"
            ],
            [
                "name" => "Italy",
                "phone_code" => "+39",
                "code" => "IT"
            ],
            [
                "name" => "Jamaica",
                "phone_code" => "+1876",
                "code" => "JM"
            ],
            [
                "name" => "Japan",
                "phone_code" => "+81",
                "code" => "JP"
            ],
            [
                "name" => "Jersey",
                "phone_code" => "+44",
                "code" => "JE"
            ],
            [
                "name" => "Jordan",
                "phone_code" => "+962",
                "code" => "JO"
            ],
            [
                "name" => "Kazakhstan",
                "phone_code" => "+77",
                "code" => "KZ"
            ],
            [
                "name" => "Kenya",
                "phone_code" => "+254",
                "code" => "KE"
            ],
            [
                "name" => "Kiribati",
                "phone_code" => "+686",
                "code" => "KI"
            ],
            [
                "name" => "Korea, Democratic People's Republic of Korea",
                "phone_code" => "+850",
                "code" => "KP"
            ],
            [
                "name" => "Korea, Republic of South Korea",
                "phone_code" => "+82",
                "code" => "KR"
            ],
            [
                "name" => "Kuwait",
                "phone_code" => "+965",
                "code" => "KW"
            ],
            [
                "name" => "Kyrgyzstan",
                "phone_code" => "+996",
                "code" => "KG"
            ],
            [
                "name" => "Laos",
                "phone_code" => "+856",
                "code" => "LA"
            ],
            [
                "name" => "Latvia",
                "phone_code" => "+371",
                "code" => "LV"
            ],
            [
                "name" => "Lebanon",
                "phone_code" => "+961",
                "code" => "LB"
            ],
            [
                "name" => "Lesotho",
                "phone_code" => "+266",
                "code" => "LS"
            ],
            [
                "name" => "Liberia",
                "phone_code" => "+231",
                "code" => "LR"
            ],
            [
                "name" => "Libyan Arab Jamahiriya",
                "phone_code" => "+218",
                "code" => "LY"
            ],
            [
                "name" => "Liechtenstein",
                "phone_code" => "+423",
                "code" => "LI"
            ],
            [
                "name" => "Lithuania",
                "phone_code" => "+370",
                "code" => "LT"
            ],
            [
                "name" => "Luxembourg",
                "phone_code" => "+352",
                "code" => "LU"
            ],
            [
                "name" => "Macao",
                "phone_code" => "+853",
                "code" => "MO"
            ],
            [
                "name" => "Macedonia",
                "phone_code" => "+389",
                "code" => "MK"
            ],
            [
                "name" => "Madagascar",
                "phone_code" => "+261",
                "code" => "MG"
            ],
            [
                "name" => "Malawi",
                "phone_code" => "+265",
                "code" => "MW"
            ],
            [
                "name" => "Malaysia",
                "phone_code" => "+60",
                "code" => "MY"
            ],
            [
                "name" => "Maldives",
                "phone_code" => "+960",
                "code" => "MV"
            ],
            [
                "name" => "Mali",
                "phone_code" => "+223",
                "code" => "ML"
            ],
            [
                "name" => "Malta",
                "phone_code" => "+356",
                "code" => "MT"
            ],
            [
                "name" => "Marshall Islands",
                "phone_code" => "+692",
                "code" => "MH"
            ],
            [
                "name" => "Martinique",
                "phone_code" => "+596",
                "code" => "MQ"
            ],
            [
                "name" => "Mauritania",
                "phone_code" => "+222",
                "code" => "MR"
            ],
            [
                "name" => "Mauritius",
                "phone_code" => "+230",
                "code" => "MU"
            ],
            [
                "name" => "Mayotte",
                "phone_code" => "+262",
                "code" => "YT"
            ],
            [
                "name" => "Mexico",
                "phone_code" => "+52",
                "code" => "MX"
            ],
            [
                "name" => "Micronesia, Federated States of Micronesia",
                "phone_code" => "+691",
                "code" => "FM"
            ],
            [
                "name" => "Moldova",
                "phone_code" => "+373",
                "code" => "MD"
            ],
            [
                "name" => "Monaco",
                "phone_code" => "+377",
                "code" => "MC"
            ],
            [
                "name" => "Mongolia",
                "phone_code" => "+976",
                "code" => "MN"
            ],
            [
                "name" => "Montenegro",
                "phone_code" => "+382",
                "code" => "ME"
            ],
            [
                "name" => "Montserrat",
                "phone_code" => "+1664",
                "code" => "MS"
            ],
            [
                "name" => "Morocco",
                "phone_code" => "+212",
                "code" => "MA"
            ],
            [
                "name" => "Mozambique",
                "phone_code" => "+258",
                "code" => "MZ"
            ],
            [
                "name" => "Myanmar",
                "phone_code" => "+95",
                "code" => "MM"
            ],
            [
                "name" => "Namibia",
                "phone_code" => "+264",
                "code" => "NA"
            ],
            [
                "name" => "Nauru",
                "phone_code" => "+674",
                "code" => "NR"
            ],
            [
                "name" => "Nepal",
                "phone_code" => "+977",
                "code" => "NP"
            ],
            [
                "name" => "Netherlands",
                "phone_code" => "+31",
                "code" => "NL"
            ],
            [
                "name" => "Netherlands Antilles",
                "phone_code" => "+599",
                "code" => "AN"
            ],
            [
                "name" => "New Caledonia",
                "phone_code" => "+687",
                "code" => "NC"
            ],
            [
                "name" => "New Zealand",
                "phone_code" => "+64",
                "code" => "NZ"
            ],
            [
                "name" => "Nicaragua",
                "phone_code" => "+505",
                "code" => "NI"
            ],
            [
                "name" => "Niger",
                "phone_code" => "+227",
                "code" => "NE"
            ],
            [
                "name" => "Nigeria",
                "phone_code" => "+234",
                "code" => "NG"
            ],
            [
                "name" => "Niue",
                "phone_code" => "+683",
                "code" => "NU"
            ],
            [
                "name" => "Norfolk Island",
                "phone_code" => "+672",
                "code" => "NF"
            ],
            [
                "name" => "Northern Mariana Islands",
                "phone_code" => "+1670",
                "code" => "MP"
            ],
            [
                "name" => "Norway",
                "phone_code" => "+47",
                "code" => "NO"
            ],
            [
                "name" => "Oman",
                "phone_code" => "+968",
                "code" => "OM"
            ],
            [
                "name" => "Pakistan",
                "phone_code" => "+92",
                "code" => "PK"
            ],
            [
                "name" => "Palau",
                "phone_code" => "+680",
                "code" => "PW"
            ],
            [
                "name" => "Palestinian Territory, Occupied",
                "phone_code" => "+970",
                "code" => "PS"
            ],
            [
                "name" => "Panama",
                "phone_code" => "+507",
                "code" => "PA"
            ],
            [
                "name" => "Papua New Guinea",
                "phone_code" => "+675",
                "code" => "PG"
            ],
            [
                "name" => "Paraguay",
                "phone_code" => "+595",
                "code" => "PY"
            ],
            [
                "name" => "Peru",
                "phone_code" => "+51",
                "code" => "PE"
            ],
            [
                "name" => "Philippines",
                "phone_code" => "+63",
                "code" => "PH"
            ],
            [
                "name" => "Pitcairn",
                "phone_code" => "+872",
                "code" => "PN"
            ],
            [
                "name" => "Poland",
                "phone_code" => "+48",
                "code" => "PL"
            ],
            [
                "name" => "Portugal",
                "phone_code" => "+351",
                "code" => "PT"
            ],
            [
                "name" => "Puerto Rico",
                "phone_code" => "+1939",
                "code" => "PR"
            ],
            [
                "name" => "Qatar",
                "phone_code" => "+974",
                "code" => "QA"
            ],
            [
                "name" => "Romania",
                "phone_code" => "+40",
                "code" => "RO"
            ],
            [
                "name" => "Russia",
                "phone_code" => "+7",
                "code" => "RU"
            ],
            [
                "name" => "Rwanda",
                "phone_code" => "+250",
                "code" => "RW"
            ],
            [
                "name" => "Reunion",
                "phone_code" => "+262",
                "code" => "RE"
            ],
            [
                "name" => "Saint Barthelemy",
                "phone_code" => "+590",
                "code" => "BL"
            ],
            [
                "name" => "Saint Helena, Ascension and Tristan Da Cunha",
                "phone_code" => "+290",
                "code" => "SH"
            ],
            [
                "name" => "Saint Kitts and Nevis",
                "phone_code" => "+1869",
                "code" => "KN"
            ],
            [
                "name" => "Saint Lucia",
                "phone_code" => "+1758",
                "code" => "LC"
            ],
            [
                "name" => "Saint Martin",
                "phone_code" => "+590",
                "code" => "MF"
            ],
            [
                "name" => "Saint Pierre and Miquelon",
                "phone_code" => "+508",
                "code" => "PM"
            ],
            [
                "name" => "Saint Vincent and the Grenadines",
                "phone_code" => "+1784",
                "code" => "VC"
            ],
            [
                "name" => "Samoa",
                "phone_code" => "+685",
                "code" => "WS"
            ],
            [
                "name" => "San Marino",
                "phone_code" => "+378",
                "code" => "SM"
            ],
            [
                "name" => "Sao Tome and Principe",
                "phone_code" => "+239",
                "code" => "ST"
            ],
            [
                "name" => "Saudi Arabia",
                "phone_code" => "+966",
                "code" => "SA"
            ],
            [
                "name" => "Senegal",
                "phone_code" => "+221",
                "code" => "SN"
            ],
            [
                "name" => "Serbia",
                "phone_code" => "+381",
                "code" => "RS"
            ],
            [
                "name" => "Seychelles",
                "phone_code" => "+248",
                "code" => "SC"
            ],
            [
                "name" => "Sierra Leone",
                "phone_code" => "+232",
                "code" => "SL"
            ],
            [
                "name" => "Singapore",
                "phone_code" => "+65",
                "code" => "SG"
            ],
            [
                "name" => "Slovakia",
                "phone_code" => "+421",
                "code" => "SK"
            ],
            [
                "name" => "Slovenia",
                "phone_code" => "+386",
                "code" => "SI"
            ],
            [
                "name" => "Solomon Islands",
                "phone_code" => "+677",
                "code" => "SB"
            ],
            [
                "name" => "Somalia",
                "phone_code" => "+252",
                "code" => "SO"
            ],
            [
                "name" => "South Africa",
                "phone_code" => "+27",
                "code" => "ZA"
            ],
            [
                "name" => "South Sudan",
                "phone_code" => "+211",
                "code" => "SS"
            ],
            [
                "name" => "South Georgia and the South Sandwich Islands",
                "phone_code" => "+500",
                "code" => "GS"
            ],
            [
                "name" => "Spain",
                "phone_code" => "+34",
                "code" => "ES"
            ],
            [
                "name" => "Sri Lanka",
                "phone_code" => "+94",
                "code" => "LK"
            ],
            [
                "name" => "Sudan",
                "phone_code" => "+249",
                "code" => "SD"
            ],
            [
                "name" => "Suriname",
                "phone_code" => "+597",
                "code" => "SR"
            ],
            [
                "name" => "Svalbard and Jan Mayen",
                "phone_code" => "+47",
                "code" => "SJ"
            ],
            [
                "name" => "Swaziland",
                "phone_code" => "+268",
                "code" => "SZ"
            ],
            [
                "name" => "Sweden",
                "phone_code" => "+46",
                "code" => "SE"
            ],
            [
                "name" => "Switzerland",
                "phone_code" => "+41",
                "code" => "CH"
            ],
            [
                "name" => "Syrian Arab Republic",
                "phone_code" => "+963",
                "code" => "SY"
            ],
            [
                "name" => "Taiwan",
                "phone_code" => "+886",
                "code" => "TW"
            ],
            [
                "name" => "Tajikistan",
                "phone_code" => "+992",
                "code" => "TJ"
            ],
            [
                "name" => "Tanzania, United Republic of Tanzania",
                "phone_code" => "+255",
                "code" => "TZ"
            ],
            [
                "name" => "Thailand",
                "phone_code" => "+66",
                "code" => "TH"
            ],
            [
                "name" => "Timor-Leste",
                "phone_code" => "+670",
                "code" => "TL"
            ],
            [
                "name" => "Togo",
                "phone_code" => "+228",
                "code" => "TG"
            ],
            [
                "name" => "Tokelau",
                "phone_code" => "+690",
                "code" => "TK"
            ],
            [
                "name" => "Tonga",
                "phone_code" => "+676",
                "code" => "TO"
            ],
            [
                "name" => "Trinidad and Tobago",
                "phone_code" => "+1868",
                "code" => "TT"
            ],
            [
                "name" => "Tunisia",
                "phone_code" => "+216",
                "code" => "TN"
            ],
            [
                "name" => "Turkey",
                "phone_code" => "+90",
                "code" => "TR"
            ],
            [
                "name" => "Turkmenistan",
                "phone_code" => "+993",
                "code" => "TM"
            ],
            [
                "name" => "Turks and Caicos Islands",
                "phone_code" => "+1649",
                "code" => "TC"
            ],
            [
                "name" => "Tuvalu",
                "phone_code" => "+688",
                "code" => "TV"
            ],
            [
                "name" => "Uganda",
                "phone_code" => "+256",
                "code" => "UG"
            ],
            [
                "name" => "Ukraine",
                "phone_code" => "+380",
                "code" => "UA"
            ],
            [
                "name" => "United Arab Emirates",
                "phone_code" => "+971",
                "code" => "AE"
            ],
            [
                "name" => "United Kingdom",
                "phone_code" => "+44",
                "code" => "GB"
            ],
            [
                "name" => "United States",
                "phone_code" => "+1",
                "code" => "US"
            ],
            [
                "name" => "Uruguay",
                "phone_code" => "+598",
                "code" => "UY"
            ],
            [
                "name" => "Uzbekistan",
                "phone_code" => "+998",
                "code" => "UZ"
            ],
            [
                "name" => "Vanuatu",
                "phone_code" => "+678",
                "code" => "VU"
            ],
            [
                "name" => "Venezuela, Bolivarian Republic of Venezuela",
                "phone_code" => "+58",
                "code" => "VE"
            ],
            [
                "name" => "Vietnam",
                "phone_code" => "+84",
                "code" => "VN"
            ],
            [
                "name" => "Virgin Islands, British",
                "phone_code" => "+1284",
                "code" => "VG"
            ],
            [
                "name" => "Virgin Islands, U.S.",
                "phone_code" => "+1340",
                "code" => "VI"
            ],
            [
                "name" => "Wallis and Futuna",
                "phone_code" => "+681",
                "code" => "WF"
            ],
            [
                "name" => "Yemen",
                "phone_code" => "+967",
                "code" => "YE"
            ],
            [
                "name" => "Zambia",
                "phone_code" => "+260",
                "code" => "ZM"
            ],
            [
                "name" => "Zimbabwe",
                "phone_code" => "+263",
                "code" => "ZW"
            ]
        ];


        DB::table('countries')->insert($countries);
    }
}
