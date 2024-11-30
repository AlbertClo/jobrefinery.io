<?php

namespace App\Models\SeedableEnums;

use App\Models\SeedableEnums\Contracts\SeedableEnum;
use App\Models\SeedableEnums\Traits\SeedableEnumTrait;

enum CurrencyEnum: string implements SeedableEnum
{
    use SeedableEnumTrait;

    case AED = 'AED';
    case AFN = 'AFN';
    case ALL = 'ALL';
    case AMD = 'AMD';
    case ANG = 'ANG';
    case AOA = 'AOA';
    case ARS = 'ARS';
    case AUD = 'AUD';
    case AWG = 'AWG';
    case AZN = 'AZN';
    case BAM = 'BAM';
    case BBD = 'BBD';
    case BDT = 'BDT';
    case BGN = 'BGN';
    case BHD = 'BHD';
    case BIF = 'BIF';
    case BMD = 'BMD';
    case BND = 'BND';
    case BOB = 'BOB';
    case BOV = 'BOV';
    case BRL = 'BRL';
    case BSD = 'BSD';
    case BTN = 'BTN';
    case BWP = 'BWP';
    case BYN = 'BYN';
    case BZD = 'BZD';
    case CAD = 'CAD';
    case CDF = 'CDF';
    case CHE = 'CHE';
    case CHF = 'CHF';
    case CHW = 'CHW';
    case CLF = 'CLF';
    case CLP = 'CLP';
    case CNY = 'CNY';
    case COP = 'COP';
    case COU = 'COU';
    case CRC = 'CRC';
    case CUP = 'CUP';
    case CVE = 'CVE';
    case CZK = 'CZK';
    case DJF = 'DJF';
    case DKK = 'DKK';
    case DOP = 'DOP';
    case DZD = 'DZD';
    case EGP = 'EGP';
    case ERN = 'ERN';
    case ETB = 'ETB';
    case EUR = 'EUR';
    case FJD = 'FJD';
    case FKP = 'FKP';
    case GBP = 'GBP';
    case GEL = 'GEL';
    case GHS = 'GHS';
    case GIP = 'GIP';
    case GMD = 'GMD';
    case GNF = 'GNF';
    case GTQ = 'GTQ';
    case GYD = 'GYD';
    case HKD = 'HKD';
    case HNL = 'HNL';
    case HTG = 'HTG';
    case HUF = 'HUF';
    case IDR = 'IDR';
    case ILS = 'ILS';
    case INR = 'INR';
    case IQD = 'IQD';
    case IRR = 'IRR';
    case ISK = 'ISK';
    case JMD = 'JMD';
    case JOD = 'JOD';
    case JPY = 'JPY';
    case KES = 'KES';
    case KGS = 'KGS';
    case KHR = 'KHR';
    case KMF = 'KMF';
    case KPW = 'KPW';
    case KRW = 'KRW';
    case KWD = 'KWD';
    case KYD = 'KYD';
    case KZT = 'KZT';
    case LAK = 'LAK';
    case LBP = 'LBP';
    case LKR = 'LKR';
    case LRD = 'LRD';
    case LSL = 'LSL';
    case LYD = 'LYD';
    case MAD = 'MAD';
    case MDL = 'MDL';
    case MGA = 'MGA';
    case MKD = 'MKD';
    case MMK = 'MMK';
    case MNT = 'MNT';
    case MOP = 'MOP';
    case MRU = 'MRU';
    case MUR = 'MUR';
    case MVR = 'MVR';
    case MWK = 'MWK';
    case MXN = 'MXN';
    case MXV = 'MXV';
    case MYR = 'MYR';
    case MZN = 'MZN';
    case NAD = 'NAD';
    case NGN = 'NGN';
    case NIO = 'NIO';
    case NOK = 'NOK';
    case NPR = 'NPR';
    case NZD = 'NZD';
    case OMR = 'OMR';
    case PAB = 'PAB';
    case PEN = 'PEN';
    case PGK = 'PGK';
    case PHP = 'PHP';
    case PKR = 'PKR';
    case PLN = 'PLN';
    case PYG = 'PYG';
    case QAR = 'QAR';
    case RON = 'RON';
    case RSD = 'RSD';
    case RUB = 'RUB';
    case RWF = 'RWF';
    case SAR = 'SAR';
    case SBD = 'SBD';
    case SCR = 'SCR';
    case SDG = 'SDG';
    case SEK = 'SEK';
    case SGD = 'SGD';
    case SHP = 'SHP';
    case SLE = 'SLE';
    case SOS = 'SOS';
    case SRD = 'SRD';
    case SSP = 'SSP';
    case STN = 'STN';
    case SVC = 'SVC';
    case SYP = 'SYP';
    case SZL = 'SZL';
    case THB = 'THB';
    case TJS = 'TJS';
    case TMT = 'TMT';
    case TND = 'TND';
    case TOP = 'TOP';
    case TRY = 'TRY';
    case TTD = 'TTD';
    case TWD = 'TWD';
    case TZS = 'TZS';
    case UAH = 'UAH';
    case UGX = 'UGX';
    case USD = 'USD';
    case USN = 'USN';
    case UYI = 'UYI';
    case UYU = 'UYU';
    case UYW = 'UYW';
    case UZS = 'UZS';
    case VED = 'VED';
    case VES = 'VES';
    case VND = 'VND';
    case VUV = 'VUV';
    case WST = 'WST';
    case XAF = 'XAF';
    case XAG = 'XAG';
    case XAU = 'XAU';
    case XBA = 'XBA';
    case XBB = 'XBB';
    case XBC = 'XBC';
    case XBD = 'XBD';
    case XCD = 'XCD';
    case XDR = 'XDR';
    case XOF = 'XOF';
    case XPD = 'XPD';
    case XPF = 'XPF';
    case XPT = 'XPT';
    case XSU = 'XSU';
    case XTS = 'XTS';
    case XUA = 'XUA';
    case YER = 'YER';
    case ZAR = 'ZAR';
    case ZMW = 'ZMW';
    case ZWG = 'ZWG';
    case ZWL = 'ZWL';

