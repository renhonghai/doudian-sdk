<?php

namespace Renhonghai\DoudianSDK\Requests\Product;

use Renhonghai\DoudianSDK\Requests\AbstractRequest;

class QualificationConfigRequest extends AbstractRequest
{

	public function getUrlPath(): string
	{
		return "/product/qualificationConfig";
	}


}
