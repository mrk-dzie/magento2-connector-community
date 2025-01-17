<?php

declare(strict_types=1);

namespace Akeneo\Connector\Model\Source;

use Magento\Framework\Option\ArrayInterface;

/**
 * Class StatusMode
 *
 * @package   Akeneo\Connector\Model\Source
 * @author    Agence Dn'D <contact@dnd.fr>
 * @copyright 2004-present Agence Dn'D
 * @license   https://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 * @link      https://www.dnd.fr/
 */
class StatusMode implements ArrayInterface
{
    /**
     * Default product status constant
     *
     * @var string DEFAULT_PRODUCT_STATUS
     */
    const DEFAULT_PRODUCT_STATUS = 'default_product_status';
    /**
     * Status based on completeness level constant
     *
     * @var string STATUS_BASED_ON_COMPLETENESS_LEVEL
     */
    const STATUS_BASED_ON_COMPLETENESS_LEVEL = 'status_based_on_completeness_level';

    /**
     * Return array of options for the status mode filter
     *
     * @return array Format: array('<value>' => '<label>', ...)
     */
    public function toOptionArray()
    {
        return [
            self::DEFAULT_PRODUCT_STATUS             => __('Default status'),
            self::STATUS_BASED_ON_COMPLETENESS_LEVEL => __('Status based on completeness level'),
        ];
    }
}
