<?php

class AdminCont extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('AdminModel');
    }

    public function index()
    {
       $this->load->view('admin/login');
    }

    public function loginAct()
    {
        $email = $this->input->post('email');
        $pass  = $this->input->post('password');

        if($email && $pass){

            $user_data = $this->db->where('email',$email)->where('password',md5($pass))->get('users')->row_array();

            if(!empty($user_data)){

                $_SESSION['user_login'] = TRUE;
                $_SESSION['user_data'] = $user_data['id'];
                $_SESSION['user_name'] = $user_data['name'];
                $_SESSION['user_surname'] = $user_data['surname'];
                $_SESSION['user_privilege'] = $user_data['privilege'];

                if($_SESSION['user_privilege'] == 'Admin'){
                    redirect(base_url('dashboard'));
                }elseif ($_SESSION['user_privilege'] == 'Sadə'){
                    redirect(base_url('tasks'));
                }
                else{
                    $this->session->set_flashdata('err','Yalnışlıq var!');
                    redirect(base_url('adminius'));
                }


            }else{
                $this->session->set_flashdata('err','E-poçt ve ya şifrə yalnışdır!');
                redirect(base_url('adminius'));
            }

        }else{
           $this->session->set_flashdata('err','Boşluq buraxmayın!');
           redirect(base_url('adminius'));
        }
    }

    public function logOut()
    {
        if($_SESSION['user_login'])
            unset($_SESSION['user_login']);
            unset($_SESSION['user_data']);
            unset($_SESSION['user_privilege']);
            redirect(base_url('adminius'));

    }

    public function dashboard()
    {
//        infonu qebul et hamisi ve ide gore
        $data['counts0'] = $this->AdminModel->getAllTasksCount0();
        $data['counts1'] = $this->AdminModel->getAllTasksCount1();
        $data['counts2'] = $this->AdminModel->getAllTasksCount2();
        $data['counts3'] = $this->AdminModel->getAllTasksCount3();
        $data['counts4'] = $this->AdminModel->getAllTasksCount4();

        $this->load->view('admin/dashboard',$data);
    }


//------------------------------------------------------
//  all users profile start

//    get
    public function profile()
    {
//      sifre deyismek lazim ola biler.
        $data['getSingleSessionIdInfo'] = $this->AdminModel->getSingleSessionInfo();
        $this->load->view('admin/profile',$data);
    }
//    edit
    public function editProfile($id)
    {
       $data['getSingleProfileInfo'] = $this->AdminModel->getSingleProfileInfo($id);
       $this->load->view('admin/profileEdit',$data);
    }
//    edit action
    public function editProfileAct($id)
    {
        $name       = $_POST['name'];
        $surname    = $_POST['surname'];
        $department = $_POST['department'];
        $email      = $_POST['email'];
        $gender     = $_POST['gender'];

        $config['upload_path']    = 'upload/users';
        $config['allowed_types']  = 'jpg|jpeg|png|gif';
        $config['file_name']      = $_FILES['images']['name'];
        $config['max_size']       = '10000';

        $this->upload->initialize($config);

        if(!empty($name) && !empty($surname) && !empty($department) && !empty($email) && !empty($gender)) {

            if($this->upload->do_upload('images')){
                $uploadData = $this->upload->data();
                $pictures = $uploadData['file_name'];


                $data = [
                    'name' => $name,
                    'surname' => $surname,
                    'department' => $department,
                    'image' => $pictures,
                    'email' => $email,
                    'gender' => $gender,
                ];

                $this->AdminModel->updateUserProfileInfo($id, $data);

                $this->session->set_flashdata('success', 'Təbriklər! Məlumat uğurla yeniləndi.');
                redirect(base_url('profile'));


            }else{

                $data = [
                    'name' => $name,
                    'surname' => $surname,
                    'department' => $department,
                    'email' => $email,
                    'gender' => $gender,
                ];

                $this->AdminModel->updateUserProfileInfo($id, $data);

                $this->session->set_flashdata('success', 'Təbriklər! Məlumat uğurla yeniləndi.');
                redirect(base_url('profile'));

            }


        }else{
            $this->session->set_flashdata('err','Zəhmət olmasa bütün xanaları doldurun!');
            redirect(base_url('editProfile/'.$id));
        }



    }


//  all users profile end
//------------------------------------------------------



//------------------------------------------------------
//  all Admin users profile start

//    get 
    public function allUsers()
    {
        $data['getAllUsers'] = $this->AdminModel->getAllUsers();
        $this->load->view('admin/allUsers',$data);
    }
