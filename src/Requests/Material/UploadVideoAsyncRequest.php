<?php

namespace Renhonghai\DoudianSDK\Requests\Material;

use Renhonghai\DoudianSDK\Requests\AbstractRequest;

class UploadVideoAsyncRequest extends AbstractRequest
{

	public function getUrlPath(): string
	{
		return "/material/uploadVideoAsync";
	}


}
