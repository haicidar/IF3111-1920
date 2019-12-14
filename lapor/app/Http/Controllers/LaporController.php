<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Lapor; //calling model 
use Illuminate\Support\Facades\File; //calling 'file' library
class LaporController extends Controller
{
    public function index(){
        $data = Lapor::get();
        return view ('index', ['data' => $data]);
    }

    public function detail($id){
        //search data by id and show it
        $data = Lapor::find($id)->first();
        return view('detail', ['data' => $data]);
    }

    public function search($q){
        $data = Lapor::where('report', 'LIKE', 'a%')->first();
        $data->get();
        return view('index', ['data' => $data]);
    }

    public function uploadProcess(Request $data){
        $this->validate($data, [
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
        return redirect('/');
    }

    public function delete($id){        
        // hapus data
        Lapor::where('id', $id)->delete();

        // hapus file
        $data = Lapor::where('id', $id)->first();
        File::delete('attachment/' . $data->file);

        return redirect('/');
    }
}