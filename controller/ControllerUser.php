<?php
class ControllerUser {
    public function oneUserById(int $id) {
        $modelUser = new ModelUser();
        $user = $modelUser->getOneUserById($id);

        if($user == null) {
            http_response_code(404);
            require './view/404.php';
            exit;
        }

        require './view/user/one-user.php';
    }

    public function deleteUserById(int $id){
        $modelUser = new ModelUser();
        $success = $modelUser->deleteOneUserById($id);

        if($success) {
            $message = 'User supprimé.';
        } else {
            $error = 'Aucun user supprimé.';
            http_response_code(404);
        }

        header('Location: /mangatheque/'); 
        exit;
    }
}