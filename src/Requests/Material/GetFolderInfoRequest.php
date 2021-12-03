<?php

namespace Renhonghai\DoudianSDK\Requests\Material;

use Renhonghai\DoudianSDK\Requests\AbstractRequest;

class GetFolderInfoRequest extends AbstractRequest
{

	public function getUrlPath(): string
	{
		return "/material/getFolderInfo";
	}


}
