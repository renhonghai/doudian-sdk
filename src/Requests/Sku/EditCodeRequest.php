<?php

namespace Renhonghai\DoudianSDK\Requests\Sku;

use Renhonghai\DoudianSDK\Requests\AbstractRequest;

class EditCodeRequest extends AbstractRequest
{

	public function getUrlPath(): string
	{
		return "/sku/editCode";
	}


}
