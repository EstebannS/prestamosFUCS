<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateRolsRequest;
use App\Http\Requests\UpdateRolsRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\RolsRepository;
use Illuminate\Http\Request;
use Flash;

class RolsController extends AppBaseController
{
    /** @var RolsRepository $rolsRepository*/
    private $rolsRepository;

    public function __construct(RolsRepository $rolsRepo)
    {
        $this->rolsRepository = $rolsRepo;
    }

    /**
     * Display a listing of the Rols.
     */
    public function index(Request $request)
    {
        $rols = $this->rolsRepository->paginate(10);

        return view('rols.index')
            ->with('rols', $rols);
    }

    /**
     * Show the form for creating a new Rols.
     */
    public function create()
    {
        return view('rols.create');
    }

    /**
     * Store a newly created Rols in storage.
     */
    public function store(CreateRolsRequest $request)
    {
        $input = $request->all();

        $rols = $this->rolsRepository->create($input);

        Flash::success('Rols saved successfully.');

        return redirect(route('rols.index'));
    }

    /**
     * Display the specified Rols.
     */
    public function show($id)
    {
        $rols = $this->rolsRepository->find($id);

        if (empty($rols)) {
            Flash::error('Rols not found');

            return redirect(route('rols.index'));
        }

        return view('rols.show')->with('rols', $rols);
    }

    /**
     * Show the form for editing the specified Rols.
     */
    public function edit($id)
    {
        $rols = $this->rolsRepository->find($id);

        if (empty($rols)) {
            Flash::error('Rols not found');

            return redirect(route('rols.index'));
        }

        return view('rols.edit')->with('rols', $rols);
    }

    /**
     * Update the specified Rols in storage.
     */
    public function update($id, UpdateRolsRequest $request)
    {
        $rols = $this->rolsRepository->find($id);

        if (empty($rols)) {
            Flash::error('Rols not found');

            return redirect(route('rols.index'));
        }

        $rols = $this->rolsRepository->update($request->all(), $id);

        Flash::success('Rols updated successfully.');

        return redirect(route('rols.index'));
    }

    /**
     * Remove the specified Rols from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $rols = $this->rolsRepository->find($id);

        if (empty($rols)) {
            Flash::error('Rols not found');

            return redirect(route('rols.index'));
        }

        $this->rolsRepository->delete($id);

        Flash::success('Rols deleted successfully.');

        return redirect(route('rols.index'));
    }
}
