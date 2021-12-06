<?php

namespace AK\DoudianSDK\Requests\Sku;

use AK\DoudianSDK\Requests\AbstractRequest;

class EditPriceRequest extends AbstractRequest
{

	public function getUrlPath(): string
	{
		return "/sku/editPrice";
	}


}
