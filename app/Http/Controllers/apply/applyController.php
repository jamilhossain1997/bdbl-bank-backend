<?php

namespace App\Http\Controllers\apply;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\applyexprence;
use App\Models\applyinform;
use DB;

class applyController extends Controller
{
    public function applyin(Request $req){
        $apply=new applyinform;

        $apply->name=$req->input('name');
        $apply->father=$req->input('father');
        $apply->mother=$req->input('mother');
        $apply->freedomFighter=$req->input('freedomFighter');
        $apply->brithday=$req->input('brithday');
        $apply->age=$req->input('age');
        $apply->nid=$req->input('nid');
        $apply->heigt=$req->input('heigt');
        $apply->weight=$req->input('weight');
        $apply->postalAdd=$req->input('postalAdd');
        $apply->permanentAddress=$req->input('permanentAddress');
        $apply->contactNo=$req->input('contactNo');
        $apply->email=$req->input('email');
        $apply->homeDistrict=$req->input('homeDistrict');
        $apply->HomeUpazila=$req->input('HomeUpazila');
        $apply->presentAddress=$req->input('presentAddress');
        $apply->nameExamSsc=$req->input('nameExamSsc');
        $apply->passingyearSsc=$req->input('passingyearSsc');
        $apply->subjectSsc=$req->input('subjectSsc');
        $apply->resultSsc=$req->input('resultSsc');
        $apply->sscGpa=$req->input('sscGpa');
        $apply->collageSsc=$req->input('collageSsc');
        $apply->boardSsc=$req->input('boardSsc');
        $apply->nameExamHsc=$req->input('nameExamHsc');
        $apply->passingyearHsc=$req->input('passingyearHsc');
        $apply->subjectHsc=$req->input('subjectHsc');
        $apply->resultHsc=$req->input('resultHsc');
        $apply->hscGpa=$req->input('hscGpa');
        $apply->collageHsc=$req->input('collageHsc');
        $apply->boardHsc=$req->input('boardHsc');
        $apply->passingyearGraduate=$req->input('passingyearGraduate');
        $apply->subjectGraduate=$req->input('subjectGraduate');
        $apply->resultGraduate=$req->input('resultGraduate');
        $apply->graduateGpa=$req->input('graduateGpa');
        $apply->collageGraduate=$req->input('collageGraduate');
        $apply->boardGraduate=$req->input('boardGraduate');
        $apply->nameExamGraduate=$req->input('nameExamGraduate');

        $apply->nameofExamPostGraduate=$req->input('nameofExamPostGraduate');
        $apply->passingyearPostGraduate=$req->input('passingyearPostGraduate');
        $apply->subjectPostGraduate=$req->input('subjectPostGraduate');
        $apply->boardPostGraduate=$req->input('boardPostGraduate');
        $apply->collagePostGraduate=$req->input('collagePostGraduate');
        $apply->postGpa=$req->input('postGpa');
        $apply->resultPostGraduate=$req->input('resultPostGraduate');
        $apply->fromrole='1';
        $apply->save();
        if ( $apply) {
            return response([
               'message'=>'joblist insert successfull',
               'apply'=> $apply
            ],200);
        }
        else
        {
            return response([
              'message'=>'joblist again upload !'
            ] ,400);
        }
    }

     public function applyexp(Request $req){
        $user = applyinform::latest()->first();
        $apply=new applyexprence;

        $apply->apply_id=$user->id;
        $apply->FromDate=$req->input('FromDate');
        $apply->To_Date=$req->input('To_Date');
        $apply->Designation=$req->input('Designation');
        $apply->Organization_Type=$req->input('Organization_Type');
        $apply->Organization=$req->input('Organization');
        $apply->Responsibilities=$req->input('Responsibilities');
        $apply->Nature_of_Job=$req->input('Nature_of_Job');

        $apply->FromDate1=$req->input('FromDate1');
        $apply->To_Date1=$req->input('To_Date1');
        $apply->Designation1=$req->input('Designation1');
        $apply->Organization_Type1=$req->input('Organization_Type');
        $apply->Organization1=$req->input('Organization1');
        $apply->Responsibilities1=$req->input('Responsibilities1');
        $apply->Nature_of_Job1=$req->input('Nature_of_Job1');

        $apply->FromDate2=$req->input('FromDate2');
        $apply->To_Date2=$req->input('To_Date2');
        $apply->Designation2=$req->input('Designation2');
        $apply->Organization_Type2=$req->input('Organization_Type2');
        $apply->Organization2=$req->input('Organization2');
        $apply->Responsibilities2=$req->input('Responsibilities2');
        $apply->Nature_of_Job2=$req->input('Nature_of_Job2');

        $apply->FromDate3=$req->input('FromDate3');
        $apply->To_Date3=$req->input('To_Date3');
        $apply->Designation3=$req->input('Designation3');
        $apply->Organization_Type3=$req->input('Organization_Type3');
        $apply->Organization3=$req->input('Organization3');
        $apply->Responsibilities3=$req->input('Responsibilities3');
        $apply->Nature_of_Job3=$req->input('Nature_of_Job3');


        $apply->Name_of_organizations=$req->input('Name_of_organizations');
        $apply->Field_of_Experience=$req->input('Field_of_Experience');
        $apply->Duration=$req->input('Duration');

        $apply->Name_of_organizations1=$req->input('Name_of_organizations1');
        $apply->Field_of_Experience1=$req->input('Field_of_Experience1');
        $apply->Duration1=$req->input('Duration1');

        $apply->Name_of_organizations2=$req->input('Name_of_organizations2');
        $apply->Field_of_Experience2=$req->input('Field_of_Experience2');
        $apply->Duration2=$req->input('Duration2');

        $apply->photo=$req->file('photo')->store('photo');
        $apply->lastcerificate=$req->file('lastcerificate')->store('lastcerificate');
        $apply->nidCertificate=$req->file('nidCertificate')->store('nidCertificate');
        $apply->status='pandding';
        $apply->fromrole='1';
        $apply->save();
        if ( $apply) {
            return response([
               'message'=>'joblist insert successfull',
               'apply'=> $apply
            ],200);
        }
        else
        {
            return response([
              'message'=>'joblist again upload !'
            ] ,400);
        }
    }

}
