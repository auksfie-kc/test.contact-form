<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
  public function index()
  {
    return view('index');
  }
  public function confirm(Request $request)
     {
         $contact = $request->only(['last_name','first_name', 'gender','area_code','first_part','second_part','email','address','building', 'select','content']);
         return view('confirm', compact('contact'));
     }
public function store(Request $request)
     {
         $tel = $request->area_code . '' . $request->first_part . '' . $request->second_part;
         $contact = $request->only(['last_name','first_name', 'gender','tel','email','address','building', 'select','content']);
         Contact::create($contact);
         return view('thanks');
     }
}

