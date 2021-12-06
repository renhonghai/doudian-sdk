<?php

namespace AK\DoudianSDK\Requests\Order;

use AK\DoudianSDK\Requests\AbstractRequest;

class GetShopAccountItemFileRequest extends AbstractRequest
{

	public function getUrlPath(): string
	{
		return "/order/getShopAccountItemFile";
	}


}
