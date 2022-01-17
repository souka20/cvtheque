<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use App\Cv;
use App\Http\Requests\cvRequest;
use Auth;

class CvController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    // system CRUD
 // lister les cvs
    public function index(){
        // $listcv =Cv::where('user_id',auth::user()->id)->get();
         if(Auth::user()->is_admin){
             $listcv=Cv::all();
         }else{
        $listcv = Auth::user()->cvs;
    }
        return view('cv.index',['cvs'=>$listcv]);

    }
    //affiche le formulaire de creation de cv 
    public function create(){
        return view('cv.create');
    }
    //Enregistrer un cv
    public function store(cvRequest $request){
       $cv = new Cv();
       $cv->titre=$request->input('titre');
       $cv->presentation=$request->input('presentation');
       $cv->user_id=Auth::user()->id;
       if($request->hasFile('photo')){
      $cv->photo= $request->photo->store('image');
    }
       $cv->save();
       // session flash duréé de  vie est  une seul requete http 
       session()->flash('success','le Cv est bien enregistrer');
       return redirect('cvs');
    }
    // permer de récuperer un cv puis de  le mettre dans  une formulaire
    public function edit($id){
        $cv = Cv::find($id);
        $this->authorize('update',$cv);
        return view('cv.edit',['cv'=>$cv]);
    }
    // permet de modifier un cv
    public function update(cvRequest $request,$id){
        $cv = Cv::find($id);
        $cv->titre = $request->input('titre');
        $cv->presentation = $request->input('presentation');
        $cv->save();
        session()->flash('edit','le Cv est bien Modifier');
        return redirect('cvs');
    }
    // permet de modifier un cv
    public function destroy(Request $request,$id){
         $cv = Cv::find($id);
         $this->authorize('delete',$cv);
         $cv->delete();
         return redirect('cvs');
        
       
    }
    public function show($id){
        return view('cv.show',['id'=>$id]);
    }
}
