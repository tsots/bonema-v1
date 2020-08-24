<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'PagesController@getIndex')->name('page-home');
Route::get('/gallery', 'PagesController@getGallery')->name('page-gallery');
Route::get('/events', 'PagesController@getEvents')->name('page-events');
Route::get('/support', 'PagesController@getSupport')->name('page-support');
Route::get('/contact-us', 'PagesController@getContact')->name('page-contact');

Route::get('about-us', 'PagesController@AboutUs')->name('about');
Route::get('about-us/company-profile', 'PagesController@CompanyProfile')->name('about-profile');
Route::get('about-us/investor-relations', 'PagesController@InvestorRelations')->name('about-relations');
Route::get('about-us/leadership-team', 'PagesController@LeadershipTeam')->name('about-team');

Route::get('bonema-find/reports', 'PagesController@FindReports')->name('find-reports');
Route::get('bonema-find/dashboards', 'PagesController@FindDashboards')->name('find-dashboards');
Route::get('bonema-find/real-time-alerts', 'PagesController@FindRealTimeAlerts')->name('find-alerts');
Route::get('bonema-find/setup-and-support', 'PagesController@FindSetupAndSupport')->name('find-support');

Route::get('bonema-track/reports', 'PagesController@TrackReports')->name('track-reports');
Route::get('bonema-track/driver-id', 'PagesController@TrackDriverId')->name('track-driverId');
Route::get('bonema-track/maintenance', 'PagesController@TrackMaintenance')->name('track-maintenance');
Route::get('bonema-track/dashboards', 'PagesController@TrackDashboards')->name('track-dashboards');
Route::get('bonema-track/real-time-alerts', 'PagesController@TrackRealTimeAlerts')->name('track-alerts');
Route::get('bonema-track/setup-and-support', 'PagesController@TrackSetupAndSupport')->name('track-support');

Route::get('bonema-fleet/reports', 'PagesController@FleetReports')->name('fleet-reports');
Route::get('bonema-fleet/driver-id', 'PagesController@FleetDriverId')->name('fleet-driverId');
Route::get('bonema-fleet/maintenance', 'PagesController@FleetMaintenance')->name('fleet-maintenance');
Route::get('bonema-fleet/dashboards', 'PagesController@FleetDashboards')->name('fleet-dashboards');
Route::get('bonema-fleet/real-time-alerts', 'PagesController@FleetRealTimeAlerts')->name('fleet-alerts');
Route::get('bonema-fleet/setup-and-support', 'PagesController@FleetSetupAndSupport')->name('fleet-support');

Route::get('bonema-ict/application-deployment', 'PagesController@IctApplicationDeployment')->name('ict-application');
Route::get('bonema-ict/cloud-services', 'PagesController@IctCloudServices')->name('ict-cloud');
Route::get('bonema-ict/comms-and-networks', 'PagesController@IctCommsAndNetworks')->name('ict-comms');
Route::get('bonema-ict/ict-security', 'PagesController@IctSecurity')->name('ict-security');
Route::get('bonema-ict/it-outsourcing', 'PagesController@IctItOutsourcing')->name('ict-outsourcing');
Route::get('bonema-ict/professional-service', 'PagesController@IctProfessionalService')->name('ict-service');
Route::get('bonema-ict/sage-solutions', 'PagesController@IctSageSolutions')->name('ict-sage');
Route::get('bonema-ict/system-and-platforms', 'PagesController@IctSystemAndPlatforms')->name('ict-system');

Route::get('bonema-asset-tracking/asset-tracking', 'PagesController@AssetTrackingIndex')->name('asset-tracking');

Route::get('free-demo', 'PagesController@freeDemo')->name('FreeDemo');