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

Eloquent - Selecionando registros com whereNull()
```

> $contatos = SiteContato::whereNull('updated_at')->get();                                                        
= Illuminate\Database\Eloquent\Collection {#6193
    all: [
      App\Models\SiteContato {#6215
        id: 3,
        created_at: null,
        updated_at: null,
        nome: "João",
        telefone: "(88) 91111-2222",
        email: "joao@contato.com.br",
        motivo_contato: 3,
        mensagem: "É muito difícil localizar a opção de listar todos os produtos",
      },
      App\Models\SiteContato {#6216
        id: 4,
        created_at: null,
        updated_at: null,
        nome: "Rosa",
        telefone: "(33) 92222-3333",
        email: "rosa@contato.com.br",
        motivo_contato: 1,
        mensagem: "Quando custa essa aplicação?",
      },
      App\Models\SiteContato {#5169
        id: 5,
        created_at: null,
        updated_at: null,
        nome: "Fernando",
        telefone: "(11) 94444-5555",
        email: "fernando@contato.com.br",
        motivo_contato: 1,
        mensagem: "Como consigo criar multiplos usuários para minha empresa?",
      },
      App\Models\SiteContato {#5170
        id: 6,
        created_at: null,
        updated_at: null,
        nome: "André",
        telefone: "(88) 95555-6666",
        email: "andre@contato.com.br",
        motivo_contato: 2,
        mensagem: "Parabéns pela ferramenta, estou obtendo ótimos resultados!",
      },
      App\Models\SiteContato {#5171
        id: 7,
        created_at: null,
        updated_at: null,
        nome: "Ana",
        telefone: "(33) 96666-7777",
        email: "ana@contato.com.br",
        motivo_contato: 3,
        mensagem: "Não gostei muito das cores, consigo mudar de tema?",
      },
      App\Models\SiteContato {#5245
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

Eloquent - Selecionando registros com whereNotNull()
```

