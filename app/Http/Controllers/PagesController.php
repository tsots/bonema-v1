<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function getIndex(){
        $title = "Welcome!!";
        return view('pages.home')->with('title', $title);
    }

    public function getGallery(){
        $title = "Gallery";
        return view('pages.gallery')->with('title', $title);
    }

    public function getEvents(){
        $title = "Events and Announcements";
        return view('pages.events')->with('title', $title);
    }


    public function getSupport(){
        $title = "Support";
        return view('pages.support')->with('title', $title);
    }

    public function getContact(){
        $title = "Contact Us";
        return view('pages.contact-us')->with('title', $title);
    }


    public function AboutUs(){
    $title = "About Us";
    return view('pages.about-us.about-us')->with('title', $title);
    }

    public function CompanyProfile(){
        $title = "Company Profile";
        return view('pages.about-us.company-profile')->with('title', $title);
    }

        
    public function InvestorRelations(){
        $title = "Investor Relations";
        return view('pages.about-us.investor-relations')->with('title', $title);
    }

    public function LeadershipTeam(){
        $title = "Leadership Team";
        return view('pages.about-us.leadership-team')->with('title', $title);
    }


/////////////////////// BONEMA FIND PAGES //////////////////////////////////////

    public function FindReports(){
        $title = "Reports";
        return view('pages.bonema-find.reports')->with('title', $title);
    }

    public function FindDashboards(){
        $title = "Dashboards";
        return view('pages.bonema-find.dashboards')->with('title', $title);
    }


    public function FindRealTimeAlerts(){
        $title = "Real Time Alerts";
        return view('pages.bonema-find.real-time-alerts')->with('title', $title);
    }


    public function FindSetupAndSupport(){
        $title = "Setup and Support";
        return view('pages.bonema-find.setup-and-support')->with('title', $title);
    }



/////////////////////// BONEMA TRACK PAGES //////////////////////////////////////

    public function TrackReports(){
        $title = "Reports";
        return view('pages.bonema-track.reports')->with('title', $title);
    }
    
    public function TrackDashboards(){
        $title = "Dashboards";
        return view('pages.bonema-track.dashboards')->with('title', $title);
    }
    
    public function TrackDriverId(){
        $title = "Driver Id";
        return view('pages.bonema-track.driver-id')->with('title', $title);
    }
    
    public function TrackMaintenance(){
        $title = "Maintenance";
        return view('pages.bonema-track.maintenance')->with('title', $title);
    }
    
    
    public function TrackRealTimeAlerts(){
        $title = "Real Time Alerts";
        return view('pages.bonema-track.real-time-alerts')->with('title', $title);
    }
    
    
    public function TrackSetupAndSupport(){
        $title = "Setup and Support";
        return view('pages.bonema-track.setup-and-support')->with('title', $title);
    }


/////////////////////// BONEMA FLEET PAGES //////////////////////////////////////

    public function FleetReports(){
        $title = "Reports";
        return view('pages.bonema-fleet.reports')->with('title', $title);
    }
            
    public function FleetDashboards(){
        $title = "Dashboards";
        return view('pages.bonema-fleet.dashboards')->with('title', $title);
    }
    
    public function FleetDriverId(){
        $title = "Driver Id";
        return view('pages.bonema-fleet.driver-id')->with('title', $title);
    }
    
    public function FleetMaintenance(){
        $title = "Maintenance";
        return view('pages.bonema-fleet.maintenance')->with('title', $title);
    }
    
    
    public function FleetRealTimeAlerts(){
        $title = "Real Time Alerts";
        return view('pages.bonema-fleet.real-time-alerts')->with('title', $title);
    }
    
    
    public function FleetSetupAndSupport(){
        $title = "Setup and Support";
        return view('pages.bonema-fleet.setup-and-support')->with('title', $title);
    }


/////////////////////// BONEMA ICT PAGES //////////////////////////////////////

public function IctApplicationDeployment(){
    $title = "Application Deployment";
    return view('pages.bonema-ict.application-deployment')->with('title', $title);
}
        
public function IctCloudServices(){
    $title = "Cloud Services";
    return view('pages.bonema-ict.cloud-services')->with('title', $title);
}

public function IctCommsAndNetworks(){
    $title = "Comms & Networks";
    return view('pages.bonema-ict.comms-and-networks')->with('title', $title);
}

public function IctSecurity(){
    $title = "ICT Security";
    return view('pages.bonema-ict.ict-security')->with('title', $title);
}


public function IctItOutsourcing(){
    $title = "It Outsourcing";
    return view('pages.bonema-ict.it-outsourcing')->with('title', $title);
}


public function IctProfessionalService(){
    $title = "Professional Service";
    return view('pages.bonema-ict.professional-service')->with('title', $title);
}

public function IctSageSolutions(){
    $title = "Sage Solutions";
    return view('pages.bonema-ict.sage-solutions')->with('title', $title);
}

public function IctSystemAndPlatforms(){
    $title = "System & Platforms";
    return view('pages.bonema-ict.system-and-platforms')->with('title', $title);
}



/////////////////////// BONEMA ASSET TRACKING PAGES //////////////////////////////////////

public function AssetTrackingIndex(){
    $title = "Bonema Asset Tracking";
    return view('pages.bonema-asset-tracking.asset-tracking')->with('title', $title);
}

/////////////////////// BONEMA ASSET TRACKING PAGES //////////////////////////////////////

public function FreeDemo(){
    $title = "Free Demo";
    return view('pages.free-demo')->with('title', $title);
}

}