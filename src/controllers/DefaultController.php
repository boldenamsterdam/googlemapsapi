<?php

/**
 * GoogleMapsApi plugin for Craft CMS 3.x
 *
 * GoogleMapsApi Plugin
 *
 * @link      https://www.bolden.nl
 * @copyright Copyright (c) 2018 Bolden B.V.
 * @author Klearchos Douvantzis
 */

namespace bolden\googlemapsapi\controllers;

use Craft;
use craft\web\Controller;
use bolden\googlemapsapi\GoogleMapsApi;

/**
 * GoogleMapsApi Controller
 */
class DefaultController extends Controller
{

    // Protected Properties
    // =========================================================================

    /**
     * @var array
     */
    protected $allowAnonymous = true;

    // Public Methods
    // =========================================================================

    /**
     * Makes a request to geocode given latitude longitude and timestamp
     *
     * @param float $lat
     * @param float $lon
     * @return void
     */
    public function actionGeocode($lat, $lon)
    {
        $result = GoogleMapsApi::getInstance()->googleMapsApiService->geocode($lat, $lon);
        if ($result['status']) {
            $this->asJson($result['data']);
        } else {
            $this->asErrorJson($result['error']);
        }
    }

    /**
     * Makes a request to distance given latitude longitude from origin and destination
     *
     * @param float $originLat
     * @param float $originLon
     * @param float $destinationLat
     * @param float $destinationLon
     * @return void
     */
    public function actionDistance($originLat, $originLon, $destinationLat, $destinationLon, $mode)
    {
        $result = GoogleMapsApi::getInstance()->googleMapsApiService->distance($originLat, $originLon, $destinationLat, $destinationLon, $mode);
        if ($result['status']) {
            $this->asJson($result['data']);
        } else {
            $this->asErrorJson($result['error']);
        }
    }

    /**
     * Makes a request to elevation given latitude longitude and timestamp
     *
     * @param float $lat
     * @param float $lon
     * @return void
     */
    public function actionElevation($lat, $lon)
    {
        $result = GoogleMapsApi::getInstance()->googleMapsApiService->elevation($lat, $lon);
        if ($result['status']) {
            $this->asJson($result['data']);
        } else {
            $this->asErrorJson($result['error']);
        }
    }

    /**
     * Makes a request to get place given text
     *
     * @param string $input
     * @return void
     */
    public function actionFindPlaceFromText($input)
    {
        $result = GoogleMapsApi::getInstance()->googleMapsApiService->placeFromText($input);
        if ($result['status']) {
            $this->asJson($result['data']);
        } else {
            $this->asErrorJson($result['error']);
        }
    }

    /**
     * Makes a request to get place details given place id
     *
     * @param string $input
     * @return void
     */
    public function actionPlaceDetails($placeId)
    {
        $result = GoogleMapsApi::getInstance()->googleMapsApiService->placeDetails($placeId);
        if ($result['status']) {
            $this->asJson($result['data']);
        } else {
            $this->asErrorJson($result['error']);
        }
    }

    /**
     * Makes a request to get place results given text input
     *
     * @param string $input
     * @return void
     */
    public function actionPlaceAutocomplete($input)
    {
        $result = GoogleMapsApi::getInstance()->googleMapsApiService->placeAutocomplete($input);
        if ($result['status']) {
            $this->asJson($result['data']);
        } else {
            $this->asErrorJson($result['error']);
        }
    }

    /**
     * Makes a request to geocode given latitude longitude and timestamp
     *
     * @param float $lat
     * @param float $lon
     * @param integer $timestamp
     * @return void
     */
    public function actionTimezone($lat, $lon, $timestamp)
    {
        $result = GoogleMapsApi::getInstance()->googleMapsApiService->timezone($lat, $lon, $timestamp);
        if ($result['status']) {
            $this->asJson($result['data']);
        } else {
            $this->asErrorJson($result['error']);
        }
    }
}
