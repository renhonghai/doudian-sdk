<?php

namespace AK\DoudianSDK\Requests\Material;

use AK\DoudianSDK\Requests\AbstractRequest;

class QueryMaterialDetailRequest extends AbstractRequest
{

	public function getUrlPath(): string
	{
		return "/material/queryMaterialDetail";
	}


}
