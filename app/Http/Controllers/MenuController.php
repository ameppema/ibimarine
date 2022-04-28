<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index(){
        $menus = Menu::all(['id','name','sort_order']);
        return view('admin.sections.menu', compact('menus'));
    }

    public function store(){
        //
    }

    public function update(){
        $menu = Menu::findOrFail(request('menu_id'));
        $menuUpdates = request()->validate([
            'name'=>'required',
            'name_en'=>'required'
        ]);

        $menu->name = $menuUpdates['name'];
        $menu->save();
        $menu->updateNameTranslate(request('name_en'));

        return back();
    }

    public function delete($id){
        $menuItem = Menu::findOrFail($id);
        $menuItem->delete();
        return back();
    }
}
