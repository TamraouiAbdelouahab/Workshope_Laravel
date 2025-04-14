<?php

namespace App\Http\Services;

use App\Models\Jardin;
use App\Models\Jardinier;
use Illuminate\Foundation\Http\FormRequest;

final class JardinService
{
    public function getAllJardins(){

        return Jardin::paginate(2);
    }

    public function getJardiniers(){
        return Jardinier::all();
    }


    public function create(FormRequest $request){
        $data = $request->validated();
        Jardin::create($data);
    }

    public function find($id){

        return  Jardin::find($id);

    }

    public function update(FormRequest $request ,$id){
        $jardin = $this->find($id);
        $updated = $request->validated();
        $jardin->update($updated);
    }

    public function delete($id){
        $jardin = $this->find($id);
        $jardin->delete();
    }

    public function filter($request){

        $query = $request['query'];

        return Jardin::where('jardinier_id', '=', "{$query}")->paginate(5);
    }
}
?>