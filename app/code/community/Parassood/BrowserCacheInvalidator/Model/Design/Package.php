<?php
/**
 * @category    ParasSood
 * @package     Parassood_BrowserCacheInvalidator
 * @author      paras89@live.com
 */

class Parassood_BrowserCacheInvalidator_Model_Design_Package extends Mage_Core_Model_Design_Package
{

    /**
     * Get skin file url
     *
     * @param string $file
     * @param array $params
     * @return string
     */
    public function getSkinUrl($file = null, array $params = array())
    {
        Varien_Profiler::start(__METHOD__);
        if (empty($params['_type'])) {
            $params['_type'] = 'skin';
        }
        if (empty($params['_default'])) {
            $params['_default'] = false;
        }
        $this->updateParamDefaults($params);
        if (!empty($file)) {
            $result = $this->_fallback(
                $file,
                $params,
                $this->_fallback->getFallbackScheme(
                    $params['_area'],
                    $params['_package'],
                    $params['_theme']
                )
            );
        }
        $result = $this->getSkinBaseUrl($params) . (empty($file) ? '' : $file . "?v=" . md5(filemtime($result)));
        Varien_Profiler::stop(__METHOD__);
        return $result;
    }





}