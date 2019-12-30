<?php

namespace App\Observers;

use App\Enquiry;

class EnquiryObserver
{
    /**
     * Handle the enquiry "created" event.
     *
     * @param  \App\Enquiry  $enquiry
     * @return void
     */
    public function created(Enquiry $enquiry)
    {
        //
    }

    /**
     * Handle the enquiry "updated" event.
     *
     * @param  \App\Enquiry  $enquiry
     * @return void
     */
    public function updated(Enquiry $enquiry)
    {
        //
    }

    /**
     * Handle the enquiry "deleted" event.
     *
     * @param  \App\Enquiry  $enquiry
     * @return void
     */
    public function deleted(Enquiry $enquiry)
    {
        //
    }

    /**
     * Handle the enquiry "restored" event.
     *
     * @param  \App\Enquiry  $enquiry
     * @return void
     */
    public function restored(Enquiry $enquiry)
    {
        //
    }

    /**
     * Handle the enquiry "force deleted" event.
     *
     * @param  \App\Enquiry  $enquiry
     * @return void
     */
    public function forceDeleted(Enquiry $enquiry)
    {
        // TODO: Delete all related part pivots
    }
}
