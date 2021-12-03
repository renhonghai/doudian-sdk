<?php

namespace Renhonghai\DoudianSDK\Requests\Warehouse;

use Renhonghai\DoudianSDK\Requests\AbstractRequest;

class EditRequest extends AbstractRequest
{

	public function getUrlPath(): string
	{
		return "/warehouse/edit";
	}


}
