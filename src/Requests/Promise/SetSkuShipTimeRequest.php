<?php

namespace Renhonghai\DoudianSDK\Requests\Promise;

use Renhonghai\DoudianSDK\Requests\AbstractRequest;

class SetSkuShipTimeRequest extends AbstractRequest
{

	public function getUrlPath(): string
	{
		return "/promise/setSkuShipTime";
	}


}