//    add 
    public function addUser()
    {
        $this->load->view('admin/profileAdd');
    }
//    add action 
    public function addUserAct()
    {
        $name       = $_POST['name'];
        $surname    = $_POST['surname'];
        $department = $_POST['department'];
        $email      = $_POST['email'];
        $password   = $_POST['password'];
        $privilege  = $_POST['privilege'];
        $status     = $_POST['status'];
        $gender     = $_POST['gender'];

        if(!empty($name) && !empty($surname) && !empty($department) && !empty($email) && !empty($password) && !empty($privilege)&& !empty($status) && !empty($gender)){

            $data = [
                'name'       => $name,
                'surname'    => $surname,
                'department' => $department,
                'image'      => 'default-image.png',
                'email'      => $email,
                'password'   => md5($password),
                'status'     => $status,
                'privilege'  => $privilege,
                'gender'     => $gender,
            ];

            $this->AdminModel->addUserInfo($data);
            $this->session->set_flashdata('success','Təbriklər! İstifadəçi uğurla əlavə olundu!');
            redirect(base_url('allUsers'));

        }else{
            $this->session->set_flashdata('err','Zəhmət olmasa bütün xanaları doldurun!');
            redirect(base_url('addUser'));
        }

    }

//    update 
    public function updateUser($id)
    {
        $data['getSingleUser'] = $this->AdminModel->getSingleUser($id);
        $this->load->view('admin/profileUpdate',$data);
    }
//    update action 
    public function updateUserAct($id)
    {
        $name       = $_POST['name'];
        $surname    = $_POST['surname'];
        $department = $_POST['department'];
        $email      = $_POST['email'];
        $privilege  = $_POST['privilege'];
        $status     = $_POST['status'];
        $gender     = $_POST['gender'];

        $config['upload_path']    = 'upload/users';
        $config['allowed_types']  = 'jpg|jpeg|png|gif';
        $config['file_name']      = $_FILES['images']['name'];
        $config['max_size']       = '10000';

        $this->upload->initialize($config);
        
        if(!empty($name) && !empty($surname) && !empty($department) && !empty($email) && !empty($privilege)&& !empty($status) && !empty($gender)) {
            
            if($this->upload->do_upload('images')){
                $uploadData = $this->upload->data();
                $pictures = $uploadData['file_name'];


                $data = [
                    'name' => $name,
                    'surname' => $surname,
                    'department' => $department,
                    'image' => $pictures,
                    'email' => $email,
                    'status' => $status,
                    'privilege' => $privilege,
                    'gender' => $gender,
                ];

                $this->AdminModel->updateSingleUserInfo($id, $data);

                $this->session->set_flashdata('success', 'Təbriklər! Məlumat uğurla yeniləndi.');
                redirect(base_url('allUsers'));


            }else{
                $data = [
                    'name' => $name,
                    'surname' => $surname,
                    'department' => $department,
                    'email' => $email,
                    'status' => $status,
                    'privilege' => $privilege,
                    'gender' => $gender,
                ];

                $this->AdminModel->updateSingleUserInfo($id, $data);

                $this->session->set_flashdata('success', 'Təbriklər! Məlumat uğurla yeniləndi.');
                redirect(base_url('allUsers'));
            }
            
        }else{

            $this->session->set_flashdata('err','Zəhmət olmasa bütün xanaları doldurun!');
            redirect(base_url('updateUser/'.$id));

        }


    }
//    reset password action 
    public function updateUserPass($id)
    {
       $password = $_POST['password'];

       if(!empty($password)){

           $dataPass = [
               'password' => md5($password)
           ];

           $this->AdminModel->resetPass($id,$dataPass);
           $this->session->set_flashdata('success','Təbriklər! Şifrəniz uğurla yeniləndi.');
           redirect(base_url('allUsers'));
           
       }else{
           $this->session->set_flashdata('errPass','Zəhmət olmasa xananı doldurun!');
           redirect(base_url('updateUser/'.$id));
       }
    }
//    delete 
    public function deleteUser($id)
    {
        $this->AdminModel->deleteUser($id);
        $this->session->set_flashdata('success','Təbriklər! Məlumat uğurla silindi.');
        redirect('allUsers');
    }
    
    
//  all Admin users profile end
//------------------------------------------------------

