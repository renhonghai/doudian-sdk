<?php

namespace Renhonghai\DoudianSDK\Requests\Antispam;

use Renhonghai\DoudianSDK\Requests\AbstractRequest;

class UserLoginRequest extends AbstractRequest
{

	public function getUrlPath(): string
	{
		return "/antispam/userLogin";
	}


}
