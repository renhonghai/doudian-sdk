<?php

namespace Renhonghai\DoudianSDK\Requests\Order;

use Renhonghai\DoudianSDK\Requests\AbstractRequest;

class DownloadShopAccountItemFileRequest extends AbstractRequest
{

	public function getUrlPath(): string
	{
		return "/order/downloadShopAccountItemFile";
	}


}
