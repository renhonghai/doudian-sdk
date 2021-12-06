<?php

namespace AK\DoudianSDK\Requests\Material;

use AK\DoudianSDK\Requests\AbstractRequest;

class DeleteMaterialRequest extends AbstractRequest
{

	public function getUrlPath(): string
	{
		return "/material/deleteMaterial";
	}


}
