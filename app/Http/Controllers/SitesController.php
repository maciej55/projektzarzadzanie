<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Customer;
use App\Models\Order;
use App\Models\Event;
use DB;
use App\Http\Controllers\Auth;


class SitesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    

    public function showContactPage()
    {
        return view('sites.kontakt');
    }
    public function showProductPage()
    {
        $danetu = DB::table('products')->get();
        return view('sites.towary',['danetu' =>$danetu]);
    }
    public function showOrderPage()
    {
       
        $danek = DB::table('customers')->get();
        $danet = DB::table('products')->get(); 
        return view('sites.zamawianie',['danek' => $danek,'danet'=> $danet]);
    }
    public function showGalleryPage ()
    {
        return view('sites.galeria');
    }
    public function showCustomerPage()
    {
        return view('sites.klient');
    }
    public function showEventPage()
    {
        $eventsdata = DB::table('events')->get();
        $eventsdata = $eventsdata->toJson();        
        return view('sites.wydarzenia',['eventsdata' => $eventsdata]);
    }

    public function showEventChangePage()
    {
        $events = DB::table('events')->get();      
        return view('sites.wydarzenia_zmiana',['events' => $events]);
    }


    public function saveProductAdd(Request $request)
    {
        if(!empty($_POST['product_name']) && !empty($_POST['number_of_product']) && !empty($_POST['product_price']))
        {
        $product = new Product();
        $product->product_name = $request->input('product_name');
        $product->number_of_product = $request->input('number_of_product');
        $product->product_price = $request->input('product_price');
        $product->save();
        }
                     
        header("Location: http://127.0.0.1:8000/product");
        die();
        
    }
    

    public function saveProductUpdate(Request $request)
    {
        if(!empty($_POST['product_name']) && !empty($_POST['number_of_product']) && !empty($_POST['product_price']))
        {
        
        DB::table('products')
              ->where('id', $request->input('product_name'))
              ->update(['number_of_product' => $request->input('number_of_product'),
              'product_price' => $request->input('product_price')]);
        }
                     
        header("Location: http://127.0.0.1:8000/product");
        die();
        
    }

    
    public function saveProductDelete(Request $request)
    {
        if(!empty($_POST['product_name']) && $_POST['agree'] === "Zgadzam się")
        {
                  
            DB::table('products')->where('id',$request->input('product_name'))->delete();
        }
                     
        header("Location: http://127.0.0.1:8000/product");
        die();
        
    }

    public function saveCustomerAdd(Request $request)
    {
        if(!empty($_POST['first_name']) && !empty($_POST['last_name']))
        {
        $customer = new Customer();
        $customer->first_name = $request->input('first_name');
        $customer->last_name = $request->input('last_name');
        $customer->number_of_orders = 0;
        $customer->save();
        }
                     
        header("Location: http://127.0.0.1:8000/customer");
        die();
        
    }

    public function saveOrderAdd(Request $request)
    {     
        $danez = DB::table('products')->where('id',$request->input('id_product'))->first();
        if(!empty($_POST['id_product']) && !empty($_POST['id_customer']) && !empty($_POST['priority']) &&  $danez->number_of_product >= ($request->input('number')))
        {
        $order = new Order();
        $order->id_product = $request->input('id_product');
        $order->id_customer = $request->input('id_customer');
        $order->priority = $request->input('priority');  
        $order->number = $request->input('number');
        $order->save();
        DB::table('products')->where('id',$request->input('id_product'))->update(['number_of_product' => ($danez->number_of_product - $request->input('number')) ]);   
        DB::table('customers')->where('id',$request->input('id_customer'))->increment('number_of_orders');
       
        }
        
                     
       header("Location: http://127.0.0.1:8000/order");
       die();
        
    }
    public function saveEventAdd(Request $request)
    {
        if(!empty($_POST['title']) && !empty($_POST['description']) && !empty($_POST['date_event']))
        {
        $event = new Event();
        $event->title = $request->input('title');
        $event->description = $request->input('description');
        $event->date_event = $request->input('date_event');
        $event->save();       
        }
        
                     
       header("Location: http://127.0.0.1:8000/eventchange");
       die();
        
    }
    public function saveEventDelete(Request $request)
    {
        if(!empty($_POST['id_event']))
        {                  
            DB::table('events')->where('id',$request->input('id_event'))->delete();
        }
        header("Location: http://127.0.0.1:8000/eventchange");
       die();
    }
    
   

   
      
}

