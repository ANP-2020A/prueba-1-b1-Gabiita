<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustumersController extends Controller
{
    public function index(){
        return Custumers::all();}
    public function show($id){
        return Custumers::find($id);}
    public function store(Request $request){
        return Custumers::create($request->all());}
    public function update(Request $request, $id){
        $article = Custumers ::findOrFail($id);
        $article->update($request->all());
        return$article;}
    public function delete(Request $request, $id){
        $article = Custumers::findOrFail($id);
        $article->delete();
        return 204;}
}
