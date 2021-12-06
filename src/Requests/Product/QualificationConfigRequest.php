<?php

namespace AK\DoudianSDK\Requests\Product;

use AK\DoudianSDK\Requests\AbstractRequest;

class QualificationConfigRequest extends AbstractRequest
{

	public function getUrlPath(): string
	{
		return "/product/qualificationConfig";
	}


}
