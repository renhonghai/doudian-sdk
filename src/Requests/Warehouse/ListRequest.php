<?php

namespace AK\DoudianSDK\Requests\Warehouse;

use AK\DoudianSDK\Requests\AbstractRequest;

class ListRequest extends AbstractRequest
{

	public function getUrlPath(): string
	{
		return "/warehouse/list";
	}


}
