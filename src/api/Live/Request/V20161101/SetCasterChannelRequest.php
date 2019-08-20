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
namespace Aliyun\Api\Live\Request\V20161101;

use Aliyun\Core\RpcAcsRequest;

class SetCasterChannelRequest extends RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("live", "2016-11-01", "SetCasterChannel", "live", "openAPI");
		$this->setMethod("POST");
	}

	private  $resourceId;

	private  $playStatus;

	private  $casterId;

	private  $ownerId;

	private  $seekOffset;

	private  $channelId;

	public function getResourceId() {
		return $this->resourceId;
	}

	public function setResourceId($resourceId) {
		$this->resourceId = $resourceId;
		$this->queryParameters["ResourceId"]=$resourceId;
	}

	public function getPlayStatus() {
		return $this->playStatus;
	}

	public function setPlayStatus($playStatus) {
		$this->playStatus = $playStatus;
		$this->queryParameters["PlayStatus"]=$playStatus;
	}

	public function getCasterId() {
		return $this->casterId;
	}

	public function setCasterId($casterId) {
		$this->casterId = $casterId;
		$this->queryParameters["CasterId"]=$casterId;
	}

	public function getOwnerId() {
		return $this->ownerId;
	}

	public function setOwnerId($ownerId) {
		$this->ownerId = $ownerId;
		$this->queryParameters["OwnerId"]=$ownerId;
	}

	public function getSeekOffset() {
		return $this->seekOffset;
	}

	public function setSeekOffset($seekOffset) {
		$this->seekOffset = $seekOffset;
		$this->queryParameters["SeekOffset"]=$seekOffset;
	}

	public function getChannelId() {
		return $this->channelId;
	}

	public function setChannelId($channelId) {
		$this->channelId = $channelId;
		$this->queryParameters["ChannelId"]=$channelId;
	}
	
}