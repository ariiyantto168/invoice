<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Invoices;

class InvoicesTagsController extends Controller
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

        $pagecontent = view('invoicestags.index', $contents); // unuk menampilkan view categories dr view

        // masterpage
        $pagemain = array(
            'title' => 'List Orders',
            'menu' => 'list_orders',
            'submenu' => '',
            'pagecontent' => $pagecontent,
        );
        
        return view('masterpage', $pagemain);
    }
}
