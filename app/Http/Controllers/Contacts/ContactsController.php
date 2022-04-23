<?php

namespace App\Http\Controllers\Contacts;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Contact;

class ContactsController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $contacts = DB::table('contacts')->get();
        return view('contacts.list', ['contacts' => $contacts]);
    }

}
