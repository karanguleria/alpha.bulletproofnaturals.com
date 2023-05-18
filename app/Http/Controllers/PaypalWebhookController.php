<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\Order;
use App\Models\OrderProduct;
use Illuminate\Support\Facades\Http;

class PaypalWebhookController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        if($request->event_type == "PAYMENT.CAPTURE.COMPLETED"){
            Log::info("Catch it");  
            Log::info($request->resource['custom_id']);
            $order_id  = $request->resource['custom_id'];
            $order = Order::find($order_id);
            // Log::info("Order",$order);
            $order->status = 'processing';
            $order->billing_email = $buyer_data->email;
            // $order->billing_name = $buyer_data->fname;
            // $order->diff_name = $buyer_data->fname;
            // $order->billing_address = $buyer_data->street;
            // $order->diff_address = $buyer_data->street ;
            // $order->diff_city = $buyer_data->city;
            // $order->billing_city = $buyer_data->city;
            // $order->diff_state = $buyer_data->state;
            // $order->billing_state = $buyer_data->state;
            // $order->diff_postalcode = $buyer_data->zip;
            // $order->billing_postalcode = $buyer_data->zip;
            // $order->billing_country = $buyer_data->country;
            // $order->paypal_id = '';
            // $order->payment_gateway = "Stripe";
            // $order->save();
            // $orderProducts = OrderProduct::where('order_id', $order->id)->get();
            // customProduct($order);
        //     if ($order->status == "processing") {
        //         $total = 0;
        //         //            foreach ($orderProducts as $totalitems) {
        //         //                $total += $totalitems->quantity * $totalitems->months;
        //         //            }
        //         $orders = Order::where("fulfillment_count", '!=', "")->pluck('fulfillment_count');
        //         $order_number = [];
        //         foreach ($orders as $k => $order_count) {
        //             $order_number[$k] = '739';
        //         }
        //         $count_fulfillment = 'HGM739';
        //         //            }
        //         if (@$order->status == 1) {
                    
        //         } else {
                    
        //             $order->fulfillment_count = $count_fulfillment;
        //             $order->shipped = 1;
        //             $order->save();
                    
        //             Cart::destroy();
        //             session()->forget('buyer_id');
        //             session::forget('order_id');
        //             session()->forget('coupon');
        //             //CartModel::where('email', '=', $order->billing_email)->delete();
        //         }
        //         $messages = 1;
        //         //            Commenting the code for disabling the amazonfullfillment order
        //         return view('thank-you')->with([
        //             'order' => $order,
        //             'orderProducts'=> $orderProducts,
        //             'messages' => $messages
        //         ]);  
        }
         $ID ="56G614444S585970G";
        $request_token = Http::baseUrl(env('PAYPAL_API_BASE'))
            ->withBasicAuth(env('PAYPAL_CLIENT_ID'), env('PAYPAL_CLIENT_SECRET'))
            ->asForm()->post('/v1/oauth2/token', ['grant_type' => 'client_credentials']);
        $response = $request_token->json();
        $token = $response['access_token'];

        $request = Http::baseUrl(env('PAYPAL_API_BASE'))
            ->withToken($token)
            ->get("/v2/checkout/orders/{$ID}/", ['form_params' => ['order_id'=> $ID]]);
       Log::info("Paypal Webhook controller",$request->all());
    }
}
