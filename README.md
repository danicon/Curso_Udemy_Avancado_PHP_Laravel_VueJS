<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[WebReinvent](https://webreinvent.com/)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Jump24](https://jump24.co.uk)**
- **[Redberry](https://redberry.international/laravel/)**
- **[Active Logic](https://activelogic.com)**
- **[byte5](https://byte5.de)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## Requisitos

* PHP 8.2 ou superior
* Composer

## Como rodar o projeto baixado

Duplicar o arquivo ".env.example" e renomear para ".env".<br>

Instalar as dependências do PHP
```
composer install
```

Gerar a chave
```
php artisan key:generate
```

Iniciar o projeto criado com Laravel
```
php artisan serve
```

Acessar o conteúdo padrão do Laravel
```
http://127.0.0.1:8000
```

## Sequencia para criar o projeto
Criar o projeto com Laravel
```
composer create-project laravel/laravel .
```

Iniciar o projeto criado com Laravel
```
php artisan serve

php artisan serve --port=9000
```

Acessar o conteúdo padrão do Laravel
```
http://127.0.0.1:8000
```

Executar as migration
```
php artisan migrate
```
## Comandos Udemy

```
composer create-project --prefer-dist laravel/laravel app_super_gestao
```

```
cd .\app_super_gestao\public\
```

http://localhost:8000
```
php -S localhost:8000
```

Artisan comando que traz algo mais ou menos pronto
```
make:<codigo> 
```

Criando controllers
```
php artisan make:controller PrincipalController 
```

Lista as rotas
```

php artisan route::list
```

Limpar as views compiladas do caches
```

php artisan view:clear
```

Blade é motor de rederização de Views

Criando um modelo (Model), com o -m automaticamente cria uma Migrations (objetivo armazenar dados no BD)
```

php artisan make:model SiteContato -m
```

Executa todas as migrations contidas dentro do projeto /database/migrations
```

php artisan migrate
```

Instrução executada pelo PHP para dar o retorno (bool(true))
```

php -r "var_dump(extension_loaded('pdo_mysql'));"
```

Cria as tabelas no BD
```

php artisan migrate
```

Criando uma Migration
```

php artisan make:migration create_fornecedores_table
```

Reverter as migrações
```

php artisan migrate:rollback
```

Reverter as migrações com uma quantidade de passos determinado
```

php artisan migrate:rollback --step=2
```

Atalho das listagem da migrations já foram executadas
```

php artisan migrate:status
```

Executa o rollback de todas as migrations
```

php artisan migrate:reset
```

Executa o rollback de todas as migrations + o migrate para recriar os objetos
```

php artisan migrate:refresh
```

Faz o Drop de todos os objetos do BD + migrate para recriar os objetos
```

php artisan migrate:fresh
```

Console interativo para manipular as classes relativas aos Models e testar o Eloquent ORM (Mapeamento Objeto Relacional) - shell PHP
```
php artisan tinker
```

Usando o Shell do Tinker
```

> $contato = new \App\Models\SiteContato();                                                                           
= App\Models\SiteContato {#5181}

> $contato->nome = 'Jorge';                                                                                           
= "Jorge"

> $contato->telefone = '(11) 99123-4567';                                                                             
= "(11) 99123-4567"

> $contato->email = 'jorge@contato.com.br';                                                                           
= "jorge@contato.com.br"

> $contato->motivo_contato = 1;                                                                                       
= 1

> $contato->mensagem = 'Olá, gostaria de mais detalhes sobre o super gestão';                                         
= "Olá, gostaria de mais detalhes sobre o super gestão"

> print_r($contato->getAttributes());                                                                                 
Array
(
    [nome] => Jorge
    [telefone] => (11) 99123-4567
    [email] => jorge@contato.com.br
    [motivo_contato] => 1
    [mensagem] => Olá, gostaria de mais detalhes sobre o super gestão
)
= true

> $contato->save();                                                                                                   
= true
```   

Eloquent - Inserindo registros com Create e Fillable
```

> \App\Models\Fornecedor::create(['nome' => 'Fornecedor ABC', 'site' => 'fornecedorabc.com.br', 'uf' => 'SP', 'email' => 'c
ontato@fornecedorabc.com.br'])                                                                                             
= App\Models\Fornecedor {#5198
    nome: "Fornecedor ABC",
    site: "fornecedorabc.com.br",
    uf: "SP",
    email: "contato@fornecedorabc.com.br",
    updated_at: "2024-11-29 22:00:59",
    created_at: "2024-11-29 22:00:59",
    id: 2,
  }
```

Eloquent - Selecionando registros com all()
```

$fornecedores = \App\Models\Fornecedo::all();

> use \App\Models\Fornecedor;                                                                                  

> $fornecedores = Fornecedor::all();   

> print_r($fornecedores->toArray()); 

> foreach($fornecedores as $f) {echo $f->nome; echo ' - ';}    
```

Eloquent - Selecionando registros com find()
```

$fornecedores2 = Fornecedor::find(2);

echo $fornecedores2->nome;

$fornecedores2 = Fornecedor::find([1, 2]); 
```

Eloquent - Selecionando registros com where()
```

> use \App\Models\SiteContato;                                                                                 
> $contato = SiteContato::where('id', '>', 1);                                                                 
= Illuminate\Database\Eloquent\Builder {#5197}

> $contato = SiteContato::where('id', '>', 1)->get();                                                          
= Illuminate\Database\Eloquent\Collection {#5189
    all: [
      App\Models\SiteContato {#5187
        id: 2,
        created_at: "2024-11-28 21:32:13",
        updated_at: "2024-11-28 21:32:13",
        nome: "Maria",
        telefone: "(11) 93333-4444",
        email: "maria@contato.com.br",
        motivo_contato: 2,
        mensagem: "Estou gostando muito do Super Gestão",
      },
    ],
  }
```

Eloquent - Selecionando registros com whereIn() - Por igualdade
```

> use \App\Models\SiteContato;                                                                                  
> $contatos = SiteContato::whereIn('motivo_contato', [1, 3]);                                                   
= Illuminate\Database\Eloquent\Builder {#5201}

> $contatos->get();                                                                                             
= Illuminate\Database\Eloquent\Collection {#5188
    all: [
      App\Models\SiteContato {#5187
        id: 1,
        created_at: "2024-11-28 21:28:49",
        updated_at: "2024-11-28 21:28:49",
        nome: "Jorge",
        telefone: "(11) 99123-4567",
        email: "jorge@contato.com.br",
        motivo_contato: 1,
        mensagem: "Olá, gostaria de mais detalhes sobre o super gestão",
      },
      App\Models\SiteContato {#5186
        id: 3,
        created_at: null,
        updated_at: null,
        nome: "João",
        telefone: "(88) 91111-2222",
        email: "joao@contato.com.br",
        motivo_contato: 3,
        mensagem: "É muito difícil localizar a opção de listar todos os produtos",
      },
      App\Models\SiteContato {#5185
        id: 4,
        created_at: null,
        updated_at: null,
        nome: "Rosa",
        telefone: "(33) 92222-3333",
        email: "rosa@contato.com.br",
        motivo_contato: 1,
        mensagem: "Quando custa essa aplicação?",
      },
      App\Models\SiteContato {#5184
        id: 5,
        created_at: null,
        updated_at: null,
        nome: "Fernando",
        telefone: "(11) 94444-5555",
        email: "fernando@contato.com.br",
        motivo_contato: 1,
        mensagem: "Como consigo criar multiplos usuários para minha empresa?",
      },
      App\Models\SiteContato {#5183
        id: 7,
        created_at: null,
        updated_at: null,
        nome: "Ana",
        telefone: "(33) 96666-7777",
        email: "ana@contato.com.br",
        motivo_contato: 3,
        mensagem: "Não gostei muito das cores, consigo mudar de tema?",
      },
    ],
  }
```

Eloquent - Selecionando registros com whereIn() - Por Diferença
```

> $contatos = SiteContato::whereNotIn('motivo_contato', [1, 3])->get();                                         
= Illuminate\Database\Eloquent\Collection {#5942
    all: [
      App\Models\SiteContato {#6010
        id: 2,
        created_at: "2024-11-28 21:32:13",
        updated_at: "2024-11-28 21:32:13",
        nome: "Maria",
        telefone: "(11) 93333-4444",
        email: "maria@contato.com.br",
        motivo_contato: 2,
        mensagem: "Estou gostando muito do Super Gestão",
      },
      App\Models\SiteContato {#5532
        id: 6,
        created_at: null,
        updated_at: null,
        nome: "André",
        telefone: "(88) 95555-6666",
        email: "andre@contato.com.br",
        motivo_contato: 2,
        mensagem: "Parabéns pela ferramenta, estou obtendo ótimos resultados!",
      },
      App\Models\SiteContato {#6166
        id: 8,
        created_at: null,
        updated_at: null,
        nome: "Helena",
        telefone: "(11) 97777-8888",
        email: "helena@contato.com.br",
        motivo_contato: 2,
        mensagem: "Consigo controlar toda a minha empresa de modo fácil e prático.",
      },
    ],
  }
```

Eloquent - Selecionando registros com whereBetween() - Entre
```

> $contatos = SiteContato::whereBetween('id', [3, 6])->get();                                                   
= Illuminate\Database\Eloquent\Collection {#6177
    all: [
      App\Models\SiteContato {#6178
        id: 3,
        created_at: null,
        updated_at: null,
        nome: "João",
        telefone: "(88) 91111-2222",
        email: "joao@contato.com.br",
        motivo_contato: 3,
        mensagem: "É muito difícil localizar a opção de listar todos os produtos",
      },
      App\Models\SiteContato {#6179
        id: 4,
        created_at: null,
        updated_at: null,
        nome: "Rosa",
        telefone: "(33) 92222-3333",
        email: "rosa@contato.com.br",
        motivo_contato: 1,
        mensagem: "Quando custa essa aplicação?",
      },
      App\Models\SiteContato {#6180
        id: 5,
        created_at: null,
        updated_at: null,
        nome: "Fernando",
        telefone: "(11) 94444-5555",
        email: "fernando@contato.com.br",
        motivo_contato: 1,
        mensagem: "Como consigo criar multiplos usuários para minha empresa?",
      },
      App\Models\SiteContato {#5192
        id: 6,
        created_at: null,
        updated_at: null,
        nome: "André",
        telefone: "(88) 95555-6666",
        email: "andre@contato.com.br",
        motivo_contato: 2,
        mensagem: "Parabéns pela ferramenta, estou obtendo ótimos resultados!",
      },
    ],
  }
```

Eloquent - Selecionando registros com whereBetween() - Não entre
```

> $contatos = SiteContato::whereNotBetween('id', [3, 6])->get();                                                
= Illuminate\Database\Eloquent\Collection {#6189
    all: [
      App\Models\SiteContato {#6165
        id: 1,
        created_at: "2024-11-28 21:28:49",
        updated_at: "2024-11-28 21:28:49",
        nome: "Jorge",
        telefone: "(11) 99123-4567",
        email: "jorge@contato.com.br",
        motivo_contato: 1,
        mensagem: "Olá, gostaria de mais detalhes sobre o super gestão",
      },
      App\Models\SiteContato {#6191
        id: 2,
        created_at: "2024-11-28 21:32:13",
        updated_at: "2024-11-28 21:32:13",
        nome: "Maria",
        telefone: "(11) 93333-4444",
        email: "maria@contato.com.br",
        motivo_contato: 2,
        mensagem: "Estou gostando muito do Super Gestão",
      },
      App\Models\SiteContato {#6192
        id: 7,
        created_at: null,
        updated_at: null,
        nome: "Ana",
        telefone: "(33) 96666-7777",
        email: "ana@contato.com.br",
        motivo_contato: 3,
        mensagem: "Não gostei muito das cores, consigo mudar de tema?",
      },
      App\Models\SiteContato {#5200
        id: 8,
        created_at: null,
        updated_at: null,
        nome: "Helena",
        telefone: "(11) 97777-8888",
        email: "helena@contato.com.br",
        motivo_contato: 2,
        mensagem: "Consigo controlar toda a minha empresa de modo fácil e prático.",
      },
    ],
  }
```

Eloquent - Selecionando registros com dois ou mais Wheres
```

> use \App\Models\SiteContato;                                                                                     
> $contatos = SiteContato::where('nome', '<>', 'Fernando')->whereIn('motivo_contato', [1,2])->whereBetween('created
_at', ['2024-11-01 00:00:00', '2024-11-30 23:59:59'])->get();                                                      
= Illuminate\Database\Eloquent\Collection {#5559
    all: [
      App\Models\SiteContato {#5918
        id: 1,
        created_at: "2024-11-28 21:28:49",
        updated_at: "2024-11-28 21:28:49",
        nome: "Jorge",
        telefone: "(11) 99123-4567",
        email: "jorge@contato.com.br",
        motivo_contato: 1,
        mensagem: "Olá, gostaria de mais detalhes sobre o super gestão",
      },
      App\Models\SiteContato {#6183
        id: 2,
        created_at: "2024-11-28 21:32:13",
        updated_at: "2024-11-28 21:32:13",
        nome: "Maria",
        telefone: "(11) 93333-4444",
        email: "maria@contato.com.br",
        motivo_contato: 2,
        mensagem: "Estou gostando muito do Super Gestão",
      },
    ],
  }
```

Eloquent - Selecionando registros com orWhere()
```

> $contatos = SiteContato::where('nome', '<>', 'Fernando')->orWhereIn('motivo_contato', [1,2])->orWhereBetween('cre
ated_at', ['2024-11-01 00:00:00', '2024-11-30 23:59:59'])->get();                                                  
= Illuminate\Database\Eloquent\Collection {#6204
    all: [
      App\Models\SiteContato {#6205
        id: 1,
        created_at: "2024-11-28 21:28:49",
        updated_at: "2024-11-28 21:28:49",
        nome: "Jorge",
        telefone: "(11) 99123-4567",
        email: "jorge@contato.com.br",
        motivo_contato: 1,
        mensagem: "Olá, gostaria de mais detalhes sobre o super gestão",
      },
      App\Models\SiteContato {#6206
        id: 2,
        created_at: "2024-11-28 21:32:13",
        updated_at: "2024-11-28 21:32:13",
        nome: "Maria",
        telefone: "(11) 93333-4444",
        email: "maria@contato.com.br",
        motivo_contato: 2,
        mensagem: "Estou gostando muito do Super Gestão",
      },
      App\Models\SiteContato {#6207
        id: 3,
        created_at: null,
        updated_at: null,
        nome: "João",
        telefone: "(88) 91111-2222",
        email: "joao@contato.com.br",
        motivo_contato: 3,
        mensagem: "É muito difícil localizar a opção de listar todos os produtos",
      },
      App\Models\SiteContato {#6208
        id: 4,
        created_at: null,
        updated_at: null,
        nome: "Rosa",
        telefone: "(33) 92222-3333",
        email: "rosa@contato.com.br",
        motivo_contato: 1,
        mensagem: "Quando custa essa aplicação?",
      },
      App\Models\SiteContato {#6209
        id: 5,
        created_at: null,
        updated_at: null,
        nome: "Fernando",
        telefone: "(11) 94444-5555",
        email: "fernando@contato.com.br",
        motivo_contato: 1,
        mensagem: "Como consigo criar multiplos usuários para minha empresa?",
      },
      App\Models\SiteContato {#6210
        id: 6,
        created_at: null,
        updated_at: null,
        nome: "André",
        telefone: "(88) 95555-6666",
        email: "andre@contato.com.br",
        motivo_contato: 2,
        mensagem: "Parabéns pela ferramenta, estou obtendo ótimos resultados!",
      },
      App\Models\SiteContato {#6211
        id: 7,
        created_at: null,
        updated_at: null,
        nome: "Ana",
        telefone: "(33) 96666-7777",
        email: "ana@contato.com.br",
        motivo_contato: 3,
        mensagem: "Não gostei muito das cores, consigo mudar de tema?",
      },
      App\Models\SiteContato {#6212
        id: 8,
        created_at: null,
        updated_at: null,
        nome: "Helena",
        telefone: "(11) 97777-8888",
        email: "helena@contato.com.br",
        motivo_contato: 2,
        mensagem: "Consigo controlar toda a minha empresa de modo fácil e prático.",
      },
    ],
  }
```