//MySends
    public function tasks()
    {



        if($_SESSION['user_privilege'] == 'Admin'){

            $data['tasks'] = $this->AdminModel->tasks();

            $data['tasksStatuses'] = $this->AdminModel->tasksStatuses();

            $this->load->view('admin/tables',$data);

        }elseif ($_SESSION['user_privilege'] == 'Sadə'){

            $data['tasks'] = $this->AdminModel->usersTasks();
    //            print_r('<pre>');
    //            print_r($data['tasks']);
    //            die();
            $data['tasksStatuses'] = $this->AdminModel->tasksStatuses();
//            $data['statusToCheckWhoSend'] = $this->AdminModel->statusToCheckWhoSend();
//            print_r('<pre>');
//            print_r($data['statusToCheckWhoSend']);
//            die();


            $this->load->view('admin/tables',$data);

        }else{
            redirect(base_url('adminius'));
        }



    }

//To Me Tasks

    public function tasksForMe()
    {
        if($_SESSION['user_privilege'] == 'Admin'){

            $data['tasks'] = $this->AdminModel->tasksForMe();
            $data['tasksStatuses'] = $this->AdminModel->tasksStatuses();

            $this->load->view('admin/tasksForMe',$data);

        }elseif ($_SESSION['user_privilege'] == 'Sadə'){

            $data['tasks'] = $this->AdminModel->usersTasksForMe();
            $data['tasksStatuses'] = $this->AdminModel->tasksStatuses();

            $this->load->view('admin/tasksForMe',$data);

        }else{
            redirect(base_url('adminius'));
        }


    }







//    public function userTasks()
//    {
//        $data['tasks'] = $this->AdminModel->usersTasks();
//        $data['tasksStatuses'] = $this->AdminModel->tasksStatuses();
//
//        $this->load->view('admin/userTables',$data);
//    }


//ADMIN
    public function addTask()
    {
        $data['getAllUsersForTask'] = $this->AdminModel->getAllUsersForTask();
        $data['getAllTaskStatuses'] = $this->AdminModel->getAllTaskStatuses();
        $this->load->view('admin/addTask',$data);
    }

    public function addTaskAction()
    {
        $status   = $this->input->post('status');
        $deadline   = $this->input->post('deadline');
        $title   = $this->input->post('title');
        $description   = $this->input->post('description');
        $users = $this->input->post('users');

        if(!empty($status) && !empty($deadline) && !empty($title) && !empty($description) && !empty($users)){

            $config['upload_path']    = 'upload/tasks';
            $config['allowed_types']  = 'jpg|jpeg|png|gif';
            $config['file_name']      = $_FILES['images']['name'];
            $config['max_size']       = '10000';

            $this->upload->initialize($config);

            if($this->upload->do_upload('images')){

                $uploadData = $this->upload->data();
                $pictures = $uploadData['file_name'];

                $data =[
                    'user_id'  => $_SESSION['user_data'],
                    'status_id' => $status,
                    'deadline' => $deadline,
                    'titile' => $title,
                    'description' => $description,
                    'task_image' => $pictures,

                    'taskCreaterId' => $_SESSION['user_data']
                ];

                $this->AdminModel->insertTaskData($data,$users);
                $this->session->set_flashdata('success','Tapşırıq uğurla əlavə olundu');
                redirect(base_url('tasks'));

            }else{

                $data =[
                    'user_id'  => $_SESSION['user_data'],
                    'status_id' => $status,
                    'deadline' => $deadline,
                    'titile' => $title,
                    'description' => $description,

                    'taskCreaterId' => $_SESSION['user_data']
                ];

                $this->AdminModel->insertTaskData($data,$users);
                $this->session->set_flashdata('success','Tapşırıq uğurla əlavə olundu');
                redirect(base_url('tasks'));

            }
        }else{
            $this->session->set_flashdata('err','Zəhmət olmasa bütün xanaları doldurun!');
            redirect(base_url('addTask'));
        }

    }
//ADMIN

//USER

    public function userTaskAdd()
    {
        $data['getAllTaskStatuses'] = $this->AdminModel->getAllTaskStatuses();
        $this->load->view('admin/userAddTask',$data);
    }

    public function userTaskAddAct()
    {
        $status   = $this->input->post('status');
        $title   = $this->input->post('title');
        $description   = $this->input->post('description');


        if(!empty($status) && !empty($title) && !empty($description)){

            $config['upload_path']    = 'upload/tasks';
            $config['allowed_types']  = 'jpg|jpeg|png|gif';
            $config['file_name']      = $_FILES['images']['name'];
            $config['max_size']       = '10000';

            $this->upload->initialize($config);

            if($this->upload->do_upload('images')){

                $uploadData = $this->upload->data();
                $pictures = $uploadData['file_name'];

                $data =[
                    'status_id' => $status,
                    'titile' => $title,
                    'description' => $description,
                    'task_image' => $pictures,
                    'taskCreaterId' => $_SESSION['user_data'],
                ];

                $this->AdminModel->insertUserTaskData($data);
                $this->session->set_flashdata('success','Tapşırıq uğurla əlavə olundu');
                redirect(base_url('tasks'));

            }else{

                $data =[
                    'status_id' => $status,
                    'titile' => $title,
                    'description' => $description,
                    'taskCreaterId' => $_SESSION['user_data'],
                ];

                $this->AdminModel->insertUserTaskData($data);
                $this->session->set_flashdata('success','Tapşırıq uğurla əlavə olundu');
                redirect(base_url('tasks'));

            }
        }else{
            $this->session->set_flashdata('err','Zəhmət olmasa bütün xanaları doldurun!');
            redirect(base_url('addTask'));
        }

    }

