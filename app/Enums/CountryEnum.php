<?php

namespace App\Enums;

use App\Enums\Contracts\SeedableEnum;
use App\Enums\Traits\SeedableEnumTrait;

enum CountryEnum: string implements SeedableEnum
{
    use SeedableEnumTrait;

    case AFG = 'AFG';
    case ALA = 'ALA';
    case ALB = 'ALB';
    case DZA = 'DZA';
    case ASM = 'ASM';
    case AND = 'AND';
    case AGO = 'AGO';
    case AIA = 'AIA';
    case ATA = 'ATA';
    case ATG = 'ATG';
    case ARG = 'ARG';
    case ARM = 'ARM';
    case ABW = 'ABW';
    case AUS = 'AUS';
    case AUT = 'AUT';
    case AZE = 'AZE';
    case BHS = 'BHS';
    case BHR = 'BHR';
    case BGD = 'BGD';
    case BRB = 'BRB';
    case BLR = 'BLR';
    case BEL = 'BEL';
    case BLZ = 'BLZ';
    case BEN = 'BEN';
    case BMU = 'BMU';
    case BTN = 'BTN';
    case BOL = 'BOL';
    case BES = 'BES';
    case BIH = 'BIH';
    case BWA = 'BWA';
    case BVT = 'BVT';
    case BRA = 'BRA';
    case IOT = 'IOT';
    case BRN = 'BRN';
    case BGR = 'BGR';
    case BFA = 'BFA';
    case BDI = 'BDI';
    case CPV = 'CPV';
    case KHM = 'KHM';
    case CMR = 'CMR';
    case CAN = 'CAN';
    case CYM = 'CYM';
    case CAF = 'CAF';
    case TCD = 'TCD';
    case CHL = 'CHL';
    case CHN = 'CHN';
    case CXR = 'CXR';
    case CCK = 'CCK';
    case COL = 'COL';
    case COM = 'COM';
    case COD = 'COD';
    case COG = 'COG';
    case COK = 'COK';
    case CRI = 'CRI';
    case CIV = 'CIV';
    case HRV = 'HRV';
    case CUB = 'CUB';
    case CUW = 'CUW';
    case CYP = 'CYP';
    case CZE = 'CZE';
    case DNK = 'DNK';
    case DJI = 'DJI';
    case DMA = 'DMA';
    case DOM = 'DOM';
    case ECU = 'ECU';
    case EGY = 'EGY';
    case SLV = 'SLV';
    case GNQ = 'GNQ';
    case ERI = 'ERI';
    case EST = 'EST';
    case SWZ = 'SWZ';
    case ETH = 'ETH';
    case FLK = 'FLK';
    case FRO = 'FRO';
    case FJI = 'FJI';
    case FIN = 'FIN';
    case FRA = 'FRA';
    case GUF = 'GUF';
    case PYF = 'PYF';
    case ATF = 'ATF';
    case GAB = 'GAB';
    case GMB = 'GMB';
    case GEO = 'GEO';
    case DEU = 'DEU';
    case GHA = 'GHA';
    case GIB = 'GIB';
    case GRC = 'GRC';
    case GRL = 'GRL';
    case GRD = 'GRD';
    case GLP = 'GLP';
    case GUM = 'GUM';
    case GTM = 'GTM';
    case GGY = 'GGY';
    case GIN = 'GIN';
    case GNB = 'GNB';
    case GUY = 'GUY';
    case HTI = 'HTI';
    case HMD = 'HMD';
    case VAT = 'VAT';
    case HND = 'HND';
    case HKG = 'HKG';
    case HUN = 'HUN';
    case ISL = 'ISL';
    case IND = 'IND';
    case IDN = 'IDN';
    case IRN = 'IRN';
    case IRQ = 'IRQ';
    case IRL = 'IRL';
    case IMN = 'IMN';
    case ISR = 'ISR';
    case ITA = 'ITA';
    case JAM = 'JAM';
    case JPN = 'JPN';
    case JEY = 'JEY';
    case JOR = 'JOR';
    case KAZ = 'KAZ';
    case KEN = 'KEN';
    case KIR = 'KIR';
    case PRK = 'PRK';
    case KOR = 'KOR';
    case KWT = 'KWT';
    case KGZ = 'KGZ';
    case LAO = 'LAO';
    case LVA = 'LVA';
    case LBN = 'LBN';
    case LSO = 'LSO';
    case LBR = 'LBR';
    case LBY = 'LBY';
    case LIE = 'LIE';
    case LTU = 'LTU';
    case LUX = 'LUX';
    case MAC = 'MAC';
    case MDG = 'MDG';
    case MWI = 'MWI';
    case MYS = 'MYS';
    case MDV = 'MDV';
    case MLI = 'MLI';
    case MLT = 'MLT';
    case MHL = 'MHL';
    case MTQ = 'MTQ';
    case MRT = 'MRT';
    case MUS = 'MUS';
    case MYT = 'MYT';
    case MEX = 'MEX';
    case FSM = 'FSM';
    case MDA = 'MDA';
    case MCO = 'MCO';
    case MNG = 'MNG';
    case MNE = 'MNE';
    case MSR = 'MSR';
    case MAR = 'MAR';
    case MOZ = 'MOZ';
    case MMR = 'MMR';
    case NAM = 'NAM';
    case NRU = 'NRU';
    case NPL = 'NPL';
    case NLD = 'NLD';
    case NCL = 'NCL';
    case NZL = 'NZL';
    case NIC = 'NIC';
    case NER = 'NER';
    case NGA = 'NGA';
    case NIU = 'NIU';
    case NFK = 'NFK';
    case MKD = 'MKD';
    case MNP = 'MNP';
    case NOR = 'NOR';
    case OMN = 'OMN';
    case PAK = 'PAK';
    case PLW = 'PLW';
    case PSE = 'PSE';
    case PAN = 'PAN';
    case PNG = 'PNG';
    case PRY = 'PRY';
    case PER = 'PER';
    case PHL = 'PHL';
    case PCN = 'PCN';
    case POL = 'POL';
    case PRT = 'PRT';
    case PRI = 'PRI';
    case QAT = 'QAT';
    case REU = 'REU';
    case ROU = 'ROU';
    case RUS = 'RUS';
    case RWA = 'RWA';
    case BLM = 'BLM';
    case SHN = 'SHN';
    case KNA = 'KNA';
    case LCA = 'LCA';
    case MAF = 'MAF';
    case SPM = 'SPM';
    case VCT = 'VCT';
    case WSM = 'WSM';
    case SMR = 'SMR';
    case STP = 'STP';
    case SAU = 'SAU';
    case SEN = 'SEN';
    case SRB = 'SRB';
    case SYC = 'SYC';
    case SLE = 'SLE';
    case SGP = 'SGP';
    case SXM = 'SXM';
    case SVK = 'SVK';
    case SVN = 'SVN';
    case SLB = 'SLB';
    case SOM = 'SOM';
    case ZAF = 'ZAF';
    case SGS = 'SGS';
    case SSD = 'SSD';
    case ESP = 'ESP';
    case LKA = 'LKA';
    case SDN = 'SDN';
    case SUR = 'SUR';
    case SJM = 'SJM';
    case SWE = 'SWE';
    case CHE = 'CHE';
    case SYR = 'SYR';
    case TWN = 'TWN';
    case TJK = 'TJK';
    case TZA = 'TZA';
    case THA = 'THA';
    case TLS = 'TLS';
    case TGO = 'TGO';
    case TKL = 'TKL';
    case TON = 'TON';
    case TTO = 'TTO';
    case TUN = 'TUN';
    case TUR = 'TUR';
    case TKM = 'TKM';
    case TCA = 'TCA';
    case TUV = 'TUV';
    case UGA = 'UGA';
    case UKR = 'UKR';
    case ARE = 'ARE';
    case GBR = 'GBR';
    case UMI = 'UMI';
    case USA = 'USA';
    case URY = 'URY';
    case UZB = 'UZB';
    case VUT = 'VUT';
    case VEN = 'VEN';
    case VNM = 'VNM';
    case VGB = 'VGB';
    case VIR = 'VIR';
    case WLF = 'WLF';
    case ESH = 'ESH';
    case YEM = 'YEM';
    case ZMB = 'ZMB';
    case ZWE = 'ZWE';

