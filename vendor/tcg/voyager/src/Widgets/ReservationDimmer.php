<?php

namespace TCG\Voyager\Widgets;

use Arrilot\Widgets\AbstractWidget;
use Illuminate\Support\Str;
use TCG\Voyager\Facades\Voyager;

class ReservationDimmer extends AbstractWidget
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [];

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        $count = Voyager::model('Reservation')->count();
        $string = trans_choice('voyager.dimmer.reservation', $count);

        return view('voyager::dimmer', array_merge($this->config, [
            'icon'   => 'voyager-alarm-clock',
            'title'  => "{$count} Reservation",
            'text'   => __('You have :count Reservation in your database. Click on button below to view all Reservation.', ['count' => $count, 'string' => Str::lower($string)]),
            'button' => [
                'text' => "View All Reservation",
                'link' => route('voyager.reservations.index'),
            ],
            'image' => voyager_asset('images/widget-backgrounds/03.jpg'),
        ]));
    }
}
