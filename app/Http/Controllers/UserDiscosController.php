<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use App\Http\Requests\UserDiscoCreateRequest;
use App\Http\Requests\UserDiscoUpdateRequest;
use App\Repositories\UserDiscoRepository;
use App\Validators\UserDiscoValidator;

/**
 * Class UserDiscosController.
 *
 * @package namespace App\Http\Controllers;
 */
class UserDiscosController extends Controller
{
    /**
     * @var UserDiscoRepository
     */
    protected $repository;

    /**
     * @var UserDiscoValidator
     */
    protected $validator;

    /**
     * UserDiscosController constructor.
     *
     * @param UserDiscoRepository $repository
     * @param UserDiscoValidator $validator
     */
    public function __construct(UserDiscoRepository $repository, UserDiscoValidator $validator)
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
        $userDiscos = $this->repository->all();

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $userDiscos,
            ]);
        }

        return view('userDiscos.index', compact('userDiscos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  UserDiscoCreateRequest $request
     *
     * @return \Illuminate\Http\Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function store(UserDiscoCreateRequest $request)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_CREATE);

            $userDisco = $this->repository->create($request->all());

            $response = [
                'message' => 'UserDisco created.',
                'data'    => $userDisco->toArray(),
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
        $userDisco = $this->repository->find($id);

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $userDisco,
            ]);
        }

        return view('userDiscos.show', compact('userDisco'));
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
        $userDisco = $this->repository->find($id);

        return view('userDiscos.edit', compact('userDisco'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  UserDiscoUpdateRequest $request
     * @param  string            $id
     *
     * @return Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function update(UserDiscoUpdateRequest $request, $id)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_UPDATE);

            $userDisco = $this->repository->update($request->all(), $id);

            $response = [
                'message' => 'UserDisco updated.',
                'data'    => $userDisco->toArray(),
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
                'message' => 'UserDisco deleted.',
                'deleted' => $deleted,
            ]);
        }

        return redirect()->back()->with('message', 'UserDisco deleted.');
    }
}
