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
            $request_data = $_POST; //Lấy dữ liệu từ form
$user_model = new UserModel();
$avatar = $_FILES['avatar'];
$file_name = "";
            if ($avatar['size'] > 0) {
                $filename = uniqid('', true) . '-' . $avatar['name'];
                move_uploaded_file($avatar['tmp_name'], './public/uploads/' . $filename);
                $user_model->avatar = $filename;
            }
            $user_model->fill($request_data);
            $user_model->save();
            header("Location: index.php?url=list-user");
        }
        public function UpdateAccount(): void
        {
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

            $this->render("dashboard.user.update", [
                "user" => $user_model
            ]);
        }
        public function StoreUpdateAccount(): void
        {
            $user_id = isset($_GET['id']) ? $_GET['id'] : null;
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
            $avatar = $_FILES['avatar'];
            $filename = "";
            if ($avatar['size'] > 0) {
                $filename = uniqid('', true) . '-' . $avatar['name'];
                move_uploaded_file($avatar['tmp_name'], './public/uploads/avatar/' . $filename);
                $user_model->avatar = $filename;
            }
            $user_model->fill($request_data);
            $user_model->save();
            header("Location: index.php?url=list-user");
        }

        public function DeleteAccount(): void
        {
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
           $avatar = $user_model->avatar;
              if (file_exists('./public/uploads/avatar/' . $avatar)) {
                  unlink('./public/uploads/avatar/' . $avatar);
              }
            $user_model->delete();
            header("Location: index.php?url=list-user");
        }
    }