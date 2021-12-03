<?php

namespace Renhonghai\DoudianSDK\Requests\Product;

use Renhonghai\DoudianSDK\Requests\AbstractRequest;

class QualityDetailRequest extends AbstractRequest
{

	public function getUrlPath(): string
	{
		return "/product/qualityDetail";
	}


}
