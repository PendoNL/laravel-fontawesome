<?php

namespace PendoNL\LaravelFontAwesome;

class LaravelFontAwesome
{
    public function icons($version=null)
    {
        if(is_null($version))
        {
            $version = config('laravel-fontawesome.default_version');
        }

        return include(__DIR__.'/versions/v'.$version.'/icons.php');
    }

    public function icon($icon, $options = [])
    {
        $options = $this->getOptions($options);

        $classes = $this->buildIconClasses($icon, (isset($options['class']) ? $options['class'] : ''));

        $attributes = $this->buildAttributes($options, $classes);

        return $this->buildIcon($attributes);
    }

    /**
     * Strip the default fa- prefix from the icon name if provider.
     *
     * @param $icon
     *
     * @return string
     */
    protected function getIcon($icon)
    {
        return 'fa-'.str_replace('fa-', '', $icon);
    }

    /**
     * Get the icon options. If no array is given cast the option to a
     * string and assume it is an extra class name.
     *
     * @param $options
     *
     * @return array
     */
    protected function getOptions($options)
    {
        if (!is_array($options)) {
            $options = [
                'class' => (string) $options,
            ];
        }

        return $options;
    }

    /**
     * Gets the list of class names to add to the icon element we are about to generate.
     *
     * @param $icon
     * @param $extraClasses
     *
     * @return string
     */
    protected function buildIconClasses($icon, $extraClasses)
    {
        return 'fa '.$this->getIcon($icon).($extraClasses != '' ? ' '.$extraClasses : '');
    }

    /**
     * Build the attribute list to add to the icon we are about to generate.
     *
     * @param $options
     * @param $classes
     *
     * @return string
     */
    protected function buildAttributes($options, $classes)
    {
        $attributes = [];
        $attributes[] = 'class="'.$classes.'"';

        unset($options['class']);

        if (is_array($options)) {
            foreach ($options as $attribute => $value) {
                $attributes[] = $this->createAttribute($attribute, $value);
            }
        }

        return (count($attributes) > 0) ? implode(' ', $attributes) : '';
    }

    /**
     * Build the attribute.
     *
     * @param $attribute
     * @param $value
     *
     * @return string
     */
    protected function createAttribute($attribute, $value)
    {
        return $attribute.'="'.$value.'"';
    }

    /**
     * Build the icon with the correct attributes.
     *
     * @param $attributes
     *
     * @return string
     */
    protected function buildIcon($attributes)
    {
        return '<i '.$attributes.'></i>';
    }
}
