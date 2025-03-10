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
 * DeleteRegisterInstance请求参数结构体
 *
 * @method string getInstanceId() 获取托管实例ID。

可通过 [DescribeRegisterInstances(查询托管实例)](https://cloud.tencent.com/document/api/1340/96924) 接口获取。
 * @method void setInstanceId(string $InstanceId) 设置托管实例ID。

可通过 [DescribeRegisterInstances(查询托管实例)](https://cloud.tencent.com/document/api/1340/96924) 接口获取。
 */
class DeleteRegisterInstanceRequest extends AbstractModel
{
    /**
     * @var string 托管实例ID。

可通过 [DescribeRegisterInstances(查询托管实例)](https://cloud.tencent.com/document/api/1340/96924) 接口获取。
     */
    public $InstanceId;

    /**
     * @param string $InstanceId 托管实例ID。

可通过 [DescribeRegisterInstances(查询托管实例)](https://cloud.tencent.com/document/api/1340/96924) 接口获取。
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }
    }
}
