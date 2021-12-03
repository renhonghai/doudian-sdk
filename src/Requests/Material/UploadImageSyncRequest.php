<?php

namespace Renhonghai\DoudianSDK\Requests\Material;

use Renhonghai\DoudianSDK\Requests\AbstractRequest;

class UploadImageSyncRequest extends AbstractRequest
{

	public function getUrlPath(): string
	{
		return "/material/uploadImageSync";
	}


}
