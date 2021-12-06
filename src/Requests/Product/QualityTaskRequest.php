<?php

namespace AK\DoudianSDK\Requests\Product;

use AK\DoudianSDK\Requests\AbstractRequest;

class QualityTaskRequest extends AbstractRequest
{

	public function getUrlPath(): string
	{
		return "/product/qualityTask";
	}


}
