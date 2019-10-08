<?php

class AdminModel extends CI_Model{

    public function addUserInfo($data){
        $this->db->insert('users',$data);
    }


    public function getAllUsers()
    {
       return $this->db->order_by('id','DESC')->get('users')->result_array();
    }

    public function getSingleUser($id)
    {
        return $this->db->where('id',$id)->get('users')->row_array();
    }

    public function updateSingleUserInfo($id,$data)
    {
        $this->db->where('id',$id)->update('users',$data);
    }

    public function resetPass($id,$dataPass)
    {
        $this->db->where('id',$id)->update('users',$dataPass);
    }


    public function deleteUser($id)
    {
        $this->db->where('id', $id)->delete('users');
    }


    public function getSingleSessionInfo()
    {
        return $this->db->where('id',$_SESSION['user_data'])->get('users')->row_array();
    }

    public function getSingleProfileInfo($id)
    {
        return $this->db->where('id',$id)->get('users')->row_array();
    }

    public function updateUserProfileInfo($id, $data)
    {
        $this->db->where('id',$id)->update('users',$data);
    }





//    task
    public function getAllUsersForTask()
    {
        return $this->db->get('users')->result_array();
    }

    // slect all tasks (admin see)
    public function tasks()
    {
        $sql = <<<SQL
SELECT
    tasks.id,
    tasks.user_id,
    users.name,
    users.surname,
    users.department,
    users.image,
    tasks.deadline,
    tasks.created_at,
    tasks.started_date,
    tasks.status_id,
    tasks.done,
    tasks.taskCreaterId,
    (
    SELECT
        GROUP_CONCAT(
            IFNULL(users.name, "0"),
            "|",
            IFNULL(users.surname, "0"),
            "|",
            IFNULL(users.department, "0"),
            "|",
            IFNULL(users.image, "0"),
            "|",
            task_users.is_redirect,
            "|",
            IFNULL(redirect_user.name, "0"),
            "|",
            IFNULL(redirect_user.surname, "0"),
            "|",
            IFNULL(redirect_user.department, "0"),
            "|",
            IFNULL(redirect_user.image, "0")
        )
    FROM
        task_users
    left JOIN users ON users.id = task_users.user_id
    LEFT JOIN users AS redirect_user
    ON
        redirect_user.id = task_users.redirect_user_id
    WHERE
        task_users.task_id = tasks.id
) AS users,
tasks.titile
FROM
    tasks 
INNER JOIN task_statuses ON task_statuses.id = tasks.status_id
inner JOIN users ON users.id = tasks.taskCreaterId 

 ORDER BY 
 `tasks`.`id` DESC


SQL;
//Where tasks.id = $taskid;
//        more sehifesine at
        return $this->db->query($sql)->result_array();
    }


// slect user_id tasks (user see)
    public function usersTasks()
    {
        $sql = <<<SQL
SELECT
    tasks.id,
    tasks.user_id,
    users.name,
    users.surname,
    users.department,
    users.image,
    tasks.deadline,
    tasks.created_at,
    tasks.started_date,
    tasks.status_id,
    tasks.done,
    tasks.taskCreaterId,
    (
    SELECT
        GROUP_CONCAT(
            IFNULL(users.name, "0"),
            "|",
            IFNULL(users.surname, "0"),
            "|",
            IFNULL(users.department, "0"),
            "|",
            IFNULL(users.image, "0"),
            "|",
            task_users.is_redirect,
            "|",
            IFNULL(redirect_user.name, "0"),
            "|",
            IFNULL(redirect_user.surname, "0"),
            "|",
            IFNULL(redirect_user.department, "0"),
            "|",
            IFNULL(redirect_user.image, "0")
        )
    FROM
        task_users
    left JOIN users ON users.id = task_users.user_id
    LEFT JOIN users AS redirect_user
    ON
        redirect_user.id = task_users.redirect_user_id
    WHERE
        task_users.task_id = tasks.id
) AS users,
tasks.titile
FROM
    tasks 
INNER JOIN task_statuses ON task_statuses.id = tasks.status_id
inner JOIN users ON users.id = tasks.taskCreaterId 
WHERE tasks.taskCreaterId = $_SESSION[user_data]
 ORDER BY 
 `tasks`.`id` DESC


SQL;
//Where tasks.id = $taskid;
//        more sehifesine at
        return $this->db->query($sql)->result_array();
    }







//    ---------------------------------------------
//Mene gonderilen tapsiriqlar Admin start
    public function tasksForMe()
    {
        $sql = <<<SQL
SELECT
    tasks.id,
    t_user.name,
    t_user.surname,
    t_user.department,
    t_user.image,
    tasks.deadline,
    tasks.created_at,
    tasks.started_date,
    tasks.status_id,
    tasks.done,
    tasks.taskCreaterId,
    tasks.titile,
    GROUP_CONCAT(
        users.name,
        "|",
        users.surname,
        "|",
        users.department,
        "|",
        users.image,
        "|",
        task_users.is_redirect,
        "|",
        IFNULL(redirect_user.name, "0"),
        "|",
        IFNULL(redirect_user.surname, "0"),
        "|",
        IFNULL(redirect_user.department, "0"),
        "|",
        IFNULL(redirect_user.image, "0")
    ) AS users
FROM
    `task_users`
INNER JOIN tasks ON tasks.id = task_users.task_id
INNER JOIN users t_user ON tasks.user_id = t_user.id
left JOIN users ON users.id = task_users.user_id
LEFT JOIN users AS redirect_user
ON
    redirect_user.id = task_users.redirect_user_id

     ORDER BY 
 `tasks`.`id` DESC


SQL;
//Where tasks.id = $taskid;
//        more sehifesine at
        return $this->db->query($sql)->result_array();
    }
//Mene gonderilen tapsiriqlar Admin end

//    ---------------------------------------------

//Mene gonderilen tapsiriqlar User start
    public function usersTasksForMe()
    {
        $sql = <<<SQL
SELECT
    tasks.id,
    t_user.name,
    t_user.surname,
    t_user.department,
    t_user.image,
    tasks.deadline,
    tasks.created_at,
    tasks.started_date,
    tasks.status_id,
    tasks.done,
    tasks.taskCreaterId,
    tasks.titile,
    GROUP_CONCAT(
        users.name,
        "|",
        users.surname,
        "|",
        users.department,
        "|",
        users.image,
        "|",
        task_users.is_redirect,
        "|",
        IFNULL(redirect_user.name, "0"),
        "|",
        IFNULL(redirect_user.surname, "0"),
        "|",
        IFNULL(redirect_user.department, "0"),
        "|",
        IFNULL(redirect_user.image, "0")
    ) AS users
FROM
    `task_users`
INNER JOIN tasks ON tasks.id = task_users.task_id
INNER JOIN users t_user ON tasks.user_id = t_user.id
left JOIN users ON users.id = task_users.user_id
LEFT JOIN users AS redirect_user
ON
    redirect_user.id = task_users.redirect_user_id
WHERE
    task_users.user_id = $_SESSION[user_data] OR task_users.redirect_user_id = $_SESSION[user_data]
     ORDER BY 
 `tasks`.`id` DESC

SQL;
//Where tasks.id = $taskid;
//        more sehifesine at
        return $this->db->query($sql)->result_array();
    }
//Mene gonderilen tapsiriqlar User end
    //    ---------------------------------------------






