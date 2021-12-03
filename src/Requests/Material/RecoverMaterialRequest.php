<?php

namespace Renhonghai\DoudianSDK\Requests\Material;

use Renhonghai\DoudianSDK\Requests\AbstractRequest;

class RecoverMaterialRequest extends AbstractRequest
{

	public function getUrlPath(): string
	{
		return "/material/recoverMaterial";
	}


}
