<?php

namespace AK\DoudianSDK\Requests\Spu;

use AK\DoudianSDK\Requests\AbstractRequest;

class GetSpuInfoBySpuIdRequest extends AbstractRequest
{

	public function getUrlPath(): string
	{
		return "/spu/getSpuInfoBySpuId";
	}


}
