<?php

namespace App\Http\Controllers\Coinllery;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\Controller;

class Coin extends Controller {

    public function coin_sdk_metadata(Request $request, string $coinAddress) {

        $coinMetaData = Http::get('https://api-sdk.zora.engineering/coin?address='.$coinAddress);
        $coinMetaDataObj = $coinMetaData->json('zora20Token');

        /*
        $response = (object)[
            'id'=>$coinMetaDataObj['id'],
            'address'=>'0x1a4f5fe6e37bc765839cefb01ca1ab4a39ed6758',
            'uri'=>'https://zora.co/coin/base:0x1a4f5fe6e37bc765839cefb01ca1ab4a39ed6758',
            'creator'=>'Zak Krevitt',
            'creator_username'=>'zak_krevitt',
            'creator_url'=>'https://zora.co/@zak_krevitt',
            'creator_image'=>'https://scontent-iad4-1.choicecdn.com/-/rs:fill:240:240/g:ce/f:webp/aHR0cHM6Ly9tYWdpYy5kZWNlbnRyYWxpemVkLWNvbnRlbnQuY29tL2lwZnMvYmFmeWJlaWc0cnNvNG55MnZreDVlcms2cnB0YWQ3NGQ3eHltd3pmemJkM3o3eHd3bzU0bjI1cno2bnE',
            'title'=>'Arbitrage',
            'description'=>'',
            'image_url'=>'https://scontent-iad4-1.choicecdn.com/-/rs:fill:2000:3584/g:ce/f:webp/aHR0cHM6Ly9tYWdpYy5kZWNlbnRyYWxpemVkLWNvbnRlbnQuY29tL2lwZnMvYmFmeWJlaWJtenhmZ3N2N3F2YTJ5ZXZ5NWtyZXlzMm1ydzRrNGNzc3Rzcjdma3lpaGFxd2ZhNXV2cnE',
            'coin_cap'=>429.91,
            'coin_vol'=>0,
            'creator_earn'=>0.09
        ];
        */

        $response = (object)[
            'id' => $coinMetaDataObj['id'],
            'address' => $coinMetaDataObj['address'],
            'uri' => 'https://zora.co/coin/base:' . $coinMetaDataObj['address'],
            'creator' => $coinMetaDataObj['creatorProfile']['handle'] ?? '',
            'creator_username' => $coinMetaDataObj['creatorProfile']['handle'] ?? '',
            'creator_url' => 'https://zora.co/@' . ($coinMetaDataObj['creatorProfile']['handle'] ?? ''),
            'creator_image' => $coinMetaDataObj['creatorProfile']['avatar']['previewImage']['small'] ?? '',
            'title' => $coinMetaDataObj['name'],
            'description' => $coinMetaDataObj['description'],
            'image_url' => $coinMetaDataObj['mediaContent']['previewImage']['medium'] ?? '',
            'coin_cap' => (float)$coinMetaDataObj['marketCap'],
            'coin_vol' => (float)$coinMetaDataObj['volume24h'],
            'creator_earn' => (float)(round($coinMetaDataObj['creatorEarnings'][0]['amount']['amountDecimal'],2) ?? 0),
        ];

        return response()->json($response);
        
    }
    
}
