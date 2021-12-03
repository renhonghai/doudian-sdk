<?php

namespace Renhonghai\DoudianSDK\Requests\Spu;

use Renhonghai\DoudianSDK\Requests\AbstractRequest;

class GetKeyPropertyByCidRequest extends AbstractRequest
{

	public function getUrlPath(): string
	{
		return "/spu/getKeyPropertyByCid";
	}


}
