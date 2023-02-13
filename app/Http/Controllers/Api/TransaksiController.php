<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\TransaksiService;

class TransaksiController extends Controller
{
    protected $transactionService;
    public function __construct(TransaksiService $transactionService)
    {
        $this->transactionService = $transactionService;
    }
    public function getTransaction(Request $request)
    {
        $res = $this->transactionService->getData($request);
        return $res;
    }
    public function create(Request $request)
    {
        $res = $this->transactionService->create($request);
        return $res;
    }
    public function detailTransaction($id)
    {
        $res = $this->transactionService->getDetail($id);
        return $res;
    }
}
