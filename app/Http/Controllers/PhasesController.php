<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use App\Http\Requests\PhaseCreateRequest;
use App\Http\Requests\PhaseUpdateRequest;
use App\Contracts\Repositories\PhaseRepository;
use App\Validators\PhaseValidator;


class PhasesController extends Controller
{

    /**
     * @var PhaseRepository
     */
    protected $repository;

    /**
     * @var PhaseValidator
     */
    protected $validator;

    public function __construct(PhaseRepository $repository, PhaseValidator $validator)
    {
        $this->repository = $repository;
        $this->validator  = $validator;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->repository->pushCriteria(app('Prettus\Repository\Criteria\RequestCriteria'));
        $phases = $this->repository->all();

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $phases,
            ]);
        }

        return view('phases.index', compact('phases'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  PhaseCreateRequest $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(PhaseCreateRequest $request)
    {

        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_CREATE);

            $phase = $this->repository->create($request->all());

            $response = [
                'message' => 'Phase created.',
                'data'    => $phase->toArray(),
            ];

            if ($request->wantsJson()) {

                return response()->json($response);
            }

            return redirect()->back()->with('message', $response['message']);
        } catch (ValidatorException $e) {
            if ($request->wantsJson()) {
                return response()->json([
                    'error'   => true,
                    'message' => $e->getMessageBag()
                ]);
            }

            return redirect()->back()->withErrors($e->getMessageBag())->withInput();
        }
    }


    /**
     * Display the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $phase = $this->repository->find($id);

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $phase,
            ]);
        }

        return view('phases.show', compact('phase'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $phase = $this->repository->find($id);

        return view('phases.edit', compact('phase'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  PhaseUpdateRequest $request
     * @param  string            $id
     *
     * @return Response
     */
    public function update(PhaseUpdateRequest $request, $id)
    {

        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_UPDATE);

            $phase = $this->repository->update($request->all(), $id);

            $response = [
                'message' => 'Phase updated.',
                'data'    => $phase->toArray(),
            ];

            if ($request->wantsJson()) {

                return response()->json($response);
            }

            return redirect()->back()->with('message', $response['message']);
        } catch (ValidatorException $e) {

            if ($request->wantsJson()) {

                return response()->json([
                    'error'   => true,
                    'message' => $e->getMessageBag()
                ]);
            }

            return redirect()->back()->withErrors($e->getMessageBag())->withInput();
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleted = $this->repository->delete($id);

        if (request()->wantsJson()) {

            return response()->json([
                'message' => 'Phase deleted.',
                'deleted' => $deleted,
            ]);
        }

        return redirect()->back()->with('message', 'Phase deleted.');
    }
}