//USER



    public function updateTask($id)
    {
        // $data['getSingleTaskAndUSer'] = $this->AdminModel->getSingleTaskAndUSer($id);
        $data['getAllUsersForTask'] = $this->AdminModel->getAllUsersForTask();
        $data['getAllTaskStatuses'] = $this->AdminModel->getAllTaskStatuses();
        $data['getAllAssigmentUsersForTask'] = $this->AdminModel->getAllAssigmentUsersForTask($id);
        $data['getUpdateTask'] = $this->AdminModel->getUpdateTsk($id);
        $data['getTaskAllDoneStatus'] = $this->AdminModel->getTaskAllDoneStatus();
        $this->load->view('admin/updateTaskPage',$data);
    }

    public function updateTaskAct($id)
    {
        $status   = $this->input->post('status');
        $deadline   = $this->input->post('deadline');
        $title   = $this->input->post('title');
        $description   = $this->input->post('description');
        $users = $this->input->post('users');

        $done   = $this->input->post('done');
        
        if(!empty($done) || $done == 0 && !empty($status) && !empty($deadline) && !empty($title) && !empty($description) && !empty($users)){

            $config['upload_path']    = 'upload/tasks';
            $config['allowed_types']  = 'jpg|jpeg|png|gif';
            $config['file_name']      = $_FILES['images']['name'];
            $config['max_size']       = '10000';

            $this->upload->initialize($config);

            if($this->upload->do_upload('images')){
                $uploadData = $this->upload->data();
                $pictures = $uploadData['file_name'];

                $data =[
                    'status_id' => $status,
                    'deadline' => $deadline,
                    'titile' => $title,
                    'description' => $description,
                    'task_image' => $pictures,
                    'done' =>$done,

                ];

                $this->AdminModel->updateTaskData($id,$data,$users);

                if($done == '2' || $done == '3' || $done == '4'){
                    $dataComplate =[
                        'taskCompleteDate' => date('Y-m-d H:i:s'),
                    ];
                    $this->db->where('id',$id)->update('tasks',$dataComplate);
                }
                elseif ($done == '1')
                {
                    $dataProccess =[
                        'taskCompleteDate' => NULL,
                        'started_date' => date('Y-m-d H:i:s'),
                    ];
                    $this->db->where('id',$id)->update('tasks',$dataProccess);
                }
                elseif ($done == '0'){
                    $dataNew =[
                        'taskCompleteDate' => NULL,
                        'started_date' => NULL,
                    ];
                    $this->db->where('id',$id)->update('tasks',$dataNew);
                }
                else{
                    $dataElse =[
                        'taskCompleteDate' => NULL,
                    ];
                    $this->db->where('id',$id)->update('tasks',$dataElse);
                }




                $this->session->set_flashdata('success','Tapşırıq uğurla yeniləndi');
                redirect(base_url('tasks'));

            }else{

                $data =[
                    'status_id' => $status,
                    'deadline' => $deadline,
                    'titile' => $title,
                    'description' => $description,
                    'done' =>$done
                ];

                $this->AdminModel->updateTaskData($id,$data,$users);






                if($done == '2' || $done == '3' || $done == '4'){
                    $dataComplate =[
                        'taskCompleteDate' => date('Y-m-d H:i:s'),
                    ];
                    $this->db->where('id',$id)->update('tasks',$dataComplate);
                }
                elseif ($done == '1')
                {
                    $dataProccess =[
                        'taskCompleteDate' => NULL,
                        'started_date' => date('Y-m-d H:i:s'),
                    ];
                    $this->db->where('id',$id)->update('tasks',$dataProccess);
                }
                elseif ($done == '0'){
                    $dataNew =[
                        'taskCompleteDate' => NULL,
                        'started_date' => NULL,
                    ];
                    $this->db->where('id',$id)->update('tasks',$dataNew);
                }
                else{
                    $dataElse =[
                        'taskCompleteDate' => NULL,
                    ];
                    $this->db->where('id',$id)->update('tasks',$dataElse);
                }




                $this->session->set_flashdata('success','Tapşırıq uğurla yeniləndi');
                redirect(base_url('tasks'));

            }
        }else{
            $this->session->set_flashdata('err','Zəhmət olmasa bütün xanaları doldurun!');
            redirect(base_url('updateTask/'.$id));
        }
    }

    public function deleteTask($id)
    {
        $this->AdminModel->taskDelete($id);
        $this->session->set_flashdata('success','Tapşırıq uğurla silindi.');
        redirect(base_url('tasks'));
    }

    public function more($id)
    {
        $data['getSingleMore'] = $this->AdminModel->getSingleMoreJoin($id);
        $data['getSingleTask'] = $this->AdminModel->getSingleTask($id);
        $data['getTaskId'] =  $this->AdminModel->getTaskId($id);
//        print_r('<pre>');
//        print_r($data['getSingleTask']);
//        die();
        $this->load->view('admin/more',$data);
    }

    public function taskStatusAnswerYes($id)
    {
        date_default_timezone_set("Asia/Tbilisi");

        $accept = $this->input->post('accept');

        if(!empty($accept) && $accept == '1'){

            $data = [
                'started_date' => date('Y-m-d H:i:s'),
                'done' => '1'
            ];

            $this->AdminModel->addStartedDate($id,$data);
            $this->session->set_flashdata('success', 'Tapşırıq uğurla qəbul olundu!');
            redirect(base_url('more/'.$id));
        }else{
            $this->session->set_flashdata('err', 'Tapşırıq qəbul olunmayıb!');
            redirect(base_url('more/'.$id));
        }
    }








    public function redirectPage($id)
    {
        $data['getRedirectUsersIds'] = $this->AdminModel->getAllUsersForTaskToRedirect($id);
        $data['getTaskId'] = $this->db-> where('id',$id)->get('tasks')->row_array();
        $data['getAllUsersForTask'] = $this->AdminModel->getAllUsersForTask();

        $this->load->view('admin/redirectPage',$data);
    }

    public function redirectPageAct($id)
    {

        $users = $this->input->post('users');


        foreach ($users as $user) {
            $this->db->insert('task_users',['is_redirect' => 1,'task_id'=>$id,'redirect_user_id' => $user]);
        }
        $this->session->set_flashdata('success','Tapşırıq uğurla yönləndirildi');
        redirect(base_url('tasks'));
    }


