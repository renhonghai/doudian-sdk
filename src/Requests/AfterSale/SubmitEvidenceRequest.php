<?php

namespace Renhonghai\DoudianSDK\Requests\AfterSale;

use Renhonghai\DoudianSDK\Requests\AbstractRequest;

class SubmitEvidenceRequest extends AbstractRequest
{

	public function getUrlPath(): string
	{
		return "/afterSale/submitEvidence";
	}


}
