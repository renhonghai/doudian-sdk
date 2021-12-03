<?php

namespace Renhonghai\DoudianSDK\Requests\Spu;

use Renhonghai\DoudianSDK\Requests\AbstractRequest;

class GetSpuTplRequest extends AbstractRequest
{

	public function getUrlPath(): string
	{
		return "/spu/getSpuTpl";
	}


}
