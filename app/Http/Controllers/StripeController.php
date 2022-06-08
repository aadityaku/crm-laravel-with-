<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use Stripe;
class StripeController extends Controller
{
    public function stripe()
    {
        return view('homepages/stripe');
    }
   
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripePost(Request $request)
    {
        
        \Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        $customer = \Stripe\Customer::create(array(
          'name' => 'test',
          'description' => 'test description',
          'email' => 'email@gmail.com',
          'source' => $request->input('stripeToken'),
           "address" => ["city" => "San Francisco", "country" => "US", "line1" => "510 Townsend St", "postal_code" => "98140", "state" => "CA"]

      ));
       if($customer->id !=null){
        \Stripe\Charge::create (array (
                        "amount" => 300 * 100,
                        "currency" => "usd",
                        "customer" =>  $customer->id,
                        "description" => "Test payment."
                ) );
        return redirect('/');
       }
        
        else{
            echo "falied";
        }
    }
        
         
          
    }

