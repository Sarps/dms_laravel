<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{

    protected $fillable = [
        'id', 'vehicle_id',
        // Request Info
        'job_type_id', 'intake_id', 'payment_type_id', 'warranty', 'repeat_repair', 'internal_job', 'est_time', 'request_details',
        // Appointment
        'appt_at', 'appt_by', 'resch', 'internal_job',
        // Delivery
        'received_at', 'odometer_in', 'received_by', 'delivered_at', 'odometer_out', 'delivered_by',
    ];

    public function vehicle() {
        return $this->belongsTo(Vehicle::class);
    }

}
