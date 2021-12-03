<?php

namespace Renhonghai\DoudianSDK\Requests\Product;

use Renhonghai\DoudianSDK\Requests\AbstractRequest;

class QualityListRequest extends AbstractRequest
{

	public function getUrlPath(): string
	{
		return "/product/qualityList";
	}


}
