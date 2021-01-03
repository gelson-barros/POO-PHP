# PHP_POO
## Como trabalhar com orientação objecto na linguagem PHP

Maior parte do contéudo extraído nest link [**ribafs** :link: ](https://ribafs.me/basicos/phpoo/introducao-ao-phpoo.html) 

Programação orientada a objetos é um estilo de programação que permite aos desenvolvedores agruparem tarefas semelhantes em classes. Isso ajuda a manter dentro do princípio "don't repeat yourself" (DRY) (em português, não se repita), além de facilitar a manutenção do código.


> Termos Principais da Orientação a Objetos em PHP

* **Classe – matriz de onde vêm os objetos (só uma e não se trabalha com classes, elas servem apenas para a criação dos objetos)**

* **Objeto – instância da classe (é com estes que trabalhamos)**

* **Método – é como uma função, mas é subordinado à classe**

* **Propriedade – são como variáveis, mas também são subordinadas à classe**

* **Construtor – método iniciado automaticamente quando a classe é instanciada**

* **Destrutor – chamado logo que todas as referências a um objeto forem removidas**

* **$this-> - usado para referenciar um método ou variável da classe atual**

* **parent:: - usado para referenciar a classe pai (herança)**

* **self:: - refere-se à classe para chamar funções estáticas**

* **extends – usado para indicar que a classe atual é “filha” de outra classe (herança)**

* **public, protected e private – visibilidade dos membros da classe**

* **implements - server para incluir interfaces feita**

* **interface - são recomendações obrigatoria para uma classe**

* **namespace - servem para diferenciar classes com nome iguais em directorio diferentes ao ser instanciado**



> Correspondência entre OO e Estruturada

* **Classe – Arquivo**

* **Método – Função**

* **Propriedade - Variável**


Orientação a Objetos não é linguagem de programação, mas sim um paradigma adotado por algumas linguagens de programação





> ### Classes e Objetos

Classes são as matrizes dos objetos. O programador cria a classe uma única vez e depois trabalha somente com os objetos, que são a instância das classes.

O paradigma de orientação a objetos é muito popular atualmente, sendo implementado por praticamente todas as linguagens atuais. Como ele diz, é orientado a objetos, simulando o mundo real com seus objetos.

Vamos tomar como exemplo um carro, que todos conhecemos e vamos modelá-lo, criando algumas propriedades e métodos para ele. As propriedades são características, como cor, já os métodos são funcionalidades como correr, frear, etc (verbos).

> ### Criando uma Classe
```
<?php

class Carro{

// Aqui fica o código da classe

}

?>
```
> ### Instanciando a Classe

Instanciar a classe é armazená-la em uma variável objeto para então usar seus recursos.
```
$obj = new Carro(); // Também podemos usar assim: $obj = new Carro;
```
Nossa classe não tem conteúdo mas para visualizá-la podemos usar var_dump();
```
var_dump($obj);
```
Com isso aparece: object(Carro)#1 (0) { }

As classes são compostas de propriedades e métodos. Propriedades são similares às variáveis da linguagem procedural. Métodos são similares às funções. A grande diferença é que propriedades e métodos ficam dentro da classe e todo código OO fica dentro de classes.

 

> ### Propriedades
```
<?php
class Carro{
public $cor = ‘Verde’;
}

$obj = new Carro();
print 'A cor do carro é ' . $obj->cor;
```

> ### Modificadores de Acesso ou de Visibilidade

Em orientação a objetos existe um bom recurso para controlar a visibilidade dos métodos e propriedades (realizar um encapsulamento), ou seja, uma forma de controlar o acesso à classe.

public – este modificador permite que qualquer um possa acessar propriedades e métodos

private – este define que somente pode ser acessada dentro da classe que a criou ou seja so com $this.

protected – este diz que somente dentro da classe onde foi criado ($this) ou nas classes filhas.

Experimente no exemplo anterior mudar public para private ou protected.

Ou seja, se queremos que um membro da classe seja visto por todos o tornamos public, caso contrário escolhemos private ou protected.


> ### Métodos

Os métodos executam trechos de código em uma classe e retornam ou não algo e de algum tipo.




> ### Acessando Métodos e Propriedades

Obs.: Veja que para acessar propriedades e métodos de uma classe precisamos criar primeiro um objeto do tipo da classe, para depois, através da instância acessar métodos e propriedades públicos.

Usando a palavra reservada $this podemos referenciar métodos e propriedades de uma classe, mas somente estando dentro da classe. Usamos $this dentro da classe da mesma forma que usamos o nome do método ou propriedade fora da classe.


> ### Métodos Mágicos

São métodos do PHP que são métodos especiais executados automaticamente sempre que alguma ação ocorre com objetos: __construct(), __destruct(), __toString(), __invoke(), _get(), __set(),__clone() etc. Ver outros: :arrow_right:[:link:](http://php.net/manual/pt_BR/language.oop5.magic.php)

__construct() - executa todo o código em seu interior sempre que uma classe é instanciada.

__destruct() - será chamado assim que todas as referências a um objeto particular forem removidas ou quando o objeto for explicitamente destruído ou qualquer ordem na sequência de encerramento.

__toString() - converte o valor de um objeto em string.


> ### Herança de Classes

Assim como existe herança para o ser humano, em orientação a objetos também existe uma implementação que se inspira na dos seres humanos.

Para herdar métodos e propriedades de outra classe usamos a palavra-chave extends.
```
class Onibus extends Carro{
// Código da classe Onibus
}
```
Assim, a classe Onibus herda todos os métodos e propriedades da classe Carro e também pode ainda definir seus próprios métodos e propriedades e ainda por cima pode sobrescrever(polimorfismo) os métodos e propriedades da classe Carro, que no caso é chamada de classe pai.



> ### Herança é algo prático e não é engessado.

 * Usando parent::

Sobrescrevendo um método e preservando seu conteúdo original.

Para adicionar uma nova funcionalidade a um método e ao mesmo tempo manter todas as funcionalidades originais intactas, use “parent::”. :: é o operador de resolução de escopo e parent é pai, principal.


> ### Métodos e propriedades estáticas

É o tipo de método ou propriedade que é meio que global e ainda mais fácil de ser acessada, pois podem ser acessados sem mesmo instanciar a classe. Classes também podem ser static.



> ### Classes Abstracta 
Esse tipo de classe não pode ser instanciada, mas é configurada como a class com a palavra reservada abstract antes da class.
Para utilizar as propriedades e metodos desta classe abstracta ele deve ser uma  extends classe de outra classe.
metodo abstract deve ser escrito na class que extends

Alguns trecho foi alterado ou acrescentado conteúdo segundo o meu pensamento e esta sujeito a correção.

by: Gelson Ferreira :camel: :metal: :email: **nicosbrilho@gmail.com**
