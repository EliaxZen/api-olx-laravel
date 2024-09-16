<?php

use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\StatesController;
use App\Http\Controllers\UserController;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Route;

Route::get('/ping', function (): JsonResponse {
    return response()->json(['Pong' => true]);
});

Route::get('/states', [StatesController::class, 'index']);
Route::get('/categories', [CategoriesController::class, 'index']);

Route::post('/user/signup', [UserController::class, 'signup']);
Route::post('/user/signin', [UserController::class, 'signin']);
Route::post('/user/me', [UserController::class, 'me']);



/**
 * - Rota de Utilidade
 * [X] - /ping - Responde com Pong
 * ----------------------------------------------------------------
 * - Rotas de Configuração Geral
 * ----------------------------------------------------------------
 * [X] - /states - Listar os Estados
 * [X] - /categories - Listar as categorias do sistema
 * [X] - Criar as seeders para os estados e categorias
 * ----------------------------------------------------------------
 * - Mensagens de erro devem conter:
 * error: Mensagem descritiva do erro, exemplo:
 * {
 *  error: 'Usuário inválido'
 * }
 * ----------------------------------------------------------------
 * - Sucesso:
 * Deve conter um campo "error" com o valor nulo ou vazio, exemplo:
 * {
 *  error: ''
 * }
 * ----------------------------------------------------------------
 * - Rotas de Autenticação - Autenticação via Token
 * ----------------------------------------------------------------
 * [ ] - /user/signin - Login do Usuário
 * [ ] - /user/signup - Registro do Usuário
 * [ ] - /user/me - Informações do Usuário Logado
 * ----------------------------------------------------------------
 * - Rotas de Advertises
 * [ ] - /ad/list - Listar todos os anúncios
 * [ ] - /ad/:id - Dados de um anúncio único
 * [ ] - /ad/add - Adicionar um novo anúncio
 * [ ] - /ad/:id(PUT) - Alterar anúncio publicado
 * [ ] - /ad/:id(delete) - Deletar um anúncio
 * [ ] - /ad/:id/:image - Deletar imagem de um anúncio
 */
