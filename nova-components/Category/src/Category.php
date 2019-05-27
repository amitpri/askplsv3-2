<?php

namespace Askpls\Category;

use Laravel\Nova\ResourceTool;

class Category extends ResourceTool
{
    /**
     * Get the displayable name of the resource tool.
     *
     * @return string
     */
    public function name()
    {
        return 'Category';
    }

    /**
     * Get the component name for the resource tool.
     *
     * @return string
     */
    public function component()
    {
        return 'category';
    }
}
