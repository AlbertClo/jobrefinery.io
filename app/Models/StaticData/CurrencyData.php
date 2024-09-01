<?php

namespace App\Models\StaticData;

use App\Models\StaticData\Contracts\StaticDataContract;

class CurrencyData implements StaticDataContract
{
    public const AED = 'AED';
    public const AFN = 'AFN';
    public const ALL = 'ALL';
    public const AMD = 'AMD';
    public const ANG = 'ANG';
    public const AOA = 'AOA';
    public const ARS = 'ARS';
    public const AUD = 'AUD';
    public const AWG = 'AWG';
    public const AZN = 'AZN';
    public const BAM = 'BAM';
    public const BBD = 'BBD';
    public const BDT = 'BDT';
    public const BGN = 'BGN';
    public const BHD = 'BHD';
    public const BIF = 'BIF';
    public const BMD = 'BMD';
    public const BND = 'BND';
    public const BOB = 'BOB';
    public const BOV = 'BOV';
    public const BRL = 'BRL';
    public const BSD = 'BSD';
    public const BTN = 'BTN';
    public const BWP = 'BWP';
    public const BYN = 'BYN';
    public const BZD = 'BZD';
    public const CAD = 'CAD';
    public const CDF = 'CDF';
    public const CHE = 'CHE';
    public const CHF = 'CHF';
    public const CHW = 'CHW';
    public const CLF = 'CLF';
    public const CLP = 'CLP';
    public const CNY = 'CNY';
    public const COP = 'COP';
    public const COU = 'COU';
    public const CRC = 'CRC';
    public const CUP = 'CUP';
    public const CVE = 'CVE';
    public const CZK = 'CZK';
    public const DJF = 'DJF';
    public const DKK = 'DKK';
    public const DOP = 'DOP';
    public const DZD = 'DZD';
    public const EGP = 'EGP';
    public const ERN = 'ERN';
    public const ETB = 'ETB';
    public const EUR = 'EUR';
    public const FJD = 'FJD';
    public const FKP = 'FKP';
    public const GBP = 'GBP';
    public const GEL = 'GEL';
    public const GHS = 'GHS';
    public const GIP = 'GIP';
    public const GMD = 'GMD';
    public const GNF = 'GNF';
    public const GTQ = 'GTQ';
    public const GYD = 'GYD';
    public const HKD = 'HKD';
    public const HNL = 'HNL';
    public const HTG = 'HTG';
    public const HUF = 'HUF';
    public const IDR = 'IDR';
    public const ILS = 'ILS';
    public const INR = 'INR';
    public const IQD = 'IQD';
    public const IRR = 'IRR';
    public const ISK = 'ISK';
    public const JMD = 'JMD';
    public const JOD = 'JOD';
    public const JPY = 'JPY';
    public const KES = 'KES';
    public const KGS = 'KGS';
    public const KHR = 'KHR';
    public const KMF = 'KMF';
    public const KPW = 'KPW';
    public const KRW = 'KRW';
    public const KWD = 'KWD';
    public const KYD = 'KYD';
    public const KZT = 'KZT';
    public const LAK = 'LAK';
    public const LBP = 'LBP';
    public const LKR = 'LKR';
    public const LRD = 'LRD';
    public const LSL = 'LSL';
    public const LYD = 'LYD';
    public const MAD = 'MAD';
    public const MDL = 'MDL';
    public const MGA = 'MGA';
    public const MKD = 'MKD';
    public const MMK = 'MMK';
    public const MNT = 'MNT';
    public const MOP = 'MOP';
    public const MRU = 'MRU';
    public const MUR = 'MUR';
    public const MVR = 'MVR';
    public const MWK = 'MWK';
    public const MXN = 'MXN';
    public const MXV = 'MXV';
    public const MYR = 'MYR';
    public const MZN = 'MZN';
    public const NAD = 'NAD';
    public const NGN = 'NGN';
    public const NIO = 'NIO';
    public const NOK = 'NOK';
    public const NPR = 'NPR';
    public const NZD = 'NZD';
    public const OMR = 'OMR';
    public const PAB = 'PAB';
    public const PEN = 'PEN';
    public const PGK = 'PGK';
    public const PHP = 'PHP';
    public const PKR = 'PKR';
    public const PLN = 'PLN';
    public const PYG = 'PYG';
    public const QAR = 'QAR';
    public const RON = 'RON';
    public const RSD = 'RSD';
    public const RUB = 'RUB';
    public const RWF = 'RWF';
    public const SAR = 'SAR';
    public const SBD = 'SBD';
    public const SCR = 'SCR';
    public const SDG = 'SDG';
    public const SEK = 'SEK';
    public const SGD = 'SGD';
    public const SHP = 'SHP';
    public const SLE = 'SLE';
    public const SOS = 'SOS';
    public const SRD = 'SRD';
    public const SSP = 'SSP';
    public const STN = 'STN';
    public const SVC = 'SVC';
    public const SYP = 'SYP';
    public const SZL = 'SZL';
    public const THB = 'THB';
    public const TJS = 'TJS';
    public const TMT = 'TMT';
    public const TND = 'TND';
    public const TOP = 'TOP';
    public const TRY = 'TRY';
    public const TTD = 'TTD';
    public const TWD = 'TWD';
    public const TZS = 'TZS';
    public const UAH = 'UAH';
    public const UGX = 'UGX';
    public const USD = 'USD';
    public const USN = 'USN';
    public const UYI = 'UYI';
    public const UYU = 'UYU';
    public const UYW = 'UYW';
    public const UZS = 'UZS';
    public const VED = 'VED';
    public const VES = 'VES';
    public const VND = 'VND';
    public const VUV = 'VUV';
    public const WST = 'WST';
    public const XAF = 'XAF';
    public const XAG = 'XAG';
    public const XAU = 'XAU';
    public const XBA = 'XBA';
    public const XBB = 'XBB';
    public const XBC = 'XBC';
    public const XBD = 'XBD';
    public const XCD = 'XCD';
    public const XDR = 'XDR';
    public const XOF = 'XOF';
    public const XPD = 'XPD';
    public const XPF = 'XPF';
    public const XPT = 'XPT';
    public const XSU = 'XSU';
    public const XTS = 'XTS';
    public const XUA = 'XUA';
    public const YER = 'YER';
    public const ZAR = 'ZAR';
    public const ZMW = 'ZMW';
    public const ZWG = 'ZWG';
    public const ZWL = 'ZWL';

