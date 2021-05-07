<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\DataRequest;
use App\Models\Information;
use function GuzzleHttp\Promise\all;

class FormController extends Controller
{
    public  function index() {
        return view('list', ['data' => Information::all()]);
    }

    public  function show($id) {
        return view('update-data', ['data' => Information::findOrFail($id)]);
    }

    public  function update($id, DataRequest $request) {

        $information = Information::findOrFail($id);
        $information->title = $request->input('title');
        $information->text = $request->input('text');
        $information->date = $request->input('date');
        $information->save();

        return redirect()->route('form-data')->with('success', 'Данные успешно изменены');
    }
    public function store(DataRequest $request) {

//        $this->validate($request, [
//            'title' => 'required|min:1',
//            'text' => 'required|min:1',
//            'date' => 'required|date'
//        ]);

        try {
            Information::create($request->all());

            return redirect()->route('form-data')->with('success', 'Даные записаны успешно');
        }catch (\Exception $e){

            return redirect()->back()->with('success', 'error');
        }
    }

    public function delete($id){
        Information::findOrFail($id)->delete();

        return redirect()->route('form-data')->with('success', 'Данные успешно удалены');
    }
}
