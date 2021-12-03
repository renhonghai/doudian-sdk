<?php

namespace Renhonghai\DoudianSDK\Requests\AfterSale;

use Renhonghai\DoudianSDK\Requests\AbstractRequest;

class DetailRequest extends AbstractRequest
{

	public function getUrlPath(): string
	{
		return "/afterSale/Detail";
	}


}
