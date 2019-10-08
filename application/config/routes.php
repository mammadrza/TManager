<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'AdminCont/index';
$route['adminius'] = 'AdminCont/index';
$route['loginAct'] = 'AdminCont/loginAct';
$route['logOut'] = 'AdminCont/logOut';

$route['dashboard'] = 'AdminCont/dashboard';


$route['profile'] = 'AdminCont/profile';
$route['editProfile/(.*)'] = 'AdminCont/editProfile/$1';
$route['editProfileAct/(.*)'] = 'AdminCont/editProfileAct/$1';





$route['addUser'] = 'AdminCont/addUser';
$route['addUserAct'] = 'AdminCont/addUserAct';
$route['deleteUser/(.*)'] = 'AdminCont/deleteUser/$1';
$route['updateUser/(.*)'] = 'AdminCont/updateUser/$1';
$route['updateUserAct/(.*)'] = 'AdminCont/updateUserAct/$1';
$route['updateUserPass/(.*)'] = 'AdminCont/updateUserPass/$1';




$route['allUsers'] = 'AdminCont/allUsers';
$route['tasks'] = 'AdminCont/tasks';


$route['tasksToMe'] = 'AdminCont/tasksForMe';


//$route['userTasks'] = 'AdminCont/userTasks';

$route['more/(.*)'] = 'AdminCont/more/$1';


//$route['abortPage/(.*)'] = 'AdminCont/abortPage/$1';

$route['taskStatusAnswerYes/(.*)'] = 'AdminCont/taskStatusAnswerYes/$1';
$route['taskStatusAnswerNo/(.*)'] = 'AdminCont/taskStatusAnswerNo/$1';
$route['taskFinish/(.*)'] = 'AdminCont/taskFinish/$1';


//ADMIN
$route['addTask'] = 'AdminCont/addTask';
$route['addTaskAction'] = 'AdminCont/addTaskAction';
//ADMIN




//USER
$route['userTaskAdd'] = 'AdminCont/userTaskAdd';
$route['userTaskAddAct'] = 'AdminCont/userTaskAddAct';
//USER

$route['deleteTask/(.*)'] = 'AdminCont/deleteTask/$1';

$route['redirectPage/(.*)'] = 'AdminCont/redirectPage/$1';
$route['redirectPageAct/(.*)'] = 'AdminCont/redirectPageAct/$1';


$route['updateTask/(.*)'] = 'AdminCont/updateTask/$1';
$route['updateTaskAct/(.*)'] = 'AdminCont/updateTaskAct/$1';







$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
