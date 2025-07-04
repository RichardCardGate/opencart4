<?php
namespace Opencart\Admin\Controller\Extension\Cardgate\Payment;

include_once 'cardgate.php';

class CardgateBillink extends CardgateGeneric {

    public function index() {
        $this->_index('cardgatebillink');
    }

    public function save() {
        return $this->_save('cardgatebillink');
    }
}
?>