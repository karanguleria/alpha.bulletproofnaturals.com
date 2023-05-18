<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use App\Models\Order;
use App\Models\OrderProduct;

class PaypalController extends Controller
{
    function create()
    {
        $billing_discount_code="";
        $billing_discount=0;
        $newTotal = 0;
        if (Cart::instance('default')->count()) {
            $newSubtotal  = Cart::instance('default')->subTotal();
            $discount = getNumbers()->get('discount');
            $newTotal = getNumbers()->get('newTotal');
        }
        $items = [];
        $k=0;
         foreach(Cart::instance('default')->content() as $item){
            
            $items[$k]['name'] = $item->name;
            $items[$k]['quantity'] = $item->qty;
            $items[$k]['sku']= $item->options->variant_name ." Pack - ". $item->options->varient_tablets ." Tablets Only $ ".  number_format(preg_replace('/\s+/', '', $item->subtotal), 2, '.', ',') ;
            $items[$k]['unit_amount']['currency_code'] = "USD" ;
            $items[$k]['unit_amount']['value'] = $item->price;
            $k++;
         }
         
        //  Log::info("Items",$items);


            //  Adding order to order table
            $quantity = 0;
            $total_amount = 0.00;
        foreach (Cart::instance('default')->content() as $k => $item) {
           $quantity = $item->qty;
           $total_price = $item->options->varient_total_price;
           $total_amount = $total_amount + ($total_price*$quantity);
        } 
        if(!empty(\session()->get('coupon'))){
            $billing_discount = \session()->get('coupon')['discount'];
            $billing_discount_code = \session()->get('coupon')['name'];
        } else{
            $billing_discount = '';
            $billing_discount_name = '';
        }
        $order = Order::create([
                'billing_email' => '',
                'billing_name' => "",
                'billing_address' => "",
                'billing_city' => "",
                'billing_province' => "",
                'billing_state' => "",
                'billing_postalcode' => "",
                'billing_country' => "",
                'billing_phone' => "",
                'billing_name_on_card'=> "",
                'receipt_url'=> '',
                'billing_total'=> $total_amount,
                'billing_discount'=> $billing_discount,
                'billing_discount_code'=> $billing_discount_code,
                'payment_gateway' => 'Paypal',
                'error'=> 'no'

            ]);

         $total_items_regular = 0;
        $total_items_mega = 0;

        foreach (Cart::instance('default')->content() as $k => $item) {
            
            OrderProduct::create([
                'order_id' => $order->id,
                'product_id' => $item->options->product_id,
                'quantity' => $item->qty,
                'variant' => $item->options->variant_name,
                'price' => $item->options->varient_price,
                'total_price' => $item->options->varient_total_price,
                'months' => $item->options->varient_months,
                'type' => $item->options->varient_type
            ]); 
           if($item->options->varient_type=="mega"){
                    $total_items_mega = $total_items_mega + $item->options->varient_months * $item->qty;
           }
           else{
                     $total_items_regular = $total_items_regular + $item->options->varient_months * $item->qty;
            } 
        }

        $order_id = $order->id;


        $token = $this->generateAccessToken();
        $request = Http::baseUrl(env('PAYPAL_API_BASE'))
            ->withToken($token)
            ->withHeaders(["PayPal-Request-Id"=>$order_id])
            ->post('/v2/checkout/orders', [
                
                "purchase_units" => [
                    [
                        "reference_id"=>$order_id,
                        "description"=>"test Description",
                        "custom_id"=>$order_id,
                        "soft_descriptor"=>"soft_descriptor",
                        "items" => $items,
                        // "items" =>  [
                        //                 [
                        //                     'name'=>'Regular Bottle Pack',
                        //                     'quantity'=> 1,
                        //                     'sku'=> '90 Tablets',
                        //                     'unit_amount'=>[
                        //                           "currency_code" => "USD",
                        //                           "value" => "50",
                        //                     ]
                        //                 ],
                        //                 [
                        //                     'name'=>'Mega Bottle Pack',
                        //                     'quantity'=>1,
                        //                      'sku'=> '180 Tablets',
                        //                     'unit_amount'=>[
                        //                           "currency_code" => "USD",
                        //                           "value" => "78",
                        //                     ]
                        //                 ],
                        //                 [
                        //                     'name'=>'Regular Bottles Pack',
                        //                     'quantity'=>1,
                        //                      'sku'=> '270 Tablets',
                        //                     'unit_amount'=>[
                        //                           "currency_code" => "USD",
                        //                           "value" => "112",
                        //                     ]
                        //                 ],
                        //                 [
                        //                     'name'=>'Mega Bottles Pack',
                        //                     'quantity'=>1,
                        //                      'sku'=> '540 Tablets',
                        //                     'unit_amount'=>[
                        //                           "currency_code" => "USD",
                        //                           "value" => "212",
                        //                     ]
                        //                 ]

                        //              ],
                            "amount" => [
                                "currency_code" => "USD",
                                "value" => $newTotal,
                                "breakdown" => [
                                    'item_total'=>[
                                          "currency_code" => "USD",
                                                  "value" => $newSubtotal,
                                    ],
                                    "discount" => [
                                            "currency_code" => "USD",
                                            "value" => $discount,
                                        ],
                                ]

                            ],
                        ]
                ],
                
                'intent' => "CAPTURE",
                "payment_source" =>[
                    "paypal" => [
                        "experience_context" => [
                                "payment_method_preference"=> "IMMEDIATE_PAYMENT_REQUIRED",
                                "payment_method_selected"=> "PAYPAL",
                                "brand_name"=> "Bulletproof Naturals",
                                "locale"=> "en-US",
                                "landing_page"=> "LOGIN",
                                "shipping_preference"=> "GET_FROM_FILE",
                                "user_action"=> "PAY_NOW",
                                "return_url"=> "http://127.0.0.1:8000/thank-you",
                                "cancel_url"=> "http://127.0.0.1:8000/cancel-paypal"
                            
                        ]
                    ]
                ]
               
            ]);

        return response()->json($request->json(), 200);
    }

    function capture()
    {
        $ID = request('orderID');
        $token = $this->generateAccessToken();
        $request = Http::baseUrl(env('PAYPAL_API_BASE'))
            ->withToken($token)
            ->post("/v2/checkout/orders/{$ID}/capture", ['form_params' => ['order_id'=> $ID]]);

        return response()->json($request->json(), 200);
    }


    function generateAccessToken()
    {
        $request = Http::baseUrl(env('PAYPAL_API_BASE'))
            ->withBasicAuth(env('PAYPAL_CLIENT_ID'), env('PAYPAL_CLIENT_SECRET'))
            ->asForm()->post('/v1/oauth2/token', ['grant_type' => 'client_credentials']);
        $response = $request->json();

        return $response['access_token'];
    }
    function details(){
        //  $ID = request('orderID');
         $ID ="56G614444S585970G";
        $token = $this->generateAccessToken();
        $request = Http::baseUrl(env('PAYPAL_API_BASE'))
            ->withToken($token)
            ->get("/v2/checkout/orders/{$ID}/", ['form_params' => ['order_id'=> $ID]]);

        return response()->json($request->json(), 200);
    }
}
