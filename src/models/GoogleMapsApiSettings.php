<?php

/**
 * GoogleMapsApi plugin for Craft CMS 3.x
 *
 * GoogleMapsApi model settings
 *
 * @link      https://www.bolden.nl
 * @copyright Copyright (c) 2018 Bolden B.V.
 * @author Klearchos Douvantzis
 */

namespace bolden\googlemapsapi\models;

class GoogleMapsApiSettings extends \craft\base\Model
{
    public $googleMapsApiKey = '';

    public function rules()
    {
        return [
            [['googleMapsApiKey'], 'required']
        ];
    }
}
