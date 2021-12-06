<?php

namespace AK\DoudianSDK\Requests\AfterSale;

use AK\DoudianSDK\Requests\AbstractRequest;

class SubmitEvidenceRequest extends AbstractRequest
{

	public function getUrlPath(): string
	{
		return "/afterSale/submitEvidence";
	}


}
