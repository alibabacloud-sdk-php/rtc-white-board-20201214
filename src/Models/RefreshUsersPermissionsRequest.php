<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtcwhiteboard\V20201214\Models;

use AlibabaCloud\Tea\Model;

class RefreshUsersPermissionsRequest extends Model
{
    /**
     * @description 需要刷新权限的用户ID，多个用英文逗号（,）分隔，最多30个，每个ID由纯数字组成
     *
     * @var string
     */
    public $userIds;

    /**
     * @description 白板文档唯一标识符
     *
     * @var string
     */
    public $docKey;

    /**
     * @description 白板应用唯一标识符
     *
     * @var string
     */
    public $appID;
    protected $_name = [
        'userIds' => 'UserIds',
        'docKey'  => 'DocKey',
        'appID'   => 'AppID',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->userIds) {
            $res['UserIds'] = $this->userIds;
        }
        if (null !== $this->docKey) {
            $res['DocKey'] = $this->docKey;
        }
        if (null !== $this->appID) {
            $res['AppID'] = $this->appID;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RefreshUsersPermissionsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UserIds'])) {
            $model->userIds = $map['UserIds'];
        }
        if (isset($map['DocKey'])) {
            $model->docKey = $map['DocKey'];
        }
        if (isset($map['AppID'])) {
            $model->appID = $map['AppID'];
        }

        return $model;
    }
}
