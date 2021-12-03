<?php

namespace Renhonghai\DoudianSDK\Requests\Material;

use Renhonghai\DoudianSDK\Requests\AbstractRequest;

class DeleteMaterialRequest extends AbstractRequest
{

	public function getUrlPath(): string
	{
		return "/material/deleteMaterial";
	}


}
