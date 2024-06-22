<?php

namespace ZikraAuliya\FlipConnector\Enums;

enum BankCode: string
{
    case bni = 'bni';
    case bri = 'bri';
    case bca = 'bca';
    case mandiri = 'mandiri';
    case cimb = 'cimb';
    case tabungan_pensiunan_nasional = 'tabungan_pensiunan_nasional';
    case dbs = 'dbs';
    case permata = 'permata';
    case muamalat = 'muamalat';
    case danamon = 'danamon';
    case bsm = 'bsm';
    case ovo = 'ovo';
    case qris = 'qris';
    case shopeepay_app = 'shopeepay_app';
    case linkaja = 'linkaja';
    case linkaja_app = 'linkaja_app';
    case dana = 'dana';

    public function description(): ?string
    {
        return match ($this->value) {
            'bni' => 'BNI',
            'bri' => 'BRI',
            'bca' => 'BCA',
            'mandiri' => 'Mandiri',
            'cimb' => 'CIMB Niaga',
            'tabungan_pensiunan_nasional' => 'BTPN/Jenius/BTPN Wow!',
            'dbs' => 'DBS Indonesia',
            'permata' => 'Permata',
            'muamalat' => 'Muamalat',
            'danamon' => 'Danamon',
            'bsm' => 'BSI (Bank Syariah Indonesia)',
            'ovo' => 'OVO',
            'qris' => 'QRIS',
            'shopeepay_app' => 'ShopeePay',
            'linkaja' => 'LinkAja',
            'linkaja_app' => 'LinkAja App',
            'dana' => 'Dana',
        };
    }
}
