<?php

namespace App\Http\Controllers;

use App\Enums\TournamentApprovalStatusEnum;
use App\Models\Tournament;
use App\Http\Requests\StoreTournamentRequest;
use App\Http\Requests\UpdateTournamentRequest;
use App\Services\FileService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class TournamentController extends Controller
{
    /**
     * Initialize the controller
     *
     * @see https://stackoverflow.com/questions/28729228/laravel-5-resourceful-routes-plus-middleware
     * @see https://laravel.com/docs/5.0/controllers#controller-middleware
     */
    public function __construct()
    {
        $this->middleware('role:eo', ['only' => ['create', 'store', 'edit']]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $tournaments = Tournament::when($request->get('search'), fn ($query) => $query->where('name', 'LIKE', "%{$request->get('search')}%"))
            ->when(Auth::user()->hasRole('user'), fn ($query) => $query->status === TournamentApprovalStatusEnum::APPROVED->value)
            ->paginate(10);

        return view('pages.admin.tournaments.index', compact('tournaments'));
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
    public function store(StoreTournamentRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Tournament $tournament)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tournament $tournament)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTournamentRequest $request, Tournament $tournament)
    {
        try {
            if ($request->input('requesting') === 'approving') {
                $tournament->update(['status' => $request->input('status')]);
            }

            Alert::success('Berhasil!', $request->input('requesting') === 'approving' ? (
                $request->input('status') === TournamentApprovalStatusEnum::APPROVED->value ? 'Pengajuan turnamen telah disetujui!' : 'Pengajuan turnamen ditolak.'
            ) : 'Berhasil memperbaharui data');

            return redirect()->back();
        } catch(\Exception $e) {
            Alert::error('Galat!', 'Ada kesalahan di sisi server. Mohon tunggu beberapa saat ya!');
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tournament $tournament)
    {
        try {
            FileService::remove($tournament->poster_image);
            $tournament->delete();

            Alert::success('Berhasil!', 'Berhasil menghapus data turnamen.');

            return redirect()->back();
        } catch(\Exception $e) {
            Alert::error('Galat!', 'Ada kesalahan di sisi server. Mohon tunggu beberapa saat ya!');
            return redirect()->back();
        }
    }
}
