<?php
namespace App\Repository;

use App\Models\Transaksi;
use App\Interfaces\InterfaceTransaksi;
use App\Services\KurirService;
use Illuminate\Support\Facades\Validator;


class TransaksiRepository implements InterfaceTransaksi
{
    protected $JNE = "100000";
    protected $SiCepat = "120000";
    protected $JnT = "150000";
    public function getData($request)
    {
        $query = Transaksi::with('kurir');
        if($request->tanggal){
            $res = Transaksi::whereDate('created_at', $request->tanggal)->get();
        }
        $res = $query->get();
        return response()->json([
            'code' => 200,
            'valid' => true,
            'message' => 'success',
            'data' => $res
        ]);
    }
    public function getDetail($id)
    {
        $res = Transaksi::with('kurir')->where('id',$id)->first();
        return response()->json([
            'code' => 200,
            'valid' => true,
            'message' => 'success',
            'data' => $res
        ]);
    }
    public function create($type,$data)
    {
        $validation = Validator::make($data,Transaksi::$rules);
        if($validation->fails()){
            return [
                'code' => 400,
                'valid' => false,
                'message' =>$validation->errors()->first(),
            ];
        }
        try{
            if($type == 1){
                $data['harga'] = $this->JNE;
            }elseif($type == 2){
                $data['harga'] = $this->SiCepat;
            }elseif($type == 3){
                $data['harga'] = $this->JnT;
            }
            $res = Transaksi::create($data);
        }catch(\Exception $e){
            $res = $e->getMessage();
        }
        return response()->json([
            'code' => 200,
            'valid' => true,
            'message' => 'success',
        ]);
    }
    public function update($type,$request)
    {

    }
}
