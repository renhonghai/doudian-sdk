<?php

namespace Renhonghai\DoudianSDK\Requests\Material;

use Renhonghai\DoudianSDK\Requests\AbstractRequest;

class EditMaterialRequest extends AbstractRequest
{

	public function getUrlPath(): string
	{
		return "/material/editMaterial";
	}


}
