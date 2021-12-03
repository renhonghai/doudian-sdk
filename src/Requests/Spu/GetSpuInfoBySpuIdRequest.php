<?php

namespace Renhonghai\DoudianSDK\Requests\Spu;

use Renhonghai\DoudianSDK\Requests\AbstractRequest;

class GetSpuInfoBySpuIdRequest extends AbstractRequest
{

	public function getUrlPath(): string
	{
		return "/spu/getSpuInfoBySpuId";
	}


}
