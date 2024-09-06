![](https://img.shields.io/github/stars/iMuMz/Nova4MapCoordinates?&style=flat-square)
![GitHub release (latest by date)](https://img.shields.io/github/v/release/imumz/Nova4MapCoordinates?color=red&style=flat-square)
![Packagist](https://img.shields.io/packagist/dt/imumz/nova-4-map-coordinates?color=green&logo=testing&style=flat-square)
# Nova4MapCoordinates
Custom [Laravel Nova 4](https://nova.laravel.com/) form field for create and update using [Leaflet](https://leafletjs.com/) to retrieve coordinates from a clickable map marker. Supports Search, Google Maps, map height, marker popup and custom marker icons.

![image](images/marker-update-example.png)

### Installation

```
composer require imumz/nova-4-map-coordinates
```
### Usage

```
use Imumz\Nova4MapCoordinates\Nova4MapCoordinates
...
Nova4MapCoordinates::make('Coordinates')

```
### Available Methods

#### Height
```
Nova4MapCoordinates::make('Coordinates')
->height('400px') // default is 300px
```
#### Google Maps

![image](images/google-maps-example.png)

By default the provider is OpenStreetMaps.<br> 
You must set your Google Maps API key (https://developers.google.com/maps/documentation/javascript/get-api-key).
```
Nova4MapCoordinates::make('Coordinates')
->googleApiKey('')
->googleMapType('roadmap'), // roadmap, satellite or hybrid
```
#### Default Tile Provider
```
Nova4MapCoordinates::make('Coordinates')
->defaultTileProvider('google') // google, openstreetmap
```
#### Default Latitude and Longitude
```
Nova4MapCoordinates::make('Coordinates')
->defaultLatitude()
->defaultLongitude()
```
#### Zoom
Set the zoom level. Default is 8.
```
Nova4MapCoordinates::make('Coordinates')
->zoom(12)
```
#### Search 
The search provider is a work in progress. Default is ESRI.

![image](images/search-example.png)

#### Custom Marker Icon
```
Nova4MapCoordinates::make('Coordinates')
->markerIcon('/images/marker-icon.png')
```
You can pass additional parameters to set the icon size and anchor
```
->markerIcon('/images/marker-icon.png',[100,100],[50,50])
```
![image](images/custom-map-marker.png)


