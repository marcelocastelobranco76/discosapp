<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use App\Http\Requests;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use App\Http\Requests\DiscoCreateRequest;
use App\Http\Requests\DiscoUpdateRequest;
use App\Repositories\DiscoRepository;
use App\Repositories\UserDiscoRepository;
use App\Validators\DiscoValidator;
use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 * Class DiscosController.
 *
 * @package namespace App\Http\Controllers;
 */
class DiscosController extends Controller
{
    /**
     * @var DiscoRepository
     * @var UserDiscoRepository
     */
    protected $repository;
    protected $repositoryUserDisco;

    /**
     * @var DiscoValidator
     */
    protected $validator;

    /**
     * DiscosController constructor.
     *
     * @param DiscoRepository $repository
     * @param DiscoValidator $validator
     * @param UserDiscoRepository $repository
     */
    public function __construct(DiscoRepository $repository, DiscoValidator $validator, UserDiscoRepository $repositoryUserDisco)
    {
        $this->repository = $repository;

        $this->validator  = $validator;

        $this->repositoryUserDisco = $repositoryUserDisco;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $userID = Auth::user()->id;

        $this->repository->pushCriteria(app('Prettus\Repository\Criteria\RequestCriteria'));

        $discos = DB::table('users')
        ->join('user_discos', 'user_discos.user_id', '=', 'users.id')
        ->join('discos', 'user_discos.disco_id', '=', 'discos.id')
        ->select('discos.id','discos.titulo','discos.artista', 'discos.ano', 'discos.created_at', 'discos.updated_at')
        ->where('users.id','=', $userID)
        ->paginate(2);

        $this->repositoryUserDisco->pushCriteria(app('Prettus\Repository\Criteria\RequestCriteria'));

        $userDisco = $this->repositoryUserDisco->all();

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $discos,
            ]);
        }

        return view('discos.index', compact('discos'));
    }

    public function create()
    {
      return view('discos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  DiscoCreateRequest $request
     *
     * @return \Illuminate\Http\Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function store(DiscoCreateRequest $request)
    {

        try {

            $userID = Auth::user()->id;

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_CREATE);

            $disco = $this->repository->create($request->all());

            $discoIDCadastrado = $disco->id;

            $userDisco = $this->repositoryUserDisco->create(['user_id'=>$userID,
            'disco_id'=>$discoIDCadastrado]);

            $response = [
                'message' => 'Disco created.',
                'data'    => $disco->toArray(),
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
        $disco = $this->repository->find($id);

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $disco,
            ]);
        }

        return view('discos.show', compact('disco'));
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
        $disco = $this->repository->find($id);

        return view('discos.edit', compact('disco'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  DiscoUpdateRequest $request
     * @param  string            $id
     *
     * @return Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function update(DiscoUpdateRequest $request, $id)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_UPDATE);

            $disco = $this->repository->update($request->all(), $id);

            $response = [
                'message' => 'Disco updated.',
                'data'    => $disco->toArray(),
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
                'message' => 'Disco deleted.',
                'deleted' => $deleted,
            ]);
        }

        return redirect()->back()->with('message', 'Disco deleted.');
    }
}