    public static function getModelClass(): string
    {
        return \App\Models\Currency::class;
    }

    public function getData(): array
    {
        return match ($this) {
            self::AED, => [
                'code' => $this->value,
                'name' => 'United Arab Emirates Dirham',
                'symbol' => 'د.إ',
            ],
            self::AFN, => [
                'code' => $this->value,
                'name' => 'Afghan Afghani',
                'symbol' => '؋',
            ],
            self::ALL, => [
                'code' => $this->value,
                'name' => 'Albanian Lek',
                'symbol' => 'L',
            ],
            self::AMD, => [
                'code' => $this->value,
                'name' => 'Armenian Dram',
                'symbol' => '֏',
            ],
            self::ANG, => [
                'code' => $this->value,
                'name' => 'Netherlands Antillean Guilder',
                'symbol' => 'ƒ',
            ],
            self::AOA, => [
                'code' => $this->value,
                'name' => 'Angolan Kwanza',
                'symbol' => 'Kz',
            ],
            self::ARS, => [
                'code' => $this->value,
                'name' => 'Argentine Peso',
                'symbol' => '$',
            ],
            self::AUD, => [
                'code' => $this->value,
                'name' => 'Australian Dollar',
                'symbol' => '$',
            ],
            self::AWG, => [
                'code' => $this->value,
                'name' => 'Aruban Florin',
                'symbol' => 'ƒ',
            ],
            self::AZN, => [
                'code' => $this->value,
                'name' => 'Azerbaijani Manat',
                'symbol' => '₼',
            ],
            self::BAM, => [
                'code' => $this->value,
                'name' => 'Bosnia-Herzegovina Convertible Mark',
                'symbol' => 'KM',
            ],
            self::BBD, => [
                'code' => $this->value,
                'name' => 'Barbadian Dollar',
                'symbol' => '$',
            ],
            self::BDT, => [
                'code' => $this->value,
                'name' => 'Bangladeshi Taka',
                'symbol' => '৳',
            ],
            self::BGN, => [
                'code' => $this->value,
                'name' => 'Bulgarian Lev',
                'symbol' => 'лв',
            ],
            self::BHD, => [
                'code' => $this->value,
                'name' => 'Bahraini Dinar',
                'symbol' => '.د.ب',
            ],
            self::BIF, => [
                'code' => $this->value,
                'name' => 'Burundian Franc',
                'symbol' => 'FBu',
            ],
            self::BMD, => [
                'code' => $this->value,
                'name' => 'Bermudan Dollar',
                'symbol' => '$',
            ],
            self::BND, => [
                'code' => $this->value,
                'name' => 'Brunei Dollar',
                'symbol' => '$',
            ],
            self::BOB, => [
                'code' => $this->value,
                'name' => 'Bolivian Boliviano',
                'symbol' => 'Bs.',
            ],
            self::BOV, => [
                'code' => $this->value,
                'name' => 'Bolivian Mvdol',
                'symbol' => 'BOV',
            ],
            self::BRL, => [
                'code' => $this->value,
                'name' => 'Brazilian Real',
                'symbol' => 'R$',
            ],
            self::BSD, => [
                'code' => $this->value,
                'name' => 'Bahamian Dollar',
                'symbol' => '$',
            ],
            self::BTN, => [
                'code' => $this->value,
                'name' => 'Bhutanese Ngultrum',
                'symbol' => 'Nu.',
            ],
            self::BWP, => [
                'code' => $this->value,
                'name' => 'Botswanan Pula',
                'symbol' => 'P',
            ],
            self::BYN, => [
                'code' => $this->value,
                'name' => 'Belarusian Ruble',
                'symbol' => 'Br',
            ],
            self::BZD, => [
                'code' => $this->value,
                'name' => 'Belize Dollar',
                'symbol' => 'BZ$',
            ],
            self::CAD, => [
                'code' => $this->value,
                'name' => 'Canadian Dollar',
                'symbol' => '$',
            ],
            self::CDF, => [
                'code' => $this->value,
                'name' => 'Congolese Franc',
                'symbol' => 'FC',
            ],
            self::CHE, => [
                'code' => $this->value,
                'name' => 'WIR Euro',
                'symbol' => 'CHE',
            ],
            self::CHF, => [
                'code' => $this->value,
                'name' => 'Swiss Franc',
                'symbol' => 'CHF',
            ],
            self::CHW, => [
                'code' => $this->value,
                'name' => 'WIR Franc',
                'symbol' => 'CHW',
            ],
            self::CLF, => [
                'code' => $this->value,
                'name' => 'Chilean Unit of Account (UF)',
                'symbol' => 'CLF',
            ],
            self::CLP, => [
                'code' => $this->value,
                'name' => 'Chilean Peso',
                'symbol' => '$',
            ],
            self::CNY, => [
                'code' => $this->value,
                'name' => 'Chinese Yuan',
                'symbol' => '¥',
            ],
            self::COP, => [
                'code' => $this->value,
                'name' => 'Colombian Peso',
                'symbol' => '$',
            ],
            self::COU, => [
                'code' => $this->value,
                'name' => 'Colombian Real Value Unit',
                'symbol' => 'COU',
            ],
            self::CRC, => [
                'code' => $this->value,
                'name' => 'Costa Rican Colón',
                'symbol' => '₡',
            ],
            self::CUP, => [
                'code' => $this->value,
                'name' => 'Cuban Peso',
                'symbol' => '₱',
            ],
            self::CVE, => [
                'code' => $this->value,
                'name' => 'Cape Verdean Escudo',
                'symbol' => '$',
            ],
            self::CZK, => [
                'code' => $this->value,
                'name' => 'Czech Republic Koruna',
                'symbol' => 'Kč',
            ],
            self::DJF, => [
                'code' => $this->value,
                'name' => 'Djiboutian Franc',
                'symbol' => 'Fdj',
            ],
            self::DKK, => [
                'code' => $this->value,
                'name' => 'Danish Krone',
                'symbol' => 'kr',
            ],
            self::DOP, => [
                'code' => $this->value,
                'name' => 'Dominican Peso',
                'symbol' => 'RD$',
            ],
            self::DZD, => [
                'code' => $this->value,
                'name' => 'Algerian Dinar',
                'symbol' => 'د.ج',
            ],
            self::EGP, => [
                'code' => $this->value,
                'name' => 'Egyptian Pound',
                'symbol' => '£',
            ],
            self::ERN, => [
                'code' => $this->value,
                'name' => 'Eritrean Nakfa',
                'symbol' => 'Nfk',
            ],
            self::ETB, => [
                'code' => $this->value,
                'name' => 'Ethiopian Birr',
                'symbol' => 'Br',
            ],
            self::EUR, => [
                'code' => $this->value,
                'name' => 'Euro',
                'symbol' => '€',
            ],
            self::FJD, => [
                'code' => $this->value,
                'name' => 'Fijian Dollar',
                'symbol' => '$',
            ],
            self::FKP, => [
                'code' => $this->value,
                'name' => 'Falkland Islands Pound',
                'symbol' => '£',
            ],
            self::GBP, => [
                'code' => $this->value,
                'name' => 'British Pound Sterling',
                'symbol' => '£',
            ],
            self::GEL, => [
                'code' => $this->value,
                'name' => 'Georgian Lari',
                'symbol' => '₾',
            ],
            self::GHS, => [
                'code' => $this->value,
                'name' => 'Ghanaian Cedi',
                'symbol' => '₵',
            ],
            self::GIP, => [
                'code' => $this->value,
                'name' => 'Gibraltar Pound',
                'symbol' => '£',
            ],
            self::GMD, => [
                'code' => $this->value,
                'name' => 'Gambian Dalasi',
                'symbol' => 'D',
            ],
            self::GNF, => [
                'code' => $this->value,
                'name' => 'Guinean Franc',
                'symbol' => 'FG',
            ],
            self::GTQ, => [
                'code' => $this->value,
                'name' => 'Guatemalan Quetzal',
                'symbol' => 'Q',
            ],
            self::GYD, => [
                'code' => $this->value,
                'name' => 'Guyanese Dollar',
                'symbol' => '$',
            ],
            self::HKD, => [
                'code' => $this->value,
                'name' => 'Hong Kong Dollar',
                'symbol' => '$',
            ],
            self::HNL, => [
                'code' => $this->value,
                'name' => 'Honduran Lempira',
                'symbol' => 'L',
            ],
            self::HTG, => [
                'code' => $this->value,
                'name' => 'Haitian Gourde',
                'symbol' => 'G',
            ],
            self::HUF, => [
                'code' => $this->value,
                'name' => 'Hungarian Forint',
                'symbol' => 'Ft',
            ],
            self::IDR, => [
                'code' => $this->value,
                'name' => 'Indonesian Rupiah',
                'symbol' => 'Rp',
            ],
            self::ILS, => [
                'code' => $this->value,
                'name' => 'Israeli New Sheqel',
                'symbol' => '₪',
            ],
            self::INR, => [
                'code' => $this->value,
                'name' => 'Indian Rupee',
                'symbol' => '₹',
            ],
            self::IQD, => [
                'code' => $this->value,
                'name' => 'Iraqi Dinar',
                'symbol' => 'ع.د',
            ],
            self::IRR, => [
                'code' => $this->value,
                'name' => 'Iranian Rial',
                'symbol' => '﷼',
            ],
            self::ISK, => [
                'code' => $this->value,
                'name' => 'Icelandic Króna',
                'symbol' => 'kr',
            ],
            self::JMD, => [
                'code' => $this->value,
                'name' => 'Jamaican Dollar',
                'symbol' => 'J$',
            ],
            self::JOD, => [
                'code' => $this->value,
                'name' => 'Jordanian Dinar',
                'symbol' => 'د.ا',
            ],
            self::JPY, => [
                'code' => $this->value,
                'name' => 'Japanese Yen',
                'symbol' => '¥',
            ],
            self::KES, => [
                'code' => $this->value,
                'name' => 'Kenyan Shilling',
                'symbol' => 'KSh',
            ],
            self::KGS, => [
                'code' => $this->value,
                'name' => 'Kyrgystani Som',
                'symbol' => 'лв',
            ],
            self::KHR, => [
                'code' => $this->value,
                'name' => 'Cambodian Riel',
                'symbol' => '៛',
            ],
            self::KMF, => [
                'code' => $this->value,
                'name' => 'Comorian Franc',
                'symbol' => 'CF',
            ],
            self::KPW, => [
                'code' => $this->value,
                'name' => 'North Korean Won',
                'symbol' => '₩',
            ],
            self::KRW, => [
                'code' => $this->value,
                'name' => 'South Korean Won',
                'symbol' => '₩',
            ],
            self::KWD, => [
                'code' => $this->value,
                'name' => 'Kuwaiti Dinar',
                'symbol' => 'د.ك',
            ],
            self::KYD, => [
                'code' => $this->value,
                'name' => 'Cayman Islands Dollar',
                'symbol' => '$',
            ],
            self::KZT, => [
                'code' => $this->value,
                'name' => 'Kazakhstani Tenge',
                'symbol' => '₸',
            ],
            self::LAK, => [
                'code' => $this->value,
                'name' => 'Laotian Kip',
                'symbol' => '₭',
            ],
            self::LBP, => [
                'code' => $this->value,
                'name' => 'Lebanese Pound',
                'symbol' => 'ل.ل',
            ],
            self::LKR, => [
                'code' => $this->value,
                'name' => 'Sri Lankan Rupee',
                'symbol' => '₨',
            ],
            self::LRD, => [
                'code' => $this->value,
                'name' => 'Liberian Dollar',
                'symbol' => '$',
            ],
            self::LSL, => [
                'code' => $this->value,
                'name' => 'Lesotho Loti',
                'symbol' => 'L',
            ],
            self::LYD, => [
                'code' => $this->value,
                'name' => 'Libyan Dinar',
                'symbol' => 'ل.د',
            ],
            self::MAD, => [
                'code' => $this->value,
                'name' => 'Moroccan Dirham',
                'symbol' => 'د.م.',
            ],
            self::MDL, => [
                'code' => $this->value,
                'name' => 'Moldovan Leu',
                'symbol' => 'L',
            ],
            self::MGA, => [
                'code' => $this->value,
                'name' => 'Malagasy Ariary',
                'symbol' => 'Ar',
            ],
            self::MKD, => [
                'code' => $this->value,
                'name' => 'Macedonian Denar',
                'symbol' => 'ден',
            ],
            self::MMK, => [
                'code' => $this->value,
                'name' => 'Myanma Kyat',
                'symbol' => 'K',
            ],
            self::MNT, => [
                'code' => $this->value,
                'name' => 'Mongolian Tugrik',
                'symbol' => '₮',
            ],
            self::MOP, => [
                'code' => $this->value,
                'name' => 'Macanese Pataca',
                'symbol' => 'P',
            ],
            self::MRU, => [
                'code' => $this->value,
                'name' => 'Mauritanian Ouguiya',
                'symbol' => 'UM',
            ],
            self::MUR, => [
                'code' => $this->value,
                'name' => 'Mauritian Rupee',
                'symbol' => '₨',
            ],
            self::MVR, => [
                'code' => $this->value,
                'name' => 'Maldivian Rufiyaa',
                'symbol' => '.ރ',
            ],
            self::MWK, => [
                'code' => $this->value,
                'name' => 'Malawian Kwacha',
                'symbol' => 'MK',
            ],
            self::MXN, => [
                'code' => $this->value,
                'name' => 'Mexican Peso',
                'symbol' => '$',
            ],
            self::MXV, => [
                'code' => $this->value,
                'name' => 'Mexican Investment Unit',
                'symbol' => 'MXV',
            ],
            self::MYR, => [
                'code' => $this->value,
                'name' => 'Malaysian Ringgit',
                'symbol' => 'RM',
            ],
            self::MZN, => [
                'code' => $this->value,
                'name' => 'Mozambican Metical',
                'symbol' => 'MT',
            ],
            self::NAD, => [
                'code' => $this->value,
                'name' => 'Namibian Dollar',
                'symbol' => '$',
            ],
            self::NGN, => [
                'code' => $this->value,
                'name' => 'Nigerian Naira',
                'symbol' => '₦',
            ],
            self::NIO, => [
                'code' => $this->value,
                'name' => 'Nicaraguan Córdoba',
                'symbol' => 'C$',
            ],
            self::NOK, => [
                'code' => $this->value,
                'name' => 'Norwegian Krone',
                'symbol' => 'kr',
            ],
            self::NPR, => [
                'code' => $this->value,
                'name' => 'Nepalese Rupee',
                'symbol' => '₨',
            ],
            self::NZD, => [
                'code' => $this->value,
                'name' => 'New Zealand Dollar',
                'symbol' => '$',
            ],
            self::OMR, => [
                'code' => $this->value,
                'name' => 'Omani Rial',
                'symbol' => '﷼',
            ],
            self::PAB, => [
                'code' => $this->value,
                'name' => 'Panamanian Balboa',
                'symbol' => 'B/.',
            ],
            self::PEN, => [
                'code' => $this->value,
                'name' => 'Peruvian Nuevo Sol',
                'symbol' => 'S/.',
            ],
            self::PGK, => [
                'code' => $this->value,
                'name' => 'Papua New Guinean Kina',
                'symbol' => 'K',
            ],
            self::PHP, => [
                'code' => $this->value,
                'name' => 'Philippine Peso',
                'symbol' => '₱',
            ],
            self::PKR, => [
                'code' => $this->value,
                'name' => 'Pakistani Rupee',
                'symbol' => '₨',
            ],
            self::PLN, => [
                'code' => $this->value,
                'name' => 'Polish Zloty',
                'symbol' => 'zł',
            ],
            self::PYG, => [
                'code' => $this->value,
                'name' => 'Paraguayan Guarani',
                'symbol' => '₲',
            ],
            self::QAR, => [
                'code' => $this->value,
                'name' => 'Qatari Rial',
                'symbol' => '﷼',
            ],
            self::RON, => [
                'code' => $this->value,
                'name' => 'Romanian Leu',
                'symbol' => 'lei',
            ],
            self::RSD, => [
                'code' => $this->value,
                'name' => 'Serbian Dinar',
                'symbol' => 'Дин.',
            ],
            self::RUB, => [
                'code' => $this->value,
                'name' => 'Russian Ruble',
                'symbol' => '₽',
            ],
            self::RWF, => [
                'code' => $this->value,
                'name' => 'Rwandan Franc',
                'symbol' => 'FRw',
            ],
            self::SAR, => [
                'code' => $this->value,
                'name' => 'Saudi Riyal',
                'symbol' => '﷼',
            ],
            self::SBD, => [
                'code' => $this->value,
                'name' => 'Solomon Islands Dollar',
                'symbol' => '$',
            ],
            self::SCR, => [
                'code' => $this->value,
                'name' => 'Seychellois Rupee',
                'symbol' => '₨',
            ],
            self::SDG, => [
                'code' => $this->value,
                'name' => 'Sudanese Pound',
                'symbol' => 'ج.س.',
            ],
            self::SEK, => [
                'code' => $this->value,
                'name' => 'Swedish Krona',
                'symbol' => 'kr',
            ],
            self::SGD, => [
                'code' => $this->value,
                'name' => 'Singapore Dollar',
                'symbol' => '$',
            ],
            self::SHP, => [
                'code' => $this->value,
                'name' => 'Saint Helena Pound',
                'symbol' => '£',
            ],
            self::SLE, => [
                'code' => $this->value,
                'name' => 'Sierra Leonean Leone',
                'symbol' => 'Le',
            ],
            self::SOS, => [
                'code' => $this->value,
                'name' => 'Somali Shilling',
                'symbol' => 'S',
            ],
            self::SRD, => [
                'code' => $this->value,
                'name' => 'Surinamese Dollar',
                'symbol' => '$',
            ],
            self::SSP, => [
                'code' => $this->value,
                'name' => 'South Sudanese Pound',
                'symbol' => '£',
            ],
            self::STN, => [
                'code' => $this->value,
                'name' => 'São Tomé and Príncipe Dobra',
                'symbol' => 'Db',
            ],
            self::SVC, => [
                'code' => $this->value,
                'name' => 'Salvadoran Colón',
                'symbol' => '$',
            ],
            self::SYP, => [
                'code' => $this->value,
                'name' => 'Syrian Pound',
                'symbol' => '£',
            ],
            self::SZL, => [
                'code' => $this->value,
                'name' => 'Swazi Lilangeni',
                'symbol' => 'L',
            ],
            self::THB, => [
                'code' => $this->value,
                'name' => 'Thai Baht',
                'symbol' => '฿',
            ],
            self::TJS, => [
                'code' => $this->value,
                'name' => 'Tajikistani Somoni',
                'symbol' => 'SM',
            ],
            self::TMT, => [
                'code' => $this->value,
                'name' => 'Turkmenistani Manat',
                'symbol' => 'T',
            ],
            self::TND, => [
                'code' => $this->value,
                'name' => 'Tunisian Dinar',
                'symbol' => 'د.ت',
            ],
            self::TOP, => [
                'code' => $this->value,
                'name' => 'Tongan Paʻanga',
                'symbol' => 'T$',
            ],
            self::TRY, => [
                'code' => $this->value,
                'name' => 'Turkish Lira',
                'symbol' => '₺',
            ],
            self::TTD, => [
                'code' => $this->value,
                'name' => 'Trinidad and Tobago Dollar',
                'symbol' => 'TT$',
            ],
            self::TWD, => [
                'code' => $this->value,
                'name' => 'New Taiwan Dollar',
                'symbol' => 'NT$',
            ],
            self::TZS, => [
                'code' => $this->value,
                'name' => 'Tanzanian Shilling',
                'symbol' => 'TSh',
            ],
            self::UAH, => [
                'code' => $this->value,
                'name' => 'Ukrainian Hryvnia',
                'symbol' => '₴',
            ],
            self::UGX, => [
                'code' => $this->value,
                'name' => 'Ugandan Shilling',
                'symbol' => 'USh',
            ],
            self::USD, => [
                'code' => $this->value,
                'name' => 'United States Dollar',
                'symbol' => '$',
            ],
            self::USN, => [
                'code' => $this->value,
                'name' => 'United States Dollar (Next day)',
                'symbol' => 'USN',
            ],
            self::UYI, => [
                'code' => $this->value,
                'name' => 'Uruguay Peso en Unidades Indexadas (URUIURUI)',
                'symbol' => 'UYI',
            ],
            self::UYU, => [
                'code' => $this->value,
                'name' => 'Uruguayan Peso',
                'symbol' => '$U',
            ],
            self::UYW, => [
                'code' => $this->value,
                'name' => 'Unidad Previsional',
                'symbol' => 'UP',
            ],
            self::UZS, => [
                'code' => $this->value,
                'name' => 'Uzbekistan Som',
                'symbol' => 'лв',
            ],
            self::VED, => [
                'code' => $this->value,
                'name' => 'Venezuelan Digital Bolívar',
                'symbol' => 'VED',
            ],
            self::VES, => [
                'code' => $this->value,
                'name' => 'Venezuelan Sober',
                'symbol' => 'Bs.',
            ],
            self::VND, => [
                'code' => $this->value,
                'name' => 'Vietnamese Dong',
                'symbol' => '₫',
            ],
            self::VUV, => [
                'code' => $this->value,
                'name' => 'Vanuatu Vatu',
                'symbol' => 'VT',
            ],
            self::WST, => [
                'code' => $this->value,
                'name' => 'Samoan Tala',
                'symbol' => 'WS$',
            ],
            self::XAF, => [
                'code' => $this->value,
                'name' => 'CFA Franc BEAC',
                'symbol' => 'FCFA',
            ],
            self::XAG, => [
                'code' => $this->value,
                'name' => 'Silver (troy ounce)',
                'symbol' => 'XAG',
            ],
            self::XAU, => [
                'code' => $this->value,
                'name' => 'Gold (troy ounce)',
                'symbol' => 'XAU',
            ],
            self::XBA, => [
                'code' => $this->value,
                'name' => 'European Composite Unit (EURCO)',
                'symbol' => 'XBA',
            ],
            self::XBB, => [
                'code' => $this->value,
                'name' => 'European Monetary Unit (E.M.U.-6)',
                'symbol' => 'XBB',
            ],
            self::XBC, => [
                'code' => $this->value,
                'name' => 'European Unit of Account 9 (E.U.A.-9)',
                'symbol' => 'XBC',
            ],
            self::XBD, => [
                'code' => $this->value,
                'name' => 'European Unit of Account 17 (E.U.A.-17)',
                'symbol' => 'XBD',
            ],
            self::XCD, => [
                'code' => $this->value,
                'name' => 'East Caribbean Dollar',
                'symbol' => '$',
            ],
            self::XDR, => [
                'code' => $this->value,
                'name' => 'Special Drawing Rights',
                'symbol' => 'XDR',
            ],
            self::XOF, => [
                'code' => $this->value,
                'name' => 'CFA Franc BCEAO',
                'symbol' => 'CFA',
            ],
            self::XPD, => [
                'code' => $this->value,
                'name' => 'Palladium (troy ounce)',
                'symbol' => 'XPD',
            ],
            self::XPF, => [
                'code' => $this->value,
                'name' => 'CFP Franc',
                'symbol' => '₣',
            ],
            self::XPT, => [
                'code' => $this->value,
                'name' => 'Platinum (troy ounce)',
                'symbol' => 'XPT',
            ],
            self::XSU, => [
                'code' => $this->value,
                'name' => 'SUCRE',
                'symbol' => 'XSU',
            ],
            self::XTS, => [
                'code' => $this->value,
                'name' => 'Test Currency Code',
                'symbol' => 'XTS',
            ],
            self::XUA, => [
                'code' => $this->value,
                'name' => 'ADB Unit of Account',
                'symbol' => 'XUA',
            ],
            self::YER, => [
                'code' => $this->value,
                'name' => 'Yemeni Rial',
                'symbol' => '﷼',
            ],
            self::ZAR, => [
                'code' => $this->value,
                'name' => 'South African Rand',
                'symbol' => 'R',
            ],
            self::ZMW, => [
                'code' => $this->value,
                'name' => 'Zambian Kwacha',
                'symbol' => 'ZK',
            ],
            self::ZWG, => [
                'code' => $this->value,
                'name' => 'Zimbabwe Dollar',
                'symbol' => 'ZWG',
            ],
            self::ZWL, => [
                'code' => $this->value,
                'name' => 'Zimbabwean Dollar',
                'symbol' => 'Z$',
            ],
        };
    }
}
