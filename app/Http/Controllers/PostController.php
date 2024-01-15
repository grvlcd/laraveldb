<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        /*
        * first(), find() and value() returns object
        */

        // $post = DB::table('posts')
        //     ->find(1000);

        /* pluck returns array of data with the specified column */
        // $titles = DB::table('posts')
        //     ->pluck('title');


        // $posts = DB::table('posts')
        //     ->select('is_published');

        // $added = $posts->addSelect('description')->get();

        // dd($post);

        /*
            insert()
            insertOrIgnore()
             - ignore if data exists
            upsert()
             - insert update to database
            insertGetId()
             - insert data and returns id
        */

        /*
            update()
            chains:
                where()
                orWhere()
            increment()
            decrement()
             - accepts second parameter as step
             - accepts array as first parameter to update multiple columns
            updateOrInsert()
             - update data or insert if data is not equal to value
             $posts = DB::table('posts')
                ->updateOrInsert([
                    'excerpt' => 'Laravel',
                    'description' => 'Laravel',
                ], ['id' => 1005]);
        */

        /*
            delete()
            chains:
                where()
        */

        /*
            aggregate methods:
            count()
            sum()
            max()
            min()
            avg()
        */

        /*
            exists()
            doesntExists()
        */

        /*
            whereNot()
            orWhereNot()
        */

        /*
            whereBetween(column, array)
            whereNotBetween(column, array)
        */

        $post = DB::table('posts')->upsert([
            [
                'user_id' => 1,
                'title' => 'Inserted through the DB facade 2',
                'slug' => 'inserted-through-the-db-facade-2',
                'excerpt' => 'excerpt',
                'description' => 'description',
                'is_published' => true,
                'min_to_read' => 6
            ]
        ], ['title', 'slug']);

        dd($post);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
