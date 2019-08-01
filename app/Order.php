<?php

namespace App;

use function Couchbase\defaultDecoder;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    public function details()
    {
        return $this->hasMany('App\OrderDetail', 'order_id');
    }

    public function getShipInformationAttribute()
    {
        return ' - '. $this->ship_phone . '<br> - '. $this->ship_name . '<br> - ' . $this->ship_address;
    }

    public function getStatusLabelAttribute()
    {
        switch ($this->status) {
            case -1:
                return 'Đã huỷ';
                break;
            case 0:
                return 'Chờ xử lý';
                break;
            case 1:
                return 'Đã xác nhận';
                break;
            case 2:
                return 'Hoàn thành';
                break;
            default:
                return 'Không xác định';
                break;
        }
    }

}
