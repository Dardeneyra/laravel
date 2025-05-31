<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\ArticleRequest;
use App\Http\Resources\ArticleResources;
use App\Models\ArticleCRUD;
use Illuminate\Http\Response;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        return ArticleResources::collection(ArticleCRUD::all());
    }

    public function store(ArticleRequest $request)
    {
        $article = ArticleCRUD::create($request->validated());
        return response()->json(ArticleCRUD::all(), Response::HTTP_CREATED);
    }

    public function show(ArticleCRUD $article)
        {
        return new ArticleResources($article);
        }

        public function update(ArticleCRUD $request, ArticleCRUD $article)
            {
            $article->update($request->validated());
            return response()->json($article, Response::HTTP_OK);
            }

            public function destroy(ArticleCRUD $article)
            {
                $article->delete();
                return response()->json(null, Response::HTTP_NO_CONTENT);
            }
}
