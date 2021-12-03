<?php

namespace Renhonghai\DoudianSDK\Requests\Material;

use Renhonghai\DoudianSDK\Requests\AbstractRequest;

class CreateFolderRequest extends AbstractRequest
{

	public function getUrlPath(): string
	{
		return "/material/createFolder";
	}


}
