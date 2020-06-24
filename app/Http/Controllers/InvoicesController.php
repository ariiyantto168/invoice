<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Invoices;


class InvoicesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $contents = [
            'invoices' => Invoices::all(),
        ];

        $pagecontent = view('invoices.index', $contents); // unuk menampilkan view categories dr view

        // masterpage
        $pagemain = array(
            'title' => 'Invoice',
            'menu' => 'master',
            'submenu' => 'invoices',
            'pagecontent' => $pagecontent
        );
        
        return view('masterpage', $pagemain);
    }

    public function create_page(){

    $pagecontent = view('invoices.create');
  
      //masterpage
      $pagemain = array(
          'title' => 'Invoices',
          'menu' => 'invoices',
          'submenu' => 'invoices',
          'pagecontent' => $pagecontent,
      );
  
      return view('masterpage', $pagemain);
    }

    public function save_page(Request $request){

        // return $request->all();
        $saveInvoices = new Invoices;
        $saveInvoices->name = $request->name;
        $saveInvoices->invoicedates = $request->invoicedates;
        $saveInvoices->due_date = $request->due_date;
        $saveInvoices->invoicesnumber = $request->invoicesnumber;
        $saveInvoices->invoicesstatus = $request->invoicesstatus;
        $saveInvoices->billingto = $request->billingto;
        $saveInvoices->company = $request->company;
        $saveInvoices->tittle = $request->tittle;
        $saveInvoices->price = $request->price;
        $saveInvoices->pricenexts = $request->pricenexts;
        $saveInvoices->total = $request->total;
        $saveInvoices->save();

        // return $saveInvoices;
        return redirect('invoices')->with('status_success','Created Invoices');
    }

    public function update_page(Invoices $invoices){

        $contents = [
            'invoices' => Invoices::find($invoices->idinvoices)
        ];

        $pagecontent = view('invoices.update',$contents);

        // masterpage
        $pagemain = array(
            'title' => 'Invoices',
            'menu' => 'invoices',
            'submenu' => 'invoices',
            'pagecontent' => $pagecontent
        );
        
        return view('masterpage', $pagemain);
    }

    public function update_save(Request $request, Invoices $invoices){

        // return $request->all();
        $saveInvoices = Invoices::find($invoices->idinvoices);
        $saveInvoices->name = $request->name;
        $saveInvoices->invoicedates = $request->invoicedates;
        $saveInvoices->due_date = $request->due_date;
        $saveInvoices->invoicesnumber = $request->invoicesnumber;
        $saveInvoices->invoicesstatus = $request->invoicesstatus;
        $saveInvoices->billingto = $request->billingto;
        $saveInvoices->company = $request->company;
        $saveInvoices->tittle = $request->tittle;
        $saveInvoices->price = $request->price;
        $saveInvoices->pricenexts = $request->pricenexts;
        $saveInvoices->total = $request->total;
        $saveInvoices->save();

        // return $saveInvoices;
        return redirect('invoices')->with('status_success','Created Invoices');
    }

    public function delete(Invoices $invoices)
    {
        $deleteInvoices = Invoices::find($invoices->idinvoices);
        //   return $deleteInvoices;
        $deleteInvoices->delete();
        return redirect('invoices')->with('status_success','Deleted invoices');

    }

    public function view_invoices(Invoices $invoices)
    {
            $contents = [
                'invoices' => Invoices::find($invoices->idinvoices),
            ];
    
            $pagecontent = view('invoices.view', $contents); // unuk menampilkan view categories dr view
    
            // masterpage
            $pagemain = array(
                'title' => 'Invoice',
                'menu' => 'master',
                'submenu' => 'invoices',
                'pagecontent' => $pagecontent
            );
            
            return view('masterpage', $pagemain);
    }

}
