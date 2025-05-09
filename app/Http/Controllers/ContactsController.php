<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContactRequest;
use App\Models\Contacts;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailables\Content;

class ContactsController extends Controller
{
    public function store(StoreContactRequest $request){
     
      $DataContact =   $request->validated();
      
        Contacts::create($DataContact);
        return redirect()->back()->with('status-message','Your message is done ');
}
}
