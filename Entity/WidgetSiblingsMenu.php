<?php

namespace Victoire\Widget\SiblingsMenuBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Victoire\Bundle\WidgetBundle\Entity\Widget;

/**
 * WidgetSiblingsMenu.
 *
 * @ORM\Table("vic_widget_siblingsmenu")
 * @ORM\Entity
 */
class WidgetSiblingsMenu extends Widget
{
    /**
     * @var string
     *
     * @ORM\Column(name="with_cousins", type="boolean", nullable=true)
     */
    protected $withCousins;

    /**
     * Get withCousins.
     *
     * @return string
     */
    public function getWithCousins()
    {
        return $this->withCousins;
    }

    /**
     * Set withCousins.
     *
     * @param string $withCousins
     *
     * @return $this
     */
    public function setWithCousins($withCousins)
    {
        $this->withCousins = $withCousins;

        return $this;
    }

    /**
     * Get the parent of the page.
     *
     * @return Page The parent of the page
     */
    public function getPageParent()
    {
        $parent = null;

        //get the view
        $view = $this->getCurrentView();

        if ($view !== null) {
            $parent = $view->getParent();
        }

        return $parent;
    }
}
