<?php

namespace Renhonghai\DoudianSDK\Requests\Material;

use Renhonghai\DoudianSDK\Requests\AbstractRequest;

class DeleteFolderRequest extends AbstractRequest
{

	public function getUrlPath(): string
	{
		return "/material/deleteFolder";
	}


}
