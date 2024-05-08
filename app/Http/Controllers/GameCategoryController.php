<?php

namespace App\Http\Controllers;

use App\Models\GameCategory;
use App\Http\Requests\StoreGameCategoryRequest;
use App\Http\Requests\UpdateGameCategoryRequest;
use App\Services\FileService;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class GameCategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('role:admin');
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $gameCategories = GameCategory::when($request->get('search'), fn($query) => $query
            ->where('name', 'LIKE', "%{$request->get('search')}%"))->paginate(10);

        return view('pages.admin.game-category.index', compact('gameCategories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreGameCategoryRequest $request)
    {
        try {
            $data = $request->validated();
            $image = FileService::upload($request, 'game-categories');
            $data['image'] = $image;

            GameCategory::create($data);

            Alert::success('Berhasil!', 'Berhasil menambahkan data kategori game.');

            return redirect()->back();
        } catch(\Exception $e) {
            Alert::error('Galat!', 'Ada kesalahan di sisi server. Mohon tunggu beberapa saat ya!');
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(GameCategory $gameCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(GameCategory $gameCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateGameCategoryRequest $request, GameCategory $gameCategory)
    {
        try {
            $data = $request->validated();
            $image = FileService::replace($gameCategory->image, $request, 'game-categories');
            $data['image'] = $image;

            $gameCategory->update($data);

            Alert::success('Berhasil!', 'Berhasil memperbaharui data kategori game.');

            return redirect()->back();
        } catch(\Exception $e) {
            Alert::error('Galat!', 'Ada kesalahan di sisi server. Mohon tunggu beberapa saat ya!');
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(GameCategory $gameCategory)
    {
        try {
            FileService::remove($gameCategory->image);
            $gameCategory->delete();

            Alert::success('Berhasil!', 'Berhasil menghapus data kategori game.');

            return redirect()->back();
        } catch(\Exception $e) {
            Alert::error('Galat!', 'Ada kesalahan di sisi server. Mohon tunggu beberapa saat ya!');
            return redirect()->back();
        }
    }
}