//bos      bunu ancaq admin ede bilecek
    public function taskStatusAnswerNo($id)
    {
        date_default_timezone_set("Asia/Tbilisi");

        $abort = $this->input->post('abort');

        if(!empty($abort) && $abort == '2'){

            $data = [
                'started_date' => date('Y-m-d H:i:s'),
                'done' => '3',
                'taskCompleteDate' => date('Y-m-d H:i:s'),
            ];

            $this->AdminModel->addStartedDateAbort($id,$data);
            $this->session->set_flashdata('success', 'Tapşırıq imtina olundu!');
            redirect(base_url('more/'.$id));
        }else{

            $this->session->set_flashdata('err', 'Tapşırıq imtina olunmayıb!');
            redirect(base_url('more/'.$id));
        }
    }



    public function taskFinish($id)
    {
        date_default_timezone_set("Asia/Tbilisi");
        $taskFinishDescription = $this->input->post('taskFinishDescription');
        $finish = $this->input->post('finish');

        if(!empty($finish) && $finish == '3'){
            $data = [
                'taskResultDescription' => $taskFinishDescription,
                'done' => '2',
                'taskCompleteDate' => date('Y-m-d H:i:s'),
            ];

            $this->AdminModel->taskFinish($id,$data);
            $this->session->set_flashdata('success', 'Tapşırıq uğurla yerinə yetirildi və rəyiniz göndərildi!');
            redirect(base_url('more/'.$id));
        }else{

            $this->session->set_flashdata('err', 'Tapşırıq yerinə yetirilmədi və rəyiniz göndərilmədi!');
            redirect(base_url('more/'.$id));

        }

    }


//    public function abortPage($id)
//    {
//        $this->load->view('admin/abortPage');
//    }

//------------------------------------------------------
//    count of tasks dashboard +
//    userd id info +
//    task end time +
//    cancel and update just admin +


//    sender getter icons
//    update datetime time zone

}