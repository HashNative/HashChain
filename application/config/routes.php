<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//Transfers
$route['transfers/delete'] = 'Transfers/deleteTransfers';
$route['transfers/update'] = 'Transfers/updateTransfers';
$route['transfers/all'] = 'Transfers/viewTransfers';
$route['transfers/add'] = 'Transfers/addTransfers';
$route['transfers/(:any))'] = 'Transfers/viewTransfers';

//Messages
$route['messages/compose'] = 'Messages/composeMessages';
$route['messages/detail'] = 'Messages/detailMessages';
$route['messages/all'] = 'Messages/viewMessages';
$route['messages/(:any))'] = 'Messages/viewMessages';

//Material Stock
$route['mainStockMaterials/delete'] = 'MainStockMaterials/deleteMainStockMaterials';
$route['mainStockMaterials/update'] = 'MainStockMaterials/updateMainStockMaterials';
$route['mainStockMaterials/add'] = 'MainStockMaterials/addMainStockMaterials';
$route['mainStockMaterials/all'] = 'MainStockMaterials/viewMainStockMaterials';
$route['mainStockMaterials/reportCashStocks'] = 'MainStockMaterials/viewCashStocks';
$route['mainStockMaterials/reportCompanyStocks'] = 'MainStockMaterials/viewCompanyStocks';
$route['mainStockMaterials/reportMainStocks'] = 'MainStockMaterials/viewMainStocks';
$route['mainStockMaterials/reportCashStocks/(:any)'] = 'MainStockMaterials/viewCashStocks';
$route['mainStockMaterials/reportCompanyStocks/(:any)'] = 'MainStockMaterials/viewMainStocks';
$route['mainStockMaterials/reportMainStocks/(:any)'] = 'MainStockMaterials/viewCompanyStocks';
$route['mainStockMaterials/(:any)'] = 'MainStockMaterials/addMainStockMaterials';

//Materials
$route['materials/delete'] = 'Materials/deleteMaterials';
$route['materials/update'] = 'Materials/updateMaterials';
$route['materials/add'] = 'Materials/addMaterials';
$route['materials/all'] = 'Materials/viewMaterials';
$route['materials/(:any)'] = 'Materials/viewMaterials';

//FinalGoods
$route['finalGoods/delete'] = 'FinalGoods/deleteFinalGoods';
$route['finalGoods/update'] = 'FinalGoods/updateFinalGoods';
$route['finalGoods/add'] = 'FinalGoods/addFinalGoods';
$route['finalGoods/all'] = 'FinalGoods/viewFinalGoods';
$route['finalGoods/(:any)'] = 'FinalGoods/viewFinalGoods';

//sections
$route['sections/delete'] = 'Sections/deleteSections';
$route['sections/update'] = 'Sections/updateSections';
$route['sections/add'] = 'Sections/addSections';
$route['sections/all'] = 'Sections/viewSections';
$route['sections/(:any)'] = 'Sections/viewSections';

//Staff
$route['staff/update'] = 'Staff/updateStaff';
$route['staff/add'] = 'Staff/addStaff';
$route['staff/all'] = 'Staff/viewstaff';
$route['staff/(:any)'] = 'Staff/viewstaff';

$route['default_controller'] = 'Login/adminlogin';
$route['(:any)'] = 'pages/view';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
