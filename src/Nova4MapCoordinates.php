<?php

namespace Imumz\Nova4MapCoordinates;

use Laravel\Nova\Fields\Field;
use Laravel\Nova\Http\Requests\NovaRequest;

class Nova4MapCoordinates extends Field
{
    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'nova-4-map-coordinates';
    public $showOnUpdate = true;
    public $showOnIndex = false;
    public $showOnDetail = false;

    public function height($height) {
        return $this->withMeta([
            'height' => $height
        ]);
    }

    public function markerIcon($markerIcon,$markerIconSize = null,$markerIconAnchor = null) {
        return $this->withMeta([
            'markerIcon' => $markerIcon,
            'markerIconSize' => $markerIconSize,
            'markerIconAnchor' => $markerIconAnchor
        ]);
    }

    /*public function searchProvider(string $provider) {
        return $this->withMeta([
            'searchProvider' => $provider
        ]);
    }

    public function searchProviderKey(string $providerKey) {
        return $this->withMeta([
            'searchProviderKey' => $providerKey
        ]);
    }*/

    public function googleApiKey($googleApiKey) {
        return $this->withMeta([
            'googleApiKey' => $googleApiKey
        ]);
    }

    public function googleMapType($googleMapType) {
        return $this->withMeta([
            'googleMapType' => $googleMapType
        ]);
    }

    public function defaultLatitude(string $latitude) {
        return $this->withMeta([
            'defaultLatitude' => $latitude
        ]);
    }

    public function defaultLongitude(string $longitude) {
        return $this->withMeta([
            'defaultLongitude' => $longitude
        ]);
    }

    public function defaultTileProvider(string $defaultTileProvider) {
        return $this->withMeta([
            'defaultTileProvider' => $defaultTileProvider
        ]);
    }

    public function latitude($latitude) {
        return $this->withMeta([
            'latitude' => $latitude,
        ]);
    }

    public function longitude(string $longitude) {
        return $this->withMeta([
            'longitude' => $longitude,
        ]);
    }

    public function zoom(int $zoom) {
        return $this->withMeta([
            'zoom' => $zoom,
        ]);
    }
}
