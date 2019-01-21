<?php

namespace App\Http\Controllers;

use App\Etudiant;
use App\Http\Requests\EtudiantRequest;
use Collective\Html\FormFacade;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class EtudiantController extends Controller
{
    public function list()
    {
        $etudiants = Etudiant::paginate(8);
        $add = Input::get('add');
        $edit = Input::get('edit');
        $delete = Input::get('delete');
        return view('etudiant/list',compact(['etudiants','add','edit','delete']));
    }
    public function save(Request $request){
        $eduReq = new EtudiantRequest();
        $validator =  validator($request->all(),$eduReq->rules());
        if($validator->fails())
        {
            return redirect('/etudiants/add')->withErrors($validator->errors());
        }

        $etudiant = Etudiant::create($request->all());
     return   redirect('/etudiants/list?add=1');
        //return back()->with(['status'=>trans('etudiant.msm_succes_saved')]);

    }
    public function add(){


        return view('etudiant.add');

    }
    public function show($id){
        $etudiant = Etudiant::findOrFail($id);
        return view('etudiant/show',compact('etudiant'));

    }
    public function edit($id){
        $etudiant = Etudiant::findOrFail($id);
        return view('etudiant/edit',compact('etudiant'));

    }
    public function delete($id){
        $etudiant = Etudiant::findOrFail($id);
        $etudiant->delete();
        return   redirect('/etudiants/list?delete=1');

    }
    public function update($id,Request $request){
      //  $validaor = EtudiantRequest::va

        $etudiant = Etudiant::findOrFail($id);
        $etudiant->nom = $request->input('nom');
        $etudiant->prenom = $request->input('prenom');
        $etudiant->save();
        return   redirect('/etudiants/list?edit=1');
       // return back()->with(['status'=>trans('etudiant.msm_succes_updated')]);

    }
}