    public function getAllTaskStatuses()
    {
        return $this->db->get('task_statuses')->result_array();
    }

    public function insertTaskData($data,$users)
    {
        $this->db->insert('tasks',$data);

        $insert_id = $this->db->insert_id();
        // update-de olajax :D
        foreach ($users as $user) {
            $this->db->insert('task_users',['task_id' => $insert_id, 'user_id' => $user]);
        }
     //   xxxxxx
        return  $insert_id;
    }





    public function getAllUsersForTaskToRedirect($task_id)
{
    $this->db->select('GROUP_CONCAT(task_users.redirect_user_id) redirect_ids');
    $this->db->from('task_users');
    $this->db->where('task_users.task_id',$task_id);
    $this->db->where('task_users.is_redirect','1');
    return $this->db->get()->row_array();

}

    public function getAllAssigmentUsersForTask($task_id)
    {


        $this->db->select('GROUP_CONCAT(task_users.user_id) user_ids');
        $this->db->from('task_users');
        $this->db->where('task_users.task_id',$task_id);
        $this->db->where('task_users.is_redirect','0');
        return $this->db->get()->row_array();

    }


    public function taskDelete($id)
    {
        $this->db->where('id', $id)->delete('tasks');
    }


    public function getSingleMoreJoin($id)
    {
        $sql = <<<SQL
SELECT
   task_users.id,
   users.name,
   users.surname,
   users.department,
   users.image,
   users.email,
   
   task_users.is_redirect,
   
   redirect_user.name AS redirect_user_name,
   redirect_user.surname AS redirect_user_surname,
   redirect_user.department AS redirect_user_department,
   redirect_user.image  AS redirect_user_image,
   redirect_user.email  AS redirect_user_email
   
FROM
    `task_users`
-- INNER JOIN users ON users.id = task_users.user_id
Left JOIN users ON users.id = task_users.user_id
LEFT JOIN users AS redirect_user
ON
    redirect_user.id = task_users.redirect_user_id
    WHERE task_users.task_id = '$id' 
    
--     ORDER BY id DESC ;


SQL;

        return $this->db->query($sql)->result_array();
//        return $this->db->query($sql)->result_array();
    }


