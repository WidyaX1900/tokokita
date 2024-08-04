<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use App\Http\Requests\StoreShopRequest;
use App\Http\Requests\UpdateShopRequest;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = '9879087';
        $shops = Shop::where('user_id', $user)->orderBy('id', 'desc')->get();

        if (count($shops) <= 0) return redirect('/');

        return view('shop.index', [
            'shops' => $shops
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("shop.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreShopRequest $request)
    {
        $file = $request->file('photo');
        $filename = '';
        $uuid = rand();

        if ($file !== null) {
            $filename = time();
            $filename .= '.';
            $filename .= $file->extension();

            $file->storeAs('logos', $filename);
            $insert = Shop::create([
                'uuid' => $uuid,
                'name' => $request->name,
                'email' => $request->email,
                'photo' => $filename,
                'rating' => 0,
                'user_id' => $request->user_id
            ]);

            if ($insert) {
                $request->session()->flash('message', [
                    'color' => 'success',
                    'content' => 'New store added successfully'
                ]);
                return redirect('/shop');
            }
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Shop $shop, $id)
    {
        $shop = $shop->where('uuid', $id)->get();
        
        if (count($shop) <= 0) return redirect('/shop');
        return view('shop.show', [
            'shop' => $shop[0]
        ]);        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Shop $shop, $id)
    {
        $shop = $shop->where('uuid', $id)->get();

        if (count($shop) <= 0) return redirect('/shop');
        return view('shop.edit', [
            'shop' => $shop[0]
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateShopRequest $request, Shop $shop)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Shop $shop)
    {
        //
    }
}
