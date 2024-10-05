<?php

namespace App\Exports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class UsersExport implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return User::all()->map(function ($user) {
            return [
                $user->id,
                $user->name,
                $user->email,
                $user->agentCode,
                $user->role,
                $user->mobile,
                $user->dob,
                $user->citizenship,
                $user->passport,
                $user->passportExpiry,
                $user->gender,
                $user->residency,
                $user->educationCountry,
                $user->educationLevel,
                $user->graduationStatus,
                $user->institution,
                $user->avgMark,
                $user->degree,
                $user->englishProficiency,
                $user->englishListening,
                $user->englishWriting,
                $user->englishReading,
                $user->englishSpeaking,
                $user->major,
                $user->majorInterest,
                $user->higherEducationCountry1,
                $user->higherEducationCountry2,
                $user->higherEducationCountry3,
                $user->educationLevelInterest,
            ];
        });
    }

    /**
     * @return array
     */
    public function headings(): array
    {
        return [
            'ID',
            'Name',
            'Email',
            'Agent Code',
            'Role',
            'Mobile',
            'DOB',
            'Citizenship',
            'Passport',
            'Passport Expiry',
            'Gender',
            'Residency',
            'Education Country',
            'Education Level',
            'Graduation Status',
            'Institution',
            'Average Mark',
            'Degree',
            'English Proficiency',
            'English Listening',
            'English Writing',
            'English Reading',
            'English Speaking',
            'Major',
            'Major Interest',
            'Higher Education Country 1',
            'Higher Education Country 2',
            'Higher Education Country 3',
            'Education Level Interest',
        ];
    }
}
