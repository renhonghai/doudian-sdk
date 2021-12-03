<?php

namespace Renhonghai\DoudianSDK\Requests\Material;

use Renhonghai\DoudianSDK\Requests\AbstractRequest;

class MoveMaterialToRecycleBinRequest extends AbstractRequest
{

	public function getUrlPath(): string
	{
		return "/material/moveMaterialToRecycleBin";
	}


}
