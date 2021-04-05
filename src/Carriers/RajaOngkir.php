<?php

namespace Lunantu\RajaOngkir\Carriers;

use DB;
use Config;
use Webkul\Shipping\Carriers\AbstractShipping;
use Webkul\Checkout\Models\CartShippingRate;
use Webkul\Shipping\Facades\Shipping;

use Webkul\Checkout\Facades\Cart;

class RajaOngkir extends AbstractShipping
{
    /**
     * Shipping method code
     *
     * @var string
     */
    protected $code  = 'rajaongkir';

    /**
     * Api key to access rajaongkir
     *
     * @var string
     */
    protected $key = '';

    /**
     * Endpoint rajaongkir
     *
     * @var string
     */
    private $endpoint = '';

    /**
     * Error
     *
     * @var string
     */
    private $error = '';

    public function __construct()
    {
        $this->key = core()->getConfigData('sales.carriers.rajaongkir.api_key');
        $this->endpoint = core()->getConfigData('sales.carriers.rajaongkir.endpoint');
    }

    /**
     * Returns rate for shipping method
     *
     * @return CartShippingRate|false
     */
    public function calculate()
    {
        $jenisKurirList = ['JNE', 'POS'];

        if (! $this->isAvailable()) {
            return false;
        }

        $cart = Cart::getCart();
        $objectList = [];

        if ($this->getConfigData('type') == 'per_unit') {
            // mendapatkan alamat
            $address = $cart->shipping_address;
            $kabkotAsal = DB::table('rajaongkir_kabkot')
                ->where('nama', 'like', '%' . core()->getConfigData('sales.shipping.origin.city') . '%')
                ->first();
            $kabkotTujuan = DB::table('rajaongkir_kabkot')
                ->where('nama', 'like', '%' . $address->city . '%')
                ->first();

            //  hitung berat
            $totalBerat = 0;
            foreach($cart->items as $item){
                $totalBerat += $item->quantity * (int)$item->total_weight * 1000;
            }

            foreach ($jenisKurirList as $jenisKurir) {
                // panggil api
                $res = $this->cost($kabkotAsal->id, $kabkotTujuan->id, $totalBerat, strtolower($jenisKurir));

                $layananList = $res[0]->costs;

                foreach ($layananList as $layanan) {
                    $object = new CartShippingRate;

                    $object->carrier = 'rajaongkir';
                    $object->carrier_title = $this->getConfigData('title');
                    $object->method = 'rajaongkir_' . strtolower($jenisKurir) . '_' . strtolower($layanan->service);
                    $object->method_title = $jenisKurir . ' ' . $layanan->service;
                    $object->method_description = $layanan->cost[0]->etd . ' Hari.';
                    $object->price = $layanan->cost[0]->value;
                    $object->base_price = $layanan->cost[0]->value;

                    array_push($objectList, $object);
                    unset($object);
                }
            }
        } else {
            $object = new CartShippingRate;

            $object->carrier = 'rajaongkir';
            $object->carrier_title = $this->getConfigData('title');
            $object->method = 'rajaongkir_flat';
            $object->method_title = 'Biaya Flat';
            $object->method_description = 'Kurir akan dipilihkan.';
            $object->price = core()->convertPrice($this->getConfigData('default_rate') ?? 0);
            $object->base_price = $this->getConfigData('default_rate') ?? 0;

            array_push($objectList, $object);
            unset($object);
        }

        return $objectList;
    }

    /**
     * Membuat request ke rajaongkir api
     *
     * @return object
     */
    private function cost($origin, $destination, $weight, $courier)
    {
        $url = $this->endpoint . '/cost';
        
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => 'origin='.$origin.'&destination='.$destination.'&weight='.$weight.'&courier='.$courier,
            CURLOPT_HTTPHEADER => array(
                'key: ' . $this->key,
                'Content-Type: application/x-www-form-urlencoded'
            ),
        ));

        $response = curl_exec($curl);
        curl_close($curl);

        $rajaongkir = json_decode($response)->rajaongkir;

        if ($rajaongkir->status->code == 400) {
            $this->error = $rajaongkir->status->description;
        }

        if ($rajaongkir->status->code == 200) {
            return $rajaongkir->results;
        }
    }
}
