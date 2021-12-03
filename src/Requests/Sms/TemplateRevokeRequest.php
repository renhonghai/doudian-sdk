<?php

namespace Renhonghai\DoudianSDK\Requests\Sms;

use Renhonghai\DoudianSDK\Requests\AbstractRequest;

class TemplateRevokeRequest extends AbstractRequest
{

	public function getUrlPath(): string
	{
		return "/sms/template/revoke";
	}


}
