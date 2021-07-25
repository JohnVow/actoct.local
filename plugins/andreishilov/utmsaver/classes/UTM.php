<?php

namespace AndreiShilov\UTMSaver\Classes;

use AndreiShilov\UTMSaver\Models\Settings;
use Cookie;
use October\Rain\Support\Traits\Singleton;

class UTM
{
    use Singleton;

    const UTM = [
        'utm_source',
        'utm_campaign',
        'utm_medium',
        'utm_term',
        'utm_content',
    ];

    /**
     * @var array
     */
    protected $utm = [];

    public function save()
    {
        foreach (self::UTM as $item) {
            $value = Cookie::get($item);
            if ($value !== null) {
                $this->utm[$item] = $value;
            }
        }

        if (count(request()->all()) > 0) {
            $UTM = [];
            foreach (request()->all() as $key => $value) {
                if (in_array($key, self::UTM)) {
                    $UTM[$key] = trim($value);
                }
            }

            if (count($UTM) > 0) {
                $ttl = Settings::get('cookie_ttl', 30) * 24 * 60;
                foreach (self::UTM as $tag) {
                    if (isset($UTM[$tag])) {
                        $this->utm[$tag] = $UTM[$tag];
                        Cookie::queue(Cookie::make($tag, $UTM[$tag], $ttl));
                    } else {
                        unset($this->utm[$tag]);
                        Cookie::forget($tag);
                    }
                }
            }
        }
    }

    /**
     * @param $utmTag
     * @return string|null
     */
    public function get($utmTag)
    {
        return $this->utm[$utmTag] ?? null;
    }

    /**
     * @return array
     */
    public function all()
    {
        return $this->utm;
    }
}