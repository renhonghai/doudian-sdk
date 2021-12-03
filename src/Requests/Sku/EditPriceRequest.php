<?php

namespace Renhonghai\DoudianSDK\Requests\Sku;

use Renhonghai\DoudianSDK\Requests\AbstractRequest;

class EditPriceRequest extends AbstractRequest
{

	public function getUrlPath(): string
	{
		return "/sku/editPrice";
	}


}
