<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtcwhiteboard\V20201214\Models;

use AlibabaCloud\Tea\Model;

class CreateWhiteBoardRequest extends Model
{
    /**
     * @description 创建白板的用户ID（客户业务用户），由1~32位大小写字母、数字、下划线、短划线（-）组成
     *
     * @var string
     */
    public $userId;

    /**
     * @description 白板应用唯一标识符
     *
     * @var string
     */
    public $appID;
    protected $_name = [
        'userId' => 'UserId',
        'appID'  => 'AppID',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->appID) {
            $res['AppID'] = $this->appID;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateWhiteBoardRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['AppID'])) {
            $model->appID = $map['AppID'];
        }

        return $model;
    }
}
