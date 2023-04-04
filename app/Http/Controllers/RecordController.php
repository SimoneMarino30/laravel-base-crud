<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Models\Record;

class RecordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {   
        if($request->has('term')) {
            // die('user did a search');
            // * Ricerca di term nella barra search
            $term = $request->get('term');
            // * withQueryString() il param ricercato nella ricerca rimane nell'URL --> (?term='xxx') 
            $records = Record::where('title', 'LIKE', "%$term%")->paginate(20)->withQueryString();
        } else {
        // $records = Record::all();
        $records = Record::paginate(10);
        }
        return view('records.index', compact('records'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('records.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $data = $this->validation($request->all());
   
        $record = new Record;

        // * METODO 1: Li riempio a 'mano' (chiave e valore array sono uguali)
        // $record->title =$data['title'];
        // $record->album =$data['album'];
        // $record->author =$data['author'];
        // $record->year =$data['year'];
        // $record->editor =$data['editor'];
        // $record->length =$data['length'];
        // $record->poster =$data['poster'];
        

        // * METODO 2: uso il metodo->fill() + [$fillable nel model]
        $record->fill($data);
        $record->save();
        return redirect()->route('records.show', $record);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Record $record)
    {   
        $records = Record::all();
        $data = $records;
        return view('records.show', compact('record'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Record $record)
    {
        return view('records.edit', compact('record'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Record $record)
    {
        
        $data = $this->validation($request->all());
        $record->update($data);
        return redirect()->route('records.show', $record);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    private function validation($data) {
        $validator = Validator::make(
            $data,
            [
            'title' => 'required|string|max:50',
            'album' => 'required|string|max:50',
            'author' => 'required|string|max:50',
            'year' => 'required|integer',
            'editor' => 'nullable|string',
            'length' => 'required|string',
            'poster' => 'nullable|string'
        ],
        [
            'title.required' => 'il titolo è obbligatorio',
            'title.max' => 'il titolo deve avere al massimo 50 catteri',
            'title.string' => 'il titolo deve essere una stringa',

            'album.required' => 'l\' album è obbligatorio',
            'album.max' => 'l\' album deve avere al massimo 50 catteri',
            'album.string' => 'l\' album deve essere una stringa',

            'author.required' => 'l\' autore è obbligatorio',
            'author.max' => 'l\' autore deve avere al massimo 30 catteri',
            'author.string' => 'l\' autore deve essere una stringa',

            'year.required' => 'l\' anno è obbligatorio',
            'year.integer' => 'l\' anno deve essere un numero',

            'editor.string' => 'l\' editor deve essere una stringa',

            'length.required' => 'la lunghezza è obbligatoria',
            'length.string' => 'la lunghezza deve essere una stringa',

            'poster.string' => 'il poster deve essere una stringa'
        ]
        )->validate();

        return $validator;
    }
}