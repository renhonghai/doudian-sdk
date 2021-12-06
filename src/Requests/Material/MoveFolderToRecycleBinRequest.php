<?php

namespace AK\DoudianSDK\Requests\Material;

use AK\DoudianSDK\Requests\AbstractRequest;

class MoveFolderToRecycleBinRequest extends AbstractRequest
{

	public function getUrlPath(): string
	{
		return "/material/moveFolderToRecycleBin";
	}


}
