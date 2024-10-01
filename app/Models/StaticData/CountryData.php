<?php

namespace App\Models\StaticData;

use App\Models\StaticData\Contracts\StaticDataContract;

class CountryData implements StaticDataContract
{
    public const AFG = 'AFG';
    public const ALA = 'ALA';
    public const ALB = 'ALB';
    public const DZA = 'DZA';
    public const ASM = 'ASM';
    public const AND = 'AND';
    public const AGO = 'AGO';
    public const AIA = 'AIA';
    public const ATA = 'ATA';
    public const ATG = 'ATG';
    public const ARG = 'ARG';
    public const ARM = 'ARM';
    public const ABW = 'ABW';
    public const AUS = 'AUS';
    public const AUT = 'AUT';
    public const AZE = 'AZE';
    public const BHS = 'BHS';
    public const BHR = 'BHR';
    public const BGD = 'BGD';
    public const BRB = 'BRB';
    public const BLR = 'BLR';
    public const BEL = 'BEL';
    public const BLZ = 'BLZ';
    public const BEN = 'BEN';
    public const BMU = 'BMU';
    public const BTN = 'BTN';
    public const BOL = 'BOL';
    public const BES = 'BES';
    public const BIH = 'BIH';
    public const BWA = 'BWA';
    public const BVT = 'BVT';
    public const BRA = 'BRA';
    public const IOT = 'IOT';
    public const BRN = 'BRN';
    public const BGR = 'BGR';
    public const BFA = 'BFA';
    public const BDI = 'BDI';
    public const CPV = 'CPV';
    public const KHM = 'KHM';
    public const CMR = 'CMR';
    public const CAN = 'CAN';
    public const CYM = 'CYM';
    public const CAF = 'CAF';
    public const TCD = 'TCD';
    public const CHL = 'CHL';
    public const CHN = 'CHN';
    public const CXR = 'CXR';
    public const CCK = 'CCK';
    public const COL = 'COL';
    public const COM = 'COM';
    public const COD = 'COD';
    public const COG = 'COG';
    public const COK = 'COK';
    public const CRI = 'CRI';
    public const CIV = 'CIV';
    public const HRV = 'HRV';
    public const CUB = 'CUB';
    public const CUW = 'CUW';
    public const CYP = 'CYP';
    public const CZE = 'CZE';
    public const DNK = 'DNK';
    public const DJI = 'DJI';
    public const DMA = 'DMA';
    public const DOM = 'DOM';
    public const ECU = 'ECU';
    public const EGY = 'EGY';
    public const SLV = 'SLV';
    public const GNQ = 'GNQ';
    public const ERI = 'ERI';
    public const EST = 'EST';
    public const SWZ = 'SWZ';
    public const ETH = 'ETH';
    public const FLK = 'FLK';
    public const FRO = 'FRO';
    public const FJI = 'FJI';
    public const FIN = 'FIN';
    public const FRA = 'FRA';
    public const GUF = 'GUF';
    public const PYF = 'PYF';
    public const ATF = 'ATF';
    public const GAB = 'GAB';
    public const GMB = 'GMB';
    public const GEO = 'GEO';
    public const DEU = 'DEU';
    public const GHA = 'GHA';
    public const GIB = 'GIB';
    public const GRC = 'GRC';
    public const GRL = 'GRL';
    public const GRD = 'GRD';
    public const GLP = 'GLP';
    public const GUM = 'GUM';
    public const GTM = 'GTM';
    public const GGY = 'GGY';
    public const GIN = 'GIN';
    public const GNB = 'GNB';
    public const GUY = 'GUY';
    public const HTI = 'HTI';
    public const HMD = 'HMD';
    public const VAT = 'VAT';
    public const HND = 'HND';
    public const HKG = 'HKG';
    public const HUN = 'HUN';
    public const ISL = 'ISL';
    public const IND = 'IND';
    public const IDN = 'IDN';
    public const IRN = 'IRN';
    public const IRQ = 'IRQ';
    public const IRL = 'IRL';
    public const IMN = 'IMN';
    public const ISR = 'ISR';
    public const ITA = 'ITA';
    public const JAM = 'JAM';
    public const JPN = 'JPN';
    public const JEY = 'JEY';
    public const JOR = 'JOR';
    public const KAZ = 'KAZ';
    public const KEN = 'KEN';
    public const KIR = 'KIR';
    public const PRK = 'PRK';
    public const KOR = 'KOR';
    public const KWT = 'KWT';
    public const KGZ = 'KGZ';
    public const LAO = 'LAO';
    public const LVA = 'LVA';
    public const LBN = 'LBN';
    public const LSO = 'LSO';
    public const LBR = 'LBR';
    public const LBY = 'LBY';
    public const LIE = 'LIE';
    public const LTU = 'LTU';
    public const LUX = 'LUX';
    public const MAC = 'MAC';
    public const MDG = 'MDG';
    public const MWI = 'MWI';
    public const MYS = 'MYS';
    public const MDV = 'MDV';
    public const MLI = 'MLI';
    public const MLT = 'MLT';
    public const MHL = 'MHL';
    public const MTQ = 'MTQ';
    public const MRT = 'MRT';
    public const MUS = 'MUS';
    public const MYT = 'MYT';
    public const MEX = 'MEX';
    public const FSM = 'FSM';
    public const MDA = 'MDA';
    public const MCO = 'MCO';
    public const MNG = 'MNG';
    public const MNE = 'MNE';
    public const MSR = 'MSR';
    public const MAR = 'MAR';
    public const MOZ = 'MOZ';
    public const MMR = 'MMR';
    public const NAM = 'NAM';
    public const NRU = 'NRU';
    public const NPL = 'NPL';
    public const NLD = 'NLD';
    public const NCL = 'NCL';
    public const NZL = 'NZL';
    public const NIC = 'NIC';
    public const NER = 'NER';
    public const NGA = 'NGA';
    public const NIU = 'NIU';
    public const NFK = 'NFK';
    public const MKD = 'MKD';
    public const MNP = 'MNP';
    public const NOR = 'NOR';
    public const OMN = 'OMN';
    public const PAK = 'PAK';
    public const PLW = 'PLW';
    public const PSE = 'PSE';
    public const PAN = 'PAN';
    public const PNG = 'PNG';
    public const PRY = 'PRY';
    public const PER = 'PER';
    public const PHL = 'PHL';
    public const PCN = 'PCN';
    public const POL = 'POL';
    public const PRT = 'PRT';
    public const PRI = 'PRI';
    public const QAT = 'QAT';
    public const REU = 'REU';
    public const ROU = 'ROU';
    public const RUS = 'RUS';
    public const RWA = 'RWA';
    public const BLM = 'BLM';
    public const SHN = 'SHN';
    public const KNA = 'KNA';
    public const LCA = 'LCA';
    public const MAF = 'MAF';
    public const SPM = 'SPM';
    public const VCT = 'VCT';
    public const WSM = 'WSM';
    public const SMR = 'SMR';
    public const STP = 'STP';
    public const SAU = 'SAU';
    public const SEN = 'SEN';
    public const SRB = 'SRB';
    public const SYC = 'SYC';
    public const SLE = 'SLE';
    public const SGP = 'SGP';
    public const SXM = 'SXM';
    public const SVK = 'SVK';
    public const SVN = 'SVN';
    public const SLB = 'SLB';
    public const SOM = 'SOM';
    public const ZAF = 'ZAF';
    public const SGS = 'SGS';
    public const SSD = 'SSD';
    public const ESP = 'ESP';
    public const LKA = 'LKA';
    public const SDN = 'SDN';
    public const SUR = 'SUR';
    public const SJM = 'SJM';
    public const SWE = 'SWE';
    public const CHE = 'CHE';
    public const SYR = 'SYR';
    public const TWN = 'TWN';
    public const TJK = 'TJK';
    public const TZA = 'TZA';
    public const THA = 'THA';
    public const TLS = 'TLS';
    public const TGO = 'TGO';
    public const TKL = 'TKL';
    public const TON = 'TON';
    public const TTO = 'TTO';
    public const TUN = 'TUN';
    public const TUR = 'TUR';
    public const TKM = 'TKM';
    public const TCA = 'TCA';
    public const TUV = 'TUV';
    public const UGA = 'UGA';
    public const UKR = 'UKR';
    public const ARE = 'ARE';
    public const GBR = 'GBR';
    public const UMI = 'UMI';
    public const USA = 'USA';
    public const URY = 'URY';
    public const UZB = 'UZB';
    public const VUT = 'VUT';
    public const VEN = 'VEN';
    public const VNM = 'VNM';
    public const VGB = 'VGB';
    public const VIR = 'VIR';
    public const WLF = 'WLF';
    public const ESH = 'ESH';
    public const YEM = 'YEM';
    public const ZMB = 'ZMB';
    public const ZWE = 'ZWE';

