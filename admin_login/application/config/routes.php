<?php
defined('BASEPATH') OR exit('No direct script access allowed');


//...................admin login................//
$route['default_controller'] = 'Admin_login';
$route['login_check'] = 'Admin_login/login_check';
$route['admin_logout'] = 'Admin_login/admin_logout';



//...................company login................//
$route['company_login'] = 'Admin_login/company_login';
$route['company_login_check'] = 'Admin_login/company_login_check';



//...................basic info ................//
$route['basic_info'] = 'Admin/basic_info';
$route['basic_info_check'] = 'Admin/basic_info_check';
$route['about_us_page'] = 'Admin/about_us_page';
$route['contact_us_page'] = 'Admin/contact_us_page';
$route['update_privacy'] = 'Admin/update_privacy';
$route['update_terms'] = 'Admin/update_terms';


//...................front page ................//
$route['front_page'] = 'Admin/front_page';
$route['main_banner'] = 'Admin/main_banner';
$route['mini_banner'] = 'Admin/mini_banner';



//...................order stats................//
$route['order_stats'] = 'Admin/order_stats';
$route['view_order_details'] = 'Admin/view_order_details';
$route['accept_for_delivery'] = 'Admin/accept_for_delivery';
$route['out_of_reach'] = 'Admin/out_of_reach';
$route['all_orders'] = 'Admin/all_orders';

//...................view payments................//
$route['admin_view_payments'] = 'Admin/admin_view_payments';


//...................user base................//
$route['view_user_details'] = 'Admin/view_user_details';
$route['view_tasker_details'] = 'Admin/view_tasker_details';



//...................review section................//
$route['contact_us_review'] = 'Admin/contact_us_review';
$route['delete_contact_us_review'] = 'Admin/delete_contact_us_review';


//...................category ................//
$route['add_category'] = 'Admin/add_category';
$route['category_check'] = 'Admin/category_check';
$route['delete_category'] = 'Admin/delete_category';


//...................sub category ................//
$route['add_sub_category'] = 'Admin/add_sub_category';
$route['sub_category_check'] = 'Admin/sub_category_check';
$route['delete_sub_category'] = 'Admin/delete_sub_category';



//...................view advertisement ................//
$route['view_advertisement'] = 'Admin/view_advertisement';
$route['delete_advertisement'] = 'Admin/delete_advertisement';
$route['get_advertisement'] = 'Admin/get_advertisement';
$route['edit_advertisement'] = 'Admin/edit_advertisement';

$route['all_details_admin_advertisement'] = 'Admin/all_details_admin_advertisement';




//...................manage feature products ................//
$route['manage_feature_products'] = 'Admin/manage_feature_products';
$route['add_feature_product'] = 'Admin/add_feature_product';
$route['remove_feature_product'] = 'Admin/remove_feature_product';


//...................manage team ................//
$route['team'] = 'Admin/team';
$route['get_team'] = 'Admin/get_team';
$route['edit_team'] = 'Admin/edit_team';
$route['delete_team'] = 'Admin/delete_team';


//...................tasker registration ................//
$route['tasker_registration'] = 'Admin_login/tasker_registration';
$route['tasker_signup_check'] = 'Admin_login/tasker_signup_check';
$route['tasker_logout'] = 'Admin_login/tasker_logout';



//...................tasker dashboard ................//
$route['tasker_dashboard'] = 'Tasker/tasker_dashboard';

//...................add advertisement ................//
$route['fetch_sub_category'] = 'Tasker/fetch_sub_category';
$route['add_advertisement'] = 'Tasker/add_advertisement';
$route['check_advertisement'] = 'Tasker/check_advertisement';



//...................view tasker advertisement ................//
$route['view_tasker_advertisement'] = 'Tasker/view_tasker_advertisement';
$route['delete_tasker_advertisement'] = 'Tasker/delete_tasker_advertisement';
$route['get_tasker_advertisement'] = 'Tasker/get_tasker_advertisement';
$route['edit_tasker_advertisement'] = 'Tasker/edit_tasker_advertisement';

$route['all_details_advertisement'] = 'Tasker/all_details_advertisement';

//...................update main image of advertisement ................//
$route['get_advertisement_main_image'] = 'Tasker/get_advertisement_main_image';
$route['edit_advertisement_main_image'] = 'Tasker/edit_advertisement_main_image';

//...................update inner images of advertisement ................//
$route['get_advertisement_images'] = 'Tasker/get_advertisement_images';
$route['edit_advertisement_images'] = 'Tasker/edit_advertisement_images';
$route['delete_inside_image'] = 'Tasker/delete_inside_image';

$route['delete_tasker_advertisement'] = 'Tasker/delete_advertisement';


//...................bids stats................//
$route['tasker_bids_stats'] = 'Tasker/tasker_bids_stats';
$route['view_proposal_details'] = 'Tasker/view_proposal_details';
$route['accept_bid'] = 'Tasker/accept_bid';
$route['reject_bid'] = 'Tasker/reject_bid';

//...................tasker profile................//
$route['tasker_profile'] = 'Tasker/tasker_profile';
$route['update_tasker_profile'] = 'Tasker/update_tasker_profile';


//...................tasker chat................//
$route['payments_tasker'] = 'Tasker/payments_tasker';
$route['tasker_do_payment'] = 'Tasker/tasker_do_payment';




$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