    public static function getModelClass(): string
    {
        return \App\Models\Country::class;
    }

    public function getData(): array
    {
        return match ($this) {

            self::AFG, => [
                'code' => $this->value,
                'name' => 'Afghanistan',
                'currency_code' => CurrencyEnum::AFN->value,
            ],
            self::ALA, => [
                'code' => $this->value,
                'name' => 'Åland Islands',
                'currency_code' => CurrencyEnum::EUR->value,
            ],
            self::ALB, => [
                'code' => $this->value,
                'name' => 'Albania',
                'currency_code' => CurrencyEnum::ALL->value,
            ],
            self::DZA, => [
                'code' => $this->value,
                'name' => 'Algeria',
                'currency_code' => CurrencyEnum::DZD->value,
            ],
            self::ASM, => [
                'code' => $this->value,
                'name' => 'American Samoa',
                'currency_code' => CurrencyEnum::USD->value,
            ],
            self::AND, => [
                'code' => $this->value,
                'name' => 'Andorra',
                'currency_code' => CurrencyEnum::EUR->value,
            ],
            self::AGO, => [
                'code' => $this->value,
                'name' => 'Angola',
                'currency_code' => CurrencyEnum::AOA->value,
            ],
            self::AIA, => [
                'code' => $this->value,
                'name' => 'Anguilla',
                'currency_code' => CurrencyEnum::XCD->value,
            ],
            self::ATA, => [
                'code' => $this->value,
                'name' => 'Antarctica',
                'currency_code' => null,
            ],
            self::ATG, => [
                'code' => $this->value,
                'name' => 'Antigua and Barbuda',
                'currency_code' => CurrencyEnum::XCD->value,
            ],
            self::ARG, => [
                'code' => $this->value,
                'name' => 'Argentina',
                'currency_code' => CurrencyEnum::ARS->value,
            ],
            self::ARM, => [
                'code' => $this->value,
                'name' => 'Armenia',
                'currency_code' => CurrencyEnum::AMD->value,
            ],
            self::ABW, => [
                'code' => $this->value,
                'name' => 'Aruba',
                'currency_code' => CurrencyEnum::AWG->value,
            ],
            self::AUS, => [
                'code' => $this->value,
                'name' => 'Australia',
                'currency_code' => CurrencyEnum::AUD->value,
            ],
            self::AUT, => [
                'code' => $this->value,
                'name' => 'Austria',
                'currency_code' => CurrencyEnum::EUR->value,
            ],
            self::AZE, => [
                'code' => $this->value,
                'name' => 'Azerbaijan',
                'currency_code' => CurrencyEnum::AZN->value,
            ],
            self::BHS, => [
                'code' => $this->value,
                'name' => 'Bahamas',
                'currency_code' => CurrencyEnum::BSD->value,
            ],
            self::BHR, => [
                'code' => $this->value,
                'name' => 'Bahrain',
                'currency_code' => CurrencyEnum::BHD->value,
            ],
            self::BGD, => [
                'code' => $this->value,
                'name' => 'Bangladesh',
                'currency_code' => CurrencyEnum::BDT->value,
            ],
            self::BRB, => [
                'code' => $this->value,
                'name' => 'Barbados',
                'currency_code' => CurrencyEnum::BBD->value,
            ],
            self::BLR, => [
                'code' => $this->value,
                'name' => 'Belarus',
                'currency_code' => CurrencyEnum::BYN->value,
            ],
            self::BEL, => [
                'code' => $this->value,
                'name' => 'Belgium',
                'currency_code' => CurrencyEnum::EUR->value,
            ],
            self::BLZ, => [
                'code' => $this->value,
                'name' => 'Belize',
                'currency_code' => CurrencyEnum::BZD->value,
            ],
            self::BEN, => [
                'code' => $this->value,
                'name' => 'Benin',
                'currency_code' => CurrencyEnum::XOF->value,
            ],
            self::BMU, => [
                'code' => $this->value,
                'name' => 'Bermuda',
                'currency_code' => CurrencyEnum::BMD->value,
            ],
            self::BTN, => [
                'code' => $this->value,
                'name' => 'Bhutan',
                'currency_code' => CurrencyEnum::BTN->value,
            ],
            self::BOL, => [
                'code' => $this->value,
                'name' => 'Bolivia',
                'currency_code' => CurrencyEnum::BOB->value,
            ],
            self::BES, => [
                'code' => $this->value,
                'name' => 'Bonaire, Sint Eustatius and Saba',
                'currency_code' => CurrencyEnum::USD->value,
            ],
            self::BIH, => [
                'code' => $this->value,
                'name' => 'Bosnia and Herzegovina',
                'currency_code' => CurrencyEnum::BAM->value,
            ],
            self::BWA, => [
                'code' => $this->value,
                'name' => 'Botswana',
                'currency_code' => CurrencyEnum::BWP->value,
            ],
            self::BVT, => [
                'code' => $this->value,
                'name' => 'Bouvet Island',
                'currency_code' => CurrencyEnum::NOK->value,
            ],
            self::BRA, => [
                'code' => $this->value,
                'name' => 'Brazil',
                'currency_code' => CurrencyEnum::BRL->value,
            ],
            self::IOT, => [
                'code' => $this->value,
                'name' => 'British Indian Ocean Territory',
                'currency_code' => CurrencyEnum::USD->value,
            ],
            self::BRN, => [
                'code' => $this->value,
                'name' => 'Brunei Darussalam',
                'currency_code' => CurrencyEnum::BND->value,
            ],
            self::BGR, => [
                'code' => $this->value,
                'name' => 'Bulgaria',
                'currency_code' => CurrencyEnum::BGN->value,
            ],
            self::BFA, => [
                'code' => $this->value,
                'name' => 'Burkina Faso',
                'currency_code' => CurrencyEnum::XOF->value,
            ],
            self::BDI, => [
                'code' => $this->value,
                'name' => 'Burundi',
                'currency_code' => CurrencyEnum::BIF->value,
            ],
            self::CPV, => [
                'code' => $this->value,
                'name' => 'Cabo Verde',
                'currency_code' => CurrencyEnum::CVE->value,
            ],
            self::KHM, => [
                'code' => $this->value,
                'name' => 'Cambodia',
                'currency_code' => CurrencyEnum::KHR->value,
            ],
            self::CMR, => [
                'code' => $this->value,
                'name' => 'Cameroon',
                'currency_code' => CurrencyEnum::XAF->value,
            ],
            self::CAN, => [
                'code' => $this->value,
                'name' => 'Canada',
                'currency_code' => CurrencyEnum::CAD->value,
            ],
            self::CYM, => [
                'code' => $this->value,
                'name' => 'Cayman Islands',
                'currency_code' => CurrencyEnum::KYD->value,
            ],
            self::CAF, => [
                'code' => $this->value,
                'name' => 'Central African Republic',
                'currency_code' => CurrencyEnum::XAF->value,
            ],
            self::TCD, => [
                'code' => $this->value,
                'name' => 'Chad',
                'currency_code' => CurrencyEnum::XAF->value,
            ],
            self::CHL, => [
                'code' => $this->value,
                'name' => 'Chile',
                'currency_code' => CurrencyEnum::CLP->value,
            ],
            self::CHN, => [
                'code' => $this->value,
                'name' => 'China',
                'currency_code' => CurrencyEnum::CNY->value,
            ],
            self::CXR, => [
                'code' => $this->value,
                'name' => 'Christmas Island',
                'currency_code' => CurrencyEnum::AUD->value,
            ],
            self::CCK, => [
                'code' => $this->value,
                'name' => 'Cocos (Keeling) Islands',
                'currency_code' => CurrencyEnum::AUD->value,
            ],
            self::COL, => [
                'code' => $this->value,
                'name' => 'Colombia',
                'currency_code' => CurrencyEnum::COP->value,
            ],
            self::COM, => [
                'code' => $this->value,
                'name' => 'Comoros',
                'currency_code' => CurrencyEnum::KMF->value,
            ],
            self::COD, => [
                'code' => $this->value,
                'name' => 'Congo, Democratic Republic of the',
                'currency_code' => CurrencyEnum::CDF->value,
            ],
            self::COG, => [
                'code' => $this->value,
                'name' => 'Congo',
                'currency_code' => CurrencyEnum::XAF->value,
            ],
            self::COK, => [
                'code' => $this->value,
                'name' => 'Cook Islands',
                'currency_code' => CurrencyEnum::NZD->value,
            ],
            self::CRI, => [
                'code' => $this->value,
                'name' => 'Costa Rica',
                'currency_code' => CurrencyEnum::CRC->value,
            ],
            self::CIV, => [
                'code' => $this->value,
                'name' => 'Côte d\'Ivoire',
                'currency_code' => CurrencyEnum::XOF->value,
            ],
            self::HRV, => [
                'code' => $this->value,
                'name' => 'Croatia',
                'currency_code' => CurrencyEnum::EUR->value,
            ],
            self::CUB, => [
                'code' => $this->value,
                'name' => 'Cuba',
                'currency_code' => CurrencyEnum::CUP->value,
            ],
            self::CUW, => [
                'code' => $this->value,
                'name' => 'Curaçao',
                'currency_code' => CurrencyEnum::ANG->value,
            ],
            self::CYP, => [
                'code' => $this->value,
                'name' => 'Cyprus',
                'currency_code' => CurrencyEnum::EUR->value,
            ],
            self::CZE, => [
                'code' => $this->value,
                'name' => 'Czech Republic',
                'currency_code' => CurrencyEnum::CZK->value,
            ],
            self::DNK, => [
                'code' => $this->value,
                'name' => 'Denmark',
                'currency_code' => CurrencyEnum::DKK->value,
            ],
            self::DJI, => [
                'code' => $this->value,
                'name' => 'Djibouti',
                'currency_code' => CurrencyEnum::DJF->value,
            ],
            self::DMA, => [
                'code' => $this->value,
                'name' => 'Dominica',
                'currency_code' => CurrencyEnum::XCD->value,
            ],
            self::DOM, => [
                'code' => $this->value,
                'name' => 'Dominican Republic',
                'currency_code' => CurrencyEnum::DOP->value,
            ],
            self::ECU, => [
                'code' => $this->value,
                'name' => 'Ecuador',
                'currency_code' => CurrencyEnum::USD->value,
            ],
            self::EGY, => [
                'code' => $this->value,
                'name' => 'Egypt',
                'currency_code' => CurrencyEnum::EGP->value,
            ],
            self::SLV, => [
                'code' => $this->value,
                'name' => 'El Salvador',
                'currency_code' => CurrencyEnum::USD->value,
            ],
            self::GNQ, => [
                'code' => $this->value,
                'name' => 'Equatorial Guinea',
                'currency_code' => CurrencyEnum::XAF->value,
            ],
            self::ERI, => [
                'code' => $this->value,
                'name' => 'Eritrea',
                'currency_code' => CurrencyEnum::ERN->value,
            ],
            self::EST, => [
                'code' => $this->value,
                'name' => 'Estonia',
                'currency_code' => CurrencyEnum::EUR->value,
            ],
            self::SWZ, => [
                'code' => $this->value,
                'name' => 'Eswatini',
                'currency_code' => CurrencyEnum::SZL->value,
            ],
            self::ETH, => [
                'code' => $this->value,
                'name' => 'Ethiopia',
                'currency_code' => CurrencyEnum::ETB->value,
            ],
            self::FLK, => [
                'code' => $this->value,
                'name' => 'Falkland Islands (Malvinas)',
                'currency_code' => CurrencyEnum::FKP->value,
            ],
            self::FRO, => [
                'code' => $this->value,
                'name' => 'Faroe Islands',
                'currency_code' => CurrencyEnum::DKK->value,
            ],
            self::FJI, => [
                'code' => $this->value,
                'name' => 'Fiji',
                'currency_code' => CurrencyEnum::FJD->value,
            ],
            self::FIN, => [
                'code' => $this->value,
                'name' => 'Finland',
                'currency_code' => CurrencyEnum::EUR->value,
            ],
            self::FRA, => [
                'code' => $this->value,
                'name' => 'France',
                'currency_code' => CurrencyEnum::EUR->value,
            ],
            self::GUF, => [
                'code' => $this->value,
                'name' => 'French Guiana',
                'currency_code' => CurrencyEnum::EUR->value,
            ],
            self::PYF, => [
                'code' => $this->value,
                'name' => 'French Polynesia',
                'currency_code' => CurrencyEnum::XPF->value,
            ],
            self::ATF, => [
                'code' => $this->value,
                'name' => 'French Southern Territories',
                'currency_code' => CurrencyEnum::EUR->value,
            ],
            self::GAB, => [
                'code' => $this->value,
                'name' => 'Gabon',
                'currency_code' => CurrencyEnum::XAF->value,
            ],
            self::GMB, => [
                'code' => $this->value,
                'name' => 'Gambia',
                'currency_code' => CurrencyEnum::GMD->value,
            ],
            self::GEO, => [
                'code' => $this->value,
                'name' => 'Georgia',
                'currency_code' => CurrencyEnum::GEL->value,
            ],
            self::DEU, => [
                'code' => $this->value,
                'name' => 'Germany',
                'currency_code' => CurrencyEnum::EUR->value,
            ],
            self::GHA, => [
                'code' => $this->value,
                'name' => 'Ghana',
                'currency_code' => CurrencyEnum::GHS->value,
            ],
            self::GIB, => [
                'code' => $this->value,
                'name' => 'Gibraltar',
                'currency_code' => CurrencyEnum::GIP->value,
            ],
            self::GRC, => [
                'code' => $this->value,
                'name' => 'Greece',
                'currency_code' => CurrencyEnum::EUR->value,
            ],
            self::GRL, => [
                'code' => $this->value,
                'name' => 'Greenland',
                'currency_code' => CurrencyEnum::DKK->value,
            ],
            self::GRD, => [
                'code' => $this->value,
                'name' => 'Grenada',
                'currency_code' => CurrencyEnum::XCD->value,
            ],
            self::GLP, => [
                'code' => $this->value,
                'name' => 'Guadeloupe',
                'currency_code' => CurrencyEnum::EUR->value,
            ],
            self::GUM, => [
                'code' => $this->value,
                'name' => 'Guam',
                'currency_code' => CurrencyEnum::USD->value,
            ],
            self::GTM, => [
                'code' => $this->value,
                'name' => 'Guatemala',
                'currency_code' => CurrencyEnum::GTQ->value,
            ],
            self::GGY, => [
                'code' => $this->value,
                'name' => 'Guernsey',
                'currency_code' => CurrencyEnum::GBP->value,
            ],
            self::GIN, => [
                'code' => $this->value,
                'name' => 'Guinea',
                'currency_code' => CurrencyEnum::GNF->value,
            ],
            self::GNB, => [
                'code' => $this->value,
                'name' => 'Guinea-Bissau',
                'currency_code' => CurrencyEnum::XOF->value,
            ],
            self::GUY, => [
                'code' => $this->value,
                'name' => 'Guyana',
                'currency_code' => CurrencyEnum::GYD->value,
            ],
            self::HTI, => [
                'code' => $this->value,
                'name' => 'Haiti',
                'currency_code' => CurrencyEnum::HTG->value,
            ],
            self::HMD, => [
                'code' => $this->value,
                'name' => 'Heard Island and McDonald Islands',
                'currency_code' => CurrencyEnum::AUD->value,
            ],
            self::VAT, => [
                'code' => $this->value,
                'name' => 'Holy See',
                'currency_code' => CurrencyEnum::EUR->value,
            ],
            self::HND, => [
                'code' => $this->value,
                'name' => 'Honduras',
                'currency_code' => CurrencyEnum::HNL->value,
            ],
            self::HKG, => [
                'code' => $this->value,
                'name' => 'Hong Kong',
                'currency_code' => CurrencyEnum::HKD->value,
            ],
            self::HUN, => [
                'code' => $this->value,
                'name' => 'Hungary',
                'currency_code' => CurrencyEnum::HUF->value,
            ],
            self::ISL, => [
                'code' => $this->value,
                'name' => 'Iceland',
                'currency_code' => CurrencyEnum::ISK->value,
            ],
            self::IND, => [
                'code' => $this->value,
                'name' => 'India',
                'currency_code' => CurrencyEnum::INR->value,
            ],
            self::IDN, => [
                'code' => $this->value,
                'name' => 'Indonesia',
                'currency_code' => CurrencyEnum::IDR->value,
            ],
            self::IRN, => [
                'code' => $this->value,
                'name' => 'Iran, Islamic Republic of',
                'currency_code' => CurrencyEnum::IRR->value,
            ],
            self::IRQ, => [
                'code' => $this->value,
                'name' => 'Iraq',
                'currency_code' => CurrencyEnum::IQD->value,
            ],
            self::IRL, => [
                'code' => $this->value,
                'name' => 'Ireland',
                'currency_code' => CurrencyEnum::EUR->value,
            ],
            self::IMN, => [
                'code' => $this->value,
                'name' => 'Isle of Man',
                'currency_code' => CurrencyEnum::GBP->value,
            ],
            self::ISR, => [
                'code' => $this->value,
                'name' => 'Israel',
                'currency_code' => CurrencyEnum::ILS->value,
            ],
            self::ITA, => [
                'code' => $this->value,
                'name' => 'Italy',
                'currency_code' => CurrencyEnum::EUR->value,
            ],
            self::JAM, => [
                'code' => $this->value,
                'name' => 'Jamaica',
                'currency_code' => CurrencyEnum::JMD->value,
            ],
            self::JPN, => [
                'code' => $this->value,
                'name' => 'Japan',
                'currency_code' => CurrencyEnum::JPY->value,
            ],
            self::JEY, => [
                'code' => $this->value,
                'name' => 'Jersey',
                'currency_code' => CurrencyEnum::GBP->value,
            ],
            self::JOR, => [
                'code' => $this->value,
                'name' => 'Jordan',
                'currency_code' => CurrencyEnum::JOD->value,
            ],
            self::KAZ, => [
                'code' => $this->value,
                'name' => 'Kazakhstan',
                'currency_code' => CurrencyEnum::KZT->value,
            ],
            self::KEN, => [
                'code' => $this->value,
                'name' => 'Kenya',
                'currency_code' => CurrencyEnum::KES->value,
            ],
            self::KIR, => [
                'code' => $this->value,
                'name' => 'Kiribati',
                'currency_code' => CurrencyEnum::AUD->value,
            ],
            self::PRK, => [
                'code' => $this->value,
                'name' => 'Korea, Democratic People\'s Republic of',
                'currency_code' => CurrencyEnum::KPW->value,
            ],
            self::KOR, => [
                'code' => $this->value,
                'name' => 'Korea, Republic of',
                'currency_code' => CurrencyEnum::KRW->value,
            ],
            self::KWT, => [
                'code' => $this->value,
                'name' => 'Kuwait',
                'currency_code' => CurrencyEnum::KWD->value,
            ],
            self::KGZ, => [
                'code' => $this->value,
                'name' => 'Kyrgyzstan',
                'currency_code' => CurrencyEnum::KGS->value,
            ],
            self::LAO, => [
                'code' => $this->value,
                'name' => 'Lao People\'s Democratic Republic',
                'currency_code' => CurrencyEnum::LAK->value,
            ],
            self::LVA, => [
                'code' => $this->value,
                'name' => 'Latvia',
                'currency_code' => CurrencyEnum::EUR->value,
            ],
            self::LBN, => [
                'code' => $this->value,
                'name' => 'Lebanon',
                'currency_code' => CurrencyEnum::LBP->value,
            ],
            self::LSO, => [
                'code' => $this->value,
                'name' => 'Lesotho',
                'currency_code' => CurrencyEnum::LSL->value,
            ],
            self::LBR, => [
                'code' => $this->value,
                'name' => 'Liberia',
                'currency_code' => CurrencyEnum::LRD->value,
            ],
            self::LBY, => [
                'code' => $this->value,
                'name' => 'Libya',
                'currency_code' => CurrencyEnum::LYD->value,
            ],
            self::LIE, => [
                'code' => $this->value,
                'name' => 'Liechtenstein',
                'currency_code' => CurrencyEnum::CHF->value,
            ],
            self::LTU, => [
                'code' => $this->value,
                'name' => 'Lithuania',
                'currency_code' => CurrencyEnum::EUR->value,
            ],
            self::LUX, => [
                'code' => $this->value,
                'name' => 'Luxembourg',
                'currency_code' => CurrencyEnum::EUR->value,
            ],
            self::MAC, => [
                'code' => $this->value,
                'name' => 'Macao',
                'currency_code' => CurrencyEnum::MOP->value,
            ],
            self::MDG, => [
                'code' => $this->value,
                'name' => 'Madagascar',
                'currency_code' => CurrencyEnum::MGA->value,
            ],
            self::MWI, => [
                'code' => $this->value,
                'name' => 'Malawi',
                'currency_code' => CurrencyEnum::MWK->value,
            ],
            self::MYS, => [
                'code' => $this->value,
                'name' => 'Malaysia',
                'currency_code' => CurrencyEnum::MYR->value,
            ],
            self::MDV, => [
                'code' => $this->value,
                'name' => 'Maldives',
                'currency_code' => CurrencyEnum::MVR->value,
            ],
            self::MLI, => [
                'code' => $this->value,
                'name' => 'Mali',
                'currency_code' => CurrencyEnum::XOF->value,
            ],
            self::MLT, => [
                'code' => $this->value,
                'name' => 'Malta',
                'currency_code' => CurrencyEnum::EUR->value,
            ],
            self::MHL, => [
                'code' => $this->value,
                'name' => 'Marshall Islands',
                'currency_code' => CurrencyEnum::USD->value,
            ],
            self::MTQ, => [
                'code' => $this->value,
                'name' => 'Martinique',
                'currency_code' => CurrencyEnum::EUR->value,
            ],
            self::MRT, => [
                'code' => $this->value,
                'name' => 'Mauritania',
                'currency_code' => CurrencyEnum::MRU->value,
            ],
            self::MUS, => [
                'code' => $this->value,
                'name' => 'Mauritius',
                'currency_code' => CurrencyEnum::MUR->value,
            ],
            self::MYT, => [
                'code' => $this->value,
                'name' => 'Mayotte',
                'currency_code' => CurrencyEnum::EUR->value,
            ],
            self::MEX, => [
                'code' => $this->value,
                'name' => 'Mexico',
                'currency_code' => CurrencyEnum::MXN->value,
            ],
            self::FSM, => [
                'code' => $this->value,
                'name' => 'Micronesia, Federated States of',
                'currency_code' => CurrencyEnum::USD->value,
            ],
            self::MDA, => [
                'code' => $this->value,
                'name' => 'Moldova, Republic of',
                'currency_code' => CurrencyEnum::MDL->value,
            ],
            self::MCO, => [
                'code' => $this->value,
                'name' => 'Monaco',
                'currency_code' => CurrencyEnum::EUR->value,
            ],
            self::MNG, => [
                'code' => $this->value,
                'name' => 'Mongolia',
                'currency_code' => CurrencyEnum::MNT->value,
            ],
            self::MNE, => [
                'code' => $this->value,
                'name' => 'Montenegro',
                'currency_code' => CurrencyEnum::EUR->value,
            ],
            self::MSR, => [
                'code' => $this->value,
                'name' => 'Montserrat',
                'currency_code' => CurrencyEnum::XCD->value,
            ],
            self::MAR, => [
                'code' => $this->value,
                'name' => 'Morocco',
                'currency_code' => CurrencyEnum::MAD->value,
            ],
            self::MOZ, => [
                'code' => $this->value,
                'name' => 'Mozambique',
                'currency_code' => CurrencyEnum::MZN->value,
            ],
            self::MMR, => [
                'code' => $this->value,
                'name' => 'Myanmar',
                'currency_code' => CurrencyEnum::MMK->value,
            ],
            self::NAM, => [
                'code' => $this->value,
                'name' => 'Namibia',
                'currency_code' => CurrencyEnum::NAD->value,
            ],
            self::NRU, => [
                'code' => $this->value,
                'name' => 'Nauru',
                'currency_code' => CurrencyEnum::AUD->value,
            ],
            self::NPL, => [
                'code' => $this->value,
                'name' => 'Nepal',
                'currency_code' => CurrencyEnum::NPR->value,
            ],
            self::NLD, => [
                'code' => $this->value,
                'name' => 'Netherlands',
                'currency_code' => CurrencyEnum::EUR->value,
            ],
            self::NCL, => [
                'code' => $this->value,
                'name' => 'New Caledonia',
                'currency_code' => CurrencyEnum::XPF->value,
            ],
            self::NZL, => [
                'code' => $this->value,
                'name' => 'New Zealand',
                'currency_code' => CurrencyEnum::NZD->value,
            ],
            self::NIC, => [
                'code' => $this->value,
                'name' => 'Nicaragua',
                'currency_code' => CurrencyEnum::NIO->value,
            ],
            self::NER, => [
                'code' => $this->value,
                'name' => 'Niger',
                'currency_code' => CurrencyEnum::XOF->value,
            ],
            self::NGA, => [
                'code' => $this->value,
                'name' => 'Nigeria',
                'currency_code' => CurrencyEnum::NGN->value,
            ],
            self::NIU, => [
                'code' => $this->value,
                'name' => 'Niue',
                'currency_code' => CurrencyEnum::NZD->value,
            ],
            self::NFK, => [
                'code' => $this->value,
                'name' => 'Norfolk Island',
                'currency_code' => CurrencyEnum::AUD->value,
            ],
            self::MKD, => [
                'code' => $this->value,
                'name' => 'North Macedonia',
                'currency_code' => CurrencyEnum::MKD->value,
            ],
            self::MNP, => [
                'code' => $this->value,
                'name' => 'Northern Mariana Islands',
                'currency_code' => CurrencyEnum::USD->value,
            ],
            self::NOR, => [
                'code' => $this->value,
                'name' => 'Norway',
                'currency_code' => CurrencyEnum::NOK->value,
            ],
            self::OMN, => [
                'code' => $this->value,
                'name' => 'Oman',
                'currency_code' => CurrencyEnum::OMR->value,
            ],
            self::PAK, => [
                'code' => $this->value,
                'name' => 'Pakistan',
                'currency_code' => CurrencyEnum::PKR->value,
            ],
            self::PLW, => [
                'code' => $this->value,
                'name' => 'Palau',
                'currency_code' => CurrencyEnum::USD->value,
            ],
            self::PSE, => [
                'code' => $this->value,
                'name' => 'Palestine, State of',
                'currency_code' => CurrencyEnum::ILS->value,
            ],
            self::PAN, => [
                'code' => $this->value,
                'name' => 'Panama',
                'currency_code' => CurrencyEnum::PAB->value,
            ],
            self::PNG, => [
                'code' => $this->value,
                'name' => 'Papua New Guinea',
                'currency_code' => CurrencyEnum::PGK->value,
            ],
            self::PRY, => [
                'code' => $this->value,
                'name' => 'Paraguay',
                'currency_code' => CurrencyEnum::PYG->value,
            ],
            self::PER, => [
                'code' => $this->value,
                'name' => 'Peru',
                'currency_code' => CurrencyEnum::PEN->value,
            ],
            self::PHL, => [
                'code' => $this->value,
                'name' => 'Philippines',
                'currency_code' => CurrencyEnum::PHP->value,
            ],
            self::PCN, => [
                'code' => $this->value,
                'name' => 'Pitcairn',
                'currency_code' => CurrencyEnum::NZD->value,
            ],
            self::POL, => [
                'code' => $this->value,
                'name' => 'Poland',
                'currency_code' => CurrencyEnum::PLN->value,
            ],
            self::PRT, => [
                'code' => $this->value,
                'name' => 'Portugal',
                'currency_code' => CurrencyEnum::EUR->value,
            ],
            self::PRI, => [
                'code' => $this->value,
                'name' => 'Puerto Rico',
                'currency_code' => CurrencyEnum::USD->value,
            ],
            self::QAT, => [
                'code' => $this->value,
                'name' => 'Qatar',
                'currency_code' => CurrencyEnum::QAR->value,
            ],
            self::REU, => [
                'code' => $this->value,
                'name' => 'Réunion',
                'currency_code' => CurrencyEnum::EUR->value,
            ],
            self::ROU, => [
                'code' => $this->value,
                'name' => 'Romania',
                'currency_code' => CurrencyEnum::RON->value,
            ],
            self::RUS, => [
                'code' => $this->value,
                'name' => 'Russian Federation',
                'currency_code' => CurrencyEnum::RUB->value,
            ],
            self::RWA, => [
                'code' => $this->value,
                'name' => 'Rwanda',
                'currency_code' => CurrencyEnum::RWF->value,
            ],
            self::BLM, => [
                'code' => $this->value,
                'name' => 'Saint Barthélemy',
                'currency_code' => CurrencyEnum::EUR->value,
            ],
            self::SHN, => [
                'code' => $this->value,
                'name' => 'Saint Helena, Ascension and Tristan da Cunha',
                'currency_code' => CurrencyEnum::SHP->value,
            ],
            self::KNA, => [
                'code' => $this->value,
                'name' => 'Saint Kitts and Nevis',
                'currency_code' => CurrencyEnum::XCD->value,
            ],
            self::LCA, => [
                'code' => $this->value,
                'name' => 'Saint Lucia',
                'currency_code' => CurrencyEnum::XCD->value,
            ],
            self::MAF, => [
                'code' => $this->value,
                'name' => 'Saint Martin (French part)',
                'currency_code' => CurrencyEnum::EUR->value,
            ],
            self::SPM, => [
                'code' => $this->value,
                'name' => 'Saint Pierre and Miquelon',
                'currency_code' => CurrencyEnum::EUR->value,
            ],
            self::VCT, => [
                'code' => $this->value,
                'name' => 'Saint Vincent and the Grenadines',
                'currency_code' => CurrencyEnum::XCD->value,
            ],
            self::WSM, => [
                'code' => $this->value,
                'name' => 'Samoa',
                'currency_code' => CurrencyEnum::WST->value,
            ],
            self::SMR, => [
                'code' => $this->value,
                'name' => 'San Marino',
                'currency_code' => CurrencyEnum::EUR->value,
            ],
            self::STP, => [
                'code' => $this->value,
                'name' => 'Sao Tome and Principe',
                'currency_code' => CurrencyEnum::STN->value,
            ],
            self::SAU, => [
                'code' => $this->value,
                'name' => 'Saudi Arabia',
                'currency_code' => CurrencyEnum::SAR->value,
            ],
            self::SEN, => [
                'code' => $this->value,
                'name' => 'Senegal',
                'currency_code' => CurrencyEnum::XOF->value,
            ],
            self::SRB, => [
                'code' => $this->value,
                'name' => 'Serbia',
                'currency_code' => CurrencyEnum::RSD->value,
            ],
            self::SYC, => [
                'code' => $this->value,
                'name' => 'Seychelles',
                'currency_code' => CurrencyEnum::SCR->value,
            ],
            self::SLE, => [
                'code' => $this->value,
                'name' => 'Sierra Leone',
                'currency_code' => null,
            ],
            self::SGP, => [
                'code' => $this->value,
                'name' => 'Singapore',
                'currency_code' => CurrencyEnum::SGD->value,
            ],
            self::SXM, => [
                'code' => $this->value,
                'name' => 'Sint Maarten (Dutch part)',
                'currency_code' => CurrencyEnum::ANG->value,
            ],
            self::SVK, => [
                'code' => $this->value,
                'name' => 'Slovakia',
                'currency_code' => CurrencyEnum::EUR->value,
            ],
            self::SVN, => [
                'code' => $this->value,
                'name' => 'Slovenia',
                'currency_code' => CurrencyEnum::EUR->value,
            ],
            self::SLB, => [
                'code' => $this->value,
                'name' => 'Solomon Islands',
                'currency_code' => CurrencyEnum::SBD->value,
            ],
            self::SOM, => [
                'code' => $this->value,
                'name' => 'Somalia',
                'currency_code' => CurrencyEnum::SOS->value,
            ],
            self::ZAF, => [
                'code' => $this->value,
                'name' => 'South Africa',
                'currency_code' => CurrencyEnum::ZAR->value,
            ],
            self::SGS, => [
                'code' => $this->value,
                'name' => 'South Georgia and the South Sandwich Islands',
                'currency_code' => CurrencyEnum::GBP->value,
            ],
            self::SSD, => [
                'code' => $this->value,
                'name' => 'South Sudan',
                'currency_code' => CurrencyEnum::SSP->value,
            ],
            self::ESP, => [
                'code' => $this->value,
                'name' => 'Spain',
                'currency_code' => CurrencyEnum::EUR->value,
            ],
            self::LKA, => [
                'code' => $this->value,
                'name' => 'Sri Lanka',
                'currency_code' => CurrencyEnum::LKR->value,
            ],
            self::SDN, => [
                'code' => $this->value,
                'name' => 'Sudan',
                'currency_code' => CurrencyEnum::SDG->value,
            ],
            self::SUR, => [
                'code' => $this->value,
                'name' => 'Suriname',
                'currency_code' => CurrencyEnum::SRD->value,
            ],
            self::SJM, => [
                'code' => $this->value,
                'name' => 'Svalbard and Jan Mayen',
                'currency_code' => CurrencyEnum::NOK->value,
            ],
            self::SWE, => [
                'code' => $this->value,
                'name' => 'Sweden',
                'currency_code' => CurrencyEnum::SEK->value,
            ],
            self::CHE, => [
                'code' => $this->value,
                'name' => 'Switzerland',
                'currency_code' => CurrencyEnum::CHF->value,
            ],
            self::SYR, => [
                'code' => $this->value,
                'name' => 'Syrian Arab Republic',
                'currency_code' => CurrencyEnum::SYP->value,
            ],
            self::TWN, => [
                'code' => $this->value,
                'name' => 'Taiwan, Province of China',
                'currency_code' => CurrencyEnum::TWD->value,
            ],
            self::TJK, => [
                'code' => $this->value,
                'name' => 'Tajikistan',
                'currency_code' => CurrencyEnum::TJS->value,
            ],
            self::TZA, => [
                'code' => $this->value,
                'name' => 'Tanzania, United Republic of',
                'currency_code' => CurrencyEnum::TZS->value,
            ],
            self::THA, => [
                'code' => $this->value,
                'name' => 'Thailand',
                'currency_code' => CurrencyEnum::THB->value,
            ],
            self::TLS, => [
                'code' => $this->value,
                'name' => 'Timor-Leste',
                'currency_code' => CurrencyEnum::USD->value,
            ],
            self::TGO, => [
                'code' => $this->value,
                'name' => 'Togo',
                'currency_code' => CurrencyEnum::XOF->value,
            ],
            self::TKL, => [
                'code' => $this->value,
                'name' => 'Tokelau',
                'currency_code' => CurrencyEnum::NZD->value,
            ],
            self::TON, => [
                'code' => $this->value,
                'name' => 'Tonga',
                'currency_code' => CurrencyEnum::TOP->value,
            ],
            self::TTO, => [
                'code' => $this->value,
                'name' => 'Trinidad and Tobago',
                'currency_code' => CurrencyEnum::TTD->value,
            ],
            self::TUN, => [
                'code' => $this->value,
                'name' => 'Tunisia',
                'currency_code' => CurrencyEnum::TND->value,
            ],
            self::TUR, => [
                'code' => $this->value,
                'name' => 'Turkey',
                'currency_code' => CurrencyEnum::TRY->value,
            ],
            self::TKM, => [
                'code' => $this->value,
                'name' => 'Turkmenistan',
                'currency_code' => CurrencyEnum::TMT->value,
            ],
            self::TCA, => [
                'code' => $this->value,
                'name' => 'Turks and Caicos Islands',
                'currency_code' => CurrencyEnum::USD->value,
            ],
            self::TUV, => [
                'code' => $this->value,
                'name' => 'Tuvalu',
                'currency_code' => CurrencyEnum::AUD->value,
            ],
            self::UGA, => [
                'code' => $this->value,
                'name' => 'Uganda',
                'currency_code' => CurrencyEnum::UGX->value,
            ],
            self::UKR, => [
                'code' => $this->value,
                'name' => 'Ukraine',
                'currency_code' => CurrencyEnum::UAH->value,
            ],
            self::ARE, => [
                'code' => $this->value,
                'name' => 'United Arab Emirates',
                'currency_code' => CurrencyEnum::AED->value,
            ],
            self::GBR, => [
                'code' => $this->value,
                'name' => 'United Kingdom',
                'currency_code' => CurrencyEnum::GBP->value,
            ],
            self::USA, => [
                'code' => $this->value,
                'name' => 'United States',
                'currency_code' => CurrencyEnum::USD->value,
            ],
            self::UMI, => [
                'code' => $this->value,
                'name' => 'United States Minor Outlying Islands',
                'currency_code' => CurrencyEnum::USD->value,
            ],
            self::URY, => [
                'code' => $this->value,
                'name' => 'Uruguay',
                'currency_code' => CurrencyEnum::UYU->value,
            ],
            self::UZB, => [
                'code' => $this->value,
                'name' => 'Uzbekistan',
                'currency_code' => CurrencyEnum::UZS->value,
            ],
            self::VUT, => [
                'code' => $this->value,
                'name' => 'Vanuatu',
                'currency_code' => CurrencyEnum::VUV->value,
            ],
            self::VEN, => [
                'code' => $this->value,
                'name' => 'Venezuela, Bolivarian Republic of',
                'currency_code' => CurrencyEnum::VES->value,
            ],
            self::VNM, => [
                'code' => $this->value,
                'name' => 'Viet Nam',
                'currency_code' => CurrencyEnum::VND->value,
            ],
            self::VGB, => [
                'code' => $this->value,
                'name' => 'Virgin Islands, British',
                'currency_code' => CurrencyEnum::USD->value,
            ],
            self::VIR, => [
                'code' => $this->value,
                'name' => 'Virgin Islands, U.S.',
                'currency_code' => CurrencyEnum::USD->value,
            ],
            self::WLF, => [
                'code' => $this->value,
                'name' => 'Wallis and Futuna',
                'currency_code' => CurrencyEnum::XPF->value,
            ],
            self::ESH, => [
                'code' => $this->value,
                'name' => 'Western Sahara',
                'currency_code' => CurrencyEnum::MAD->value,
            ],
            self::YEM, => [
                'code' => $this->value,
                'name' => 'Yemen',
                'currency_code' => CurrencyEnum::YER->value,
            ],
            self::ZMB, => [
                'code' => $this->value,
                'name' => 'Zambia',
                'currency_code' => CurrencyEnum::ZMW->value,
            ],
            self::ZWE, => [
                'code' => $this->value,
                'name' => 'Zimbabwe',
                'currency_code' => CurrencyEnum::ZWL->value,
            ],
            self::EU, => [
                'code' =>$this->value,
                'name' => 'European Union',
                'currency_code' => CurrencyEnum::EUR->value,
            ],
        };
    }
}
