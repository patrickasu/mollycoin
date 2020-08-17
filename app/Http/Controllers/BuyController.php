<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateBuyRequest;
use App\Http\Requests\UpdateBuyRequest;
use App\Repositories\BuyRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class BuyController extends AppBaseController
{
    /** @var  BuyRepository */
    private $buyRepository;

    public function __construct(BuyRepository $buyRepo)
    {
        $this->buyRepository = $buyRepo;
    }

    /**
     * Display a listing of the Buy.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $buys = $this->buyRepository->all();

        return view('buys.index')
            ->with('buys', $buys);
    }

    /**
     * Show the form for creating a new Buy.
     *
     * @return Response
     */
    public function create()
    {
        return view('buys.create');
    }

    /**
     * Store a newly created Buy in storage.
     *
     * @param CreateBuyRequest $request
     *
     * @return Response
     */
    public function store(CreateBuyRequest $request)
    {
        $input = $request->all();

        $buy = $this->buyRepository->create($input);

        Flash::success('Buy saved successfully.');

        return redirect(route('buys.index'));
    }

    /**
     * Display the specified Buy.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $buy = $this->buyRepository->find($id);

        if (empty($buy)) {
            Flash::error('Buy not found');

            return redirect(route('buys.index'));
        }

        return view('buys.show')->with('buy', $buy);
    }

    /**
     * Show the form for editing the specified Buy.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $buy = $this->buyRepository->find($id);

        if (empty($buy)) {
            Flash::error('Buy not found');

            return redirect(route('buys.index'));
        }

        return view('buys.edit')->with('buy', $buy);
    }

    /**
     * Update the specified Buy in storage.
     *
     * @param int $id
     * @param UpdateBuyRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateBuyRequest $request)
    {
        $buy = $this->buyRepository->find($id);

        if (empty($buy)) {
            Flash::error('Buy not found');

            return redirect(route('buys.index'));
        }

        $buy = $this->buyRepository->update($request->all(), $id);

        Flash::success('Buy updated successfully.');

        return redirect(route('buys.index'));
    }

    /**
     * Remove the specified Buy from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $buy = $this->buyRepository->find($id);

        if (empty($buy)) {
            Flash::error('Buy not found');

            return redirect(route('buys.index'));
        }

        $this->buyRepository->delete($id);

        Flash::success('Buy deleted successfully.');

        return redirect(route('buys.index'));
    }
}
