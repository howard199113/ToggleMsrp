<?php
  namespace Howard\ToggleMsrp\Block;

  class CheckLoggedIn extends \Magento\Framework\View\Element\Template
  {

    public function __construct(
      \Magento\Framework\View\Element\Template\Context $context,
      \Magento\Customer\Model\Session $session
      ) {
          parent::__construct($context);
          $this->_customerSession = $session;
      }

    public function renderMsrpToggle()
    {

      if($this->_customerSession->isLoggedIn()) {
        return true;
      } else {
        return false;
      }
    }


  }
 ?>
