<?php
class BookController extends CController
{
    public function actionIndex()
    {

        $m = Page::model()->findAll();
        $this->renderPartial('/part/_part', array('models' => $m));





/*
                $a = Book::model()->findByAttributes(array('id'=>array(2,3), 'title' => array('Война и мир', 'Анна Каренина')));
                $num = 'asdf';



                $array = array(1,2);

                $name = 'Старое значение';
                $a = Book::model()->updateAll(array('title' => 'Новое значение'), 'title = :name',array(':name' => $name));

                $a = Book::model()->deleteAll('title = :title', array(':title' => 'Тайтл, который нужно удалить'));
        */
        //echo $a;
        /*
        foreach($a as $one)
        {
            echo $one->title ;
        }
        */
        //$a = Book::model()->findAllByPk($array);
        //echo $a->title ;
        /*
        $model = new Book();
        $model->author = "Толстой22";
        $model->title = "Война и мир22";
        $model->year = "1235";
        $model->save(false);
        */

    }
}
