<?php

namespace App\Helpers;

class Helper
{
    public static function getCertification($job_for)
    {
        $certified = '';
        if (in_array('normal', $job_for)) {
            $certified = 'normal';
        } else if (in_array('certified', $job_for)) {
            $certified = 'yes';
        } else if (in_array('certified_in_law', $job_for)) {
            $certified = 'law';
        } else if (in_array('certified_in_helth', $job_for)) {
            $certified = 'health';
        }
        if (in_array('normal', $job_for) && in_array('certified', $job_for)) {
            $certified = 'both';
        } else if (in_array('normal', $job_for) && in_array('certified_in_law', $job_for)) {
            $certified = 'n_law';
        } else if (in_array('normal', $job_for) && in_array('certified_in_helth', $job_for)) {
            $certified = 'n_health';
        }

        return $certified;
    }

    public static function getJobType($consumer_type)
    {
        $job_type = '';
        if ($consumer_type == 'rwsconsumer') {
            $job_type = 'rws';
        } else if ($consumer_type == 'ngo') {
            $job_type = 'unpaid';
        } else if ($consumer_type == 'paid') {
            $job_type  = 'paid';
        }

        return $job_type;
    }

    public static function getGender($genderParam)
    {
        $gender = '';
        if (in_array('male',  $genderParam)) {
            $gender = 'male';
        } else if (in_array('female', $genderParam)) {
            $gender = 'female';
        }

        return $gender;
    }

    public static function getAdminRoleId()
    {
        $role = Role::where('code', 'admin')->first();
        if ($role) {
            return  $role->id;
        }

        return false;
    }

    public static function getSuperAdminRoleId()
    {
        $role = Role::where('code', 'super_admin')->first();
        if ($role) {
            return  $role->id;
        }

        return false;
    }

    public static function customerRoleId()
    {
        $role = Role::where('code', 'customer')->first();
        if ($role) {
            return  $role->id;
        }

        return false;
    }
}
