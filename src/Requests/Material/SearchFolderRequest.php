<?php

namespace AK\DoudianSDK\Requests\Material;

use AK\DoudianSDK\Requests\AbstractRequest;

class SearchFolderRequest extends AbstractRequest
{

	public function getUrlPath(): string
	{
		return "/material/searchFolder";
	}


}
