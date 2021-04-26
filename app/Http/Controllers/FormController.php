<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Information;

class FormController extends Controller
{
    public function submit(Request $req)
    {
        $contact = new Information();
        $contact->firstname = $req->input('firstname');
        $contact->lastname = $req->input('lastname');
        $contact->date = $req->input('date');
        $contact->save();
        return redirect('/');
    }
}
