<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Mail\SubmitExhibitionForm;
use App\Models\Exhibition;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Mail;

class ExhibitorsController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        //validate exhibitor
        $request->validate([
            'company_name'              => 'required',
            'company_address'           => 'required',
            'contact_person_name'   => 'required',
            'contact_person_position'   => 'required',
            'contact_person_email'  => 'required|email',
            'contact_person_phone'  => 'required',
            'payment_invoice'       =>  'required|mimes:doc,docx,pdf,jpg,png'
        ]);

        $data = $request->only(['company_name','company_address','contact_person_name','contact_person_position','contact_person_email','contact_person_phone','contact_website']);
        $data['payment_invoice'] = $request->file('payment_invoice')->store('/nba2023/exhibitors/proof_of_payment');

        //create exhibitor
        $exhibitor = Exhibition::create($data);

        //create exhibitor personnel
        $count= count($request->company_personnel_name);
        for ($i=0;$i<$count; $i++){
            $exhibitor->exhibitonPersonnels()->create([
                'company_personnel_name'        => $request->company_personnel_name[$i],
                'company_personnel_email'       => $request->company_personnel_email[$i],
                'company_personnel_designation' => $request->company_personnel_designation[$i],
            ]);
        }

        //send email
        Mail::send(new SubmitExhibitionForm($exhibitor));

        return Response::api(['message' => 'Form submitted successfully']);


    }


}
