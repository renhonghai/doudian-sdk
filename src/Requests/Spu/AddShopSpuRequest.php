<?php

namespace Renhonghai\DoudianSDK\Requests\Spu;

use Renhonghai\DoudianSDK\Requests\AbstractRequest;

class AddShopSpuRequest extends AbstractRequest
{

	public function getUrlPath(): string
	{
		return "/spu/addShopSpu";
	}


}
