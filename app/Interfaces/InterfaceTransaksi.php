<?php

namespace App\Interfaces;

use App\Models\Transaksi;

interface InterfaceTransaksi
{
    public function create($type,$request);
    public function getData($request);
    public function getDetail($id);
    public function update($type,$request);
}
