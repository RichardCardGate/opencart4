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
    public function install() {
        $this->load->model('extension/cardgate/payment/cardgatebillink');
     //   $this->model_setting_event->addEvent('checkout_payment_before','onCheckoutPaymentBefore');
    }

}
?>