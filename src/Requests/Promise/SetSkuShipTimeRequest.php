<?php

namespace AK\DoudianSDK\Requests\Promise;

use AK\DoudianSDK\Requests\AbstractRequest;

class SetSkuShipTimeRequest extends AbstractRequest
{

	public function getUrlPath(): string
	{
		return "/promise/setSkuShipTime";
	}


}
