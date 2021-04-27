<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\DataRequest;
use App\Models\Information;
use function GuzzleHttp\Promise\all;

class FormController extends Controller
{
    public function submit(DataRequest $req)
    {
        $information = new Information();
        $information->firstname = $req->input('firstname');
        $information->lastname = $req->input('lastname');
        $information->date = $req->input('date');
        $information->save();
        return redirect()->route('form-data')->with('success', 'Даные записаны успешно');
    }
    public  function allData() {
        $information = new Information();
        return view('list', ['data' => $information -> all()]);
    }
    public  function upDate($id) {
    return view('update-data', ['data' => Information::all()->find($id)]);
    }
    public  function upDateSubmit($id, Request $req)
    {
        $information = Information::all()->find($id);
        $information->firstname = $req->input('firstname');
        $information->lastname = $req->input('lastname');
        $information->date = $req->input('date');
        $information->save();
        return redirect()->route('form-data')->with('success', 'Данные успешно изменены');
    }
    public function deleteData($id){
        Information::all()->find($id)->delete();
        return redirect()->route('form-data')->with('success', 'Данные успешно удалены');
    }
}
