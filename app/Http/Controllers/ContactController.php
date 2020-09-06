<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;

class ContactController extends Controller{

    public function contactSubmit(ContactRequest $req){
      // $validate = $req->validate([
      //   'name'=> 'required|min:5|max:50'
      // ]);
    }

    public function allData(){
      $contact = new Contact;
    }
}
