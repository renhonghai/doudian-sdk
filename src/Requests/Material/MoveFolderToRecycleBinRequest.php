<?php

namespace Renhonghai\DoudianSDK\Requests\Material;

use Renhonghai\DoudianSDK\Requests\AbstractRequest;

class MoveFolderToRecycleBinRequest extends AbstractRequest
{

	public function getUrlPath(): string
	{
		return "/material/moveFolderToRecycleBin";
	}


}