    public static function getModelClass(): string
    {
        return \App\Models\Currency::class;
    }

    public static function getData(): array
    {
        return [
            [
                'code' => self::AED,
                'name' => 'United Arab Emirates Dirham',
                'symbol' => 'د.إ',
            ],
            [
                'code' => self::AFN,
                'name' => 'Afghan Afghani',
                'symbol' => '؋',
            ],
            [
                'code' => self::ALL,
                'name' => 'Albanian Lek',
                'symbol' => 'L',
            ],
            [
                'code' => self::AMD,
                'name' => 'Armenian Dram',
                'symbol' => '֏',
            ],
            [
                'code' => self::ANG,
                'name' => 'Netherlands Antillean Guilder',
                'symbol' => 'ƒ',
            ],
            [
                'code' => self::AOA,
                'name' => 'Angolan Kwanza',
                'symbol' => 'Kz',
            ],
            [
                'code' => self::ARS,
                'name' => 'Argentine Peso',
                'symbol' => '$',
            ],
            [
                'code' => self::AUD,
                'name' => 'Australian Dollar',
                'symbol' => '$',
            ],
            [
                'code' => self::AWG,
                'name' => 'Aruban Florin',
                'symbol' => 'ƒ',
            ],
            [
                'code' => self::AZN,
                'name' => 'Azerbaijani Manat',
                'symbol' => '₼',
            ],
            [
                'code' => self::BAM,
                'name' => 'Bosnia-Herzegovina Convertible Mark',
                'symbol' => 'KM',
            ],
            [
                'code' => self::BBD,
                'name' => 'Barbadian Dollar',
                'symbol' => '$',
            ],
            [
                'code' => self::BDT,
                'name' => 'Bangladeshi Taka',
                'symbol' => '৳',
            ],
            [
                'code' => self::BGN,
                'name' => 'Bulgarian Lev',
                'symbol' => 'лв',
            ],
            [
                'code' => self::BHD,
                'name' => 'Bahraini Dinar',
                'symbol' => '.د.ب',
            ],
            [
                'code' => self::BIF,
                'name' => 'Burundian Franc',
                'symbol' => 'FBu',
            ],
            [
                'code' => self::BMD,
                'name' => 'Bermudan Dollar',
                'symbol' => '$',
            ],
            [
                'code' => self::BND,
                'name' => 'Brunei Dollar',
                'symbol' => '$',
            ],
            [
                'code' => self::BOB,
                'name' => 'Bolivian Boliviano',
                'symbol' => 'Bs.',
            ],
            [
                'code' => self::BOV,
                'name' => 'Bolivian Mvdol',
                'symbol' => 'BOV',
            ],
            [
                'code' => self::BRL,
                'name' => 'Brazilian Real',
                'symbol' => 'R$',
            ],
            [
                'code' => self::BSD,
                'name' => 'Bahamian Dollar',
                'symbol' => '$',
            ],
            [
                'code' => self::BTN,
                'name' => 'Bhutanese Ngultrum',
                'symbol' => 'Nu.',
            ],
            [
                'code' => self::BWP,
                'name' => 'Botswanan Pula',
                'symbol' => 'P',
            ],
            [
                'code' => self::BYN,
                'name' => 'Belarusian Ruble',
                'symbol' => 'Br',
            ],
            [
                'code' => self::BZD,
                'name' => 'Belize Dollar',
                'symbol' => 'BZ$',
            ],
            [
                'code' => self::CAD,
                'name' => 'Canadian Dollar',
                'symbol' => '$',
            ],
            [
                'code' => self::CDF,
                'name' => 'Congolese Franc',
                'symbol' => 'FC',
            ],
            [
                'code' => self::CHE,
                'name' => 'WIR Euro',
                'symbol' => 'CHE',
            ],
            [
                'code' => self::CHF,
                'name' => 'Swiss Franc',
                'symbol' => 'CHF',
            ],
            [
                'code' => self::CHW,
                'name' => 'WIR Franc',
                'symbol' => 'CHW',
            ],
            [
                'code' => self::CLF,
                'name' => 'Chilean Unit of Account (UF)',
                'symbol' => 'CLF',
            ],
            [
                'code' => self::CLP,
                'name' => 'Chilean Peso',
                'symbol' => '$',
            ],
            [
                'code' => self::CNY,
                'name' => 'Chinese Yuan',
                'symbol' => '¥',
            ],
            [
                'code' => self::COP,
                'name' => 'Colombian Peso',
                'symbol' => '$',
            ],
            [
                'code' => self::COU,
                'name' => 'Colombian Real Value Unit',
                'symbol' => 'COU',
            ],
            [
                'code' => self::CRC,
                'name' => 'Costa Rican Colón',
                'symbol' => '₡',
            ],
            [
                'code' => self::CUP,
                'name' => 'Cuban Peso',
                'symbol' => '₱',
            ],
            [
                'code' => self::CVE,
                'name' => 'Cape Verdean Escudo',
                'symbol' => '$',
            ],
            [
                'code' => self::CZK,
                'name' => 'Czech Republic Koruna',
                'symbol' => 'Kč',
            ],
            [
                'code' => self::DJF,
                'name' => 'Djiboutian Franc',
                'symbol' => 'Fdj',
            ],
            [
                'code' => self::DKK,
                'name' => 'Danish Krone',
                'symbol' => 'kr',
            ],
            [
                'code' => self::DOP,
                'name' => 'Dominican Peso',
                'symbol' => 'RD$',
            ],
            [
                'code' => self::DZD,
                'name' => 'Algerian Dinar',
                'symbol' => 'د.ج',
            ],
            [
                'code' => self::EGP,
                'name' => 'Egyptian Pound',
                'symbol' => '£',
            ],
            [
                'code' => self::ERN,
                'name' => 'Eritrean Nakfa',
                'symbol' => 'Nfk',
            ],
            [
                'code' => self::ETB,
                'name' => 'Ethiopian Birr',
                'symbol' => 'Br',
            ],
            [
                'code' => self::EUR,
                'name' => 'Euro',
                'symbol' => '€',
            ],
            [
                'code' => self::FJD,
                'name' => 'Fijian Dollar',
                'symbol' => '$',
            ],
            [
                'code' => self::FKP,
                'name' => 'Falkland Islands Pound',
                'symbol' => '£',
            ],
            [
                'code' => self::GBP,
                'name' => 'British Pound Sterling',
                'symbol' => '£',
            ],
            [
                'code' => self::GEL,
                'name' => 'Georgian Lari',
                'symbol' => '₾',
            ],
            [
                'code' => self::GHS,
                'name' => 'Ghanaian Cedi',
                'symbol' => '₵',
            ],
            [
                'code' => self::GIP,
                'name' => 'Gibraltar Pound',
                'symbol' => '£',
            ],
            [
                'code' => self::GMD,
                'name' => 'Gambian Dalasi',
                'symbol' => 'D',
            ],
            [
                'code' => self::GNF,
                'name' => 'Guinean Franc',
                'symbol' => 'FG',
            ],
            [
                'code' => self::GTQ,
                'name' => 'Guatemalan Quetzal',
                'symbol' => 'Q',
            ],
            [
                'code' => self::GYD,
                'name' => 'Guyanaese Dollar',
                'symbol' => '$',
            ],
            [
                'code' => self::HKD,
                'name' => 'Hong Kong Dollar',
                'symbol' => '$',
            ],
            [
                'code' => self::HNL,
                'name' => 'Honduran Lempira',
                'symbol' => 'L',
            ],
            [
                'code' => self::HTG,
                'name' => 'Haitian Gourde',
                'symbol' => 'G',
            ],
            [
                'code' => self::HUF,
                'name' => 'Hungarian Forint',
                'symbol' => 'Ft',
            ],
            [
                'code' => self::IDR,
                'name' => 'Indonesian Rupiah',
                'symbol' => 'Rp',
            ],
            [
                'code' => self::ILS,
                'name' => 'Israeli New Sheqel',
                'symbol' => '₪',
            ],
            [
                'code' => self::INR,
                'name' => 'Indian Rupee',
                'symbol' => '₹',
            ],
            [
                'code' => self::IQD,
                'name' => 'Iraqi Dinar',
                'symbol' => 'ع.د',
            ],
            [
                'code' => self::IRR,
                'name' => 'Iranian Rial',
                'symbol' => '﷼',
            ],
            [
                'code' => self::ISK,
                'name' => 'Icelandic Króna',
                'symbol' => 'kr',
            ],
            [
                'code' => self::JMD,
                'name' => 'Jamaican Dollar',
                'symbol' => 'J$',
            ],
            [
                'code' => self::JOD,
                'name' => 'Jordanian Dinar',
                'symbol' => 'د.ا',
            ],
            [
                'code' => self::JPY,
                'name' => 'Japanese Yen',
                'symbol' => '¥',
            ],
            [
                'code' => self::KES,
                'name' => 'Kenyan Shilling',
                'symbol' => 'KSh',
            ],
            [
                'code' => self::KGS,
                'name' => 'Kyrgystani Som',
                'symbol' => 'лв',
            ],
            [
                'code' => self::KHR,
                'name' => 'Cambodian Riel',
                'symbol' => '៛',
            ],
            [
                'code' => self::KMF,
                'name' => 'Comorian Franc',
                'symbol' => 'CF',
            ],
            [
                'code' => self::KPW,
                'name' => 'North Korean Won',
                'symbol' => '₩',
            ],
            [
                'code' => self::KRW,
                'name' => 'South Korean Won',
                'symbol' => '₩',
            ],
            [
                'code' => self::KWD,
                'name' => 'Kuwaiti Dinar',
                'symbol' => 'د.ك',
            ],
            [
                'code' => self::KYD,
                'name' => 'Cayman Islands Dollar',
                'symbol' => '$',
            ],
            [
                'code' => self::KZT,
                'name' => 'Kazakhstani Tenge',
                'symbol' => '₸',
            ],
            [
                'code' => self::LAK,
                'name' => 'Laotian Kip',
                'symbol' => '₭',
            ],
            [
                'code' => self::LBP,
                'name' => 'Lebanese Pound',
                'symbol' => 'ل.ل',
            ],
            [
                'code' => self::LKR,
                'name' => 'Sri Lankan Rupee',
                'symbol' => '₨',
            ],
            [
                'code' => self::LRD,
                'name' => 'Liberian Dollar',
                'symbol' => '$',
            ],
            [
                'code' => self::LSL,
                'name' => 'Lesotho Loti',
                'symbol' => 'L',
            ],
            [
                'code' => self::LYD,
                'name' => 'Libyan Dinar',
                'symbol' => 'ل.د',
            ],
            [
                'code' => self::MAD,
                'name' => 'Moroccan Dirham',
                'symbol' => 'د.م.',
            ],
            [
                'code' => self::MDL,
                'name' => 'Moldovan Leu',
                'symbol' => 'L',
            ],
            [
                'code' => self::MGA,
                'name' => 'Malagasy Ariary',
                'symbol' => 'Ar',
            ],
            [
                'code' => self::MKD,
                'name' => 'Macedonian Denar',
                'symbol' => 'ден',
            ],
            [
                'code' => self::MMK,
                'name' => 'Myanma Kyat',
                'symbol' => 'K',
            ],
            [
                'code' => self::MNT,
                'name' => 'Mongolian Tugrik',
                'symbol' => '₮',
            ],
            [
                'code' => self::MOP,
                'name' => 'Macanese Pataca',
                'symbol' => 'P',
            ],
            [
                'code' => self::MRU,
                'name' => 'Mauritanian Ouguiya',
                'symbol' => 'UM',
            ],
            [
                'code' => self::MUR,
                'name' => 'Mauritian Rupee',
                'symbol' => '₨',
            ],
            [
                'code' => self::MVR,
                'name' => 'Maldivian Rufiyaa',
                'symbol' => '.ރ',
            ],
            [
                'code' => self::MWK,
                'name' => 'Malawian Kwacha',
                'symbol' => 'MK',
            ],
            [
                'code' => self::MXN,
                'name' => 'Mexican Peso',
                'symbol' => '$',
            ],
            [
                'code' => self::MXV,
                'name' => 'Mexican Investment Unit',
                'symbol' => 'MXV',
            ],
            [
                'code' => self::MYR,
                'name' => 'Malaysian Ringgit',
                'symbol' => 'RM',
            ],
            [
                'code' => self::MZN,
                'name' => 'Mozambican Metical',
                'symbol' => 'MT',
            ],
            [
                'code' => self::NAD,
                'name' => 'Namibian Dollar',
                'symbol' => '$',
            ],
            [
                'code' => self::NGN,
                'name' => 'Nigerian Naira',
                'symbol' => '₦',
            ],
            [
                'code' => self::NIO,
                'name' => 'Nicaraguan Córdoba',
                'symbol' => 'C$',
            ],
            [
                'code' => self::NOK,
                'name' => 'Norwegian Krone',
                'symbol' => 'kr',
            ],
            [
                'code' => self::NPR,
                'name' => 'Nepalese Rupee',
                'symbol' => '₨',
            ],
            [
                'code' => self::NZD,
                'name' => 'New Zealand Dollar',
                'symbol' => '$',
            ],
            [
                'code' => self::OMR,
                'name' => 'Omani Rial',
                'symbol' => '﷼',
            ],
            [
                'code' => self::PAB,
                'name' => 'Panamanian Balboa',
                'symbol' => 'B/.',
            ],
            [
                'code' => self::PEN,
                'name' => 'Peruvian Nuevo Sol',
                'symbol' => 'S/.',
            ],
            [
                'code' => self::PGK,
                'name' => 'Papua New Guinean Kina',
                'symbol' => 'K',
            ],
            [
                'code' => self::PHP,
                'name' => 'Philippine Peso',
                'symbol' => '₱',
            ],
            [
                'code' => self::PKR,
                'name' => 'Pakistani Rupee',
                'symbol' => '₨',
            ],
            [
                'code' => self::PLN,
                'name' => 'Polish Zloty',
                'symbol' => 'zł',
            ],
            [
                'code' => self::PYG,
                'name' => 'Paraguayan Guarani',
                'symbol' => '₲',
            ],
            [
                'code' => self::QAR,
                'name' => 'Qatari Rial',
                'symbol' => '﷼',
            ],
            [
                'code' => self::RON,
                'name' => 'Romanian Leu',
                'symbol' => 'lei',
            ],
            [
                'code' => self::RSD,
                'name' => 'Serbian Dinar',
                'symbol' => 'Дин.',
            ],
            [
                'code' => self::RUB,
                'name' => 'Russian Ruble',
                'symbol' => '₽',
            ],
            [
                'code' => self::RWF,
                'name' => 'Rwandan Franc',
                'symbol' => 'FRw',
            ],
            [
                'code' => self::SAR,
                'name' => 'Saudi Riyal',
                'symbol' => '﷼',
            ],
            [
                'code' => self::SBD,
                'name' => 'Solomon Islands Dollar',
                'symbol' => '$',
            ],
            [
                'code' => self::SCR,
                'name' => 'Seychellois Rupee',
                'symbol' => '₨',
            ],
            [
                'code' => self::SDG,
                'name' => 'Sudanese Pound',
                'symbol' => 'ج.س.',
            ],
            [
                'code' => self::SEK,
                'name' => 'Swedish Krona',
                'symbol' => 'kr',
            ],
            [
                'code' => self::SGD,
                'name' => 'Singapore Dollar',
                'symbol' => '$',
            ],
            [
                'code' => self::SHP,
                'name' => 'Saint Helena Pound',
                'symbol' => '£',
            ],
            [
                'code' => self::SLE,
                'name' => 'Sierra Leonean Leone',
                'symbol' => 'Le',
            ],
            [
                'code' => self::SOS,
                'name' => 'Somali Shilling',
                'symbol' => 'S',
            ],
            [
                'code' => self::SRD,
                'name' => 'Surinamese Dollar',
                'symbol' => '$',
            ],
            [
                'code' => self::SSP,
                'name' => 'South Sudanese Pound',
                'symbol' => '£',
            ],
            [
                'code' => self::STN,
                'name' => 'São Tomé and Príncipe Dobra',
                'symbol' => 'Db',
            ],
            [
                'code' => self::SVC,
                'name' => 'Salvadoran Colón',
                'symbol' => '$',
            ],
            [
                'code' => self::SYP,
                'name' => 'Syrian Pound',
                'symbol' => '£',
            ],
            [
                'code' => self::SZL,
                'name' => 'Swazi Lilangeni',
                'symbol' => 'L',
            ],
            [
                'code' => self::THB,
                'name' => 'Thai Baht',
                'symbol' => '฿',
            ],
            [
                'code' => self::TJS,
                'name' => 'Tajikistani Somoni',
                'symbol' => 'SM',
            ],
            [
                'code' => self::TMT,
                'name' => 'Turkmenistani Manat',
                'symbol' => 'T',
            ],
            [
                'code' => self::TND,
                'name' => 'Tunisian Dinar',
                'symbol' => 'د.ت',
            ],
            [
                'code' => self::TOP,
                'name' => 'Tongan Paʻanga',
                'symbol' => 'T$',
            ],
            [
                'code' => self::TRY,
                'name' => 'Turkish Lira',
                'symbol' => '₺',
            ],
            [
                'code' => self::TTD,
                'name' => 'Trinidad and Tobago Dollar',
                'symbol' => 'TT$',
            ],
            [
                'code' => self::TWD,
                'name' => 'New Taiwan Dollar',
                'symbol' => 'NT$',
            ],
            [
                'code' => self::TZS,
                'name' => 'Tanzanian Shilling',
                'symbol' => 'TSh',
            ],
            [
                'code' => self::UAH,
                'name' => 'Ukrainian Hryvnia',
                'symbol' => '₴',
            ],
            [
                'code' => self::UGX,
                'name' => 'Ugandan Shilling',
                'symbol' => 'USh',
            ],
            [
                'code' => self::USD,
                'name' => 'United States Dollar',
                'symbol' => '$',
            ],
            [
                'code' => self::USN,
                'name' => 'United States Dollar (Next day)',
                'symbol' => 'USN',
            ],
            [
                'code' => self::UYI,
                'name' => 'Uruguay Peso en Unidades Indexadas (URUIURUI)',
                'symbol' => 'UYI',
            ],
            [
                'code' => self::UYU,
                'name' => 'Uruguayan Peso',
                'symbol' => '$U',
            ],
            [
                'code' => self::UYW,
                'name' => 'Unidad Previsional',
                'symbol' => 'UP',
            ],
            [
                'code' => self::UZS,
                'name' => 'Uzbekistan Som',
                'symbol' => 'лв',
            ],
            [
                'code' => self::VED,
                'name' => 'Venezuelan Digital Bolívar',
                'symbol' => 'VED',
            ],
            [
                'code' => self::VES,
                'name' => 'Venezuelan Sovereign Bolívar',
                'symbol' => 'Bs.',
            ],
            [
                'code' => self::VND,
                'name' => 'Vietnamese Dong',
                'symbol' => '₫',
            ],
            [
                'code' => self::VUV,
                'name' => 'Vanuatu Vatu',
                'symbol' => 'VT',
            ],
            [
                'code' => self::WST,
                'name' => 'Samoan Tala',
                'symbol' => 'WS$',
            ],
            [
                'code' => self::XAF,
                'name' => 'CFA Franc BEAC',
                'symbol' => 'FCFA',
            ],
            [
                'code' => self::XAG,
                'name' => 'Silver (troy ounce)',
                'symbol' => 'XAG',
            ],
            [
                'code' => self::XAU,
                'name' => 'Gold (troy ounce)',
                'symbol' => 'XAU',
            ],
            [
                'code' => self::XBA,
                'name' => 'European Composite Unit (EURCO)',
                'symbol' => 'XBA',
            ],
            [
                'code' => self::XBB,
                'name' => 'European Monetary Unit (E.M.U.-6)',
                'symbol' => 'XBB',
            ],
            [
                'code' => self::XBC,
                'name' => 'European Unit of Account 9 (E.U.A.-9)',
                'symbol' => 'XBC',
            ],
            [
                'code' => self::XBD,
                'name' => 'European Unit of Account 17 (E.U.A.-17)',
                'symbol' => 'XBD',
            ],
            [
                'code' => self::XCD,
                'name' => 'East Caribbean Dollar',
                'symbol' => '$',
            ],
            [
                'code' => self::XDR,
                'name' => 'Special Drawing Rights',
                'symbol' => 'XDR',
            ],
            [
                'code' => self::XOF,
                'name' => 'CFA Franc BCEAO',
                'symbol' => 'CFA',
            ],
            [
                'code' => self::XPD,
                'name' => 'Palladium (troy ounce)',
                'symbol' => 'XPD',
            ],
            [
                'code' => self::XPF,
                'name' => 'CFP Franc',
                'symbol' => '₣',
            ],
            [
                'code' => self::XPT,
                'name' => 'Platinum (troy ounce)',
                'symbol' => 'XPT',
            ],
            [
                'code' => self::XSU,
                'name' => 'SUCRE',
                'symbol' => 'XSU',
            ],
            [
                'code' => self::XTS,
                'name' => 'Test Currency Code',
                'symbol' => 'XTS',
            ],
            [
                'code' => self::XUA,
                'name' => 'ADB Unit of Account',
                'symbol' => 'XUA',
            ],
            [
                'code' => self::YER,
                'name' => 'Yemeni Rial',
                'symbol' => '﷼',
            ],
            [
                'code' => self::ZAR,
                'name' => 'South African Rand',
                'symbol' => 'R',
            ],
            [
                'code' => self::ZMW,
                'name' => 'Zambian Kwacha',
                'symbol' => 'ZK',
            ],
            [
                'code' => self::ZWG,
                'name' => 'Zimbabwe Gold',
                'symbol' => 'ZWG',
            ],
            [
                'code' => self::ZWL,
                'name' => 'Zimbabwean Dollar',
                'symbol' => 'Z$',
            ],

        ];
    }
}
