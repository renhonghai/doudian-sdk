<?php

namespace Renhonghai\DoudianSDK\Requests\Material;

use Renhonghai\DoudianSDK\Requests\AbstractRequest;

class QueryMaterialDetailRequest extends AbstractRequest
{

	public function getUrlPath(): string
	{
		return "/material/queryMaterialDetail";
	}


}
