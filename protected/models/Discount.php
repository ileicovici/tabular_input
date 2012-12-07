<?
/**
 * @property $id
 * @property $category_id
 * @property $numbers_buy
 * @property $price
 * @property $text
 */
class Discount extends CActiveRecord
{

    public function name()
    {
        return 'Discount';
    }


    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }


    public function tableName()
    {
        return 'discount';
    }



    public function rules()
    {
        /*
        id
        name
         */
        return array(
            array(
                 'name',
                'required'
            ),

            array(
                'name',
                'length',
                'max' => 130
            ),
        );
    }


    public function relations()
    {
        return array(
            'metrosRell' => array(self::HAS_MANY, 'DiscountMetro','discount_id'),
            'metros'     => array(self::HAS_MANY, 'Metro',array('metro_id'=>'id'),'through' => 'metrosRell'),
        );
    }


    public function search()
    {
        $criteria = new CDbCriteria;
        $criteria->compare('id', $this->id, true);
        $criteria->compare('name', $this->name, true);

        return new ActiveDataProvider(get_class($this), array(
            'criteria'   => $criteria,
            'pagination' =>array(
                'pageSize' => self::PAGE_SIZE
            )
        ));
    }


    public function attributeLabels()
    {
        return array(
            'name' => 'Название',
            //'metro.Nazvanie' => 'Метро',
        );
    }


}
