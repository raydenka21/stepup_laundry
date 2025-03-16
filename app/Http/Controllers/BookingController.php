<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request) : View
    {

        $data = [
            'page' => 'booking',
            'service' => $request->get('service') ?? '',
        ];
        return view('layout.wrapper', $data);
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        try {
            $requestForm = $request->only(['name', 'email','address','phone','service','qty','date']);
            $validator = Validator::make($requestForm,[
                'name' => 'required|max:50',
                'email' => 'required|email',
                'address' => 'required',
                'date' => 'nullable|date',
                'phone' => 'required',
                'service' => 'required|in:fast,deep,unyellowing',
                'qty' => 'required|numeric|min:1'
            ]);

            if ($validator->fails()) {
                return response()->json(self::responseJson(message:$validator->errors()->first(),status: 'error'));
            }

            $requestForm['booking_date'] = $request->get('date') ?? date('Y-m-d');
            $requestForm['invoice_number'] = PRICELIST[$requestForm['service']]['prefix'].rand(1,100);
            $transaction = Transaction::create($requestForm);
            if(!$transaction){
                return response()->json(self::responseJson(message:'Booking failed',status:'error'));
            }
            $generateTextWa = self::generateTextWa($requestForm);
            return response()->json(self::responseJson(message:'Booking created successfully',status:'success',data:$generateTextWa));
        }catch (\Exception $e){
            Log::error($e->getMessage());
            return response()->json(self::responseJson(message:'Internal Server Error',internal:true,status: 'error'));
        }
    }

    public function responseJson(string $message,mixed $data=[],bool $internal=false,string $status=null) : array
    {
        if($status == 'error') {
            Log::error($message);
        }
        if($internal){
            $message = 'Internal Server Error';
        }
        return [
            'status' => $status,
            'message' => $message,
            'data' => $data
        ];
    }

    public function generateTextWa(array $data): String
    {
        $service = PRICELIST[$data['service']]['name'];
        $message = 'Halo, saya ingin memesan '.$service.'  '.$data['qty'].'x pcs'.PHP_EOL;
        $message .= 'Invoice Number : '.$data['invoice_number'].PHP_EOL;
        $message .= 'Nama : '.$data['name'].PHP_EOL;
        $message .= 'Email : '.$data['email'].PHP_EOL;
        $message .= 'Phone : '.$data['phone'].PHP_EOL;
        $message .= 'Alamat : '.$data['address'].PHP_EOL;
        $to = env('WHATSAPP_NUMBER','6285117322932');
        return env('WHATSAPP_URL').urlencode($message);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
