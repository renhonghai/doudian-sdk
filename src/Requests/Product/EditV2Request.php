<?php

namespace AK\DoudianSDK\Requests\Product;

use AK\DoudianSDK\Requests\AbstractRequest;

class EditV2Request extends AbstractRequest
{

	public function getUrlPath(): string
	{
		return "/product/editV2";
	}


}
