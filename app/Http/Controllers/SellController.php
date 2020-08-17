<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSellRequest;
use App\Http\Requests\UpdateSellRequest;
use App\Repositories\SellRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class SellController extends AppBaseController
{
    /** @var  SellRepository */
    private $sellRepository;

    public function __construct(SellRepository $sellRepo)
    {
        $this->sellRepository = $sellRepo;
    }

    /**
     * Display a listing of the Sell.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $sells = $this->sellRepository->all();

        return view('sells.index')
            ->with('sells', $sells);
    }

    /**
     * Show the form for creating a new Sell.
     *
     * @return Response
     */
    public function create()
    {
        return view('sells.create');
    }

    /**
     * Store a newly created Sell in storage.
     *
     * @param CreateSellRequest $request
     *
     * @return Response
     */
    public function store(CreateSellRequest $request)
    {
        $input = $request->all();

        $sell = $this->sellRepository->create($input);

        Flash::success('Sell saved successfully.');

        return redirect(route('sells.index'));
    }

    /**
     * Display the specified Sell.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $sell = $this->sellRepository->find($id);

        if (empty($sell)) {
            Flash::error('Sell not found');

            return redirect(route('sells.index'));
        }

        return view('sells.show')->with('sell', $sell);
    }

    /**
     * Show the form for editing the specified Sell.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $sell = $this->sellRepository->find($id);

        if (empty($sell)) {
            Flash::error('Sell not found');

            return redirect(route('sells.index'));
        }

        return view('sells.edit')->with('sell', $sell);
    }

    /**
     * Update the specified Sell in storage.
     *
     * @param int $id
     * @param UpdateSellRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSellRequest $request)
    {
        $sell = $this->sellRepository->find($id);

        if (empty($sell)) {
            Flash::error('Sell not found');

            return redirect(route('sells.index'));
        }

        $sell = $this->sellRepository->update($request->all(), $id);

        Flash::success('Sell updated successfully.');

        return redirect(route('sells.index'));
    }

    /**
     * Remove the specified Sell from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $sell = $this->sellRepository->find($id);

        if (empty($sell)) {
            Flash::error('Sell not found');

            return redirect(route('sells.index'));
        }

        $this->sellRepository->delete($id);

        Flash::success('Sell deleted successfully.');

        return redirect(route('sells.index'));
    }
}
