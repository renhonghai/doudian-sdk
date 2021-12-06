<?php

namespace AK\DoudianSDK\Requests\Spu;

use AK\DoudianSDK\Requests\AbstractRequest;

class GetSpuTplRequest extends AbstractRequest
{

	public function getUrlPath(): string
	{
		return "/spu/getSpuTpl";
	}


}
