<?php

namespace Renhonghai\DoudianSDK\Requests\Product;

use Renhonghai\DoudianSDK\Requests\AbstractRequest;

class QualityTaskRequest extends AbstractRequest
{

	public function getUrlPath(): string
	{
		return "/product/qualityTask";
	}


}
