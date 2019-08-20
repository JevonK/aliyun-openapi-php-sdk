<?php
/*
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 */
namespace Aliyun\Api\Domain_intl\Request\V20171218;

use Aliyun\Core\RpcAcsRequest;

class SaveSingleTaskForCreatingOrderTransferRequest extends RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Domain-intl", "2017-12-18", "SaveSingleTaskForCreatingOrderTransfer", "domain", "openAPI");
		$this->setMethod("POST");
	}

	private  $permitPremiumTransfer;

	private  $authorizationCode;

	private  $userClientIp;

	private  $domainName;

	private  $registrantProfileId;

	private  $lang;

	public function getPermitPremiumTransfer() {
		return $this->permitPremiumTransfer;
	}

	public function setPermitPremiumTransfer($permitPremiumTransfer) {
		$this->permitPremiumTransfer = $permitPremiumTransfer;
		$this->queryParameters["PermitPremiumTransfer"]=$permitPremiumTransfer;
	}

	public function getAuthorizationCode() {
		return $this->authorizationCode;
	}

	public function setAuthorizationCode($authorizationCode) {
		$this->authorizationCode = $authorizationCode;
		$this->queryParameters["AuthorizationCode"]=$authorizationCode;
	}

	public function getUserClientIp() {
		return $this->userClientIp;
	}

	public function setUserClientIp($userClientIp) {
		$this->userClientIp = $userClientIp;
		$this->queryParameters["UserClientIp"]=$userClientIp;
	}

	public function getDomainName() {
		return $this->domainName;
	}

	public function setDomainName($domainName) {
		$this->domainName = $domainName;
		$this->queryParameters["DomainName"]=$domainName;
	}

	public function getRegistrantProfileId() {
		return $this->registrantProfileId;
	}

	public function setRegistrantProfileId($registrantProfileId) {
		$this->registrantProfileId = $registrantProfileId;
		$this->queryParameters["RegistrantProfileId"]=$registrantProfileId;
	}

	public function getLang() {
		return $this->lang;
	}

	public function setLang($lang) {
		$this->lang = $lang;
		$this->queryParameters["Lang"]=$lang;
	}
	
}