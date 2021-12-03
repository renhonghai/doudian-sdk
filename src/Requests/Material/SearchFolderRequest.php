<?php

namespace Renhonghai\DoudianSDK\Requests\Material;

use Renhonghai\DoudianSDK\Requests\AbstractRequest;

class SearchFolderRequest extends AbstractRequest
{

	public function getUrlPath(): string
	{
		return "/material/searchFolder";
	}


}