> $contatos = SiteContato::whereNotNull('updated_at')->get();                                                     
= Illuminate\Database\Eloquent\Collection {#6205
    all: [
      App\Models\SiteContato {#5239
        id: 1,
        created_at: "2024-11-28 21:28:49",
        updated_at: "2024-11-28 21:28:49",
        nome: "Jorge",
        telefone: "(11) 99123-4567",
        email: "jorge@contato.com.br",
        motivo_contato: 1,
        mensagem: "Olá, gostaria de mais detalhes sobre o super gestão",
      },
      App\Models\SiteContato {#6224
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

Eloquent - Selecionando registros com base em parâmetros do tipo data
```

> use App\Models\SiteContato;                                                                                       
> $contatos = SiteContato::whereDate('created_at', '2024-11-28')->get();                                            
= Illuminate\Database\Eloquent\Collection {#5940
    all: [
      App\Models\SiteContato {#5531
        id: 1,
        created_at: "2024-11-28 21:28:49",
        updated_at: "2024-11-28 21:28:49",
        nome: "Jorge",
        telefone: "(11) 99123-4567",
        email: "jorge@contato.com.br",
        motivo_contato: 1,
        mensagem: "Olá, gostaria de mais detalhes sobre o super gestão",
      },
      App\Models\SiteContato {#6155
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

Eloquent - Selecionando registros com base em parâmetros do tipo dia
```

> $contatos = SiteContato::whereDay('created_at', '28')->get();                                                     
= Illuminate\Database\Eloquent\Collection {#5190
    all: [
      App\Models\SiteContato {#5191
        id: 1,
        created_at: "2024-11-28 21:28:49",
        updated_at: "2024-11-28 21:28:49",
        nome: "Jorge",
        telefone: "(11) 99123-4567",
        email: "jorge@contato.com.br",
        motivo_contato: 1,
        mensagem: "Olá, gostaria de mais detalhes sobre o super gestão",
      },
      App\Models\SiteContato {#5182
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

Eloquent - Selecionando registros com base em parâmetros do tipo mês
```

> $contatos = SiteContato::whereMonth('created_at', '11')->get();                                                   
= Illuminate\Database\Eloquent\Collection {#6169
    all: [
      App\Models\SiteContato {#6170
        id: 1,
        created_at: "2024-11-28 21:28:49",
        updated_at: "2024-11-28 21:28:49",
        nome: "Jorge",
        telefone: "(11) 99123-4567",
        email: "jorge@contato.com.br",
        motivo_contato: 1,
        mensagem: "Olá, gostaria de mais detalhes sobre o super gestão",
      },
      App\Models\SiteContato {#1291
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

Eloquent - Selecionando registros com base em parâmetros do tipo ano
```

> $contatos = SiteContato::whereYear('created_at', '2024')->get();                                                  
= Illuminate\Database\Eloquent\Collection {#5178
    all: [
      App\Models\SiteContato {#5177
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

Eloquent - Selecionando registros com base em parâmetros do tipo hora
```

> $contatos = SiteContato::whereTime('created_at', '=', '21:32:13')->get();                                         
= Illuminate\Database\Eloquent\Collection {#6185
    all: [
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

Eloquent - Selecionando registros com whereColumn()
```

> use App\Models\SiteContato;                                                                                 
> $contato = SiteContato::whereColumn('created_at', '=', 'updated_at')->get();                                     
= Illuminate\Database\Eloquent\Collection {#5890
    all: [
      App\Models\SiteContato {#5940
        id: 1,
        created_at: "2024-11-28 21:28:49",
        updated_at: "2024-11-28 21:28:49",
        nome: "Jorge",
        telefone: "(11) 99123-4567",
        email: "jorge@contato.com.br",
        motivo_contato: 1,
        mensagem: "Olá, gostaria de mais detalhes sobre o super gestão",
      },
      App\Models\SiteContato {#6155
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

Eloquent - Selecionando registros aplicando precedência em operações lógicas
```

> use App\Models\SiteContato;                                                                                   
> $contatos = SiteContato::where(function($query){ $query->where('nome', 'Jorge')->orWhere('nome', 'Ana'); })->where(function($query){ $query->whereIn('motivo_contato', [1,2])->orWhereBetween('id', [4,6]); })->get();        
= Illuminate\Database\Eloquent\Collection {#6003
    all: [
      App\Models\SiteContato {#6218
        id: 1,
        created_at: "2024-11-28 21:28:49",
        updated_at: "2024-11-28 21:28:49",
        nome: "Jorge",
        telefone: "(11) 99123-4567",
        email: "jorge@contato.com.br",
        motivo_contato: 1,
        mensagem: "Olá, gostaria de mais detalhes sobre o super gestão",
      },
    ],
  }
```

Eloquent - Pegar todos os valores
```

> $contatos = SiteContato::all();  
```

Eloquent - Ordenando registros (asc ou desc)
```

> $contatos = SiteContato::orderBy('nome', 'asc')->get ();                                                      
= Illuminate\Database\Eloquent\Collection {#6172
    all: [
      App\Models\SiteContato {#6173
        id: 7,
        created_at: null,
        updated_at: null,
        nome: "Ana",
        telefone: "(33) 96666-7777",
        email: "ana@contato.com.br",
        motivo_contato: 3,
        mensagem: "Não gostei muito das cores, consigo mudar de tema?",
      },
      App\Models\SiteContato {#6174
        id: 6,
        created_at: null,
        updated_at: null,
        nome: "André",
        telefone: "(88) 95555-6666",
        email: "andre@contato.com.br",
        motivo_contato: 2,
        mensagem: "Parabéns pela ferramenta, estou obtendo ótimos resultados!",
      },
      App\Models\SiteContato {#6175
        id: 5,
        created_at: null,
        updated_at: null,
        nome: "Fernando",
        telefone: "(11) 94444-5555",
        email: "fernando@contato.com.br",
        motivo_contato: 1,
        mensagem: "Como consigo criar multiplos usuários para minha empresa?",
      },
      App\Models\SiteContato {#6176
        id: 8,
        created_at: null,
        updated_at: null,
        nome: "Helena",
        telefone: "(11) 97777-8888",
        email: "helena@contato.com.br",
        motivo_contato: 2,
        mensagem: "Consigo controlar toda a minha empresa de modo fácil e prático.",
      },
      App\Models\SiteContato {#6177
        id: 3,
        created_at: null,
        updated_at: null,
        nome: "João",
        telefone: "(88) 91111-2222",
        email: "joao@contato.com.br",
        motivo_contato: 3,
        mensagem: "É muito difícil localizar a opção de listar todos os produtos",
      },
      App\Models\SiteContato {#6178
        id: 1,
        created_at: "2024-11-28 21:28:49",
        updated_at: "2024-11-28 21:28:49",
        nome: "Jorge",
        telefone: "(11) 99123-4567",
        email: "jorge@contato.com.br",
        motivo_contato: 1,
        mensagem: "Olá, gostaria de mais detalhes sobre o super gestão",
      },
      App\Models\SiteContato {#6179
        id: 2,
        created_at: "2024-11-28 21:32:13",
        updated_at: "2024-11-28 23:32:13",
        nome: "Maria",
        telefone: "(11) 93333-4444",
        email: "maria@contato.com.br",
        motivo_contato: 2,
        mensagem: "Estou gostando muito do Super Gestão",
      },
      App\Models\SiteContato {#6180
        id: 4,
        created_at: null,
        updated_at: null,
        nome: "Rosa",
        telefone: "(33) 92222-3333",
        email: "rosa@contato.com.br",
        motivo_contato: 1,
        mensagem: "Quando custa essa aplicação?",
      },
    ],
  }
```

Eloquent - Collection first
```

> $contatos = SiteContato::where('id', '>', 3)->get(); 
> $contatos->first();                                                                                          
= App\Models\SiteContato {#6187
    id: 4,
    created_at: null,
    updated_at: null,
    nome: "Rosa",
    telefone: "(33) 92222-3333",
    email: "rosa@contato.com.br",
    motivo_contato: 1,
    mensagem: "Quando custa essa aplicação?",
  }
```

Eloquent - Collection last
```

> $contatos = SiteContato::where('id', '>', 3)->get(); 
> $contatos->last();                                                                                           
= App\Models\SiteContato {#6188
    id: 8,
    created_at: null,
    updated_at: null,
    nome: "Helena",
    telefone: "(11) 97777-8888",
    email: "helena@contato.com.br",
    motivo_contato: 2,
    mensagem: "Consigo controlar toda a minha empresa de modo fácil e prático.",
  }
```

Eloquent - Collection reverse
```

> $contatos = SiteContato::where('id', '>', 3)->get(); 
> $contatos->reverse();                                                                                        
= Illuminate\Database\Eloquent\Collection {#6152
    all: [
      4 => App\Models\SiteContato {#6188
        id: 8,
        created_at: null,
        updated_at: null,
        nome: "Helena",
        telefone: "(11) 97777-8888",
        email: "helena@contato.com.br",
        motivo_contato: 2,
        mensagem: "Consigo controlar toda a minha empresa de modo fácil e prático.",
      },
      3 => App\Models\SiteContato {#5933
        id: 7,
        created_at: null,
        updated_at: null,
        nome: "Ana",
        telefone: "(33) 96666-7777",
        email: "ana@contato.com.br",
        motivo_contato: 3,
        mensagem: "Não gostei muito das cores, consigo mudar de tema?",
      },
      2 => App\Models\SiteContato {#6186
        id: 6,
        created_at: null,
        updated_at: null,
        nome: "André",
        telefone: "(88) 95555-6666",
        email: "andre@contato.com.br",
        motivo_contato: 2,
        mensagem: "Parabéns pela ferramenta, estou obtendo ótimos resultados!",
      },
      1 => App\Models\SiteContato {#5186
        id: 5,
        created_at: null,
        updated_at: null,
        nome: "Fernando",
        telefone: "(11) 94444-5555",
        email: "fernando@contato.com.br",
        motivo_contato: 1,
        mensagem: "Como consigo criar multiplos usuários para minha empresa?",
      },
      0 => App\Models\SiteContato {#6187
        id: 4,
        created_at: null,
        updated_at: null,
        nome: "Rosa",
        telefone: "(33) 92222-3333",
        email: "rosa@contato.com.br",
        motivo_contato: 1,
        mensagem: "Quando custa essa aplicação?",
      },
    ],
  }
```

Eloquent - Collection toArray
```

> SiteContato::all()->toArray();                                                                                 
= [
    [
      "id" => 1,
      "created_at" => "2024-11-28T21:28:49.000000Z",
      "updated_at" => "2024-11-28T21:28:49.000000Z",
      "nome" => "Jorge",
      "telefone" => "(11) 99123-4567",
      "email" => "jorge@contato.com.br",
      "motivo_contato" => 1,
      "mensagem" => "Olá, gostaria de mais detalhes sobre o super gestão",
    ],
    [
      "id" => 2,
      "created_at" => "2024-11-28T21:32:13.000000Z",
      "updated_at" => "2024-11-28T23:32:13.000000Z",
      "nome" => "Maria",
      "telefone" => "(11) 93333-4444",
      "email" => "maria@contato.com.br",
      "motivo_contato" => 2,
      "mensagem" => "Estou gostando muito do Super Gestão",
    ],
    [
      "id" => 3,
      "created_at" => null,
      "updated_at" => null,
      "nome" => "João",
      "telefone" => "(88) 91111-2222",
      "email" => "joao@contato.com.br",
      "motivo_contato" => 3,
      "mensagem" => "É muito difícil localizar a opção de listar todos os produtos",
    ],
    [
      "id" => 4,
      "created_at" => null,
      "updated_at" => null,
      "nome" => "Rosa",
      "telefone" => "(33) 92222-3333",
      "email" => "rosa@contato.com.br",
      "motivo_contato" => 1,
      "mensagem" => "Quando custa essa aplicação?",
    ],
    [
      "id" => 5,
      "created_at" => null,
      "updated_at" => null,
      "nome" => "Fernando",
      "telefone" => "(11) 94444-5555",
      "email" => "fernando@contato.com.br",
      "motivo_contato" => 1,
      "mensagem" => "Como consigo criar multiplos usuários para minha empresa?",
    ],
    [
      "id" => 6,
      "created_at" => null,
      "updated_at" => null,
      "nome" => "André",
      "telefone" => "(88) 95555-6666",
      "email" => "andre@contato.com.br",
      "motivo_contato" => 2,
      "mensagem" => "Parabéns pela ferramenta, estou obtendo ótimos resultados!",
    ],
    [
      "id" => 7,
      "created_at" => null,
      "updated_at" => null,
      "nome" => "Ana",
      "telefone" => "(33) 96666-7777",
      "email" => "ana@contato.com.br",
      "motivo_contato" => 3,
      "mensagem" => "Não gostei muito das cores, consigo mudar de tema?",
    ],
    [
      "id" => 8,
      "created_at" => null,
      "updated_at" => null,
      "nome" => "Helena",
      "telefone" => "(11) 97777-8888",
      "email" => "helena@contato.com.br",
      "motivo_contato" => 2,
      "mensagem" => "Consigo controlar toda a minha empresa de modo fácil e prático.",
    ],
  ]
```

Eloquent - Collection toJson
```

> SiteContato::all()->toJson();                                                                                  
= "[{"id":1,"created_at":"2024-11-28T21:28:49.000000Z","updated_at":"2024-11-28T21:28:49.000000Z","nome":"Jorge","telefone":"(11) 99123-4567","email":"jorge@contato.com.br","motivo_contato":1,"mensagem":"Ol\u00e1, gostaria de mais detalhes sobre o super gest\u00e3o"},{"id":2,"created_at":"2024-11-28T21:32:13.000000Z","updated_at":"2024-11-28T23:32:13.000000Z","nome":"Maria","telefone":"(11) 93333-4444","email":"maria@contato.com.br","motivo_contato":2,"mensagem":"Estou gostando muito do Super Gest\u00e3o"},{"id":3,"created_at":null,"updated_at":null,"nome":"Jo\u00e3o","telefone":"(88) 91111-2222","email":"joao@contato.com.br","motivo_contato":3,"mensagem":"\u00c9 muito dif\u00edcil localizar a op\u00e7\u00e3o de listar todos os produtos"},{"id":4,"created_at":null,"updated_at":null,"nome":"Rosa","telefone":"(33) 92222-3333","email":"rosa@contato.com.br","motivo_contato":1,"mensagem":"Quando custa essa aplica\u00e7\u00e3o?"},{"id":5,"created_at":null,"updated_at":null,"nome":"Fernando","telefone":"(11) 94444-5555","email":"fernando@contato.com.br","motivo_contato":1,"mensagem":"Como consigo criar multiplos usu\u00e1rios para minha empresa?"},{"id":6,"created_at":null,"updated_at":null,"nome":"Andr\u00e9","telefone":"(88) 95555-6666","email":"andre@contato.com.br","motivo_contato":2,"mensagem":"Parab\u00e9ns pela ferramenta, estou obtendo \u00f3timos resultados!"},{"id":7,"created_at":null,"updated_at":null,"nome":"Ana","telefone":"(33) 96666-7777","email":"ana@contato.com.br","motivo_contato":3,"mensagem":"N\u00e3o gostei muito das cores, consigo mudar de tema?"},{"id":8,"created_at":null,"updated_at":null,"nome":"Helena","telefone":"(11) 97777-8888","email":"helena@contato.com.br","motivo_contato":2,"mensagem":"Consigo controlar toda a minha empresa de modo f\u00e1cil e pr\u00e1tico."}]"
```

Eloquent - Collection pluck (coletar seja recuperar todos e apeans os email da collections)
```

> SiteContato::all()->pluck('email');                                                                            
= Illuminate\Support\Collection {#6155
    all: [
      "jorge@contato.com.br",
      "maria@contato.com.br",
      "joao@contato.com.br",
      "rosa@contato.com.br",
      "fernando@contato.com.br",
      "andre@contato.com.br",
      "ana@contato.com.br",
      "helena@contato.com.br",
    ],
  }
```

Eloquent - Collection pluck (coletar seja recuperar todos e apeans os email da collections com indice)
```

> SiteContato::all()->pluck('email', 'nome');                                                                    
= Illuminate\Support\Collection {#5519
    all: [
      "Jorge" => "jorge@contato.com.br",
      "Maria" => "maria@contato.com.br",
      "João" => "joao@contato.com.br",
      "Rosa" => "rosa@contato.com.br",
      "Fernando" => "fernando@contato.com.br",
      "André" => "andre@contato.com.br",
      "Ana" => "ana@contato.com.br",
      "Helena" => "helena@contato.com.br",
    ],
  }
```

Eloquent - Atualizando registros (save)
```

> use \App\Models\Fornecedor;                                                                                   
> $fornecedor = Fornecedor::find(1);                                                                            
= App\Models\Fornecedor {#5190
    id: 1,
    nome: "Fornecedore XYZ",
    site: "fornecedorxyz.com.br",
    created_at: "2024-11-29 21:46:22",
    updated_at: "2024-11-29 21:46:22",
    uf: "SP",
    email: "contato@fornecedorxyz.com.br",
  }

> $fornecedor->nome = 'Fornecedor 123';                                                                         
= "Fornecedor 123"

> $fornecedor->site = 'fornecedor123.com.br';                                                                   
= "fornecedor123.com.br"

> $fornecedor->email = 'contato@fornecedo123.com.br';                                                           
= "contato@fornecedo123.com.br"

> print_r($fornecedor);                                                                                         
App\Models\Fornecedor Object
(
    [connection:protected] => mysql
    [table:protected] => fornecedores
    [primaryKey:protected] => id
    [keyType:protected] => int
    [incrementing] => 1
    [with:protected] => Array
        (
        )

    [withCount:protected] => Array
        (
        )

    [preventsLazyLoading] =>
    [perPage:protected] => 15
    [exists] => 1
    [wasRecentlyCreated] =>
    [escapeWhenCastingToString:protected] =>
    [attributes:protected] => Array
        (
            [id] => 1
            [nome] => Fornecedor 123
            [site] => fornecedor123.com.br
            [created_at] => 2024-11-29 21:46:22
            [updated_at] => 2024-11-29 21:46:22
            [uf] => SP
            [email] => contato@fornecedo123.com.br
        )

    [original:protected] => Array
        (
            [id] => 1
            [nome] => Fornecedore XYZ
            [site] => fornecedorxyz.com.br
            [created_at] => 2024-11-29 21:46:22
            [updated_at] => 2024-11-29 21:46:22
            [uf] => SP
            [email] => contato@fornecedorxyz.com.br
        )

    [changes:protected] => Array
        (
        )

    [casts:protected] => Array
        (
        )

    [classCastCache:protected] => Array
        (
        )

    [attributeCastCache:protected] => Array
        (
        )

    [dateFormat:protected] =>
    [appends:protected] => Array
        (
        )

    [dispatchesEvents:protected] => Array
        (
        )

    [observables:protected] => Array
        (
        )

    [relations:protected] => Array
        (
        )

    [touches:protected] => Array
        (
        )

    [timestamps] => 1
    [usesUniqueIds] =>
    [hidden:protected] => Array
        (
        )

    [visible:protected] => Array
        (
        )

    [fillable:protected] => Array
        (
            [0] => nome
            [1] => site
            [2] => uf
            [3] => email
        )

    [guarded:protected] => Array
        (
            [0] => *
        )

)
= true

> $fornecedor->save();                                                                                          
= true
```

Eloquent - Atualizando registros (fill e save)
```

> $fornecedores2 = Fornecedor::find(2);                                                                         
= App\Models\Fornecedor {#5169
    id: 2,
    nome: "Fornecedor ABC",
    site: "fornecedorabc.com.br",
    created_at: "2024-11-29 22:00:59",
    updated_at: "2024-11-29 22:00:59",
    uf: "SP",
    email: "contato@fornecedorabc.com.br",
  }

> $fornecedores2->fill(['nome' => 'Fornecedor 789', 'site' => 'fornecedor789.com.br', 'email' => 'contato@fornec
edor789.com.br']);                                                                                              
= App\Models\Fornecedor {#5169
    id: 2,
    nome: "Fornecedor 789",
    site: "fornecedor789.com.br",
    created_at: "2024-11-29 22:00:59",
    updated_at: "2024-11-29 22:00:59",
    uf: "SP",
    email: "contato@fornecedor789.com.br",
  }

> $fornecedores2->save();                                                                                       
= true
```

Eloquent - Atualizando registros (where e update)
```

> use \App\Models\Fornecedor;                                                                                       
> Fornecedor::whereIn('id', [1,2])->get();                                                                          
= Illuminate\Database\Eloquent\Collection {#5195
    all: [
      App\Models\Fornecedor {#5165
        id: 1,
        nome: "Fornecedor 123",
        site: "fornecedor123.com.br",
        created_at: "2024-11-29 21:46:22",
        updated_at: "2024-12-16 21:49:55",
        uf: "SP",
        email: "contato@fornecedo123.com.br",
      },
      App\Models\Fornecedor {#5167
        id: 2,
        nome: "Fornecedor 789",
        site: "fornecedor789.com.br",
        created_at: "2024-11-29 22:00:59",
        updated_at: "2024-12-16 21:55:28",
        uf: "SP",
        email: "contato@fornecedor789.com.br",
      },
    ],
  }

> Fornecedor::whereIn('id', [1,2])->update(['nome' => 'Fornecedor Teste', 'site' => 'teste.com.br']);               
= 2
```

Eloquent - Deletando registros (delete)
```

> $contato = SiteContato::find(4);                                                                                  
= App\Models\SiteContato {#5998
    id: 4,
    created_at: null,
    updated_at: null,
    nome: "Rosa",
    telefone: "(33) 92222-3333",
    email: "rosa@contato.com.br",
    motivo_contato: 1,
    mensagem: "Quando custa essa aplicação?",
  }

> $contato->delete();                                                                                               
= true
```

Eloquent - Deletando registros (delete)
```

> SiteContato::where('id', 7)->delete();                                                                            
= 1
```

Eloquent - Deletando registros (destroy)
```

> SiteContato::destroy(5);                                                                                          
= 1
```

Eloquent - Deletando registros com SoftDelete (Necessario criar uma coluna na tabela SoftDelete - deleted_at)
```

> use \App\Models\Fornecedor;                                                                                    
> $fornecedor = Fornecedor::find(2);                                                                             
= App\Models\Fornecedor {#5206
    id: 2,
    nome: "Fornecedor Teste",
    site: "teste.com.br",
    created_at: "2024-11-29 22:00:59",
    updated_at: "2024-12-18 21:28:31",
    uf: "SP",
    email: "contato@fornecedor789.com.br",
    deleted_at: null,
  }

> $fornecedor->delete();                                                                                         
= true

> Fornecedor::all();                                                                                             
= Illuminate\Database\Eloquent\Collection {#5201
    all: [
      App\Models\Fornecedor {#5198
        id: 1,
        nome: "Fornecedor Teste",
        site: "teste.com.br",
        created_at: "2024-11-29 21:46:22",
        updated_at: "2024-12-18 21:28:31",
        uf: "SP",
        email: "contato@fornecedo123.com.br",
        deleted_at: null,
      },
    ],
  }
```

Eloquent - Remoção Forçada (mesmo com SoftDelete)
```

> $fornecedor->forceDelete();                                                                                    
= true
```

Eloquent - Selecionando registros deletados e não deletados com SoftDelete
```

> Fornecedor::withTrashed()->get();
= Illuminate\Database\Eloquent\Collection {#5315                                                            
    all: [
      App\Models\Fornecedor {#5314
        id: 1,
        nome: "Fornecedor Teste",
        site: "teste.com.br",
        created_at: "2024-11-29 21:46:22",
        updated_at: "2024-12-20 21:26:52",
        uf: "SP",
        email: "contato@fornecedo123.com.br",
        deleted_at: "2024-12-20 21:26:52",
      },
      App\Models\Fornecedor {#5313
        id: 3,
        nome: "Fornecedor 1",
        site: "fornecedor1.com.br",
        created_at: "2024-12-20 21:30:27",
        updated_at: "2024-12-20 21:30:27",
        uf: "SP",
        email: "contato@fornecedo1.com.br",
        deleted_at: null,
      },
    ],
  }
```

Eloquent - Selecionando apenas registros deletados com SoftDelete
```

> Fornecedor::onlyTrashed()->get();                                                                         
= Illuminate\Database\Eloquent\Collection {#5245
    all: [
      App\Models\Fornecedor {#5244
        id: 1,
        nome: "Fornecedor Teste",
        site: "teste.com.br",
        created_at: "2024-11-29 21:46:22",
        updated_at: "2024-12-20 21:26:52",
        uf: "SP",
        email: "contato@fornecedo123.com.br",
        deleted_at: "2024-12-20 21:26:52",
      },
    ],
  }
```

Eloquent - Restaurando registros deletados com SoftDelete
```

> $fornecedores = Fornecedor::withTrashed()->get();                                                         
= Illuminate\Database\Eloquent\Collection {#5241
    all: [
      App\Models\Fornecedor {#5240
        id: 1,
        nome: "Fornecedor Teste",
        site: "teste.com.br",
        created_at: "2024-11-29 21:46:22",
        updated_at: "2024-12-20 21:26:52",
        uf: "SP",
        email: "contato@fornecedo123.com.br",
        deleted_at: "2024-12-20 21:26:52",
      },
      App\Models\Fornecedor {#5239
        id: 3,
        nome: "Fornecedor 1",
        site: "fornecedor1.com.br",
        created_at: "2024-12-20 21:30:27",
        updated_at: "2024-12-20 21:30:27",
        uf: "SP",
        email: "contato@fornecedo1.com.br",
        deleted_at: null,
      },
    ],
  }

> $fornecedores[0]->restore();                                                                              
= true
```

Criar uma classe semente (Seeders)
```

php artisan make:seeder FornecedorSeeder
```

Executando o seeders (Todos as classes seeders srão executados)
```

php artisan db:seed
```

Executando o seeders (Executar apenas uma classe seeder especifica)
```

php artisan db:seed --class=SiteContatoSeeder
```

Factories (semeando tabelas em massa com a dependência Faker)
```

php artisan make:factory SiteContatoFactory --model=SiteContato
```

Criando um Middleware
```

php artisan make:middleware LogAcessoMiddleware
```

Listando as rotas do middleware
```

php artisan route:list -v
```

Controladores com resources, cria metodos padronizados
```

php artisan make:controller --resource ProdutoController --model=Produto
```

Listando as rotas
```

php artisan route:list
```

# Integrar Bootstrap 5 no Laravel 10 com Vite

## Requisito
Node.js (16+)

Intalando as dependencias do Node.js
```

npm install
```

Intalando bootstrap
```

npm i --save bootstrap @popperjs/core
```

Intalando sass (extenção do CSS)
```

npm i --save-dev sass
```

Startando o Vite (em outro terminal esta startando com php artisan serve)
```

npm run dev
```

# Projeto Controle de Tarefas

Criando o projeto
```

composer create-project --prefer-dist laravel/laravel app-controle-tarefas
```

Instalando o Laravel UI
```

composer require laravel/ui
```

Pacote UI e iniciando a autenticação WEB nativa do Laravel
```

php artisan ui bootstrap --auth
```

Instalar as dependecias do package.json
```

npm install
```

Executar o Bandou
```

npm run dev
```

Criando o Model e o Controller
```

php artisan make:controller --resource TarefaController --model=Tarefa
```

Criando um template de e-mail com Markdown Mailables
```

php artisan make:mail MensagemTesteMail --markdown emails.mensagem-teste
```

Usando Tinker para Enviando e-mails
```

> use App\Mail\MensagemTesteMail;
> Mail::to('dancon.alferes@gmail.com')->send(new MensagemTesteMail());
= Illuminate\Mail\SentMessage {#6270}
```

Publicando o template de e-mail
```

php artisan vendor:publish
```

Criando uma classe de notificação para Configurando o envio de e-mails 
```

php artisan make:notification RedefinirSenhaNotification
```

Instalando o pacote Laravel Excel
```

composer require maatwebsite/excel:^3.1.55

  Requisitos:
    "laravel/framework": "^11.0"
    php.ini:
      extension=gd,
      extension=zip
```

Publicar a configuração do excel
```

php artisan vendor:publish --provider="Maatwebsite\Excel\ExcelServiceProvider" --tag=config
```

Crie uma classe de exportação
```

php artisan make:export TarefasExport --model=Tarefa
```

Instalando o MPDF
```

composer require mpdf/mpdf:^8.2
```

Instalando o DOMPDF
```

composer require barryvdh/laravel-dompdf
```

Publicar o arquivo de configuração DOMPDF
```

php artisan vendor:publish --provider="Barryvdh\DomPDF\ServiceProvider"
```

# Projeto Locadora de Carros

Criando os models, controllers e migrations
```

php artisan make:model --migration --controller --resource  Marca
```

Criando os models, controllers e migrations - De forma abreviada
```

php artisan make:model -mcr  Modelo
```

Criando todos os outro recursos relacionado ao Model (models, controllers, resource, seeders, factory e migrations)
```

php artisan make:model --all Carro 
```

Criando todos os outro recursos relacionado ao Model (models, controllers, resource, seeders, factory e migrations) - De forma abreviada
```

php artisan make:model -a Cliente 
```

Comando instala o Laravel Sanctum para autenticação de token da API e cria o routes/api.phparquivo
```

php artisan install:api
```