<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtcwhiteboard\V20201214\Models;

use AlibabaCloud\Tea\Model;

class SetAppStatusRequest extends Model
{
    /**
     * @description 白板应用唯一标识符
     *
     * @var string
     */
    public $appID;

    /**
     * @description 白板应用状态（取值：1:启用，2:停用）
     *
     * @var int
     */
    public $appStatus;
    protected $_name = [
        'appID'     => 'AppID',
        'appStatus' => 'AppStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appID) {
            $res['AppID'] = $this->appID;
        }
        if (null !== $this->appStatus) {
            $res['AppStatus'] = $this->appStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetAppStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppID'])) {
            $model->appID = $map['AppID'];
        }
        if (isset($map['AppStatus'])) {
            $model->appStatus = $map['AppStatus'];
        }

        return $model;
    }
}
