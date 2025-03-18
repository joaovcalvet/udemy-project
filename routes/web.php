<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\SobreNosController;
use App\Http\Controllers\PrincipalController;

//Rotas Iniciais
Route::name('site.')->group(function(): void {
    Route::get('/', [PrincipalController::class, 'principal'])->name('index');
    Route::get('/contato', [ContatoController::class, 'contato'])->name('contato');
    Route::get('/sobre-nos', [SobreNosController::class, 'sobreNos'])->name('sobrenos');
    Route::get('/login', function(): string { return "Login"; })->name('login');
});

//Rotas App
Route::prefix('/app')->name('app.')->group(function(): void {
    Route::get('/clientes', function(): string { return "Clientes"; })->name('clientes');
    Route::get('/fornecedores', function(): string { return "Fornecedores"; })->name('fornecedores');
    Route::get('/produtos', function(): string { return "Produtos"; })->name('produtos');
});

//Rota de Fallback
Route::fallback(function(): mixed {
    return "A rota acessada não existe. <a href='".route('site.index')."'>Clique aqui</a> para voltar a Home.";
});

//Rotas de Teste
//Redirecionamento de Rotas
// Route::get('/rota1', function(): string {
//     return "Você está na rota 1!";
// })->name("site.rota1");

// Route::redirect('/rota2', '/rota1'); // Redirecionamento pela url da rota
// Route::get('/rota2', function(): mixed {
//     echo "Você está na rota 2!";

//     return to_route('site.rota1'); // Redirecionamento com o nome da rota
//     return redirect()->route('site.rota1'); // Redirecionamento com o nome da rota completo
// });

//Rota com Parâmetro e Parâmetro Opcional
// Route::get(uri: 'contato/{nome}/{mensagem?}', action: [ContatoController::class, 'contatoParam']);

// //Rota com Parâmetro com Regex
// Route::get(uri: 'contato/{nome}/{idade}/{categoria_id}', action: 
//     function(string $nome, int $idade, int $categoria_id): string
//     {
//         return "Contato com regex!\nBem-vindo(a) $nome ($idade) - $categoria_id";
//     }
// )->where(name: ["nome" => "[A-Za-z]+", "categoria_id" => "[0-9]+", "idade" => "[0-9]+"]);