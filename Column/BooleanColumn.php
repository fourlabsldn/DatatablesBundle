<?php

/**
 * This file is part of the SgDatatablesBundle package.
 *
 * (c) stwe <https://github.com/stwe/DatatablesBundle>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sg\DatatablesBundle\Column;

use Sg\DatatablesBundle\Column\AbstractColumn as BaseColumn;

/**
 * Class BooleanColumn
 *
 * @package Sg\DatatablesBundle\Column
 */
class BooleanColumn extends BaseColumn
{
    //-------------------------------------------------
    // Ctor.
    //-------------------------------------------------

    /**
     * Ctor.
     *
     * @param null|string $property An entity's property
     */
    public function __construct($property = null)
    {
        parent::__construct($property);

        $this->setMRender('render_boolean_icons');
    }


    //-------------------------------------------------
    // ColumnInterface
    //-------------------------------------------------

    /**
     * {@inheritdoc}
     */
    public function getClassName()
    {
        return 'boolean';
    }

    /**
     * {@inheritdoc}
     */
    public function setOptions(array $options)
    {
        parent::setOptions($options);
    }
}