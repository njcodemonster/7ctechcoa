<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of activity_logic
 *
 * @author Faizan
 */
class activity_logic {
    public $Verbrose = true;
    
    ////long
    public function NewActivity_($entitytype,$entityname,$date,$time,$activitytype){
        $Activity = new activity();
        $output = new Output();
        $result = $Activity->Select("where type='".$activitytype."'");
        if($result['err']===false)
        {            
            $ActivityTypeId = $result['rows'][0]['id'];
            $Trace = new traceability();
            $results = $Trace->Add($entitytype, $entityname, $date, $time, $ActivityTypeId);
            return $output->ReturnOutputCUD($results,$this->Verbrose);
            
        } else 
        {
            return $output->ReturnOutputV($result);
        }        
    }
    
    public function GetActivityArry_(){
        $Activity = new activity();
        $output = new Output();
        $result = $Activity->Select("");
        return $output->ReturnOutputV($result);
    }
    ////long
    public function NewActivity($parm)
	{
		$entitytype = $parm["entitytype"];
		$entityname = $parm["entityname"];
		$date = $parm["date"];
		$time = $parm["time"];
		$activitytype = $parm["activitytype"];
        $Activity = new activity();
		
        $output = new Output();
        $result = $Activity->Select("where type='".$activitytype."'");
        if($result['err']===false)
        {            
            $ActivityTypeId = $result['rows'][0]['id'];
            $Trace = new traceability();
            $results = $Trace->Add($entitytype, $entityname, $date, $time, $ActivityTypeId);
            return $output->ReturnOutputCUD($results,$this->Verbrose);
            
        } else 
        {
            return $output->ReturnOutputV($result);
        }        
    }
    
    public function GetActivityArry(){
        $Activity = new activity();
        $output = new Output();
        $result = $Activity->Select("");
        return $output->ReturnOutputV($result);
    }
}
