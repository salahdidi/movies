<?php

namespace App\Modules\GamePlayer\Cases\Create;

use Techindeck\LaravelModuleGenerator\Contracts\CaseController;
use Exception;

class CreateGamePlayerController extends CaseController
{


    private CreateGamePlayerUseCase $useCase;

    /**
     */
    function __construct(CreateGamePlayerUseCase $createGamePlayerUseCase)
    {
        $this->useCase = $createGamePlayerUseCase;
    }



    /**
     *
     * @return mixed
     */
    function executeImpl()
    {
        $data = $this->getReq();

        try {
            $data = $this->useCase->execute($data);
            return response()->json($data, $this->getRes()::HTTP_CREATED);
        } catch (Exception $e) {
            return response()->json(['error' => $e->getMessage()], $this->getRes()::HTTP_INTERNAL_SERVER_ERROR);
            // throw new Exception($e->getMessage(), $e->getCode(), $e);
        }
    }

}
