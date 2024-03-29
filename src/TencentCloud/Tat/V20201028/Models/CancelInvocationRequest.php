<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Tat\V20201028\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CancelInvocation请求参数结构体
 *
 * @method string getInvocationId() 获取执行活动ID
 * @method void setInvocationId(string $InvocationId) 设置执行活动ID
 * @method array getInstanceIds() 获取实例ID列表，上限100。支持实例类型：
<li> CVM </li>
<li> LIGHTHOUSE </li>
 * @method void setInstanceIds(array $InstanceIds) 设置实例ID列表，上限100。支持实例类型：
<li> CVM </li>
<li> LIGHTHOUSE </li>
 */
class CancelInvocationRequest extends AbstractModel
{
    /**
     * @var string 执行活动ID
     */
    public $InvocationId;

    /**
     * @var array 实例ID列表，上限100。支持实例类型：
<li> CVM </li>
<li> LIGHTHOUSE </li>
     */
    public $InstanceIds;

    /**
     * @param string $InvocationId 执行活动ID
     * @param array $InstanceIds 实例ID列表，上限100。支持实例类型：
<li> CVM </li>
<li> LIGHTHOUSE </li>
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("InvocationId",$param) and $param["InvocationId"] !== null) {
            $this->InvocationId = $param["InvocationId"];
        }

        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }
    }
}
