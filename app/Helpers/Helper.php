<?php

namespace App\Helpers;


class Helper
{
    public static function checkVoucher(string $voucherCode): array
    {
        $voucher = strtoupper($voucherCode);
        $getDiscount = [];
        if(array_key_exists($voucher,LIST_VOUCHER)) {
            $getDiscount = LIST_VOUCHER[$voucher];
        }
        return $getDiscount;
    }


}
