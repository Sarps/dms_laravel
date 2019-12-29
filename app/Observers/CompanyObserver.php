<?php

namespace App\Observers;

use App\Company;

class CompanyObserver
{
    /**
     * Handle the company "created" event.
     *
     * @param \App\Company $company
     * @return void
     */
    public function created(Company $company)
    {
        $company->branches()->create([
            'name' => 'Main Office',
            'address' => $company->address,
            'skin' => $company->skin
        ]);
    }

    /**
     * Handle the company "updated" event.
     *
     * @param \App\Company $company
     * @return void
     */
    public function updated(Company $company)
    {
        //
    }

    /**
     * Handle the company "deleted" event.
     *
     * @param \App\Company $company
     * @return void
     */
    public function deleted(Company $company)
    {
        //
    }

    /**
     * Handle the company "restored" event.
     *
     * @param \App\Company $company
     * @return void
     */
    public function restored(Company $company)
    {
        //
    }

    /**
     * Handle the company "force deleted" event.
     *
     * @param \App\Company $company
     * @return void
     */
    public function forceDeleted(Company $company)
    {
        //
    }
}
