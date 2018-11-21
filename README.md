# Google Maps Api wrapper for Craft CMS 3.x

A simple wrapper for google maps server-side [web services](https://developers.google.com/maps/apis-by-platform) to access them through ajax calls.

## Requirements

This plugin requires Craft CMS 3 or later and an active API key from google maps.


## Overview

Use this wrapper to access google maps web services that are only accessible with a server-side connection.
At the moment the following endpoints are supported with this plugin:
- geocode
- timezone
- places
 - autocomplete
 - input
 - details
- elevation
- distance

## Configuration

Fill in the settings a valid google maps API key.

## Using

Use HTTP GET request to access the endpoints
- `api/googleMaps/geocode/<latitude>,<longitude>`  
Return the places given the latitude and longitude  
See more info at [Google Geocoding API](https://developers.google.com/maps/documentation/geocoding/start)
- `api/googleMaps/timezone/<latitude>,<longitude>,<timestamp>`  
Return the timezone of a place given the latitude, longitude and timestamp  
See more info at [Google Timezone API](https://developers.google.com/maps/documentation/timezone/start)
- `api/googleMaps/place/autocomplete/<input>`  
Return place autocomplete suggestions given the text input (it can be an address, a place name etc)  
See more info at [Places Autocomplete API](https://developers.google.com/places/web-service/autocomplete)
- `api/googleMaps/place/text/<input>`  
Return places given the text input (it can be an address, a place name etc)  
See more info at [Places Search API](https://developers.google.com/places/web-service/search)
- `api/googleMaps/place/details/<placeId>`  
Return place details given the place id . 
See more info at [Places Details API](https://developers.google.com/places/web-service/details)
- `api/googleMaps/elevation/<lat>,<lon>`  
Return elevation information given the latitude and longitude of a location  
See more info at [Elevation API](https://developers.google.com/maps/documentation/elevation/start)
- `api/googleMaps/distance/<originLat>,<originLon>,<destinationLat>,<destinationLon>,<mode>`  
Return elevation information given the latitude and longitude of origin and 
destination. You can optionaly specify the mode (choose between driving, bicycling, walking, transit)  
See more info at [Distance Matrix API](https://developers.google.com/maps/documentation/distance-matrix/start) 

### Example
Request  
GET `https://www.example.com/api/googleMaps/geocode/52.3679843,4.903561399999944`

Response
```json
[
  {
    "address_components": [
      {
        "long_name": "662",
        "short_name": "662",
        "types": [
          "street_number"
        ]
      },
      {
        "long_name": "Waterlooplein",
        "short_name": "Waterlooplein",
        "types": [
          "route"
        ]
      },
      {
        "long_name": "Amsterdam-Centrum",
        "short_name": "Amsterdam-Centrum",
        "types": [
          "political",
          "sublocality",
          "sublocality_level_1"
        ]
      },
      {
        "long_name": "Amsterdam",
        "short_name": "Amsterdam",
        "types": [
          "locality",
          "political"
        ]
      },
      {
        "long_name": "Amsterdam",
        "short_name": "Amsterdam",
        "types": [
          "administrative_area_level_2",
          "political"
        ]
      },
      {
        "long_name": "Noord-Holland",
        "short_name": "NH",
        "types": [
          "administrative_area_level_1",
          "political"
        ]
      },
      {
        "long_name": "Netherlands",
        "short_name": "NL",
        "types": [
          "country",
          "political"
        ]
      },
      {
        "long_name": "1011 PG",
        "short_name": "1011 PG",
        "types": [
          "postal_code"
        ]
      }
    ],
    "formatted_address": "Waterlooplein 662, 1011 PG Amsterdam, Netherlands",
    "geometry": {
      "location": {
        "lat": 52.3680461000000008198185241781175136566162109375,
        "lng": 4.90357839999999978175537762581370770931243896484375
      },
      "location_type": "ROOFTOP",
      "viewport": {
        "northeast": {
          "lat": 52.369395080291496924473904073238372802734375,
          "lng": 4.9049273802915021036596954218111932277679443359375
        },
        "southwest": {
          "lat": 52.36669711970849760973578668199479579925537109375,
          "lng": 4.90222941970849834802947952994145452976226806640625
        }
      }
    },
    "place_id": "ChIJ5zzsu70JxkcRQR-0VFl8Bl0",
    "plus_code": {
      "compound_code": "9W93+6C Amsterdam, Netherlands",
      "global_code": "9F469W93+6C"
    },
    "types": [
      "street_address"
    ]
  }
]
```  

## Credits

Made with ❤️ by [Bolden](https://www.bolden.nl) – It's free to use, but if you insist 😄 donate [here](https://www.paypal.me/boldenamsterdam)