    public const EU = 'EU';

    public static function getModelClass(): string
    {
        return \App\Models\Country::class;
    }

    public static function getData(): array
    {
        return [
            [
                'code' => self::AFG,
                'name' => 'Afghanistan',
                'currency_code' => CurrencyData::AFN,
            ],
            [
                'code' => self::ALA,
                'name' => 'Åland Islands',
                'currency_code' => CurrencyData::EUR,
            ],
            [
                'code' => self::ALB,
                'name' => 'Albania',
                'currency_code' => CurrencyData::ALL,
            ],
            [
                'code' => self::DZA,
                'name' => 'Algeria',
                'currency_code' => CurrencyData::DZD,
            ],
            [
                'code' => self::ASM,
                'name' => 'American Samoa',
                'currency_code' => CurrencyData::USD,
            ],
            [
                'code' => self::AND,
                'name' => 'Andorra',
                'currency_code' => CurrencyData::EUR,
            ],
            [
                'code' => self::AGO,
                'name' => 'Angola',
                'currency_code' => CurrencyData::AOA,
            ],
            [
                'code' => self::AIA,
                'name' => 'Anguilla',
                'currency_code' => CurrencyData::XCD,
            ],
            [
                'code' => self::ATA,
                'name' => 'Antarctica',
                'currency_code' => null,
            ],
            [
                'code' => self::ATG,
                'name' => 'Antigua and Barbuda',
                'currency_code' => CurrencyData::XCD,
            ],
            [
                'code' => self::ARG,
                'name' => 'Argentina',
                'currency_code' => CurrencyData::ARS,
            ],
            [
                'code' => self::ARM,
                'name' => 'Armenia',
                'currency_code' => CurrencyData::AMD,
            ],
            [
                'code' => self::ABW,
                'name' => 'Aruba',
                'currency_code' => CurrencyData::AWG,
            ],
            [
                'code' => self::AUS,
                'name' => 'Australia',
                'currency_code' => CurrencyData::AUD,
            ],
            [
                'code' => self::AUT,
                'name' => 'Austria',
                'currency_code' => CurrencyData::EUR,
            ],
            [
                'code' => self::AZE,
                'name' => 'Azerbaijan',
                'currency_code' => CurrencyData::AZN,
            ],
            [
                'code' => self::BHS,
                'name' => 'Bahamas',
                'currency_code' => CurrencyData::BSD,
            ],
            [
                'code' => self::BHR,
                'name' => 'Bahrain',
                'currency_code' => CurrencyData::BHD,
            ],
            [
                'code' => self::BGD,
                'name' => 'Bangladesh',
                'currency_code' => CurrencyData::BDT,
            ],
            [
                'code' => self::BRB,
                'name' => 'Barbados',
                'currency_code' => CurrencyData::BBD,
            ],
            [
                'code' => self::BLR,
                'name' => 'Belarus',
                'currency_code' => CurrencyData::BYN,
            ],
            [
                'code' => self::BEL,
                'name' => 'Belgium',
                'currency_code' => CurrencyData::EUR,
            ],
            [
                'code' => self::BLZ,
                'name' => 'Belize',
                'currency_code' => CurrencyData::BZD,
            ],
            [
                'code' => self::BEN,
                'name' => 'Benin',
                'currency_code' => CurrencyData::XOF,
            ],
            [
                'code' => self::BMU,
                'name' => 'Bermuda',
                'currency_code' => CurrencyData::BMD,
            ],
            [
                'code' => self::BTN,
                'name' => 'Bhutan',
                'currency_code' => CurrencyData::BTN,
            ],
            [
                'code' => self::BOL,
                'name' => 'Bolivia',
                'currency_code' => CurrencyData::BOB,
            ],
            [
                'code' => self::BES,
                'name' => 'Bonaire, Sint Eustatius and Saba',
                'currency_code' => CurrencyData::USD,
            ],
            [
                'code' => self::BIH,
                'name' => 'Bosnia and Herzegovina',
                'currency_code' => CurrencyData::BAM,
            ],
            [
                'code' => self::BWA,
                'name' => 'Botswana',
                'currency_code' => CurrencyData::BWP,
            ],
            [
                'code' => self::BVT,
                'name' => 'Bouvet Island',
                'currency_code' => CurrencyData::NOK,
            ],
            [
                'code' => self::BRA,
                'name' => 'Brazil',
                'currency_code' => CurrencyData::BRL,
            ],
            [
                'code' => self::IOT,
                'name' => 'British Indian Ocean Territory',
                'currency_code' => CurrencyData::USD,
            ],
            [
                'code' => self::BRN,
                'name' => 'Brunei Darussalam',
                'currency_code' => CurrencyData::BND,
            ],
            [
                'code' => self::BGR,
                'name' => 'Bulgaria',
                'currency_code' => CurrencyData::BGN,
            ],
            [
                'code' => self::BFA,
                'name' => 'Burkina Faso',
                'currency_code' => CurrencyData::XOF,
            ],
            [
                'code' => self::BDI,
                'name' => 'Burundi',
                'currency_code' => CurrencyData::BIF,
            ],
            [
                'code' => self::CPV,
                'name' => 'Cabo Verde',
                'currency_code' => CurrencyData::CVE,
            ],
            [
                'code' => self::KHM,
                'name' => 'Cambodia',
                'currency_code' => CurrencyData::KHR,
            ],
            [
                'code' => self::CMR,
                'name' => 'Cameroon',
                'currency_code' => CurrencyData::XAF,
            ],
            [
                'code' => self::CAN,
                'name' => 'Canada',
                'currency_code' => CurrencyData::CAD,
            ],
            [
                'code' => self::CYM,
                'name' => 'Cayman Islands',
                'currency_code' => CurrencyData::KYD,
            ],
            [
                'code' => self::CAF,
                'name' => 'Central African Republic',
                'currency_code' => CurrencyData::XAF,
            ],
            [
                'code' => self::TCD,
                'name' => 'Chad',
                'currency_code' => CurrencyData::XAF,
            ],
            [
                'code' => self::CHL,
                'name' => 'Chile',
                'currency_code' => CurrencyData::CLP,
            ],
            [
                'code' => self::CHN,
                'name' => 'China',
                'currency_code' => CurrencyData::CNY,
            ],
            [
                'code' => self::CXR,
                'name' => 'Christmas Island',
                'currency_code' => CurrencyData::AUD,
            ],
            [
                'code' => self::CCK,
                'name' => 'Cocos (Keeling) Islands',
                'currency_code' => CurrencyData::AUD,
            ],
            [
                'code' => self::COL,
                'name' => 'Colombia',
                'currency_code' => CurrencyData::COP,
            ],
            [
                'code' => self::COM,
                'name' => 'Comoros',
                'currency_code' => CurrencyData::KMF,
            ],
            [
                'code' => self::COD,
                'name' => 'Congo, Democratic Republic of the',
                'currency_code' => CurrencyData::CDF,
            ],
            [
                'code' => self::COG,
                'name' => 'Congo',
                'currency_code' => CurrencyData::XAF,
            ],
            [
                'code' => self::COK,
                'name' => 'Cook Islands',
                'currency_code' => CurrencyData::NZD,
            ],
            [
                'code' => self::CRI,
                'name' => 'Costa Rica',
                'currency_code' => CurrencyData::CRC,
            ],
            [
                'code' => self::CIV,
                'name' => 'Côte d\'Ivoire',
                'currency_code' => CurrencyData::XOF,
            ],
            [
                'code' => self::HRV,
                'name' => 'Croatia',
                'currency_code' => CurrencyData::EUR,
            ],
            [
                'code' => self::CUB,
                'name' => 'Cuba',
                'currency_code' => CurrencyData::CUP,
            ],
            [
                'code' => self::CUW,
                'name' => 'Curaçao',
                'currency_code' => CurrencyData::ANG,
            ],
            [
                'code' => self::CYP,
                'name' => 'Cyprus',
                'currency_code' => CurrencyData::EUR,
            ],
            [
                'code' => self::CZE,
                'name' => 'Czech Republic',
                'currency_code' => CurrencyData::CZK,
            ],
            [
                'code' => self::DNK,
                'name' => 'Denmark',
                'currency_code' => CurrencyData::DKK,
            ],
            [
                'code' => self::DJI,
                'name' => 'Djibouti',
                'currency_code' => CurrencyData::DJF,
            ],
            [
                'code' => self::DMA,
                'name' => 'Dominica',
                'currency_code' => CurrencyData::XCD,
            ],
            [
                'code' => self::DOM,
                'name' => 'Dominican Republic',
                'currency_code' => CurrencyData::DOP,
            ],
            [
                'code' => self::ECU,
                'name' => 'Ecuador',
                'currency_code' => CurrencyData::USD,
            ],
            [
                'code' => self::EGY,
                'name' => 'Egypt',
                'currency_code' => CurrencyData::EGP,
            ],
            [
                'code' => self::SLV,
                'name' => 'El Salvador',
                'currency_code' => CurrencyData::USD,
            ],
            [
                'code' => self::GNQ,
                'name' => 'Equatorial Guinea',
                'currency_code' => CurrencyData::XAF,
            ],
            [
                'code' => self::ERI,
                'name' => 'Eritrea',
                'currency_code' => CurrencyData::ERN,
            ],
            [
                'code' => self::EST,
                'name' => 'Estonia',
                'currency_code' => CurrencyData::EUR,
            ],
            [
                'code' => self::SWZ,
                'name' => 'Eswatini',
                'currency_code' => CurrencyData::SZL,
            ],
            [
                'code' => self::ETH,
                'name' => 'Ethiopia',
                'currency_code' => CurrencyData::ETB,
            ],
            [
                'code' => self::FLK,
                'name' => 'Falkland Islands (Malvinas)',
                'currency_code' => CurrencyData::FKP,
            ],
            [
                'code' => self::FRO,
                'name' => 'Faroe Islands',
                'currency_code' => CurrencyData::DKK,
            ],
            [
                'code' => self::FJI,
                'name' => 'Fiji',
                'currency_code' => CurrencyData::FJD,
            ],
            [
                'code' => self::FIN,
                'name' => 'Finland',
                'currency_code' => CurrencyData::EUR,
            ],
            [
                'code' => self::FRA,
                'name' => 'France',
                'currency_code' => CurrencyData::EUR,
            ],
            [
                'code' => self::GUF,
                'name' => 'French Guiana',
                'currency_code' => CurrencyData::EUR,
            ],
            [
                'code' => self::PYF,
                'name' => 'French Polynesia',
                'currency_code' => CurrencyData::XPF,
            ],
            [
                'code' => self::ATF,
                'name' => 'French Southern Territories',
                'currency_code' => CurrencyData::EUR,
            ],
            [
                'code' => self::GAB,
                'name' => 'Gabon',
                'currency_code' => CurrencyData::XAF,
            ],
            [
                'code' => self::GMB,
                'name' => 'Gambia',
                'currency_code' => CurrencyData::GMD,
            ],
            [
                'code' => self::GEO,
                'name' => 'Georgia',
                'currency_code' => CurrencyData::GEL,
            ],
            [
                'code' => self::DEU,
                'name' => 'Germany',
                'currency_code' => CurrencyData::EUR,
            ],
            [
                'code' => self::GHA,
                'name' => 'Ghana',
                'currency_code' => CurrencyData::GHS,
            ],
            [
                'code' => self::GIB,
                'name' => 'Gibraltar',
                'currency_code' => CurrencyData::GIP,
            ],
            [
                'code' => self::GRC,
                'name' => 'Greece',
                'currency_code' => CurrencyData::EUR,
            ],
            [
                'code' => self::GRL,
                'name' => 'Greenland',
                'currency_code' => CurrencyData::DKK,
            ],
            [
                'code' => self::GRD,
                'name' => 'Grenada',
                'currency_code' => CurrencyData::XCD,
            ],
            [
                'code' => self::GLP,
                'name' => 'Guadeloupe',
                'currency_code' => CurrencyData::EUR,
            ],
            [
                'code' => self::GUM,
                'name' => 'Guam',
                'currency_code' => CurrencyData::USD,
            ],
            [
                'code' => self::GTM,
                'name' => 'Guatemala',
                'currency_code' => CurrencyData::GTQ,
            ],
            [
                'code' => self::GGY,
                'name' => 'Guernsey',
                'currency_code' => CurrencyData::GBP,
            ],
            [
                'code' => self::GIN,
                'name' => 'Guinea',
                'currency_code' => CurrencyData::GNF,
            ],
            [
                'code' => self::GNB,
                'name' => 'Guinea-Bissau',
                'currency_code' => CurrencyData::XOF,
            ],
            [
                'code' => self::GUY,
                'name' => 'Guyana',
                'currency_code' => CurrencyData::GYD,
            ],
            [
                'code' => self::HTI,
                'name' => 'Haiti',
                'currency_code' => CurrencyData::HTG,
            ],
            [
                'code' => self::HMD,
                'name' => 'Heard Island and McDonald Islands',
                'currency_code' => CurrencyData::AUD,
            ],
            [
                'code' => self::VAT,
                'name' => 'Holy See',
                'currency_code' => CurrencyData::EUR,
            ],
            [
                'code' => self::HND,
                'name' => 'Honduras',
                'currency_code' => CurrencyData::HNL,
            ],
            [
                'code' => self::HKG,
                'name' => 'Hong Kong',
                'currency_code' => CurrencyData::HKD,
            ],
            [
                'code' => self::HUN,
                'name' => 'Hungary',
                'currency_code' => CurrencyData::HUF,
            ],
            [
                'code' => self::ISL,
                'name' => 'Iceland',
                'currency_code' => CurrencyData::ISK,
            ],
            [
                'code' => self::IND,
                'name' => 'India',
                'currency_code' => CurrencyData::INR,
            ],
            [
                'code' => self::IDN,
                'name' => 'Indonesia',
                'currency_code' => CurrencyData::IDR,
            ],
            [
                'code' => self::IRN,
                'name' => 'Iran, Islamic Republic of',
                'currency_code' => CurrencyData::IRR,
            ],
            [
                'code' => self::IRQ,
                'name' => 'Iraq',
                'currency_code' => CurrencyData::IQD,
            ],
            [
                'code' => self::IRL,
                'name' => 'Ireland',
                'currency_code' => CurrencyData::EUR,
            ],
            [
                'code' => self::IMN,
                'name' => 'Isle of Man',
                'currency_code' => CurrencyData::GBP,
            ],
            [
                'code' => self::ISR,
                'name' => 'Israel',
                'currency_code' => CurrencyData::ILS,
            ],
            [
                'code' => self::ITA,
                'name' => 'Italy',
                'currency_code' => CurrencyData::EUR,
            ],
            [
                'code' => self::JAM,
                'name' => 'Jamaica',
                'currency_code' => CurrencyData::JMD,
            ],
            [
                'code' => self::JPN,
                'name' => 'Japan',
                'currency_code' => CurrencyData::JPY,
            ],
            [
                'code' => self::JEY,
                'name' => 'Jersey',
                'currency_code' => CurrencyData::GBP,
            ],
            [
                'code' => self::JOR,
                'name' => 'Jordan',
                'currency_code' => CurrencyData::JOD,
            ],
            [
                'code' => self::KAZ,
                'name' => 'Kazakhstan',
                'currency_code' => CurrencyData::KZT,
            ],
            [
                'code' => self::KEN,
                'name' => 'Kenya',
                'currency_code' => CurrencyData::KES,
            ],
            [
                'code' => self::KIR,
                'name' => 'Kiribati',
                'currency_code' => CurrencyData::AUD,
            ],
            [
                'code' => self::PRK,
                'name' => 'Korea, Democratic People\'s Republic of',
                'currency_code' => CurrencyData::KPW,
            ],
            [
                'code' => self::KOR,
                'name' => 'Korea, Republic of',
                'currency_code' => CurrencyData::KRW,
            ],
            [
                'code' => self::KWT,
                'name' => 'Kuwait',
                'currency_code' => CurrencyData::KWD,
            ],
            [
                'code' => self::KGZ,
                'name' => 'Kyrgyzstan',
                'currency_code' => CurrencyData::KGS,
            ],
            [
                'code' => self::LAO,
                'name' => 'Lao People\'s Democratic Republic',
                'currency_code' => CurrencyData::LAK,
            ],
            [
                'code' => self::LVA,
                'name' => 'Latvia',
                'currency_code' => CurrencyData::EUR,
            ],
            [
                'code' => self::LBN,
                'name' => 'Lebanon',
                'currency_code' => CurrencyData::LBP,
            ],
            [
                'code' => self::LSO,
                'name' => 'Lesotho',
                'currency_code' => CurrencyData::LSL,
            ],
            [
                'code' => self::LBR,
                'name' => 'Liberia',
                'currency_code' => CurrencyData::LRD,
            ],
            [
                'code' => self::LBY,
                'name' => 'Libya',
                'currency_code' => CurrencyData::LYD,
            ],
            [
                'code' => self::LIE,
                'name' => 'Liechtenstein',
                'currency_code' => CurrencyData::CHF,
            ],
            [
                'code' => self::LTU,
                'name' => 'Lithuania',
                'currency_code' => CurrencyData::EUR,
            ],
            [
                'code' => self::LUX,
                'name' => 'Luxembourg',
                'currency_code' => CurrencyData::EUR,
            ],
            [
                'code' => self::MAC,
                'name' => 'Macao',
                'currency_code' => CurrencyData::MOP,
            ],
            [
                'code' => self::MDG,
                'name' => 'Madagascar',
                'currency_code' => CurrencyData::MGA,
            ],
            [
                'code' => self::MWI,
                'name' => 'Malawi',
                'currency_code' => CurrencyData::MWK,
            ],
            [
                'code' => self::MYS,
                'name' => 'Malaysia',
                'currency_code' => CurrencyData::MYR,
            ],
            [
                'code' => self::MDV,
                'name' => 'Maldives',
                'currency_code' => CurrencyData::MVR,
            ],
            [
                'code' => self::MLI,
                'name' => 'Mali',
                'currency_code' => CurrencyData::XOF,
            ],
            [
                'code' => self::MLT,
                'name' => 'Malta',
                'currency_code' => CurrencyData::EUR,
            ],
            [
                'code' => self::MHL,
                'name' => 'Marshall Islands',
                'currency_code' => CurrencyData::USD,
            ],
            [
                'code' => self::MTQ,
                'name' => 'Martinique',
                'currency_code' => CurrencyData::EUR,
            ],
            [
                'code' => self::MRT,
                'name' => 'Mauritania',
                'currency_code' => CurrencyData::MRU,
            ],
            [
                'code' => self::MUS,
                'name' => 'Mauritius',
                'currency_code' => CurrencyData::MUR,
            ],
            [
                'code' => self::MYT,
                'name' => 'Mayotte',
                'currency_code' => CurrencyData::EUR,
            ],
            [
                'code' => self::MEX,
                'name' => 'Mexico',
                'currency_code' => CurrencyData::MXN,
            ],
            [
                'code' => self::FSM,
                'name' => 'Micronesia, Federated States of',
                'currency_code' => CurrencyData::USD,
            ],
            [
                'code' => self::MDA,
                'name' => 'Moldova, Republic of',
                'currency_code' => CurrencyData::MDL,
            ],
            [
                'code' => self::MCO,
                'name' => 'Monaco',
                'currency_code' => CurrencyData::EUR,
            ],
            [
                'code' => self::MNG,
                'name' => 'Mongolia',
                'currency_code' => CurrencyData::MNT,
            ],
            [
                'code' => self::MNE,
                'name' => 'Montenegro',
                'currency_code' => CurrencyData::EUR,
            ],
            [
                'code' => self::MSR,
                'name' => 'Montserrat',
                'currency_code' => CurrencyData::XCD,
            ],
            [
                'code' => self::MAR,
                'name' => 'Morocco',
                'currency_code' => CurrencyData::MAD,
            ],
            [
                'code' => self::MOZ,
                'name' => 'Mozambique',
                'currency_code' => CurrencyData::MZN,
            ],
            [
                'code' => self::MMR,
                'name' => 'Myanmar',
                'currency_code' => CurrencyData::MMK,
            ],
            [
                'code' => self::NAM,
                'name' => 'Namibia',
                'currency_code' => CurrencyData::NAD,
            ],
            [
                'code' => self::NRU,
                'name' => 'Nauru',
                'currency_code' => CurrencyData::AUD,
            ],
            [
                'code' => self::NPL,
                'name' => 'Nepal',
                'currency_code' => CurrencyData::NPR,
            ],
            [
                'code' => self::NLD,
                'name' => 'Netherlands',
                'currency_code' => CurrencyData::EUR,
            ],
            [
                'code' => self::NCL,
                'name' => 'New Caledonia',
                'currency_code' => CurrencyData::XPF,
            ],
            [
                'code' => self::NZL,
                'name' => 'New Zealand',
                'currency_code' => CurrencyData::NZD,
            ],
            [
                'code' => self::NIC,
                'name' => 'Nicaragua',
                'currency_code' => CurrencyData::NIO,
            ],
            [
                'code' => self::NER,
                'name' => 'Niger',
                'currency_code' => CurrencyData::XOF,
            ],
            [
                'code' => self::NGA,
                'name' => 'Nigeria',
                'currency_code' => CurrencyData::NGN,
            ],
            [
                'code' => self::NIU,
                'name' => 'Niue',
                'currency_code' => CurrencyData::NZD,
            ],
            [
                'code' => self::NFK,
                'name' => 'Norfolk Island',
                'currency_code' => CurrencyData::AUD,
            ],
            [
                'code' => self::MKD,
                'name' => 'North Macedonia',
                'currency_code' => CurrencyData::MKD,
            ],
            [
                'code' => self::MNP,
                'name' => 'Northern Mariana Islands',
                'currency_code' => CurrencyData::USD,
            ],
            [
                'code' => self::NOR,
                'name' => 'Norway',
                'currency_code' => CurrencyData::NOK,
            ],
            [
                'code' => self::OMN,
                'name' => 'Oman',
                'currency_code' => CurrencyData::OMR,
            ],
            [
                'code' => self::PAK,
                'name' => 'Pakistan',
                'currency_code' => CurrencyData::PKR,
            ],
            [
                'code' => self::PLW,
                'name' => 'Palau',
                'currency_code' => CurrencyData::USD,
            ],
            [
                'code' => self::PSE,
                'name' => 'Palestine, State of',
                'currency_code' => CurrencyData::ILS,
            ],
            [
                'code' => self::PAN,
                'name' => 'Panama',
                'currency_code' => CurrencyData::PAB,
            ],
            [
                'code' => self::PNG,
                'name' => 'Papua New Guinea',
                'currency_code' => CurrencyData::PGK,
            ],
            [
                'code' => self::PRY,
                'name' => 'Paraguay',
                'currency_code' => CurrencyData::PYG,
            ],
            [
                'code' => self::PER,
                'name' => 'Peru',
                'currency_code' => CurrencyData::PEN,
            ],
            [
                'code' => self::PHL,
                'name' => 'Philippines',
                'currency_code' => CurrencyData::PHP,
            ],
            [
                'code' => self::PCN,
                'name' => 'Pitcairn',
                'currency_code' => CurrencyData::NZD,
            ],
            [
                'code' => self::POL,
                'name' => 'Poland',
                'currency_code' => CurrencyData::PLN,
            ],
            [
                'code' => self::PRT,
                'name' => 'Portugal',
                'currency_code' => CurrencyData::EUR,
            ],
            [
                'code' => self::PRI,
                'name' => 'Puerto Rico',
                'currency_code' => CurrencyData::USD,
            ],
            [
                'code' => self::QAT,
                'name' => 'Qatar',
                'currency_code' => CurrencyData::QAR,
            ],
            [
                'code' => self::REU,
                'name' => 'Réunion',
                'currency_code' => CurrencyData::EUR,
            ],
            [
                'code' => self::ROU,
                'name' => 'Romania',
                'currency_code' => CurrencyData::RON,
            ],
            [
                'code' => self::RUS,
                'name' => 'Russian Federation',
                'currency_code' => CurrencyData::RUB,
            ],
            [
                'code' => self::RWA,
                'name' => 'Rwanda',
                'currency_code' => CurrencyData::RWF,
            ],
            [
                'code' => self::BLM,
                'name' => 'Saint Barthélemy',
                'currency_code' => CurrencyData::EUR,
            ],
            [
                'code' => self::SHN,
                'name' => 'Saint Helena, Ascension and Tristan da Cunha',
                'currency_code' => CurrencyData::SHP,
            ],
            [
                'code' => self::KNA,
                'name' => 'Saint Kitts and Nevis',
                'currency_code' => CurrencyData::XCD,
            ],
            [
                'code' => self::LCA,
                'name' => 'Saint Lucia',
                'currency_code' => CurrencyData::XCD,
            ],
            [
                'code' => self::MAF,
                'name' => 'Saint Martin (French part)',
                'currency_code' => CurrencyData::EUR,
            ],
            [
                'code' => self::SPM,
                'name' => 'Saint Pierre and Miquelon',
                'currency_code' => CurrencyData::EUR,
            ],
            [
                'code' => self::VCT,
                'name' => 'Saint Vincent and the Grenadines',
                'currency_code' => CurrencyData::XCD,
            ],
            [
                'code' => self::WSM,
                'name' => 'Samoa',
                'currency_code' => CurrencyData::WST,
            ],
            [
                'code' => self::SMR,
                'name' => 'San Marino',
                'currency_code' => CurrencyData::EUR,
            ],
            [
                'code' => self::STP,
                'name' => 'Sao Tome and Principe',
                'currency_code' => CurrencyData::STN,
            ],
            [
                'code' => self::SAU,
                'name' => 'Saudi Arabia',
                'currency_code' => CurrencyData::SAR,
            ],
            [
                'code' => self::SEN,
                'name' => 'Senegal',
                'currency_code' => CurrencyData::XOF,
            ],
            [
                'code' => self::SRB,
                'name' => 'Serbia',
                'currency_code' => CurrencyData::RSD,
            ],
            [
                'code' => self::SYC,
                'name' => 'Seychelles',
                'currency_code' => CurrencyData::SCR,
            ],
            [
                'code' => self::SLE,
                'name' => 'Sierra Leone',
                'currency_code' => null,
            ],
            [
                'code' => self::SGP,
                'name' => 'Singapore',
                'currency_code' => CurrencyData::SGD,
            ],
            [
                'code' => self::SXM,
                'name' => 'Sint Maarten (Dutch part)',
                'currency_code' => CurrencyData::ANG,
            ],
            [
                'code' => self::SVK,
                'name' => 'Slovakia',
                'currency_code' => CurrencyData::EUR,
            ],
            [
                'code' => self::SVN,
                'name' => 'Slovenia',
                'currency_code' => CurrencyData::EUR,
            ],
            [
                'code' => self::SLB,
                'name' => 'Solomon Islands',
                'currency_code' => CurrencyData::SBD,
            ],
            [
                'code' => self::SOM,
                'name' => 'Somalia',
                'currency_code' => CurrencyData::SOS,
            ],
            [
                'code' => self::ZAF,
                'name' => 'South Africa',
                'currency_code' => CurrencyData::ZAR,
            ],
            [
                'code' => self::SGS,
                'name' => 'South Georgia and the South Sandwich Islands',
                'currency_code' => CurrencyData::GBP,
            ],
            [
                'code' => self::SSD,
                'name' => 'South Sudan',
                'currency_code' => CurrencyData::SSP,
            ],
            [
                'code' => self::ESP,
                'name' => 'Spain',
                'currency_code' => CurrencyData::EUR,
            ],
            [
                'code' => self::LKA,
                'name' => 'Sri Lanka',
                'currency_code' => CurrencyData::LKR,
            ],
            [
                'code' => self::SDN,
                'name' => 'Sudan',
                'currency_code' => CurrencyData::SDG,
            ],
            [
                'code' => self::SUR,
                'name' => 'Suriname',
                'currency_code' => CurrencyData::SRD,
            ],
            [
                'code' => self::SJM,
                'name' => 'Svalbard and Jan Mayen',
                'currency_code' => CurrencyData::NOK,
            ],
            [
                'code' => self::SWE,
                'name' => 'Sweden',
                'currency_code' => CurrencyData::SEK,
            ],
            [
                'code' => self::CHE,
                'name' => 'Switzerland',
                'currency_code' => CurrencyData::CHF,
            ],
            [
                'code' => self::SYR,
                'name' => 'Syrian Arab Republic',
                'currency_code' => CurrencyData::SYP,
            ],
            [
                'code' => self::TWN,
                'name' => 'Taiwan, Province of China',
                'currency_code' => CurrencyData::TWD,
            ],
            [
                'code' => self::TJK,
                'name' => 'Tajikistan',
                'currency_code' => CurrencyData::TJS,
            ],
            [
                'code' => self::TZA,
                'name' => 'Tanzania, United Republic of',
                'currency_code' => CurrencyData::TZS,
            ],
            [
                'code' => self::THA,
                'name' => 'Thailand',
                'currency_code' => CurrencyData::THB,
            ],
            [
                'code' => self::TLS,
                'name' => 'Timor-Leste',
                'currency_code' => CurrencyData::USD,
            ],
            [
                'code' => self::TGO,
                'name' => 'Togo',
                'currency_code' => CurrencyData::XOF,
            ],
            [
                'code' => self::TKL,
                'name' => 'Tokelau',
                'currency_code' => CurrencyData::NZD,
            ],
            [
                'code' => self::TON,
                'name' => 'Tonga',
                'currency_code' => CurrencyData::TOP,
            ],
            [
                'code' => self::TTO,
                'name' => 'Trinidad and Tobago',
                'currency_code' => CurrencyData::TTD,
            ],
            [
                'code' => self::TUN,
                'name' => 'Tunisia',
                'currency_code' => CurrencyData::TND,
            ],
            [
                'code' => self::TUR,
                'name' => 'Turkey',
                'currency_code' => CurrencyData::TRY,
            ],
            [
                'code' => self::TKM,
                'name' => 'Turkmenistan',
                'currency_code' => CurrencyData::TMT,
            ],
            [
                'code' => self::TCA,
                'name' => 'Turks and Caicos Islands',
                'currency_code' => CurrencyData::USD,
            ],
            [
                'code' => self::TUV,
                'name' => 'Tuvalu',
                'currency_code' => CurrencyData::AUD,
            ],
            [
                'code' => self::UGA,
                'name' => 'Uganda',
                'currency_code' => CurrencyData::UGX,
            ],
            [
                'code' => self::UKR,
                'name' => 'Ukraine',
                'currency_code' => CurrencyData::UAH,
            ],
            [
                'code' => self::ARE,
                'name' => 'United Arab Emirates',
                'currency_code' => CurrencyData::AED,
            ],
            [
                'code' => self::GBR,
                'name' => 'United Kingdom',
                'currency_code' => CurrencyData::GBP,
            ],
            [
                'code' => self::USA,
                'name' => 'United States',
                'currency_code' => CurrencyData::USD,
            ],
            [
                'code' => self::UMI,
                'name' => 'United States Minor Outlying Islands',
                'currency_code' => CurrencyData::USD,
            ],
            [
                'code' => self::URY,
                'name' => 'Uruguay',
                'currency_code' => CurrencyData::UYU,
            ],
            [
                'code' => self::UZB,
                'name' => 'Uzbekistan',
                'currency_code' => CurrencyData::UZS,
            ],
            [
                'code' => self::VUT,
                'name' => 'Vanuatu',
                'currency_code' => CurrencyData::VUV,
            ],
            [
                'code' => self::VEN,
                'name' => 'Venezuela, Bolivarian Republic of',
                'currency_code' => CurrencyData::VES,
            ],
            [
                'code' => self::VNM,
                'name' => 'Viet Nam',
                'currency_code' => CurrencyData::VND,
            ],
            [
                'code' => self::VGB,
                'name' => 'Virgin Islands, British',
                'currency_code' => CurrencyData::USD,
            ],
            [
                'code' => self::VIR,
                'name' => 'Virgin Islands, U.S.',
                'currency_code' => CurrencyData::USD,
            ],
            [
                'code' => self::WLF,
                'name' => 'Wallis and Futuna',
                'currency_code' => CurrencyData::XPF,
            ],
            [
                'code' => self::ESH,
                'name' => 'Western Sahara',
                'currency_code' => CurrencyData::MAD,
            ],
            [
                'code' => self::YEM,
                'name' => 'Yemen',
                'currency_code' => CurrencyData::YER,
            ],
            [
                'code' => self::ZMB,
                'name' => 'Zambia',
                'currency_code' => CurrencyData::ZMW,
            ],
            [
                'code' => self::ZWE,
                'name' => 'Zimbabwe',
                'currency_code' => CurrencyData::ZWL,
            ],
            [
                'code' => self::EU,
                'name' => 'European Union',
                'currency_code' => CurrencyData::EUR,
            ],
        ];
    }
}
