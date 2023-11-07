<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Feat;

class FeadController extends Controller
{
    public function index() {
        $feats = Feat::all();
        return view("index", compact("feats"));
    }
    public function create() {
        $feats = Feat::all();
        return view("form", compact("feats"));
    }
    public function store(Request $request) {
        $request->validate([
            'name' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Validación de la imagen
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image')->store('images', 'public'); // Almacenar la imagen en el sistema de archivos

            // Guardar la ruta de la imagen en la base de datos
            $feat = new Feat;
            $feat->name = $request->name;
            $feat->image = $image;
            $feat->save();
        }
        return redirect()->route('home');
    }
    public function show($id) {
        $fead = Feat::find($id);
        return view("show", compact("fead"));
    }
    public function edit($id) {
        $fead = Feat::find($id);
        return view("edit", compact("fead"));
    }
    public function update(Request $request, $id) {
        $fead = Feat::find($id);
        $fead->update($request->all());
        return redirect()->back();
    }
    public function destroy($id) {
        $fead = Feat::find($id);
        $fead->delete();
        return redirect("")->back();
    }
}
