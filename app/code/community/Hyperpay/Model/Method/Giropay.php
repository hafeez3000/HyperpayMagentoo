<?php
/**
 * Magento
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@magentocommerce.com so we can send you a copy immediately.
 *
 *
 * @package     Hyperpay
 * @copyright   Copyright (c) 2014 HYPERPAY
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

class Hyperpay_Model_Method_Giropay extends Hyperpay_Model_Method_Abstract
{

    /**
     * Path for payment form block
     *
     * @var string
     */
    protected $_formBlockType = 'hyperpay/payment_form_giropay';

    /**
     * Magento method code
     *
     * @var string
     */
    protected $_code = 'hyperpay_giropay';

    /**
     *
     * @var string
     */
    protected $_accountBrand = 'GIROPAY';

    /**
     *
     * @var string
     */
    protected $_methodCode = 'OT';

    /**
     *
     * @var string
     */
    protected $_subtype = 'GIROPAY';

    /**
     * Payment Title
     *
     * @var type
     */
    protected $_methodTitle = 'giropay';

}
