<?php

namespace Renhonghai\DoudianSDK\Requests\Material;

use Renhonghai\DoudianSDK\Requests\AbstractRequest;

class SearchMaterialRequest extends AbstractRequest
{

	public function getUrlPath(): string
	{
		return "/material/searchMaterial";
	}


}
