<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Lapor; //calling model 
use Illuminate\Support\Facades\File; //calling 'file' library
class LaporController extends Controller
{
    public function index(){
        $data = Lapor::get();
        return view ('index', ['data' => $data->reverse()]);
    }

    public function detail($id){
        //search data by id and show it
        $data = Lapor::find($id);
        return view('detail', ['data' => $data]);
    }

    public function create(){
        return view('create');
    }

    public function createAdd(Request $data){
        $this->validate($data,[
            'title' => 'required',
            'file' => 'required|file|image|mimes:jpeg,png,gif,webp|max:2048',
            'report' => 'required',
            'aspect' => 'required'
        ]);

        $file = $data->file('file'); //save uploaded file into $file
        $fileName = time()."-".$file->getClientOriginalName(); //save file name as $fileName
        $uploadDestination = 'attachment'; //destination folder for file uploaded

        $file->move($uploadDestination, $fileName);

        Lapor::create([
            'title' => $data->title,
            'file' => $fileName,
            'report' => $data->report,
            'aspect' => $data->aspect
        ]);
        return back();
    }

    public function edit($id){
        $data = Lapor::find($id);
        return view('edit', ['data' => $data]);
    }

    public function editData(Request $req){
        $this->validate($req,[
            'file' => 'file|image|mimes:jpeg,png,gif,webp|max:2048'
        ]);

        $file = $req->file('file'); //save uploaded file into $file
        $fileName = time()."-".$file->getClientOriginalName(); //save file name as $fileName
        $uploadDestination = 'attachment'; //destination folder for file uploaded
        $file->move($uploadDestination, $fileName);

        $data = Lapor::find ( $req->id );
        $data->title = $req->title;
        $data->report = $req->report;
        $data->file = $req->filename;
        $data->aspect = $req->aspect;
        $data->save ();
        return back();
    }

    public function delete($id){

        // hapus file
        $data = Lapor::where('id', $id)->first();
        File::delete('attachment/' . $data->file);        
        // hapus data
        Lapor::where('id', $id)->delete();
        
        return redirect('/');
    }

    public function search($q){
        $data = Lapor::where('report', 'LIKE', '%'.$q)->get();
        return view('index', ['data' => $data]);
    }
}
