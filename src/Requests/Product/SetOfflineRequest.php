<?php

namespace Renhonghai\DoudianSDK\Requests\Product;

use Renhonghai\DoudianSDK\Requests\AbstractRequest;

class SetOfflineRequest extends AbstractRequest
{

	public function getUrlPath(): string
	{
		return "/product/setOffline";
	}


}
