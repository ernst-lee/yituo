<?php
namespace Yituo\TheBase\Balances;

use Yituo\TheBase\BaseClient;

class Client extends BaseClient
{
    public $jar;

    /**
     * 获取金融信息
     *
     * @return mixed
     */
    public function getBalances() {
        return current($this->multiRequest([$this->makeRequest('/shop_admin/api/balances/index', null, [], "get")]));
    }
}