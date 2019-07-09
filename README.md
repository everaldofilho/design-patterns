# Design Patterns
Criado este projeto somente para colocar em pratica.

### Instalação

Instalando pacotes
``php composer install``

Rodandos os testes
``vendor/bin/phpunit --testdox``

Gerando relatório de cobertura de código
``vendor/bin/phpunit --testdox --coverage-html coverage/ ``

## Padrões de Projeto

### Padrão de Criação
- Singleton 

    Tem como objetivo o controlar a instancias da classe, para exemplificar foi usado o problema de uma classe de conexão, a ideia é que só tenha uma instancia durante a execução do codigo mesmo que seja chamada mais de uma vez.

    [Exemplo](src/Singleton/Connection.php) e [Test](tests/Singleton/ConnectionTest.php)
        
- Factory Method

    [Exemplo](src/FactoryMethod/SearchDynamic.php) e [Test](tests/FactoryMethod/SearchDynamicTest.php)

- Prototype

    [Exemplo](src/Prototype/Consultation.php) e [Test](tests/Prototype/ConsultationTest.php)
    
- Builder

### Padrões estruturais
- Adapter
- Facade
- Decorator

### Padrão comportamental
- Memento
- Observer

### Livro
- Design Patterns com PHP 7

## Ferramentas de QA
 
 [PHPQA](https://github.com/EdgedesignCZ/phpqa) -> https://github.com/EdgedesignCZ/phpqa