    public function tasksStatuses()
    {
        return $this->db->get('task_statuses')->result_array();
    }


    public function getSingleTask($id)
    {
        $this->db->select('*');
        $this->db->from('tasks');
//        $this->db->join('users', 'tasks.user_id = users.id');
        $this->db->join('users', 'tasks.taskCreaterId = users.id');
        $this->db->where('tasks.id',$id);
        return $query = $this->db->get()->row_array();
    }

    public function updateTaskData($id,$data,$users)
    {
        $this->db->where('id',$id)->update('tasks',$data);

        $this->db->where('task_id',$id )->delete('task_users');

        foreach ($users as $user) {
            $this->db->insert('task_users',['task_id' => $id, 'user_id' => $user]);
        }
    }

    public function getUpdateTsk($id)
    {
        return $this->db->where('id',$id)->get('tasks')->row_array();
    }

    public function getTaskAllDoneStatus()
    {
        return $this->db->get('task_done_status')->result_array();
    }
    public function getTaskId($id)
    {
        return $this->db->where('id',$id)->get('tasks')->row_array();
    }

    public function addStartedDate($id,$data)
    {
        $this->db->where('id',$id)->update('tasks',$data);
    }


    public function addStartedDateAbort($id,$data)
    {
        $this->db->where('id',$id)->update('tasks',$data);
    }

    public function taskFinish($id,$data)
    {
        $this->db->where('id',$id)->update('tasks',$data);
    }


//    admin dashboard Done counts start
    public function getAllTasksCount0(){
//        return $this->db->select('done')->get('tasks')->result_array();
        $count =  $this->db->select('done')->where('done','0')->get('tasks')->result_array();
        return count($count);
    }

    public function getAllTasksCount1(){
        $count =  $this->db->select('done')->where('done','1')->get('tasks')->result_array();
        return count($count);
    }
    public function getAllTasksCount2(){
        $count =  $this->db->select('done')->where('done','2')->get('tasks')->result_array();
        return count($count);
    }
    public function getAllTasksCount3(){
        $count =  $this->db->select('done')->where('done','3')->get('tasks')->result_array();
        return count($count);
    }
    public function getAllTasksCount4(){
        $count =  $this->db->select('done')->where('done','4')->get('tasks')->result_array();
        return count($count);
    }
//    admin dashboard Done counts end


//    public function statusToCheckWhoSend()
//    {
//        return $this->db->query("SELECT * FROM `task_users` INNER JOIN tasks ON task_users.task_id = tasks.id")->result_array();
//    }

    public function insertUserTaskData($data)
    {

        $this->db->insert('tasks',$data);
        $insert_id = $this->db->insert_id();
        $this->db->insert('task_users',['task_id' => $insert_id]);
    }

}