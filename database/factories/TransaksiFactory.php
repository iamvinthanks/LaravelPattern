<?php

namespace Database\Factories;
use App\Models\Transaksi;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Transaksi>
 */
class TransaksiFactory extends Factory
{
    protected $model = Transaksi::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $data = [
            'nama_pengirim' => $this->faker->name,
            'alamat_pengirim' => $this->faker->address,
            'nama_barang' => $this->faker->name,
            'nama_penerima' => $this->faker->name,
            'alamat_penerima' => $this->faker->address,
            'kurir_id' => $this->faker->unique(true)->numberBetween(1, 3),
        ];
        if($data['kurir_id'] == 1){
            $data['harga'] = 100000;
        }elseif($data['kurir_id'] == 2){
            $data['harga'] = 120000;
        }elseif($data['kurir_id'] == 3){
            $data['harga'] = 150000;
        }
        return $data;
    }
}
