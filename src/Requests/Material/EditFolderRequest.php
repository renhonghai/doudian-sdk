<?php

namespace Renhonghai\DoudianSDK\Requests\Material;

use Renhonghai\DoudianSDK\Requests\AbstractRequest;

class EditFolderRequest extends AbstractRequest
{

	public function getUrlPath(): string
	{
		return "/material/editFolder";
	}


}
