@component('mail::message')
# New Order Received

**Order ID:** {{ $order->id }}<br>
**Customer Email:** {{ $order->billing_email }}<br>
**Customer Name:** {{ $order->billing_name }}<br>
**Total Price:** ${{ round($order->billing_total, 2) }}<br>
**Transaction ID:** {{ $order->paypal_id }} 

**Billing Name:** {{ @$order->billing_name }}<br>
**Billing Email:** {{ @$order->billing_email }}<br>
**Billing Address:** {{ @$order->billing_address }}<br> 
**Billing Province:** {{ @$order->billing_province}}<br>
**Billing State and Postal Code:** {{ @$order->billing_city }}, {{ @$order->billing_state }} {{ @$order->billing_postalcode}}<br>  

@if(@$order->diff_name)
**Shipping Name:** {{ @$order->diff_name }}<br>
@endif
**Shipping Address:** {{ @$order->diff_address }}<br>
**Shipping Province:** {{ @$order->diff_province }}<br>
**Shipping State and Postal Code:** {{ @$order->diff_city }}, {{ @$order->diff_state }}  {{ @$order->diff_postalcode }}<br>

**Items Ordered**<br>
@php $orderProducts = App\Models\OrderProduct::where('order_id', $order->id)->get(); @endphp
@foreach($orderProducts as $product)
@php  $productName = App\Models\Product::find($product->product_id)->pluck('name')->first(); @endphp
**Name:** {{ $productName }}: {{ $product->variant }}<br>
**Price:** {{ presentPrice($product->price, 2)}} <br>
**Quantity:** {{ $product->quantity }} <br><br>
@endforeach

**Regards,**<br>
{{ config('app.name') }}
@endcomponent
