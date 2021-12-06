<?php

namespace AK\DoudianSDK\Requests\Order;

use AK\DoudianSDK\Requests\AbstractRequest;

class DownloadShopAccountItemFileRequest extends AbstractRequest
{

	public function getUrlPath(): string
	{
		return "/order/downloadShopAccountItemFile";
	}


}
