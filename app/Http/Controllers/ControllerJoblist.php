<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\joblist;
use DB;
class ControllerJoblist extends Controller
{
    public function JoblistAdd(Request $req){
        $joblist=new Joblist;

        $joblist->JobTitle=$req->input('JobTitle');
        $joblist->Category=$req->input('Category');
        $joblist->ExperienceRequirements=$req->input('ExperienceRequirements');
        $joblist->CloseingDate=$req->input('CloseingDate');
        $joblist->OtherExperienceRequirements=$req->input('OtherExperienceRequirements');
        $joblist->EducationalQualification=$req->input('EducationalQualification');
        $joblist->OtherRequirements=$req->input('OtherRequirements');
        $joblist->innovative=$req->input('innovative');
        $joblist->OnlyOneApply=$req->input('OnlyOneApply');
        $joblist->Age=$req->input('Age');
        $joblist->save();

       if ($joblist) {
            return response([
               'message'=>'joblist insert successfull',
               'joblist'=>$joblist
            ],200);
        }
        else
        {
            return response([
              'message'=>'joblist again upload !'
            ] ,400);
        }
    }

    public function joblistview(){
        return joblist::all();
    }

    public function joblistDelete($id){
       $Joblist=Joblist::where('id',$id)->delete();

       if($Joblist){
            return response([
               'message'=>'Delete successfull'
            ],200);
        }
        else
        {
            return response([
              'message'=>'Delete not successfull'
            ],401);
        }
    }


    public function joblistSingleview($id){
        $Joblist= Joblist::find($id);
        if($Joblist){
            return response([
               'message'=>'successfull',
               'Joblist'=>$Joblist
            ],200);
        }
        else
        {
            return response([
              'message'=>' not successfull'
            ],401);
        }
    
    }

    public function JoblistUpdate(Request $req,$id){
        $joblist=Joblist::find($id);

        $joblist->JobTitle=$req->input('JobTitle');
        $joblist->Category=$req->input('Category');
        $joblist->ExperienceRequirements=$req->input('ExperienceRequirements');
        $joblist->CloseingDate=$req->input('CloseingDate');
        $joblist->OtherExperienceRequirements=$req->input('OtherExperienceRequirements');
        $joblist->EducationalQualification=$req->input('EducationalQualification');
        $joblist->OtherRequirements=$req->input('OtherRequirements');
        $joblist->innovative=$req->input('innovative');
        $joblist->OnlyOneApply=$req->input('OnlyOneApply');
        $joblist->Age=$req->input('Age');
        $joblist->update();

       if ($joblist) {
            return response([
               'message'=>'joblist insert successfull',
               'joblist'=>$joblist
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
