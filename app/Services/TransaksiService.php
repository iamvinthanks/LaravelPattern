<?php

namespace App\Services;
use App\Repository\TransaksiRepository;
use Illuminate\Http\Request;
use App\Models\Transaksi;
use Illuminate\Support\Facades\Validator;
class TransaksiService
{
    protected $transactionRepository;

    public function __construct(TransaksiRepository $transactionRepository)
    {
        $this->transactionRepository = $transactionRepository;
    }
    public function getData($request)
    {
        $res = $this->transactionRepository->getData($request);
        return $res;
    }
    public function getDetail($id)
    {
        $res = $this->transactionRepository->getDetail($id);
        return $res;
    }
    public function create($request)
    {
        $type = $request->kurir_id;
        $data = [
            'nama_pengirim' => $request->nama_pengirim,
            'alamat_pengirim' => $request->alamat_pengirim,
            'nama_barang' => $request->nama_barang,
            'nama_penerima' => $request->nama_penerima,
            'alamat_penerima' => $request->alamat_penerima,
            'kurir_id' => $request->kurir_id,
        ];
        $res = $this->transactionRepository->create($type,$data);
        return $res;
    }

}
