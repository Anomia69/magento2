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
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade Magento to newer
 * versions in the future. If you wish to customize Magento for your
 * needs please refer to http://www.magentocommerce.com for more information.
 *
 * @category    Mage
 * @package     Mage_DesignEditor
 * @copyright   Copyright (c) 2012 X.commerce, Inc. (http://www.magentocommerce.com)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

class Mage_DesignEditor_Block_Adminhtml_ThemeTest extends PHPUnit_Framework_TestCase
{
    /**
     * @cover Mage_DesignEditor_Block_Adminhtml_Theme::addButton
     * @cover Mage_DesignEditor_Block_Adminhtml_Theme::clearButtons
     * @cover Mage_DesignEditor_Block_Adminhtml_Theme::getButtonsHtml
     */
    public function testButtons()
    {
        $themeMock  =  $this->getMock('Mage_DesignEditor_Block_Adminhtml_Theme', null, array(), '', false);
        $buttonMock = $this->getMock('StdClass', array('toHtml'));

        $buttonMock->expects($this->once())
            ->method('toHtml')
            ->will($this->returnValue('Block html data'));

        $themeMock->addButton($buttonMock);
        $this->assertEquals('Block html data', $themeMock->getButtonsHtml());

        $themeMock->clearButtons();
        $this->assertEquals('', $themeMock->getButtonsHtml());
    }
}
