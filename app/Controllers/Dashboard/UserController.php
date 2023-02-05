<?php

namespace App\Controllers\Dashboard;

use App\Controllers\BaseController;
use App\Models\UserModel;

class UserController extends BaseController
{
    /**
     * @return void
     */
    public function index(): void
    {
        $this->render("dashboard.user.index");
    }
    public function ListUser(): void
    {
        $user_model = UserModel::all();
        $this->render("dashboard.user.list", [
            "listUser" => $user_model
        ]);
    }
    public function CreateAccount(): void
    {
        $this->render("dashboard.user.create");
    }
    public function StoreCreateAccount(): void
    {
        $requestData = $_POST; // Get data from form
        $userModel = new UserModel();
        if ($_FILES['avatar']['size'] > 0) {
            $fileName = uniqid('', true) . '-' . $_FILES['avatar']['name'];
            move_uploaded_file($_FILES['avatar']['tmp_name'], './public/uploads/avatar/' . $fileName);
            $userModel->avatar = $fileName;
        }
        $userModel->fill($requestData);
        $userModel->save();
        header("Location: index.php?url=list-user");
    }
    public function UpdateAccount(): void
    {
        $user_id = $_GET['id'] ?? null;
        $user_model = UserModel::find($user_id);
        if (!$user_model) {
            header("Location: index.php?url=list-user");
            die;
        }
        $this->render("dashboard.user.update", [
            "user" => $user_model
        ]);
    }
    public function StoreUpdateAccount(): void
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $user_id = $_GET['id'] ?? null;
            if (!$user_id) {
                header("Location: index.php?url=list-user");
                die;
            }
            $user_model = UserModel::find($user_id);
            if (!$user_model) {
                header("Location: index.php?url=list-user");
                die;
            }
            $request_data = $_POST;
            if ($_FILES['avatar']['size'] > 0) {
                $filename = uniqid('', true) . '-' . $_FILES['avatar']['name'];
                move_uploaded_file($_FILES['avatar']['tmp_name'], './public/uploads/avatar/' . $filename);
                $user_model->avatar = $filename;
            }
            $user_model->fill($request_data);
            $user_model->save();
            header("Location: index.php?url=list-user");
        }
    }
    public function DeleteAccount(): void
    {
        $userId = $_GET['id'] ?? null;
        if (!$userId) {
            header("Location: index.php?url=list-user");
            die;
        }
        $userModel = UserModel::find($userId);
        if (!$userModel) {
            header("Location: index.php?url=list-user");
            die;
        }
        $avatarPath = './public/uploads/avatar/' . $userModel->avatar;
        if (file_exists($avatarPath)) {
            unlink($avatarPath); // delete avatar file from the directory 
        }
        $userModel->delete(); // delete user record from the database 
        header("Location: index.php?url=list-user"); // redirect to list user page 
    }

}