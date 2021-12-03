<?php

namespace Renhonghai\DoudianSDK\Requests\Antispam;

use Renhonghai\DoudianSDK\Requests\AbstractRequest;

class OrderQueryRequest extends AbstractRequest
{

	public function getUrlPath(): string
	{
		return "/antispam/orderQuery";
	}


}
