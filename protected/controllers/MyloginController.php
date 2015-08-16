<?

class MyloginController extends Controller{


    public function actionLogin(){

        /*print CPasswordHelper::hashPassword('123');
        die;*/

        if(Yii::app()->user->isGuest){

            $model = new MyLoginForm;

            if(isset($_POST['MyLoginForm']))
            {
                $model->attributes=$_POST['MyLoginForm'];
                if($model->validate() && $model->login())
                    $this->redirect(Yii::app()->user->returnUrl);
            }


            $this->render("login", array("model" => $model));
        }

        else{

            $this->redirect("/");
        }

    }

    public function actionLogout(){

        Yii::app()->user->logout();

    }
}