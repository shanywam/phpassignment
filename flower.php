
<?php
class Rose
{
    public $common_name= 'Rose Honey_Dijon';
    public $botanical_name;
    public $color;

    public function facts()
    {
        echo 'Roses are very beautiful flowers</br></br>';
        echo $this->common_name ;
        echo $this->botanical_name = '</br>botanical_name is Rosa Grand_flora \'Honey Dijon\'</br>';
        echo $this->color = '</br>colors are Red_and_black</br>';

    }
}
$Rose = new Rose();
$Rose->facts();


    public function symbol()
    {
        print ('</br>red roses symbolize love, romance and will always be a way to say i love you.!</br></br>');
        print ('</br>black roses are usually a dark shade of red, purple or maroon.!</br></br>');
        print ('it is associated with death and mourning ,it also symbolizes rebirth and rejuvenation!</br></br>');
    }


    public function buy()
    {
        print ('</br>Roses may be bought at a flower shop or on specific streets all over Nairobi.!</br></br>');
    }

}
$facts = new Rose();
$facts->facts();
$symbol = new Rose();
$symbol->symbol();
$buy = new Rose();
$buy->buy();

?>

