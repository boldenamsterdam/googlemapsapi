# Google Maps Api wrapper for Craft CMS 3.x

A simple wrapper to use google maps [web services](https://developers.google.com/maps/apis-by-platform) that are server-side.

## Requirements

This plugin requires Craft CMS 3 or later and an active API key from google maps


## Overview

Use this wrapper to access google maps web services that are only accessible with a server-side connection.
At the moment only the following is supported supported through this plugin:
- timezone
- geocode
- distance
- elevation
- places
 - autocomplete
 - input
 - details

## Configuration

A valid google maps API key

## Using

Use HTTP request to access the endpoints
- `api/googleMaps/geocode/<latitude>,<longitude>` >> Return the places given the latitude and longitude
See more info at [Google Geocoding API](https://developers.google.com/maps/documentation/geocoding/start)
- `api/googleMaps/timezone/<latitude>,<longitude>,<timestamp>` >> Return the timezone of a place given the latitude, longitude and timestamp
See more info at [Google Timezone API](https://developers.google.com/maps/documentation/timezone/start)
- `api/googleMaps/place/autocomplete/<input>` >> Return place autocomplete suggestions given the text input (it can be an address, a place name etc)
See more info at [Places Autocomplete API](https://developers.google.com/places/web-service/autocomplete)
- `api/googleMaps/place/text/<input>` >> Return places given the text input (it can be an address, a place name etc)
See more info at [Places Search API](https://developers.google.com/places/web-service/search)
- `api/googleMaps/place/details/<placeId>` >> Return place details given the place id
See more info at [Places Details API](https://developers.google.com/places/web-service/details)
- `api/googleMaps/elevation/<lat>,<lon>` >> Return elevation information given the latitude and longitude of a location
See more info at [Elevation API](https://developers.google.com/maps/documentation/elevation/start)
- `api/googleMaps/distance/<originLat>,<originLon>,<destinationLat>,<destinationLon>,<mode>` >> Return elevation information given the latitude and longitude of origin and 
destination. You can optionaly specify the mode (choose between driving, bicycling, walking, transit)
See more info at [Distance Matrix API](https://developers.google.com/maps/documentation/distance-matrix/start) 

## Credits

Made with ❤️ by [Bolden](https://www.bolden.nl) – It's free to use, but if you insist 😄 donate [here](https://www.paypal.me/boldenamsterdam)
