<!DOCTYPE html>
<html>
<body>

<?php
class Fruit {
  // Properties
  public $name;
  public $color;

  // Methods
  function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
}

$apple = new Fruit();
$banana = new Fruit();
$apple->set_name('Apple');
$banana->set_name('Banana');

echo $apple->get_name();
echo "<br>";
echo $banana->get_name();
?>
<h1>-------------------------------------------------------------------------------</h1>
<?php
class Lapis{
    public $tamanho;
    public $ponta;
    private $cor;
    function set_tamanho($tamanho){
        $this->tamanho = $tamanho;
        
    }
    function get_tamanho(){
        return $this->tamanho;
        return $this->ponta;
        
        
    }
    function set_ponta($ponta){
        if ($ponta = 1) {
            $this -> ponta = "boa";
        }
        else {
            $this -> ponta = "ruim";
        }
    }
    function get_ponta(){
        return $this->ponta;
    }
    function set_cor($cor){
        $this->cor = "a cor do seu lapis é: $cor";
    }
    function get_cor(){
        return $this -> cor;
    }
}
    $tamanho = new Lapis();
    $ponta= new Lapis();
    $cor = new Lapis();
    $tamanho->set_tamanho('8cm');
    $ponta->set_ponta(1);
    $cor->set_cor("azul");
    echo $tamanho->get_tamanho(),"<br>";
    echo $ponta->get_ponta(),"<br>";
    echo $cor->get_cor(),"<br>";
    var_dump($cor);
    echo $cor->cor;


    

?>
</body>
</html>
