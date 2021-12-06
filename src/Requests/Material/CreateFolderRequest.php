<?php

namespace AK\DoudianSDK\Requests\Material;

use AK\DoudianSDK\Requests\AbstractRequest;

class CreateFolderRequest extends AbstractRequest
{

	public function getUrlPath(): string
	{
		return "/material/createFolder";
	}


}
