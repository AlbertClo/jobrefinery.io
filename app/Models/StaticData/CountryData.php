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
                'currency_code' => 'AFN',
            ],
            [
                'code' => self::ALA,
                'name' => 'Åland Islands',
                'currency_code' => CurrencyData::EUR,
            ],
            [
                'code' => self::ALB,
                'name' => 'Albania',
                'currency_code' => 'ALL',
            ],
            [
                'code' => self::DZA,
                'name' => 'Algeria',
                'currency_code' => 'DZD',
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
                'currency_code' => 'AOA',
            ],
            [
                'code' => self::AIA,
                'name' => 'Anguilla',
                'currency_code' => 'XCD',
            ],
            [
                'code' => self::ATA,
                'name' => 'Antarctica',
                'currency_code' => null,
            ],
            [
                'code' => self::ATG,
                'name' => 'Antigua and Barbuda',
                'currency_code' => 'XCD',
            ],
            [
                'code' => self::ARG,
                'name' => 'Argentina',
                'currency_code' => 'ARS',
            ],
            [
                'code' => self::ARM,
                'name' => 'Armenia',
                'currency_code' => 'AMD',
            ],
            [
                'code' => self::ABW,
                'name' => 'Aruba',
                'currency_code' => 'AWG',
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
                'currency_code' => 'AZN',
            ],
            [
                'code' => self::BHS,
                'name' => 'Bahamas',
                'currency_code' => 'BSD',
            ],
            [
                'code' => self::BHR,
                'name' => 'Bahrain',
                'currency_code' => 'BHD',
            ],
            [
                'code' => self::BGD,
                'name' => 'Bangladesh',
                'currency_code' => 'BDT',
            ],
            [
                'code' => self::BRB,
                'name' => 'Barbados',
                'currency_code' => 'BBD',
            ],
            [
                'code' => self::BLR,
                'name' => 'Belarus',
                'currency_code' => 'BYN',
            ],
            [
                'code' => self::BEL,
                'name' => 'Belgium',
                'currency_code' => CurrencyData::EUR,
            ],
            [
                'code' => self::BLZ,
                'name' => 'Belize',
                'currency_code' => 'BZD',
            ],
            [
                'code' => self::BEN,
                'name' => 'Benin',
                'currency_code' => 'XOF',
            ],
            [
                'code' => self::BMU,
                'name' => 'Bermuda',
                'currency_code' => 'BMD',
            ],
            [
                'code' => self::BTN,
                'name' => 'Bhutan',
                'currency_code' => 'BTN',
            ],
            [
                'code' => self::BOL,
                'name' => 'Bolivia',
                'currency_code' => 'BOB',
            ],
            [
                'code' => self::BES,
                'name' => 'Bonaire, Sint Eustatius and Saba',
                'currency_code' => CurrencyData::USD,
            ],
            [
                'code' => self::BIH,
                'name' => 'Bosnia and Herzegovina',
                'currency_code' => 'BAM',
            ],
            [
                'code' => self::BWA,
                'name' => 'Botswana',
                'currency_code' => 'BWP',
            ],
            [
                'code' => self::BVT,
                'name' => 'Bouvet Island',
                'currency_code' => 'NOK',
            ],
            [
                'code' => self::BRA,
                'name' => 'Brazil',
                'currency_code' => 'BRL',
            ],
            [
                'code' => self::IOT,
                'name' => 'British Indian Ocean Territory',
                'currency_code' => CurrencyData::USD,
            ],
            [
                'code' => self::BRN,
                'name' => 'Brunei Darussalam',
                'currency_code' => 'BND',
            ],
            [
                'code' => self::BGR,
                'name' => 'Bulgaria',
                'currency_code' => 'BGN',
            ],
            [
                'code' => self::BFA,
                'name' => 'Burkina Faso',
                'currency_code' => 'XOF',
            ],
            [
                'code' => self::BDI,
                'name' => 'Burundi',
                'currency_code' => 'BIF',
            ],
            [
                'code' => self::CPV,
                'name' => 'Cabo Verde',
                'currency_code' => 'CVE',
            ],
            [
                'code' => self::KHM,
                'name' => 'Cambodia',
                'currency_code' => 'KHR',
            ],
            [
                'code' => self::CMR,
                'name' => 'Cameroon',
                'currency_code' => 'XAF',
            ],
            [
                'code' => self::CAN,
                'name' => 'Canada',
                'currency_code' => 'CAD',
            ],
            [
                'code' => self::CYM,
                'name' => 'Cayman Islands',
                'currency_code' => 'KYD',
            ],
            [
                'code' => self::CAF,
                'name' => 'Central African Republic',
                'currency_code' => 'XAF',
            ],
            [
                'code' => self::TCD,
                'name' => 'Chad',
                'currency_code' => 'XAF',
            ],
            [
                'code' => self::CHL,
                'name' => 'Chile',
                'currency_code' => 'CLP',
            ],
            [
                'code' => self::CHN,
                'name' => 'China',
                'currency_code' => 'CNY',
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
                'currency_code' => 'COP',
            ],
            [
                'code' => self::COM,
                'name' => 'Comoros',
                'currency_code' => 'KMF',
            ],
            [
                'code' => self::COD,
                'name' => 'Congo, Democratic Republic of the',
                'currency_code' => 'CDF',
            ],
            [
                'code' => self::COG,
                'name' => 'Congo',
                'currency_code' => 'XAF',
            ],
            [
                'code' => self::COK,
                'name' => 'Cook Islands',
                'currency_code' => 'NZD',
            ],
            [
                'code' => self::CRI,
                'name' => 'Costa Rica',
                'currency_code' => 'CRC',
            ],
            [
                'code' => self::CIV,
                'name' => 'Côte d\'Ivoire',
                'currency_code' => 'XOF',
            ],
            [
                'code' => self::HRV,
                'name' => 'Croatia',
                'currency_code' => CurrencyData::EUR,
            ],
            [
                'code' => self::CUB,
                'name' => 'Cuba',
                'currency_code' => 'CUP',
            ],
            [
                'code' => self::CUW,
                'name' => 'Curaçao',
                'currency_code' => 'ANG',
            ],
            [
                'code' => self::CYP,
                'name' => 'Cyprus',
                'currency_code' => CurrencyData::EUR,
            ],
            [
                'code' => self::CZE,
                'name' => 'Czech Republic',
                'currency_code' => 'CZK',
            ],
            [
                'code' => self::DNK,
                'name' => 'Denmark',
                'currency_code' => 'DKK',
            ],
            [
                'code' => self::DJI,
                'name' => 'Djibouti',
                'currency_code' => 'DJF',
            ],
            [
                'code' => self::DMA,
                'name' => 'Dominica',
                'currency_code' => 'XCD',
            ],
            [
                'code' => self::DOM,
                'name' => 'Dominican Republic',
                'currency_code' => 'DOP',
            ],
            [
                'code' => self::ECU,
                'name' => 'Ecuador',
                'currency_code' => CurrencyData::USD,
            ],
            [
                'code' => self::EGY,
                'name' => 'Egypt',
                'currency_code' => 'EGP',
            ],
            [
                'code' => self::SLV,
                'name' => 'El Salvador',
                'currency_code' => CurrencyData::USD,
            ],
            [
                'code' => self::GNQ,
                'name' => 'Equatorial Guinea',
                'currency_code' => 'XAF',
            ],
            [
                'code' => self::ERI,
                'name' => 'Eritrea',
                'currency_code' => 'ERN',
            ],
            [
                'code' => self::EST,
                'name' => 'Estonia',
                'currency_code' => CurrencyData::EUR,
            ],
            [
                'code' => self::SWZ,
                'name' => 'Eswatini',
                'currency_code' => 'SZL',
            ],
            [
                'code' => self::ETH,
                'name' => 'Ethiopia',
                'currency_code' => 'ETB',
            ],
            [
                'code' => self::FLK,
                'name' => 'Falkland Islands (Malvinas)',
                'currency_code' => 'FKP',
            ],
            [
                'code' => self::FRO,
                'name' => 'Faroe Islands',
                'currency_code' => 'DKK',
            ],
            [
                'code' => self::FJI,
                'name' => 'Fiji',
                'currency_code' => 'FJD',
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
                'currency_code' => 'XPF',
            ],
            [
                'code' => self::ATF,
                'name' => 'French Southern Territories',
                'currency_code' => CurrencyData::EUR,
            ],
            [
                'code' => self::GAB,
                'name' => 'Gabon',
                'currency_code' => 'XAF',
            ],
            [
                'code' => self::GMB,
                'name' => 'Gambia',
                'currency_code' => 'GMD',
            ],
            [
                'code' => self::GEO,
                'name' => 'Georgia',
                'currency_code' => 'GEL',
            ],
            [
                'code' => self::DEU,
                'name' => 'Germany',
                'currency_code' => CurrencyData::EUR,
            ],
            [
                'code' => self::GHA,
                'name' => 'Ghana',
                'currency_code' => 'GHS',
            ],
            [
                'code' => self::GIB,
                'name' => 'Gibraltar',
                'currency_code' => 'GIP',
            ],
            [
                'code' => self::GRC,
                'name' => 'Greece',
                'currency_code' => CurrencyData::EUR,
            ],
            [
                'code' => self::GRL,
                'name' => 'Greenland',
                'currency_code' => 'DKK',
            ],
            [
                'code' => self::GRD,
                'name' => 'Grenada',
                'currency_code' => 'XCD',
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
                'currency_code' => 'GTQ',
            ],
            [
                'code' => self::GGY,
                'name' => 'Guernsey',
                'currency_code' => CurrencyData::GBP,
            ],
            [
                'code' => self::GIN,
                'name' => 'Guinea',
                'currency_code' => 'GNF',
            ],
            [
                'code' => self::GNB,
                'name' => 'Guinea-Bissau',
                'currency_code' => 'XOF',
            ],
            [
                'code' => self::GUY,
                'name' => 'Guyana',
                'currency_code' => 'GYD',
            ],
            [
                'code' => self::HTI,
                'name' => 'Haiti',
                'currency_code' => 'HTG',
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
                'currency_code' => 'HNL',
            ],
            [
                'code' => self::HKG,
                'name' => 'Hong Kong',
                'currency_code' => 'HKD',
            ],
            [
                'code' => self::HUN,
                'name' => 'Hungary',
                'currency_code' => 'HUF',
            ],
            [
                'code' => self::ISL,
                'name' => 'Iceland',
                'currency_code' => 'ISK',
            ],
            [
                'code' => self::IND,
                'name' => 'India',
                'currency_code' => 'INR',
            ],
            [
                'code' => self::IDN,
                'name' => 'Indonesia',
                'currency_code' => 'IDR',
            ],
            [
                'code' => self::IRN,
                'name' => 'Iran, Islamic Republic of',
                'currency_code' => 'IRR',
            ],
            [
                'code' => self::IRQ,
                'name' => 'Iraq',
                'currency_code' => 'IQD',
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
                'currency_code' => 'ILS',
            ],
            [
                'code' => self::ITA,
                'name' => 'Italy',
                'currency_code' => CurrencyData::EUR,
            ],
            [
                'code' => self::JAM,
                'name' => 'Jamaica',
                'currency_code' => 'JMD',
            ],
            [
                'code' => self::JPN,
                'name' => 'Japan',
                'currency_code' => 'JPY',
            ],
            [
                'code' => self::JEY,
                'name' => 'Jersey',
                'currency_code' => CurrencyData::GBP,
            ],
            [
                'code' => self::JOR,
                'name' => 'Jordan',
                'currency_code' => 'JOD',
            ],
            [
                'code' => self::KAZ,
                'name' => 'Kazakhstan',
                'currency_code' => 'KZT',
            ],
            [
                'code' => self::KEN,
                'name' => 'Kenya',
                'currency_code' => 'KES',
            ],
            [
                'code' => self::KIR,
                'name' => 'Kiribati',
                'currency_code' => CurrencyData::AUD,
            ],
            [
                'code' => self::PRK,
                'name' => 'Korea, Democratic People\'s Republic of',
                'currency_code' => 'KPW',
            ],
            [
                'code' => self::KOR,
                'name' => 'Korea, Republic of',
                'currency_code' => 'KRW',
            ],
            [
                'code' => self::KWT,
                'name' => 'Kuwait',
                'currency_code' => 'KWD',
            ],
            [
                'code' => self::KGZ,
                'name' => 'Kyrgyzstan',
                'currency_code' => 'KGS',
            ],
            [
                'code' => self::LAO,
                'name' => 'Lao People\'s Democratic Republic',
                'currency_code' => 'LAK',
            ],
            [
                'code' => self::LVA,
                'name' => 'Latvia',
                'currency_code' => CurrencyData::EUR,
            ],
            [
                'code' => self::LBN,
                'name' => 'Lebanon',
                'currency_code' => 'LBP',
            ],
            [
                'code' => self::LSO,
                'name' => 'Lesotho',
                'currency_code' => 'LSL',
            ],
            [
                'code' => self::LBR,
                'name' => 'Liberia',
                'currency_code' => 'LRD',
            ],
            [
                'code' => self::LBY,
                'name' => 'Libya',
                'currency_code' => 'LYD',
            ],
            [
                'code' => self::LIE,
                'name' => 'Liechtenstein',
                'currency_code' => 'CHF',
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
                'currency_code' => 'MOP',
            ],
            [
                'code' => self::MDG,
                'name' => 'Madagascar',
                'currency_code' => 'MGA',
            ],
            [
                'code' => self::MWI,
                'name' => 'Malawi',
                'currency_code' => 'MWK',
            ],
            [
                'code' => self::MYS,
                'name' => 'Malaysia',
                'currency_code' => 'MYR',
            ],
            [
                'code' => self::MDV,
                'name' => 'Maldives',
                'currency_code' => 'MVR',
            ],
            [
                'code' => self::MLI,
                'name' => 'Mali',
                'currency_code' => 'XOF',
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
                'currency_code' => 'MRU',
            ],
            [
                'code' => self::MUS,
                'name' => 'Mauritius',
                'currency_code' => 'MUR',
            ],
            [
                'code' => self::MYT,
                'name' => 'Mayotte',
                'currency_code' => CurrencyData::EUR,
            ],
            [
                'code' => self::MEX,
                'name' => 'Mexico',
                'currency_code' => 'MXN',
            ],
            [
                'code' => self::FSM,
                'name' => 'Micronesia, Federated States of',
                'currency_code' => CurrencyData::USD,
            ],
            [
                'code' => self::MDA,
                'name' => 'Moldova, Republic of',
                'currency_code' => 'MDL',
            ],
            [
                'code' => self::MCO,
                'name' => 'Monaco',
                'currency_code' => CurrencyData::EUR,
            ],
            [
                'code' => self::MNG,
                'name' => 'Mongolia',
                'currency_code' => 'MNT',
            ],
            [
                'code' => self::MNE,
                'name' => 'Montenegro',
                'currency_code' => CurrencyData::EUR,
            ],
            [
                'code' => self::MSR,
                'name' => 'Montserrat',
                'currency_code' => 'XCD',
            ],
            [
                'code' => self::MAR,
                'name' => 'Morocco',
                'currency_code' => 'MAD',
            ],
            [
                'code' => self::MOZ,
                'name' => 'Mozambique',
                'currency_code' => 'MZN',
            ],
            [
                'code' => self::MMR,
                'name' => 'Myanmar',
                'currency_code' => 'MMK',
            ],
            [
                'code' => self::NAM,
                'name' => 'Namibia',
                'currency_code' => 'NAD',
            ],
            [
                'code' => self::NRU,
                'name' => 'Nauru',
                'currency_code' => CurrencyData::AUD,
            ],
            [
                'code' => self::NPL,
                'name' => 'Nepal',
                'currency_code' => 'NPR',
            ],
            [
                'code' => self::NLD,
                'name' => 'Netherlands',
                'currency_code' => CurrencyData::EUR,
            ],
            [
                'code' => self::NCL,
                'name' => 'New Caledonia',
                'currency_code' => 'XPF',
            ],
            [
                'code' => self::NZL,
                'name' => 'New Zealand',
                'currency_code' => 'NZD',
            ],
            [
                'code' => self::NIC,
                'name' => 'Nicaragua',
                'currency_code' => 'NIO',
            ],
            [
                'code' => self::NER,
                'name' => 'Niger',
                'currency_code' => 'XOF',
            ],
            [
                'code' => self::NGA,
                'name' => 'Nigeria',
                'currency_code' => 'NGN',
            ],
            [
                'code' => self::NIU,
                'name' => 'Niue',
                'currency_code' => 'NZD',
            ],
            [
                'code' => self::NFK,
                'name' => 'Norfolk Island',
                'currency_code' => CurrencyData::AUD,
            ],
            [
                'code' => self::MKD,
                'name' => 'North Macedonia',
                'currency_code' => 'MKD',
            ],
            [
                'code' => self::MNP,
                'name' => 'Northern Mariana Islands',
                'currency_code' => CurrencyData::USD,
            ],
            [
                'code' => self::NOR,
                'name' => 'Norway',
                'currency_code' => 'NOK',
            ],
            [
                'code' => self::OMN,
                'name' => 'Oman',
                'currency_code' => 'OMR',
            ],
            [
                'code' => self::PAK,
                'name' => 'Pakistan',
                'currency_code' => 'PKR',
            ],
            [
                'code' => self::PLW,
                'name' => 'Palau',
                'currency_code' => CurrencyData::USD,
            ],
            [
                'code' => self::PSE,
                'name' => 'Palestine, State of',
                'currency_code' => 'ILS',
            ],
            [
                'code' => self::PAN,
                'name' => 'Panama',
                'currency_code' => 'PAB',
            ],
            [
                'code' => self::PNG,
                'name' => 'Papua New Guinea',
                'currency_code' => 'PGK',
            ],
            [
                'code' => self::PRY,
                'name' => 'Paraguay',
                'currency_code' => 'PYG',
            ],
            [
                'code' => self::PER,
                'name' => 'Peru',
                'currency_code' => 'PEN',
            ],
            [
                'code' => self::PHL,
                'name' => 'Philippines',
                'currency_code' => 'PHP',
            ],
            [
                'code' => self::PCN,
                'name' => 'Pitcairn',
                'currency_code' => 'NZD',
            ],
            [
                'code' => self::POL,
                'name' => 'Poland',
                'currency_code' => 'PLN',
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
                'currency_code' => 'QAR',
            ],
            [
                'code' => self::REU,
                'name' => 'Réunion',
                'currency_code' => CurrencyData::EUR,
            ],
            [
                'code' => self::ROU,
                'name' => 'Romania',
                'currency_code' => 'RON',
            ],
            [
                'code' => self::RUS,
                'name' => 'Russian Federation',
                'currency_code' => 'RUB',
            ],
            [
                'code' => self::RWA,
                'name' => 'Rwanda',
                'currency_code' => 'RWF',
            ],
            [
                'code' => self::BLM,
                'name' => 'Saint Barthélemy',
                'currency_code' => CurrencyData::EUR,
            ],
            [
                'code' => self::SHN,
                'name' => 'Saint Helena, Ascension and Tristan da Cunha',
                'currency_code' => 'SHP',
            ],
            [
                'code' => self::KNA,
                'name' => 'Saint Kitts and Nevis',
                'currency_code' => 'XCD',
            ],
            [
                'code' => self::LCA,
                'name' => 'Saint Lucia',
                'currency_code' => 'XCD',
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
                'currency_code' => 'XCD',
            ],
            [
                'code' => self::WSM,
                'name' => 'Samoa',
                'currency_code' => 'WST',
            ],
            [
                'code' => self::SMR,
                'name' => 'San Marino',
                'currency_code' => CurrencyData::EUR,
            ],
            [
                'code' => self::STP,
                'name' => 'Sao Tome and Principe',
                'currency_code' => 'STN',
            ],
            [
                'code' => self::SAU,
                'name' => 'Saudi Arabia',
                'currency_code' => 'SAR',
            ],
            [
                'code' => self::SEN,
                'name' => 'Senegal',
                'currency_code' => 'XOF',
            ],
            [
                'code' => self::SRB,
                'name' => 'Serbia',
                'currency_code' => 'RSD',
            ],
            [
                'code' => self::SYC,
                'name' => 'Seychelles',
                'currency_code' => 'SCR',
            ],
            [
                'code' => self::SLE,
                'name' => 'Sierra Leone',
                'currency_code' => null,
            ],
            [
                'code' => self::SGP,
                'name' => 'Singapore',
                'currency_code' => 'SGD',
            ],
            [
                'code' => self::SXM,
                'name' => 'Sint Maarten (Dutch part)',
                'currency_code' => 'ANG',
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
                'currency_code' => 'SBD',
            ],
            [
                'code' => self::SOM,
                'name' => 'Somalia',
                'currency_code' => 'SOS',
            ],
            [
                'code' => self::ZAF,
                'name' => 'South Africa',
                'currency_code' => 'ZAR',
            ],
            [
                'code' => self::SGS,
                'name' => 'South Georgia and the South Sandwich Islands',
                'currency_code' => CurrencyData::GBP,
            ],
            [
                'code' => self::SSD,
                'name' => 'South Sudan',
                'currency_code' => 'SSP',
            ],
            [
                'code' => self::ESP,
                'name' => 'Spain',
                'currency_code' => CurrencyData::EUR,
            ],
            [
                'code' => self::LKA,
                'name' => 'Sri Lanka',
                'currency_code' => 'LKR',
            ],
            [
                'code' => self::SDN,
                'name' => 'Sudan',
                'currency_code' => 'SDG',
            ],
            [
                'code' => self::SUR,
                'name' => 'Suriname',
                'currency_code' => 'SRD',
            ],
            [
                'code' => self::SJM,
                'name' => 'Svalbard and Jan Mayen',
                'currency_code' => 'NOK',
            ],
            [
                'code' => self::SWE,
                'name' => 'Sweden',
                'currency_code' => 'SEK',
            ],
            [
                'code' => self::CHE,
                'name' => 'Switzerland',
                'currency_code' => 'CHF',
            ],
            [
                'code' => self::SYR,
                'name' => 'Syrian Arab Republic',
                'currency_code' => 'SYP',
            ],
            [
                'code' => self::TWN,
                'name' => 'Taiwan, Province of China',
                'currency_code' => 'TWD',
            ],
            [
                'code' => self::TJK,
                'name' => 'Tajikistan',
                'currency_code' => 'TJS',
            ],
            [
                'code' => self::TZA,
                'name' => 'Tanzania, United Republic of',
                'currency_code' => 'TZS',
            ],
            [
                'code' => self::THA,
                'name' => 'Thailand',
                'currency_code' => 'THB',
            ],
            [
                'code' => self::TLS,
                'name' => 'Timor-Leste',
                'currency_code' => CurrencyData::USD,
            ],
            [
                'code' => self::TGO,
                'name' => 'Togo',
                'currency_code' => 'XOF',
            ],
            [
                'code' => self::TKL,
                'name' => 'Tokelau',
                'currency_code' => 'NZD',
            ],
            [
                'code' => self::TON,
                'name' => 'Tonga',
                'currency_code' => 'TOP',
            ],
            [
                'code' => self::TTO,
                'name' => 'Trinidad and Tobago',
                'currency_code' => 'TTD',
            ],
            [
                'code' => self::TUN,
                'name' => 'Tunisia',
                'currency_code' => 'TND',
            ],
            [
                'code' => self::TUR,
                'name' => 'Turkey',
                'currency_code' => 'TRY',
            ],
            [
                'code' => self::TKM,
                'name' => 'Turkmenistan',
                'currency_code' => 'TMT',
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
                'currency_code' => 'UGX',
            ],
            [
                'code' => self::UKR,
                'name' => 'Ukraine',
                'currency_code' => 'UAH',
            ],
            [
                'code' => self::ARE,
                'name' => 'United Arab Emirates',
                'currency_code' => 'AED',
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
                'currency_code' => 'UYU',
            ],
            [
                'code' => self::UZB,
                'name' => 'Uzbekistan',
                'currency_code' => 'UZS',
            ],
            [
                'code' => self::VUT,
                'name' => 'Vanuatu',
                'currency_code' => 'VUV',
            ],
            [
                'code' => self::VEN,
                'name' => 'Venezuela, Bolivarian Republic of',
                'currency_code' => 'VES',
            ],
            [
                'code' => self::VNM,
                'name' => 'Viet Nam',
                'currency_code' => 'VND',
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
                'currency_code' => 'XPF',
            ],
            [
                'code' => self::ESH,
                'name' => 'Western Sahara',
                'currency_code' => 'MAD',
            ],
            [
                'code' => self::YEM,
                'name' => 'Yemen',
                'currency_code' => 'YER',
            ],
            [
                'code' => self::ZMB,
                'name' => 'Zambia',
                'currency_code' => 'ZMW',
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
